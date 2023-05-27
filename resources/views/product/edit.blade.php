@extends('layouts.main')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">edit user</h1>
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
                <form action="{{ route('user.update', $user->id) }}" method="post">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <input type="text"  name="name" class="form-control" value="{{$user->name ?? old('name')}}" placeholder="name">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text"  name="surname" class="form-control" value="{{$user->surname ?? old('surname')}}" placeholder="surname">
                    </div>
                    <div class="form-group">
                        <input type="text"  name="patronymic" class="form-control" value="{{$user->patronymic ?? old('patronymic')}}" placeholder="patronymic">
                    </div>
                    <div class="form-group">
                        <input type="number"  name="age" class="form-control" value="{{$user->age ?? old('age')}}" placeholder="age">
                    </div>
                    <div class="form-group">
                        <input type="text"  name="gender" class="form-control" value="{{$user->gender ?? old('gender')}}" placeholder="gender">
                    </div>
                    <div class="form-group">
                        <input type="text"  name="address" class="form-control" value="{{$user->address ?? old('address')}}" placeholder="address">
                    </div>


                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Edit">
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
