<div id="ask" class="modal fade" role="dialog">
    <div class="modal-content col-lg-8 col-lg-offset-2 text-muted" style="top: 100px;">
        <div class="modal-header">
            <a href="#" class="close" data-dismiss="modal" aria-label="close">&times;</a>
            <div class="alert alert-danger fade in" id="qfail" style="display: none">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Question/title empty or already exists! </strong>
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
                    <label for="title">Question Title:</label>
                    <input name="title" id="title" rows="10" required class="form-control" placeholder="Add title">
                </div>
                <div class="form-group">
                    <label for="category">Categories:</label>
                    <input name="category" id="category" class="form-control" placeholder="Add categories separated by comma">
                </div>
                <label for="question">Question:</label>
                <textarea name="question" id="question" placeholder="Enter your question here"></textarea><br>
                <div class="row text-center text-faded">
                    <button type="button" class="btn btn-primary" onclick="addQues()">Submit</button>
                    <button type="button" class="btn" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>