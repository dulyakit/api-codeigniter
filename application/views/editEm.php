<html>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<div class="container">
    <div class="col-12 mt-5" style="margin-bottom: 300px;">
        <div class="card">
            <h5 class="card-header">แก้ไขข้อมูลพนักงาน</h5>
            <div class="card-body">
                <div class="col-md-12">
                    <form method="post" id="form" onsubmit="return validateForm()" action="<?php echo base_url() . 'admin/edit_user' ?>">
                        <div class="row -1 mt-3">
                            <div class="col-6">
                                <label for="">Fname</label>
                                <input type="text" name="fname" class="form-control" value="<?php echo $employee[0]->fname ?>">
                            </div>
                            <input type="text" name="ssn" style="display: none;" class="form-control" value="<?php echo $employee[0]->ssn ?>">
                            <div class="col-6">
                                <label for="">Lname</label>
                                <input type="text" name="lname" class="form-control" value="<?php echo $employee[0]->lname ?>">
                            </div>
                        </div>
                        <div class="row -1 mt-3">
                            <div class="col-6">
                                <label for="">Birthday</label>
                                <input type="date" name="bdate" class="form-control" value="<?php echo $employee[0]->bdate ?>">
                            </div>
                            <div class="col-6">
                                <label for="">Address</label>
                                <input type="text" name="address" class="form-control" value="<?php echo $employee[0]->address ?>">
                            </div>
                        </div>
                        <div class="row -1 mt-3">
                            <div class="col-6">
                                <label for="">Sex</label>
                                <select name="sex" id="" class="form-select">
                                    <?php
                                    $s = $employee[0]->sex;
                                    if ($s == 'M') {
                                    ?>
                                        <option value="M">Male</option>
                                        <option value="F">Female</option>

                                    <?php
                                    } else {
                                    ?>
                                        <option value="F">Female</option>
                                        <option value="M">Male</option>

                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="">salary</label>
                                <input type="text" name="salary" class="form-control" value="<?php echo $employee[0]->salary ?>">
                            </div>
                        </div>

                        <div class="row -1 mt-3">
                            <div class="col-12" align="center">
                                <button class="btn btn-success">SAVE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<script>
    function validateForm() {
        Swal.fire({
            title: 'Are you sure?',
            text: "คุณต้องการบันทึกข้อมูลหรือไม่?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById("form").submit();
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            }
        })
        return false;
    }
</script>
<pre>
    <?php
    // var_dump($employee)
    ?>
    </pre>

</html>