document.addEventListener('DOMContentLoaded', () => {
    // Scroll reveal: fade + slide up as elements enter the viewport.
    const revealEls = document.querySelectorAll('.reveal');

    if ('IntersectionObserver' in window && revealEls.length) {
        const revealIo = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;

                const group = entry.target.closest('[data-reveal-group]');
                const siblings = group ? Array.from(group.querySelectorAll('.reveal')) : [entry.target];
                const index = siblings.indexOf(entry.target);

                entry.target.style.transitionDelay = `${Math.min(index, 8) * 0.07}s`;
                entry.target.classList.add('in-view');
                revealIo.unobserve(entry.target);
            });
        }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });

        revealEls.forEach((el) => revealIo.observe(el));
    } else {
        revealEls.forEach((el) => el.classList.add('in-view'));
    }

    // Animated number counters (data-count="1234").
    const counters = document.querySelectorAll('[data-count]');

    if ('IntersectionObserver' in window && counters.length) {
        const countIo = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;

                const el = entry.target;
                const target = parseInt(el.dataset.count, 10) || 0;
                const suffix = el.dataset.suffix || '';
                const duration = 1100;
                const startTime = performance.now();

                function tick(now) {
                    const progress = Math.min((now - startTime) / duration, 1);
                    const eased = 1 - Math.pow(1 - progress, 3);
                    el.textContent = Math.floor(eased * target) + suffix;

                    if (progress < 1) {
                        requestAnimationFrame(tick);
                    } else {
                        el.textContent = target + suffix;
                    }
                }

                requestAnimationFrame(tick);
                countIo.unobserve(el);
            });
        }, { threshold: 0.4 });

        counters.forEach((el) => countIo.observe(el));
    }
});
