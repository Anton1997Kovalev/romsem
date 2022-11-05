/* ------------------------- main-setting --------------------------- */


$(document).ready(function () {
	gsap.registerPlugin(ScrollTrigger);

	let maskPhone = document.querySelectorAll('input.maskphone');
	maskPhone.forEach(function (item) {
		item.setAttribute('placeholder', '+996 (___) __-__-__')
		const phoneMask = new IMask(item, {
			mask: "+{996} (000) 000-00-00",
			// lazy: false,
		});

	})

	$('.burger-menu__box').on('click', function () {
		$(this).parent().toggleClass('_active');
	})

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

	const discountSlider = new Swiper('.main-discount__slider', {
		// Optional parameters
		/*direction: 'vertical',*/
		loop: true,
		slidesPerView: 1,
		spaceBetween: 0,
		pagination: {
			el: '.main-discount__pagintaion.swiper-pagination',
			clickable: true,
		},
		// // Navigation arrows
		// navigation: {
		// 	nextEl: '.swiper-button-next',
		// 	prevEl: '.swiper-button-prev',
		// },
		// And if we need scrollbar
		/*scrollbar: {
		el: '.swiper-scrollbar',
		draggable: true,
		},*/
	});

	if ($(window).width() > 1024) {
		const filterSlider = new Swiper('.actual-products__slider', {
			// Optional parameters
			/*direction: 'vertical',*/
			loop: false,
			slidesPerView: 'auto',
			spaceBetween: 0,
			navigation: {
				nextEl: '.actual-products__slider-controls .slider-controls__arrow.right',
				prevEl: '.actual-products__slider-controls .slider-controls__arrow.left',
			},
		});
	}


	$('.actual-product__label__js').on('click', function () {
		$(this).addClass('_active');
		$(this).siblings().removeClass('_active');
		$('.actual-products__slider').removeClass('_active');
		$('.actual-products__slider').eq($(this).index()).addClass('_active');
	})

	$('.max-height-block__js').on('click', function () {
		$(this).parent().toggleClass('_active');
		$('.order-product__body').toggleClass('_active');
		if ($(this).parent().hasClass('_active')) {
			$('.order-product__body').css('height', $('.order-product__info').outerHeight() + 'px')
		} else {
			$('.order-product__body').css('height', '19.7rem')
		}
	})

	$('.select-social-messager__js').on('click', function () {
		$(this).addClass('_active');
		$(this).siblings().removeClass('_active');
	})

	$('.open-close-filter__js').on('click', function () {
		$(this).parent().toggleClass('_active');
		if ($(this).parent().hasClass('_active')) {
			$(this).siblings('.filter-products__body').css('height', $(this).siblings('.filter-products__body').find('.filter-products__body-content').outerHeight() + 'px');
		} else {
			$(this).siblings('.filter-products__body').css('height', 0);
		}
	})

	$('.select-filter-item__js').on('click', function () {
		$(this).addClass('_hide');
		$(this).siblings().removeClass('_hide');
		$(this).closest('.filter-products').removeClass('_active');
		$(this).closest('.filter-products').find('.filter-products__head').addClass('_active');

		$(this).closest('.filter-products').find('.filter-products__label').text($(this).text());
		$(this).closest('.filter-products').find('.filter-products__body').css('height', 0);
	})

	function quantityNumberCard() {
		$('.quantity-product-add-card__js').on('click', function () {
			let num = Number($(this).siblings('.quantity-number__label').text());
			let res = 1;

			if ($(this).hasClass('plus')) {
				res = num + 1;
			}
			if ($(this).hasClass('minus')) {
				if (num > 1) {
					res = num - 1;
				}

				if (num === 1) {
					$(this).closest('.product-card__btns').removeClass('_active');
				}
			}
			$(this).siblings('.quantity-number__label').text(res);

		})

		$('.add-product-card__js').on('click', function () {
			$(this).parent().addClass('_active')
		})
	}

	quantityNumberCard()
});


/* ------------------------- main-setting END --------------------------- */



