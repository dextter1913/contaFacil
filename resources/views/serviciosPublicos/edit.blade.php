@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row text-center">
        <h2>Editar Factura</h2>
    </div>
    <div class="row">
        <form action="{{ url('/serviciosPublicos/'.$serviciosPublicos->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            {{ method_field('PATCH') }}
            <div class="row m-3 border p-3 shadow">
                @include('serviciosPublicos.form')
                <div class="form-group row p-0 m-0">
                    <div class="col-2">
                        <button class="btn btn-outline-success m-3" type="submit">Ok</button>
                    </div>
                    <div class="col-10">
                        <label id="_formEditMensaje"></label>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
@endsection