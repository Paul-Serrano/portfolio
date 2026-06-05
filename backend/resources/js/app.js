import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
	const menuButton = document.querySelector('[data-mobile-toggle]');
	const mobileMenu = document.getElementById('mobile-menu');
	const navLinks = document.querySelectorAll('[data-nav-link]');

	if (menuButton && mobileMenu) {
		menuButton.addEventListener('click', () => {
			const expanded = menuButton.getAttribute('aria-expanded') === 'true';
			menuButton.setAttribute('aria-expanded', (!expanded).toString());
			mobileMenu.classList.toggle('hidden');
		});
	}

	navLinks.forEach((link) => {
		link.addEventListener('click', () => {
			if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
				mobileMenu.classList.add('hidden');
				menuButton?.setAttribute('aria-expanded', 'false');
			}
		});
	});

	const sectionObserver = new IntersectionObserver(
		(entries) => {
			entries.forEach((entry) => {
				if (!entry.isIntersecting) {
					return;
				}

				const id = entry.target.getAttribute('id');

				navLinks.forEach((link) => {
					const target = link.getAttribute('href')?.replace('#', '');
					link.classList.toggle('is-active', target === id);
				});
			});
		},
		{ rootMargin: '-45% 0px -45% 0px', threshold: 0 },
	);

	document.querySelectorAll('section[id]').forEach((section) => sectionObserver.observe(section));

	const revealObserver = new IntersectionObserver(
		(entries, observer) => {
			entries.forEach((entry) => {
				if (!entry.isIntersecting) {
					return;
				}

				entry.target.classList.add('is-visible');
				observer.unobserve(entry.target);
			});
		},
		{ threshold: 0.12 },
	);

	document.querySelectorAll('.reveal').forEach((element) => revealObserver.observe(element));

	const counters = document.querySelectorAll('[data-counter]');
	const counterObserver = new IntersectionObserver(
		(entries, observer) => {
			entries.forEach((entry) => {
				if (!entry.isIntersecting) {
					return;
				}

				const element = entry.target;
				const target = Number(element.getAttribute('data-target') ?? 0);
				const suffix = element.getAttribute('data-suffix') ?? '';

				let current = 0;
				const duration = 900;
				const steps = 30;
				const increment = Math.max(1, Math.ceil(target / steps));
				const interval = window.setInterval(() => {
					current += increment;

					if (current >= target) {
						current = target;
						window.clearInterval(interval);
					}

					element.textContent = `${current}${suffix}`;
				}, Math.max(12, Math.floor(duration / steps)));

				observer.unobserve(element);
			});
		},
		{ threshold: 0.3 },
	);

	counters.forEach((counter) => counterObserver.observe(counter));
});
