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
					<main class="main products-page">
						<div class="products-page__row container">
							<div class="breadcrumbs-block">
								<div class="breadcrumbs-block__container">
									<div class="breadcrumbs-block__item">
										<div class="breadcrumbs-block__item-icon">
											<svg width="28" height="29" viewBox="0 0 28 29" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<circle cx="7.73333" cy="21.2667" r="7.23333" stroke="#A4ACAD" />
												<circle cx="7.73334" cy="21.2667" r="1.93333" fill="#A4ACAD" />
												<circle cx="19.3333" cy="7.73333" r="7.23333" stroke="#A4ACAD" />
												<circle cx="19.3333" cy="7.73334" r="1.93333" fill="#A4ACAD" />
												<circle cx="5.8" cy="7.73334" r="3.36667" stroke="#A4ACAD" />
												<circle cx="5.8" cy="7.73334" r="0.966667" fill="#A4ACAD" />
												<circle cx="21.2667" cy="23.2" r="3.36667" stroke="#A4ACAD" />
												<circle cx="21.2667" cy="23.2" r="0.966667" fill="#A4ACAD" />
											</svg>
										</div>
										<span>Сеты</span>
									</div>
								</div>
							</div>
							<div class="filter-products">
								<div class="filter-products__head open-close-filter__js">
									<div class="filter-products__head-lines">
										<div class="filter-products__head-line line-1"></div>
										<div class="filter-products__head-line line-2"></div>
										<div class="filter-products__head-line line-3"></div>
									</div>
									<div class="filter-products__placeholder">Сортировка</div>
									<div class="filter-products__label">По умолчанию</div>
								</div>
								<div class="filter-products__body">
									<div class="filter-products__body-content">
										<ul>
											<li class="filter-products__item select-filter-item__js _hide">По умолчанию
											</li>
											<li class="filter-products__item select-filter-item__js">Название</li>
											<li class="filter-products__item select-filter-item__js">
												Сначала дешевле
											</li>
											<li class="filter-products__item select-filter-item__js">Сначала дороже</li>
											<li class="filter-products__item select-filter-item__js">
												Количество кусочков
											</li>
											<li class="filter-products__item select-filter-item__js">Вес</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<section class="box-products">
							<div class="box-products__container container">
								<div class="box-products__content">
									<div class="box-products__list">
										<div class="product-card box-product">
											<a href="" class="product-card__img box-product__img">
												<picture>
													<source srcset="img/filter-product/set-min.webp" type="image/webp">
													<img src="img/filter-product/set-min.jpg" alt="">
												</picture>
											</a>
											<div class="product-card__block box-product__block">
												<a href="" class="product-card__info box-product__info">
													<div class="product-card__label box-product__label">
														Саломон сет
													</div>
													<div class="product-card__ingredients box-product__ingredients">
														1050 грамм, 30 кусочков
													</div>
												</a>
												<div class="product-card__row box-product__row">
													<div class="product-card__price box-product__price">1500 СОМ
													</div>
													<div class="product-card__btns box-product__btns">
														<div
															class="product-card__btn box-product__btn btn add-product-card__js">
															<span>Хочу!</span>
														</div>
														<div class="quantity-number product-card__quantity">
															<div
																class="quantity-number__icon product-card__quantity-icon minus quantity-product-add-card__js">
																<?php include 'img/icons/minus.svg'; ?>
															</div>
															<div
																class="quantity-number__label product-card__quantity-label">
																1
															</div>
															<div
																class="quantity-number__icon product-card__quantity-icon plus quantity-product-add-card__js">
																<?php include 'img/icons/plus.svg'; ?>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="product-card box-product">
											<a href="" class="product-card__img box-product__img">
												<picture>
													<source srcset="img/filter-product/set-min.webp" type="image/webp">
													<img src="img/filter-product/set-min.jpg" alt="">
												</picture>
											</a>
											<div class="product-card__block box-product__block">
												<a href="" class="product-card__info box-product__info">
													<div class="product-card__label box-product__label">
														Саломон сет
													</div>
													<div class="product-card__ingredients box-product__ingredients">
														1050 грамм, 30 кусочков
													</div>
												</a>
												<div class="product-card__row box-product__row">
													<div class="product-card__price box-product__price">1500 СОМ
													</div>
													<div class="product-card__btns box-product__btns">
														<div
															class="product-card__btn box-product__btn btn add-product-card__js">
															<span>Хочу!</span>
														</div>
														<div class="quantity-number product-card__quantity">
															<div
																class="quantity-number__icon product-card__quantity-icon minus quantity-product-add-card__js">
																<?php include 'img/icons/minus.svg'; ?>
															</div>
															<div
																class="quantity-number__label product-card__quantity-label">
																1
															</div>
															<div
																class="quantity-number__icon product-card__quantity-icon plus quantity-product-add-card__js">
																<?php include 'img/icons/plus.svg'; ?>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="product-card box-product">
											<a href="" class="product-card__img box-product__img">
												<picture>
													<source srcset="img/filter-product/set2-min.webp" type="image/webp">
													<img src="img/filter-product/set2-min.jpg" alt="">
												</picture>
											</a>
											<div class="product-card__block box-product__block">
												<a href="" class="product-card__info box-product__info">
													<div class="product-card__label box-product__label">
														Саломон сет
													</div>
													<div class="product-card__ingredients box-product__ingredients">
														1050 грамм, 30 кусочков
													</div>
												</a>
												<div class="product-card__row box-product__row">
													<div class="product-card__price box-product__price">1500 СОМ
													</div>
													<div class="product-card__btns box-product__btns">
														<div
															class="product-card__btn box-product__btn btn add-product-card__js">
															<span>Хочу!</span>
														</div>
														<div class="quantity-number product-card__quantity">
															<div
																class="quantity-number__icon product-card__quantity-icon minus quantity-product-add-card__js">
																<?php include 'img/icons/minus.svg'; ?>
															</div>
															<div
																class="quantity-number__label product-card__quantity-label">
																1
															</div>
															<div
																class="quantity-number__icon product-card__quantity-icon plus quantity-product-add-card__js">
																<?php include 'img/icons/plus.svg'; ?>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="product-card box-product">
											<a href="" class="product-card__img box-product__img">
												<picture>
													<source srcset="img/filter-product/set3-min.webp" type="image/webp">
													<img src="img/filter-product/set3-min.jpg" alt="">
												</picture>
											</a>
											<div class="product-card__block box-product__block">
												<a href="" class="product-card__info box-product__info">
													<div class="product-card__label box-product__label">
														Саломон сет
													</div>
													<div class="product-card__ingredients box-product__ingredients">
														1050 грамм, 30 кусочков
													</div>
												</a>
												<div class="product-card__row box-product__row">
													<div class="product-card__price box-product__price">1500 СОМ
													</div>
													<div class="product-card__btns box-product__btns">
														<div
															class="product-card__btn box-product__btn btn add-product-card__js">
															<span>Хочу!</span>
														</div>
														<div class="quantity-number product-card__quantity">
															<div
																class="quantity-number__icon product-card__quantity-icon minus quantity-product-add-card__js">
																<?php include 'img/icons/minus.svg'; ?>
															</div>
															<div
																class="quantity-number__label product-card__quantity-label">
																1
															</div>
															<div
																class="quantity-number__icon product-card__quantity-icon plus quantity-product-add-card__js">
																<?php include 'img/icons/plus.svg'; ?>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="product-card box-product">
											<a href="" class="product-card__img box-product__img">
												<picture>
													<source srcset="img/filter-product/set-min.webp" type="image/webp">
													<img src="img/filter-product/set-min.jpg" alt="">
												</picture>
											</a>
											<div class="product-card__block box-product__block">
												<a href="" class="product-card__info box-product__info">
													<div class="product-card__label box-product__label">
														Саломон сет
													</div>
													<div class="product-card__ingredients box-product__ingredients">
														1050 грамм, 30 кусочков
													</div>
												</a>
												<div class="product-card__row box-product__row">
													<div class="product-card__price box-product__price">1500 СОМ
													</div>
													<div class="product-card__btns box-product__btns">
														<div
															class="product-card__btn box-product__btn btn add-product-card__js">
															<span>Хочу!</span>
														</div>
														<div class="quantity-number product-card__quantity">
															<div
																class="quantity-number__icon product-card__quantity-icon minus quantity-product-add-card__js">
																<?php include 'img/icons/minus.svg'; ?>
															</div>
															<div
																class="quantity-number__label product-card__quantity-label">
																1
															</div>
															<div
																class="quantity-number__icon product-card__quantity-icon plus quantity-product-add-card__js">
																<?php include 'img/icons/plus.svg'; ?>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="product-card box-product">
											<a href="" class="product-card__img box-product__img">
												<picture>
													<source srcset="img/filter-product/set-min.webp" type="image/webp">
													<img src="img/filter-product/set-min.jpg" alt="">
												</picture>
											</a>
											<div class="product-card__block box-product__block">
												<a href="" class="product-card__info box-product__info">
													<div class="product-card__label box-product__label">
														Саломон сет
													</div>
													<div class="product-card__ingredients box-product__ingredients">
														1050 грамм, 30 кусочков
													</div>
												</a>
												<div class="product-card__row box-product__row">
													<div class="product-card__price box-product__price">1500 СОМ
													</div>
													<div class="product-card__btns box-product__btns">
														<div
															class="product-card__btn box-product__btn btn add-product-card__js">
															<span>Хочу!</span>
														</div>
														<div class="quantity-number product-card__quantity">
															<div
																class="quantity-number__icon product-card__quantity-icon minus quantity-product-add-card__js">
																<?php include 'img/icons/minus.svg'; ?>
															</div>
															<div
																class="quantity-number__label product-card__quantity-label">
																1
															</div>
															<div
																class="quantity-number__icon product-card__quantity-icon plus quantity-product-add-card__js">
																<?php include 'img/icons/plus.svg'; ?>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="product-card box-product">
											<a href="" class="product-card__img box-product__img">
												<picture>
													<source srcset="img/filter-product/set2-min.webp" type="image/webp">
													<img src="img/filter-product/set2-min.jpg" alt="">
												</picture>
											</a>
											<div class="product-card__block box-product__block">
												<a href="" class="product-card__info box-product__info">
													<div class="product-card__label box-product__label">
														Саломон сет
													</div>
													<div class="product-card__ingredients box-product__ingredients">
														1050 грамм, 30 кусочков
													</div>
												</a>
												<div class="product-card__row box-product__row">
													<div class="product-card__price box-product__price">1500 СОМ
													</div>
													<div class="product-card__btns box-product__btns">
														<div
															class="product-card__btn box-product__btn btn add-product-card__js">
															<span>Хочу!</span>
														</div>
														<div class="quantity-number product-card__quantity">
															<div
																class="quantity-number__icon product-card__quantity-icon minus quantity-product-add-card__js">
																<?php include 'img/icons/minus.svg'; ?>
															</div>
															<div
																class="quantity-number__label product-card__quantity-label">
																1
															</div>
															<div
																class="quantity-number__icon product-card__quantity-icon plus quantity-product-add-card__js">
																<?php include 'img/icons/plus.svg'; ?>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="product-card box-product">
											<a href="" class="product-card__img box-product__img">
												<picture>
													<source srcset="img/filter-product/set3-min.webp" type="image/webp">
													<img src="img/filter-product/set3-min.jpg" alt="">
												</picture>
											</a>
											<div class="product-card__block box-product__block">
												<a href="" class="product-card__info box-product__info">
													<div class="product-card__label box-product__label">
														Саломон сет
													</div>
													<div class="product-card__ingredients box-product__ingredients">
														1050 грамм, 30 кусочков
													</div>
												</a>
												<div class="product-card__row box-product__row">
													<div class="product-card__price box-product__price">1500 СОМ
													</div>
													<div
														class="product-card__btn box-product__btn btn add-product-card__js">
														<span>Хочу!</span>
													</div>
												</div>
											</div>
										</div>
										<div class="product-card box-product">
											<a href="" class="product-card__img box-product__img">
												<picture>
													<source srcset="img/filter-product/set3-min.webp" type="image/webp">
													<img src="img/filter-product/set3-min.jpg" alt="">
												</picture>
											</a>
											<div class="product-card__block box-product__block">
												<a href="" class="product-card__info box-product__info">
													<div class="product-card__label box-product__label">
														Саломон сет
													</div>
													<div class="product-card__ingredients box-product__ingredients">
														1050 грамм, 30 кусочков
													</div>
												</a>
												<div class="product-card__row box-product__row">
													<div class="product-card__price box-product__price">1500 СОМ
													</div>
													<div class="product-card__btns box-product__btns">
														<div
															class="product-card__btn box-product__btn btn add-product-card__js">
															<span>Хочу!</span>
														</div>
														<div class="quantity-number product-card__quantity">
															<div
																class="quantity-number__icon product-card__quantity-icon minus quantity-product-add-card__js">
																<?php include 'img/icons/minus.svg'; ?>
															</div>
															<div
																class="quantity-number__label product-card__quantity-label">
																1
															</div>
															<div
																class="quantity-number__icon product-card__quantity-icon plus quantity-product-add-card__js">
																<?php include 'img/icons/plus.svg'; ?>
															</div>
														</div>
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

	<?php include_once 'inc/js.php'; ?>
</body>

</html>