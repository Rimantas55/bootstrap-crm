<div class="modal fade" id="addPostModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Add Post</h5>
        <button class="close" data-dismiss="modal">
          <span>&times;</span>
        </button>
      </div><!-- end pf modal-header -->
      <div class="modal-body">
        <form ><!-- dont forget action and method -->
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control">
          </div>
          <div class="form-group">
            <label for="category">Category</label>
            <select name="smth" class="form-control">
              <option value="">Web Development</option>
              <option value="">Tech Gadgets</option>
              <option value="">Business</option>
              <option value="">Health & Wellness</option>
            </select>
          </div>
          <div class="form-group">
            <label for="image">Upload Image</label>
            <div class="custom-file">
              <input type="file" name="file" class="custom-file-input" id="image">
              <label for="image" class="custom-file-label">Choose File</label>
            </div>
            <small class="form-text text-muted">Max Size 3mb</small>
          </div>
          <div class="form-group">
            <label for="body">Body</label>
            <textarea name="editor1" class="form-control"></textarea>
          </div>
        </form>
      </div><!-- end of modal-body -->
      <div class="modal-footer">
        <button class="btn btn-primary" data-dismiss="modal">Save Changes</button>
      </div><!-- end of modal-footer -->
    </div><!-- end of modal-content -->
  </div><!-- end of modal-dialog -->
</div><!-- end of modal fade -->
