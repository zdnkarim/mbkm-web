<form method="post" action="/dashboard/mbkm-jenis/{{ $data->id }}/update">
    @csrf
    <div class="modal-header">
        <h5 class="modal-title" id="defaultModalLabel">Create New MBKM Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="form-group">
            <label for="message-text" class="col-form-label">Jenis MBKM</label>
            <input type="text" class="form-control" name="jenis" value="{{ $data->jenis }}"
                placeholder="Jenis MBKM" required>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>
