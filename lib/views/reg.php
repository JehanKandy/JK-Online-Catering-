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
                        <input type="submit" value="Login" class="login-btn" name="login"> 
                </form>
                <a href="forget_pass.php" style="color: orange;">Forget Password ? </a>
                <p style="color: white;">Don't Have an Account ? <a href="reg.php" style="color: orange;">Sign Up</a></p>
            </div>   
        </div>
    </div>
</div>

<?php include("../layouts/page_footer.php"); ?>
<script src="../../js/script.js"></script>
