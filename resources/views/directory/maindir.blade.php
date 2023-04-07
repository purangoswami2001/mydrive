
@extends('layout.main')
@section('main-section')
<div class="dir">
  <div class="sidebar">
@include('layout.sidebar')
  </div>
  <div class="main tab-le">
    @yield('sub-section')
   
    </div>
  </div>

@endsection

