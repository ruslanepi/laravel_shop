@extends('layouts.main')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Просмотр: {{$product->name}}</h1>
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
                            <a href="{{route('product.edit', $product->id)}}" class="btn btn-primary mr-3">edit product</a>
                            <div>
                                <form action="{{route('product.delete', $product->id)}}" method="post">
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
                                    <td>{{ $product->id }} </td>
                                </tr>

                                <tr>
                                    <td> title</td>
                                    <td> {{ $product->title }}</td>
                                </tr>

                                <tr>
                                    <td> price</td>
                                    <td> {{ $product->price }}</td>
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
