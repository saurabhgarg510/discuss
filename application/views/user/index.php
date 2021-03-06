<div class="container">
    <div class="row">
        <?php include_once 'addQuestion.php'; ?>
        <!-- Blog Entries Column -->
        <div class="col-md-9">
            <h1 class="page-header">
                <small>My Questions</small>
            </h1>
            <?php
            foreach ($question as $row) {
                ?>
                <h3>
                    <a href="<?php echo base_url() . 'index.php/user/question/' . url_title($row['title'], '-') . '/' . $row['qid']; ?>"><?php echo $row['title'] ?></a>
                </h3>
                <p>
                    by <a href="#"><?php echo $_SESSION['name'] ?></a>&nbsp;&nbsp;
                    <span class="glyphicon glyphicon-time"></span> <?php echo date('h:i a jS M\'y ', strtotime($row['time'])); ?></p>
                <p><?php echo $row['question'] ?></p>
                <a class="btn btn-primary" href="<?php echo base_url() . 'index.php/user/question/' . url_title($row['title'], '-') . '/' . $row['qid']; ?>">View Discussion <span class="glyphicon glyphicon-chevron-right"></span></a>
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
