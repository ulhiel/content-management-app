@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h4>Buat Rubrik Baru</h4>
                        <form action="/rubrik/store" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nama">Nama Rubrik</label>
                                        <input type="text" name="nama" id="nama" class="form-control" placeholder="nama rubrik">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="deskripsi">Beri penjelasan singkat tentang rubrik ini</label>
                                        <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control" placeholder="Beri penjelasan singkat tentang rubrik ini.."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="/rubrik" class="btn btn-secondary">Batal</a>
                                    <button type="submit" class="btn btn-success">Buat Rubrik!</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    
@endsection
