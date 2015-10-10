<!--------------------------------------Sign up modal start--------------------------------------->
<div class="container" style="margin-top: 100px">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <?php if (isset($_SESSION['registerError'])) { ?>
                <div class="alert alert-danger fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php if (isset($_SESSION['emailError'])) { ?>
                    <strong>Email incorrect </strong>
                    <?php } if (isset($_SESSION['contactError'])) { ?>
                    <strong>Contact incorrect </strong>
                    <?php } if (isset($_SESSION['passError'])) { ?>
                    <strong>Password incorrect </strong>
                    <?php } if (isset($_SESSION['matchError'])) { ?>
                    <strong>Passwords do not match </strong>
                    <?php } ?>
                </div>
            <?php } ?>
            <?php if (isset($_SESSION['registerSuccess'])) { ?>
                <div class="alert alert-success fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Registered Successfully! </strong>
                </div>
            <?php } ?>
            <form role="form" method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input id="name" type="text" class="form-control" placeholder="John Doe">
                </div>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input id="email" type="email" class="form-control" id="email" placeholder="example@example.com">
                </div>
                <div class="form-group">
                    <label for="contact">Mobile:</label>
                    <input name="contact" id="contact" type="text" maxlength="10" class="form-control" placeholder="9876542310">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input id="password" type="password" class="form-control" id="password" placeholder="password">
                </div>
                <div class="form-group">
                    <label for="repassword">Confirm Password:</label>
                    <input id="repassword" type="password" class="form-control" id="password" placeholder="password">
                </div>
                <div class="text-center">
                <button id="signin" type="button" class="btn btn-primary ">Sign Up</button>
                </div>
                <br>
            </form>
        </div>
    </div>
</div>
<!--------------------------------------Sign up modal end----------------------------------------->

