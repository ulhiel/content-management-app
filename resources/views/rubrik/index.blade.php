@extends('layouts.app')

@section('content')
   <div class="container-fluid">
       <div class="row my-1">
           <div class="col-md-10">
               <h4><strong>Rubrik Konten</strong></h4>
           </div>
           <div class="col-md-2">
               <a href="/rubrik/create" class="btn btn-success"><i class="fas fa-plus-circle"></i> Tambah Rubrik</a>
           </div>
        </div>
        <div class="row">
            @foreach ($rubriks as $rubrik)
            <div class="col-md-4 my-2">
                <div class="card shadow-sm">
                    <div class="card-header">
                        {{ $rubrik->name }}
                    </div>
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tr>
                                <td>Jumlah Post</td>
                                <td>:</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td>On Going Project</td>
                                <td>:</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>On Going Task</td>
                                <td>:</td>
                                <td>13</td>
                            </tr>
                        </table>
                            <a href="/rubrik/{{ $rubrik->id }}/show" class="btn btn-primary btn-block"><i class="fas fa-pen"></i> Kelola</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
   </div>
@endsection