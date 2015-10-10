<div class="container">
    <div class="row">
        <div id="ask" class="modal fade" role="dialog">
            <div class="modal-content col-lg-8 col-lg-offset-2 text-muted" style="top: 100px;">
                <div class="modal-header">
<a href="#" class="close" data-dismiss="modal" aria-label="close">&times;</a>
                    <div class="alert alert-danger fade in" id="fail" style="display: none">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Question already exists! </strong>
                    </div>


                    <div class="alert alert-warning fade in" id="cat" style="display: none">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Categories not correct</strong>
                    </div>

                    <div class="alert alert-success fade in" id="qsuccess" style="display: none">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Successfully added!</strong> 
                    </div>
                    <h4 class="modal-title">Ask a Question</h4>
                </div>
                <div class="modal-body">
                    <form role="form" method="post">
                        <div class="form-group">
                            <input name="title" id="title" rows="10" required class="form-control" placeholder="Add title">
                        </div>
                        <div class="form-group">
                            <input name="category" id="category" required class="form-control" placeholder="Add categories">
                        </div>
                        <textarea name="question" id="question" required="true" placeholder="Enter your question here">Enter your question here</textarea><br>
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
                    <a href="#"><?php echo $row['title'] ?></a>
                </h3>
                <p>
                    by <a href="#"><?php echo $_SESSION['name'] ?></a>
                <span class="glyphicon glyphicon-time"></span> Posted on <?php echo $row['time'] ?></p>
                <p><?php echo $row['question'] ?></p>
                <a class="btn btn-primary" href="#">View Discussion <span class="glyphicon glyphicon-chevron-right"></span></a>
                <hr>

            <?php } ?>
            <!-- Pager 
            <ul class="pager">
                <li class="previous">
                    <a href="#">&larr; Older</a>
                </li>
                <li class="next">
                    <a href="#">Newer &rarr;</a>
                </li>
            </ul>-->

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

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/tinymce.min.js"></script>
<script type="text/javascript">
    tinymce.init({
        selector: "textarea",
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste"
        ],
        toolbar: "insertfile undo redo | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
    });
</script>