<div class="container">
    <div class="col-12 col-sm-1 col-md-2 col-lg-3"></div>
    <div class="col-12 col-sm-1 col-md-2 col-lg-3">
        <form action="{{ url('/serviciosPublicos') }}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="numeroContrato">Numero de Contrato:</label>
            <input type="text" class="form-control" name="numeroContrato" id="numeroContrato"><br>
            <label for="numeroFactura">Numero de Factura:</label>
            <input type="text" class="form-control" name="numeroFactura" id="numeroFactura"><br>
            <label for="referenciaPago">Referencia de Pago:</label>
            <input type="text" class="form-control" name="referenciaPago" id="referenciaPago"><br>
            <label for="fechaPago">Fecha Limite de Pago:</label>
            <input type="date" class="form-control" name="fechaPago" id="fechaPago"><br>
            <label for="fechaVencimiento">Fecha de vencimiento de la Factura:</label>
            <input type="date" class="form-control" name="fechaVencimiento" id="fechaVencimiento"><br>
            <label for="fechaPagoReal">Fecha en la cual Realizo el pago:</label>
            <input type="date" class="form-control" name="fechaPagoReal" id="fechaPagoReal"><br>
            <label for="pdf">PDF de la factura pagada con su recibo:</label>
            <input type="file" class="form-control" name="pdf" id="pdf"><br>
            <label for="energia">Valor Energia:</label>
            <input type="text" class="form-control" name="energia" id="energia"><br>
            <label for="acueducto">Valor Acueducto:</label>
            <input type="text" class="form-control" name="acueducto" id="acueducto"><br>
            <label for="gas">valor Gas natural:</label>
            <input type="text" class="form-control" name="gas" id="gas"><br>
            <label for="otros">otros cobros:</label>
            <input type="text" class="form-control" name="otros" id="otros"><br>
            <input type="submit" value="Enviar">
        </form>
    </div>
    <div class="col-12 col-sm-1 col-md-2 col-lg-3"></div>
</div>