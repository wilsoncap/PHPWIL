<?php 
$datosVisitante =  $_SERVER['HTTP_USER_AGENT'];

echo $datosVisitante . "<br/>";


echo strpos($datosVisitante, "Windows NT 10.0"). "<br/>";

echo "sistema operativo: <br/>";
if (strpos($datosVisitante, "Windows NT 10.0")>0){
  echo "Windows 10 <br/>";
}elseif(strpos($datosVisitante, "Windows NT 6.3")){
  echo "Windows 0.1 <br/>";
}else{
  echo "otro sistema operativo";
}


/// esto es muy importante ya que con esto podemos crear una bitacora
// para que podamos optimizar el sitio para la mayor cantidad de dispositivos
// disponibles
?>