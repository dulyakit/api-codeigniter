<?php
$psermis_admin = false;

if (count($_SESSION) > 1) {
    if ($_SESSION['user_info']->permission_type == 'admin') {
        $psermis_admin = true;
    }
}

if ($psermis_admin) {
?>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <script src="http://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

    <!-- alert -->
    <!-- <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css"> -->

    <div class="container">
        <div class="col-12 mt-3">
            <div class="col-2">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Employee</button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Employee</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="col-md-12">
                                    <form method="post" id="form" onsubmit="return validateForm()" action="<?php echo base_url() . 'admin/insert_user' ?>">
                                        <div class="row -1 mt-3">
                                            <div class="col-6">
                                                <label for="">Fname</label>
                                                <input type="text" name="fname" class="form-control" value="" required>
                                            </div>
                                            <input type="text" name="ssn" style="display: none;" class="form-control" value="">
                                            <div class="col-6">
                                                <label for="">Lname</label>
                                                <input type="text" name="lname" class="form-control" value="" required>
                                            </div>
                                        </div>
                                        <div class="row -1 mt-3">
                                            <div class="col-6">
                                                <label for="">SSN</label>
                                                <input type="number" name="ssn" class="form-control" value="" required>
                                            </div>
                                            <div class="col-6">
                                                <label for="">Birthday</label>
                                                <input type="date" name="bdate" class="form-control" value="" required>
                                            </div>

                                        </div>
                                        <div class="row -1 mt-3">
                                            <div class="col-12">
                                                <label for="">Address</label>
                                                <input type="text" name="address" class="form-control" value="" required>
                                            </div>
                                        </div>
                                        <div class="row -1 mt-3">
                                            <div class="col-6">
                                                <label for="">Sex</label>
                                                <select name="sex" id="" class="form-select" required>
                                                    <option value="">Choose Sex</option>
                                                    <option value="M">Male</option>
                                                    <option value="F">Female</option>
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <label for="">salary</label>
                                                <input type="number" name="salary" class="form-control" value="" required>
                                            </div>
                                        </div>

                                        <div class="row -1 mt-3">
                                            <div class="col-12" align="center">
                                                <button type="submit" class="btn btn-primary">Add</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-10"></div>
        </div>
        <div class="col-12 mt-3 overflow-auto">
            <table id="myTable" class="display nowrap ">
                <thead>
                    <tr>
                        <th>NO.</th>
                        <th>Name</th>
                        <th>SSN</th>
                        <th>Birthday</th>
                        <th>Address</th>
                        <th>SEX</th>
                        <th>Manage</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $id = 0;
                    foreach ($employee_list as $em) { ?>
                        <tr>
                            <td align="center">
                                <?php echo $id += 1; ?>
                            </td>
                            <td>
                                <?php echo $em->fname . ' ' . $em->lname; ?>
                            </td>
                            <td>
                                <?php echo $em->ssn; ?>
                            </td>
                            <td>
                                <?php echo $em->bdate; ?>
                            </td>
                            <td>
                                <?php echo $em->address; ?>
                            </td>
                            <td>
                                <?php echo $em->sex; ?>
                            </td>
                            <td>
                                <button class="btn btn-success" onclick="editEm('<?php echo $em->ssn ?>')">Edit</button>
                                <button class="btn btn-danger" onclick="delEm('<?php echo $em->ssn ?>')">Delete</button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>
    </div>
    <script>
        function validateForm() {
            Swal.fire({
                title: 'Are you sure?',
                text: "คุณต้องการเพิ่มพนักงานหรือไม่?",
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

        function editEm(ssn) {
            window.location = base_url + "admin/editEm/" + ssn;
        }

        function delEm(ssn) {
            // console.log(ssn);
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = base_url + "admin/delEm/" + ssn;
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                }
            })

        }


        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

<?php } else {
    redirect('home');
} ?>