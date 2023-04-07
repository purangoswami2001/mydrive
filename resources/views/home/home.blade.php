@extends('layout.main')
@push('title')
    <title>| Home</title>    
@endpush
@section('main-section')
<h2 class="text-center">
   Home Page
    @if(Session::has('success'))
<div class="alert alert-success">{{Session::get('success')}}</div>
@endif
</h2>   
@endsection
