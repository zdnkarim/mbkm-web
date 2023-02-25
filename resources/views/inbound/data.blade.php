@extends('layouts.dashboardadmin')

@section('content')
    <div class="col-12">
        <h2 class="mb-2 page-title">Data Mahasiswa Inbound</h2>
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
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Universitas Asal</th>
                                    <th>Program Studi Tujuan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Universitas Asal</th>
                                    <th>Program Studi Tujuan</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($users as $u)
                                    @foreach ($data as $d)
                                        @if ($u->id == $d->user_id)
                                            @foreach ($role as $r)
                                                @if ($r->user_id == $d->user_id)
                                                    <tr>
                                                        <td></td>
                                                        <td>{{ $d->nim }}</td>
                                                        <td>{{ $d->users->name }}</td>
                                                        <td>{{ $d->univ }}</td>
                                                        <td>{{ $d->prodi_tuj }}</td>
                                                        <td>
                                                            <a href="/dashboard/data-inbound/{{ $d->id }}/show">
                                                                <i class="fe fe-edit fe-24"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- simple table -->
        </div> <!-- end section -->
    </div>
@endsection
