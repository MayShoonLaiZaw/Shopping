<?php 
    require_once "init/init.php";
    require_once "init/classes/Auth.php";
    $auth = new Auth;
    $auth->sign_up($_POST);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Shopping Authentication</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        
        <div class="container">
            <div class="row">
                <div class="col-md-4  offset-4">
                    <div class="card my-5 py-2">
                        <h1 class="text-center">Sign Up</h1>
                        <div class="card-body" >
                            <form method="post">
                                <div class="form-floating my-2">
                                    <input type="text" class="form-control" id="username" name="username" placeholder='Username'> 
                                    <label for="username"><i class="fa-solid fa-user pe-2" style="font-size:20px;"></i>Username</label>
                                </div>
                                <div class="form-floating my-2">
                                    <input type="email" class="form-control" id="email" name="email" placeholder='email'> 
                                    <label for="email"><i class="fa-solid fa-envelope pe-2" style="font-size:20px;"></i>Email</label>
                                </div>
                                <div class="form-floating my-2">
                                    <input type="password" class="form-control" id="password" name="password" placeholder='password'> 
                                    <label for="password"><i class="fa-solid fa-lock pe-2" style="font-size:20px;"></i>Password</label>
                                </div>
                                <div class="form-floating my-2">
                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder='confirm_password'> 
                                    <label for="confirm_password"><i class="fa-solid fa-key pe-2" style="font-size:20px;"></i>Confirm Password</label>
                                </div>
                                <button type="submit" name="signup" class="mt-2 btn btn-warning">Sign Up</button>
                            </form>
                            <p class="mt-4">If you already have an account,please <a href='signIn.php'>Sign In</a></p>
                            <div class="social text-center" style="cursor:pointer">
                                <i class="fa-brands fa-facebook px-2" style='font-size: 25px;'></i>
                                <i class="fa fa-twitter px-2" style='font-size: 25px;'></i>
                                <i class="fa-brands fa-instagram px-2" style='font-size: 25px;'></i>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/3399965b27.js" crossorigin="anonymous"></script>
    </body>
</html>