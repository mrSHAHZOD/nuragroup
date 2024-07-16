@extends('admin.layouts.layout')

@section('abouts')
    active
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>{{$haqimizda}}</h2> <br>
            </div>
            <div class="pull-right">
                <a class="btn btn-secondary" href="{{ route('abouts.create') }}">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cloud-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
                <path fill-rule="evenodd" d="M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5z"/>
                </svg></a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th> № </th>
            <th>{{$menu['content_uz']}}</th}>
            <th>{{$menu['content_ru']}}</th>
            <th>{{$menu['content_eng']}}</th>
            <th> {{$menu['image']}} </th>
            <th>{{$menu['date']}}</th>
            <th>Action</th>
        </tr>
        @foreach ($about as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->content_uzs }}</td>
            <td>{{ $product->content_rus }}</td>
            <td>{{ $product->content_ens }}</td>
            <td><img style="width:100px; height:auto" src="{{ URL::to($product->img) }}"></td>
            <td>{{ $product->created_at }}</td>
            <td>
                <form action="{{ route('abouts.destroy',$product->id) }}" method="POST">

                    <a class="btn btn-primary" href="{{ route('abouts.edit',$product->id) }}"><ion-icon name="create-outline"></ion-icon></a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger"><ion-icon name="trash-outline"></ion-icon></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{$about->links()}}


@endsection
