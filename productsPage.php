<?php 
// header("Content-type:application/json");
require_once "init/classes/Comments.php";
require_once "init/classes/Products.php";
$products = new Products;
$comments = new Comments;
if($_GET['id'] == "") {
    echo "<script>location.href='index.php'</script>";
}
foreach($comments->selectUser() as $user){}

    $getProducts = $products->fetchProducts($_GET["id"]);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Shopping</title>
        <link rel="stylesheet" href="./assets/css/productsPage.css">
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
                            <li id="nav-drop"><a href="#">Popular<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="dropdown">
                                    <li><a href="#">Clothes</a></li>
                                    <li><a href="#">Shoes</a></li>
                                    <li><a href="#">Hats</a></li>
                                    <li><a href="#">Bags</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Reviews</a></li>
                            <li><a href="#">Latest</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="account-icons">
                    <a href="sign_in.php"><i class="fa-solid fa-right-to-bracket"></i><a>
                    <a href="shopping_card.php"><i class="fa-solid fa-cart-shopping"></i><span id="card-num">0</span></a>
                </div>
            </div>
        </header>
        <main>
            <section>
                <div class="container">
                    <div class="productPage">
                        <div class="productCollections flex-container">
                            <div class="product-photo">
                                <div class="product-img">
                                    <img src="assets/images/<?php echo $getProducts->product_image; ?>" alt="<?php echo $getProducts->product_name; ?>">
                                </div>
                            </div>
                            <div class="product-description">
                                <h2><?php echo $getProducts->product_name; ?></h2>
                                <div class="popular-star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <p>Ratings</p>
                                </div>
                                <h2><?php echo $getProducts->product_price; ?>Ks</h2>
                                <div class="color-collections">
                                    <h3>Choose Colors</h3>
                                    <div class="choose-color flex-container">
                                        <div>
                                            <p id="yellow"></p>
                                        </div>
                                        <div>
                                            <p id="red"></p>
                                        </div>
                                        <div>
                                            <p id="green"></p>
                                        </div>
                                        <div>
                                            <p id="black"></p>
                                        </div>
                                        <div>
                                            <p id="skyblue"></p>
                                        </div>
                                        <div>
                                            <p id="orange"></p>
                                        </div>
                                        <div>
                                            <p id="pink"></p>
                                        </div>
                                        <div>
                                            <p id="purple"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="buy-card-button flex-container">
                                    <div class="buy-button">
                                        <button type="submit">Buy Now</button>
                                    </div>
                                    <div class="card-button" id="add-card" data-card-id="<?php echo $_GET['id']; ?>" data-product-image = "<?php echo $getProducts->product_image; ?>" data-product-name="<?php echo $getProducts->product_name; ?>" data-product-price="<?php echo $getProducts->product_price; ?>">
                                        <button type="submit" name="card">Add To Card</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="product-detail-nav">
                        <nav>
                            <ul class="product-detail-list">
                                <li id="detail">Product Details</li>
                                <li id="creviews">Customer Reviews</li>
                                <li id="more">More Products</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="about-product-details" id="about-product-details">
                        <h3>Product Details of Our product</h3>
                        <div class="about-product-details-para">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque eum doloremque culpa ipsum incidunt amet praesentium aperiam dolorem neque eius debitis voluptatem aliquam deserunt quam voluptates quis illum, repellat dolorum.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque eum doloremque culpa ipsum incidunt amet praesentium aperiam dolorem neque eius debitis voluptatem aliquam deserunt quam voluptates quis illum, repellat dolorum.</p>
                        </div>
                        <div class='product-para'>
                            <p><?php echo $getProducts->product_description; ?></p>
                            <ul>
                                <li><i class="fa fa-check"></i>Product Qualities</li>
                                <li><i class="fa fa-check"></i>100% Cotton</li>
                            </ul>
                        </div>
                        <div class="product-service">
                            <h3>Services for our Products</h3>
                            <ul>
                                <li><i class="fa fa-check"></i>10 Days Repairs</li>
                                <li><i class="fa fa-check"></i>Delivery Free</li>
                            </ul>
                        </div>
                    </div>
                    <div class="customer-reviews" id="customer-reviews">
                        <h3>Our Customers' Reviews</h3>
                        <form method="post" id="comments-form" data-id='<?php echo $_GET['id'];?>' data-user='<?php echo $user->username;?>' data-image='<?php echo $user->user_image; ?>'>
                            <div class="write-reviews flex-container">
                                <input type="text" placeholder="Your Reviews" id="comments">
                                <div class="send-reviews">
                                    <button type="submit" name="comment_btn">Send Now</button>
                                </div>
                            </div>
                        </form>
                        <div class="customer-reviews-collections" id="reviews">
                            
                        </div>
                    </div>
                    <div class="more-products" id="more-products">
                        <h3>Only Suggest For You</h3>
                        <div class="more-products-collections flex-container">
                            <?php 
                                foreach($products->fetchSameCategory($getProducts->id,$getProducts->category_name) as $samecategoryproducts) {
                            ?>
                            <div class="more-products-lists">
                                <a href="productsPage.php?id=<?php echo $samecategoryproducts->id; ?>">
                                    <div class="more-products-photo">
                                        <div class="more-products-img">
                                            <!-- <img src="assets/images/Screenshot+2022-09-13+at+15.29.13.png" alt="more-products"> -->
                                            <img src="assets/images/<?php echo $samecategoryproducts->product_image; ?> " alt="<?php echo $samecategoryproducts->product_name; ?>">
                                        </div>
                                    </div>
                                    <div class="more-products-para">
                                        <h4><?php echo $samecategoryproducts->product_name; ?></h4>
                                        <div class="popular-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4><?php echo $samecategoryproducts->product_price ?>Ks</h4>
                                    </div>
                                </a>
                            </div>
                            <?php
                                }
                            ?>
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
        <script src="assets/js/product_page.js"></script>
        <script src="assets/js/comments.js"></script>
        <script src="assets/js/shopping_card.js"></script>
    </body>
</html>