<?php
class Entrada_producto
{
     public function  __construct() {
        

        }
        public function seleccionartodo($miconexion){
            
            $sql="SELECT * FROM producto";
        
        $dato=  mysqli_query($miconexion,$sql);
        return $dato;
            
           
        }
        public function seleccionarultimoid($miconexion){
            
            $sql="SELECT MAX(identradaproducto) as id  FROM entrada_producto";
        
        $dato=  mysqli_query($miconexion,$sql);
        return $dato;
            
           
        }
        


        public function insertarentrada($miconexion,$datos){
             $sql="INSERT INTO entrada_producto values('','".$datos['idinventario']."','".$datos['cantidad']."',CURRENT_TIMESTAMP)";
              mysqli_query($miconexion,$sql);
         }
          public function editararticulo($miconexion,$datos){
              
             $sql="update producto set nombreproducto='".$datos['nombre']."',descripcionproducto='".$datos['descripcion']."',valorventa='".$datos['valor']."' where idproducto='".$datos['id']."'";
             
            
             mysqli_query($miconexion,$sql);
         }
     }
   



