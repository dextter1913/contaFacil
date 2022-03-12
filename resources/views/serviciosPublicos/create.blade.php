@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-1 col-md-2 col-lg-3"></div>
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 border">
            <form action="{{ url('/serviciosPublicos') }}" method="post" enctype="multipart/form-data">
                @csrf
                @include('serviciosPublicos.form')
                <input type="submit" value="Ok" class="btn btn-outline-success m-3">
            </form>
        </div>
        <div class="col-12 col-sm-1 col-md-2 col-lg-3"></div>
    </div>
</div>
@endsection