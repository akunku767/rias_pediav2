<!-- Logout Modal-->
<div class="modal fade" id="Delete{{ $role->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Data Role</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="POST" action="{{ route('roles.destroy', $role->id ) }}">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    Are you sure want to delete role's data with name = "{{ $role->name }}"?
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn text-light btn-create"
                        style="background-color: #dc3545">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>