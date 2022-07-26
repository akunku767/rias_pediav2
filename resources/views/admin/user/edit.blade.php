{{-- Modal Edit --}}
<div class="modal fade" id="Edit{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Data User</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close" style="cursor: pointer">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form method="POST" action="{{ route('users.update', $user->id) }}">
          @csrf
          <div class="modal-body">
            <table class="table-borderless" width="100%">
              <tr height="40px" style="font-size: 1.15rem; color: black;">
                <td width="40%">
                  <span>Name</span>
                </td>
                <td width="60%">
                  <input type="text" name="name" placeholder="Input name" style="width: 100%" value="{{ $user->name }}" required>
                </td>
              </tr>
              <tr height="40px" style="font-size: 1.15rem; color: black;">
                <td width="40%">
                  <span>Role</span>
                </td>
                <td width="60%">
                  @foreach ($roles as $role)
                    @if(($user->role_id) == ($role->id))
                      <input name="role" list="role_id" placeholder="Choose role" style="width: 100%" value="{{ $role->name }}" required>
                    @endif
                  @endforeach
                  <datalist id="role_id"> 
                    @foreach ($roles as $role)
                      @if(($user->role_id) == ($role->id))
                        <option data-value="{{ $role->id }}" selected>{{ $role->name }}</option>
                      @else
                        <option data-value="{{ $role->id }}">{{ $role->name }}</option>
                      @endif
                    @endforeach
                  </datalist>
                </td>
              </tr>
              <tr height="40px" style="font-size: 1.15rem; color: black;">
                <td width="40%">
                  <span>Email</span>
                </td>
                <td width="60%">
                  <input type="email" name="email" placeholder="Input email" style="width: 100%" value="{{ $user->email }}" required>
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