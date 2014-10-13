$(document).ready(function(){ 
var numeroentablaoprime;
var columnas=1;
var idproducto;
$('.productocompra'+columnas).live('keydown',function(e){
       numeroentablaoprime = $(this).attr("id");
       
        if (e.keyCode == 113) { 
        var id='id=0';
        $.get('modulos/compra/producto/producto.php',id,function(html){
             
            $('#ventanaemergente').html(html);
            $("#ventanaemergente").dialog({ 
                         
			 modal: true,
                         title: "Buscar Producto",
                         width: 550,
                         minWidth: 400,
                         maxWidth:600 ,
                         show: "fold",
                         hide: "scale",
                         resizable: "false"
                          
                         
                        
                         
		});
                
                return false;
                
       });
    }
 
    });
  $('#productocompra').live('keyup',function(){
       var id=0;
        
    var nombre=$('#productocompra').val();
    
    if (nombre==""){
        id=0;
    }
    else{
        id=1;
    }
    var data='id='+id+'&nombre='+nombre;
        
    $.get('modulos/compra/producto/tablaproducto.php',data,function(html){
            
    $('#tablaproducto').html(html);
    
     });
     });
 $('.seleccionarcompraproducto').live('click',function(){
         
        idproducto = $(this).attr("id"); 
        var nombre=$('.productonombreinventario'+idproducto).text();
        var bodega=$('.bodegainventario'+idproducto).text();
        
        
        $('.productocompra'+columnas).text(nombre);
        $('.bodegacompra'+columnas).text(bodega);
        $('.idproducto1').text(idproducto);
        $( ".viajescompra"+columnas).focus();         //averiguar mas sobre esto
         $('#ventanaemergente').dialog('close');
        
    });

$( ".valorunitariocompra"+columnas ).live('focus',function() {
        var viajes=$('.viajescompra'+columnas).text();
        var metros=$('.metros3compra'+columnas).text();
        var totalmetros=viajes*metros;
        $('.totalm3compra'+columnas).text(totalmetros);
       
});
$(".valorunitariocompra"+columnas).live('keyup',function(){
    var totalmetros=$('.totalm3compra'+columnas).text();
     var valorunitario=$('.valorunitariocompra'+columnas).text();
        var totalcompra=totalmetros*valorunitario;
         $('.valortotalcompra'+columnas).text(totalcompra);
});
});


