<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
  <head>
      <link href="css/jquery-ui-1.8.4.custom.css" rel="stylesheet" type="text/css"/>
      <link href="css/estilosmenu.css" rel="stylesheet" type="text/css"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
    <script src="controllers/js/libs/jquery/jquery-1.4.2.min.js" type="text/javascript"></script>
    <script src="controllers/js/libs/jquery/jquery-ui-1.8.4.custom.min.js" type="text/javascript"></script>
    <script src="controllers/menu/menu.js" type="text/javascript"></script>
    <script src="controllers/editar/articulo.js" type="text/javascript"></script>
    <script src="controllers/editar/bodega.js" type="text/javascript"></script>
    <script src="controllers/editar/cliente.js" type="text/javascript"></script>
    <script src="controllers/editar/inventario.js" type="text/javascript"></script>
    <script src="controllers/editar/proveedor.js" type="text/javascript"></script>
    <script src="controllers/editar/tipobodega.js" type="text/javascript"></script>
    <script src="controllers/comprar/comprar.js" type="text/javascript"></script>
    <script src="controllers/comprar/proveedor.js" type="text/javascript"></script>
    <script src="controllers/comprar/producto.js" type="text/javascript"></script>
    
    <title></title>
  </head>
  <body>
    <div class="menu"> <br>
       <ul id="nav">
          
                    <li id="paginainicio">Inicio</li>
                    <li  ><a>Editar</a>
                        
                                <ul>
                                    <li  id="bodega">Bodegas</li>
                                    <li  id="tipobodega">Tipo Bodega¿</li>
                                    <li  id="cliente">Cliente</li>
                                    <li  id="proveedor">Proveedor</li>
                                    <li  id="material">Material</li>
                                    <li  id="inventario">Inventario</li>
                                </ul>
                            </li>
                              <li  ><a>Procesos</a>
                        
                                <ul >
                                    <li  id="compra">Compra</li>
                                    <li  id="venta">Venta</li>
                                    <li  id="otroproceso">Otros Procesos</li>
                                    
                                </ul>
                            </li>
                             <li  ><a>Informes</a>
                        
                                <ul >
                                    
                                    
                                </ul>
                            </li>
                       <li >
                           Sistema
                        <ul >
                            
                            <li id="cambiarcontra">cambiar contraseña</li>
                            <li><a onClick="location.reload();" >salir</a></li>
                    </ul>
                    </li>
                    
                    
                </ul>
    </div>
    <div class="principal"><br>
        <div class="modulos">
            
        </div>
    </div>
      <div  id="ventanaemergente" >
             
             </div>  
  </body>
</html>

