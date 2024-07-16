@extends('admin.layouts.layout')

@section('teams')
    active
@endsection
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>{{$jamoa}}h</h2><br>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('teams.index') }}"> {{$menu['qaytish']}}</a>
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
  
    <form action="{{ route('teams.update',$team[0]->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
   
         <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{$menu['name_uz']}} :</strong>
                    <input type="text" name="name_uzs" value="{{ $team[0]->name_uzs }}" class="form-control" placeholder="{{$menu['name_uz']}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{$menu['name_ru']}}:</strong>
                    <input type="text" name="name_rus" value="{{ $team[0]->name_rus }}" class="form-control" placeholder="{{$menu['name_ru']}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{$menu['name_eng']}}:</strong>
                    <input type="text" name="name_ens" value="{{ $team[0]->name_ens }}" class="form-control" placeholder="{{$menu['name_eng']}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{$menu['info_uz']}} :</strong>
                    <input type="text" name="info_uzs" value="{{ $team[0]->info_uzs }}" class="form-control" placeholder="{{$menu['info_ru']}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{$menu['info_ru']}} :</strong>
                    <input type="text" name="info_rus" value="{{ $team[0]->info_rus }}" class="form-control" placeholder="{{$menu['info_ru']}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{$menu['info_eng']}} :</strong>
                    <input type="text" name="info_ens" value="{{ $team[0]->info_ens }}" class="form-control" placeholder="{{$menu['info_eng']}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong> {{$menu['image']}} : </strong>
                    <input type="file" name="img" class="" value="{{$team[0]->img}}">
                    <img style="width:250px; height:auto" src="{{ $team[0]->img }}">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">{{$menu['ozgartirish']}}</button>
            </div>

        </div>
   
    </form>
@endsection