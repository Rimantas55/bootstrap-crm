<div class="modal fade" id="addUserModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-warning text-white">
        <h5 class="modal-title">Add User</h5>
        <button class="close" data-dismiss="modal">
          <span>&times;</span>
        </button>
      </div><!-- end pf modal-header -->
      <div class="modal-body">
        <form ><!-- dont forget action and method -->
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control">
          </div>
          <div class="form-group">
            <label for="email">email</label>
            <input type="email" name="email" class="form-control">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
          </div>
          <div class="form-group">
            <label for="password2">Confirm Password</label>
            <input type="password" name="password2" class="form-control">
          </div>
        </form>
      </div><!-- end of modal-body -->
      <div class="modal-footer">
        <button class="btn btn-warning" data-dismiss="modal">Save Changes</button>
      </div><!-- end of modal-footer -->
    </div><!-- end of modal-content -->
  </div><!-- end of modal-dialog -->
</div><!-- end of modal fade -->