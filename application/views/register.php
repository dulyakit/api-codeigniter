<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>
    <div class="container">
        <div class="card text-center mt-5 mb-5">
            <div class="card-header">
                <h2>Register</h2>
            </div>
            <?php
            if(isset($fail)){
                echo '<center><div class="alert alert-danger" style="width:50%" role="alert">
                มีอีเมลนี้อยู่แล้ว
              </div></center>';
            }
            ?>
            <form method="post" action="<?php echo base_url(). 'login/check_register'?>">
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="row -1">
                            <div class="form-group col-md-6">
                                <label for="InputText" align="left">ชื่อ</label>
                                <input class="form-control" type="text" name="fname" placeholder="name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="InputText" align="left">นามสกุล</label>
                                <input class="form-control" type="text" name="lname" placeholder="lname" required>
                            </div>
                        </div>
                        <div class="row -1">
                            <div class="form-group col-md-6">
                                <label for="InputText" align="left">email</label>
                                <input class="form-control" type="text" name="email" placeholder="email" required>
                            </div>
                            <div class="col-md-6">
                                <label for="InputText" align="left">password</label>
                                <input class="form-control" type="password" name="password" placeholder="password" required>
                            </div>
                        </div>
                        <div class="row -1">
                            <div class="col-md-6">
                                <label for="">เพศ</label>
                                <select class="custom-select" name="sex" id="inputGroupSelect01">
                                    <option selected>เลือกเพศ</option>
                                    <option value="male">ชาย</option>
                                    <option value="female">หญิง</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="InputText" align="left">วัน/เดือน/ปีเกิด</label>
                                <input class="form-control" type="date" name="birthday" placeholder="birthday" required>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card-footer text-muted">
                    <button type="submit" class="btn btn-success">สร้างบัญชี</button>
                    <!-- <button>register</button> -->
                </div>
            </form>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>