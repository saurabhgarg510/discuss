
<footer>
    <div class="col-lg-4 col-lg-offset-4 text-center">
        <hr>
        <p>Copyright &copy; Disquss 2015</p>
    </div>
</footer>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/tinymce.min.js"></script>
<script type="text/javascript">
    tinymce.init({
        selector: "textarea",
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code",
            "insertdatetime media table contextmenu paste"
        ],
        toolbar: "undo redo | bold italic underline subscript supscript| alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
    });
</script>
<script>
    function addQues() {
        tinyMCE.triggerSave();
//        alert($('#question').val());
        $.ajax({
            type: 'post',
            url: 'http://localhost/discuss/index.php/user/addQuestion',
            data: {
                title: $("#title").val(),
                cat: $("#category").val(),
                ques: $('#question').val()
            },
            success: function(data) {
                if (data === "SUCCESS") {
                    $('#qsuccess').css('display', 'inline-block');
                    setTimeout(function() {
                        window.location.href = "http://localhost/discuss/index.php/user/"
                    }, 3000);
                }
                else {
                    if (data === "quesErr" || data === "titleErr") {
                        $('#qfail').css('display', 'inline-block');
                    }
                    if (data === "catErr") {
                        $('#cat').css('display', 'inline-block');
                    }
                }
            }
        });
    }
</script>
<script>
    $(document).ready(function() {
        $('[data-toggle="popover"]').popover();
    });
</script>

<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

</body>
</html>
