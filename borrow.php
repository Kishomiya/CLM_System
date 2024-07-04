<?php
include('includes/header.php');
include('includes/navbar.php');
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content sample_cont">
      <div class="modal-header">
        <h5 class="modal-title font-weight-bold" id="exampleModalLabel"><i class="fa fa-plus"></i>Add New Borrow Record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

          <div class="form-group">
            <label class="font-weight-bold">Borrower</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="borrower" id="borrower1" value="Faculty">
              <label class="form-check-label" for="borrower1">
                Faculty
              </label>
            </div>
            <div class="form-check ">
              <input class="form-check-input" type="radio" name="borrower" id="borrower2" value="Student">
              <label class="form-check-label" for="borrower2">
                Student
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="borrower" id="borrower3" value="Staff">
              <label class="form-check-label" for="borrower3">
                Staff
              </label>
            </div>
          </div>
          <div class="row">
            <div class="form-group col">
              <label class="font-weight-bold">Borrower Name</label>
              <input type="text" name="borrowerName" class="form-control">
            </div>
            <div class="form-group col">
              <label class="font-weight-bold">Department</label>
              <input type="text" name="department" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="font-weight-bold">Borrowed Date</label>
            <input type="date" name="confirmpassword" class="form-control">
          </div>
          <div class="form-group">
            <label class="font-weight-bold">Item</label>
            <div class="form-row align-items-center">
              <div class="col-sm-9 my-1">
                <select name="" id="item_select" class="form-control custom-select rounded-10">
                  <option></option>
                  <option></option>
                </select>
              </div>
              <div class="col-auto my-1">
                <button class="btn btn-primary btn-sm ml-2 rounded-5" id="add_item" type="button"><i class="fa fa-plus"></i> Add to List</button>
              </div>
            </div>
          </div>
          <h4><strong>Items</strong></h4>
          <div class="form-group">
            <label class="font-weight-bold">Remarks</label>
            <textarea id="remarks" rows="4" name="remarks" class="form-control form-control-sm rounded-10"></textarea>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
          </div>
          <!-- <div class="row">
						<div class="col-lg-7 col-md-10 col-sm-12 col-12">
							<div id="item-list" class="list-group mx-4">
									<div class="list-group-item list-group-item-action">
										<div class="d-flex w-100 align-items-center">
											<div class="col-auto flex-grow-1">
												<input type="hidden" name="item_id[]">
												<span></span>
											</div>
											<div class="col-auto flex-shrink-1">
												<button class="btn btn-danger btn-sm px-1 py-1 remove-item" type="button">
													<i class="fa fa-trash"></i>
												</button>
											</div>
										</div>
									</div>
							</div>
						</div>
          </div> -->


        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">List of Borrowing Records
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
              <th>Code</th>
              <th>Borrowed Date</th>
              <th>Returnted Date</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>

            <tr>
              <td>1</td>
              <td>2024-05-27</td>
              <td>REC-0000132564</td>
              <td>2024-05-27</td>
              <td>2024-06-12</td>
              <td>
                <span class="badge badge-info px-3 rounded-pill">Borrowed</span>
              </td>
              <td class="text-center">
                <a><i class="fa fa-edit"></i></a>
                <a><i class="fa fa-trash  ml-2"></i></a>
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
    .sample_cont {
      width: 650px;
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