@extends('layouts.base')
@section('body')
    <x-navbar/>
    <div class="bg-gray-200 w-full h-full">
        @yield('main')
    </div>
@endsection