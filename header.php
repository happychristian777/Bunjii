<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bunjii</title>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="style/style.css">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Bunjii</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Venues</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <form class="form-inline my-2 my-lg-0" action="includes/login.inc.php" method="post">
                        <input class="form-control mr-sm-2" type="text" name="mailuid" placeholder="Username">
                        <input class="form-control mr-sm-2" type="password" name="pwd" placeholder="Password">
                        <button class="btn btn-outline-primary my-2 my-sm-0 navbuttons" type="submit" name="login-submit">Login</button
                    </form>
                    <a href="signup.php" class="btn btn-primary my-2 my-sm-0 navbuttons"">Sign Up</a>
                    <form class="form-inline my-2 my-lg-0" action="includes/logout.inc.php" method="post">
                    <button class="btn btn-outline-primary my-2 my-sm-0 navbuttons" type="submit" name="logout-submit">Logout</button
                    </form>
                </div>
            </nav>
        </header>
    </body>
</html>
