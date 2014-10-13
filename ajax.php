<?php
include_once './class/bodega/tipobodega.php';
include_once './class/conexion.php';
include_once './class/bodega/bodega.php';
include_once './class/cliente/cliente.php';
include_once './class/proveedor/proveedor.php';
include_once './class/articulo/articulo.php';
include_once './class/inventario/inventario.php';
include_once './class/compra/compra.php';
include_once './class/entrada_producto/entrada_producto.php';
include_once './class/compra_producto/compra_producto.php';
include_once './class/cuenta_pagar/cuenta_pagar.php';

$tipobodega=new Tipobodega();
$bodega=new Bodega();
$cliente=new Cliente();
$proveedor=new Proveedor();
$articulo=new Articulo();
$inventario=new Inventario();
$compra=new Compra();
$entradaproducto=new Entrada_producto();
$compraproducto=new Compra_producto();
$cuentapagar=new Cuenta_Pagar();

$type = $_GET['type'];
switch ($type) {
    case 1:
        $tipobodega=new Tipobodega();
        $tipobodega->insertarbodega($miconexion,$_GET);
        break; 
    case 2:
        $tipobodega=new Tipobodega();
        $tipobodega->editarbodega($miconexion, $_GET);
        break;
    case 3:
        $bodega=new Bodega();
        $bodega->insertarbodega($miconexion, $_GET);
        
        break;
    case 4:
        $bodega=new Bodega();
        $bodega->editarbodega($miconexion, $_GET);
        
        
        break;
    
    case 5:
        $cliente=new Cliente();
        $cliente->insertarcliente($miconexion, $_GET);
        break;
    case 6:
        $cliente=new Cliente();
        $cliente->editarcliente($miconexion, $_GET);
        break;
    case 7:
        $proveedor=new Proveedor();
        $proveedor->insertarproveedor($miconexion, $_GET);
        break;
    case 8:
        $proveedor=new Proveedor();
        $proveedor->editarproveedor($miconexion, $_GET);
        break;
    case 9:
        $articulo=new Articulo();
        $articulo->insertararticulo($miconexion, $_GET);
        break;
    case 10:
        $articulo=new Articulo();
        $articulo->editararticulo($miconexion, $_GET);
        break;
    case 11:
        $inventario=new Inventario();
        $inventario->insertararticuloinventario($miconexion, $_GET);
        
        break;
    case 12:
        $inventario=new Inventario();
        $inventario->editararticuloinventario($miconexion, $_GET);
        
        break;
    case 13:
        $compra=new Compra();
        $compra->insertarcompra($miconexion, $_GET);
        
        
        $compra=new Compra();
        $numero=$compra->seleccionarultimoid($miconexion);
        while($rs=mysqli_fetch_assoc($numero)){
             echo $rs["id"];
         }
        
        break;
    case 14:
        $entradaproducto=new Entrada_producto();
       $entradaproducto->insertarentrada($miconexion, $_GET);
        
        
        $entradaproducto=new Entrada_producto();
        $numero=$entradaproducto->seleccionarultimoid($miconexion);
        while($rs=mysqli_fetch_assoc($numero)){
             echo $rs["id"];
         }
         
        break;
    case 15:
        $compraproducto=new Compra_producto();
        $compraproducto->insertarcompraproducto($miconexion, $_GET);
      
        break;
     case 16:
          $cuentapagar=new Cuenta_Pagar();
        $cuentapagar->insertarcuentapagar($miconexion,$_GET);
         break;
}




/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

