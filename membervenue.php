<?php include("include/nav.inc") ?>
    <div class="container">
        <form class="form-group" action="member_process.php" method="post">
            <div class="row">
                <div class="col-12 col-s-12">
                    <h1>Sign up with Bunjii</h1>
                    <p><i>Fields marked with an asterisk (*) must be entered.</i></p>
                </div>
            </div>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="member.php">Customer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="membervenue.php">Venue</a>
                </li>
            </ul>
            <div class="row">
                <div class="col-s-12 col-6">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" id="name" name="name" placeholder="Enter your name" required />
                </div>
            </div>
            <div class="row">
                <div class="col-s-12 col-6">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" id="email" name="email" placeholder="Enter your email" required />
                </div>
            </div>
            <div class="row">
                <div class="col-s-12 col-6">
                    <input class="btn btn-primary" type="submit" id="submit" value="Submit" onClick="return validateInfo(document)" />
                </div>
            </div>
		</form>
    </div>
</body>
<?php include("include/footer.php") ?>
</html>


