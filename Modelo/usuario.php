<?php
require_once('conexion.php');

class Usuario{
    public $idUsuario;
    public $nombre;
    public $contra;
    public $ApePat;
    public $ApeMat;
    public $telefono;
    public $correo;
    public $fechaNac;
    public $estado;
    public $timeLogin;
    public $timeLogout;
    public $idArea;
    public $idPrivilegio;
    
    public function _construct(){
        
    }
     
    public function insert(){
        $db=Db::conectar();
      
         $insert=$db->prepare('INSERT INTO usuario VALUES (0, :Nombre, :Contra, :ApePat, :ApeMat, 
                                         :telefono, :correo, :fechaNac, :estado, :timeLogin, :timeLogout, :idArea, :idPrivilegio)');
 
         $insert->bindValue('Nombre',$this->nombre);
         $insert->bindValue('Contra',$this->contra);
         $insert->bindValue('ApePat',$this->ApePat);
         $insert->bindValue('ApeMat',$this->ApeMat);
         $insert->bindValue('telefono',$this->telefono);
         $insert->bindValue('correo',$this->correo); 
         $insert->bindValue('fechaNac',$this->fechaNac); 
         $insert->bindValue('estado',$this->estado);
         $insert->bindValue('timeLogin',$this->timeLogin);  
         $insert->bindValue('timeLogout',$this->timeLogout);           
         $insert->bindValue('idArea',$this->idArea);
         $insert->bindValue('idPrivilegio',$this->idPrivilegio);
         return $insert->execute();
            
     }

     public function select(){
		$db = Db::conectar();
		$sql = " SELECT idUsuario, Nombre, ApePat, ApeMat, telefono, correo, fechaNac, estado, timeLogin, timeLogout, NomArea, nombrePri FROM  Usuario INNER JOIN Area ON Usuario.idArea=Area.idArea INNER JOIN Privilegio ON Usuario.idPrivilegio=Privilegio.idPrivilegio ";

		$result = $db->query($sql);

		return $result;

    }
    
    public function actualizar(){
        $db = Db::conectar();
        $actualizar=$db->prepare("UPDATE usuario SET nombre=:Nombre WHERE idUsuario=:id");//ACTUALIZAR ESTADO, FECHA Y HORA 
        $actualizar->bindValue('id',$this->idUsuario);
        $actualizar->bindValue('Nombre',$this->nombre);
        
	    $actualizar->execute();

		return $result;
        
    }

    public function actualiza(){
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

        
    }
    
    public function actualizaPerfil(){
        $db = Db::conectar();
        $actualizarPer=$db->prepare("UPDATE usuario SET nombre=:Nombre, Contra=:Contra, ApePat=:ApePat, ApeMat=:ApeMat, telefono=:telefono, correo=:correo, fechaNac=:fechaNac WHERE idUsuario=:id");//ACTUALIZAR ESTADO, FECHA Y HORA 
        $actualizarPer->bindValue('id',$this->idUsuario);
        $actualizarPer->bindValue('Nombre',$this->nombre);
         $actualizarPer->bindValue('Contra',$this->contra); 
        $actualizarPer->bindValue('ApePat',$this->ApePat);
        $actualizarPer->bindValue('ApeMat',$this->ApeMat);
        $actualizarPer->bindValue('telefono',$this->telefono);
        $actualizarPer->bindValue('correo',$this->correo); 
        $actualizarPer->bindValue('fechaNac',$this->fechaNac); 
       
  
        return $actualizarPer->execute();

        
    }

        public function elimina(){
        $db = Db::conectar();
        $elimina=$db->prepare("DELETE FROM usuario WHERE idUsuario=:id");//ACTUALIZAR ESTADO, FECHA Y HORA 
        $elimina->bindValue('id',$this->idUsuario);
        return $elimina->execute();

        
    }
        
    

}


?>