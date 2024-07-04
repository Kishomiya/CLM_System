<?php
include('includes/header.php');
include('includes/navbar.php');
?>


<div class="modal fade font-weight-bold" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content sample_cont">
      <div class="modal-header">
        <h5 class="modal-title font-weight-bold" id="exampleModalLabel"><i class="fa fa-edit"></i>Edit Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">
          <div class="form-group ">
            <label class="font-weight-bold">Name</label>
            <input type="email" name="email" class="form-control">
          </div>
          <div class="form-group">
            <label class="font-weight-bold">Description</label>
            <textarea id="remarks" rows="4" name="remarks" class="form-control form-control-sm rounded-10"></textarea>
          </div>
          <div class="form-group">
            <label class="font-weight-bold">Status</label>
            <div>
              <select name="" id="item_select" class="form-control custom-select rounded-10">
                <option>Active</option>
                <option></option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="font-weight-bold">Image</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input rounded-circle" id="customFile1" name="img" onchange="displayImg(this,$(this))" accept=".png, .jpg, .jpeg, .ico">
              <label class="custom-file-label" for="customFile1">Choose file</label>
            </div>
          </div>
          <div class="form-group d-flex w-100 justify-content-center">
            <img src="img/logo.png" alt="" id="cimg" class="img-fluid img-thumbnail">
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
      <h6 class="m-0 font-weight-bold text-primary">List of Categories
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
              <th width="15%">Image</th>
              <th width="20%">Name</th>
              <th width="40%">Description</th>
              <th width="10%">Status</th>
              <th width="10%">Action</th>
            </tr>
          </thead>
          <tbody>

            <tr>
              <td>1</td>
              <td>
                <div class="border rounded text-center">
                  <img src="img/2.png" class="category-img">
                </div>
              </td>
              <td>Projector</td>
              <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer molestie ipsum ornare nunc pellentesque, ut iaculis diam facilisis.</td>
              <td>
                <span class="badge badge-success px-3 rounded-pill">Active</span>
                <!-- <button type="submit" name="delete_btn" class="btn btn-primary">Returned</button> -->
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
    .category-img{
      width: 60px;
		height: 60px;
		object-fit:cover;
		object-position:center center;
    }
    #cimg {
		width: 150px;
		height: 150px;
		object-fit: cover;
		object-position: center center;
	}
  .sample_cont{
    width: 800px;
    height: 800px;
    
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