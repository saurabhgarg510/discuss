<div class="container">
    <div class="row">
        <div id="ask" class="modal fade">
            <div class="modal-content col-lg-8 col-lg-offset-2 text-muted" style="top: 100px;">
                <div class="modal-header">
                    <?php if(isset($_SESSION['qfail'])) { ?>
                    <div class="alert alert-danger fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Question already exists! </strong>
                    </div>
                    <?php } ?>
                    <?php if(isset($_SESSION['qwarn'])) { ?>
                    <div class="alert alert-warning fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Categories not correct</strong>
                    </div>
                    <?php } ?>
                    <?php if(isset($_SESSION['qsuccess'])) { ?>
                    <div class="alert alert-success fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Successfully added!</strong> 
                    </div>
                    <?php } ?>
                    <h4 class="modal-title">Ask a Question</h4>
                </div>
                <div class="modal-body">
                    <form role="form" method="post">
                        <div class="form-group">
                            <input id="ques" rows="10" required style="resize: vertical" class="form-control" placeholder="Type your question here">
                        </div>
                        <div class="form-group">
                            <textarea id="exp" rows="10" required style="resize: vertical" class="form-control" placeholder="Type the explanation here"></textarea>
                        </div>
                        <div class="row text-center text-faded">
                            <button type="button" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Blog Entries Column -->
        <div class="col-md-9">
            <h1 class="page-header">
                <small>My Questions</small>
            </h1>
            <?php
            foreach ($question as $row) {
                ?>
                <h3>
                    <a href="#"><?php echo $row['question'] ?></a>
                </h3>
                <p class="lead">
                    by <a href="#"><?php echo $_SESSION['name'] ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $row['time'] ?></p>
                <p><?php echo $row['explanation'] ?></p>
                <a class="btn btn-primary" href="#">View Discussion <span class="glyphicon glyphicon-chevron-right"></span></a>
                <hr>

            <?php } ?>
            <!-- Pager -->
            <ul class="pager">
                <li class="previous">
                    <a href="#">&larr; Older</a>
                </li>
                <li class="next">
                    <a href="#">Newer &rarr;</a>
                </li>
            </ul>

        </div>

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-3">
            <div class="well">
                <center>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#ask" data-backdrop="true">Ask a Question</button>
                </center>
            </div>
            <div class="well">
                <h4>Search</h4>
                <div class="input-group">
                    <input type="text" class="form-control">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                </div>
                <!-- /.input-group -->
            </div>

            <!-- Blog Categories Well -->
            <div class="well">
                <h4>Blog Categories</h4>
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>