/* Jude Arcinue Portfolio – script.js */
(() => {
    'use strict';

    document.documentElement.classList.add('js');

    const navbar = document.getElementById('navbar');
    const toggle = document.getElementById('navToggle');
    const menu = document.getElementById('navMenu');
    const links = [...document.querySelectorAll('.nav-link')];

    /* Navbar: border once scrolled */
    const onScroll = () => navbar.classList.toggle('scrolled', window.scrollY > 10);
    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });

    /* Mobile menu */
    const setMenu = (open) => {
        menu.classList.toggle('open', open);
        toggle.classList.toggle('open', open);
        toggle.setAttribute('aria-expanded', String(open));
    };
    toggle.addEventListener('click', () => setMenu(!menu.classList.contains('open')));
    links.forEach((l) => l.addEventListener('click', () => setMenu(false)));
    document.addEventListener('keydown', (e) => { if (e.key === 'Escape') setMenu(false); });

    /* Active section highlight */
    const sections = links
        .map((l) => document.getElementById(l.dataset.section))
        .filter(Boolean);

    const spy = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) return;
            links.forEach((l) => l.classList.toggle('active', l.dataset.section === entry.target.id));
        });
    }, { rootMargin: '-45% 0px -50% 0px' });
    sections.forEach((s) => spy.observe(s));

    /* Scroll reveal */
    const reveals = document.querySelectorAll('[data-reveal]');
    if ('IntersectionObserver' in window) {
        const io = new IntersectionObserver((entries, obs) => {
            entries.forEach((e) => {
                if (e.isIntersecting) { e.target.classList.add('revealed'); obs.unobserve(e.target); }
            });
        }, { threshold: 0.12 });
        reveals.forEach((el) => io.observe(el));
    } else {
        reveals.forEach((el) => el.classList.add('revealed'));
    }

    /* Typing effect (Typed.js). Falls back to the static first title. */
    const typedEl = document.getElementById('typed');
    const reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (typedEl && window.Typed && !reduce) {
        typedEl.textContent = '';
        new Typed('#typed', {
            strings: JSON.parse(typedEl.dataset.titles),
            typeSpeed: 70,
            backSpeed: 38,
            backDelay: 1600,
            startDelay: 400,
            loop: true,
            cursorChar: '|',
        });
    }

    /* Project details popup */
    const modal = document.getElementById('projectModal');
    if (modal) {
        const el = (id) => document.getElementById(id);
        const make = (tag, text) => { const n = document.createElement(tag); if (text) n.textContent = text; return n; };

        const open = (d) => {
            el('projectModalTitle').textContent = d.title;
            el('projectModalDesc').textContent = d.description;

            const media = el('projectModalMedia'); media.replaceChildren();
            if (d.image) {
                const img = make('img'); img.src = d.image; img.alt = 'Screenshot of ' + d.title; media.append(img);
            } else {
                const ph = make('div'); ph.className = 'project-card__placeholder';
                const i = make('i'); i.className = d.icon; ph.append(i, make('span', 'Screenshot coming soon'));
                media.append(ph);
            }

            const tags = el('projectModalTags'); tags.replaceChildren();
            d.tech.forEach((t) => tags.append(make('li', t)));

            const actions = el('projectModalActions'); actions.replaceChildren();
            if (d.github) {
                const a = make('a'); a.href = d.github; a.target = '_blank'; a.rel = 'noopener noreferrer';
                a.className = 'btn btn--sm btn--outline';
                const gi = make('i'); gi.className = 'fa-brands fa-github';
                a.append(gi, document.createTextNode(' GitHub'));
                actions.append(a);
            }

            modal.showModal();
            document.body.classList.add('modal-open');
        };

        document.querySelectorAll('[data-project]').forEach((btn) =>
            btn.addEventListener('click', () => open(JSON.parse(btn.dataset.project))));

        modal.addEventListener('click', (e) => {
            if (e.target === modal || e.target.closest('[data-modal-close]')) modal.close();
        });
        modal.addEventListener('close', () => document.body.classList.remove('modal-open'));
    }

    /* Contact form: block double submits, keep server-side validation authoritative */
    const form = document.getElementById('contactForm');
    if (form) {
        form.addEventListener('submit', () => {
            const btn = document.getElementById('contactSubmit');
            if (btn && form.checkValidity()) {
                btn.disabled = true;
                btn.lastChild.textContent = ' Sending...';
            }
        });
    }

    /* Page loader: hide on load, with a failsafe */
    const loader = document.getElementById('loader');
    if (loader) {
        const hide = () => loader.classList.add('hide');
        if (document.readyState === 'complete') hide();
        else window.addEventListener('load', hide);
        setTimeout(hide, 2500);
    }

    /* Re-enable the contact button if the page is restored via the back button */
    window.addEventListener('pageshow', (e) => {
        const btn = document.getElementById('contactSubmit');
        if (e.persisted && btn) btn.disabled = false;
    });
})();
