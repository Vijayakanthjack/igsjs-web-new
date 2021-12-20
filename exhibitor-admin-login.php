<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="REASONS TO VISIT" />
    <meta name="description" content="REASONS TO VISIT" />
    <meta name="author" content="REASONS TO VISIT" />
    <link rel="icon" href="public/images/fav.png" type="image/x-icon" />
    <title>Exhibitor Admin Login</title>
    <?php include "main_link_css.php"; ?>
</head>

<body>
    <?php //include "subpage-header.php"; 
    ?>
    <!-- Reason to Visit Conent Begins -->

    <section class="subpage-content-exhibition-login">
        <div class="container">
            <div class="wrap-row">
                <div class="b1">
                    <div>
                        <div class="logo-in">
                            <a href="index.php">
                                <img src="public/images/logo.png" class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <div class="w-bg">
                        <h4 class="text-center">Exhibitor Admin Login</h4>
                        <form action="exhibitor-login.php" method="post">

                            <?php if (isset($_GET['error'])) { ?>
                                <p class="error"><?php echo $_GET['error']; ?></p>
                            <?php } ?>

                            <!-- <div class="form-group">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                            </div> -->
                            <div class="form-group">
                                <label for="inputName">Name</label>
                                <input type="text" name="user_name" class="form-control" id="inputName" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Password</label>
                                <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
                            </div>
                            <!-- <div class="form-group text-center">
                                <label class="form-check-label"><input type="checkbox"> Remember me</label>
                            </div> -->
                            <div class=" text-center">
                                <button type="submit" class="btn btn-danger ">Sign in</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Conent Ends -->
    <!-- Modal POP Up -->
    <?php //include "footer.php"; 
    ?>
    <?php include "main_link_js.php"; ?>
</body>

</html>