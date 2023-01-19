<link rel="stylesheet" href="../../css/style.css">
<?php include("../layouts/header.php"); ?>
<?php include("../layouts/login_nav.php"); ?>

<div class="login-content">
    <div class="container">
        <div class="body">
            <div class="full-form">
                <form action="">
                    <div class="title"><i class="fas fa-user-alt"></i> &nbsp; Login Here</div>
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
            </div>   
        </div>
    </div>
</div>

<?php include("../layouts/page_footer.php"); ?>
<script src="../../js/script.js"></script>
