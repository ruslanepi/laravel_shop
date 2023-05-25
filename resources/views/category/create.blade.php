@extends('layouts.main')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">add category</h1>
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
                <form action="{{ route('category.store') }}" method="post">
                    @csrf

                    <div class="form-group">
                        <input type="text"  name="title" class="form-control" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="add">
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
