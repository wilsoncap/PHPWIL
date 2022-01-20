<?php 

/*
las interfaces de objetos permiten crear codigo con el cual espeficar
que metodos deben ser implementados por una clase, sin tener que
definir como estos son manipulados

las interfaces se definen de la misma manera que una clase, aunue
reemplazando la palabra reservada class por la palabra interface
y sin que ninguno de sus metodos tenga su contenido definido.

todos los metodos de clarados de una interfaz deben ser
publicos ya que esta es la naturaleza de una unterface


*/

interface Cuenta{

  const Moneda = "Pesos";

  public function asignarSaldo($saldo);


  public function calcularInteres();

  public function mostrarSaldo();
}


class CuentaAhorro implements Cuenta{

    private $saldo;

    public function asignarSaldo($saldo){
       $this->saldo = $saldo;
    }


  public function calcularInteres(){
    $interes =  $this->saldo * 0.05;
    echo "El interes que generara su cuenta es: ". $interes. "<br>";
  }

  public function mostrarSaldo(){
    echo "saldo en su cuenta: ". $this->saldo. " " . Cuenta::Moneda. "<br/>";
  }
}


$cue =  new CuentaAhorro();
$cue->asignarSaldo(15000);
$cue->calcularInteres();
$cue->mostrarSaldo();


class CuentaSaldo implements Cuenta{
  private $saldo;

    public function asignarSaldo($saldo){
       $this->saldo = $saldo;
    }


  public function calcularInteres(){
    $interes =  $this->saldo * 0.12;
    echo "Su cuenta generara: ". $interes. " en el futuro<br>";
  }

  public function mostrarSaldo(){
    echo "saldo actual: ". $this->saldo. " " . Cuenta::Moneda. "<br/>";
  }

}

$cueS =  new CuentaSaldo();
$cueS->asignarSaldo(15000);
$cueS->calcularInteres();
$cueS->mostrarSaldo(); 

?>