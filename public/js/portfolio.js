document.addEventListener('DOMContentLoaded', () => {
    const toggle = document.querySelector('.menu-toggle');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-link');
    const year = document.getElementById('year');
    if (year) year.textContent = new Date().getFullYear();

    toggle?.addEventListener('click', () => {
        const open = toggle.getAttribute('aria-expanded') === 'true';
        toggle.setAttribute('aria-expanded', String(!open));
        nav?.classList.toggle('open', !open);
    });

    navLinks.forEach(link => link.addEventListener('click', () => {
        nav?.classList.remove('open');
        toggle?.setAttribute('aria-expanded', 'false');
    }));

    const revealItems = document.querySelectorAll('.reveal');
    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -35px 0px' });
        revealItems.forEach(item => observer.observe(item));
    } else {
        revealItems.forEach(item => item.classList.add('is-visible'));
    }

    const sections = document.querySelectorAll('main section[id]');
    if ('IntersectionObserver' in window) {
        const sectionObserver = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    navLinks.forEach(link => {
                        link.classList.toggle('active', link.getAttribute('href') === `#${entry.target.id}`);
                    });
                }
            });
        }, { rootMargin: '-35% 0px -55% 0px' });
        sections.forEach(section => sectionObserver.observe(section));
    }

    const glow = document.querySelector('.cursor-glow');
    if (glow && window.matchMedia('(pointer:fine)').matches && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        window.addEventListener('pointermove', event => {
            glow.style.left = `${event.clientX}px`;
            glow.style.top = `${event.clientY}px`;
        }, { passive: true });
    }

    // Gentle parallax on the hero artwork; disabled for touch and reduced-motion users.
    const art = document.querySelector('.hero-art');
    if (art && window.matchMedia('(pointer:fine)').matches && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        art.addEventListener('pointermove', event => {
            const rect = art.getBoundingClientRect();
            const x = (event.clientX - rect.left) / rect.width - 0.5;
            const y = (event.clientY - rect.top) / rect.height - 0.5;
            art.style.setProperty('--tilt-x', `${y * -3}deg`);
            art.style.setProperty('--tilt-y', `${x * 3}deg`);
            art.style.transform = `perspective(900px) rotateX(${y * -3}deg) rotateY(${x * 3}deg)`;
        });
        art.addEventListener('pointerleave', () => { art.style.transform = ''; });
    }
});
