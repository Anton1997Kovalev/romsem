<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
	<link rel="stylesheet" href="css/style.css">
	<title>Главная</title>
</head>

<body>
	<div class="page">
		<div class="page__container">
			<?php include_once 'inc/main-sidebar.php'; ?>
			<div class="page-body">
				<div class="page-body__container">
					<?php include_once 'inc/header.php'; ?>
					<main class="main main-page">
						<!-- <section class="breadcrumbs-block">
							<div class="breadcrumbs-block__container">
								<a href="#">Главная</a> —
								<span>Прием металлолома</span>
							</div>
						</section> -->
						<section class="main-discount">
							<div class="main-discount__container">
								<div class="main-discount__slider _swiper">
									<div class="main-discount__wrapper swiper-wrapper">
										<div class="main-discount__slide swiper-slide">
											<a href="#" class="main-discount__slide-body">
												<div class="main-discount__slide-img">
													<picture>
														<source srcset="img/discount/discount1-min.webp"
															type="image/webp">
														<img src="img/discount/discount1-min.jpg" alt="">
													</picture>
												</div>
											</a>
										</div>
										<div class="main-discount__slide swiper-slide">
											<a href="#" class="main-discount__slide-body">
												<div class="main-discount__slide-img">
													<picture>
														<source srcset="img/discount/discount1-min.webp"
															type="image/webp">
														<img src="img/discount/discount1-min.jpg" alt="">
													</picture>
												</div>
											</a>
										</div>
									</div>
									<div class="main-discount__pagintaion swiper-pagination"></div>
								</div>
							</div>
						</section>
						<section class="our-products">
							<div class="our-products__container container">
								<div class="our-products__content">
									<div class="our-products__categories mobile">
										<div class="our-products__category products-category">
											<a href="#" class="products-category__body">
												<div class="products-category__info top">
													<div class="products-category__label">
														Пицца
													</div>
													<!-- <div class="products-category__date">
														<span>скоро</span>
													</div> -->
												</div>
												<div class="products-category__img">
													<picture>
														<source srcset="img/categories/pizza-min.webp"
															type="image/webp">
														<img src="img/categories/pizza-min.jpg" alt="">
													</picture>
												</div>
											</a>
										</div>
										<div class="our-products__category products-category">
											<a href="#" class="products-category__body">
												<div class="products-category__info top">
													<div class="products-category__label">
														Сеты
													</div>
													<!-- <div class="products-category__date">
														<span>скоро</span>
													</div> -->
												</div>
												<div class="products-category__img">
													<picture>
														<source srcset="img/categories/sets-min.webp" type="image/webp">
														<img src="img/categories/sets-min.webp" alt="">
													</picture>
												</div>
											</a>
										</div>
										<div class="our-products__category products-category">
											<a href="#" class="products-category__body">
												<div class="products-category__info top">
													<div class="products-category__label">
														WOK
													</div>
													<!-- <div class="products-category__date">
														<span>скоро</span>
													</div> -->
												</div>
												<div class="products-category__img">
													<picture>
														<source srcset="img/categories/wok-min.webp" type="image/webp">
														<img src="img/categories/wok-min.jpg" alt="">
													</picture>
												</div>
											</a>
										</div>
										<div class="our-products__category products-category">
											<a href="#" class="products-category__body">
												<div class="products-category__info top">
													<div class="products-category__label">
														Роллы
													</div>
													<!-- <div class="products-category__date">
														<span>скоро</span>
													</div> -->
												</div>
												<div class="products-category__img">
													<picture>
														<source srcset="img/categories/rols-min.webp" type="image/webp">
														<img src="img/categories/rols-min.webp" alt="">
													</picture>
												</div>
											</a>
										</div>
										<div class="our-products__category products-category">
											<a href="#" class="products-category__body">
												<div class="products-category__info top">
													<div class="products-category__label">
														Суши
													</div>
													<!-- <div class="products-category__date">
														<span>скоро</span>
													</div> -->
												</div>
												<div class="products-category__img">
													<picture>
														<source srcset="img/categories/sushi-min.webp"
															type="image/webp">
														<img src="img/categories/sushi-min.jpg" alt="">
													</picture>
												</div>
											</a>
										</div>
										<div class="our-products__category products-category">
											<a href="#" class="products-category__body">
												<div class="products-category__info top">
													<div class="products-category__label">
														Супы
													</div>
													<div class="products-category__date">
														<span>скоро</span>
													</div>
												</div>
												<div class="products-category__img">
													<picture>
														<source srcset="img/categories/salad-min.webp"
															type="image/webp">
														<img src="img/categories/salad-min.jpg" alt="">
													</picture>
												</div>
											</a>
										</div>
										<div class="our-products__category products-category">
											<a href="#" class="products-category__body">
												<div class="products-category__info top">
													<div class="products-category__label">
														Салаты
													</div>
													<div class="products-category__date">
														<span>скоро</span>
													</div>
												</div>
												<div class="products-category__img">
													<picture>
														<source srcset="img/categories/salad-min.webp"
															type="image/webp">
														<img src="img/categories/salad-min.jpg" alt="">
													</picture>
												</div>
											</a>
										</div>
										<div class="our-products__category products-category">
											<a href="#" class="products-category__body">
												<div class="products-category__info top">
													<div class="products-category__label">
														Напитки
													</div>
													<!-- <div class="products-category__date">
														<span>скоро</span>
													</div> -->
												</div>
												<div class="products-category__img">
													<picture>
														<source srcset="img/categories/cola-min.webp" type="image/webp">
														<img src="img/categories/cola-min.jpg" alt="">
													</picture>
												</div>
											</a>
										</div>
										<div class="our-products__category products-category col-start-1 col-end-3">
											<a href="#" class="products-category__body">
												<div class="products-category__info bottom">
													<div class="products-category__label">
														Комбо
													</div>
													<!-- <div class="products-category__date">
														<span>скоро</span>
													</div> -->
												</div>
												<div class="products-category__img">
													<picture>
														<source srcset="img/categories/combo-min.webp"
															type="image/webp">
														<img src="img/categories/combo-min.webp" alt="">
													</picture>
												</div>
											</a>
										</div>
										<div class="our-products__category products-category">
											<a href="#" class="products-category__body">
												<div class="products-category__info bottom">
													<div class="products-category__label">
														С угрем
													</div>
													<!-- <div class="products-category__date">
														<span>скоро</span>
													</div> -->
												</div>
												<div class="products-category__img">
													<picture>
														<source srcset="img/categories/ugrem-min.webp"
															type="image/webp">
														<img src="img/categories/ugrem-min.jpg" alt="">
													</picture>
												</div>
											</a>
										</div>
										<div class="our-products__category products-category">
											<a href="#" class="products-category__body">
												<div class="products-category__info bottom">
													<div class="products-category__label">
														Корн дог
													</div>
													<!-- <div class="products-category__date">
														<span>скоро</span>
													</div> -->
												</div>
												<div class="products-category__img">
													<picture>
														<source srcset="img/categories/korndog-min.webp"
															type="image/webp">
														<img src="img/categories/korndog-min.jpg" alt="">
													</picture>
												</div>
											</a>
										</div>
										<div class="our-products__category products-category col-start-1 col-end-3">
											<a href="#" class="products-category__body">
												<div class="products-category__info bottom">
													<div class="products-category__label">
														Чикен
													</div>
													<!-- <div class="products-category__date">
														<span>скоро</span>
													</div> -->
												</div>
												<div class="products-category__img">
													<picture>
														<source srcset="img/categories/chiken-min.webp"
															type="image/webp">
														<img src="img/categories/chiken-min.jpg" alt="">
													</picture>
												</div>
											</a>
										</div>
										<div class="our-products__category products-category col-start-1 col-end-3">
											<a href="#" class="products-category__body">
												<div class="products-category__info bottom">
													<div class="products-category__label">
														Акции
													</div>
													<!-- <div class="products-category__date">
														<span>скоро</span>
													</div> -->
												</div>
												<div class="products-category__img">
													<picture>
														<source srcset="img/categories/akcii-min.webp"
															type="image/webp">
														<img src="img/categories/akcii-min.jpg" alt="">
													</picture>
												</div>
											</a>
										</div>
									</div>

									<div class="our-products__categories desktop">
										<div class="our-products__categories__row">
											<div class="our-products__category products-category">
												<a href="#" class="products-category__body">
													<div class="products-category__info bottom">
														<div class="products-category__label">
															Чикен
														</div>
														<!-- <div class="products-category__date">
															<span>скоро</span>
														</div> -->
													</div>
													<div class="products-category__img">
														<picture>
															<source srcset="img/categories/chiken-min.webp"
																type="image/webp">
															<img src="img/categories/chiken-min.jpg" alt="">
														</picture>
													</div>
												</a>
											</div>
											<div class="our-products__categories__column">
												<div class="our-products__category products-category">
													<a href="#" class="products-category__body">
														<div class="products-category__info bottom">
															<div class="products-category__label">
																С угрем
															</div>
															<!-- <div class="products-category__date">
																<span>скоро</span>
															</div> -->
														</div>
														<div class="products-category__img">
															<picture>
																<source srcset="img/categories/ugrem-min.webp"
																	type="image/webp">
																<img src="img/categories/ugrem-min.jpg" alt="">
															</picture>
														</div>
													</a>
												</div>
												<div class="our-products__category products-category">
													<a href="#" class="products-category__body">
														<div class="products-category__info bottom">
															<div class="products-category__label">
																Корн дог
															</div>
															<!-- <div class="products-category__date">
																<span>скоро</span>
															</div> -->
														</div>
														<div class="products-category__img">
															<picture>
																<source srcset="img/categories/korndog-min.webp"
																	type="image/webp">
																<img src="img/categories/korndog-min.jpg" alt="">
															</picture>
														</div>
													</a>
												</div>
											</div>

										</div>
										<div class="our-products__categories__row">
											<div class="our-products__category products-category">
												<a href="#" class="products-category__body">
													<div class="products-category__info bottom">
														<div class="products-category__label">
															Пицца
														</div>
														<!-- <div class="products-category__date">
															<span>скоро</span>
														</div> -->
													</div>
													<div class="products-category__img">
														<picture>
															<source srcset="img/categories/pizza-desktop-min.webp"
																type="image/webp">
															<img src="img/categories/pizza-desktop-min.jpg" alt="">
														</picture>
													</div>
												</a>
											</div>
											<div class="our-products__category products-category">
												<a href="#" class="products-category__body">
													<div class="products-category__info bottom">
														<div class="products-category__label">
															Акции
														</div>
														<!-- <div class="products-category__date">
															<span>скоро</span>
														</div> -->
													</div>
													<div class="products-category__img">
														<picture>
															<source srcset="img/categories/akcii-min.webp"
																type="image/webp">
															<img src="img/categories/akcii-min.jpg" alt="">
														</picture>
													</div>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section class="filter-products">
							<div class="filter-products__container container">
								<div class="filter-products__content">
									<div class="filter-products__tab">
										<div class="filter-products__labels">
											<div class="filter-products__label filter-product__label__js _active">
												Новинки
											</div>
											<div class="filter-products__label filter-product__label__js">
												Популярное
											</div>
										</div>
										<div class="filter-products__body">
											<div class="filter-products__slider _active">
												<div class="filter-products__slider-wrapper swiper-wrapper">
													<div class="filter-products__slide swiper-slide product-card">
														<div class="product-card__img">
															<picture>
																<source srcset="img/filter-product/set-min.webp"
																	type="image/webp">
																<img src="img/filter-product/set-min.jpg" alt="">
															</picture>
														</div>
														<div class="product-card__info">
															<div class="product-card__label">
																Саломон сет
															</div>
															<div class="product-card__ingredients">
																1050 грамм, 30 кусочков
															</div>
														</div>
														<div class="product-card__row">
															<div class="product-card__price">1500 СОМ</div>
															<div class="product-card__btn btn">
																<a href="#">Хочу!</a>
															</div>
														</div>
													</div>
													<div class="filter-products__slide swiper-slide product-card">
														<div class="product-card__img">
															<picture>
																<source srcset="img/filter-product/set2-min.webp"
																	type="image/webp">
																<img src="img/filter-product/set-min.jpg" alt="">
															</picture>
														</div>
														<div class="product-card__info">
															<div class="product-card__label">
																Филадельфия и лосось сет
															</div>
															<div class="product-card__ingredients">
																1260 грамм, 36 кусочков
															</div>
														</div>
														<div class="product-card__row">
															<div class="product-card__price">1150 СОМ</div>
															<div class="product-card__btn btn">
																<a href="#">Хочу!</a>
															</div>
														</div>
													</div>
													<div class="filter-products__slide swiper-slide product-card">
														<div class="product-card__img">
															<picture>
																<source srcset="img/filter-product/set3-min.webp"
																	type="image/webp">
																<img src="img/filter-product/set2-min.jpg" alt="">
															</picture>
														</div>
														<div class="product-card__info">
															<div class="product-card__label">
																Самая большая Филадельфия
															</div>
															<div class="product-card__ingredients">
																2050 грамм, 45 кусочков
															</div>
														</div>
														<div class="product-card__row">
															<div class="product-card__price">2100 СОМ</div>
															<div class="product-card__btn btn">
																<a href="#">Хочу!</a>
															</div>
														</div>
													</div>
													<div class="filter-products__slide swiper-slide product-card">
														<div class="product-card__img">
															<picture>
																<source srcset="img/filter-product/set-min.webp"
																	type="image/webp">
																<img src="img/filter-product/set-min.jpg" alt="">
															</picture>
														</div>
														<div class="product-card__info">
															<div class="product-card__label">
																Саломон сет
															</div>
															<div class="product-card__ingredients">
																1050 грамм, 30 кусочков
															</div>
														</div>
														<div class="product-card__row">
															<div class="product-card__price">1500 СОМ</div>
															<div class="product-card__btn btn">
																<a href="#">Хочу!</a>
															</div>
														</div>
													</div>
												</div>
												<div class="filter-products__slider-controls slider-controls">
													<div class="slider-controls__arrow left">
														<svg width="15" height="29" viewBox="0 0 15 29" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<path d="M14 1L1 14.5L14 28" stroke="#F2F2F2"
																stroke-linecap="round" />
														</svg>
													</div>
													<div class="slider-controls__arrow right">
														<svg width="15" height="29" viewBox="0 0 15 29" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<path d="M1 1L14 14.5L1 28" stroke="#F2F2F2"
																stroke-linecap="round" />
														</svg>
													</div>
												</div>
											</div>
											<div class="filter-products__slider">
												<div class="filter-products__slider-wrapper swiper-wrapper">
													<div class="filter-products__slide swiper-slide product-card">
														<div class="product-card__img">
															<picture>
																<source srcset="img/filter-product/set-min.webp"
																	type="image/webp">
																<img src="img/filter-product/set-min.jpg" alt="">
															</picture>
														</div>
														<div class="product-card__info">
															<div class="product-card__label">
																Саломон сет
															</div>
															<div class="product-card__ingredients">
																1050 грамм, 30 кусочков
															</div>
														</div>
														<div class="product-card__row">
															<div class="product-card__price">1500 СОМ</div>
															<div class="product-card__btn btn">
																<a href="#">Хочу!</a>
															</div>
														</div>
													</div>
													<!-- <div class="filter-products__slide swiper-slide product-card">
														<div class="product-card__img">
															<picture>
																<source srcset="img/filter-product/set2-min.webp"
																	type="image/webp">
																<img src="img/filter-product/set-min.jpg" alt="">
															</picture>
														</div>
														<div class="product-card__info">
															<div class="product-card__label">
																Филадельфия и лосось сет
															</div>
															<div class="product-card__ingredients">
																1260 грамм, 36 кусочков
															</div>
														</div>
														<div class="product-card__row">
															<div class="product-card__price">1150 СОМ</div>
															<div class="product-card__btn btn">
																<a href="#">Хочу!</a>
															</div>
														</div>
													</div>
													<div class="filter-products__slide swiper-slide product-card">
														<div class="product-card__img">
															<picture>
																<source srcset="img/filter-product/set3-min.webp"
																	type="image/webp">
																<img src="img/filter-product/set2-min.jpg" alt="">
															</picture>
														</div>
														<div class="product-card__info">
															<div class="product-card__label">
																Самая большая Филадельфия
															</div>
															<div class="product-card__ingredients">
																2050 грамм, 45 кусочков
															</div>
														</div>
														<div class="product-card__row">
															<div class="product-card__price">2100 СОМ</div>
															<div class="product-card__btn btn">
																<a href="#">Хочу!</a>
															</div>
														</div>
													</div> -->
												</div>
												<div class="filter-products__slider-controls slider-controls">
													<div class="slider-controls__arrow left">
														<svg width="15" height="29" viewBox="0 0 15 29" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<path d="M14 1L1 14.5L14 28" stroke="#F2F2F2"
																stroke-linecap="round" />
														</svg>
													</div>
													<div class="slider-controls__arrow right">
														<svg width="15" height="29" viewBox="0 0 15 29" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<path d="M1 1L14 14.5L1 28" stroke="#F2F2F2"
																stroke-linecap="round" />
														</svg>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<?php include_once 'inc/order-product-info.php'; ?>
					</main>
					<?php include_once 'inc/footer.php'; ?>
				</div>
			</div>
			<?php include_once 'inc/right-sidebar.php'; ?>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="js/imask.js"></script>
	<script src="js/gsap.min.js"></script>
	<script src="js/ScrollTrigger.min.js"></script>
	<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
	<!-- <script src="js/SmoothScroll.min.js"></script> -->
	<script src="js/form_ajax.js"></script>
	<script src="js/script.js"></script>
</body>

</html>