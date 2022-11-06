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

		$('.product-card').each(function (index, item) {
			$(item).attr('data-index', index);
		})

		function quantityFunc() {
			$('.quantity-product-add-card__js').on('click', function () {
				let num = Number($(this).closest('.product-card').attr('data-count-product'));
				let res = 0;

				if ($(this).hasClass('plus')) {
					res = num + 1;
				}
				if ($(this).hasClass('minus')) {
					if (num > 1) {
						res = num - 1;
					}

					if (num === 1) {
						$(this).closest('.product-card__btns').removeClass('_active');
						// $('.basket-block__item').eq($(this).closest('.product-card').data('index')).remove();
					}
				}
				$(this).closest('.product-card').attr('data-count-product', res)
				$(this).siblings('.quantity-number__label').text(res);

				console.log(num)

				$('.basket-block__list').find('[data-index="' + Number($(this).closest('.product-card').data('index')) + '"]').find('.basket-block__quantity-label').text(res)
			})
		}
		quantityFunc()


		$('.add-product-card__js').on('click', function () {
			$(this).parent().addClass('_active')

			if ($(this).closest('.product-card')) {
				$('.basket-block').addClass('_active');
				$('.basket-block__label').text('Корзина');

				let product = '<div class="basket-block__item" data-index="' + $(this).closest('.product-card').data('index') + '">' +
					'<div class="basket-block__item-img">' +
					'<picture>' +
					'<source srcset="' + $(this).closest('.product-card').find('.product-card__img').find('source').attr('srcset') + '" type="' + $(this).closest('.product-card').find('.product-card__img').find('source').attr('type') + '">' +
					'<img src="' + $(this).closest('.product-card').find('.product-card__img').find('img').attr('src') + '" alt="">' +
					'</picture>' +
					'</div>' +
					'<div class="basket-block__item-column">' +
					'<div class="basket-block__item-label">' + $(this).closest('.product-card').find('.product-card__label').text() + '</div>' +
					'<div class="basket-block__item-row">' +
					'<div class="basket-block__quantity quantity-number">' +
					'<div class="basket-block__quantity-icon quantity-number__icon minus quantity-product-add-card__js">' +
					'<svg width="23" height="2" viewBox="0 0 23 2" fill="none" xmlns="http://www.w3.org/2000/svg">' +
					'<path d="M1 1L22 0.999999" stroke="#111111" stroke-width="2" stroke-linecap="round"/>' +
					'</svg>' +
					'</div>' +
					'<div class="basket-block__quantity-label quantity-number__label">' +
					$(this).siblings('.quantity-number').find('.quantity-number__label').text() +
					'</div>' +
					'<div class="basket-block__quantity-icon quantity-number__icon plus quantity-product-add-card__js">' +
					'<svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">' +
					'<path d="M11 1V22" stroke="#F2F2F2" stroke-width="2" stroke-linecap="round"/>' +
					'<path d="M1 11L22 11" stroke="#F2F2F2" stroke-width="2" stroke-linecap="round"/>' +
					'</svg>' +
					'</div>' +
					'</div>' +
					'<div class="basket-block__item-price">' + $(this).closest('.product-card').find('.product-card__price').text() + '</div>' +
					'</div>' +
					'</div>' +
					'</div>';

				$('.basket-block__list').append(product);


			}


		})
	}

	quantityNumberCard()
});


/* ------------------------- main-setting END --------------------------- */



