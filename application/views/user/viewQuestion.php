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
                        by <a href="<?php echo base_url() . 'index.php/user/profile/' . $user['userid'] ?>"><?php echo $user['name']; ?></a>&nbsp;&nbsp;
                        <span class="glyphicon glyphicon-time"></span> <?php echo date('h:i a jS M\'y ', strtotime($question['time'])); ?>
                        &emsp;<a class="badge" onclick="upques(<?php echo $question['qid'] ?>)">Upvote</a> <?php echo $question['upvotes'] ?>
                        &emsp;<a class="badge" onclick="dnques(<?php echo $question['qid'] ?>)">Downvote</a> <?php echo $question['downvotes'] ?>
                        &emsp;<span class="glyphicon glyphicon-eye-open"></span> <?php echo $question['view'] ?>
                    </p>
                    <p><?php echo $question['question'] ?></p>
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
                        </div>
                    </div>

                    <div id="answer" class="collapse ">
                        <hr>
                        <div class="text-muted">
                            <form role="form" method="post" action="<?php echo base_url() . 'index.php/user/addAnswer/' . $question['qid'] . '/' ?>">
                                <label for="answer">Your Answer:</label>
                                <textarea name="answer" id="answer" ></textarea><br>
                                <div class="row text-right text-faded">
                                    <button type="submit" class="btn btn-primary" style="position: relative; right: 15px">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <?php
                    foreach ($answer as $row) {
                        ?>
                        <p><?php echo $row['answer'] ?></p>
                        <p>
                            by <a href="<?php echo base_url() . 'index.php/user/profile/' . $row['userid']; ?>"><?php echo $row['name']; ?></a>&nbsp;&nbsp;
                            <span class="glyphicon glyphicon-time"></span> <?php echo date('h:i a jS M\'y ', strtotime($row['time'])); ?>
                            &emsp;<a onclick="upans(<?php echo $row['aid'] ?>)"><span class="glyphicon glyphicon-thumbs-up"></span></a> <?php echo $row['upvotes'] ?>
                            &emsp;<a onclick="dnans(<?php echo $row['aid'] ?>)"><span class="glyphicon glyphicon-thumbs-down"></span></a> <?php echo $row['downvotes'] ?>
                        </p>
                        <hr>

                    <?php } ?>
                </div>
            </div>

        </div>
