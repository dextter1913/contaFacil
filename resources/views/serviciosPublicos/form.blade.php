<div class="form-group row">
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
        <label for="numeroContrato">Numero de Contrato:</label>
        <input type="text" class="form-control" value="{{ isset($serviciosPublicos->numeroContrato) ? $serviciosPublicos->numeroContrato : '' }}" name="numeroContrato" id="numeroContrato">
    </div>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <label for="numeroFactura">Numero de Factura:</label>
        <input type="text" class="form-control" value="{{ isset($serviciosPublicos->numeroFactura) ? $serviciosPublicos->numeroFactura: '' }}" name="numeroFactura" id="numeroFactura"><br>
    </div>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <label for="referenciaPago">Referencia de Pago:</label>
        <input type="text" class="form-control" value="{{ isset($serviciosPublicos->referenciaPago) ? $serviciosPublicos->referenciaPago: '' }}" name="referenciaPago" id="referenciaPago"><br>
    </div>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">

        <label for="fechaPago">Fecha Limite de Pago:</label>
        <input type="date" class="form-control" value="{{ isset($serviciosPublicos->fechaPago) ? $serviciosPublicos->fechaPago: '' }}" name="fechaPago" id="fechaPago"><br>
    </div>
</div>
<div class="form-group row">
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <label for="fechaVencimiento">Fecha de vencimiento de la Factura:</label>
        <input type="date" class="form-control" value="{{ isset($serviciosPublicos->fechaVencimiento) ? $serviciosPublicos->fechaVencimiento: '' }}" name="fechaVencimiento" id="fechaVencimiento">
    </div>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <label for="fechaPagoReal">Fecha en la cual Realizo el pago:</label>
        <input type="date" class="form-control" value="{{ isset($serviciosPublicos->fechaPagoReal) ? $serviciosPublicos->fechaPagoReal: '' }}" name="fechaPagoReal" id="fechaPagoReal">
    </div>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <label for="pdf">PDF de la factura pagada con su recibo:</label>
        <input type="file" class="form-control" name="pdf" id="pdf">
    </div>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <label for="energia">Valor Energia:</label>
        <input type="text" class="form-control" value="{{ isset($serviciosPublicos->energia) ? $serviciosPublicos->energia: '' }}" name="energia" id="energia">
    </div>
</div>
<div class="form-group row">
    <div class="col-12 col-sm-6 col-md-3 col-lg-3">
        <label for="acueducto">Valor Acueducto:</label>
        <input type="text" class="form-control" value="{{ isset($serviciosPublicos->acueducto) ? $serviciosPublicos->acueducto: '' }}" name="acueducto" id="acueducto">
    </div>
    <div class="col-12 col-sm-6 col-md-3 col-lg-3">
        <label for="gas">valor Gas natural:</label>
        <input type="text" class="form-control" value="{{ isset($serviciosPublicos->gas) ? $serviciosPublicos->gas: '' }}" name="gas" id="gas">
    </div>
    <div class="col-12 col-sm-6 col-md-3 col-lg-3">
        <label for="otros">otros cobros:</label>
        <input type="text" class="form-control" value="{{ isset($serviciosPublicos->otros) ? $serviciosPublicos->otros: '' }}" name="otros" id="otros">
    </div>
</div>