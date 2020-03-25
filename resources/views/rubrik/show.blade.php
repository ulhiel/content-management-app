@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 my-2">
                <div class="card rubrik-chart">
                    <div class="card-body">
                        <h5>Growth Chart for <strong>{{ $target->name }}</strong></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-6 my-2">
                <div class="card rubrik-summary">
                    <div class="card-body">
                        <h5>Rubrik Summary for <strong>{{ $target->name }}</strong></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card my-2 rubrik-scheduled-post">
                    <div class="card-body">
                        <h5>Scheduled Post in <strong>{{ $target->name }}</strong></h5>
                            <table class="table scheduled-post-table overflow-auto">
                                
                            </table>        
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#newPost">
                            <i class="fas fa-plus-circle"></i> Plan New Post
                        </button>
                        <button class="btn btn-primary">
                            <i class="fas fa-file-import"></i> Import from Excel
                        </button>
                    </div>
                </div>
                <div class="card my-2 rubrik-posted">
                    <div class="card-body">
                        <h5>Posted in <strong>{{ $target->name }}</strong></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-6 my-2">
                <div class="card rubrik-ongoing-task">
                    <div class="card-body">
                        <h5>On Going Task</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CREATE NEW POST MODAL -->
    <div class="modal fade" id="newPost" tabindex="-1" role="dialog" aria-labelledby="newPostLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Plan New Post in {{ $target->name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                @csrf
                    <div class="col-md">
                        <div class="form-group">
                            <label for="title">Post Title</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <label for="post_date">Post Date</label>
                            <input type="date" name="post_date" id="post_date" class="form-control">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-success">Publish Plan</button>
                </form>
            </div>
        </div>
        </div>
    </div>

@endsection