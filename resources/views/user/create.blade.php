@extends('layouts.main')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">add user</h1>
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
                <form action="{{ route('user.store') }}" method="post">
                    @csrf

                    <div class="form-group">
                        <input type="text"  name="name" class="form-control" placeholder="name">
                    </div>
                    <div class="form-group">
                        <input type="text"  name="surname" class="form-control" placeholder="surname">
                    </div>
                    <div class="form-group">
                        <input type="text"  name="patronymic" class="form-control" placeholder="patronymic">
                    </div>
                    <div class="form-group">
                        <input type="number"  name="age" class="form-control" placeholder="age">
                    </div>
                    <div class="form-group">
                        <input type="text"  name="gender" class="form-control" placeholder="gender">
                    </div>
                    <div class="form-group">
                        <input type="text"  name="address" class="form-control" placeholder="address">
                    </div>

                    <div class="form-group">
                        <input type="email"  name="email" class="form-control" placeholder="email">
                    </div>

                    <div class="form-group">
                        <input type="text"  name="password" class="form-control" placeholder="password">
                    </div>

                    <div class="form-group">
                        <input type="text"  name="password_confirmation" class="form-control" placeholder="Подтверждение пароля">
                    </div>


                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="add">
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
