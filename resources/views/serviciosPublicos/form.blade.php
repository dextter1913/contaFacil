<label for="numeroContrato">Numero de Contrato:</label>
<input type="text" class="form-control" value="{{ $serviciosPublicos->numeroContrato }}" name="numeroContrato" id="numeroContrato"><br>
<label for="numeroFactura">Numero de Factura:</label>
<input type="text" class="form-control" value="{{ $serviciosPublicos->numeroFactura }}" name="numeroFactura" id="numeroFactura"><br>
<label for="referenciaPago">Referencia de Pago:</label>
<input type="text" class="form-control" value="{{ $serviciosPublicos->referenciaPago }}" name="referenciaPago" id="referenciaPago"><br>
<label for="fechaPago">Fecha Limite de Pago:</label>
<input type="date" class="form-control" value="{{ $serviciosPublicos->fechaPago }}" name="fechaPago" id="fechaPago"><br>
<label for="fechaVencimiento">Fecha de vencimiento de la Factura:</label>
<input type="date" class="form-control" value="{{ $serviciosPublicos->fechaVencimiento }}" name="fechaVencimiento" id="fechaVencimiento"><br>
<label for="fechaPagoReal">Fecha en la cual Realizo el pago:</label>
<input type="date" class="form-control" value="{{ $serviciosPublicos->fechaPagoReal }}" name="fechaPagoReal" id="fechaPagoReal"><br>
<label for="pdf">PDF de la factura pagada con su recibo:</label>
<input type="file" class="form-control" name="pdf" id="pdf"><br>
<label for="energia">Valor Energia:</label>
<input type="text" class="form-control" value="{{ $serviciosPublicos->energia }}" name="energia" id="energia"><br>
<label for="acueducto">Valor Acueducto:</label>
<input type="text" class="form-control" value="{{ $serviciosPublicos->acueducto }}" name="acueducto" id="acueducto"><br>
<label for="gas">valor Gas natural:</label>
<input type="text" class="form-control" value="{{ $serviciosPublicos->gas }}" name="gas" id="gas"><br>
<label for="otros">otros cobros:</label>
<input type="text" class="form-control" value="{{ $serviciosPublicos->otros }}" name="otros" id="otros"><br>
<input type="submit" value="Enviar">