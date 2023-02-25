<form method="post" action="/dashboard/mbkm-program/{{ $data->id }}/update">
    @csrf
    <div class="modal-header">
        <h5 class="modal-title" id="defaultModalLabel">Create New MBKM Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">ID MBKM</label>
            <input type="number" value="{{ $data->id_program }}" class="form-control" name="id" id=""
                placeholder="ID Program" required>
        </div>
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Jenis MBKM</label>
            <select name="jenis" id="" class="form-control" required>
                @if (empty($data->jenis_id))
                    <option value="" selected hidden>Kategori Program MBKM</option>
                @else
                    <option value="{{ $data->jenis_id }}" selected hidden>{{ $data->jenis->jenis }}</option>
                @endif
                @foreach ($jenis as $j)
                    <option value="{{ $j->id }}">{{ $j->jenis }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Program MBKM</label>
            <input type="text" name="program" class="form-control" name="" id=""
                placeholder="Program MBKM" required value="{{ $data->program }}">
        </div>
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Jumlah SKS</label>
            <input type="number" value="{{ $data->sks }}" name="sks" class="form-control" name=""
                id="" placeholder="Jumlah SKS" required>
        </div>
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Kategori Program MBKM</label>
            <select name="desc" id="" class="form-control" required>
                @if (empty($data->desc))
                    <option value="" selected hidden>Kategori Program MBKM</option>
                @else
                    <option value="{{ $data->desc }}" selected hidden>Program {{ $data->desc }}</option>
                @endif
                <option value="Outbound">Program Outbound</option>
                <option value="Inbound">Program Inbound</option>
            </select>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn mb-2 btn-primary">Create</button>
    </div>
</form>
