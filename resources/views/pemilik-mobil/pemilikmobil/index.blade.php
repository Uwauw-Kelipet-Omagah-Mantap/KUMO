@extends('pemilik-mobil.layoutpm.layout')
@section('title', 'Daftar Mobil')
@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyJq41R9u11qZ/Cq0FF2m6N5BIb/D5Q5c3" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"
    integrity="sha384-FG7aR1z7U4Z6BYl719/RA7L+TC9a0Cd8PcAe0qsnzO+zdA9Kxq8GWRNEo96gZL1B"
    crossorigin="anonymous">
</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyJq41R9u11qZ/Cq0FF2m6N5BIb/D5Q5c3"
    crossorigin="anonymous">
</script>


<style>
    .container {
        margin-top: 100px;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <span class="h2">Pemilik Mobil</span>
                </div>
                <div class="card-body">
                    <div class="container" style="margin-top: 0px;">
                        <div class="row">
                            <div class="col-md-8">
                                <form method="POST" action="{{ route('penggunapm.simpan') }}" enctype="multipart/form-data">
                                    @csrf
                                    <table class="table table-hovered table-bordered">
                                        <tbody>
                                            <tr>
                                                <th>Username</th>
                                                <td>{{ Auth::user()->username }}</td>
                                                <input type="hidden" name="username" value="{{ Auth::user()->username }}">
                                            </tr>
                                            <tr>
                                                <th>Nama Lengkap</th>
                                                <td>
                                                    <input type="text" class="form-control" id="nama_pemilik"
                                                        name="nama_pemilik" placeholder="Masukkan Nama Lengkap" value="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Alamat</th>
                                                <td>
                                                    <input type="text" class="form-control" id="alamat_pemilik"
                                                        name="alamat_pemilik" placeholder="Masukkan Alamat">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Nomor Telepon</th>
                                                <td>
                                                    <input type="number" class="form-control" id="nomor_telepon_pemilik"
                                                        name="nomor_telepon_pemilik" placeholder="Masukkan No Telepon">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Foto KTP</th>
                                                <td>
                                                    <input type="file" name="foto_ktp_pemilik" class="form-control mb-3">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Foto Profil</th>
                                                <td>
                                                    <input type="file" name="foto_profil_pemilik" id="foto_profil_pemilik" class="form-control mb-3">
                                                    <img id="imagePreview" src="#" alt="Preview" style="display: none; max-width: 100%; max-height: 200px; margin-top: 10px;">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('imagePreview');
            output.src = reader.result;
            output.style.display = "block";
        }
        reader.readAsDataURL(event.target.files[0]);
    }
    
    document.getElementById('foto_profil').addEventListener('change', previewImage);
</script>

@endsection
