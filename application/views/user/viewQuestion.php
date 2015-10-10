<div class="container">
    <div class="row">
        <?php include_once 'addQuestion.php'; ?>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">                   
                    <h3>
                        <?php echo $question['title'] ?>

                    </h3>
                    <p>
                        by <a href="#"><?php //TODO get asker name              ?></a>&nbsp;&nbsp;
                        <span class="glyphicon glyphicon-time"></span> <?php echo date('h:i a jS M\'y ', strtotime($question['time'])); ?>
                        &emsp;<a onclick="upques(<?php echo $question['qid'] ?>)"><span class="glyphicon glyphicon-thumbs-up"></span></a> <?php echo $question['upvotes'] ?>
                        &emsp;<a onclick="dnques(<?php echo $question['qid'] ?>)"><span class="glyphicon glyphicon-thumbs-down"></span></a> <?php echo $question['downvotes'] ?>
                        &emsp;<span class="glyphicon glyphicon-eye-open"></span> <?php echo $question['view'] ?>
                    </p>
                    <p><?php echo $question['question'] ?></p>
                </div>
                <div class="panel-body">
                    <?php
                    foreach ($answer as $row) {
                        ?>
                        <p><?php echo $row['answer'] ?></p>
                        <p>
                            by <a href="#"><?php //TODO get solver name              ?></a>&nbsp;&nbsp;
                            <span class="glyphicon glyphicon-time"></span> <?php echo date('h:i a jS M\'y ', strtotime($row['time'])); ?></p>
                        &emsp;<a onclick="upans(<?php echo $row['aid'] ?>)"><span class="glyphicon glyphicon-thumbs-up"></span></a> <?php echo $row['upvotes'] ?>
                        &emsp;<a onclick="dnans(<?php echo $row['aid'] ?>)"><span class="glyphicon glyphicon-thumbs-down"></span></a> <?php echo $row['downvotes'] ?>
                        <hr>

                    <?php } ?>
                </div>
            </div>
            <div class="text-center">
                <?php if (isset($_SESSION['afail'])) { ?>
                    <div class="alert alert-danger fade in col-lg-6">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Answer empty or already exists! </strong>
                    </div>
                    <?php
                    unset($_SESSION['afail']);
                }
                if (isset($_SESSION['asuccess'])) {
                    ?>
                    <div class="alert alert-success fade in col-lg-6">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Successfully added!</strong> 
                    </div>
                    <?php
                    unset($_SESSION['asuccess']);
                }
                ?>
                <div class="text-right">
                    <button class="btn btn-default" data-toggle="collapse" data-target="#answer">Write Answer <span class="glyphicon glyphicon-pencil"></span></button>
                </div></div>

            <div id="answer" class="collapse ">
                <hr>

                <div class="text-muted">
                    <form role="form" method="post" action="<?php echo base_url() . 'index.php/user/addAnswer/' . $question['qid'] ?>">
                        <label for="answer">Your Answer:</label>
                        <textarea name="answer" id="answer" ></textarea><br>
                        <div class="row text-right text-faded">
                            <button type="submit" class="btn btn-primary" style="position: relative; right: 15px">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-3">
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

<script>




</script>