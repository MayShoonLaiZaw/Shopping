<?php
    require_once "init/init.php";
    require_once "init/classes/Products.php";
    $products = new Products;
    $cate_name10 = $products->checkCategory2();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Shopping</title>
        <link rel="stylesheet" href="./assets/css/index.css">
    </head>
    <body id="home">
        <div class="scroll-top">
             <i class="fa-solid fa-arrow-up"></i>
        </div>
        <header>
            <div class="mobile-view">
                <div class="header-logo">
                    <div class="logo-photo">
                        <div class="logo-icon">
                            <img src="assets/images/da7854c889578743810e7970ae28671f.png" alt="logo-img">
                        </div>          
                    </div>
                    <div class="logo-icons">
                        <i class="fa fa-bars" id="logo-icon"></i>
                    </div>
                </div>
            </div>
            <div class="header flex-container">
                <div class="header-logo">
                    <div class="logo-photo">
                        <div class="logo-icon">
                            <img src="assets/images/da7854c889578743810e7970ae28671f.png" alt="logo-img">
                        </div>          
                    </div>
                </div>
                <div class="nav" id="nav">
                    <nav>
                        <ul class="navbar flex-container">
                            <li id="home-btn">Home</li>
                            <li id="popular-btn">Popular</li>
                            <li id="review-btn">Reviews</li>
                            <li id="latest-btn">Latest</li>
                        </ul>
                    </nav>
                </div>
                <div class="account-icons">
                <?php 
                    if(isset($_SESSION['email'])) {
                        ?>
                        <i class="fa-solid fa-user"></i>                <?php
                    }
                ?>
                    <a href="shopping_card.php"><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
            </div>
        </header>
        <main>
            <section>
                <div class="aside-products flex-container">
                    <div class="aside">
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
                    <div class="cloth-products">
                        <form method="">
                            <div class="search-input flex-container">
                                <input type="text" name="search" placeholder="Search Here">
                                <div class="search-btn">
                                    <button type="submit" name="search-icon"><i class="fa fa-magnifying-glass"></i></button>
                                </div>
                            </div>
                        </form>
                        <div class="products-animation">
                            <div class="products-slide-collection active">
                                <div class="products-slide flex-container">
                                    <div class="products-content">
                                        <h2>Clothes collections</h2>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus, tenetur, veniam iste perferendis rerum est harum odio neque, quasi quam iusto alias inventore ratione? Officiis eos cupiditate officia tenetur aliquam.</p>
                                        <div class="products-content-btn">
                                            <button type="submit">Read More</button>
                                        </div>
                                    </div>
                                    <div class="products-slide-image">
                                        <img src="assets/images/images.jpg" alt="clothes collections">
                                    </div>
                                </div>
                            </div>
                            <div class="products-slide-collection">
                                <div class="products-slide flex-container">
                                    <div class="products-content">
                                        <h2>Shoes collections</h2>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus, tenetur, veniam iste perferendis rerum est harum odio neque, quasi quam iusto alias inventore ratione? Officiis eos cupiditate officia tenetur aliquam.</p>
                                        <div class="products-content-btn">
                                            <button type="submit">Read More</button>
                                        </div>
                                    </div>
                                    <div class="products-slide-image">
                                        <img src="assets/images/s-l500.jpg" alt="Shoes collections">
                                    </div>
                                </div>
                            </div>
                            <div class="products-slide-collection">
                                <div class="products-slide flex-container">
                                    <div class="products-content">
                                        <h2>Hats collections</h2>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus, tenetur, veniam iste perferendis rerum est harum odio neque, quasi quam iusto alias inventore ratione? Officiis eos cupiditate officia tenetur aliquam.</p>
                                        <div class="products-content-btn">
                                            <button type="submit">Read More</button>
                                        </div>
                                    </div>
                                    <div class="products-slide-image">
                                        <img src="assets/images/61gQf3QXhVL._AC_UX569_.jpg" alt="Hats collections">
                                    </div>
                                </div>
                            </div>
                            <div class="products-slide-collection">
                                <div class="products-slide flex-container">
                                    <div class="products-content">
                                        <h2>Bags collections</h2>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus, tenetur, veniam iste perferendis rerum est harum odio neque, quasi quam iusto alias inventore ratione? Officiis eos cupiditate officia tenetur aliquam.</p>
                                        <div class="products-content-btn">
                                            <button type="submit">Read More</button>
                                        </div>
                                    </div>
                                    <div class="products-slide-image">
                                        <img src="assets/images/61sYJVSEEoL._UY500_.jpg" alt="Bags collections">
                                    </div>
                                </div>
                            </div>
                            <div class="prev">
                                <i class="fa fa-arrow-left" onclick='prev()'></i>
                            </div>
                            <div class="next">
                                <i class="fa fa-arrow-right" onclick='next()'></i>
                            </div>
                        </div>
                        <div class="products-show flex-container">
                            <?php
                                foreach ($products->showProductsfirst($cate_name10->category_name) as $products2){
                            ?>
                                <div class="products-show1 flex-container">
                                    <div class="products-show-para">
                                        <h3><?php echo $products2->product_name; ?></h3>
                                        <h2><?php echo $products2->product_price; ?>Ks</h2>
                                        <div class="product-button">
                                            <button type="submit">Shop Now </button>
                                        </div>
                                    </div>
                                    <div class="products-show-photo">
                                        <a href="productsPage.php?id=<?php echo $products2->id; ?>">
                                        <div class="products-show-img">
                                            <img src="assets/images/<?php echo $products2->product_image; ?>" alt="<?php echo $products2->product_name; ?>">
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            <?php
                                }
                            ?>
                        </div>
                        <div class="popular-products" id="popular">
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
                                <div class="products-show1 flex-container">
                                    <div class="products-show-photo">
                                        <a href="productsPage.php?id=<?php echo $products4->id; ?>">
                                            <div class="products-show-img">
                                                <img src="assets/images/<?php echo $products4->product_image; ?>" alt="<?php echo $products4->product_name; ?>">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="products-show-para">
                                        <h3><?php echo $products4->product_name; ?></h3>
                                        <h2><?php echo $products4->product_price; ?>Ks</h2>
                                        <div class="product-button">
                                            <form method="post" action="shopping_card.php?action=add&id=<?php echo $products4->id; ?>">
                                                <input type="hidden" name="quantity" value="1">
                                                <input type="hidden" name="hidden_name" value="<?php echo $products4->product_name; ?>">
                                                <input type="hidden" name="hidden_image" value="<?php echo $products4->product_image; ?>">
                                                <input type="hidden" name="hidden_price" value="<?php echo $products4->product_price; ?>">
                                                <button type="submit" class="add-card" name="add_to_card" value="Add To Card">Add To Card</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="product-collections-gallery">
                            <h2>Products Gallery</h2>
                            <div class="product-collections-gallery-list flex-container">
                                <?php foreach($products->showProductsfive($cate_name10->category_name) as $products5) {
                                    
                                ?>
                                    <div class="product-collections-gallery-list-show">
                                        <div class="product-collections-list1 product-gallery">
                                            <a href="productsPage.php?id=<?php echo $products5->id; ?>">
                                                <div class="product-collections-list1-img">
                                                    <img src="assets/images/<?php echo $products5->product_image ?>" alt="<?php echo $products5->product_name; ?>">
                                                </div>
                                            </a>
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
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="latest-products-gallery" id="latest">
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
                                            <form method="post" action="shopping_card.php?action=add&id=<?php echo $productLatest->id; ?>">
                                                <input type="hidden" name="quantity" value="1">
                                                <input type="hidden" name="hidden_name" value="<?php echo $productLatest->product_name; ?>">
                                                <input type="hidden" name="hidden_image" value="<?php echo $productLatest->product_image; ?>">
                                                <input type="hidden" name="hidden_price" value="<?php echo $productLatest->product_price; ?>">
                                                <button type="submit" class="add-card" name="add_to_card" value="Add To Card">Add To Card</button>
                                            </form>
                                            <!-- <button type="submit">Add To Card</button> -->
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
                    
                </div>
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