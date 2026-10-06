/**
 * Setinel Tech - Main Interactive Scripts
 */

// Initialize theme from localStorage: default is LIGHT mode
(function() {
  let savedTheme = localStorage.getItem('setinel-theme');
  // Auto-migrate to default light mode if v2 hasn't been initialized
  if (!localStorage.getItem('setinel-theme-v2')) {
    savedTheme = 'light';
    localStorage.setItem('setinel-theme', 'light');
    localStorage.setItem('setinel-theme-v2', 'true');
  }
  if (!savedTheme) {
    savedTheme = 'light';
  }
  document.documentElement.setAttribute('data-theme', savedTheme);
})();

document.addEventListener('DOMContentLoaded', () => {
  // Dark / Light Theme Toggle
  const themeToggle = document.getElementById('theme-toggle');
  if (themeToggle) {
    themeToggle.addEventListener('click', () => {
      const current = document.documentElement.getAttribute('data-theme') || 'light';
      const nextTheme = current === 'light' ? 'dark' : 'light';
      document.documentElement.setAttribute('data-theme', nextTheme);
      localStorage.setItem('setinel-theme', nextTheme);
      localStorage.setItem('setinel-theme-v2', 'true');
    });
  }

  // Mobile Nav Toggle
  const mobileToggle = document.querySelector('.mobile-toggle');
  const navMenu = document.querySelector('.nav-menu');

  if (mobileToggle && navMenu) {
    mobileToggle.addEventListener('click', () => {
      navMenu.classList.toggle('open');
      const isOpen = navMenu.classList.contains('open');
      mobileToggle.setAttribute('aria-expanded', isOpen);
    });

    // Close menu when clicking link
    navMenu.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        navMenu.classList.remove('open');
      });
    });
  }

  // Header Scroll Effect
  const header = document.querySelector('.site-header');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 40) {
      header?.classList.add('scrolled');
    } else {
      header?.classList.remove('scrolled');
    }
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
});
