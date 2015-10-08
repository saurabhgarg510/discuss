<header>
    <div class="header-content">
        <div class="header-content-inner">
            <h1>Discussion is an exchange of knowledge</h1>
            <hr>
            <p></p>
            <a class="btn btn-default btn-xl" data-toggle="modal" data-target="#signin" data-backdrop="true">Sign In</a>
            <a class="btn btn-default btn-xl" href="<?php echo base_url(); ?>index.php/home/signup" data-backdrop="true">Sign Up</a>
        </div>
    </div>
</header>
<div id="signin" class="modal fade">
    <div class="modal-content col-lg-4 col-lg-offset-4 text-muted" style="top: 100px;">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Sign In</h4>
        </div>
        <div class="modal-body">
            <form role="form" action="<?php echo base_url(); ?>index.php/home/checkUser">
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" id="email" placeholder="example@example.com">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" placeholder="password">
                </div>
                <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                </div>
                <div class="row text-center text-faded">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="<?php echo base_url(); ?>index.php/home/forgotPassword" class="btn btn-default">Forgot Password?</a>
                </div>
            </form>
        </div>
    </div>
</div>

<section class="bg-primary" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">We've got what you need!</h2>
                <hr class="light">
                <p class="text-faded">Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source, free to download, and easy to use. No strings attached!</p>
                <a href="#" class="btn btn-default btn-xl">Get Started!</a>
            </div>
        </div>
    </div>
</section>

<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">At Your Service</h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-diamond wow bounceIn text-primary"></i>
                    <h3>Sturdy Templates</h3>
                    <p class="text-muted">Our templates are updated regularly so they don't break.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-paper-plane wow bounceIn text-primary" data-wow-delay=".1s"></i>
                    <h3>Ready to Ship</h3>
                    <p class="text-muted">You can use this theme as is, or you can make changes!</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-newspaper-o wow bounceIn text-primary" data-wow-delay=".2s"></i>
                    <h3>Up to Date</h3>
                    <p class="text-muted">We update dependencies to keep things fresh.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s"></i>
                    <h3>Made with Love</h3>
                    <p class="text-muted">You have to make your websites with love these days!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="no-padding" id="portfolio">
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="col-lg-4 col-sm-6">
                <a href="#" class="portfolio-box">
                    <img src="<?php echo base_url(); ?>assets/img/portfolio/1.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#" class="portfolio-box">
                    <img src="<?php echo base_url(); ?>assets/img/portfolio/2.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#" class="portfolio-box">
                    <img src="<?php echo base_url(); ?>assets/img/portfolio/3.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#" class="portfolio-box">
                    <img src="<?php echo base_url(); ?>assets/img/portfolio/4.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#" class="portfolio-box">
                    <img src="<?php echo base_url(); ?>assets/img/portfolio/5.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#" class="portfolio-box">
                    <img src="<?php echo base_url(); ?>assets/img/portfolio/6.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<aside class="bg-dark">
    <div class="container text-center">
        <div class="call-to-action">
            <h2>Free Download at Start Bootstrap!</h2>
            <a href="#" class="btn btn-default btn-xl wow tada">Download Now!</a>
        </div>
    </div>
</aside>