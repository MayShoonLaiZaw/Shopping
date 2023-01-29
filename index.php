<?php 
require_once "init/classes/Products.php";
    $products = new Products;
    $cate_name10 = $products->checkCategory2();
    // var_dump( $cate_name10);
    // $cate= $products->showProductsfirst($cate_name10->category_name);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Shopping</title>
        <link rel="stylesheet" href="./assets/css/index.css">
    </head>
    <body>
        <header>
            <div class="header flex-container">
                <div class="header-logo flex-container">
                    <div class="logo-icons">
                        <i class="fa fa-bars"></i>
                    </div>
                    <div class="logo-photo">
                        <div class="logo-icon">
                            <img src="assets/images/da7854c889578743810e7970ae28671f.png" alt="logo-img">
                        </div>          
                    </div>
                </div>
                <div class="nav">
                    <nav>
                        <ul class="navbar flex-container">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#">Popular</a></li>
                            <li><a href="#">Reviews</a></li>
                            <li><a href="#">Latest</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="account-icons">
                    <a href="sign_in.php"><i class="fa-solid fa-right-to-bracket"></i><a>
                    <a href="shopping_card.php"><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
            </div>
        </header>
        <main>
            <section>
                <div class="aside-products flex-container">
                    <div class="aside">
                        <div class="category">
                            <h2>Category</h2>
                            <div class="category-parts">
                                <ul class="category-lists">
                                    <?php
                                        foreach($products->checkCategory() as $cate_name) {
                                    ?>
                                        <li><a href="#cate-<?php echo $cate_name->id; ?>"><?php echo $cate_name->category_name; ?></a></li>
                                    <?php
                                        }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="clothes-special">
                            <?php foreach($products->showSpecial($cate_name10->category_name) as $product_special) {
                            
                            ?>
                            <a href="productsPage.php?id=<?php echo $product_special->id; ?>">
                                <div class="clothes-special-para">
                                    <h4><?php echo $product_special->product_name; ?></h4>
                                    <div class="popular-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <div class="clothes-special-photo">
                                    <div class="clothes-special-img">
                                        <img src="assets/images/<?php echo $product_special->product_image;?>" alt="<?php echo $product_special->product_name; ?>">
                                    </div>
                                </div>
                            </a>
                            
                            <?php
                            }
                            ?>
                        </div>
                        <div class="latest-products">
                            <h3>Latest Products</h3>
                            <div class="latest-products-collections">
                                <div class="latest-products-list1 flex-container">
                                    <div class="latest-products-photo">
                                        <div class="latest-products-img">
                                            <img src="assets/images/61qc2IzBjTL._UL1000_.jpg" alt="latest-handbag">
                                        </div>
                                    </div>  
                                    <div class="latest-products-para">
                                        <h4>Black HandBag</h4>
                                        <div class="popular-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4>50000 Ks</h4>
                                    </div>
                                </div>
                                <?php
                                    foreach($products->showLatest($cate_name10->category_name) as $aside_latest) {

                                ?>
                                <a href="productsPage.php?id=<?php echo $aside_latest->id; ?>">
                                    <div class="latest-products-list1 flex-container">
                                        <div class="latest-products-photo">
                                            <div class="latest-products-img">
                                                <img src="assets/images/<?php echo $aside_latest->product_image; ?>" alt="<?php echo $aside_latest->product_name; ?>">
                                            </div>
                                        </div>  
                                        <div class="latest-products-para">
                                            <h4><?php echo $aside_latest->product_name; ?></h4>
                                            <div class="popular-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4><?php echo $aside_latest->product_price; ?>Ks</h4>
                                        </div>
                                    </div>
                                </a>
                                <?php
                                }
                                ?>
                                <div class="latest-products-list1 flex-container">
                                    <div class="latest-products-photo">
                                        <div class="latest-products-img">
                                            <img src="assets/images/347660996-14101-Beautiful-Shoes.jpg" alt="latest-beautiful-shoes">
                                        </div>
                                    </div>  
                                    <div class="latest-products-para">
                                        <h4>Wedding Shoes</h4>
                                        <div class="popular-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4>40000 Ks</h4>
                                    </div>
                                </div>
                                <div class="latest-products-list1 flex-container">
                                    <div class="latest-products-photo">
                                        <div class="latest-products-img">
                                            <img src="assets/images/81BuagE0PhL._UL1500_.jpg" alt="latest-hat">
                                        </div>
                                    </div>  
                                    <div class="latest-products-para">
                                        <h4>Pink Hats</h4>
                                        <div class="popular-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4>25000 Ks</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="customer-reviews">
                            <h3>Customer Reviews</h3>
                            <div class="customer-reviews-collections">
                                <div class="customer-reviews-list">
                                    <div class="customer-reviews-photo">
                                        <div class="customer-reviews-img">
                                            <img src="assets/images/360_F_187145146_SB34n4kdiNqlVSvaTy4YUJcUWjNO540N.jpg" alt="customer-photo">
                                        </div>
                                    </div>
                                    <div class="customer-reviews-para">
                                        <h4>Merry James</h4>
                                        <h5>Pianist</h5>
                                        <p>Lorem ipsum dolor,sit amet consectetur adipisicing elit. A, beatae est nulla sit error dolores veritatis fugiat quia accusamus dolor distinctio, modi, suscipit architecto recusandae vel commodi. Exercitationem,repellat hic?</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="promotions">
                            <?php
                                foreach($products->showPromotions($cate_name10->category_name) as $aside_promotions) {

                            ?>
                            <a href="productsPage.php?id=<?php echo $aside_promotions->id; ?>">
                                <div class="promotions-cloth-para">
                                    <h3><?php echo $aside_promotions->product_name; ?></h3>
                                    <h4>Get up to 20% off</h4>
                                    <div class="product-button">
                                        <button type="submit">Shop Now </button>
                                    </div>
                                </div>
                                <div class="promotions-cloth-photo">
                                    <div class="promotions-cloth-img">
                                        <img src="assets/images/<?php echo $aside_promotions->product_image; ?>" alt="<?php echo $aside_promotions->product_name; ?>">
                                    </div>
                                </div>
                            </a>
                            <?php
                                }
                            ?>
                        </div>
                        <div class="newsletter">
                            <h3>Newsletter</h3>
                            <div class="newsletter-icon">
                                <i class="fa-solid fa-paper-plane"></i>
                            </div>
                            <p>Get more informations about our shops and special offers.</p>
                            <form method="">
                                <div class="newsletter-email">
                                    <input type="email" placeholder="Your Email Address">
                                </div>
                                <div class="newsletter-btn">
                                    <button type="submit">Send Now</button>
                                </div>
                            </form>
                        </div>
                        <div class="clothes-special">
                            <?php foreach($products->showSpecial2($cate_name10->category_name) as $product_special2) {
                            
                            ?>
                            <a href="productsPage.php?id=<?php echo $product_special2->id; ?>">
                                <div class="clothes-special-para">
                                    <h4><?php echo $product_special2->product_name; ?></h4>
                                    <div class="popular-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <div class="clothes-special-photo">
                                    <div class="clothes-special-img">
                                        <img src="assets/images/<?php echo $product_special2->product_image;?>" alt="<?php echo $product_special2->product_name; ?>">
                                    </div>
                                </div>
                            </a>
                            
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="cloth-products" id="cate-1">
                        <form method="">
                            <div class="search-input flex-container">
                                <input type="text" name="search" placeholder="Search Here">
                                <div class="search-btn">
                                    <button type="submit" name="search-icon"><i class="fa fa-magnifying-glass"></i></button>
                                </div>
                            </div>
                        </form>
                        <div class="products-animation">
                            <div class="big-product flex-container"data-carousel>
                                <div class="left-icon" data-carousel-button='prev'>
                                    <i class="fa-solid fa-caret-left"></i>
                                </div>
                                <div class="product-overflow" data-slides>
                                    <div class="product-collections flex-container" data-active>
                                        <div class="big-photo">
                                            <div class="big-img">
                                            </div>
                                        </div>
                                        <div class="photo-para">
                                            <h1>Shoes Collections</h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab similique reiciendis facere quasi alias, quis animi libero distinctio. Minima earum voluptatem quasi temporibus aspernatur nulla ex. Minima eveniet distih1ctio iure.<h1>
                                            <div class="product-button">
                                                <button type="submit">Shop Now </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-collections flex-container">
                                        <div class="big-photo">
                                            <div class="big-img1">
                                            </div>
                                        </div>
                                        <div class="photo-para">
                                            <h1>Clothes Collections</h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab similique reiciendis facere quasi alias, quis animi libero distinctio. Minima earum voluptatem quasi temporibus aspernatur nulla ex. Minima eveniet distinctio iure.</p>
                                            <div class="product-button">
                                                <button type="submit">Shop Now </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-collections flex-container">
                                        <div class="big-photo">
                                            <div class="big-img2">
                                            </div>
                                        </div>
                                        <div class="photo-para">
                                            <h1>Beautiful Hats Collections</h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab similique reiciendis facere quasi alias, quis animi libero distinctio. Minima earum voluptatem quasi temporibus aspernatur nulla ex. Minima eveniet distinctio iure.</p>
                                            <div class="product-button">
                                                <button type="submit">Shop Now</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-collections flex-container">
                                        <div class="big-photo">
                                            <div class="big-img3">
                                            </div>
                                        </div>
                                        <div class="photo-para">
                                            <h1>New Bags Collections</h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab similique reiciendis facere quasi alias, quis animi libero distinctio. Minima earum voluptatem quasi temporibus aspernatur nulla ex. Minima eveniet distinctio iure.</p>
                                            <div class="product-button">
                                                <button type="submit">Shop Now </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-icon" data-carousel-button='next'>
                                    <i class="fa-solid fa-caret-right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="products-show flex-container">
                            <?php
                            // foreach($products->checkCategory() as $cate_name2) {
                                foreach ($products->showProductsfirst($cate_name10->category_name) as $products2){
                            ?>
                                <a href="productsPage.php?id=<?php echo $products2->id; ?>">
                                    <div class="products-show1 flex-container">
                                        <div class="products-show-para">
                                            <h3><?php echo $products2->product_name; ?></h3>
                                            <h2><?php echo $products2->product_price; ?>Ks</h2>
                                            <div class="product-button">
                                                <button type="submit">Shop Now </button>
                                            </div>
                                        </div>
                                        <div class="products-show-photo">
                                            <div class="products-show-img">
                                                <img src="assets/images/<?php echo $products2->product_image; ?>" alt="<?php echo $products2->product_name; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <?php
                                }
                            // }
                            ?>
                        </div>
                        <div class="popular-products">
                            <h2>Popular Products For You</h2>
                            <div class="popular-products-shows flex-container">
                                <?php foreach ($products->showProductseight($cate_name10->category_name) as $products8) {

                                ?>
                                <a href="productsPage.php?id=<?php echo $products8->id ?>">
                                    <div class="popular-products-list">
                                        <div class="popular-products-photo">
                                            <div class="popular-products-img">
                                                <img src="assets/images/<?php echo $products8->product_image; ?>" alt="<?php echo $products8->product_name; ?>">
                                            </div>
                                        </div>
                                        <div class="popular-products-para">
                                            <h3><?php echo $products8->product_name; ?></h3>
                                            <div class="popular-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h1><?php echo $products8->product_price; ?>Ks</h1>
                                        </div>
                                    </div>
                                </a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="products-show flex-container">
                            <?php foreach($products->showProductsecond($cate_name10->category_name) as $products4) {
                            
                            ?>
                            <a href="productsPage.php?id=<?php echo $products4->id; ?>">
                                <div class="products-show1 flex-container">
                                    <div class="products-show-photo">
                                        <div class="products-show-img">
                                            <img src="assets/images/<?php echo $products4->product_image; ?>" alt="<?php echo $products4->product_name; ?>">
                                        </div>
                                    </div>
                                    <div class="products-show-para">
                                        <h3><?php echo $products4->product_name; ?></h3>
                                        <h2><?php echo $products4->product_price; ?>Ks</h2>
                                        <div class="product-button">
                                            <button type="submit">Add To Card</button>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="product-collections-gallery">
                            <h2>Products Gallery</h2>
                            <div class="product-collections-gallery-list flex-container">
                                <?php foreach($products->showProductsfive($cate_name10->category_name) as $products5) {
                                    
                                ?>
                                <a href="productsPage.php?id=<?php echo $products5->id; ?>">
                                    <div class="product-collections-gallery-list-show">
                                        <div class="product-collections-list1 product-gallery">
                                            <div class="product-collections-list1-img">
                                                <img src="assets/images/<?php echo $products5->product_image ?>" alt="<?php echo $products5->product_name; ?>">
                                            </div>
                                        </div>
                                        <div class="product-collections-list-para">
                                            <h3><?php echo $products5->product_name; ?></h3>
                                            <div class="popular-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="latest-products-gallery">
                            <h2>Latest Products</h2>
                            <div class="latest-products-gallery-collections flex-container">
                            <?php foreach($products->showProductsfour($cate_name10->category_name) as $productLatest) {

                            ?>
                            <div class="latest-products-list flex-container">
                                <div class="latest-products-gallery-photo">
                                    <a href="productsPage.php?id=<?php echo $productLatest->id; ?>">
                                        <div class="latest-products-gallery-img">
                                            <img src="assets/images/<?php echo $productLatest->product_image; ?>" alt="<?php echo $productLatest->product_name; ?>">
                                        </div>
                                    </a>
                                </div>
                                <div class="latest-products-gallery-para">
                                    <h3><?php echo $productLatest->product_name; ?></h3>
                                    <div class="popular-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3><?php echo $productLatest->product_price; ?>Ks</h3>
                                    <div class="latest-products-gallery-button flex-container">
                                        <div class="latest-products-gallery-btn">
                                            <button type="submit">Add To Card</button>
                                        </div>
                                        <div class="latest-products-gallery-icon">
                                            <button type="submit"><i class="fa fa-heart"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php

                            }  
                            ?>
                            </div>
                        </div>
                        <div class="our-brands">
                            <h2>Our Brands</h2>
                            <div class="brand-collections flex-container">
                                <div class="brand-list">
                                    <div class="brand-img">
                                        <img src="assets/images/Louis-Vuitton-1.png" alt="brand">
                                    </div>
                                </div>
                                <div class="brand-list">
                                    <div class="brand-img">
                                        <img src="assets/images/1600w-EgmHp0rUqI4.jpg" alt="brand">
                                    </div>
                                </div>
                                <div class="brand-list">
                                    <div class="brand-img">
                                        <img src="assets/images/Gucci.png" alt="brand">
                                    </div>
                                </div>
                                <div class="brand-list">
                                    <div class="brand-img">
                                        <img src="assets/images/images (5).jpg" alt="brand">
                                    </div>
                                </div>
                                <div class="brand-list">
                                    <div class="brand-img">
                                        <img src="assets/images/nike-swoosh-logo-png-the-top-10-most-popular-shoe-brands-everyone-is-wearing-top-10-rate-pict-e1487113717390.png" alt="brand">
                                    </div>
                                </div>
                                <div class="brand-list">
                                    <div class="brand-img">
                                        <img src="assets/images/ralph lauren.jpg" alt="brand">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="cloth-products" id="cate-2">
                        <h1>Hello Shoes</h1>
                        <form method="">
                            <div class="search-input flex-container">
                                <input type="text" name="search" placeholder="Search Here">
                                <div class="search-btn">
                                    <button type="submit" name="search-icon"><i class="fa fa-magnifying-glass"></i></button>
                                </div>
                            </div>
                        </form>
                        <div class="products-animation">
                            <div class="big-product flex-container"data-carousel>
                                <div class="left-icon" data-carousel-button='prev'>
                                    <i class="fa-solid fa-caret-left"></i>
                                </div>
                                <div class="product-overflow" data-slides>
                                    <div class="product-collections flex-container" data-active>
                                        <div class="big-photo">
                                            <div class="big-img">
                                            </div>
                                        </div>
                                        <div class="photo-para">
                                            <h1>Shoes Collections</h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab similique reiciendis facere quasi alias, quis animi libero distinctio. Minima earum voluptatem quasi temporibus aspernatur nulla ex. Minima eveniet distih1ctio iure.<h1>
                                            <div class="product-button">
                                                <button type="submit">Shop Now </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-collections flex-container">
                                        <div class="big-photo">
                                            <div class="big-img1">
                                            </div>
                                        </div>
                                        <div class="photo-para">
                                            <h1>Clothes Collections</h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab similique reiciendis facere quasi alias, quis animi libero distinctio. Minima earum voluptatem quasi temporibus aspernatur nulla ex. Minima eveniet distinctio iure.</p>
                                            <div class="product-button">
                                                <button type="submit">Shop Now </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-collections flex-container">
                                        <div class="big-photo">
                                            <div class="big-img2">
                                            </div>
                                        </div>
                                        <div class="photo-para">
                                            <h1>Beautiful Hats Collections</h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab similique reiciendis facere quasi alias, quis animi libero distinctio. Minima earum voluptatem quasi temporibus aspernatur nulla ex. Minima eveniet distinctio iure.</p>
                                            <div class="product-button">
                                                <button type="submit">Shop Now</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-collections flex-container">
                                        <div class="big-photo">
                                            <div class="big-img3">
                                            </div>
                                        </div>
                                        <div class="photo-para">
                                            <h1>New Bags Collections</h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab similique reiciendis facere quasi alias, quis animi libero distinctio. Minima earum voluptatem quasi temporibus aspernatur nulla ex. Minima eveniet distinctio iure.</p>
                                            <div class="product-button">
                                                <button type="submit">Shop Now </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-icon" data-carousel-button='next'>
                                    <i class="fa-solid fa-caret-right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="products-show flex-container">
                            <?php
                            // foreach($products->checkCategory() as $cate_name2) {
                                foreach ($products->showProductsfirst($cate_name10->category_name) as $products2){
                            ?>
                                <a href="productsPage.php?id=<?php echo $products2->id; ?>">
                                    <div class="products-show1 flex-container">
                                        <div class="products-show-para">
                                            <h3><?php echo $products2->product_name; ?></h3>
                                            <h2><?php echo $products2->product_price; ?>Ks</h2>
                                            <div class="product-button">
                                                <button type="submit">Shop Now </button>
                                            </div>
                                        </div>
                                        <div class="products-show-photo">
                                            <div class="products-show-img">
                                                <img src="assets/images/<?php echo $products2->product_image; ?>" alt="<?php echo $products2->product_name; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <?php
                                }
                            // }
                            ?>
                        </div>
                        <div class="popular-products">
                            <h2>Popular Products For You</h2>
                            <div class="popular-products-shows flex-container">
                                <?php foreach ($products->showProductseight($cate_name10->category_name) as $products8) {

                                ?>
                                <a href="productsPage.php?id=<?php echo $products8->id ?>">
                                    <div class="popular-products-list">
                                        <div class="popular-products-photo">
                                            <div class="popular-products-img">
                                                <img src="assets/images/<?php echo $products8->product_image; ?>" alt="<?php echo $products8->product_name; ?>">
                                            </div>
                                        </div>
                                        <div class="popular-products-para">
                                            <h3><?php echo $products8->product_name; ?></h3>
                                            <div class="popular-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h1><?php echo $products8->product_price; ?>Ks</h1>
                                        </div>
                                    </div>
                                </a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="products-show flex-container">
                            <?php foreach($products->showProductsecond($cate_name10->category_name) as $products4) {
                            
                            ?>
                            <a href="productsPage.php?id=<?php echo $products4->id; ?>">
                                <div class="products-show1 flex-container">
                                    <div class="products-show-photo">
                                        <div class="products-show-img">
                                            <img src="assets/images/<?php echo $products4->product_image; ?>" alt="<?php echo $products4->product_name; ?>">
                                        </div>
                                    </div>
                                    <div class="products-show-para">
                                        <h3><?php echo $products4->product_name; ?></h3>
                                        <h2><?php echo $products4->product_price; ?>Ks</h2>
                                        <div class="product-button">
                                            <button type="submit">Add To Card</button>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="product-collections-gallery">
                            <h2>Products Gallery</h2>
                            <div class="product-collections-gallery-list flex-container">
                                <?php foreach($products->showProductsfive($cate_name10->category_name) as $products5) {
                                    
                                ?>
                                <a href="productsPage.php?id=<?php echo $products5->id; ?>">
                                    <div class="product-collections-gallery-list-show">
                                        <div class="product-collections-list1 product-gallery">
                                            <div class="product-collections-list1-img">
                                                <img src="assets/images/<?php echo $products5->product_image ?>" alt="<?php echo $products5->product_name; ?>">
                                            </div>
                                        </div>
                                        <div class="product-collections-list-para">
                                            <h3><?php echo $products5->product_name; ?></h3>
                                            <div class="popular-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="latest-products-gallery">
                            <h2>Latest Products</h2>
                            <div class="latest-products-gallery-collections flex-container">
                            <?php foreach($products->showProductsfour($cate_name10->category_name) as $productLatest) {

                            ?>
                            <div class="latest-products-list flex-container">
                                <div class="latest-products-gallery-photo">
                                    <a href="productsPage.php?id=<?php echo $productLatest->id; ?>">
                                        <div class="latest-products-gallery-img">
                                            <img src="assets/images/<?php echo $productLatest->product_image; ?>" alt="<?php echo $productLatest->product_name; ?>">
                                        </div>
                                    </a>
                                </div>
                                <div class="latest-products-gallery-para">
                                    <h3><?php echo $productLatest->product_name; ?></h3>
                                    <div class="popular-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3><?php echo $productLatest->product_price; ?>Ks</h3>
                                    <div class="latest-products-gallery-button flex-container">
                                        <div class="latest-products-gallery-btn">
                                            <button type="submit">Add To Card</button>
                                        </div>
                                        <div class="latest-products-gallery-icon">
                                            <button type="submit"><i class="fa fa-heart"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php

                            }  
                            ?>
                            </div>
                        </div>
                        <div class="our-brands">
                            <h2>Our Brands</h2>
                            <div class="brand-collections flex-container">
                                <div class="brand-list">
                                    <div class="brand-img">
                                        <img src="assets/images/Louis-Vuitton-1.png" alt="brand">
                                    </div>
                                </div>
                                <div class="brand-list">
                                    <div class="brand-img">
                                        <img src="assets/images/1600w-EgmHp0rUqI4.jpg" alt="brand">
                                    </div>
                                </div>
                                <div class="brand-list">
                                    <div class="brand-img">
                                        <img src="assets/images/Gucci.png" alt="brand">
                                    </div>
                                </div>
                                <div class="brand-list">
                                    <div class="brand-img">
                                        <img src="assets/images/images (5).jpg" alt="brand">
                                    </div>
                                </div>
                                <div class="brand-list">
                                    <div class="brand-img">
                                        <img src="assets/images/nike-swoosh-logo-png-the-top-10-most-popular-shoe-brands-everyone-is-wearing-top-10-rate-pict-e1487113717390.png" alt="brand">
                                    </div>
                                </div>
                                <div class="brand-list">
                                    <div class="brand-img">
                                        <img src="assets/images/ralph lauren.jpg" alt="brand">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- <div class="cloth-products" id="cate-2">
                        <h1>Hello Shoes</h1>
                        <form method="">
                            <div class="search-input flex-container">
                                <input type="text" name="search" placeholder="Search Here">
                                <div class="search-btn">
                                    <button type="submit" name="search-icon"><i class="fa fa-magnifying-glass"></i></button>
                                </div>
                            </div>
                        </form>
                        <div class="products-animation">
                            <div class="big-product flex-container"data-carousel>
                                <div class="left-icon" data-carousel-button='prev'>
                                    <i class="fa-solid fa-caret-left"></i>
                                </div>
                                <div class="product-overflow" data-slides>
                                    <div class="product-collections flex-container" data-active>
                                        <div class="big-photo">
                                            <div class="big-img">
                                            </div>
                                        </div>
                                        <div class="photo-para">
                                            <h1>Shoes Collections</h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab similique reiciendis facere quasi alias, quis animi libero distinctio. Minima earum voluptatem quasi temporibus aspernatur nulla ex. Minima eveniet distih1ctio iure.<h1>
                                            <div class="product-button">
                                                <button type="submit">Shop Now </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-collections flex-container">
                                        <div class="big-photo">
                                            <div class="big-img1">
                                            </div>
                                        </div>
                                        <div class="photo-para">
                                            <h1>Clothes Collections</h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab similique reiciendis facere quasi alias, quis animi libero distinctio. Minima earum voluptatem quasi temporibus aspernatur nulla ex. Minima eveniet distinctio iure.</p>
                                            <div class="product-button">
                                                <button type="submit">Shop Now </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-collections flex-container">
                                        <div class="big-photo">
                                            <div class="big-img2">
                                            </div>
                                        </div>
                                        <div class="photo-para">
                                            <h1>Beautiful Hats Collections</h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab similique reiciendis facere quasi alias, quis animi libero distinctio. Minima earum voluptatem quasi temporibus aspernatur nulla ex. Minima eveniet distinctio iure.</p>
                                            <div class="product-button">
                                                <button type="submit">Shop Now</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-collections flex-container">
                                        <div class="big-photo">
                                            <div class="big-img3">
                                            </div>
                                        </div>
                                        <div class="photo-para">
                                            <h1>New Bags Collections</h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab similique reiciendis facere quasi alias, quis animi libero distinctio. Minima earum voluptatem quasi temporibus aspernatur nulla ex. Minima eveniet distinctio iure.</p>
                                            <div class="product-button">
                                                <button type="submit">Shop Now </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-icon" data-carousel-button='next'>
                                    <i class="fa-solid fa-caret-right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="products-show flex-container">
                            <?php
                            foreach ($products->showProductsfirst($cate_name->category_name) as $shoes2){
                            ?>
                                <a href="productsPage.php?shoes_id=<?php echo $products2->id; ?>">
                                    <div class="products-show1 flex-container">
                                        <div class="products-show-para">
                                            <h3><?php echo $products2->product_name; ?></h3>
                                            <h2><?php echo $products2->product_price; ?>Ks</h2>
                                            <div class="product-button">
                                                <button type="submit">Shop Now </button>
                                            </div>
                                        </div>
                                        <div class="products-show-photo">
                                            <div class="products-show-img">
                                                <img src="assets/images/<?php echo $products2->product_image; ?>" alt="<?php echo $shoes2->shoes_name; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="popular-products">
                            <h2>Popular Products For You</h2>
                            <div class="popular-products-shows flex-container">
                                <?php foreach ($products->showShoeseight() as $shoes8) {

                                ?>
                                <a href="productsPage.php?id=<?php echo $shoes8->shoes_id ?>">
                                    <div class="popular-products-list">
                                        <div class="popular-products-photo">
                                            <div class="popular-products-img">
                                                <img src="assets/images/<?php echo $shoes8->shoes_image; ?>" alt="<?php echo $shoes8->shoes_name; ?>">
                                            </div>
                                        </div>
                                        <div class="popular-products-para">
                                            <h3><?php echo $shoes8->shoes_name; ?></h3>
                                            <div class="popular-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h1><?php echo $shoes8->shoes_price; ?>Ks</h1>
                                        </div>
                                    </div>
                                </a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="products-show flex-container">
                            <?php foreach($products->showShoessecond() as $shoes4) {
                            
                            ?>
                            <a href="productsPage.php?id=<?php echo $shoes4->shoes_id; ?>">
                                <div class="products-show1 flex-container">
                                    <div class="products-show-photo">
                                        <div class="products-show-img">
                                            <img src="assets/images/<?php echo $shoes4->shoes_image; ?>" alt="<?php echo $shoes4->shoes_name; ?>">
                                        </div>
                                    </div>
                                    <div class="products-show-para">
                                        <h3><?php echo $shoes4->shoes_name; ?></h3>
                                        <h2><?php echo $shoes4->shoes_price; ?>Ks</h2>
                                        <div class="product-button">
                                            <button type="submit">Add To Card</button>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="product-collections-gallery">
                            <h2>Products Gallery</h2>
                            <div class="product-collections-gallery-list flex-container">
                                <?php foreach($products->showShoesfive() as $shoes5) {
                                    
                                ?>
                                <a href="productsPage.php?shoes_id=<?php echo $shoes5->shoes_id; ?>">
                                    <div class="product-collections-gallery-list-show">
                                        <div class="product-collections-list1 product-gallery">
                                            <div class="product-collections-list1-img">
                                                <img src="assets/images/<?php echo $shoes5->shoes_image ?>" alt="<?php echo $shoes5->shoes_name; ?>">
                                            </div>
                                        </div>
                                        <div class="product-collections-list-para">
                                            <h3><?php echo $shoes5->shoes_name; ?></h3>
                                            <div class="popular-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="latest-products-gallery">
                            <h2>Latest Products</h2>
                            <div class="latest-products-gallery-collections flex-container">
                            <?php foreach($products->showProductsfour() as $productLatest) {

                            ?>
                            <div class="latest-products-list flex-container">
                                <div class="latest-products-gallery-photo">
                                    <a href="productsPage.php?id=<?php echo $productLatest->id; ?>">
                                        <div class="latest-products-gallery-img">
                                            <img src="assets/images/<?php echo $productLatest->product_image; ?>" alt="<?php echo $productLatest->product_name; ?>">
                                        </div>
                                    </a>
                                </div>
                                <div class="latest-products-gallery-para">
                                    <h3><?php echo $productLatest->product_name; ?></h3>
                                    <div class="popular-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3><?php echo $productLatest->product_price; ?>Ks</h3>
                                    <div class="latest-products-gallery-button flex-container">
                                        <div class="latest-products-gallery-btn">
                                            <button type="submit">Add To Card</button>
                                        </div>
                                        <div class="latest-products-gallery-icon">
                                            <button type="submit"><i class="fa fa-heart"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php

                            }  
                            ?>
                            </div>
                        </div>
                        <div class="our-brands">
                            <h2>Our Brands</h2>
                            <div class="brand-collections flex-container">
                                <div class="brand-list">
                                    <div class="brand-img">
                                        <img src="assets/images/Louis-Vuitton-1.png" alt="brand">
                                    </div>
                                </div>
                                <div class="brand-list">
                                    <div class="brand-img">
                                        <img src="assets/images/1600w-EgmHp0rUqI4.jpg" alt="brand">
                                    </div>
                                </div>
                                <div class="brand-list">
                                    <div class="brand-img">
                                        <img src="assets/images/Gucci.png" alt="brand">
                                    </div>
                                </div>
                                <div class="brand-list">
                                    <div class="brand-img">
                                        <img src="assets/images/images (5).jpg" alt="brand">
                                    </div>
                                </div>
                                <div class="brand-list">
                                    <div class="brand-img">
                                        <img src="assets/images/nike-swoosh-logo-png-the-top-10-most-popular-shoe-brands-everyone-is-wearing-top-10-rate-pict-e1487113717390.png" alt="brand">
                                    </div>
                                </div>
                                <div class="brand-list">
                                    <div class="brand-img">
                                        <img src="assets/images/ralph lauren.jpg" alt="brand">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="cloth-products" id="cate-3">
                        <h1>Hello Hats</h1>
                        <form method="">
                            <div class="search-input flex-container">
                                <input type="text" name="search" placeholder="Search Here">
                                <div class="search-btn">
                                    <button type="submit" name="search-icon"><i class="fa fa-magnifying-glass"></i></button>
                                </div>
                            </div>
                        </form>
                        <div class="products-animation">
                            <div class="big-product flex-container"data-carousel>
                                <div class="left-icon" data-carousel-button='prev'>
                                    <i class="fa-solid fa-caret-left"></i>
                                </div>
                                <div class="product-overflow" data-slides>
                                    <div class="product-collections flex-container" data-active>
                                        <div class="big-photo">
                                            <div class="big-img">
                                            </div>
                                        </div>
                                        <div class="photo-para">
                                            <h1>Shoes Collections</h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab similique reiciendis facere quasi alias, quis animi libero distinctio. Minima earum voluptatem quasi temporibus aspernatur nulla ex. Minima eveniet distih1ctio iure.<h1>
                                            <div class="product-button">
                                                <button type="submit">Shop Now </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-collections flex-container">
                                        <div class="big-photo">
                                            <div class="big-img1">
                                            </div>
                                        </div>
                                        <div class="photo-para">
                                            <h1>Clothes Collections</h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab similique reiciendis facere quasi alias, quis animi libero distinctio. Minima earum voluptatem quasi temporibus aspernatur nulla ex. Minima eveniet distinctio iure.</p>
                                            <div class="product-button">
                                                <button type="submit">Shop Now </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-collections flex-container">
                                        <div class="big-photo">
                                            <div class="big-img2">
                                            </div>
                                        </div>
                                        <div class="photo-para">
                                            <h1>Beautiful Hats Collections</h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab similique reiciendis facere quasi alias, quis animi libero distinctio. Minima earum voluptatem quasi temporibus aspernatur nulla ex. Minima eveniet distinctio iure.</p>
                                            <div class="product-button">
                                                <button type="submit">Shop Now</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-collections flex-container">
                                        <div class="big-photo">
                                            <div class="big-img3">
                                            </div>
                                        </div>
                                        <div class="photo-para">
                                            <h1>New Bags Collections</h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab similique reiciendis facere quasi alias, quis animi libero distinctio. Minima earum voluptatem quasi temporibus aspernatur nulla ex. Minima eveniet distinctio iure.</p>
                                            <div class="product-button">
                                                <button type="submit">Shop Now </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-icon" data-carousel-button='next'>
                                    <i class="fa-solid fa-caret-right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="products-show flex-container">
                            <?php
                            foreach ($products->showProductsfirst() as $products2){
                            ?>
                                <a href="productsPage.php?id=<?php echo $products2->id; ?>">
                                    <div class="products-show1 flex-container">
                                        <div class="products-show-para">
                                            <h3><?php echo $products2->product_name; ?></h3>
                                            <h2><?php echo $products2->product_price; ?>Ks</h2>
                                            <div class="product-button">
                                                <button type="submit">Shop Now </button>
                                            </div>
                                        </div>
                                        <div class="products-show-photo">
                                            <div class="products-show-img">
                                                <img src="assets/images/<?php echo $products2->product_image; ?>" alt="<?php echo $products2->product_name; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="popular-products">
                            <h2>Popular Products For You</h2>
                            <div class="popular-products-shows flex-container">
                                <?php foreach ($products->showProductseight() as $products8) {

                                ?>
                                <a href="productsPage.php?id=<?php echo $products8->id ?>">
                                    <div class="popular-products-list">
                                        <div class="popular-products-photo">
                                            <div class="popular-products-img">
                                                <img src="assets/images/<?php echo $products8->product_image; ?>" alt="<?php echo $products8->product_name; ?>">
                                            </div>
                                        </div>
                                        <div class="popular-products-para">
                                            <h3><?php echo $products8->product_name; ?></h3>
                                            <div class="popular-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h1><?php echo $products8->product_price; ?>Ks</h1>
                                        </div>
                                    </div>
                                </a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="products-show flex-container">
                            <?php foreach($products->showProductsecond() as $products4) {
                            
                            ?>
                            <a href="productsPage.php?id=<?php echo $products4->id; ?>">
                                <div class="products-show1 flex-container">
                                    <div class="products-show-photo">
                                        <div class="products-show-img">
                                            <img src="assets/images/<?php echo $products4->product_image; ?>" alt="<?php echo $products4->product_name; ?>">
                                        </div>
                                    </div>
                                    <div class="products-show-para">
                                        <h3><?php echo $products4->product_name; ?></h3>
                                        <h2><?php echo $products4->product_price; ?>Ks</h2>
                                        <div class="product-button">
                                            <button type="submit">Add To Card</button>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="product-collections-gallery">
                            <h2>Products Gallery</h2>
                            <div class="product-collections-gallery-list flex-container">
                                <?php foreach($products->showProductsfive() as $products5) {
                                    
                                ?>
                                <a href="productsPage.php?id=<?php echo $products5->id; ?>">
                                    <div class="product-collections-gallery-list-show">
                                        <div class="product-collections-list1 product-gallery">
                                            <div class="product-collections-list1-img">
                                                <img src="assets/images/<?php echo $products5->product_image ?>" alt="<?php echo $products5->product_name; ?>">
                                            </div>
                                        </div>
                                        <div class="product-collections-list-para">
                                            <h3><?php echo $products5->product_name; ?></h3>
                                            <div class="popular-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="latest-products-gallery">
                            <h2>Latest Products</h2>
                            <div class="latest-products-gallery-collections flex-container">
                            <?php foreach($products->showProductsfour() as $productLatest) {

                            ?>
                            <div class="latest-products-list flex-container">
                                <div class="latest-products-gallery-photo">
                                    <a href="productsPage.php?id=<?php echo $productLatest->id; ?>">
                                        <div class="latest-products-gallery-img">
                                            <img src="assets/images/<?php echo $productLatest->product_image; ?>" alt="<?php echo $productLatest->product_name; ?>">
                                        </div>
                                    </a>
                                </div>
                                <div class="latest-products-gallery-para">
                                    <h3><?php echo $productLatest->product_name; ?></h3>
                                    <div class="popular-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3><?php echo $productLatest->product_price; ?>Ks</h3>
                                    <div class="latest-products-gallery-button flex-container">
                                        <div class="latest-products-gallery-btn">
                                            <button type="submit">Add To Card</button>
                                        </div>
                                        <div class="latest-products-gallery-icon">
                                            <button type="submit"><i class="fa fa-heart"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php

                            }  
                            ?>
                            </div>
                        </div>
                        <div class="our-brands">
                            <h2>Our Brands</h2>
                            <div class="brand-collections flex-container">
                                <div class="brand-list">
                                    <div class="brand-img">
                                        <img src="assets/images/Louis-Vuitton-1.png" alt="brand">
                                    </div>
                                </div>
                                <div class="brand-list">
                                    <div class="brand-img">
                                        <img src="assets/images/1600w-EgmHp0rUqI4.jpg" alt="brand">
                                    </div>
                                </div>
                                <div class="brand-list">
                                    <div class="brand-img">
                                        <img src="assets/images/Gucci.png" alt="brand">
                                    </div>
                                </div>
                                <div class="brand-list">
                                    <div class="brand-img">
                                        <img src="assets/images/images (5).jpg" alt="brand">
                                    </div>
                                </div>
                                <div class="brand-list">
                                    <div class="brand-img">
                                        <img src="assets/images/nike-swoosh-logo-png-the-top-10-most-popular-shoe-brands-everyone-is-wearing-top-10-rate-pict-e1487113717390.png" alt="brand">
                                    </div>
                                </div>
                                <div class="brand-list">
                                    <div class="brand-img">
                                        <img src="assets/images/ralph lauren.jpg" alt="brand">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="cloth-products" id="cate-4">
                        <h1>Hello Bags</h1>
                        <form method="">
                            <div class="search-input flex-container">
                                <input type="text" name="search" placeholder="Search Here">
                                <div class="search-btn">
                                    <button type="submit" name="search-icon"><i class="fa fa-magnifying-glass"></i></button>
                                </div>
                            </div>
                        </form>
                        <div class="products-animation">
                            <div class="big-product flex-container"data-carousel>
                                <div class="left-icon" data-carousel-button='prev'>
                                    <i class="fa-solid fa-caret-left"></i>
                                </div>
                                <div class="product-overflow" data-slides>
                                    <div class="product-collections flex-container" data-active>
                                        <div class="big-photo">
                                            <div class="big-img">
                                            </div>
                                        </div>
                                        <div class="photo-para">
                                            <h1>Shoes Collections</h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab similique reiciendis facere quasi alias, quis animi libero distinctio. Minima earum voluptatem quasi temporibus aspernatur nulla ex. Minima eveniet distih1ctio iure.<h1>
                                            <div class="product-button">
                                                <button type="submit">Shop Now </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-collections flex-container">
                                        <div class="big-photo">
                                            <div class="big-img1">
                                            </div>
                                        </div>
                                        <div class="photo-para">
                                            <h1>Clothes Collections</h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab similique reiciendis facere quasi alias, quis animi libero distinctio. Minima earum voluptatem quasi temporibus aspernatur nulla ex. Minima eveniet distinctio iure.</p>
                                            <div class="product-button">
                                                <button type="submit">Shop Now </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-collections flex-container">
                                        <div class="big-photo">
                                            <div class="big-img2">
                                            </div>
                                        </div>
                                        <div class="photo-para">
                                            <h1>Beautiful Hats Collections</h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab similique reiciendis facere quasi alias, quis animi libero distinctio. Minima earum voluptatem quasi temporibus aspernatur nulla ex. Minima eveniet distinctio iure.</p>
                                            <div class="product-button">
                                                <button type="submit">Shop Now</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-collections flex-container">
                                        <div class="big-photo">
                                            <div class="big-img3">
                                            </div>
                                        </div>
                                        <div class="photo-para">
                                            <h1>New Bags Collections</h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab similique reiciendis facere quasi alias, quis animi libero distinctio. Minima earum voluptatem quasi temporibus aspernatur nulla ex. Minima eveniet distinctio iure.</p>
                                            <div class="product-button">
                                                <button type="submit">Shop Now </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-icon" data-carousel-button='next'>
                                    <i class="fa-solid fa-caret-right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="products-show flex-container">
                            <?php
                            foreach ($products->showProductsfirst() as $products2){
                            ?>
                                <a href="productsPage.php?id=<?php echo $products2->id; ?>">
                                    <div class="products-show1 flex-container">
                                        <div class="products-show-para">
                                            <h3><?php echo $products2->product_name; ?></h3>
                                            <h2><?php echo $products2->product_price; ?>Ks</h2>
                                            <div class="product-button">
                                                <button type="submit">Shop Now </button>
                                            </div>
                                        </div>
                                        <div class="products-show-photo">
                                            <div class="products-show-img">
                                                <img src="assets/images/<?php echo $products2->product_image; ?>" alt="<?php echo $products2->product_name; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="popular-products">
                            <h2>Popular Products For You</h2>
                            <div class="popular-products-shows flex-container">
                                <?php foreach ($products->showProductseight() as $products8) {

                                ?>
                                <a href="productsPage.php?id=<?php echo $products8->id ?>">
                                    <div class="popular-products-list">
                                        <div class="popular-products-photo">
                                            <div class="popular-products-img">
                                                <img src="assets/images/<?php echo $products8->product_image; ?>" alt="<?php echo $products8->product_name; ?>">
                                            </div>
                                        </div>
                                        <div class="popular-products-para">
                                            <h3><?php echo $products8->product_name; ?></h3>
                                            <div class="popular-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h1><?php echo $products8->product_price; ?>Ks</h1>
                                        </div>
                                    </div>
                                </a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="products-show flex-container">
                            <?php foreach($products->showProductsecond() as $products4) {
                            
                            ?>
                            <a href="productsPage.php?id=<?php echo $products4->id; ?>">
                                <div class="products-show1 flex-container">
                                    <div class="products-show-photo">
                                        <div class="products-show-img">
                                            <img src="assets/images/<?php echo $products4->product_image; ?>" alt="<?php echo $products4->product_name; ?>">
                                        </div>
                                    </div>
                                    <div class="products-show-para">
                                        <h3><?php echo $products4->product_name; ?></h3>
                                        <h2><?php echo $products4->product_price; ?>Ks</h2>
                                        <div class="product-button">
                                            <button type="submit">Add To Card</button>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="product-collections-gallery">
                            <h2>Products Gallery</h2>
                            <div class="product-collections-gallery-list flex-container">
                                <?php foreach($products->showProductsfive() as $products5) {
                                    
                                ?>
                                <a href="productsPage.php?id=<?php echo $products5->id; ?>">
                                    <div class="product-collections-gallery-list-show">
                                        <div class="product-collections-list1 product-gallery">
                                            <div class="product-collections-list1-img">
                                                <img src="assets/images/<?php echo $products5->product_image ?>" alt="<?php echo $products5->product_name; ?>">
                                            </div>
                                        </div>
                                        <div class="product-collections-list-para">
                                            <h3><?php echo $products5->product_name; ?></h3>
                                            <div class="popular-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="latest-products-gallery">
                            <h2>Latest Products</h2>
                            <div class="latest-products-gallery-collections flex-container">
                            <?php foreach($products->showProductsfour() as $productLatest) {

                            ?>
                            <div class="latest-products-list flex-container">
                                <div class="latest-products-gallery-photo">
                                    <a href="productsPage.php?id=<?php echo $productLatest->id; ?>">
                                        <div class="latest-products-gallery-img">
                                            <img src="assets/images/<?php echo $productLatest->product_image; ?>" alt="<?php echo $productLatest->product_name; ?>">
                                        </div>
                                    </a>
                                </div>
                                <div class="latest-products-gallery-para">
                                    <h3><?php echo $productLatest->product_name; ?></h3>
                                    <div class="popular-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3><?php echo $productLatest->product_price; ?>Ks</h3>
                                    <div class="latest-products-gallery-button flex-container">
                                        <div class="latest-products-gallery-btn">
                                            <button type="submit">Add To Card</button>
                                        </div>
                                        <div class="latest-products-gallery-icon">
                                            <button type="submit"><i class="fa fa-heart"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php

                            }  
                            ?>
                            </div>
                        </div>
                        <div class="our-brands">
                            <h2>Our Brands</h2>
                            <div class="brand-collections flex-container">
                                <div class="brand-list">
                                    <div class="brand-img">
                                        <img src="assets/images/Louis-Vuitton-1.png" alt="brand">
                                    </div>
                                </div>
                                <div class="brand-list">
                                    <div class="brand-img">
                                        <img src="assets/images/1600w-EgmHp0rUqI4.jpg" alt="brand">
                                    </div>
                                </div>
                                <div class="brand-list">
                                    <div class="brand-img">
                                        <img src="assets/images/Gucci.png" alt="brand">
                                    </div>
                                </div>
                                <div class="brand-list">
                                    <div class="brand-img">
                                        <img src="assets/images/images (5).jpg" alt="brand">
                                    </div>
                                </div>
                                <div class="brand-list">
                                    <div class="brand-img">
                                        <img src="assets/images/nike-swoosh-logo-png-the-top-10-most-popular-shoe-brands-everyone-is-wearing-top-10-rate-pict-e1487113717390.png" alt="brand">
                                    </div>
                                </div>
                                <div class="brand-list">
                                    <div class="brand-img">
                                        <img src="assets/images/ralph lauren.jpg" alt="brand">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div> -->
                </div>
                <?php
                    // }
                ?>
            </section>
        </main>
        <footer>
            <div class="summary">
                <div class="container">
                    <div class="summary-collections flex-container">
                        <div class="summary-list">
                            <div class="summary-img">
                                <img src="assets/images/da7854c889578743810e7970ae28671f.png" alt="logo-img">
                            </div>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque, officiis consequuntur doloribus facilis quidem accusantium ex!</p>
                            <div class="social-media">
                                <i class="fa fa-facebook"></i>
                                <i class="fa fa-twitter"></i>
                                <i class="fa fa-instagram"></i>
                                <i class="fa fa-google"></i>
                            </div>
                        </div>
                        <div class="summary-list2">
                            <h3>Informations</h3>
                            <ul>
                                <li>About Us</li>
                                <li>Delivery Informations</li>
                                <li>Privacy Policy</li>
                                <li>Terms and Conditions</li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                        <div class="summary-list3">
                            <h3>My Account</h3>
                            <ul>
                                <li>My Account</li>
                                <li>Order History</li>
                                <li>Latest Products</li>
                                <li>Customer Reviews</li>
                                <li>Newsletter</li>
                            </ul>
                        </div>
                        <div class="summary-list4">
                            <h3>Contact Us</h3>
                            <ul>
                                <li><i class="fa-solid fa-location-dot"></i>No.123, Yangon-Insein Road, Yangon.</li>
                                <li><i class="fa-solid fa-phone"></i>+95-9987654321</li>
                                <li><i class="fa-solid fa-message"></i>zawFashion123@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                    <p>Copyright &copy; 2023-2024 MSLZ. All Right Reserved.
                </div>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/3399965b27.js" crossorigin="anonymous"></script>
        <script src="assets/js/index.js"></script>
    </body>
</html>