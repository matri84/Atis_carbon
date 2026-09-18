  <section class="page-header">
    <div class="container">
      <h1>خدمات ما</h1>
      <div class="breadcrumb">
        <a href="<?= url("/") ?>">صفحه اصلی</a>
        <span>/</span>
        <span>خدمات</span>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-header fade-up">
        <span class="subtitle">آنچه ارائه می‌دهیم</span>
        <h2>راه‌حل‌های جامع و سفارشی</h2>
        <p>از استراتژی تا اجرا، تمام نیازهای فناوری سازمان شما را پوشش می‌دهیم.</p>
      </div>
      <div class="services-grid">
        <?php foreach(\core\DB::get("services") as $service): ?>
        <div class="service-card fade-up">
          <div class="service-icon"><i class="fas <?= $service["icon"] ?>"></i></div>
          <h3><?= $service["name"] ?></h3>
          <p><?= $service["content"] ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section" style="background: var(--white);">
    <div class="container">
      <div class="section-header fade-up">
        <span class="subtitle">فرآیند همکاری</span>
        <h2>چگونه با هم کار می‌کنیم؟</h2>
      </div>
      <div class="services-grid">
        <div class="service-card fade-up">
          <div class="service-icon"><i class="fas fa-comments"></i></div>
          <h3>۱. کشف و مشاوره</h3>
          <p>درک عمیق نیازها، چالش‌ها و اهداف کسب‌وکار شما از طریق جلسات تخصصی.</p>
        </div>
        <div class="service-card fade-up">
          <div class="service-icon"><i class="fas fa-drafting-compass"></i></div>
          <h3>۲. طراحی راه‌حل</h3>
          <p>ارائه معماری فنی، نقشه راه و برآورد دقیق زمان و هزینه.</p>
        </div>
        <div class="service-card fade-up">
          <div class="service-icon"><i class="fas fa-rocket"></i></div>
          <h3>۳. اجرا و تحویل</h3>
          <p>توسعه چابک، تست مداوم و تحویل تدریجی با شفافیت کامل.</p>
        </div>
        <div class="service-card fade-up">
          <div class="service-icon"><i class="fas fa-headset"></i></div>
          <h3>۴. پشتیبانی مستمر</h3>
          <p>همراهی پس از تحویل برای بهینه‌سازی و رشد مداوم سیستم.</p>
        </div>
      </div>
    </div>
  </section>