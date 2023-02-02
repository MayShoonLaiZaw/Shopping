<?php 
session_start();
require_once "init/classes/Products.php";
if(isset($_POST['add_to_card'])) {
    if(isset($_SESSION['shopping_card'])) {
        $item_array_id = array_column($_SESSION['shopping_card'],'items_id');
        
        // check $_GET['id']and $item_array_id are set or not
        if(!in_array($_GET['id'],$item_array_id)) {
            $count = count($_SESSION['shopping_card']);
            $item_array = array(
                'items_id' => $_GET['id'],
                'items_image' => $_POST['hidden_image'],
                'items_name' => $_POST['hidden_name'],
                'items_price' => $_POST['hidden_price'],
                'items_quantity' => $_POST['quantity'],
            );
            $_SESSION['shopping_card'][$count] = $item_array;
        } else {
            echo "<script>alert('Items Already Added...')</script>";
        }
    } else {
        // if not isset already items, add items into array
        $item_array = array(
            'items_id' => $_GET['id'],
            'items_image' => $_POST['hidden_image'],
            'items_name' => $_POST['hidden_name'],
            'items_price' => $_POST['hidden_price'],
            'items_quantity' => $_POST['quantity'],
        );
        $_SESSION['shopping_card'][0] = $item_array;
    }
}
if(!isset($_SESSION['shopping_card']) ){
    echo "<script>location.href='index.php';</script>";
}
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
                            <li id="nav-drop"><a href="#">Popular</a></li>
                            <li><a href="#">Reviews</a></li>
                            <li><a href="#">Latest</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="account-icons">
                    <a href="sign_in.php"><i class="fa-solid fa-right-to-bracket"></i></a>
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
                            <div class="shopping-card-products" id="shopping-card-products">
                            <?php 
                            $i = 0;
                            $alltotal=0;
                                if(!empty($_SESSION['shopping_card'])) {
                                    $total = 0;
                                    $i = 0;
                                    foreach($_SESSION['shopping_card'] as $keys => $values) {
                                        $i++;
                                        echo $i;
                                        
                                ?>
                                <div class="shopping-card-products-lists flex-container">
                                    <div class="shopping-card-products-photo-para flex-container">
                                        <div class="shopping-card-products-photo">
                                            <div class="shopping-card-products-img">
                                                <img src="assets/images/<?php echo $values['items_image'] ?>" alt="<?php echo $values['items_name'] ?>">
                                            </div>
                                        </div>
                                        <div class="shopping-card-products-para">
                                            <h4><?php echo $values['items_name'] ?></h4>
                                            <button type="submit"><a href="shopping_card.php?active=delete&id=<?php echo $values['items_id']; ?>"><i class="fa-solid fa-trash"></i>Remove</a>
                                            <?php 
                                                if(isset($_GET['active'])) {
                                                    if($_GET['active'] == "delete") {
                                                        foreach($_SESSION['shopping_card'] as $keys => $values) {
                                                            if($values['items_id'] == $_GET['id']) {
                                                                unset($_SESSION['shopping_card'][$keys]);
                                                                echo "<script>location.href='shopping_card.php'</script>";
                                                            }
                                                        }
                                                    } 
                                                }
                                            ?>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="shopping-card-products-quantity flex-container">
                                        <i class="fa-solid fa-square-minus minus" quantity-product-id="<?php echo $values['items_id']; ?>"></i>
                                        <p class="quantity"><?php echo $values['items_quantity'] ?></p>
                                        <i class="fa-solid fa-square-plus plus" quantity-product-id="<?php echo $values['items_id']; ?>"></i>
                                    </div>
                                    <div class="shopping-card-products-price">
                                        <h4><?php echo $values['items_price'] ?>Ks</h4>
                                    </div>
                                    <div class="shopping-card-products-total">
                                        <h4 class="total"><?php echo $total = number_format($values['items_quantity'] * $values['items_price']);?>Ks</h4>
                                    </div>
                                    
                                </div>
                                <?php
                                    }
                                }
                            ?>
                            </div>
                        </div>
                        <div class="shopping-card-summary">
                            <h3>ORDER SUMMARY</h3>
                            <div class="shopping-card-summary-item-price">

                                <h4>Items <?php echo $i; ?></h4>
                            </div>
                            <?php 
                            if(!empty($_SESSION['shopping_card'])) {
                                $alltotal = 0;
                                foreach($_SESSION['shopping_card'] as $keys => $values) {
                                    
                            ?>
                            <div class="shopping-card-review flex-container">
                                <h4><?php echo $values['items_name'] ?></h4>
                                <h4><?php echo $values['items_price'];?> Ks</h4>
                            </div>
                            <?php 
                                $alltotal += $values['items_price'];
                            }
                            }
                            ?>
                            <div class="shopping-card-summary-total flex-container">
                                <div class="shopping-card-summary-total-para">
                                    <h4>Total</h4>
                                </div>
                                <div class="shopping-card-summary-total-price">
                                    <h4><?php echo $alltotal; ?> Ks</h4>
                                </div>
                            </div>
                            <div class="checkout-button flex-container">
                                <div class="checkout-btn">
                                    <button type="submit">Check Out</button>
                                </div>
                                <div class="removeall-btn">
                                    <i class="fa-solid fa-trash"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php?>
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
        <script src="assets/js/shopping_card.js"></script>
    </body>
</html>