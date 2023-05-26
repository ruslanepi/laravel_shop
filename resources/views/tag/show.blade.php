@extends('layouts.main')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tag title: {{$tag->title}}</h1>
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
                            <a href="{{route('tag.edit', $tag->id)}}" class="btn btn-primary mr-3">edit cat</a>
                            <div>
                                <form action="{{route('tag.delete', $tag->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-danger" value="remove category">
                                </form>
                            </div>
                        </div>


                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">

                                <tbody>

                                <tr>
                                    <td>id</td>
                                    <td>{{ $tag->id }} </td>
                                </tr>

                                <tr>
                                    <td> Title</td>
                                    <td> {{ $tag->title }}</td>
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
