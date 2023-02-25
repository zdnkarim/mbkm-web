@extends('layouts.dashboardtemplate')
@section('profile-pict')
    <img src="{{ asset('assets/avatars/face-1.jpg') }}" alt="..." class="avatar-img rounded-circle">
@endsection
@section('title')
    Dashboard MBKM | Universitas Airlangga
@endsection
@section('navbar-comp')
    <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item dropdown">
            <a href="#dataMhs" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-user fe-16"></i>
                <span class="ml-3 item-text">Data Mahasiswa</span><span class="sr-only">(current)</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="dataMhs">
                <li class="nav-item active">
                    <a class="nav-link pl-3" href="/dashboard/data-outbound"><span
                            class="ml-1 item-text">Outbound</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-3" href="/dashboard/data-inbound"><span class="ml-1 item-text">Inbound</span></a>
                </li>
            </ul>
        </li>
    </ul>
    <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item dropdown">
            <a href="#dataMbkm" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-book fe-16"></i>
                <span class="ml-3 item-text">Data MBKM</span><span class="sr-only">(current)</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="dataMbkm">
                <li class="nav-item active">
                    <a class="nav-link pl-3" href="/dashboard/mbkm-jenis"><span class="ml-1 item-text">Jenis MBKM</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-3" href="/dashboard/mbkm-program"><span class="ml-1 item-text">Program
                            MBKM</span></a>
                </li>
            </ul>
        </li>
    </ul>
@endsection
