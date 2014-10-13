$(document).ready(function(){
     var idproveedor;
    $('#nitproveedorcompra').live('keydown',function(e){
       if (e.keyCode == 113) { 
         $.get('modulos/compra/proveedor/proveedor.php',function(html){
           
            $('#ventanaemergente').html(html);
            $("#ventanaemergente").dialog({ 
                         
			 modal: true,
                         title: "Buscar Proveedor",
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
     $('.seleccionarcompraproveedor').live('click',function(){
         
        idproveedor = $(this).attr("id"); 
        var nit=$('.nitproveedorcompra'+idproveedor).text();
        var nombre=$('.nombreproveedorcompra'+idproveedor).text();
        $('#nitproveedor').val(idproveedor); 
        $('#nitproveedorcompra').val(nit);
        $('#nombreproveedorcompra').val(nombre);
         $('#ventanaemergente').dialog('close');
        
    });
     $('#guardarcompra').live('click',function(){
         var idcompra;
         var identradaproducto;
       var nitproveedor= $('#nitproveedor').val();
       var fechafactura=$('#fechacompra').val();
       var valortotal=$('.valortotalcompra1').text();
       var producto=$('.idproducto1').text();
      var cantidad=$('.totalm3compra1').text();
      var viajes=$('.viajescompra1').text();
      var cantidaviaje=$('.metros3compra1').text();
      var valorunitario=$('.valorunitariocompra1').text();
        //alert(nitproveedor+' '+fechafactura+' '+valortotal+' '+producto+' '+cantidad+' '
          //      +viajes+' '+cantidaviaje+' '+valorunitario);
         var datos='type=13&fecha='+fechafactura+'&id='+nitproveedor+'&valor='+valortotal;
         $.get('ajax.php',datos,function(html){
            idcompra=''+html;
            
       });
       var datos='type=14&idinventario='+producto+'&cantidad='+cantidad;
         $.get('ajax.php',datos,function(html){
            identradaproducto=html;
             var formapago=$('#formapagocompra').val();
             var datos='type=15&idcompra='+idcompra+'&idproducto='+producto+'&viajes='+
               viajes+'&metros='+cantidaviaje+'&valorunitario='+valorunitario+'&cantidad='
               +cantidad+'&valortotal='+valortotal;
            
         $.get('ajax.php',datos,function(html){
              if (formapago==="2"){
                 var datos='type=16&idcompra='+idcompra;
                  $.get('ajax.php',datos,function(html){
                       });
                  
             } 
             if (confirm('SEGURO QUE DESEA GUARDAR\n\
se guarda bajo su responsabilidad' )) {
                    alert('Compra Guardada');   
 $.get('modulos/compra/comprar.php',function(html){
            $('.modulos').html(html);
            var f = new Date();
            $('#fechacompra').val(f.getFullYear() + '-' + (f.getMonth() +1) + '-' + f.getDate());
                     

           });

            }
            
            
            
            
            
            
           
                 });
                 });
       
    });
});
