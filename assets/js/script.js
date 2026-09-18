$(document).ready(function () {

  // Header scroll effect
  $(window).on('scroll', function () {
    if ($(this).scrollTop() > 50) {
      $('.header').addClass('scrolled');
    } else {
      $('.header').removeClass('scrolled');
    }
  });

  // Mobile menu toggle
  $('.menu-toggle').on('click', function () {
    $('.nav-menu').toggleClass('active');
    $(this).find('i').toggleClass('fa-bars fa-times');
  });

  // Close menu on link click (mobile)
  $('.nav-menu a').on('click', function () {
    if ($(window).width() <= 768) {
      $('.nav-menu').removeClass('active');
      $('.menu-toggle i').removeClass('fa-times').addClass('fa-bars');
    }
  });

  // Smooth scroll for anchor links
  $('a[href^="#"]').on('click', function (e) {
    const target = $(this.getAttribute('href'));
    if (target.length) {
      e.preventDefault();
      $('html, body').animate({
        scrollTop: target.offset().top - 80
      }, 700);
    }
  });

  // Scroll animations (Intersection Observer fallback with jQuery)
  function checkVisibility() {
    $('.fade-up, .fade-right, .fade-left').each(function () {
      const elementTop = $(this).offset().top;
      const elementBottom = elementTop + $(this).outerHeight();
      const viewportTop = $(window).scrollTop();
      const viewportBottom = viewportTop + $(window).height();

      if (elementBottom > viewportTop + 80 && elementTop < viewportBottom - 80) {
        $(this).addClass('visible');
      }
    });
  }

  $(window).on('scroll resize', checkVisibility);
  checkVisibility();

  // Counter animation
  function animateCounters() {
    $('.stat-item .number').each(function () {
      const $this = $(this);
      if ($this.hasClass('counted')) return;

      const elementTop = $this.offset().top;
      const viewportBottom = $(window).scrollTop() + $(window).height();

      if (elementTop < viewportBottom - 50) {
        $this.addClass('counted');
        const target = parseInt($this.data('target')) || parseInt($this.text());
        $({ count: 0 }).animate({ count: target }, {
          duration: 2000,
          easing: 'swing',
          step: function () {
            $this.text(Math.floor(this.count) + (target >= 100 ? '+' : ''));
          },
          complete: function () {
            $this.text(target + (target >= 100 ? '+' : ''));
          }
        });
      }
    });
  }

  $(window).on('scroll', animateCounters);
  animateCounters();

  // Contact form simple validation
  $('#contactForm').on('submit', function (e) {
    e.preventDefault();
    let isValid = true;

    $(this).find('[required]').each(function () {
      if (!$(this).val().trim()) {
        isValid = false;
        $(this).css('border-color', '#EF4444');
      } else {
        $(this).css('border-color', '');
      }
    });

    if (isValid) {
      // نمایش پیام موفقیت (در پروژه واقعی به سرور ارسال می‌شود)
      alert('پیام شما با موفقیت ارسال شد. به‌زودی با شما تماس خواهیم گرفت.');
      this.reset();
    } else {
      alert('لطفاً تمام فیلدهای ضروری را پر کنید.');
    }
  });

  // Active nav link based on current page
  const currentPage = window.location.pathname.split('/').pop() || 'index.html';
  $('.nav-menu a').each(function () {
    const href = $(this).attr('href');
    if (href === currentPage || (currentPage === '' && href === 'index.html')) {
      $(this).addClass('active');
    }
  });

});