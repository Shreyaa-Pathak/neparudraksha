<div>

  {{-- Announcement Bar --}}
  <div class="bg-gradient-to-br from-gold-light via-gold to-gold-pale h-6 flex items-center overflow-hidden">
    <div class="flex whitespace-nowrap animate-marquee">
      <span class="shrink-0 text-white text-xxs"><i class="fa-solid fa-star"></i> Lifetime Money Back
        Authenticity Guaranteed on All Rudraksha and Express Worldwide Shipping</span>
      <span class="shrink-0 mx-10 text-white text-xxs"><i class="fa-solid fa-star"></i> Start Your
        2026 Transformation with Nepa Rudraksha. Lifetime Money Back Guaranteed.</span>
      <span class="shrink-0 text-white text-xxs"><i class="fa-solid fa-star"></i> Lifetime Money Back
        Authenticity Guaranteed on All Rudraksha and Express Worldwide Shipping</span>
      <span class="shrink-0 mx-10 text-white text-xxs"><i class="fa-solid fa-star"></i> Start Your 2026
        Transformation with Nepa Rudraksha. Lifetime Money Back Guaranteed.</span>
    </div>
  </div>

  {{-- Navigation --}}
  @include('layouts.components.navbar')

  {{-- Hero --}}
  @include('layouts.components.hero')

  {{-- badges --}}
  @include('layouts.components.badges')

  {{-- Heritage --}}
  @include('layouts.components.heritage')


  {{-- STATS --}}
  @include('layouts.components.stats')

  {{-- dual planetary power --}}
  @include('layouts.components.planet')
  @include('layouts.components.dis')

  {{-- footer --}}
  <footer class="bg-ivory py-6 px-8 lg:px-10 footer-border">
    <div class="mx-auto flex flex-col items-center gap-6 text-center">
      <div>
        <p class="font-display text-lg font-semibold text-gold tracking-[0.18em]">Nepa Rudraksha</p>
        <p class="font-serif text-xs italic text-muted mt-1">Sacred. Authentic. Transformative.</p>
      </div>
    </div>
  </footer>


  <script>
  const hamburger = document.getElementById('hamburger');
  const drawer    = document.getElementById('mobile-drawer');
  const ham1 = document.getElementById('ham-1');
  const ham2 = document.getElementById('ham-2');
  const ham3 = document.getElementById('ham-3');
  let drawerOpen = false;

  hamburger.addEventListener('click', () => {
    drawerOpen = !drawerOpen;
    if (drawerOpen) {
      drawer.style.maxHeight = '500px';
      drawer.style.opacity   = '1';
      ham1.style.transform   = 'rotate(45deg) translateY(6.5px)';
      ham2.style.opacity     = '0';
      ham2.style.transform   = 'scaleX(0)';
      ham3.style.transform   = 'rotate(-45deg) translateY(-6.5px)';
    } else {
      drawer.style.maxHeight = '0';
      drawer.style.opacity   = '0';
      ham1.style.transform   = '';
      ham2.style.opacity     = '1';
      ham2.style.transform   = '';
      ham3.style.transform   = '';
    }
  });

  //  Nav shadow on scroll 
  const nav = document.getElementById('main-nav');
  window.addEventListener('scroll', () => {
    nav.classList.toggle('nav-scrolled', window.scrollY > 50);
  });

  // Active nav link 
  document.getElementById('nav-links').addEventListener('click', e => {
    const link = e.target.closest('.nav-link');
    if (!link) return;
    document.querySelectorAll('#nav-links .nav-link').forEach(l => l.classList.remove('active'));
    link.classList.add('active');
  });

  // floating buy now
  const floatingBtn = document.getElementById('floating-buy');
  const hero = document.querySelector('#hero') ?? document.querySelector('section');

  const heroObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) {
        floatingBtn.classList.remove('opacity-0', 'pointer-events-none', 'translate-y-4');
        floatingBtn.classList.add('opacity-100', 'pointer-events-auto', 'translate-y-0');
      } else {
        floatingBtn.classList.add('opacity-0', 'pointer-events-none', 'translate-y-4');
        floatingBtn.classList.remove('opacity-100', 'pointer-events-auto', 'translate-y-0');
      }
    });
  }, { threshold: 0.1 });

  heroObserver.observe(hero);

  // Scroll reveal
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.15 });

  document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
  </script>
</div>