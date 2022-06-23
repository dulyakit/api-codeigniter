<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
    .card {
        width: 70%;
        height: 50%;
        background-color: white;
    }
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>
    <div>
        <center>
            <div class="card border-dark mt-5" style="max-width: 30rem;">
                <div class="card-header">
                    <h2>Login</h2>
                </div>
                <?php
                if(isset($fail)){
                    echo '<div class="alert alert-danger" role="alert">อีเมลหรือรหัสผ่านผิด</div>';
                }
                ?>
                <div class="card-body text-dark">
                    <div id="alertuser"></div>
                    <form name="login" method="post" onsubmit="return validateForm()" action="<?php echo base_url() . 'login/check_login' ?>">
                        <div class="col-md-12 form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="example@test.com">

                            <label class="mt-4" for="">password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter password">

                            <button type="submit" class="btn btn-success mt-5">Login</button>

                            <div class="row -1 mt-5">
                                <div class="col-md-6" align="right" style="justify-content: right;">
                                    <h6>ยังไม่มีบัญชีผู้ใช้?</h6><span type></span>
                                </div>
                                <div class="col-md-6" align="left">
                                    <a href="<?php echo base_url() . 'register' ?>"><button type="button" class="form-control btn btn-primary">สร้างบัญชี</button></a>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </center>
</body>
<script>
    function validateForm() {
        var email = document.forms['login']['email'].value;
        var password = document.forms['login']['password'].value;

        if (email == '' || password == '') {
            $('#alertuser').append(
                `<div class="alert alert-danger" role="alert">
                          กรุณากรอกชื่อผู้ใช้ หรือ รหัสผ่าน
                </div>`
            );
            return false;
        }

        // if (email == '' && password == '') {
        //     $('#alertuser').append(
        //         `<div class="alert alert-danger" role="alert">
        //                   กรุณากรอกชื่อผู้ใช้ หรือ รหัสผ่าน
        //         </div>`
        //     );
        //     return false;
        // }
    }
</script>
<script>
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4'
    });
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>