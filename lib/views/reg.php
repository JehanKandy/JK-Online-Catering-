<link rel="stylesheet" href="../../css/style.css">
<?php include("../layouts/header.php"); ?>
<?php include("../layouts/login_nav.php"); ?>

<div class="reg-content">
    <div class="container">
        <div class="body">
            <div class="full-form">
                <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST">
                    <div class="title"><i class="fas fa-user-plus"></i> &nbsp; Register Here</div>
                        <div class="from-body">
                            <input type="text" name="" id="" required="required">
                            <span>Username</span>
                        </div>    
                        <div class="from-body">
                            <input type="password" name="" id="" required="required">
                            <span>Password</span>
                        </div>
                        <div class="from-body">
                            <input type="password" name="" id="" required="required">
                            <span>Password</span>
                        </div>
                        <div class="from-body">
                            <input type="password" name="" id="" required="required">
                            <span>Password</span>
                        </div>
                        <input type="submit" value="Login" class="login-btn" name="register"> 
                </form>
                <p style="color: white;">Already have an Account ? <a href="login.php" style="color: orange;">Login</a></p>
            </div>   
        </div>
    </div>
</div>

<?php include("../layouts/page_footer.php"); ?>
<script src="../../js/script.js"></script>
