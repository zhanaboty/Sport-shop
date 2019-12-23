<?php include("blocks/header.php");?>

<script src="js/validation.js"></script>
<main id="admin_main">
    <div class="header2">
            <h2>Sign In</h2>
        </div>
        <form name="myForm" class="login" onsubmit="return validateForm()" method="post">
            <div class="input-group">
                
                <label>First Name</label>
                
                <input type="text" name="fname" value="">
            </div>
            <div class="input-group">
                
                <label>Last Name</label>
                
                <input type="text" name="lname" value="">
            </div>
            <div class="input-group">
                <label>Email</label>
                <input type="email" name="email" value="" >
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="pass">
            </div>
            <div class="input-group">
                <button type="submit" class="btn" name="submit" value="submit">Sign IN</button>
            </div>
        </form>
</main>
<?php include("blocks/footer.php");?>