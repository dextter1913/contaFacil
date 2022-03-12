@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row text-center">
        <h2>Crear Factura</h2>
    </div>
    <!-- <div class="row"> -->
    <!-- <div class="col-12 col-sm-1 col-md-2 col-lg-3"></div>
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 border"> -->
    <!--<form action="{{ url('/serviciosPublicos') }}" method="post" enctype="multipart/form-data">-->
        <div class="row m-3 border p-3 shadow">
            <form id="_formCreate" enctype="multipart/form-data">
                @include('serviciosPublicos.form')
                <div class="form-group row">
                    <div class="col-2">
                        <button class="btn btn-outline-success m-3" type="submit">Ok</button>
                    </div>
                    <div class="col-10">
                        <label id="_formCreateMensaje"></label>
                    </div>
                </div>
            </form>
        </div>
    <!-- </div>
        <div class="col-12 col-sm-1 col-md-2 col-lg-3"></div>
    </div> -->
    <!-- </div> -->
    @endsection