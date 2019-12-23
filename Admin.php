<?php include("blocks/header.php");?>
<?php 
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $error = '';
    $success = '';

    if(isset($_POST['submit'])){
        if($user == 'admin'){
            if($pass == 'password'){
                $error = '';
                $success = 'Welcome Admin!!!';
                
                header("Location: Catalog.php");
            }
            else{
                $error = 'Invalid Password!!!';
                $success = '';
            }
        }
        else{
            $error = 'Invalid Username!!!';
                $success = '';
        }
    }    
?>
        <main id="admin_main">
                <div class="header2">
                        <h2>Sign In</h2>
                    </div>
                    <form  class="login" method="post">
                        <div class="input-group">
                            
                            <label>Username</label>
                            <p class="error"><?php echo $error; ?></p><p class="success"><?php echo $success; ?></p>
                            <input type="text" name="username" value="" required>
                        </div>
                        <div class="input-group">
                            <label>Email</label>
                            <input type="email" name="email" value="" required>
                        </div>
                        <div class="input-group">
                            <label>Password</label>
                            <input type="password" name="pass" required>
                        </div>
                        <div class="input-group">
                            <button type="submit" class="btn" name="submit" value="submit">Sign IN</button>
                        </div>
                    </form>
            </main>
        <a href="#" class="topbutton"> <i class="fas fa-chevron-up"></i></a>
<?php include("blocks/footer.php");?>
