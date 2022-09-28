{{-- Modal Edit --}}
<div class="modal fade" id="Edit{{ $vendor->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Data Vendor</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close" style="cursor: pointer">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form method="POST" action="{{ route('vendors.update', $vendor->id) }}">
          @csrf
          <div class="modal-body">
            <table class="table-borderless" width="100%">
              <tr height="40px" style="font-size: 1.15rem; color: black;">
                <td width="40%">
                  <span>Name</span>
                </td>
                <td width="60%">
                  <input type="text" name="name" placeholder="Input name" style="width: 100%" value="{{ $vendor->name }}" readonly required>
                </td>
              </tr>
              <tr height="40px" style="font-size: 1.15rem; color: black;">
                <td width="40%">
                  <span>User</span>
                </td>
                <td width="60%">
                  @foreach ($users as $user)
                    @if(($vendor->user_id) == ($user->id))
                      <input name="user" list="user_id" placeholder="Choose user" style="width: 100%" value="{{ $user->name }}" required>
                    @endif
                  @endforeach
                  <datalist id="user_id">
                    @foreach ($users as $user)
                      @if(($vendor->user_id) == ($user->id))
                        <option data-value="{{ $user->id }}" selected>{{ $user->name }}</option>
                      @else
                        <option data-value="{{ $user->id }}">{{ $user->name }}</option>
                      @endif
                    @endforeach
                  </datalist>
                </td>
              </tr>
              <tr height="40px" style="font-size: 1.15rem; color: black;">
                <td width="40%">
                  <span>Phone</span>
                </td>
                <td width="60%">
                  <input type="tel" name="phone" placeholder="Input phone" style="width: 100%" value="{{ $vendor->phone }}" required>
                </td>
              </tr>
              <tr height="40px" style="font-size: 1.15rem; color: black;">
                <td width="40%">
                  <span>Web</span>
                </td>
                <td width="60%">
                  <input type="text" name="web" placeholder="Input Web" style="width: 100%" value="{{ $vendor->web }}" required>
                </td>
              </tr>
              <tr height="40px" style="font-size: 1.15rem; color: black;">
                <td width="40%">
                  <span>Address</span>
                </td>
                <td width="60%">
                  <input type="text" name="address" placeholder="Input Address" style="width: 100%" value="{{ $vendor->address }}" required>
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
