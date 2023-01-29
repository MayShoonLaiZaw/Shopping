<?php 
require_once "init/classes/Products.php";

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Shopping</title>
        <link rel="stylesheet" href="./assets/css/shopping_card.css">
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
                </div>
            </div>
        </header>
        <main>
            <section>
                <div class="container">
                    <div class="shopping-card flex-container">
                        <div class="shopping-card-collections">
                            <div class="shopping-card-header">
                                <div class="shopping-card-lists flex-container">
                                    <div class="shopping-card-lists-para">
                                        <h2>Shopping Card</h2>
                                    </div>
                                    <div class="shopping-card-lists-items">
                                        <h2>2 Items</h2>
                                    </div>
                                </div>
                                <div class="shopping-card-header-lists">
                                    <ul>
                                        <li>Product Details</li>
                                        <li>Quantity</li>
                                        <li>Price</li>
                                        <li>Total</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="shopping-card-products">
                                <div class="shopping-card-products-lists flex-container">
                                    <div class="shopping-card-products-photo-para flex-container">
                                        <div class="shopping-card-products-photo">
                                            <div class="shopping-card-products-img">
                                                <img src="assets/images/1662744659-jkerther-women-s-y2k-print-sweater-v-neck-long-sleeve-cardigan-1662744648.jpg" alt="clothes">
                                            </div>
                                        </div>
                                        <div class="shopping-card-products-para">
                                            <h4>Warm Clothes</h4>
                                            <button type="submit">Remove</button>
                                        </div>
                                    </div>
                                    <div class="shopping-card-products-quantity flex-container">
                                        <i class="fa-solid fa-square-minus"></i>
                                        <p>1</p>
                                        <i class="fa-solid fa-square-plus"></i>
                                    </div>
                                    <div class="shopping-card-products-price">
                                        <h4>20000Ks</h4>
                                    </div>
                                    <div class="shopping-card-products-total">
                                        <h4>Total Ks</h4>
                                    </div>
                                </div>
                                <div class="shopping-card-products-lists flex-container">
                                    <div class="shopping-card-products-photo-para flex-container">
                                        <div class="shopping-card-products-photo">
                                            <div class="shopping-card-products-img">
                                                <img src="assets/images/1662744659-jkerther-women-s-y2k-print-sweater-v-neck-long-sleeve-cardigan-1662744648.jpg" alt="clothes">
                                            </div>
                                        </div>
                                        <div class="shopping-card-products-para">
                                            <h4>Warm Clothes</h4>
                                            <button type="submit">Remove</button>
                                        </div>
                                    </div>
                                    <div class="shopping-card-products-quantity flex-container">
                                        <i class="fa-solid fa-square-minus"></i>
                                        <p>1</p>
                                        <i class="fa-solid fa-square-plus"></i>
                                    </div>
                                    <div class="shopping-card-products-price">
                                        <h4>20000Ks</h4>
                                    </div>
                                    <div class="shopping-card-products-total">
                                        <h4>Total Ks</h4>
                                    </div>
                                </div>
                                <div class="shopping-card-products-lists flex-container">
                                    <div class="shopping-card-products-photo-para flex-container">
                                        <div class="shopping-card-products-photo">
                                            <div class="shopping-card-products-img">
                                                <img src="assets/images/1662744659-jkerther-women-s-y2k-print-sweater-v-neck-long-sleeve-cardigan-1662744648.jpg" alt="clothes">
                                            </div>
                                        </div>
                                        <div class="shopping-card-products-para">
                                            <h4>Warm Clothes</h4>
                                            <button type="submit">Remove</button>
                                        </div>
                                    </div>
                                    <div class="shopping-card-products-quantity flex-container">
                                        <i class="fa-solid fa-square-minus"></i>
                                        <p>1</p>
                                        <i class="fa-solid fa-square-plus"></i>
                                    </div>
                                    <div class="shopping-card-products-price">
                                        <h4>20000Ks</h4>
                                    </div>
                                    <div class="shopping-card-products-total">
                                        <h4>Total Ks</h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="shopping-card-summary">
                            <h3>ORDER SUMMARY</h3>
                            <div class="shopping-card-summary-item-price flex-container">
                                <h4>Items 2</h4>
                                <h4>Total Ks</h4>
                            </div>
                            <div class="shopping-card-summary-total flex-container">
                                <div class="shopping-card-summary-total-para">
                                    <h4>Total</h4>
                                </div>
                                <div class="shopping-card-summary-total-price">
                                    <h4>Total Ks</h4>
                                </div>
                            </div>
                            <div class="checkout-button flex-container">
                                <div class="checkout-btn">
                                    <button type="submit">Check Out</button>
                                </div>
                                <div class="removeall-btn">
                                    <button type="submit">Remove All</button>
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
        <script src="assets/js/product_page.js"></script>
    </body>
</html>