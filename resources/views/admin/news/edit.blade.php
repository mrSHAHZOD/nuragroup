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
                <a class="btn btn-primary" href="{{ route('news.index') }}"> {{$menu['qaytish']}}</a>
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
  
    <form action="{{ route('news.update',$news[0]->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
   
         <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{$menu['title_uz']}} :</strong>
                    <input type="text" name="title_uzs" value="{{ $news[0]->title_uzs }}" class="form-control" placeholder="{{$menu['title_uz']}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{$menu['title_ru']}} :</strong>
                    <input type="text" name="title_rus" value="{{ $news[0]->title_rus }}" class="form-control" placeholder="{{$menu['title_ru']}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{$menu['title_ru']}} :</strong>
                    <input type="text" name="title_ens" value="{{ $news[0]->title_ens }}" class="form-control" placeholder="{{$menu['title_eng']}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{$menu['content_uz']}} :</strong>
                    <input type="text" name="content_uzs" value="{{ $news[0]->content_uzs }}" class="form-control" placeholder="{{$menu['content_uz']}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{$menu['content_ru']}} :</strong>
                    <input type="text" name="content_rus" value="{{ $news[0]->content_rus }}" class="form-control" placeholder="{{$menu['content_ru']}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{$menu['content_eng']}} :</strong>
                    <input type="text" name="content_ens" value="{{ $news[0]->content_ens }}" class="form-control" placeholder="{{$menu['content_eng']}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 uzb-intput">
            <label for="mytextarea">O'zbekcha paragraph</label>
            <textarea id="mytextarea" name="body_uzs" >{{ old('body_uzs') ? old('body_uzs') : $news->body_uzs }}</textarea>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 rus-intput">
                <label for="mytextarea">Ruscha paragraph</label>
                <textarea id="mytextarea1" name="body_rus" value="{{ $news[0]->body_rus }}">{{ old('body_rus') ? old('body_rus') : $news->body_rus }}</textarea>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 eng-intput">
                <label for="mytextarea">Inglizcha paragraph</label>
                <textarea id="mytextarea2" name="body_ens" value="{{ $news[0]->body_ens }}">{{ old('body_ens') ? old('body_ens') : $news->body_ens }}</textarea>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong> {{$menu['image']}} : </strong>
                    <input type="file" name="img" class="" value="{{$news[0]->img}}">
                    <img style="width:250px; height:auto" src="{{ $news[0]->img }}">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">{{$menu['ozgartirish']}}</button>
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