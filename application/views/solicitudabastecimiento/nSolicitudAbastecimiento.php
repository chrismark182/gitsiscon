<?php

//include('../cd/dDeclaracion.php');
//include('nCorreo.php');
//include_once('../cd/dDeclaracionD.php');



$vs_var1 = isset($_REQUEST['vs_var1']) ? $_REQUEST['vs_var1'] : "";


$obj_nCls = new nClass();

switch ($_REQUEST['funcion']) {
    case 'nGetSolicitudAbastecimiento': $obj_nCls->nGetSolicitudAbastecimiento($vs_var1);
        break;
    default:
        echo "tu funcion " . $_REQUEST['funcion'] . " no esta en la capa negocio ";
}


class nClass {

    function nGetSolicitudAbastecimiento($soliabas_id)
    {
        $obj_dCls = new dClass();
        
        /*
        $vs_rs = $obj_dCls->dPartxCancionEstadoUpdate($decj_id, $canc_id, 2 ); //ELIMINAR PXC
        $ind = 1;
        $msj = 'Eliminado con éxito';
        if (!$vs_rs) {
            $ind = 2;
            $msj = 'Error al eliminar';
        }

        DCJ::SQLPXC_V_delete_cancion($decj_id, $canc_id);


        $result = array(
            'ind' => $ind,
            'msj' => $msj
        );
        */

        //echo json_encode($result);
        echo "1";
    }

    

}

?>
