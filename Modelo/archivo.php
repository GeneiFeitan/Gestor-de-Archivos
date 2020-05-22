<?php
require_once('conexion.php');

include('../Modelo/login.php');
include('../Modelo/logout.php');



session_start();
$nombreUsuario= $_SESSION['nombre_usuario'];//VARIABLE DE SESIÓN NOMBRE DE USUARIO
$idUsuario= $_SESSION['idUsuario'];//VARIABLE DE SESIÓN Id DE USUARIO
$idPrivilegio= $_SESSION['idPrivilegio'];



 

class Archivo{
        public $idArchivo;
        public $nombre;
        public $fecha;
        public $idUsuario;
        public $descripcion;
        public $ruta;
        public $idArea;
    
    public function _construct(){
        
    }

    
    
     
    public function insert(){
        $db=Db::conectar();
         $insert=$db->prepare('INSERT INTO Archivos VALUES (0, :NombreArchivo, now(), :idUsuario, 
                                         :idArea, :ruta, :descripcion)');
 
         $insert->bindValue('NombreArchivo',$this->nombre);
         $insert->bindValue('idUsuario',$this->idUsuario);
         $insert->bindValue('idArea',$this->idArea);
         $insert->bindValue('ruta',$this->ruta);
         $insert->bindValue('descripcion',$this->descripcion);
         return $insert->execute();
            
     }


     public function select(){
		$db = Db::conectar();
		$sql = " SELECT idArchivos, NombreArchivo, fecha, Nombre, NomArea, descripcion FROM  archivos INNER JOIN Area ON archivos.idArea=Area.idArea INNER JOIN usuario ON archivos.idUsuario=usuario.idUsuario ";

		$result = $db->query($sql);

		return $result;

    }
        public function selectPorUsua(){
     


		$db = Db::conectar();
		$sql=("SELECT idArchivos, NombreArchivo, fecha, IdUsuario, descripcion FROM  archivos  WHERE idUsuario='$_SESSION[idUsuario]'");
		$result = $db->query($sql);

        return $result;
        

    }

    public function selectPorArea(){
     


		$db = Db::conectar();
		$sql=("SELECT idArchivos, NombreArchivo, fecha, IdUsuario, descripcion FROM  archivos  WHERE idArea='$_SESSION[idArea]' or idArea=9");
		$result = $db->query($sql);

        return $result;
        

    }

    public function selectArea(){
        $db = Db::conectar();
        $are = $db->prepare("SELECT * FROM area WHERE idArea=:idArea");
        $are->bindValue('idArea',$_SESSION['idArea']);
        $are->execute();
        $file = $are->fetch();

         $area=$file['NomArea'];  

         return $area;

    }

   
    
  
   /* public function actualiza(){
        $db = Db::conectar();
        $actualizar=$db->prepare("UPDATE usuario SET nombre=:Nombre, ApePat=:ApePat, ApeMat=:ApeMat, telefono=:telefono, correo=:correo, fechaNac=:fechaNac, idArea=:idArea, idPrivilegio=:idPrivilegio WHERE idUsuario=:id");//ACTUALIZAR ESTADO, FECHA Y HORA 
        $actualizar->bindValue('id',$this->idUsuario);
        $actualizar->bindValue('Nombre',$this->nombre);
        $actualizar->bindValue('ApePat',$this->ApePat);
        $actualizar->bindValue('ApeMat',$this->ApeMat);
        $actualizar->bindValue('telefono',$this->telefono);
        $actualizar->bindValue('correo',$this->correo); 
        $actualizar->bindValue('fechaNac',$this->fechaNac); 
        $actualizar->bindValue('idArea',$this->idArea);
        $actualizar->bindValue('idPrivilegio',$this->idPrivilegio);
        return $actualizar->execute();

        
    }*/

    public function eliminar(){
        $db = Db::conectar();
        $elimina=$db->prepare("DELETE FROM archivos WHERE idArchivos=:id");//Elimina el registro seleccionado 
        $elimina->bindValue('id',$this->idArchivo);
        return $elimina->execute();

       
    }

    public function descarga(){

        $db = Db::conectar();
        $des = $db->prepare("SELECT * FROM archivos WHERE idArchivos=:idArchivos");
        $des->bindValue('idArchivos',$this->idArchivo);
        $des->execute();
        $file = $des->fetch();

        $archi=$file['NombreArchivo'];
        
            $fileName = $archi;
            $filePath = '../Controlador/archivos/'.$fileName;
            if(!empty($fileName) && file_exists($filePath)){
                // Define headers
                header("Cache-Control: public");
                header("Content-Description: File Transfer");
                header("Content-Disposition: attachment; filename=$fileName");
                header("Content-Type: application/octet-stream");
                header("Content-Transfer-Encoding: binary");
                
                // Read the file
                readfile($filePath);
                exit;
            }else{
                echo 'The file does not exist.';
            }
        

    }

    public function eliminarFisico(){

        $db = Db::conectar();
        $el = $db->prepare("SELECT * FROM archivos WHERE idArchivos=:idArchivos");
        $el->bindValue('idArchivos',$this->idArchivo);
        $el->execute();
        $file = $el->fetch();

        $archi=$file['NombreArchivo'];
        

        $archi=$file['NombreArchivo'];
        unlink('../Controlador/archivos/'.$archi);

        
        


    }
      
      
    }


?>