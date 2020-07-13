<style>
.modal { width: 75% !important ; height: 75% !important ; }
</style>

<nav class="blue-grey lighten-1" style="padding: 0 1em;">
    <div class="nav-wrapper">
      <div class="col s12">
        <a href="#!" class="breadcrumb">Ordenes de Servicio</a>
        <a href="#!" class="breadcrumb">Solicitud de Abastecimiento</a>
      </div>
    </div>
</nav>


<br>



<!--
<a class="waves-effect waves-light btn btn-small">Obras</a>
<a class="waves-effect waves-light btn btn-small">Abastecimiento</a>
-->

<div class="section container">


  <div class="section">
  <!--
    <h5>Solicitado</h5>	
    <table class="striped" id="tablalist">
        <thead>
            <tr>          
				<th>#</th>
				<th>Fecha</th>
                <th>Obra/Abastecimiento</th>
                <th>Ver</th>
            </tr>
        </thead>
        
        <tbody>
            <?php if($results): ?>
                <?php foreach($results as $row): ?> 
                    <tr >
                        <td><?=$row->SOLABAS_NUMERO?></td>
						<td><?=$row->SOLABAS_DATE?></td>
                        <td><?=$row->DESCRIPCION?></td>
                        <td><button class="waves-effect waves-light btn modal-trigger btn-small" href="#modal1" name="btnver" id="btnver" attr_soliabas_id="<?=$row->SOLABAS_N_ID?>" >Ver</button></td>
                    </tr>
                <?php endforeach; ?>  
            <?php endif; ?>
        </tbody>
        
    </table>
	-->
  </div>
  
   
  <!--<div class="divider"></div>-->
   
  <!--
  <div class="section">
    <?php if(isset($results2)): ?>
	 <h5>En Proceso</h5>
        <table class="highlight" id="tableenproceso">
        <thead>
            <tr>          
				<th>#</th>
				<th>Fecha</th>
                <th>Obra/Abastecimiento</th>
                <th>Precio</th>
                <th>Completo</th>
                <th>Editar</th>
            </tr>
        </thead>
        
        <tbody>
                <?php foreach($results2 as $row2): ?> 
                    <tr>
                        <td><?=$row2->SOLABAS_NUMERO?></td>
						<td><?=$row2->SOLABAS_DATE?></td>
                        <td><?=$row2->DESCRIPCION?></td>
                        <td id="tdprecio_<?=$row2->SOLABAS_N_ID?>">
						<?php
						if(!empty($row2->SOLABAS_PRECIO))
						{
						
						echo $row2->SOLABAS_PRECIO;
						}
						else
						{
						?>
						<input type="hidden"  class="idsoliabas" id="idsoliabas" name="idsoliabas" value="<?=$row2->SOLABAS_N_ID?>" />
						<input class="precio" type="text" id="precio_<?=$row2->SOLABAS_N_ID?>" name="precio" autocomplete="off" style="width:100px;" /> <button type="button" class='btn-floating btn-small' id="btnpreciog_<?=$row2->SOLABAS_N_ID?>" name="btnpreciog" attr_idsoli_ver="<?=$row2->SOLABAS_N_ID?>" ><i class='material-icons'>check</i></button>
						<?php
						}
						?></td>
                        <td id="vporcen_<?=$row2->SOLABAS_N_ID?>" > <?= $row2->SOLABAS_PORCEN." %" ?></td>
                        <td>
						<?php
						if(!empty($row2->SOLABAS_PRECIO))
						{
						?>						
						<button class="btn btn-floating btn-small modal-trigger" href="#modal2" name="btnedit" id="btnedit_<?=$row2->SOLABAS_N_ID?>" attr_solabas_id="<?=$row2->SOLABAS_N_ID?>" <?php if($row2->SOLABAS_PORCEN==100) {  echo "disabled"; } ?>    ><i class="material-icons" >edit</i></button>
						<?php
						}
						else
						{
						?>
						
						<button class="btn btn-floating btn-small modal-trigger" href="#modal2" name="btnedit" id="btnedit_<?=$row2->SOLABAS_N_ID?>" attr_solabas_id="<?=$row2->SOLABAS_N_ID?>" disabled  ><i class="material-icons" disabled >edit</i></button>
						
						<?php } ?>	

						</td>
                    </tr>
                <?php endforeach; ?>  
        </tbody>
    </table>
	<input type="hidden"  class="psoliabas" id="psoliabas" name="psoliabas" value="" />
	  <?php endif; ?>
  
  </div>
  -->
  <!--FIN-->
      
	  
	  
</div>



 <ul class="collapsible" style="width:100%">
    <li class="active">
      <div class="collapsible-header"><i class="material-icons left">chevron_right</i>Solicitados</div>
      <div class="collapsible-body"><table class="striped" id="tablalist">
        <thead>
            <tr>          
				<th>#</th>
				<th>Fecha</th>
                <th>Obra/Abastecimiento</th>
                <th>Ver</th>
                <!--<th>Editar</th>-->
            </tr>
        </thead>
        
        <tbody>
            <?php if($results): ?>
                <?php foreach($results as $row): ?> 
                    <tr >
                        <td><?=$row->SOLABAS_NUMERO?></td>
						<td><?=$row->SOLABAS_DATE?></td>
                        <td><?=$row->DESCRIPCION?></td>
                        <td><button class="waves-effect waves-light btn modal-trigger btn-small" href="#modal1" name="btnver" id="btnver" attr_soliabas_id="<?=$row->SOLABAS_N_ID?>" >Ver</button></td>
                    </tr>
                <?php endforeach; ?>  
            <?php endif; ?>
        </tbody>
        
    </table></div>
    </li>
	
<?php if(isset($results2)): ?>
    <li>
      <div class="collapsible-header"><i class="material-icons left">chevron_right</i>En Proceso</div>
      <div class="collapsible-body">
	  
	  <table class="highlight" id="tableenproceso">
        <thead>
            <tr>          
				<th>#</th>
				<th>Fecha</th>
                <th>Obra/Abastecimiento</th>
                <th>Cotizacion</th>
                <th>Precio</th>
                <th>Completo</th>
                <th>Editar</th>
            </tr>
        </thead>
        
        <tbody>
                <?php foreach($results2 as $row2): ?> 
                    <tr>
                        <td><?=$row2->SOLABAS_NUMERO?></td>
						<td><?=$row2->SOLABAS_DATE?></td>
                        <td><?=$row2->DESCRIPCION?></td>
						<?php 
						
						if($row2->SOLABAS_OPC1==1){
							$ruta="./uploads/".$row2->FILE1;
						}
						elseif($row2->SOLABAS_OPC1==2){
							$ruta="./uploads/".$row2->FILE2;
						}
						elseif($row2->SOLABAS_OPC1==3){
							$ruta="./uploads/".$row2->FILE3;
						}
						
						?>
						
                        <td><a id="afile" href="<?= $ruta ?>" target="_blank"><img src="<?= $ruta ?>" id="arfile" width="42" height="42" /></a>	</td>
                        <td id="tdprecio_<?=$row2->SOLABAS_N_ID?>">
						<?php
						if(!empty($row2->SOLABAS_PRECIO))
						{
						
						echo $row2->SOLABAS_PRECIO;
						}
						else
						{
						?>
						<input type="hidden"  class="idsoliabas" id="idsoliabas" name="idsoliabas" value="<?=$row2->SOLABAS_N_ID?>" />
						<input class="precio" type="text" id="precio_<?=$row2->SOLABAS_N_ID?>" name="precio" autocomplete="off" style="width:100px;" /> <button type="button" class='btn-floating btn-small' id="btnpreciog_<?=$row2->SOLABAS_N_ID?>" name="btnpreciog" attr_idsoli_ver="<?=$row2->SOLABAS_N_ID?>" ><i class='material-icons'>check</i></button>
						<?php
						}
						?></td>
                        <td id="vporcen_<?=$row2->SOLABAS_N_ID?>" > <?= $row2->SOLABAS_PORCEN." %" ?></td>
                        <td>
						<?php
						if(!empty($row2->SOLABAS_PRECIO))
						{
						?>			
						<button class="btn btn-floating btn-small modal-trigger" href="#modal2" name="btnedit" id="btnedit_<?=$row2->SOLABAS_N_ID?>" attr_solabas_id="<?=$row2->SOLABAS_N_ID?>" <?php if($row2->SOLABAS_PORCEN==100) {  echo "disabled"; } ?>    ><i class="material-icons" >edit</i></button>
						<?php
						}
						else
						{
						?>
						
						<button class="btn btn-floating btn-small modal-trigger" href="#modal2" name="btnedit" id="btnedit_<?=$row2->SOLABAS_N_ID?>" attr_solabas_id="<?=$row2->SOLABAS_N_ID?>" disabled  ><i class="material-icons" disabled >edit</i></button>
						
						<?php } ?>	

						</td>
                    </tr>
                <?php endforeach; ?>  
        </tbody>
    </table>
	<input type="hidden"  class="psoliabas" id="psoliabas" name="psoliabas" value="" />
    </li>
 <?php endif; ?>	
	
	<?php if(isset($results3)): ?>
	
    <li>
      <div class="collapsible-header"><i class="material-icons left">chevron_right</i>Culminados</div>
      <div class="collapsible-body">   
	  <table class="highlight" id="tableculminado">
        <thead>
            <tr>          
				<th>#</th>
				<th>Fecha</th>
                <th>Obra/Abastecimiento</th>
                <th>Precio</th>
                <!--<th>Completo</th>-->
            </tr>
        </thead>
		
		 <tbody>
            <?php if($results3): ?>
                <?php foreach($results3 as $row3): ?> 
                    <tr >
                        <td><?=$row3->SOLABAS_NUMERO?></td>
						<td><?=$row3->SOLABAS_DATE?></td>
                        <td><?=$row3->DESCRIPCION?></td>
                        <td><?=$row3->SOLABAS_PRECIO?></td>
						<!--<td></td>-->
                    </tr>
                <?php endforeach; ?>  
            <?php endif; ?>
        </tbody>
		<!--
		<tbody>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		</tbody>
		-->
		</table>
		</div>
    </li>
	<?php endif; ?>
  </ul>



<!--Modal 1-->
<div id="modal1" class="modal">
    <div class="modal-content">
      <h4 id="titulosolicitud">Solicitud</h4>
      <div class="section container center">
        <div class="row">
		
				
            <div class="input-field col s12 m6 l4">
				<!--
				<input id="fecha" type="text" name="fecha" class="validate">
				-->
				<div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
				<input class="validate" size="16" type="text" id="fechav" name="fechav"  readonly>
				<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
				</div>				
				<label class="active" for="fecha" >Fecha:</label>
            </div>
			
            <div class="input-field col s12 m6 l4">
				<div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
				<input size="16" type="text" id="numerov" name="numerov" value="" readonly>
				<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
				</div>				
				<label class="active" for="numero" >Numero:</label>				
            </div>
					
        </div>		
		
		 <!---<p class="h4 mb-4 text-center  border-dark">SOLICITUD DE ABASTECIMIENTO</p>-->
		 
		 
		<div class="form-group">
			<p class="text-center bgcolor">EMPRESA</p>
		</div>
			
		<div class="row">
		
		<div class="input-field col s12 m6 l3">
			<label>
			<input class="with-gap" name="empresa" type="radio" id="empresa1" value="1" disabled />
			<span>Bigote</span>
			</label>
		</div>
		
        <div class="input-field col s12 m6 l3">
			<label>
				<input class="with-gap" name="empresa" type="radio" id="empresa2" value="2" disabled />
				<span>Lopud</span>
			</label>
		</div>
		
		
		<div class="input-field col s12 m6 l3">
			<label>
			<input class="with-gap" name="empresa" type="radio" id="empresa3" value="3" disabled />
			<span>AQP</span>
			</label>
		</div>
		
        <div class="input-field col s12 m6 l3">
			<label>
				<input class="with-gap" name="empresa" type="radio" id="empresa4" value="4" disabled />
				<span>Choice</span>
			</label>
		</div>
		
		
		</div>
		
		<br>
		
		
		<div class="form-group">
			<p class="text-center bgcolor">TIPO </p>
		</div>
		
		
		<div class="row">
		
		 <div class="input-field col s12 m6 l3">
			<label>
			<input class="with-gap" name="tipo" type="radio" id="tipo1" value="1" disabled />
			<span>Obras</span>
			</label>
		</div>
		
        <div class="input-field col s12 m6 l3">
			<label>
				<input class="with-gap" name="tipo" type="radio" id="tipo2" value="2" disabled />
				<span>Abastecimiento</span>
			</label>
		</div>
		<input type="hidden" name="tipoid" id="tipoid" />
		</div>
	
		<br>	
	
		
		<div id="divdepartamento" name="" class="" >
		
		
		<div class="form-group">
			<p class="text-center bgcolor">DEPARTAMENTO</p>
		</div>
		
		
		<div class="row">
		<div class="input-field col s12 m6 l3">
		
		<label>
				<input class="with-gap" name="departamento" type="radio" id="gg" disabled />
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
				<input class="with-gap" name="departamento" type="radio" id="administracion" disabled />
				<span>Administracion</span>
		    </label>
        </div>
	
		
		
		<div class="input-field col s12 m6 l3">
		<!--
			<input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">Sistemas</label>
			-->
			
			<label>
				<input class="with-gap" name="departamento" type="radio" id="sistemas" disabled />
				<span>Sistemas</span>
		    </label>
        </div>
		
		<div class="input-field col s12 m6 l3">
			<label>
				<input class="with-gap" name="departamento" type="radio" id="monitoreo" disabled />
				<span>Monitoreo</span>
		    </label>
		
		<!--
			<input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">Monitoreo</label>
        -->
		</div>
		
		<div class="input-field col s12 m6 l3">
			<label>
				<input class="with-gap" name="departamento" type="radio" id="operarios" disabled />
				<span>Operarios</span>
		    </label>
		<!--
			 <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">Operarios</label>
        -->
		</div>
		
		<div class="input-field col s12 m6 l3">
			<label>
				<input class="with-gap" name="departamento" type="radio" id="galmacen" disabled />
				<span>G. Almacen</span>
		    </label>
			<!--
			<input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">G. Almacen</label>
			-->
		</div>
		
		<div class="input-field col s12 m6 l3">
			<label>
				<input class="with-gap" name="departamento" type="radio" id="operaciones" disabled />
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
				<input class="with-gap" name="departamento" type="radio" id="seguridad" disabled />
				<span>Seguridad</span>
		    </label>
		</div>
		
		<div class="input-field col s12 m6 l3">
			<!--
		    <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">RRHH</label>
			-->
			<label>
				<input class="with-gap" name="departamento" type="radio" id="rrhh" disabled />
				<span>RRHH</span>
		    </label>
        </div>
		
		<div class="input-field col s12 m6 l3">
		 <label>
				<input class="with-gap" name="departamento" type="radio" id="otros" disabled />
				<span>Otros</span>
				<input type="text" class="" id="otrosin" name="otrosin" disabled>
				<!--<input type ="file" name="userfile2" />-->
		 </label>
        </div>
		</div>	
				
		</div>
		
		
		<br>
		<br>
		<br>		
		
		
		
		<?php if(!isset($results2)): ?>
		
		<div class="form-group"> 
			<p class="text-center bgcolor">DETALLE</p>
		</div>
		
		 <?php endif; ?>
		 
		 
		 
		<form action="<?= base_url() ?>solicitudabastecimiento/autorizar"  method="post" >
		<?php if(!isset($results2)): ?>
		<div class="form-group">
            <div class="col-md-12">
            
            <br>
            <br>
            <table id="tabledetalle" class="table table-striped table-bordered nowrap" > <!--style="width:100%"-->
            <tr>
            <!--<th style="width: 40px;">Cantidad</th>-->
			<!--
            <th>Un.</th>
            <th>Stock Almacen </th>
            <th>Area/Responsable</th>
            <th>VºBº</th>
			-->
            <th style="width: 300px;">Descripcion</th>
            <!--<th>Proveedor sugerido</th>-->
            <!--<th>Precio</th>-->
            <th style="width: 350px;">Cotizaciones</th>
            </tr>
            </thead>
			<tbody>
			<tr>
			<td><input type="text" class="" id="descrip" name="descrip" readonly  /></td>
			<td>
			<!--
				<input class="with-gap" name="file" type="radio" id="rfile1"  />
				<span><img src="./uploads/f61f9a066ee89ebe564ad9f2e73f5d6f.jpg" id="file1" width="42" height="42" /></span>
				
				<br>
				<br>
				-->
				
				<div class="row">
			<!--<div class="input-field col s12 m6 l3">-->

				<label style="padding:10px;">
				<input class="with-gap" name="rfile" type="radio" id="rfile1" value="1"  />
				<span><a id="afile1" href="" target="_blank"><img src="" id="file1" width="42" height="42" /></a></span>
				</label>
				
			<!--</div>-->

<!--
			<br>
			<br>
	-->		
				<!--<div class="input-field col s12 m6 l3">			-->
				<label style="padding:10px;">
				<input class="with-gap" name="rfile" type="radio" id="rfile2" value="2"  />
				<span><a id="afile2" href="" target="_blank"><img src="" id="file2" width="42" height="42" /></a></span>
				</label>
				<!--</div>-->
				
		<!--		
				<br>
				<br>
			-->	
				<!--<div class="input-field col s12 m6 l3">-->
				<label style="padding:10px;">
				<input class="with-gap" name="rfile" type="radio" id="rfile3" value="3"  />
				<span><a id="afile3" href="" target="_blank"><img src="" id="file3" width="42" height="42" /></a></span>
				</label>
			<!--	</div>-->
				
			</div>
				<!--
				<input class="with-gap" name="file" type="radio" id="rfile2"  />
				<span><img src="./uploads/f61f9a066ee89ebe564ad9f2e73f5d6f.jpg" id="file2" width="42" height="42" /></span>
				
				<br>
				<br>
				
				<input class="with-gap" name="file" type="radio" id="rfile3"  />
				<span><img src="./uploads/f61f9a066ee89ebe564ad9f2e73f5d6f.jpg" id="file3" width="42" height="42" /></span>
				-->
				
			</td>
			</tbody>
            </table>
						
           </div>
         </div>
		 
		 <?php endif; ?>
		 
		 <!--
         <div class="input-field col s6 m6 l3">
         </div>
         <div class="input-field col s3">
         </div>
		-->
		
		<br>
		<br>
		<div>
		</div>
			<!--
            <div class="input-field col l12">
                <input class="btn-small" type="submit" value="Buscar">
            </div>
			-->
</div>

<div class="center" >
<input type="hidden" name="rfileid" id="rfileid" />
<input type="hidden" name="idsolabas" id="idsolabas" />

<?php if(!isset($results2)): ?>
<button class="waves-effect waves-light btn-small" id="btnaceptar" type="submit" >Aceptar</button> <?php endif; ?>
<!--<button class="waves-effect waves-light btn-small red">Rechazar</button>-->
</div>
</form>


    </div>
	
	<div class="modal-footer">
	<a href="" class="btn modal-close red">Cerrar </a>
	</div>
 </div>


<!--Fin Modal 1-->


<!--Modal 2-->
<div id="modal2" class="modal">
    <div class="modal-content">
	
	<table class="highlight" id="tableaceptados">
        <thead>
            <tr>          
				<th>#</th>
				<th>Fecha</th>
                <th>Obra/Abastecimiento</th>               
			   <th>Precio</th>
                <!--<th>Completo</th>-->
                <!--<th>Editar</th>-->
            </tr>
        </thead>
        <tbody>
            <tr>
			<td name="cnum"></td>
			<td name="cfecha"></td>
			<td name="cobab"></td>
			<td name="preci" id="preci"></td>                       
            </tr>
        </tbody>
    </table>
	<br>
	<br>
<h4>Historial</h4>
<input type="hidden" id="id_solabas" name="id_solabas" />

<div class="section container center">
<button class="btn btn-primary" type="button" id="btnaddprecio" ><i class="material-icons" >add</i></button>		
	
		<form action="<?= base_url() ?>solicitudabastecimiento/autorizar"  method="post" >
		<div class="form-group">
            <div class="col-md-12">
            
            <br>
            <br>
            <table id="tabledetprecio" class="table table-striped table-bordered nowrap" > <!--style="width:100%"-->
			<thead>
            <tr>
            <th style='width: 80px;'>Descripcion</th>
            <th>Pago</th>
			<th>Opcion</th>
            </tr>
            </thead>
			<!--
			<tbody>
			<tr>
			<td>DESCRIPCION</td>
			<td>DESCRIPCION</td>
			<td>DESCRIPCION</td>
			</tbody>
            -->
			</table>
						
           </div>
         </div>
		<div>
		</div>
			<!--
            <div class="input-field col l12">
                <input class="btn-small" type="submit" value="Buscar">
            </div>
			-->
</div>

<!--
<div class="center" >
<button class="waves-effect waves-light btn-small" id="btnaceptar" type="submit" >Aceptar</button>
</div>
-->
</form>	
			
<!--			
	<div class="row">	
	   <div class="input-field col s12 m6 l4">
			<input class="validate" size="16" type="text" id="pago" name="pago"  readonly>	
			<label class="active" for="pago" >Pago:</label>
	   </div>
			
		<div class="input-field col s12 m6 l4">
			<input size="16" type="text" id="saldo" name="saldo" value="" readonly>
			<label class="active" for="saldo" >Saldo:</label>				
		</div>
					
     </div>	
-->		
		
</div>
		
	
		 
		 
		 
		
<!--
<div class="modal-footer">
	<button href="" class="btn modal-close red">Cerrar </button>
</div>
-->


</div>
 
 <!--Fin Modal 2-->

<a  class="btn-floating btn-large waves-effect waves-light red" style="bottom:16px; right:16px; position:fixed;" 
    href="<?= base_url()?>solicitudabastecimiento/nuevo"><i class="material-icons">add</i></a>
