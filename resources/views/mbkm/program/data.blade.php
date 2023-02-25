@extends('layouts.dashboardadmin')

@section('content')
    <div class="col-12">
        <div class="form-row">
            <h2 class="page-title">Data Program MBMK</h2>
            <div class="col">
                <div class="text-right">
                    <a href="#" class="btn btn-primary" data-target="#popUpCreate" data-toggle="modal">Create Program
                        MBKM</a>
                </div>
            </div>
        </div>
        <div class="modal fade" id="popUpCreate" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="post" action="/dashboard/mbkm-program/create">
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
                                <input type="number" class="form-control" name="id" id=""
                                    placeholder="ID Program" required>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Jenis MBKM</label>
                                <select name="jenis" id="" class="form-control" required>
                                    <option value="" selected hidden>Jenis MBKM</option>
                                    @foreach ($jenis as $j)
                                        <option value="{{ $j->id }}">{{ $j->jenis }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Program MBKM</label>
                                <input type="text" name="program" class="form-control" name="" id=""
                                    placeholder="Program MBKM" required>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Jumlah SKS</label>
                                <input type="number" name="sks" class="form-control" name="" id=""
                                    placeholder="Jumlah SKS" required>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Kategori Program MBKM</label>
                                <select name="desc" id="" class="form-control" required>
                                    <option value="" selected hidden>Kategori Program MBKM</option>
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
                </div>
            </div>
        </div>
        <div class="row my-4">
            <!-- Small table -->
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-body">
                        <!-- table -->
                        <table class="table datatables" id="dataTable-1">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Program</th>
                                    <th>Jenis MBKM</th>
                                    <th>SKS</th>
                                    <th>Kategori</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th>Program</th>
                                    <th>Jenis MBKM</th>
                                    <th>SKS</th>
                                    <th>Kategori</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($data as $d)
                                    <tr>
                                        <td>{{ $count++ }}</td>
                                        <td>{{ $d->program }}</td>
                                        <td>{{ $d->jenis->jenis }}</td>
                                        <td>{{ $d->sks }}</td>
                                        <td>{{ $d->desc }}</td>
                                        <td>
                                            <button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted sr-only">Action</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <button class="dropdown-item openModal"
                                                    data-href="/dashboard/mbkm-program/{{ $d->id }}/show">Edit</button>
                                                <button class="dropdown-item openDeleteModal"
                                                    data-href="/dashboard/mbkm-program/{{ $d->id }}/validationDelete">Remove</button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- simple table -->
        </div> <!-- end section -->
    </div>
    <div class="modal fade" id="popUpEdit" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

            </div>
        </div>
    </div>

    <div class="modal fade" id="popUpDelete" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('.openModal').on('click', function() {
                var dataURL = $(this).attr('data-href');
                // alert(dataURL);
                $('.modal-content').load(dataURL, function() {
                    $('#popUpEdit').modal({
                        show: true
                    });
                });
            });
            $('.openDeleteModal').on('click', function() {
                var dataURL = $(this).attr('data-href');
                // alert(dataURL);
                $('.modal-content').load(dataURL, function() {
                    $('#popUpDelete').modal({
                        show: true
                    });
                });
            });
        });
    </script>
@endsection
