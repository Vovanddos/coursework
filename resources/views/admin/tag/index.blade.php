@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Список тегов</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('website') }}">На сайт</a></li>
                    <li class="breadcrumb-item active">Список тегов</li>
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
                            <h3 class="card-title">Список тегов</h3>
                            <a href="{{ route('tag.create') }}" class="btn btn-primary">Создать тег</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Название</th>
                                    <th>Описание</th>
                                    <th style="width: 40px">Действия</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($tags->count())
                                @foreach ($tags as $tag)
                                    <tr>
                                        <td>{{ $tag->id }}</td>
                                        <td>{{ $tag->name }}</td>
                                        <td>{{ $tag->description }}</td>
                                        <td class="d-flex">
                                            <a href="{{ route('tag.edit', [$tag->id]) }}" class="btn btn-sm btn-primary mr-1"> <i class="fas fa-edit"></i> </a>
                                            <form action="{{ route('tag.destroy', [$tag->id]) }}" class="mr-1" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i> </button>
                                            </form>
                                            {{-- <a href="{{ route('tag.show', [$tag->id]) }}" class="btn btn-sm btn-success mr-1"> <i class="fas fa-eye"></i> </a> --}}
                                        </td>
                                    </tr>
                                @endforeach
                                @else
                                    <tr>
                                        <td colspan="4">
                                            <h5 class="text-center">Пока что нет тегов.</h5>
                                        </td>
                                    </tr>

                                @endif
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer d-flex justify-content-center">
                        {{ $tags->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
