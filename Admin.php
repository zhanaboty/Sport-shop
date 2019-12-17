<?php include("blocks/header.php");?>
        <main id="admin_main">
                <div class="header2">
                        <h2>Register</h2>
                    </div>
                    <form method="post" action="register.php">
                        <div class="input-group">
                            <label>Username</label>
                            <input type="text" name="username" value="">
                        </div>
                        <div class="input-group">
                            <label>Email</label>
                            <input type="email" name="email" value="">
                        </div>
                        <div class="input-group">
                            <label>Password</label>
                            <input type="password" name="password_1">
                        </div>
                        <div class="input-group">
                            <label>Confirm password</label>
                            <input type="password" name="password_2">
                        </div>
                        <div class="input-group">
                            <button type="submit" class="btn" name="register_btn">Register</button>
                        </div>
                        <p>
                            Already a member? <a href="">Sign in</a>
                        </p>
                    </form>
            </main>
        <a href="#" class="topbutton"> <i class="fas fa-chevron-up"></i></a>
<?php include("blocks/footer.php");?>
