$(document).ready(function(){
    $('#tipobodega').live('click',function(){
       
        $.get('modulos/bodega/tipo_bodega/index.php',function(html){
             
            $('.modulos').html(html);
           });
        
        
     });
      $('#bodega').live('click',function(){
       
        $.get('modulos/bodega/index.php',function(html){
             
            $('.modulos').html(html);
           });
        
        
     });
     $('#cliente').live('click',function(){
       
        $.get('modulos/cliente/index.php',function(html){
             
            $('.modulos').html(html);
           });
        
        
     });
     $('#proveedor').live('click',function(){
       
        $.get('modulos/proveedor/index.php',function(html){
             
            $('.modulos').html(html);
           });
        
        
     });
     $('#material').live('click',function(){
       
        $.get('modulos/articulo/index.php',function(html){
             
            $('.modulos').html(html);
           });
        
        
     });
     $('#inventario').live('click',function(){
       
        $.get('modulos/inventario/index.php',function(html){
             
            $('.modulos').html(html);
           });
        
        
     });
     $('#compra').live('click',function(){
       
        $.get('modulos/compra/comprar.php',function(html){
             
            $('.modulos').html(html);
            var f = new Date();
            $('#fechacompra').val(f.getFullYear() + '-' + (f.getMonth() +1) + '-' + f.getDate());
                     

           });
        
        
     });
});

