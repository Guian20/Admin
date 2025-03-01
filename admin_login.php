<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="admin_login.css">
</head>

<body>

    <header class="header">
        <a href="#" class="logo">
            CupFe Expresso 
        </a>
        <nav class="nav">
        </nav>
    </header>

    <section class="home">
        <div class="content">
            <h2>Welcome to CupFe Expresso Admin</h2>
            <p>Welcome to the CupFe Expresso! Log in to access powerful tools that help you manage orders, track sales performance, and oversee daily operations with ease. Stay on top of inventory, update the menu, and ensure a smooth experience for your customers. Your command center for running CupFe Expresso efficiently starts here!
            </p>
        </div>

        <div class="wrapper-login">
            <h2>Admin Login</h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail"></ion-icon>
                    </span>
                    <input type="email" required>
                    <label>Enter your email</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="password" required>
                    <label>Enter your password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>
                    <a href="#">Forgot password?</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="register-link">
                </div>
            </form>
        </div>
    </section>

    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>