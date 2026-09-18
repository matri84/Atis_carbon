<?php

namespace core;

class JalaliDate
{
    public static function toJalali(int $gy, int $gm, int $gd): array
    {
        $gDaysInMonth = [
            31,
            28,
            31,
            30,
            31,
            30,
            31,
            31,
            30,
            31,
            30,
            31
        ];

        $jDaysInMonth = [
            31,
            31,
            31,
            31,
            31,
            31,
            30,
            30,
            30,
            30,
            30,
            29
        ];

        $gy -= 1600;
        $gm -= 1;
        $gd -= 1;

        $gDayNo = 365 * $gy
            + intdiv($gy + 3, 4)
            - intdiv($gy + 99, 100)
            + intdiv($gy + 399, 400);

        for ($i = 0; $i < $gm; $i++) {
            $gDayNo += $gDaysInMonth[$i];
        }

        if (
            $gm > 1 &&
            (
                ($gy % 4 == 0 && $gy % 100 != 0) ||
                ($gy % 400 == 0)
            )
        ) {
            $gDayNo++;
        }

        $gDayNo += $gd;

        $jDayNo = $gDayNo - 79;

        $jNp = intdiv($jDayNo, 12053);
        $jDayNo %= 12053;

        $jy = 979 + (33 * $jNp) + (4 * intdiv($jDayNo, 1461));

        $jDayNo %= 1461;

        if ($jDayNo >= 366) {
            $jy += intdiv($jDayNo - 1, 365);
            $jDayNo = ($jDayNo - 1) % 365;
        }

        $jm = 0;

        while (
            $jm < 11 &&
            $jDayNo >= $jDaysInMonth[$jm]
        ) {
            $jDayNo -= $jDaysInMonth[$jm];
            $jm++;
        }

        $jd = $jDayNo + 1;

        return [
            $jy,
            $jm + 1,
            $jd
        ];
    }

    public static function toGregorian(int $jy, int $jm, int $jd): array
    {
        $jy -= 979;
        $jm -= 1;
        $jd -= 1;

        $jDayNo = 365 * $jy
            + intdiv($jy, 33) * 8
            + intdiv(($jy % 33) + 3, 4);

        for ($i = 0; $i < $jm; $i++) {
            $jDayNo += ($i < 6) ? 31 : 30;
        }

        $jDayNo += $jd;

        $gDayNo = $jDayNo + 79;

        $gy = 1600 + (400 * intdiv($gDayNo, 146097));

        $gDayNo %= 146097;

        $leap = true;

        if ($gDayNo >= 36525) {
            $gDayNo--;

            $gy += 100 * intdiv($gDayNo, 36524);

            $gDayNo %= 36524;

            if ($gDayNo >= 365) {
                $gDayNo++;
            } else {
                $leap = false;
            }
        }

        $gy += 4 * intdiv($gDayNo, 1461);

        $gDayNo %= 1461;

        if ($gDayNo >= 366) {
            $leap = false;

            $gDayNo--;

            $gy += intdiv($gDayNo, 365);

            $gDayNo %= 365;
        }

        $gDaysInMonth = [
            31,
            28,
            31,
            30,
            31,
            30,
            31,
            31,
            30,
            31,
            30,
            31
        ];

        $gm = 0;

        while (
            $gm < 11 &&
            $gDayNo >= $gDaysInMonth[$gm] + (
                $gm == 1 && $leap ? 1 : 0
            )
        ) {
            $gDayNo -= $gDaysInMonth[$gm] + (
                $gm == 1 && $leap ? 1 : 0
            );

            $gm++;
        }

        $gd = $gDayNo + 1;

        return [
            $gy,
            $gm + 1,
            $gd
        ];
    }

    public static function today(string $separator = '/'): string
    {
        $date = self::toJalali(
            (int) date('Y'),
            (int) date('m'),
            (int) date('d')
        );

        return $date[0]
            . $separator
            . str_pad($date[1], 2, '0', STR_PAD_LEFT)
            . $separator
            . str_pad($date[2], 2, '0', STR_PAD_LEFT);
    }

    public static function format(
        string $date,
        string $separator = '/'
    ): string {
        $timestamp = strtotime($date);

        if ($timestamp === false) {
            return '';
        }

        $jalali = self::toJalali(
            (int) date('Y', $timestamp),
            (int) date('m', $timestamp),
            (int) date('d', $timestamp)
        );

        return $jalali[0]
            . $separator
            . str_pad($jalali[1], 2, '0', STR_PAD_LEFT)
            . $separator
            . str_pad($jalali[2], 2, '0', STR_PAD_LEFT);
    }

    public static function year(string|int $year = ''): int
    {
        if ($year === '') {
            $year = (int) date('Y');
        }

        $year = (int) $year;

        $jalali = self::toJalali($year, 1, 1);

        return $jalali[0];
    }
}
