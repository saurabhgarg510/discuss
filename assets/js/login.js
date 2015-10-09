// JavaScript Document
function val()
{
    var flag = 1;
    var b = document.getElementById("password").value;
    if (b === '') {
        flag *= 0;
    }
    else {
        flag *= 1;
        document.getElementById("password").className = "";
    }
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var chk = re.test(document.getElementById("email").value);
    if (chk === '') {
        document.getElementById("email").value = null;
        flag *= 0;
    }
    else {
        flag *= 1;
        document.getElementById("email").className = "";
    }
    if (flag) {
        send(flag);
    }
    else
        return;
}

function send(flag) {
    if (flag)
    {
        document.getElementById("signin").disabled = true;
        $.ajax({
            type: 'post',
            url: 'http://localhost/discuss/index.php/home/checkUser',
            data: {
                email: $("#email").val(),
                captcha: $("#captcha").val(),
                password: $("#password").val()
            },
            success: function(data) {
                if (data != 0) {
                    window.location.assign('http://localhost/discuss/index.php/' + data);
                }
                else {
                    // TO DO 
                     window.location.assign('http://localhost/discuss/');
                     document.getElementById("sign").click();
                    // Failure on login response
                }
            }
        });
    }
}