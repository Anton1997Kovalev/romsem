/* ------------------------- main-setting --------------------------- */
gsap.registerPlugin(ScrollTrigger);
$('.burger-menu__box').on('click', function () {
	$(this).parent().toggleClass('_active');
})
/* ------------------------- main-setting END --------------------------- */

function funcScroll() {
	let scrollPos = 0;
	$(window).scroll(function () {
		let st = $(this).scrollTop();
		if (st > scrollPos + 10) {
			console.log('Down!');
		} else if (st < scrollPos - 10) {
			console.log('Up!');
		}
		scrollPos = st;
		if (st > 10) {
			$('.header').addClass('scroll');
		} else {
			$('.header').removeClass('scroll');
		}
	});

	gsap.to(gallery_Wrapper, {
		scrollTrigger: {
			trigger: '.gallery',
			start: '0% 0%',
			end: 'bottom bottom',
			pinSpacing: false,
			scrub: true,
			markers: true,
			// markers: { startColor: "blue", endColor: "red", fontSize: "18px", fontWeight: "bold", indent: 400 },
			// fastScrollEnd: 3000,
			// pin: true,
			// id: 'image',
			// toggleActions: 'pause',
			onEnter: () => {
			},
			onEnterBack: () => {

			},//Вернусля в блок
			onLeave: () => {
			},//Покинул блок
			onLeaveBack: () => {
			},//Вернулся в покинувший блок
		},
	});

	SmoothScroll({
		// Время скролла 400 = 0.4 секунды
		animationTime: 900,
		// Размер шага в пикселях
		stepSize: 100,

		// Дополнительные настройки:

		// Ускорение
		accelerationDelta: 130,
		// Максимальное ускорение
		accelerationMax: 1,

		// Поддержка клавиатуры
		keyboardSupport: true,
		// Шаг скролла стрелками на клавиатуре в пикселях
		arrowScroll: 50,

		// Pulse (less tweakable)
		// ratio of "tail" to "acceleration"
		pulseAlgorithm: true,
		pulseScale: 4,
		pulseNormalize: 1,

		// Поддержка тачпада
		touchpadSupport: true,
	})
}


