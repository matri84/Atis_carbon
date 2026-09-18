<section class="page-header">
    <div class="container">
        <h1>صفحه پیدا نشد</h1>
        <div class="breadcrumb">
            <a href="<?= url('/') ?>">صفحه اصلی</a>
            <span>/</span>
            <span>۴۰۴</span>
        </div>
    </div>
</section>

<section class="section" style="text-align: center; padding: 100px 0;">
    <div class="container fade-up">
        <div style="font-size: 8rem; font-weight: 800; color: var(--accent); line-height: 1; margin-bottom: 20px;">
            ۴۰۴
        </div>
        <h2 style="font-size: 2rem; color: var(--primary); margin-bottom: 16px;">
            متأسفیم! صفحه مورد نظر پیدا نشد
        </h2>
        <p style="color: var(--gray-600); max-width: 500px; margin: 0 auto 40px; font-size: 1.1rem;">
            ممکن است آدرس اشتباه باشد یا صفحه حذف شده باشد. می‌توانید به صفحه اصلی بازگردید یا از منو استفاده کنید.
        </p>
        <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
            <a href="<?= url('/') ?>" class="btn btn-primary">
                <i class="fas fa-home"></i>
                بازگشت به صفحه اصلی
            </a>
            <a href="<?= url('/contact') ?>" class="btn btn-outline" style="border-color: var(--primary); color: var(--primary);">
                <i class="fas fa-envelope"></i>
                تماس با ما
            </a>
        </div>
    </div>
</section>