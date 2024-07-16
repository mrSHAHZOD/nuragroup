@extends('admin.layouts.layout')

@section('abouts')
    active
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">

        <div class="pull-left">
            <h2>{{$menu['qoshish']}}</h2><br>
        </div>

        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('abouts.index') }}"> {{$menu['qaytish']}}</a>
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


<form  action="{{ route('abouts.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{$menu['content_uz']}} : </strong>
                <input type="text" name="content_uzs" class="form-control" placeholder="{{$menu['content_uz']}}">
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{$menu['content_ru']}} :</strong>
                <input type="text" name="content_rus" class="form-control" placeholder="{{$menu['content_uz']}}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{$menu['content_eng']}} :</strong>
                <input type="text" name="content_ens" class="form-control" placeholder="{{$menu['content_eng']}}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{$menu['image']}}:</strong>
                <input type="file" class="form-control" style="height:150px" name="img" >
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">{{$menu['qoshish']}}</button>
        </div>

    </div>

</form>
@endsection
