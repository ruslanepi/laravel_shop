@extends('layouts.main')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">add product</h1>
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
                <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="title">
                    </div>
                    @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="form-group">
                        <input type="text" name="description" class="form-control" placeholder="description">
                    </div>
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="form-group">
                        <textarea type="text" name="content" class="form-control" placeholder="content"></textarea>
                    </div>
                    @error('content')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="form-group">
                        <input type="text" name="price" class="form-control" placeholder="price ">
                    </div>
                    @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="form-group">
                        <input type="text" name="count" class="form-control" placeholder="count">
                    </div>
                    @error('count')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror


                    <div class="form-group">
                        <div class="input-group">
                            <div class="custom-file">
                                <input name="preview_image" type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>
                    @error('preview_image')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="form-group">
                        <select name="category_id" class="form-control">
                            <option selected disabled>Choose category</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('category_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="form-group">
                        <select name="tags[]" class="tags" multiple="multiple" data-placeholder="Select a tags" style="width: 100%;">
                            @foreach($tags as $tag)
                                <option value="{{$tag->id}}">{{ $tag->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('tags[]')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="form-group">
                        <select name="colors[]" class="colors" multiple="multiple" data-placeholder="Select a colors" style="width: 100%;">
                            @foreach($colors as $color)
                                <option value="{{$color->id}}">{{ $color->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('colors[]')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="add">
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
