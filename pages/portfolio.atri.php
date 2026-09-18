  <section class="page-header">
    <div class="container">
      <h1>نمونه کارها</h1>
      <div class="breadcrumb">
        <a href="<?= url("/") ?>">صفحه اصلی</a>
        <span>/</span>
        <span>نمونه کارها</span>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-header fade-up">
        <span class="subtitle">پروژه‌های منتخب</span>
        <h2>نتایج واقعی برای مشتریان واقعی</h2>
        <p>نگاهی به بخشی از پروژه‌هایی که با افتخار اجرا کرده‌ایم.</p>
      </div>

      <div class="portfolio-grid">
        <?php foreach(\core\DB::get("portfolio") as $portfolio): ?>
        <div class="portfolio-item fade-up">
          <div class="portfolio-placeholder"><i class="fas <?= $portfolio["icon"] ?>"></i></div>
          <div class="portfolio-overlay">
            <h3><?= $portfolio["name"] ?></h3>
            <span><?= $portfolio["category"] ?> • <?= \core\JalaliDate::year($portfolio["date"]) ?></span>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>