@extends('layout.layout')
@section('title', 'Kelola Akun')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <span class="h2">Daftar Akun</span>
                </div>
                <div class="card-body">
                    <table class="table table-hovered table-bordered">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Username</th>
                                <th>Role</th>
                                <th>Aksi</th>
                            </tr>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($user as $akun)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $akun->username }}</td>
                                    <td class="text-capitalize">{{$akun->role}}</td>
                                    <td>
                                        <a href="{{ url('/dashboard') }}/akun/edit/{{ $akun->id_user }}">
                                            <button class="btn btn-primary">Edit</button>
                                        </a>
                                        <form action="{{ url('dashboard', ['akun','destroy', $akun->id_user]) }}" method="POST" class="d-inline">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin mau dihapus?')">Hapus</button>                                       
                                        </form>                                                                                    
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        </thead>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="{{url('/dashboard')}}/akun/tambah"><button class="btn btn-success">Tambah</button></a>
                </div>
            </div>
        </div>
    </div>
</div>