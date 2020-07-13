<nav class="blue-grey lighten-1" style="padding: 0 1em;">
    <div class="nav-wrapper">
        <div class="col s4" style="display: inline-block">
            <a href="#!" class="breadcrumb">Solicitud de Abastecimiento</a>
        </div>
		<!--
        <ul id="nav-mobile" class="right">
            <div class="input-field col s6 left-align" style="margin: 0px; font-size: 12px;">
                <div>
                    <b>
                        Total Registros: 
                        &nbsp;&nbsp;&nbsp;
                        <span id="total" class="btn blue-grey darken-2"><?php echo count($tarifas);?></span>
                    </b>
                </div>
            </div>
        </ul>
		-->
    </div>
</nav>


<div class="section container center">
    <form action="<?= base_url() ?>solicitudabastecimiento/crear" method="post">
        <div class="row">
            <div class="input-field col s12 m6 l4">
				<!--
				<input id="fecha" type="text" name="fecha" class="validate">
				-->
				<div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
				<input class="validate" size="16" type="text" id="fecha" name="fecha"  readonly>
				<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
				</div>				
				<label class="active" for="fecha" >Fecha:</label>
            </div>
			
            <div class="input-field col s12 m6 l4">
				<div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
				<input class="validate" size="16" type="text" id="numero" name="numero" readonly>
				<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
				</div>				
				<label class="active" for="numero" >Numero:</label>
            </div>
						
        </div>		
		
		 <!---<p class="h4 mb-4 text-center  border-dark">SOLICITUD DE ABASTECIMIENTO</p>-->
		 
		 
		<div class="form-group">
			<p class="text-center bgcolor">EMPRESA</p>
		</div>
		
		
		
		<!--<p>-->
			
		<!--</p>-->
		
		<!--
		<p>
			<label>
			<input class="with-gap" name="yourchoice" type="radio" />
			<span>No</span>
			</label>
		</p>
		-->
		
		
		
		<div class="row">
		
		<div class="input-field col s12 m6 l3">
			<label>
			<input class="with-gap" name="empresa" type="radio" id="empresa1" value="1" />
			<span>Bigote</span>
			</label>
		</div>
		
        <div class="input-field col s12 m6 l3">
			<label>
				<input class="with-gap" name="empresa" type="radio" id="empresa2" value="2" />
				<span>Lopud</span>
			</label>
		</div>
		
		
		<div class="input-field col s12 m6 l3">
			<label>
			<input class="with-gap" name="empresa" type="radio" id="empresa1" value="1" />
			<span>AQP</span>
			</label>
		</div>
		
        <div class="input-field col s12 m6 l3">
			<label>
				<input class="with-gap" name="empresa" type="radio" id="empresa2" value="2" />
				<span>Lopud</span>
			</label>
		</div>
		
		
		<input type="hidden" name="empresaid" id="empresaid" />
		</div>
		
		
		<div class="form-group">
			<p class="text-center bgcolor">NOMBRE </p>
		</div>
		
		
		<div class="row">
		
		 <div class="input-field col s12 m6 l3">
			<label>
			<input class="with-gap" name="empresa" type="radio" id="empresa1" value="1" />
			<span>Obras</span>
			</label>
		</div>
		
        <div class="input-field col s12 m6 l3">
			<label>
				<input class="with-gap" name="empresa" type="radio" id="empresa2" value="2" />
				<span>Abastecimiento</span>
			</label>
		</div>
		<!--<input type="hidden" name="empresaid" id="empresaid" />-->
		</div>
		
		
		
		
		
		
		<div class="form-group">
			<p class="text-center bgcolor">DEPARTAMENTO SOLICITANTE</p>
		</div>
		
		
		<div class="row">
		<div class="input-field col s12 m6 l3">
		
		<label>
				<input class="with-gap" name="gg" type="checkbox" id="gg" />
				<span>G.G.</span>
		</label>

	<!--
			<input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">G.G.</label>
			-->
		</div>
		
        <div class="input-field col s12 m6 l3">
			<!--
			<input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">Administracion</label>
			-->
			<label>
				<input class="with-gap" name="administracion" type="checkbox" id="administracion" />
				<span>Administracion</span>
		    </label>
        </div>
	
		
		
		<div class="input-field col s12 m6 l3">
		<!--
			<input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">Sistemas</label>
			-->
			
			<label>
				<input class="with-gap" name="sistemas" type="checkbox" id="sistemas" />
				<span>Sistemas</span>
		    </label>
        </div>
		
		<div class="input-field col s12 m6 l3">
			<label>
				<input class="with-gap" name="monitoreo" type="checkbox" id="monitoreo" />
				<span>Monitoreo</span>
		    </label>
		
		<!--
			<input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">Monitoreo</label>
        -->
		</div>
		
		<div class="input-field col s12 m6 l3">
			<label>
				<input class="with-gap" name="operarios" type="checkbox" id="operarios" />
				<span>Operarios</span>
		    </label>
		<!--
			 <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">Operarios</label>
        -->
		</div>
		
		<div class="input-field col s12 m6 l3">
			<label>
				<input class="with-gap" name="galmacen" type="checkbox" id="galmacen" />
				<span>G. Almacen</span>
		    </label>
			<!--
			<input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">G. Almacen</label>
			-->
		</div>
		
		<div class="input-field col s12 m6 l3">
			<label>
				<input class="with-gap" name="operaciones" type="checkbox" id="operaciones" />
				<span>Operaciones</span>
		    </label>
		<!--
			<input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">Operaciones</label>
        -->
		</div>
		
		<div class="input-field col s12 m6 l3">
			<!--
			<input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">Seguridad</label>
			-->
			<label>
				<input class="with-gap" name="seguridad" type="checkbox" id="seguridad" />
				<span>Seguridad</span>
		    </label>
		</div>
		
		<div class="input-field col s12 m6 l3">
			<!--
		    <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">RRHH</label>
			-->
			<label>
				<input class="with-gap" name="rrhh" type="checkbox" id="rrhh" />
				<span>RRHH</span>
		    </label>
        </div>
		
		<div class="input-field col s12 m6 l3">
		 <label>
				<input class="with-gap" name="otros" type="checkbox" id="otros" />
				<span>Otros</span>
				<input type="text" class="" id="otrosin" name="otrosin">
		 </label>
        </div>
		</div>	

		<input type="hidden" name="datogg" id="datogg" value="" />
		<input type="hidden" name="datoadmi" id="datoadmi" value="" />
		<input type="hidden" name="datosis" id="datosis" value="" />
		<input type="hidden" name="datomon" id="datomon" value="" />
		<input type="hidden" name="datooper" id="datooper" value="" />
		<input type="hidden" name="datogal" id="datogal" value="" />
		<input type="hidden" name="datoopera" id="datoopera" value="" />
		<input type="hidden" name="datosegu" id="datosegu" value=""/>
		<input type="hidden" name="datorrhh" id="datorrhh" value=""/>
		<input type="hidden" name="datootr" id="datootr" value="" />
		
		<br>
		<br>
		<br>		
		
		<div class="form-group"> 
			<p class="text-center bgcolor">DETALLE</p>
		</div>
		
		<div class="form-group">
            <div class="col-md-12">
            <button class="btn btn-primary" type="button" id="btnnuevo" > <span class="glyphicon glyphicon-plus"></span> Agregar</button>
            <br>
            <br>
            <table id="tabledetalle" class="table table-striped table-bordered nowrap" > <!--style="width:100%"-->
            <tr>
            <th>Cant.</th>
            <th>Un.</th>
            <th>Stock Almacen </th>
            <th>Area/Responsable</th>
            <th>VºBº</th>
            <th>Descripcion</th>
            <th>Proveedor sugerido</th>
            <th>Precio</th>
            <th></th>
            </tr>
            </thead>
            </table>
			
           </div>
         </div>
		 <!--
         <div class="input-field col s6 m6 l3">
         </div>
         <div class="input-field col s3">
         </div>
		-->
		
		<br>
		<br>
		<br>
		<!--
		<div>
			<div id="total">Total: ___ </div>
		</div>
		-->
		
		 <div class="input-field col s6 center-align" style="margin: 0px; font-size: 12px;">
                <div>
                    <b>
                        Total:
                        &nbsp;&nbsp;&nbsp;
                        <span id="total" class="btn blue-grey darken-2"></span>
                    </b>
                </div>
            </div>
		
		<br>
		<br>
		<br>
		<div>
		<input type="hidden" id="vararray" name="vararray" />
		
		<button id="btnprocesar" class="btn" type="submit">Procesar</button>
		</div>
			<!--
            <div class="input-field col l12">
                <input class="btn-small" type="submit" value="Buscar">
            </div>
			-->
	
    </form>
</div>

