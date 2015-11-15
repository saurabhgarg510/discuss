<div class="col-md-3">
    <div class="well">
        <h4>Search</h4>
        <div class="input-group col-lg-12">
            <form method="post" action="<?php echo base_url() . 'index.php/user/search'; ?>">
                <span class="input-group-bt">
                    <div style="position: relative; margin-right: 35px; z-index: 2">
                        <input type="text" class="form-control" name="query" id="query">
                    </div>
                    <button class="btn btn-default" type="submit" style="position: relative; float: right; top: -34px; z-index: 100">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </form>
        </div>
        <!-- /.input-group -->
    </div>

    <!-- Blog Categories Well -->
    <div class="well">
        <h4>Recent Questions</h4>
        <div class="row">
            <div class="col-lg-11">
                <?php
                foreach ($sidebar as $ques) {
                    ?><hr style="margin: 5px">
                    <a href="<?php echo base_url() . 'index.php/user/question/' . url_title($ques['title'], '-') . '/' . $ques['qid']; ?>"><?php echo $ques['title']; ?></a><br>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>

</div>
</div>