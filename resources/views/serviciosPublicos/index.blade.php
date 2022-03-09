@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-1 col-md-2 col-lg-1"></div>
        <div class="col-12 col-sm-10 col-md-8 col-lg-10 table-responsive border shadow-lg">
            <table class="table table-hover text-center">
                <thead>
                    <tr style="font-size: 12px;">
                        <td>ID</td>
                        <td>Numero Contrato</td>
                        <td>Numero Factura</td>
                        <td>Referencia de Pago</td>
                        <td>Fecha de Pago</td>
                        <td>Fecha de Vencimiento</td>
                        <td>Fecha Pago Real</td>
                        <td>PDF</td>
                        <td>Valor Energia</td>
                        <td>Valor Acueducto</td>
                        <td>Valor Gas</td>
                        <td>Otros</td>
                        <td>Fecha Registro</td>
                        <td>Fecha Modificacion</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Facturas as $Factura)
                    <tr>
                        <td>{{ $Factura->id }}</td>
                        <td>{{ $Factura->numeroContrato }}</td>
                        <td>{{ $Factura->numeroFactura }}</td>
                        <td>{{ $Factura->referenciaPago }}</td>
                        <td>{{ $Factura->fechaPago }}</td>
                        <td>{{ $Factura->fechaVencimiento }}</td>
                        <td>{{ $Factura->fechaPagoReal }}</td>
                        <td><a href="{{ $Factura->pdf }}" target="__blank">PDF</a></td>
                        <td>{{ $Factura->energia }}</td>
                        <td>{{ $Factura->acueducto }}</td>
                        <td>{{ $Factura->gas }}</td>
                        <td>{{ $Factura->otros }}</td>
                        <td>{{ $Factura->created_at }}</td>
                        <td>{{ $Factura->updated_at }}</td>
                        <td>
                            <a href="{{ url('/serviciosPublicos/'.$Factura->id.'/edit') }}" class="btn btn-primary">
                                Editar
                            </a>
                            <form action="{{ url('/serviciosPublicos/'.$Factura->id) }}" method="post">
                                @csrf
                                {{ method_field('DELETE') }}
                                <input type="submit" class="btn btn-danger" onclick="return confirm('Seguro quieres Borrar?')" value="Borrar">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-12 col-sm-1 col-md-2 col-lg-1"></div>
    </div>
</div>
@endsection