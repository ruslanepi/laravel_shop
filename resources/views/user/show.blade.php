@extends('layouts.main')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Просмотр: {{$user->name}}</h1>
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex ">
                            <a href="{{route('user.edit', $user->id)}}" class="btn btn-primary mr-3">edit user</a>
                            <div>
                                <form action="{{route('user.delete', $user->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-danger" value="remove user">
                                </form>
                            </div>
                        </div>


                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">

                                <tbody>

                                <tr>
                                    <td>id</td>
                                    <td>{{ $user->id }} </td>
                                </tr>

                                <tr>
                                    <td> name</td>
                                    <td> {{ $user->name }}</td>
                                </tr>

                                <tr>
                                    <td> surname</td>
                                    <td> {{ $user->surname }}</td>
                                </tr>

                                <tr>
                                    <td> patronymic</td>
                                    <td> {{ $user->patronymic }}</td>
                                </tr>

                                <tr>
                                    <td> age</td>
                                    <td> {{ $user->age }}</td>
                                </tr>

                                <tr>
                                    <td> gender</td>
                                    <td> {{ $user->genderTitle }}</td>
                                </tr>

                                <tr>
                                    <td> address</td>
                                    <td> {{ $user->address }}</td>
                                </tr>

                                <tr>
                                    <td> email</td>
                                    <td> {{ $user->email }}</td>
                                </tr>

                                <tr>
                                    <td> password</td>
                                    <td> {{ $user->password }}</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
