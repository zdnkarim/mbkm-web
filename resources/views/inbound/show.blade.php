@extends('layouts.dashboardadmin')

@section('content')
    <div class="col-12 col-lg-10 col-xl-16">
        <h2 class="h3 mb-1 page-title">Profile</h2>
        <hr>
        <div class="my-4">
            <form method="post" action="/dashboard/data-inbound/{{ $data->id }}/submit">
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
                                <p class="small mb-0 text-muted">{{ $data->univ }}</p>
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
                        value="{{ $data->users->name }}" disabled>
                </div>
                <div class="form-group">
                    <label for="inputEmail4">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Alamat Email"
                        value="{{ $data->users->email }}" disabled>
                </div>
                <div class="form-group">
                    <label for="inputEmail4">No. HP</label>
                    <input type="number" name="no_hp" class="form-control" id="inputEmail4" placeholder="No. HP"
                        value="{{ $data->no_hp }}">
                </div>
                <hr class="my-3">
                <div class="form-group">
                    <label for="inputEmail4">NIM Asal</label>
                    <input type="number" name="nim_asal" class="form-control" id="inputEmail4" placeholder="NIM Asal"
                        value="{{ $data->nim_asal }}">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputState5">Universitas Asal</label>
                        <select id="inputState5" name="univ_asal" class="form-control">
                            <option selected value="{{ $data->fak }}" hidden>Universitas Asal {{ $data->fak }}
                            </option>
                            <option value="Universitas A">Universitas A</option>
                            <option value="Universitas B">Universitas B</option>
                            <option value="Universitas C">Universitas C</option>
                            <option value="Universitas D">Universitas D</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState5">Fakultas</label>
                        <select id="inputState5" name="fak_asal" class="form-control">
                            <option selected value="{{ $data->fak }}" hidden>Fakultas {{ $data->fak }}</option>
                            <option value="A">Fakultas A</option>
                            <option value="B">Fakultas B</option>
                            <option value="C">Fakultas C</option>
                            <option value="D">Fakultas D</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputState5">Program Studi</label>
                        <select id="inputState5" name="prod_asal" class="form-control">
                            <option selected value="{{ $data->prodi }}" hidden>Program Studi {{ $data->prodi }}
                            </option>
                            <option value="A">Program Studi A</option>
                            <option value="B">Program Studi B</option>
                            <option value="C">Program Studi C</option>
                            <option value="D">Program Studi D</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState5">Semester</label>
                        <select id="inputState5" name="semester" class="form-control">
                            @if (empty($data->semester))
                                <option selected value="" hidden>Semester</option>
                            @else
                                <option selected value="{{ $data->semester }}" hidden>Semester {{ $data->semester }}
                                </option>
                            @endif
                            <option value="3">Semester 3</option>
                            <option value="5">Semester 5</option>
                            <option value="7">Semester 7</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState5">Jenjang Pendidikan</label>
                        <select id="inputState5" name="jenj_pend" class="form-control">
                            @if (empty($data->jenjang_pend))
                                <option selected value="" hidden>Jenjang Pendidikan</option>
                            @else
                                <option selected value="{{ $data->jenjang_pend }}" hidden>{{ $data->jenjang_pend }}
                                </option>
                            @endif
                            <option value="D3">D3</option>
                            <option value="D4">D4</option>
                            <option value="S1">S1</option>
                        </select>
                    </div>
                </div>
                <hr class="my-3">
                <div class="form-group">
                    <label for="inputState5">NIM UNAIR</label>
                    <input class="form-control" type="text" name="nim" id="" placeholder="NIM UNAIR"
                        value="{{ $data->nim }}" disabled>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputState5">Program Studi Tujuan</label>
                        <select id="inputState5" name="prod_tuj" class="form-control">
                            @if (empty($data->prodi_tuj))
                                <option value="" selected hidden>Program Studi Tujuan</option>
                            @else
                                <option selected value="{{ $data->prodi_tuj }}" hidden>Program Studi
                                    {{ $data->prodi_tuj }}
                                </option>
                            @endif
                            <option value="A">Program Studi A</option>
                            <option value="B">Program Studi B</option>
                            <option value="C">Program Studi C</option>
                            <option value="D">Program Studi D</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Mata Kuliah yang Diambil</label>
                    <textarea class="form-control" name="mk_ambil" id="" rows="4"
                        placeholder="Mata Kuliah yang Diambil">{{ $data->mk_ambil }}</textarea>
                </div>
                <hr class="my-3">
                <div class="form-row">
                    <a href="{{ url()->previous() }}" class="btn btn-secondary">Cancel</a>
                    <div class="col">
                        <div class="text-right">
                            <a href="#" class="btn btn-danger" data-target="#popUpDelete"
                                data-toggle="modal">Remove</a>
                            <button type="submit" class="btn btn-primary">Save Change</button>
                        </div>
                    </div>
                </div>
            </form>
        </div> <!-- /.card-body -->
    </div> <!-- /.col-12 -->
    <div class="modal fade" id="popUpDelete" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="defaultModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body"> Are you sure to delete {{ $data->users->name }} to outbound database?</div>
                <div class="modal-footer">
                    <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Close</button>
                    <a class="btn mb-2 btn-danger" href="/dashboard/data-inbound/{{ $data->id }}/delete">Remove</a>
                    {{-- <button type="sub" class="btn mb-2 btn-primary">Remove</button> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
