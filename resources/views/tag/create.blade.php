@extends('layouts.main')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">add tag</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item active">Main</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <form action="{{ route('tag.store') }}" method="post">
                    @csrf

                    <div class="form-group">
                        <input type="text"  name="title" class="form-control" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="add tag">
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
