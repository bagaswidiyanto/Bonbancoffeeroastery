<div class="container-xxl shop px-0" id="shop">
    <h6 class="verticals uprights">IN OUR SHOP</h6>
    <div class="shop-area">
        <div class="slider-container">
            <div class="swiper-container shop-slider">
                <div class="swiper-wrapper">
                    <?php foreach ($shop as $shop) { ?>
                    <div class="swiper-slide">
                        <div class="box-shop text-center">
                            <div class="shop-img ">
                                <img src="https://admin103.bonbancoffeeroastery.com/upload/shop/<?= $shop->image; ?>"
                                    class="img-fluid" alt="">
                            </div>
                            <div class="shop-content p-3">
                                <h6 class="mb-4"><?= $shop->nama; ?></h6>
                                <a href=""
                                    class="border border-2 border-dark rounded-pill py-2 px-3 px-sm-4 text-black">Rp
                                    <?= number_format($shop->price, 2, ',', '.'); ?></a><br>
                                <a class="border border-2 border-dark btn btn-dark rounded-pill py-2 px-3 px-sm-4 mt-3"
                                    href="https://wa.wizard.id/2c2b87" target="_blank">Buy Now!</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl about">
    <h6 class="verticals uprights">IN OUR MINDS</h6>
    <?= $website->description; ?>
</div>

<div class="container-xxl gallery">
    <h6 class="verticals uprights">IN OUR GALLERY</h6>
    <div class="container">

        <div class="slider-container m-3">
            <div class="swiper-container gallery-slider">
                <div class="swiper-wrapper">
                    <?php foreach ($gallery as $gal) { ?>
                    <div class="swiper-slide">
                        <div class="gallery-img ">
                            <img src="https://admin103.bonbancoffeeroastery.com/upload/gallery/<?= $gal->image; ?>"
                                title="<?= $gal->name; ?>" class="img-fluid" alt="">
                        </div>
                    </div>

                    <?php } ?>
                </div>
            </div>
        </div>

    </div>
</div>