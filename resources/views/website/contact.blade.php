@extends('layouts.website')
@section('content')
    <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('{{ asset('website') }}/images/img_4.jpg');">
      <div class="container">
        <div class="row same-height justify-content-center">
          <div class="col-md-12 col-lg-10">
            <div class="post-entry text-center">
              <h1 class="">Контакты</h1>
              <p class="lead mb-4 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, adipisci?</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mb-5">
            <form action="{{ route('website.contact') }}" method="post" class="p-5 bg-white">
              @csrf
              @include('includes.errors')
              @if(Session::has('message-send'))
                <div class="alert alert-success">{{ Session::get('message-send') }}</div>
              @endif
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="fname">Имя</label>
                  <input type="text" id="name" name="name" class="form-control" placeholder="Имя">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label>
                  <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="subject">Тема письма</label>
                  <input type="subject" id="subject" name="subject" class="form-control" placeholder="Тема письма">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Сообщение</label>
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Сообщение"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Отправить сообщение" class="btn btn-primary py-2 px-4 text-white">
                </div>
              </div>


            </form>
          </div>
          <div class="col-md-5">

            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Адрес</p>
              <p class="mb-4">{{ $setting->address }}</p>

              <p class="mb-0 font-weight-bold">Телефон</p>
              <p class="mb-4"><a href="#">{{ $setting->phone }}</a></p>

              <p class="mb-0 font-weight-bold">Email</p>
              <p class="mb-0"><a href="#">{{ $setting->email }}</a></p>

            </div>

          </div>
        </div>
      </div>
    </div>
@endsection
