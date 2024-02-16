@extends('pemilik-mobil.layoutpm.layout')
@section('title', 'Daftar Mobil')
@section('content')

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyJq41R9u11qZ/Cq0FF2m6N5BIb/D5Q5c3" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"
        integrity="sha384-FG7aR1z7U4Z6BYl719/RA7L+TC9a0Cd8PcAe0qsnzO+zdA9Kxq8GWRNEo96gZL1B" crossorigin="anonymous">
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyJq41R9u11qZ/Cq0FF2m6N5BIb/D5Q5c3" crossorigin="anonymous">
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
                        <span class="h2">Manajemen Pembayaran</span>
                    </div>
                    <div class="card-body">
                        <div class="container" style="margin-top: 0px;">
                            <div class="row">
                                {{-- --}}
                                <div class="2 col-sm-auto">
                                    <table class="table table-hovered table-bordered">
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp

                                            <form>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Jenis Bank</label>
                                                    <select name="jenis_bank" class="form-select mb-3" required>
                                                        <option value="BRI">BRI</option>
                                                        <option value="MANDIRI">MANDIRI</option>
                                                        <option value="BNI">BNI</option>
                                                        <option value="BTN">BTN</option>
                                                        <option value="BSI">BSI</option>
                                                        <option value="BRI">BRI</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Nama Pemilik Rekening</label>
                                                    <input type="text" name="Nama Pemilik Rekening"
                                                        class="form-control mb-3" placeholder="Nama Pemilik Rekening">
                                                </div>
                                                <div class=" mb-3">
                                                    <label for="" class="form-label">No Rekening</label>
                                                    <input type="text" class="form-control"
                                                        onkeypress="return /[0-9]/i.test(event.key)"
                                                        placeholder="No Rekening
                                                        aria-label="Amount
                                                        (to the nearest dollar)">
                                                </div>
                                </div>
                                </form>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href=""><button class="btn btn-success">Simpan</button></a>
                </div>
            </div>
        </div>
    </div>
    </div>
