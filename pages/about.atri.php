<section class="page-header">
    <div class="container">
      <h1>درباره آتیس‌کربن</h1>
      <div class="breadcrumb">
        <a href="<?= url("/") ?>">صفحه اصلی</a>
        <span>/</span>
        <span>درباره ما</span>
      </div>
    </div>
  </section>

  <!-- About Content -->
  <section class="section">
    <div class="container">
      <div class="about-preview">
        <div class="about-image fade-right">
          <div class="about-image-placeholder">
            <i class="fas fa-users"></i>
          </div>
        </div>
        <div class="about-content fade-left">
          <span class="subtitle" style="color: var(--accent);">داستان ما</span>
          <h2>از یک ایده تا پیشگام فناوری پایدار</h2>
          <p>آتیس‌کربن در سال ۱۳۹۳ با هدف ایجاد تحول واقعی در فضای فناوری ایران تأسیس شد. ما باور داریم که فناوری باید در خدمت انسان و محیط زیست باشد.</p>
          <p>امروز با تیمی بیش از ۶۰ متخصص در حوزه‌های مختلف، به صدها سازمان در مسیر تحول دیجیتال کمک کرده‌ایم و همچنان در حال گسترش افق‌های نوآوری هستیم.</p>
          <p>تمرکز ما بر کیفیت، شفافیت و خلق ارزش بلندمدت است؛ نه صرفاً تحویل پروژه.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Mission & Vision -->
  <section class="section" style="background: var(--white);">
    <div class="container">
      <div class="section-header fade-up">
        <span class="subtitle">چشم‌انداز و مأموریت</span>
        <h2>آنچه برای آن تلاش می‌کنیم</h2>
      </div>
      <div class="services-grid">
        <div class="service-card fade-up">
          <div class="service-icon"><i class="fas fa-eye"></i></div>
          <h3>چشم‌انداز</h3>
          <p>تبدیل شدن به معتبرترین شریک فناوری سازمان‌های پیشرو در منطقه با تمرکز بر نوآوری پایدار و تأثیر اجتماعی مثبت.</p>
        </div>
        <div class="service-card fade-up">
          <div class="service-icon"><i class="fas fa-bullseye"></i></div>
          <h3>مأموریت</h3>
          <p>ارائه راه‌حل‌های هوشمند، مقیاس‌پذیر و انسان‌محور که کسب‌وکارها را قادر به رشد پایدار و رقابت در عصر دیجیتال کند.</p>
        </div>
        <div class="service-card fade-up">
          <div class="service-icon"><i class="fas fa-heart"></i></div>
          <h3>ارزش‌های ما</h3>
          <p>شفافیت، کیفیت بی‌رقیب، یادگیری مستمر، مسئولیت‌پذیری اجتماعی و احترام به محیط زیست اساس تمام تصمیمات ماست.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Stats -->
  <section class="section">
    <div class="container">
      <div class="about-stats" style="grid-template-columns: repeat(4, 1fr); max-width: 900px; margin: 0 auto;">
        <div class="stat-item fade-up">
          <span class="number" data-target="150">0</span>
          <span class="label">پروژه موفق</span>
        </div>
        <div class="stat-item fade-up">
          <span class="number" data-target="85">0</span>
          <span class="label">مشتری راضی</span>
        </div>
        <div class="stat-item fade-up">
          <span class="number" data-target="60">0</span>
          <span class="label">متخصص</span>
        </div>
        <div class="stat-item fade-up">
          <span class="number" data-target="12">0</span>
          <span class="label">سال تجربه</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Team -->
  <section class="section" style="background: var(--white);">
    <div class="container">
      <div class="section-header fade-up">
        <span class="subtitle">تیم ما</span>
        <h2>افراد پشت موفقیت‌ها</h2>
        <p>تیمی متنوع از متخصصان با تجربه که هر روز برای خلق ارزش تلاش می‌کنند.</p>
      </div>
      <div class="services-grid">
        <?php foreach(\core\DB::get("staff",3) as $staff): ?>
        <div class="service-card fade-up" style="text-align: center;">
          <div class="service-icon" style="margin: 0 auto 20px;"><i class="fas <?= $staff["icon"] ?>"></i></div>
          <h3><?= $staff["name"] ?></h3>
          <p style="color: var(--accent); font-weight: 600; margin-bottom: 8px;"><?= $staff["side"] ?></p>
          <p><?= $staff["description"] ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>