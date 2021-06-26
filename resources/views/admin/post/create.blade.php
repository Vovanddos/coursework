@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Создать пост</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('website') }}">На сайт</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('post.index') }}">Список постов</a></li>
                    <li class="breadcrumb-item active">Создать пост</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Создать пост</h3>
                            <a href="{{ route('post.index') }}" class="btn btn-primary">К списку постов</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-12 col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                                <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        @include('includes.errors')
                                        <div class="form-group">
                                            <label for="title">Название</label>
                                            <input type="name" name="title" value="{{ old('title') }}" class="form-control" placeholder="Введите название">
                                        </div>
                                        <div class="form-group">
                                            <label for="category">Категория</label>

                                            <select name="category" id="category" class="form-control">
                                                <option value="" style="display: none" selected>Выбрать категорию</option>
                                                @foreach($categories as $c)
                                                <option value="{{ $c->id }}"> {{ $c->name }} </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="image">Изображение</label>
                                            <div class="custom-file">
                                                <input type="file" name="image" class="custom-file-input" id="image">
                                                <label class="custom-file-label" for="image">Выбрать файл</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Выбрать теги</label>
                                            <div class=" d-flex flex-wrap">
                                                @foreach($tags as $tag)
                                                <div class="custom-control custom-checkbox" style="margin-right: 20px">
                                                    <input class="custom-control-input" name="tags[]" type="checkbox" id="tag{{ $tag->id}}" value="{{ $tag->id }}">
                                                    <label for="tag{{ $tag->id}}" class="custom-control-label">{{ $tag->name }}</label>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Описание</label>
                                            <textarea name="description" id="description" rows="4" class="form-control"
                                                placeholder="Enter description">{{ old('description') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-lg btn-primary">Создать пост</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('/admin/css/summernote-bs4.min.css') }}">
@endsection

@section('script')
    <script src="{{ asset('/admin/js/summernote-bs4.min.js') }}"></script>
    <script>
        $('#description').summernote({
            placeholder: 'Начните писать...',
            tabsize: 2,
            height: 300
        });
    </script>
@endsection