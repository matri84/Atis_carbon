  <?php
  if (isset($_POST["comment-send"])) {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    \core\DB::addComment($name, $email, $message);
    
    header("Location: " . url("/contact"));
    exit;
  }
?>  
  <section class="page-header">
    <div class="container">
      <h1>تماس با ما</h1>
      <div class="breadcrumb">
        <a href="<?= url("/") ?>">صفحه اصلی</a>
        <span>/</span>
        <span>تماس با ما</span>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="contact-grid">
        <!-- Info -->

        <div class="contact-info-card fade-right">
          <h2 style="color: var(--primary); margin-bottom: 28px; font-size: 1.5rem;">راه‌های ارتباطی</h2>

          <div class="contact-info-item">
            <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
            <div>
              <h4>آدرس</h4>
              <p>تهران، خیابان ولیعصر، بالاتر از پارک ساعی، برج فناوری، طبقه ۱۲</p>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="icon"><i class="fas fa-phone"></i></div>
            <div>
              <h4>تلفن</h4>
              <p>۰۲۱-۸۸۷۷۶۶۵۵<br>۰۹۱۲-۳۴۵۶۷۸۹</p>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="icon"><i class="fas fa-envelope"></i></div>
            <div>
              <h4>ایمیل</h4>
              <p>info@atiscarbon.ir<br>sales@atiscarbon.ir</p>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="icon"><i class="fas fa-clock"></i></div>
            <div>
              <h4>ساعات کاری</h4>
              <p>شنبه تا چهارشنبه: ۹ صبح تا ۶ عصر<br>پنج‌شنبه: ۹ صبح تا ۱ ظهر</p>
            </div>
          </div>

          <div class="social-links" style="margin-top: 20px;">
            <a href="#" aria-label="لینکدین"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" aria-label="اینستاگرام"><i class="fab fa-instagram"></i></a>
            <a href="#" aria-label="توییتر"><i class="fab fa-x-twitter"></i></a>
            <a href="#" aria-label="تلگرام"><i class="fab fa-telegram"></i></a>
          </div>
        </div>

        <div class="contact-form fade-left">

          <?php if ($message = flash("addComment")): ?>

            <div class="alert-no">
              <?= htmlspecialchars($message) ?>
            </div>

          <?php endif; ?>


          <?php if ($message = flash("true_comment")): ?>

            <div class="alert-yes">
              <?= htmlspecialchars($message) ?>
            </div>

          <?php endif; ?>


          <?php if ($errors = flash("comment_errors")): ?>

            <?php foreach ($errors as $error): ?>

              <div class="alert-no">
                <?= htmlspecialchars($error) ?>
              </div>

            <?php endforeach; ?>

          <?php endif; ?>

          <h2 style="color: var(--primary); margin-bottom: 8px; font-size: 1.5rem;">ارسال پیام</h2>
          <p style="color: var(--gray-600); margin-bottom: 28px;">فرم زیر را پر کنید تا در اسرع وقت با شما تماس بگیریم.</p>

          <form method="post" novalidate>
            <div class="form-group">
              <label for="name">نام و نام خانوادگی *</label>
              <input type="text" id="name" name="name" required placeholder="نام کامل خود را وارد کنید">
            </div>

            <div class="form-group">
              <label for="email">ایمیل</label>
              <input type="email" id="email" name="email" placeholder="example@email.com">
            </div>

            <div class="form-group">
              <label for="message">پیام شما *</label>
              <textarea id="message" name="message" required placeholder="توضیحات خود را بنویسید..."></textarea>
            </div>

            <button type="submit" class="btn btn-primary" style="width: 100%; justify-content: center;" name="comment-send">
              <i class="fas fa-paper-plane"></i>
              ارسال پیام
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Map Placeholder -->
  <section class="section" style="padding-top: 0;">
    <div class="container">
      <div class="fade-up" style="background: linear-gradient(135deg, var(--primary), var(--primary-light)); height: 350px; border-radius: var(--radius); display: flex; align-items: center; justify-content: center; color: rgba(255,255,255,0.4); font-size: 3rem; box-shadow: var(--shadow-md);">
        <i class="fas fa-map-marked-alt"></i>
      </div>
    </div>
  </section>