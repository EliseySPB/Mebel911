(function () {
	var img1 = document.querySelector('.block3-image img');

	var observer = new IntersectionObserver(entries => {
		entries.forEach(entry => {
			if (typeof getCurrentAnimationPreference === 'function' && !getCurrentAnimationPreference()) {
				return;
			}
			if (entry.isIntersecting) {
				entry.target.classList.add('block3-image-animation');
			}
		});
	});

	observer.observe(img1);
})();


(function () {
	var aee = document.querySelector('.block4-proj-image img');

	var observer = new IntersectionObserver(entries => {
		entries.forEach(entry => {
			if (typeof getCurrentAnimationPreference === 'function' && !getCurrentAnimationPreference()) {
				return;
			}
			if (entry.isIntersecting) {
				entry.target.classList.add('block4-image-animation');
			}
		});
	});

	observer.observe(aee);
})();

(function () {
	var img3 = document.querySelector('.block4-proj-image__second img');

	var observer = new IntersectionObserver(entries => {
		entries.forEach(entry => {
			if (typeof getCurrentAnimationPreference === 'function' && !getCurrentAnimationPreference()) {
				return;
			}
			if (entry.isIntersecting) {
				entry.target.classList.add('block4-image-animation');
			}
		});
	});

	observer.observe(img3);
})();

(function () {
	var aee = document.querySelector('.block4-proj-image__third img');

	var observer = new IntersectionObserver(entries => {
		entries.forEach(entry => {
			if (typeof getCurrentAnimationPreference === 'function' && !getCurrentAnimationPreference()) {
				return;
			}
			if (entry.isIntersecting) {
				entry.target.classList.add('block4-image-animation');
			}
		});
	});

	observer.observe(aee);
})();

(function () {
	var img3 = document.querySelector('.block4-proj-image__four img');

	var observer = new IntersectionObserver(entries => {
		entries.forEach(entry => {
			if (typeof getCurrentAnimationPreference === 'function' && !getCurrentAnimationPreference()) {
				return;
			}
			if (entry.isIntersecting) {
				entry.target.classList.add('block4-image-animation');
			}
		});
	});

	observer.observe(img3);
})();


