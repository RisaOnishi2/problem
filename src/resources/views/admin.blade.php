@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('logout_link')
  <form class="form" action="/logout" method="post">
    @csrf
    <button class="logout__button">logout</button>
  </form>
@endsection

@section('content')
@endsection