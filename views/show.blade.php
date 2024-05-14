@extends('index')

@section('content')
    @include('component')
    <h3 class="content">Ini adalah bagian dari konten</h3>
    <button class="click">click me!</button>
    <p class="notif" style="display: none">Button clicked</p>
@endsection
