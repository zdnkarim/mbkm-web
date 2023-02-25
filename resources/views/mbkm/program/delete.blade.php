<div class="modal-header">
    <h5 class="modal-title" id="defaultModalLabel">Delete {{ $data->program }} Data</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    Are you sure to delete {{ $data->program }}?
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <a href="/dashboard/mbkm-program/{{ $data->id }}/delete">
        <input class="btn btn-danger" type="submit" value="Remove" name="delete">
    </a>
</div>
