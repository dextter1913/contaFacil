<label for="numeroContrato">Numero de Contrato:</label>
<input type="text" class="form-control" value="{{ isset($serviciosPublicos->numeroContrato) ? $serviciosPublicos->numeroContrato : '' }}" name="numeroContrato" id="numeroContrato"><br>
<label for="numeroFactura">Numero de Factura:</label>
<input type="text" class="form-control" value="{{ isset($serviciosPublicos->numeroFactura) ? $serviciosPublicos->numeroFactura: '' }}" name="numeroFactura" id="numeroFactura"><br>
<label for="referenciaPago">Referencia de Pago:</label>
<input type="text" class="form-control" value="{{ isset($serviciosPublicos->referenciaPago) ? $serviciosPublicos->referenciaPago: '' }}" name="referenciaPago" id="referenciaPago"><br>
<label for="fechaPago">Fecha Limite de Pago:</label>
<input type="date" class="form-control" value="{{ isset($serviciosPublicos->fechaPago) ? $serviciosPublicos->fechaPago: '' }}" name="fechaPago" id="fechaPago"><br>
<label for="fechaVencimiento">Fecha de vencimiento de la Factura:</label>
<input type="date" class="form-control" value="{{ isset($serviciosPublicos->fechaVencimiento) ? $serviciosPublicos->fechaVencimiento: '' }}" name="fechaVencimiento" id="fechaVencimiento"><br>
<label for="fechaPagoReal">Fecha en la cual Realizo el pago:</label>
<input type="date" class="form-control" value="{{ isset($serviciosPublicos->fechaPagoReal) ? $serviciosPublicos->fechaPagoReal: '' }}" name="fechaPagoReal" id="fechaPagoReal"><br>
<label for="pdf">PDF de la factura pagada con su recibo:</label>
<input type="file" class="form-control" name="pdf" id="pdf"><br>
<label for="energia">Valor Energia:</label>
<input type="text" class="form-control" value="{{ isset($serviciosPublicos->energia) ? $serviciosPublicos->energia: '' }}" name="energia" id="energia"><br>
<label for="acueducto">Valor Acueducto:</label>
<input type="text" class="form-control" value="{{ isset($serviciosPublicos->acueducto) ? $serviciosPublicos->acueducto: '' }}" name="acueducto" id="acueducto"><br>
<label for="gas">valor Gas natural:</label>
<input type="text" class="form-control" value="{{ isset($serviciosPublicos->gas) ? $serviciosPublicos->gas: '' }}" name="gas" id="gas"><br>
<label for="otros">otros cobros:</label>
<input type="text" class="form-control" value="{{ isset($serviciosPublicos->otros) ? $serviciosPublicos->otros: '' }}" name="otros" id="otros"><br>
<input type="submit" value="Ok" class="btn btn-outline-success m-3">