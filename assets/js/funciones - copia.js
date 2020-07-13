//GLOBAL
var _row = null;
var _activeId = 0;
var _nextId = 1;
var aprecio=0.0;
var dprecio =0.0;


$( document ).ready(function() {
    //console.log( "ready!" );
	//$( "#btnremove" ).hide();
	//Global
		

	var fecha = moment().format("YYYY/MM/DD");
	$('#fecha').val(fecha);
	
	var fecha2 = moment().format("YYYY-MM");
	var fecha2 = fecha2 + "-001";
	$('#numero').val(fecha2);
	
	$("#btnnuevo" ).click(function() {
    productAddToTable();
	});
	

	$("input[name=empresa]").change(function () {	 
		$('#empresaid').val(($(this).val()));
	});
	
	
	//CHECKBOX
	$("#gg").click(function() {  
        if($("#gg").is(':checked')) {  
			$('#datogg').val("X");
        } else {  
            $('#datogg').val("");  
        }  
    });
	
	$("#administracion").click(function() {  
        if($("#administracion").is(':checked')) {  
			$('#datoadmi').val("X");
        } else {  
            $('#datoadmi').val("");  
        }  
    });
	
	$("#sistemas").click(function() {  
        if($("#sistemas").is(':checked')) {  
			$('#datosis').val("X");
        } else {  
            $('#datosis').val("");  
        }  
    });
	
	$("#monitoreo").click(function() {  
        if($("#monitoreo").is(':checked')) {  
			$('#datomon').val("X");
        } else {  
            $('#datomon').val("");  
        }  
    });
	
	$("#operarios").click(function() {  
        if($("#operarios").is(':checked')) {  
			$('#datooper').val("X");
        } else {  
            $('#datooper').val("");  
        }  
    });
	
	$("#galmacen").click(function() {  
        if($("#galmacen").is(':checked')) {  
			$('#datogal').val("X");
        } else {  
            $('#datogal').val("");  
        }  
    });
	
	$("#operaciones").click(function() {  
        if($("#operaciones").is(':checked')) {  
			$('#datoopera').val("X");
        } else {  
            $('#datoopera').val("");  
        }  
    });
	
	$("#seguridad").click(function() {  
        if($("#seguridad").is(':checked')) {  
			$('#datosegu').val("X");
        } else {  
            $('#datosegu').val("");  
        }  
    });
	
	$("#rrhh").click(function() {  
        if($("#rrhh").is(':checked')) {  
			$('#datorrhh').val("X");
        } else {  
            $('#datorrhh').val("");  
        }  
    });
	
	$("#otros").click(function() {  
        if($("#otros").is(':checked')) {  
			$('#datootr').val("X");
        } else {  
            $('#datootr').val("");  
        }  
    });  	
	//FIN CHECKBOX
	
	
	$("#btnprocesar").click(function() {
		
		
		//productArray();
		
		
		//alert("1");
	
	var filas = [];
	var tot=0;
    $('#tabledetalle tbody tr').each(function() {
		
	if($(this).find('input[class="col1"]').val()!==undefined){//Para que solo ingrese los campos completos
	
      var cant = $(this).find('input[class="col1"]').val();
      var un = $(this).find('input[class="col2"]').val();
      var stock = $(this).find('input[class="col3"]').val();
      var areas = $(this).find('input[class="col4"]').val();
      var vb = $(this).find('input[class="col5"]').val();
      var descrip = $(this).find('input[class="col6"]').val();
      var provee = $(this).find('input[class="col7"]').val();
      var precio = $(this).find('input[class="col8"]').val();

	  //tot+=val;
	  /*
      var fila = {
        cant,
        un,
        stock,
		areas,
		vb,
		descrip,
		provee,
		precio
      };
      filas.push(fila);
	  */
	  var fila =  {"cant" : cant,"un": un,"stock" : stock, "areas":areas, "vb" : vb,"descrip":descrip,"provee": provee,"precio":precio }
      ;
	  
      filas.push(fila);
	  
	  
	}
    });
	
	//var desa = filas;
	
	//console.log(filas);

	
	//console.log(modi);
	var desa =JSON.stringify(filas);
    //alert(desa);
	//console.log(desa);
	$('#vararray').val(desa);
	
	
	});
	
	
	
	
	
  $("#btnadd" ).click(function() {
		$('#cant_1').prop('readonly', true);
		$('#un_1').prop('readonly', true);
		$('#stock_1').prop('readonly', true);
		$('#area_1').prop('readonly', true);
		$('#vb_1').prop('readonly', true);
		$('#descrip_1').prop('readonly', true);
		$('#provee_1').prop('readonly', true);
		$('#precio_1').prop('readonly', true);
		$("#btnadd").hide();
});


});



function productDelete(ctl) {
  _row = $(ctl).parents("tr");
  var cols = _row.children("td");
 //obtengo la variable
 //console.log($($(cols[7]).children("input")[0]).val());
 var monto = $($(cols[7]).children("input")[0]).val()
 var total = $("#total").text();
 
dprecio = total - monto ;

$("#total").text(dprecio); 
	//limpiar
	aprecio=0.0;
	
$(ctl).parents("tr").remove();
  
}


function productDisplay(id) {
 //$(ctl).parents("tr").css({"color": "red", "border": "2px solid red"});
 //alert(ctl);
 //$('#btndelete_'+id).show();
 $('#btndelete_'+id ).prop( "disabled", false );
 $('#btndelete_'+id ).removeClass("disabled");
 $('#cant_'+id).prop('readonly', true);
 $('#un_'+id).prop('readonly', true);
 $('#stock_'+id).prop('readonly', true);
 $('#area_'+id).prop('readonly', true);
 $('#vb_'+id).prop('readonly', true);
 $('#descrip_'+id).prop('readonly', true);
 $('#provee_'+id).prop('readonly', true);
 $('#precio_'+id).prop('readonly', true);
 //$( "#x" ).prop( "disabled", true );
 $('#btnadd_'+id).hide();
 
 
 
if(parseInt($('#precio_'+id).val()) > 0){	
aprecio= aprecio + parseInt($('#precio_'+id).val());

dprecio = aprecio.toFixed(2);

$("#total").text(dprecio); 

}
else{
$("#total").text("0.0"); 	
}

}


function productAddToTable() {
  // Does tbody tag exist ? add one if not
  if ($("#tabledetalle tbody").length == 0) {
    $("#tabledetalle")
      .append("<tbody></tbody>");
  }
  // Append product to table
  $("#tabledetalle tbody").append(
    productBuildTableRow(_nextId));
  // Increment next ID to use
  _nextId += 1;
}


function productBuildTableRow(id) {
//$( "#x" ).prop( "disabled", true );

  var ret =
  "<tr>" +
    "<td class='numero'>" + "<input type='text' class='col1' id='cant_"+ id +"'>" + "</td>" +
    "<td>" + "<input type='text' class='col2' id='un_"+ id +"'>" + "</td>" +
    "<td>" + "<input type='text' class='col3' id='stock_"+ id +"'>" + "</td>" +
    "<td>" + "<input type='text' class='col4' id='area_"+ id +"'>" + "</td>" +
    "<td>" + "<input type='text' class='col5' id='vb_"+ id +"'>" + "</td>" +
    "<td>" + "<input type='text' class='col6' id='descrip_"+ id +"'>" + "</td>" +
    "<td>" + "<input type='text' class='col7' id='provee_"+ id +"'>" + "</td>" +
    "<td>" + "<input type='text' class='col8' id='precio_"+ id +"'>" + "</td>" +
    "<td style='width:150px;' >" +
	"<button type='button' style='margin:5px;' " +
              "onclick='productDisplay("+ id +");'" + " class='btn-floating' id='btnadd_"+ id +"'  " +
              "data-id='" + id + "'>" +
              "<i class='material-icons'>check</i></button>"
	+
	"<button type='button' onclick='productDelete(this);' class='btn-floating red disabled' id='btndelete_"+ id +"' disabled " +
              "data-id='" + id + "' >" +
              "<i class='material-icons'>close</i></button>"
	  +
    "</td>" +
  "</tr>"
      
  return ret;
}