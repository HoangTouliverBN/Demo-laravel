$(function() {
    $(".inuser").text("Tài khoản");
    $(".active-user").css("display", 'none');
    $("form").submit(function(e) {
        e.preventDefault();
        let modal = $("#modalLRForm");
        let user = $("#modalLRInput12").val();
        let password = $("#modalLRInput13").val();
        let rpassword = $("#modalLRInput14").val();
        let check = true;

        $(".error1").text("");
        $(".error2").text("");
        $(".error3").text("");

        if (user == "") {
            $(".error1").css("color", 'red');
            $(".error1").text("Không bỏ trống trường này");
        }
        if (password == "") {
            $(".error2").css("color", 'red');
            $(".error2").text("Không bỏ trống trường này");
        }
        if (rpassword == "") {
            $(".error3").css("color", 'red');
            $(".error3").text("Không bỏ trống trường này");
        } else if (rpassword != password) {
            $(".error3").css("color", 'red');
            $(".error3").text("Mật khẩu không khớp");
        } else {
            alert("Đăng ký thành công")
        }
    })

    $('.dangnhap').click(function() {
        let taikhoan = $('#modalLRInput10').val();
        let matkhau = $('#modalLRInput11').val();
        let isvalid = true;

        $(".error4").text("");
        $(".error5").text("");

        if (taikhoan == "") {
            isvalid = false;
            $(".error4").css("color", 'red');
            $(".error4").text("Không bỏ trống trường này");
        }
        if (matkhau == "") {
            isvalid = false;
            $(".error5").css("color", 'red');
            $(".error5").text("Không bỏ trống trường này");
        } else {
            if (matkhau != 'admin' && taikhoan != 'admin') {
                isvalid = false;
                $(".error5").css("color", 'red');
                $(".error5").text("Sai tài khoản hoặc mật khẩu");
            } else {
                connect();
            }
        }
    })

    function connect() {
        $.ajax({
            type: "POST",
            url: "./backup.php",
            cache: false,
            data: {
                username: $("#modalLRInput10").val(),
                password: $("#modalLRInput11").val()
            },
            success: function(response) {
                $("#end").click(),
                    $(".user").css("display", 'none'),
                    $(".active-user").css("display", 'block'),
                    $(".inuser").text(" Admin"),
                    $("#end").click(),
                    $(".ketqua").text(response)
            },
            error: function() {
                alert("Error");
            }
        });
    }
})