-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 19, 2026 at 07:19 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atis_carbon`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `slug` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `image` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `created_at`, `image`, `content`) VALUES
(1, 'توسعه وب مدرن و نقش آن در کسب‌وکارها', 'help-all-digital', '2026-09-18 15:20:18', 'fa-newspaper', '<p>وب‌سایت امروزه یکی از مهم‌ترین ابزارهای ارتباطی میان یک کسب‌وکار و مشتریان آن است. یک وب‌سایت حرفه‌ای فقط محلی برای نمایش اطلاعات نیست، بلکه می‌تواند بخشی از فرآیند فروش، پشتیبانی، معرفی خدمات و ارتباط با مشتری را بر عهده بگیرد.</p>\n\n<h2>چرا طراحی وب‌سایت اهمیت دارد؟</h2>\n\n<p>بسیاری از کاربران قبل از خرید یا استفاده از یک خدمت، ابتدا نام کسب‌وکار را در اینترنت جستجو می‌کنند. حضور مناسب در فضای وب می‌تواند باعث شود مشتری اطلاعات موردنیاز خود را سریع‌تر پیدا کند و شناخت بهتری از خدمات یا محصولات داشته باشد.</p>\n\n<h3>اولین برخورد کاربر با برند</h3>\n\n<p>صفحه اصلی وب‌سایت معمولاً اولین نقطه تماس بسیاری از کاربران با یک برند است. طراحی مناسب، سرعت بالا و ساختار منظم می‌توانند تجربه کاربر را بهتر کنند و مسیر دسترسی به اطلاعات مهم را کوتاه‌تر کنند.</p>\n\n<h3>اهمیت سرعت سایت</h3>\n\n<p>سرعت بارگذاری یکی از عوامل مهم در تجربه کاربری است. سایتی که صفحات آن با تأخیر زیاد نمایش داده می‌شوند، ممکن است باعث شود کاربر قبل از مشاهده محتوای اصلی صفحه را ترک کند.</p>\n\n<h2>فناوری‌های مورد استفاده در توسعه وب</h2>\n\n<p>توسعه وب شامل بخش‌های مختلفی است و معمولاً از چند فناوری در کنار یکدیگر استفاده می‌شود.</p>\n\n<ul> <li>HTML برای ساختار صفحات</li> <li>CSS برای طراحی و ظاهر سایت</li> <li>JavaScript برای ایجاد تعامل در صفحات</li> <li>PHP و Laravel برای توسعه بخش سمت سرور</li> <li>MySQL برای ذخیره و مدیریت اطلاعات</li> </ul>\n\n<h2>جمع‌بندی</h2>\n\n<p>یک وب‌سایت موفق ترکیبی از طراحی مناسب، عملکرد صحیح، سرعت مطلوب و محتوای کاربردی است. انتخاب فناوری مناسب نیز باید بر اساس نیاز واقعی پروژه انجام شود و نه صرفاً بر اساس محبوبیت یک تکنولوژی.</p>'),
(2, 'آشنایی با Laravel و کاربرد آن در توسعه وب', 'best-map-for-apply', '2026-09-18 15:45:44', 'fa-cloud', '<p>Laravel یکی از فریم‌ورک‌های محبوب زبان PHP است که ابزارهای مختلفی برای ساخت برنامه‌های تحت وب در اختیار توسعه‌دهندگان قرار می‌دهد. هدف اصلی Laravel ساده‌تر کردن فرآیند توسعه و ایجاد ساختاری منظم برای پروژه‌های PHP است.</p>\n\n<h2>Laravel چیست؟</h2>\n\n<p>Laravel یک فریم‌ورک سمت سرور است که بر پایه PHP ساخته شده است. این فریم‌ورک امکاناتی مانند مسیریابی، کار با دیتابیس، احراز هویت، مدیریت درخواست‌ها و ساخت API را در اختیار برنامه‌نویس قرار می‌دهد.</p>\n\n<h3>ساختار MVC</h3>\n\n<p>یکی از مفاهیم مهم در Laravel، معماری MVC است. در این ساختار بخش‌های مختلف برنامه از یکدیگر جدا می‌شوند و هر قسمت وظیفه مشخصی دارد.</p>\n\n<h3>Model</h3>\n\n<p>Model معمولاً مسئول ارتباط با داده‌ها و منطق مربوط به آن‌هاست. برای مثال می‌توان از یک Model برای کار با اطلاعات کاربران یا محصولات استفاده کرد.</p>\n\n<h3>View</h3>\n\n<p>View وظیفه نمایش اطلاعات به کاربر را بر عهده دارد. در Laravel معمولاً برای ساخت Viewها از Blade استفاده می‌شود.</p>\n\n<h3>Controller</h3>\n\n<p>Controller بین درخواست کاربر، منطق برنامه و View ارتباط ایجاد می‌کند. این بخش می‌تواند اطلاعات موردنیاز را دریافت کرده و نتیجه مناسب را به کاربر برگرداند.</p>\n\n<h2>مزایای استفاده از Laravel</h2>\n\n<p>Laravel امکانات زیادی دارد که باعث می‌شود توسعه پروژه‌های PHP ساختارمندتر شود.</p>\n\n<ol> <li>سیستم قدرتمند Routing</li> <li>ORM به نام Eloquent</li> <li>سیستم Migration</li> <li>امکانات مناسب برای ساخت API</li> <li>سیستم Template Engine با نام Blade</li> </ol>\n\n<blockquote> استفاده از یک فریم‌ورک مناسب می‌تواند زمان توسعه را کاهش دهد و ساختار پروژه را منظم‌تر کند. </blockquote>\n\n<h2>Laravel برای چه پروژه‌هایی مناسب است؟</h2>\n\n<p>از Laravel می‌توان برای ساخت انواع پروژه‌های تحت وب استفاده کرد؛ از وب‌سایت‌های شرکتی و فروشگاه‌های اینترنتی گرفته تا پنل‌های مدیریتی، سامانه‌های اختصاصی و APIهای مورد استفاده در اپلیکیشن‌ها.</p>\n\n<h2>نتیجه‌گیری</h2>\n\n<p>Laravel با ارائه مجموعه‌ای از ابزارهای آماده، بسیاری از کارهای تکراری در توسعه PHP را ساده می‌کند. یادگیری صحیح مفاهیم پایه PHP در کنار Laravel می‌تواند درک بهتر ساختار پروژه‌ها و توسعه برنامه‌های حرفه‌ای را امکان‌پذیر کند.</p>'),
(3, 'اهمیت امنیت در طراحی وب‌سایت', 'deside-to-data', '2026-10-16 15:41:59', 'fa-chart-line', '<p>امنیت یکی از بخش‌های مهم هر وب‌سایت و برنامه تحت وب است. اطلاعات کاربران، داده‌های تجاری و اطلاعات موجود در پایگاه داده باید به شکلی مناسب محافظت شوند تا احتمال سوءاستفاده کاهش پیدا کند.</p>\n\n<h2>امنیت وب‌سایت از کجا شروع می‌شود؟</h2>\n\n<p>امنیت یک پروژه از همان مراحل ابتدایی طراحی و توسعه باید مورد توجه قرار بگیرد. بسیاری از مشکلات امنیتی نتیجه استفاده نادرست از ورودی‌های کاربر، تنظیمات نامناسب سرور یا نگهداری نادرست اطلاعات حساس هستند.</p>\n\n<h3>اعتبارسنجی اطلاعات ورودی</h3>\n\n<p>هر اطلاعاتی که از کاربر دریافت می‌شود باید قبل از استفاده بررسی شود. این موضوع شامل فرم‌های ثبت‌نام، ورود، جستجو و سایر فرم‌های موجود در سایت است.</p>\n\n<h3>جلوگیری از SQL Injection</h3>\n\n<p>SQL Injection یکی از حملات شناخته‌شده در برنامه‌های تحت وب است. استفاده صحیح از Prepared Statement و پارامترهای قابل Bind می‌تواند از ورود مستقیم داده‌های مخرب به ساختار کوئری جلوگیری کند.</p>\n\n<h3>مدیریت رمز عبور</h3>\n\n<p>رمز عبور کاربران نباید به صورت متن ساده در پایگاه داده ذخیره شود. برنامه باید از روش‌های استاندارد Hash کردن رمز عبور استفاده کند تا در صورت دسترسی غیرمجاز به داده‌ها، رمزهای اصلی کاربران قابل مشاهده نباشند.</p>\n\n<h2>چند اصل مهم امنیتی</h2>\n\n<ul> <li>اعتبارسنجی تمام ورودی‌های کاربر</li> <li>استفاده از HTTPS</li> <li>ذخیره نکردن رمز عبور به صورت متن ساده</li> <li>استفاده از Prepared Statement</li> <li>به‌روزرسانی منظم نرم‌افزارها و وابستگی‌ها</li> <li>محدود کردن دسترسی کاربران بر اساس نقش</li> </ul>\n\n<h2>امنیت فقط مربوط به بک‌اند نیست</h2>\n\n<p>امنیت یک وب‌سایت به یک بخش خاص محدود نمی‌شود. Frontend، Backend، پایگاه داده، سرور و حتی نحوه مدیریت حساب‌های کاربری می‌توانند روی امنیت کلی سیستم تأثیر داشته باشند.</p>\n\n<h2>جمع‌بندی</h2>\n\n<p>امنیت باید به عنوان بخشی از فرآیند توسعه در نظر گرفته شود، نه کاری که پس از پایان پروژه انجام شود. رعایت اصول پایه امنیتی می‌تواند بسیاری از مشکلات رایج را کاهش دهد و اعتماد کاربران به یک وب‌سایت را افزایش دهد.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `email`, `message`) VALUES
(1, 'رستا عطری', 'rasta@gmail.com', 'سلام من واقعا از کاری که شما انجام دادی راضی هستم'),
(2, 'محمد عطری', 'mohamadatri32@gmail.com', 'درود خداوند بر شما. لطفا در بخش مقالات، مقالات بیشتری را منتشر کنید. ممنون'),
(3, 'رضا سنایی فرد', 'resasanayi90@gmail.com', 'ببخشید شما به چه دلیلی سایت خودتون رو به این شکل ساخته‌اید؟ ممنون میشم پاسخ بدید'),
(4, 'ماهرخ علی‌یاری', 'mahrokh@gmail.com', 'پروژه‌ای که برای من انجام دادید، خیلی عالی بود. من حتما برای کارهای دیگر هم روی شما حساب خواهم کرد.');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `category` text NOT NULL,
  `icon` text NOT NULL,
  `date` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `name`, `category`, `icon`, `date`) VALUES
(1, 'پلتفرم مدیریت هوشمند منابع', 'نرم‌افزار سازمانی', 'fa-laptop-code', '2024'),
(2, 'سیستم مانیتورینگ صنعتی IoT', 'اینترنت اشیاء', 'fa-industry', '2023'),
(3, 'فروشگاه آنلاین یکپارچه', 'تجارت الکترونیک', 'fa-store', '2024'),
(4, 'داشبورد هوش تجاری مالی', 'تحلیل داده', 'fa-chart-pie', '2025'),
(5, 'اپلیکیشن خدمات شهروندی', 'موبایل', 'fa-mobile-alt', '2026'),
(6, 'مهاجرت زیرساخت به ابر', 'Cloud & DevOps', 'fa-server', '2027');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `icon` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `icon`, `content`) VALUES
(1, 'مشاوره تحول دیجیتال', 'fa-lightbulb', 'تحلیل وضعیت فعلی، طراحی نقشه راه دیجیتال، اولویت‌بندی پروژه‌ها و همراهی در پیاده‌سازی استراتژی‌های نوآورانه.'),
(2, 'توسعه نرم‌افزار سفارشی', 'fa-code', 'طراحی و ساخت سامانه‌های اختصاصی، اپلیکیشن‌های وب و موبایل با معماری مدرن، امن و مقیاس‌پذیر.'),
(3, 'زیرساخت ابری و DevOps', 'fa-cloud', 'مهاجرت به ابر، پیاده‌سازی CI/CD، مانیتورینگ، امنیت و بهینه‌سازی هزینه‌های زیرساختی.'),
(4, 'تحلیل داده و هوش تجاری', 'fa-chart-line', 'طراحی انبار داده، داشبوردهای مدیریتی، پیش‌بینی با یادگیری ماشین و تبدیل داده به تصمیم.'),
(5, 'امنیت و انطباق', 'fa-shield-alt', 'ارزیابی آسیب‌پذیری، پیاده‌سازی استانداردهای امنیتی، انطباق با مقررات و حفاظت از داده‌های حساس.'),
(6, 'نگهداری و پشتیبانی', 'fa-cogs', 'پشتیبانی ۲۴/۷، به‌روزرسانی مستمر، بهینه‌سازی عملکرد و تضمین پایداری سیستم‌های حیاتی.');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `side` text NOT NULL,
  `description` text NOT NULL,
  `icon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `side`, `description`, `icon`) VALUES
(1, 'دکتر امیر حسینی', 'مدیرعامل', 'بیش از ۱۵ سال تجربه در رهبری پروژه‌های بزرگ فناوری و استراتژی دیجیتال.', 'fa-user-tie'),
(2, 'مهندس نازنین کریمی', 'مدیر فنی', 'معمار نرم‌افزار با تخصص در سیستم‌های مقیاس‌پذیر و معماری ابری.', 'fa-laptop-code'),
(3, 'مهندس رضا محمدی\r\n', 'مدیر داده و هوش مصنوعی', 'متخصص تحلیل داده و یادگیری ماشین با تمرکز بر راه‌حل‌های کاربردی کسب‌وکار.\r\n\r\n', 'fa-chart-bar'),
(4, 'سارا احمدی\r\n', 'مدیر تجربه مشتری', 'مسئول تضمین رضایت مشتریان و ایجاد روابط بلندمدت مبتنی بر اعتماد.\r\n\r\n', 'fa-handshake'),
(5, 'مهندس محمد عطری', 'توسعه دهنده سایت', 'مسئول توسعه سایت، رفع ایرادات، سایت و همچنین هدایت تیم توسعه سایت', 'fa-laptop-code');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
