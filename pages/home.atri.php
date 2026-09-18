<section class="hero">
    <div class="container">
      <div class="hero-content fade-up">
        <div class="hero-badge">
          <i class="fas fa-bolt"></i>
          <span>نوآوری پایدار برای آینده</span>
        </div>
        <h1>راه‌حل‌های <span>هوشمند</span> برای کسب‌وکارهای پیشرو</h1>
        <p>ما در آتیس‌کربن با ترکیب فناوری پیشرفته و تفکر استراتژیک، مسیر رشد پایدار و تحول دیجیتال را برای سازمان‌ها هموار می‌کنیم.</p>
        <div class="hero-btns">
          <a href="<?= url("/services") ?>" class="btn btn-primary">
            <i class="fas fa-rocket"></i>
            کشف خدمات ما
          </a>
          <a href="<?= url("/contact") ?>" class="btn btn-outline">
            <i class="fas fa-phone-alt"></i>
            تماس با ما
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Preview -->
  <section class="section">
    <div class="container">
      <div class="section-header fade-up">
        <span class="subtitle">خدمات ما</span>
        <h2>راه‌حل‌های جامع برای هر نیاز</h2>
        <p>از مشاوره استراتژیک تا اجرای پروژه‌های پیچیده، تیم متخصص ما همراه شماست.</p>
      </div>
      <div class="services-grid">
        <?php foreach(\core\DB::get("services",3) as $service): ?>
        <div class="service-card fade-up">
          <div class="service-icon"><i class="fas <?= $service["icon"] ?>"></i></div>
          <h3><?= $service["name"] ?></h3>
          <p><?= $service["content"] ?></p>
        </div>
        <?php endforeach; ?>
        <div style="text-align: center; margin-top: 40px;">
        <a href="<?= url("/services") ?>" class="btn btn-primary">مشاهده همه خدمات</a>
      </div>
    </div>
  </section>

  <!-- About Preview -->
  <section class="section" style="background: var(--white);">
    <div class="container">
      <div class="about-preview">
        <div class="about-image fade-right">
          <div class="about-image-placeholder">
            <i class="fas fa-building"></i>
          </div>
        </div>
        <div class="about-content fade-left">
          <span class="subtitle" style="color: var(--accent);">درباره آتیس‌کربن</span>
          <h2>بیش از یک دهه تجربه در مرزهای فناوری</h2>
          <p>آتیس‌کربن با تمرکز بر نوآوری پایدار و کیفیت بی‌رقیب، به یکی از نام‌های معتبر در حوزه فناوری سازمانی تبدیل شده است.</p>
          <p>تیم ما متشکل از متخصصان با تجربه در حوزه‌های نرم‌افزار، داده، زیرساخت و استراتژی دیجیتال است که هر روز برای خلق ارزش واقعی تلاش می‌کنند.</p>
          <div class="about-stats">
            <div class="stat-item">
              <span class="number" data-target="150">0</span>
              <span class="label">پروژه موفق</span>
            </div>
            <div class="stat-item">
              <span class="number" data-target="85">0</span>
              <span class="label">مشتری راضی</span>
            </div>
            <div class="stat-item">
              <span class="number" data-target="12">0</span>
              <span class="label">سال تجربه</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Preview -->
  <section class="section">
    <div class="container">
      <div class="section-header fade-up">
        <span class="subtitle">نمونه کارها</span>
        <h2>پروژه‌هایی که به آن‌ها افتخار می‌کنیم</h2>
        <p>نگاهی به بخشی از پروژه‌های اخیر ما که تأثیر واقعی بر کسب‌وکار مشتریان داشته‌اند.</p>
      </div>
      <div class="portfolio-grid">
        <?php foreach(\core\DB::get("portfolio",3) as $portfolio): ?>
        <div class="portfolio-item fade-up">
          <div class="portfolio-placeholder"><i class="fas <?= $portfolio["icon"] ?>"></i></div>
          <div class="portfolio-overlay">
            <h3><?= $portfolio["name"] ?></h3>
            <span><?= $portfolio["category"] ?></span>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
      <div style="text-align: center; margin-top: 40px;">
        <a href="<?= url("/portfolio") ?>" class="btn btn-primary">مشاهده همه پروژه‌ها</a>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="section testimonials">
    <div class="container">
      <div class="section-header fade-up">
        <span class="subtitle" style="color: var(--accent-light);">نظرات مشتریان</span>
        <h2>آنچه مشتریان درباره ما می‌گویند</h2>
        <p>اعتماد مشتریان بزرگ‌ترین سرمایه ماست.</p>
      </div>
      <div class="testimonial-grid">
        <?php foreach(\core\DB::get("comment",3) as $coment): ?>
        <div class="testimonial-card fade-up">
          <p>« <?= $coment["message"] ?> »</p>
          <div class="testimonial-author">
            <div class="author-avatar"><?= mb_substr($coment["name"],0,1) ?></div>
            <div class="author-info">
              <strong><?= $coment["name"] ?></strong>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>