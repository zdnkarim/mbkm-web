@extends('layouts.dashboardtemplate')

@section('title')
    MBKM | Universitas Airlangga
@endsection

@section('profile-pict')
    <img src="https://cybercampus.unair.ac.id/foto_mhs/081811633020.JPG" alt="..." class="avatar-img rounded-circle"
        width="25" height="25">
@endsection

@section('navbar-comp')
    <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item dropdown">
            <a href="/dashboard/outbound-profile" aria-expanded="false" class="nav-link">
                <i class="fe fe-user fe-16"></i>
                <span class="ml-3 item-text">Profile</span><span class="sr-only">(current)</span>
            </a>

        </li>
    </ul>
@endsection

@section('content')
    <div class="col-12 col-lg-10 col-xl-16">
        <h2 class="h3 mb-1 page-title">Profile</h2>
        <hr>
        <div class="my-4">
            <form method="post" action="/dashboard/outbound-profile/submit">
                @csrf
                <div class="row align-items-center">
                    <div class="col-md-3 text-center mb-5">
                        <div class="avatar avatar-xl">
                            <img src="https://cybercampus.unair.ac.id/foto_mhs/081811633020.JPG" alt="..."
                                class="avatar-img rounded-circle" width="100" height="100">
                        </div>
                    </div>
                    <div class="col">
                        <div class="row align-items-center">
                            <div class="col-md-7">
                                <h4 class="mb-1">{{ $data->users->name }}</h4>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-7">
                                <p class="small mb-0 text-muted">Universitas Airlangga</p>
                                <p class="small mb-0 text-muted">Fakultas {{ $data->fak }} | Program Studi
                                    {{ $data->prodi }}</p>
                                <p class="small mb-0 text-muted">Semester {{ $data->semester }}</p>
                                <p class="small mb-0 text-muted">{{ $data->nim }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-3">
                <div class="form-group">
                    <label for="inputEmail4">Nama</label>
                    <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="Nama Lengkap"
                        required value="{{ $data->users->name }}" disabled>
                </div>
                <div class="form-group">
                    <label for="inputEmail4">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Alamat Email"
                        required value="{{ $data->users->email }}" disabled>
                </div>
                <div class="form-group">
                    <label for="inputEmail4">No. HP</label>
                    <input type="number" name="no_hp" class="form-control" id="inputEmail4" placeholder="No. HP" required
                        value="{{ $data->no_hp }}">
                </div>
                <hr class="my-3">
                <div class="form-group">
                    <label for="inputEmail4">NIM</label>
                    <input type="number" name="nim" class="form-control" id="inputEmail4" placeholder="NIM" required
                        value="{{ $data->nim }}">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputState5">Fakultas</label>
                        <select id="inputState5" name="fak" class="form-control" required>
                            <option selected value="{{ $data->fak }}" hidden>Fakultas {{ $data->fak }}</option>
                            <option value="A">Fakultas A</option>
                            <option value="B">Fakultas B</option>
                            <option value="C">Fakultas C</option>
                            <option value="D">Fakultas D</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState5">Program Studi</label>
                        <select id="inputState5" name="prod" class="form-control" required>
                            <option selected value="{{ $data->prodi }}" hidden>Program Studi {{ $data->prodi }}</option>
                            <option value="A">Program Studi A</option>
                            <option value="B">Program Studi B</option>
                            <option value="C">Program Studi C</option>
                            <option value="D">Program Studi D</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState5">Semester</label>
                        <select id="inputState5" name="semester" class="form-control" required>
                            <option selected value="{{ $data->semester }}" hidden>Semester {{ $data->semester }}</option>
                            <option value="3">Semester 3</option>
                            <option value="5">Semester 5</option>
                            <option value="7">Semester 7</option>
                        </select>
                    </div>
                </div>
                <hr class="my-3">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputState5">Jenis MBKM</label>
                        <select id="jenis" name="jenis" class="form-control" required>
                            @if (empty($data->program_id))
                                <option value="" selected hidden>Pilih Jenis MBKM</option>
                            @else
                                <option value="{{ $program_id->jenis->id }}" selected hidden>
                                    {{ $program_id->jenis->jenis }}</option>
                            @endif
                            @foreach ($jenis as $j)
                                <option value="{{ $j->id }}">{{ $j->jenis }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState5">Program MBKM</label>
                        <select id="program" name="program" class="form-control" required>
                            @if (empty($data->program_id))
                                <option value="" selected hidden>Pilih Program MBKM</option>
                            @else
                                <option value="{{ $data->programs->id }}" selected hidden>
                                    {{ $data->programs->program }}</option>
                            @endif
                        </select>
                    </div>
                </div>
                <hr class="my-3">
                <button type="submit" class="btn btn-primary">Save Change</button>
            </form>
        </div> <!-- /.card-body -->
    </div> <!-- /.col-12 -->
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#jenis').on('change', function() {
                var idJenis = this.value;
                // alert(idJenis);
                $("#program").html('');
                $.ajax({
                    url: "{{ url('api/get-program-outbound') }}",
                    type: "POST",
                    data: {
                        jenis_id: idJenis,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        console.log();
                        $("#program").html(
                            '<option value="" selected hidden>Pilih Program MBKM</option>');
                        $.each(result.program, function(key, value) {
                            $("#program").append('<option value="' + value.id + '">' +
                                value.program + '</option>');
                        });
                        // $('#jenis').html('<option value="">Pilih Jenis Program</option>');
                    }
                });
            });
        });
    </script>
@endsection
