{{-- Modal Edit --}}
<div class="modal fade" id="Edit{{ $role->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Data Role</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close" style="cursor: pointer">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form method="POST" action="{{ route('roles.update', $role->id) }}">
          @csrf
          <div class="modal-body">
            <table class="table table-borderless" width="100%">
                <tr>
                    <td width="40%">
                      <span>Id</span>
                    </td>
                    <td width="60%">
                      <input type="text" name="id" value="{{ $role->id }}" style="width: 100%" disabled>
                    </td>
                  </tr>
                <tr>
                <td width="40%">
                  <span>Role</span>
                </td>
                <td width="60%">
                  <input type="text" name="name" placeholder="Input role for user" value="{{ $role->name }}" style="width: 100%" required>
                </td>
              </tr>
            </table>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn text-light btn-create" style="background-color: #0bcd55">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>