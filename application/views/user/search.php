<div class="container">
    <div class="row">
        <?php include_once 'addQuestion.php'; ?>
        <!-- Blog Entries Column -->
        <div class="col-md-9">
            <h1 class="page-header">
                <small>Search Results</small>
            </h1>
            <?php
            foreach ($result as $row) {
                ?>
                <h3>
                    <a href="<?php echo base_url() . 'index.php/user/question/' . url_title($row['title'], '-') . '/' . $row['qid']; ?>"><?php echo $row['title'] ?></a>
                </h3>
                <p>
                    <span class="glyphicon glyphicon-time"></span> <?php echo date('h:i a jS M\'y ', strtotime($row['time'])); ?></p>
                <p><?php echo $row['question'] ?></p>
                <a class="btn btn-primary" href="<?php echo base_url() . 'index.php/user/question/' . url_title($row['title'], '-') . '/' . $row['qid']; ?>">View Discussion <span class="glyphicon glyphicon-chevron-right"></span></a>
                <hr>

            <?php } ?>

        </div>
