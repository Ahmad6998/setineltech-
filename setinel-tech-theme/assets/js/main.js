/**
 * Setinel Tech - Main Interactive Scripts
 */

// Initialize default theme (Clean White with Amber & Light Blue Palette)
(function() {
  document.documentElement.setAttribute('data-theme', 'light');
})();

document.addEventListener('DOMContentLoaded', () => {

  // Mobile Nav Toggle & Dropdown Accordion
  const mobileToggle = document.querySelector('.mobile-toggle');
  const navMenu = document.querySelector('.nav-menu');
  const siteHeader = document.querySelector('.site-header');

  if (mobileToggle && navMenu) {
    function closeMobileNav() {
      navMenu.classList.remove('open');
      mobileToggle.setAttribute('aria-expanded', 'false');
      navMenu.querySelectorAll('.nav-item-dropdown.dropdown-open').forEach(dd => {
        dd.classList.remove('dropdown-open');
      });
    }

    mobileToggle.addEventListener('click', (e) => {
      e.stopPropagation();
      const headerH = siteHeader ? siteHeader.offsetHeight : 96;
      navMenu.style.top = headerH + 'px';
      navMenu.style.maxHeight = `calc(100vh - ${headerH}px)`;
      navMenu.classList.toggle('open');
      const isOpen = navMenu.classList.contains('open');
      mobileToggle.setAttribute('aria-expanded', isOpen);
      if (!isOpen) {
        navMenu.querySelectorAll('.nav-item-dropdown.dropdown-open').forEach(dd => {
          dd.classList.remove('dropdown-open');
        });
      }
    });

    // Mobile Services Dropdown Accordion Toggle
    const dropdownToggles = navMenu.querySelectorAll('.nav-link-dropdown');
    dropdownToggles.forEach(toggle => {
      toggle.addEventListener('click', (e) => {
        if (window.innerWidth <= 991 || navMenu.classList.contains('open')) {
          e.preventDefault();
          e.stopPropagation();
          const parentItem = toggle.closest('.nav-item-dropdown');
          if (parentItem) {
            parentItem.classList.toggle('dropdown-open');
          }
        }
      });
    });

    // Close menu when clicking regular links or dropdown items
    navMenu.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', (e) => {
        if (!link.classList.contains('nav-link-dropdown')) {
          closeMobileNav();
        }
      });
    });

    // Close menu when clicking outside
    document.addEventListener('click', (e) => {
      if (navMenu.classList.contains('open') && !navMenu.contains(e.target) && !mobileToggle.contains(e.target)) {
        closeMobileNav();
      }
    });
  }

  // Dynamic Active Navigation & ScrollSpy
  const navLinks = document.querySelectorAll('.nav-menu .nav-link');
  const sections = document.querySelectorAll('section[id]');

  function updateActiveNavLink() {
    const scrollY = window.pageYOffset || document.documentElement.scrollTop;
    const headerHeight = (siteHeader ? siteHeader.offsetHeight : 100) + 40;

    // Detect current page
    const currentPath = window.location.pathname;
    const currentPage = currentPath.substring(currentPath.lastIndexOf('/') + 1) || 'index.html';

    if (currentPage !== 'index.html' && currentPage !== '' && currentPage !== '/') {
      navLinks.forEach(link => {
        const href = link.getAttribute('href') || '';
        if (href.includes(currentPage)) {
          link.classList.add('active');
        } else if (
          (currentPage.includes('web-') || currentPage.includes('app-')) &&
          link.classList.contains('nav-link-dropdown')
        ) {
          link.classList.add('active');
        } else {
          link.classList.remove('active');
        }
      });
      return;
    }

    // On home page: find current section based on scroll position
    let currentSectionId = 'home';
    sections.forEach(section => {
      const sectionTop = section.offsetTop - headerHeight;
      const sectionHeight = section.offsetHeight;
      if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
        currentSectionId = section.getAttribute('id');
      }
    });

    navLinks.forEach(link => {
      const href = link.getAttribute('href') || '';
      const linkHash = href.includes('#') ? href.split('#')[1] : '';

      if (
        (currentSectionId === 'home' && (href === 'index.html' || href === '#' || href === '' || href.endsWith('/'))) ||
        (linkHash && linkHash === currentSectionId)
      ) {
        link.classList.add('active');
      } else {
        link.classList.remove('active');
      }
    });
  }

  // Back To Top Button
  const backToTopBtn = document.getElementById('back-to-top') || document.querySelector('.back-to-top');
  if (backToTopBtn) {
    backToTopBtn.addEventListener('click', (e) => {
      e.preventDefault();
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  // Unified 60fps-throttled scroll handler for all scroll-driven UI (Smooth on Mobile)
  const header = document.querySelector('.site-header');
  let scrollTicking = false;

  function onScroll() {
    const scrollY = window.pageYOffset || document.documentElement.scrollTop;
    updateActiveNavLink();
    if (scrollY > 40) {
      header?.classList.add('scrolled');
    } else {
      header?.classList.remove('scrolled');
    }
    if (backToTopBtn) {
      if (scrollY > 350) {
        backToTopBtn.classList.add('visible');
      } else {
        backToTopBtn.classList.remove('visible');
      }
    }
  }

  window.addEventListener('scroll', () => {
    if (!scrollTicking) {
      window.requestAnimationFrame(() => {
        onScroll();
        scrollTicking = false;
      });
      scrollTicking = true;
    }
  }, { passive: true });
  onScroll();

  // Instant Active update on click for all navigation links
  navLinks.forEach(link => {
    link.addEventListener('click', function() {
      if (!this.classList.contains('nav-link-dropdown')) {
        navLinks.forEach(l => l.classList.remove('active'));
        this.classList.add('active');
      }
    });
  });

  // Terminal Real-Time Status Simulation
  const termCmd = document.querySelector('.term-cmd');
  const activeReqs = document.getElementById('stat-active-reqs');
  const termLatency = document.getElementById('stat-latency');

  if (termCmd) {
    const commands = [
      'setinel-guard --check-health --env=production',
      'setinel-deploy --optimize-assets --ssl=active',
      'setinel-monitor --all-nodes --status=online',
      'setinel-waf --verify-rules --threat-level=zero'
    ];
    let cmdIdx = 0;

    setInterval(() => {
      cmdIdx = (cmdIdx + 1) % commands.length;
      termCmd.textContent = commands[cmdIdx];
    }, 4500);
  }

  if (activeReqs) {
    setInterval(() => {
      const base = 1420;
      const variation = Math.floor(Math.random() * 80) - 40;
      activeReqs.textContent = (base + variation).toLocaleString() + ' req/s';
    }, 2500);
  }

  if (termLatency) {
    setInterval(() => {
      const lat = (14 + Math.random() * 8).toFixed(1);
      termLatency.textContent = lat + 'ms';
    }, 3000);
  }

  // Mouse Scroll Indicator (.btn-explore)
  const exploreBtn = document.querySelector('.btn-explore');
  if (exploreBtn) {
    exploreBtn.addEventListener('click', (e) => {
      e.preventDefault();
      const target = document.querySelector(exploreBtn.getAttribute('href') || '#about-value');
      if (target) {
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  }

  // Software Process Accordion & Dynamic Preview Card
  const processItems = document.querySelectorAll('.process-acc-item');
  const previewIcon = document.getElementById('process-preview-icon');
  const previewTitle = document.getElementById('process-preview-title');
  const previewDesc = document.getElementById('process-preview-desc');
  const previewStep = document.getElementById('process-preview-step');

  const processData = {
    '1': {
      title: 'Discovery & Requirements',
      icon: '🔍',
      desc: 'In-depth consultation, system architecture audit, threat vector analysis, and precise technical specification.'
    },
    '2': {
      title: 'Architecture & Security',
      icon: '🛡️',
      desc: 'Microservices blueprints, zero-trust cryptographic models, high-availability schemas, and compliance frameworks.'
    },
    '3': {
      title: 'Agile Engineering & CI/CD',
      icon: '⚡',
      desc: 'Iterative sprint delivery, clean code patterns, automated integration pipelines, and continuous peer review.'
    },
    '4': {
      title: 'Testing & Stress Load QA',
      icon: '🧪',
      desc: 'Rigorous load testing up to 100k req/s, automated security penetration suites, and cross-platform validation.'
    },
    '5': {
      title: 'Zero-Downtime Deployment',
      icon: '🚀',
      desc: 'Blue-green Kubernetes orchestration, automated rollback triggers, and global CDN caching propagation.'
    },
    '6': {
      title: '24/7 SRE & Continuous Scaling',
      icon: '📊',
      desc: 'Autonomous health telemetry, sub-second anomaly mitigation, SLA-backed SRE support, and database tuning.'
    }
  };

  processItems.forEach(item => {
    const header = item.querySelector('.process-acc-header');
    if (header) {
      header.addEventListener('click', () => {
        const isActive = item.classList.contains('active');
        processItems.forEach(i => i.classList.remove('active'));
        if (!isActive) {
          item.classList.add('active');
          const stepNum = item.getAttribute('data-step') || '1';
          if (processData[stepNum]) {
            if (previewTitle) previewTitle.textContent = processData[stepNum].title;
            if (previewIcon) previewIcon.textContent = processData[stepNum].icon;
            if (previewDesc) previewDesc.textContent = processData[stepNum].desc;
            if (previewStep) previewStep.textContent = `PHASE 0${stepNum}`;
          }
        }
      });
    }
  });

  // Animated Numbers Counter (.counter-val)
  const counterElements = document.querySelectorAll('.counter-val');
  if ('IntersectionObserver' in window && counterElements.length > 0) {
    const counterObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const el = entry.target;
          const target = parseFloat(el.getAttribute('data-count') || el.textContent.replace(/[^0-9.]/g, ''));
          const suffix = el.getAttribute('data-suffix') || '';
          const prefix = el.getAttribute('data-prefix') || '';
          const isDecimal = String(target).includes('.');
          const duration = 1800;
          const startTime = performance.now();

          const updateCounter = (currentTime) => {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);
            // Ease-out cubic
            const ease = 1 - Math.pow(1 - progress, 3);
            const currentVal = target * ease;

            el.textContent = prefix + (isDecimal ? currentVal.toFixed(2) : Math.floor(currentVal)) + suffix;

            if (progress < 1) {
              requestAnimationFrame(updateCounter);
            } else {
              el.textContent = prefix + (isDecimal ? target.toFixed(2) : target) + suffix;
            }
          };

          requestAnimationFrame(updateCounter);
          observer.unobserve(el);
        }
      });
    }, { threshold: 0.3 });

    counterElements.forEach(el => counterObserver.observe(el));
  }

  // Interactive Particle Canvas Animation (Setinel Tech Gold Constellation)
  const heroCanvas = document.getElementById('hero-banner-canvas');
  if (heroCanvas) {
    const ctx = heroCanvas.getContext('2d');
    let width, height;
    let particles = [];
    const particleCount = window.innerWidth < 768 ? 24 : 85;
    const maxDistance = window.innerWidth < 768 ? 85 : 110;
    const mouse = { x: -1000, y: -1000 };
    let isCanvasVisible = true;
    let animId = null;

    const resize = () => {
      width = heroCanvas.width = heroCanvas.offsetWidth || window.innerWidth;
      height = heroCanvas.height = heroCanvas.offsetHeight || window.innerHeight;
    };

    window.addEventListener('resize', resize);
    resize();

    window.addEventListener('mousemove', (e) => {
      const rect = heroCanvas.getBoundingClientRect();
      mouse.x = e.clientX - rect.left;
      mouse.y = e.clientY - rect.top;
    });

    window.addEventListener('mouseleave', () => {
      mouse.x = -1000;
      mouse.y = -1000;
    });

    class Particle {
      constructor() {
        this.x = Math.random() * width;
        this.y = Math.random() * height;
        this.vx = (Math.random() - 0.5) * 0.7;
        this.vy = (Math.random() - 0.5) * 0.7;
        this.radius = Math.random() * 2 + 1;
        this.baseAlpha = Math.random() * 0.6 + 0.3;

        // Tri-color theme: Vibrant Light Blue (50%), Amber #f59e0b (40%), Deep Cyan/Navy (10%)
        const rand = Math.random();
        if (rand < 0.50) {
          this.color = '2, 132, 199'; // Vibrant Light Blue
          this.glowColor = 'rgba(2, 132, 199, 0.6)';
        } else if (rand < 0.90) {
          this.color = '245, 158, 11'; // Amber #f59e0b
          this.glowColor = 'rgba(245, 158, 11, 0.6)';
        } else {
          this.color = '14, 20, 96'; // Deep Navy accent
          this.glowColor = 'rgba(14, 20, 96, 0.4)';
        }
      }
      update() {
        this.x += this.vx;
        this.y += this.vy;
        if (this.x < 0 || this.x > width) this.vx = -this.vx;
        if (this.y < 0 || this.y > height) this.vy = -this.vy;
      }
      draw() {
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
        ctx.fillStyle = `rgba(${this.color}, ${this.baseAlpha})`;
        ctx.shadowBlur = 8;
        ctx.shadowColor = this.glowColor;
        ctx.fill();
        ctx.shadowBlur = 0;
      }
    }

    for (let i = 0; i < particleCount; i++) {
      particles.push(new Particle());
    }

    const animate = () => {
      if (!isCanvasVisible || document.hidden) {
        animId = null;
        return;
      }

      ctx.clearRect(0, 0, width, height);

      // Draw connection lines between nearby particles
      for (let i = 0; i < particles.length; i++) {
        for (let j = i + 1; j < particles.length; j++) {
          const dx = particles[i].x - particles[j].x;
          const dy = particles[i].y - particles[j].y;
          const dist = Math.sqrt(dx * dx + dy * dy);
          if (dist < maxDistance) {
            const alpha = (1 - dist / maxDistance) * 0.22;
            ctx.beginPath();
            ctx.strokeStyle = i % 2 === 0 ? `rgba(2, 132, 199, ${alpha})` : `rgba(245, 158, 11, ${alpha})`;
            ctx.lineWidth = 0.6;
            ctx.moveTo(particles[i].x, particles[i].y);
            ctx.lineTo(particles[j].x, particles[j].y);
            ctx.stroke();
          }
        }

        // Connect to mouse cursor with Light Blue laser line
        const mdx = particles[i].x - mouse.x;
        const mdy = particles[i].y - mouse.y;
        const mdist = Math.sqrt(mdx * mdx + mdy * mdy);
        if (mdist < 130) {
          const malpha = (1 - mdist / 130) * 0.45;
          ctx.beginPath();
          ctx.strokeStyle = `rgba(2, 132, 199, ${malpha})`;
          ctx.lineWidth = 0.8;
          ctx.moveTo(particles[i].x, particles[i].y);
          ctx.lineTo(mouse.x, mouse.y);
          ctx.stroke();
        }
      }

      particles.forEach(p => {
        p.update();
        p.draw();
      });

      animId = requestAnimationFrame(animate);
    };

    function startAnimation() {
      if (!animId && isCanvasVisible && !document.hidden) {
        animId = requestAnimationFrame(animate);
      }
    }

    // Pause canvas calculations when hero banner is not on screen (huge mobile performance boost)
    if ('IntersectionObserver' in window) {
      const heroObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          isCanvasVisible = entry.isIntersecting;
          if (isCanvasVisible) {
            startAnimation();
          }
        });
      }, { threshold: 0.05 });
      const heroSection = document.getElementById('home') || heroCanvas.parentElement;
      if (heroSection) heroObserver.observe(heroSection);
    }

    document.addEventListener('visibilitychange', () => {
      if (!document.hidden && isCanvasVisible) {
        startAnimation();
      }
    });

    startAnimation();
  }

  // Industries Interactive Animated Slider
  const sliderContainer = document.querySelector('.industries-slider-container');
  if (sliderContainer) {
    const track = sliderContainer.querySelector('.industries-slider-track');
    const prevBtn = sliderContainer.querySelector('.industries-slider-btn.prev');
    const nextBtn = sliderContainer.querySelector('.industries-slider-btn.next');
    const dotsContainer = sliderContainer.querySelector('.industries-slider-dots');
    const viewport = sliderContainer.querySelector('.industries-slider-viewport');
    const slides = Array.from(track ? track.children : []);

    if (track && slides.length > 0) {
      let currentIndex = 0;
      let autoPlayTimer = null;
      let isPaused = false;
      let startX = 0;
      let isDragging = false;

      const getGap = () => {
        if (!track) return 20;
        const style = window.getComputedStyle(track);
        return parseFloat(style.gap) || 20;
      };

      const getVisibleSlidesCount = () => {
        if (!viewport || !slides[0]) return 4;
        const vW = viewport.clientWidth;
        const sW = slides[0].offsetWidth || 260;
        const gap = getGap();
        return Math.max(1, Math.round((vW + gap) / (sW + gap)));
      };

      const getMaxIndex = () => {
        return Math.max(0, slides.length - getVisibleSlidesCount());
      };

      const getMaxOffset = () => {
        if (!track || !viewport) return 0;
        return Math.max(0, track.scrollWidth - viewport.clientWidth);
      };

      const updateDots = () => {
        if (!dotsContainer) return;
        dotsContainer.innerHTML = '';
        const maxIdx = getMaxIndex();
        const totalDots = maxIdx + 1;
        for (let i = 0; i < totalDots; i++) {
          const dot = document.createElement('button');
          dot.className = `industries-dot ${i === currentIndex ? 'active' : ''}`;
          dot.setAttribute('aria-label', `Go to industry slide ${i + 1}`);
          dot.addEventListener('click', (e) => {
            e.preventDefault();
            goToSlide(i);
            startAutoPlay();
          });
          dotsContainer.appendChild(dot);
        }
      };

      const goToSlide = (index) => {
        const maxIdx = getMaxIndex();
        if (index > maxIdx) {
          currentIndex = 0;
        } else if (index < 0) {
          currentIndex = maxIdx;
        } else {
          currentIndex = index;
        }

        const slideWidth = slides[0] ? slides[0].offsetWidth : 260;
        const gap = getGap();
        let offset = currentIndex * (slideWidth + gap);
        const maxOffset = getMaxOffset();
        if (offset > maxOffset) offset = maxOffset;

        track.style.transform = `translateX(-${offset}px)`;

        if (dotsContainer) {
          const dots = dotsContainer.querySelectorAll('.industries-dot');
          dots.forEach((dot, idx) => {
            dot.classList.toggle('active', idx === currentIndex);
          });
        }

        const visibleCount = getVisibleSlidesCount();
        slides.forEach((sl, idx) => {
          const isVisible = idx >= currentIndex && idx < currentIndex + visibleCount;
          sl.classList.toggle('is-visible', isVisible);
        });
      };

      const nextSlide = () => {
        goToSlide(currentIndex + 1);
      };

      const prevSlide = () => {
        goToSlide(currentIndex - 1);
      };

      // Active button click with tactile feedback and sound/ripple class
      if (nextBtn) {
        nextBtn.addEventListener('click', (e) => {
          e.preventDefault();
          e.stopPropagation();
          nextBtn.classList.add('btn-active');
          setTimeout(() => nextBtn.classList.remove('btn-active'), 220);
          nextSlide();
          startAutoPlay();
        });
      }

      if (prevBtn) {
        prevBtn.addEventListener('click', (e) => {
          e.preventDefault();
          e.stopPropagation();
          prevBtn.classList.add('btn-active');
          setTimeout(() => prevBtn.classList.remove('btn-active'), 220);
          prevSlide();
          startAutoPlay();
        });
      }

      // Keyboard arrow navigation when container is focused
      sliderContainer.setAttribute('tabindex', '0');
      sliderContainer.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowRight') {
          e.preventDefault();
          nextSlide();
          startAutoPlay();
        } else if (e.key === 'ArrowLeft') {
          e.preventDefault();
          prevSlide();
          startAutoPlay();
        }
      });

      const startAutoPlay = () => {
        if (autoPlayTimer) clearInterval(autoPlayTimer);
        autoPlayTimer = setInterval(() => {
          if (!isPaused) {
            nextSlide();
          }
        }, 3400);
      };

      // Pause autoplay ONLY when cursor is inside the cards viewport
      if (viewport) {
        viewport.addEventListener('mouseenter', () => { isPaused = true; });
        viewport.addEventListener('mouseleave', () => { isPaused = false; });

        viewport.addEventListener('touchstart', (e) => {
          isPaused = true;
          startX = e.touches[0].clientX;
        }, { passive: true });

        viewport.addEventListener('touchend', (e) => {
          isPaused = false;
          const endX = e.changedTouches[0].clientX;
          const diff = startX - endX;
          if (Math.abs(diff) > 40) {
            if (diff > 0) nextSlide();
            else prevSlide();
            startAutoPlay();
          }
        });

        viewport.addEventListener('mousedown', (e) => {
          isPaused = true;
          startX = e.clientX;
          isDragging = true;
        });
      }

      window.addEventListener('mouseup', (e) => {
        if (!isDragging) return;
        isDragging = false;
        isPaused = false;
        const diff = startX - e.clientX;
        if (Math.abs(diff) > 40) {
          if (diff > 0) nextSlide();
          else prevSlide();
          startAutoPlay();
        }
      });

      window.addEventListener('resize', () => {
        updateDots();
        goToSlide(Math.min(currentIndex, getMaxIndex()));
      });

      updateDots();
      goToSlide(0);

      // Pause slider autoplay when scrolled offscreen
      if ('IntersectionObserver' in window && sliderContainer) {
        const sliderObserver = new IntersectionObserver((entries) => {
          entries.forEach(entry => {
            isPaused = !entry.isIntersecting;
          });
        }, { threshold: 0.1 });
        sliderObserver.observe(sliderContainer);
      }

      startAutoPlay();
    }
  }
});

