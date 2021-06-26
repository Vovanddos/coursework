@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Редактировать категорию</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('website') }}">На сайт</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('category.index') }}">Список категорий</a></li>
                    <li class="breadcrumb-item active">Редактировать категорию</li>
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
                            <h3 class="card-title">Редактировать категорию - {{ $category->name }}</h3>
                            <a href="{{ route('category.index') }}" class="btn btn-primary">К списку категорий</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                                <form action="{{ route('category.update', [$category->id]) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body">
                                        @include('includes.errors')
                                        <div class="form-group">
                                            <label for="name">Имя категории</label>
                                            <input type="name" name="name" class="form-control" value="{{ $category->name }}" placeholder="Enter name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Описание</label>
                                            <textarea name="description" id="description" rows="4" class="form-control"
                                                placeholder="Enter description"> {{ $category->description }} </textarea>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-lg btn-primary">Редактировать категорию</button>
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
