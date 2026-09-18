<?php
$slug = $slug ?? '';
$blog = \core\DB::getBySlug("blogs",$slug);
?>

<section class="page-header">
    <div class="container">
        <h1><?= $blog["title"] ?></h1>
        <div class="breadcrumb">
            <a href="<?= url('/') ?>">صفحه اصلی</a>
            <span>/</span>
            <a href="<?= url('/blogs') ?>">بلاگ</a>
            <span>/</span>
            <span><?= $blog["title"] ?></span>
        </div>
    </div>
</section>

<section class="section">
    <div class="container" style="max-width: 860px;">
        <article class="fade-up">
            <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 32px; color: var(--gray-600); font-size: 0.95rem;">
                <span><i class="far fa-calendar-alt"></i><?= \core\JalaliDate::format($blog["created_at"]) ?></span>
            </div>

            <div style="height: 380px; background: linear-gradient(135deg, var(--primary), var(--primary-light)); border-radius: var(--radius); display: flex; align-items: center; justify-content: center; color: rgba(255,255,255,0.25); font-size: 5rem; margin-bottom: 40px;">
                <i class="fas <?= $blog["image"] ?>"></i>
            </div>

            <div style="font-size: 1.1rem; line-height: 2; color: var(--gray-700);">
                <?= $blog["content"] ?>
            </div>
        </article>
    </div>
</section>