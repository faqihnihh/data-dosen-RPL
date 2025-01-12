<?php 
session_start(); /* Starts the session */

/* Check Login form submitted */
if(isset($_POST['Submit'])){
    /* Define username and associated password array */
    $logins = array('faqih' => '123456','wina' => '123456','lutfi' => '123456','dinda' => '123456','vika' => '123456','yuzril' => '123456'
,'eci' => '123456','mery' => '123456','ela' => '123456','ria' => '123456','yulia' => '123456','rindi' => '123456'
,'farihatun' => '123456','zaidi' => '123456','agil' => '123456','andre' => '123456','arif' => '123456','laela' => '123456','nuri' => '123456','haoliah' => '123456'
,'rasyid' => '123456');

    /* Check and assign submitted Username and Password to new variable */
    $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
    $Password = isset($_POST['Password']) ? $_POST['Password'] : '';

    /* Check Username and Password existence in defined array */
    if (isset($logins[$Username]) && $logins[$Username] == $Password){
        /* Success: Set session variables and redirect to Protected page  */
        $_SESSION['UserData']['Username']=$logins[$Username];
        header("location:index.php");
        exit;
    } else {
        /*Unsuccessful attempt: Set error message */
        $msg="<span style='color:red'>Invalid Login Details</span>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
    body {
        background-image: url('images/bg2.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    
    .login-container {
        background: rgba(255, 255, 255, 0.9);
        width: 90%;
        max-width: 400px;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.3);
        box-sizing: border-box;
    }
    
    .login-title {
        text-align: center;
        margin-bottom: 30px;
    }
    
    .form-group {
        margin-bottom: 15px;
    }
    
    .form-group label {
        display: block;
        margin-bottom: 5px;
    }
    
    .form-group input {
        width: 100%;
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 4px;
        box-sizing: border-box;
    }
    
    .login-button {
        width: 100%;
        padding: 12px;
        background: #292F33;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background 0.3s;
        margin-top: 20px;
    }

    .login-button:hover {
        background: #1d2327;
    }

    .error-message {
        color: red;
        text-align: center;
        margin-bottom: 15px;
    }

    @media (max-width: 768px) {
        .login-container {
            padding: 20px;
        }

        .login-button {
            padding: 10px;
        }
    }

    @media (max-width: 480px) {
        .login-container {
            padding: 15px;
        }

        .login-button {
            padding: 8px;
        }
    }
    </style>
</head>
<body>
    <div class="login-container">
        <?php if(isset($msg)){?>
            <div class="error-message"><?php echo $msg;?></div>
        <?php } ?>
        
        <h2 class="login-title">Login</h2>
        
        <form action="" method="post" name="Login_Form">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="Username">
            </div>
            
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="Password">
            </div>
            
            <input type="submit" name="Submit" value="Login" class="login-button">
        </form>
    </div>
</body>
</html>
