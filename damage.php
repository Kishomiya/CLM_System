<?php
include('includes/header.php');
include('includes/navbar.php');
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-bold" id="exampleModalLabel"> <i class="fa fa-plus"></i>Add New Damage</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

          <div class="form-group">
            <label class="font-weight-bold">Item</label>
            <div>
              <select name="" id="item_select" class="form-control custom-select rounded-10 border-danger" required>
                <option>Please select item here</option>
                <option></option>
              </select>
              <div class="text-danger " style="font-size: small;">
                Select the Item
              </div>
            </div>
          </div>
          <div class="form-group ">
            <label class="font-weight-bold">Description</label>
            <textarea id="remarks" rows="4" name="remarks" class="form-control form-control-sm rounded-10 "></textarea>
            <!-- <div class="invalid-feedback">
              Please provide a description.
            </div> -->
          </div>
          <div class="form-group">
            <label class="font-weight-bold">Status</label>
            <div>
              <select name="" id="item_select" class="form-control border-danger custom-select rounded-10" required>
                <option value="">Unfixed</option>
                <option value="1">Unfixed</option>
                <option value="2">Fixed</option>
              </select>
              <div class="text-danger " style="font-size: small;">
                Select the Status
              </div>
            </div>
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
      <h6 class="m-0 font-weight-bold text-primary">List of Damages
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
              <th>ID</th>
              <th>Date Created</th>
              <th>Category</th>
              <th>Code</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>

            <tr>
              <td>1</td>
              <td>2024-04-27</td>
              <td>Mouse</td>
              <td>D-0000632542</td>
              <td>
                <span class="badge badge-danger px-3 rounded-pill">Unfixed</span>
              </td>
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