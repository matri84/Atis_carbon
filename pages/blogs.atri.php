<section class="page-header">
    <div class="container">
        <h1>مقالات و بلاگ</h1>
        <div class="breadcrumb">
            <a href="<?= url('/') ?>">صفحه اصلی</a>
            <span>/</span>
            <span>بلاگ</span>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-header fade-up">
            <span class="subtitle">دانش و بینش</span>
            <h2>آخرین مقالات ما</h2>
            <p>مقالات تخصصی در حوزه فناوری، تحول دیجیتال و نوآوری</p>
        </div>

        <div class="services-grid">
            <?php foreach(\core\DB::get("blogs") as $blog): ?>
            <article class="service-card fade-up" style="padding: 0; overflow: hidden;">
                <div style="height: 200px; background: linear-gradient(135deg, var(--primary), var(--primary-light)); display: flex; align-items: center; justify-content: center; color: rgba(255,255,255,0.3); font-size: 3rem;">
                    <i class="fas <?= $blog["image"] ?>"></i>
                </div>
                <div style="padding: 28px;">
                    <div style="display: flex; gap: 12px; font-size: 0.85rem; color: var(--gray-600); margin-bottom: 12px;">
                        <span><i class="far fa-calendar"></i><?= \core\JalaliDate::format($blog["created_at"]) ?></span>
                    </div>
                    <h3 style="margin-bottom: 12px;">
                        <a href="<?= url("/blog/".$blog["slug"]) ?>" style="color: var(--primary);">
                           <?= $blog["title"] ?>
                        </a>
                    </h3>
                    <p style="color: var(--gray-600); font-size: 0.95rem; margin-bottom: 20px;">
                       <?= mb_substr($blog["content"],0,80) ?>...
                    </p>
                    <a href="<?= url("/blog/".$blog["slug"]) ?>" style="color: var(--accent); font-weight: 600;">
                        ادامه مطلب <i class="fas fa-arrow-left" style="font-size: 0.8rem;"></i>
                    </a>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>