<?php require "header.php" ?>

    <main>
        <div class="container">
            <h1>Login</h1>
            <p>Enter your username and password</p>
                <form action="include/login.inc.php" method="post">
                        <input class="form-control col-md-5" type="text" name="mailuid" placeholder="Email">
                        <input class="form-control col-md-5" type="password" name="pwd" placeholder="password">
                        <button class ="btn btn-primary" type="submit" name="login-submit">Login</button>
                </form>
        </div>
    </main>