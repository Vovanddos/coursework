@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Сообщение</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('website') }}">На сайт</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('contact.index') }}">Список сообщений</a></li>
                        <li class="breadcrumb-item active">Сообщение</li>
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
                            <h3 class="card-title">Сообщение</h3>
                            <a href="{{ route('contact.index') }}" class="btn btn-primary">К списку сообщений</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-pimary">
                            <tbody>
                                <tr>
                                    <th style="width: 200px">Имя</th>
                                    <td>{{ $message->name }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 200px">Email</th>
                                    <td>{{ $message->email }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 200px">Заголовок</th>
                                    <td>{{ $message->subject }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 200px">Сообщение</th>
                                    <td>{{ $message->message }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
