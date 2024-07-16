@extends('admin.layouts.layout')

@section('news')
    active
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">

        <div class="pull-left">
            <h2>{{$yangiliklar}}</h2><br>
        </div>

        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('news.index') }}"> {{$menu['qaytish']}} </a>
        </div>

    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form  action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{$menu['title_uz']}} : </strong>
                <input type="text" name="title_uzs" class="form-control" placeholder="{{$menu['title_uz']}}">
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{$menu['title_ru']}} :</strong>
                <input type="text" name="title_rus" class="form-control" placeholder="{{$menu['title_ru']}}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{$menu['title_eng']}} :</strong>
                <input type="text" name="title_ens" class="form-control" placeholder="{{$menu['title_eng']}}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{$menu['content_uz']}} :</strong>
                <input type="text" name="content_uzs" class="form-control" placeholder="{{$menu['content_uz']}}">
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{$menu['content_ru']}} :</strong>
                <input type="text" name="content_rus" class="form-control" placeholder="{{$menu['content_ru']}}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{$menu['content_eng']}} :</strong>
                <input type="text" name="content_ens" class="form-control" placeholder="{{$menu['content_eng']}}">
            </div>
        </div><br>

        <div class="col-xs-12 mt-5 col-sm-12 col-md-12 uzb-intput">
            <label for="mytextarea">O'zb</label>
            <textarea id="textarea" name="body_uzs">{{ old('body_uzs') }}</textarea>
        </div>

        <div class="col-xs-12 mt-5 col-sm-12 col-md-12 rus-intput">
            <label for="mytextarea">Rus</label>
            <textarea id="textarea1" name="body_rus"></textarea>
        </div><br>

        <div class="col-xs-12 mt-5 col-sm-12 col-md-12 eng-intput">
            <label for="mytextarea">Eng</label>
            <textarea id="mytextarea2" name="body_ens"></textarea>
        </div><br>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{$menu['image']}} :</strong>
                <input type="file" class="form-control" style="height:150px" name="img" >
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">{{$menu['qoshish']}}</button>
        </div>

    </div>
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
      tinymce.init({
        selector: '#mytextarea'
      });
      tinymce.init({
        selector: '#mytextarea1'
      });
      tinymce.init({
        selector: '#mytextarea2'
      });
    </script>
</form>
@endsection
