<?php
include('includes/header.php');
include('includes/navbar.php');
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content sample_cont">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold" id="exampleModalLabel"><i class="fa fa-edit"></i>Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="code.php" method="POST">

                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col">
                            <label class="font-weight-bold">First Name</label>
                            <input type="text" name="firstname" class="form-control">
                        </div>
                        <div class="form-group col">
                            <label class="font-weight-bold">Last Name</label>
                            <input type="text" name="lastname" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label class="font-weight-bold">Username</label>
                            <input type="date" name="username" class="form-control">
                        </div>
                        <div class="form-group col">
                            <label class="font-weight-bold">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label class="font-weight-bold">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group col">
                            <label class="font-weight-bold">Contact No</label>
                            <input type="number" name="contact" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label class="font-weight-bold">Type</label>
                            <div>
                                <select name="" id="item_select" class="form-control custom-select rounded-10">
                                    <option>Administrator</option>
                                    <option>Staff</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col">
                            <label class="font-weight-bold">Avatar</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input rounded-circle" id="customFile" name="img" onchange="displayImg(this,$(this))" accept="image/png, image/jpeg">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <img src="img/8.png" alt="" id="cimg" class="img-fluid img-thumbnail">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
                </div>
            </form>

        </div>
    </div>
</div>


<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List of Users
            </h6>
            <hr class="sidebar-divider">
            <nav class="navbar navbar-light bg-light justify-content-between">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                    <i class="fa fa-plus"></i>
                    Create New
                </button>
                <form class="form-inline ">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-primary text-white" id="basic-addon1">
                                <i class="fas fa-search"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control " placeholder="Search.." aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </form>
            </nav>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="5%">ID</th>
                            <th width="15%">Date Updated</th>
                            <th width="10%">avatar</th>
                            <th width="20%">Name</th>
                            <th width="15%">Username</th>
                            <th width="15%">Email</th>
                            <th width="12%">Type</th>
                            <th width="13%">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>1</td>
                            <td>2024-05-27</td>
                            <td class="text-center">
                                <img src="img/8.png" class="img-thumbnail rounded-circle user-avatar">
                            </td>
                            <td>Sobika Karthekaisevan</td>
                            <td>sobi123</td>
                            <td>sobi@gmail.com</td>
                            <td>Staff</td>
                            <td class="text-center">
                                <a><i class="fa fa-edit"></i></a>
                                <a><i class="fa fa-trash ml-2"></i></a>
                            </td>
                            <!-- <td>
                <form action="" method="post">
                  <input type="hidden" name="delete_id" value="">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                </form>
            </td> -->
                        </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <style>
        .user-avatar {
            width: 3rem;
            height: 3rem;
            object-fit: scale-down;
            object-position: center center;
        }

        img#cimg {
            height: 15vh;
            width: 15vh;
            object-fit: cover;
            border-radius: 100% 100%;
            margin-top: 20px;
        }

        .sample_cont {
            width: 700px;
            height: auto;
        }

        .modal-title i {
            padding-right: 7px;
        }
    </style>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>