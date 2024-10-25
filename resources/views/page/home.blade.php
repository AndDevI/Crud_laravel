@extends('main')

@section('content')
    @if (Session::has('sucess'))
        <div>
            {{ Session::get('success') }}
        </div>
    @endif

@endsection