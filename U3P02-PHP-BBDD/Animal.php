<?php


class Animal{
	private $chip,$nombre,$especie,$imagen;


   

  public function getchip()
   {
      return $this->chip;
   }
   public function getnombre()
   {
      return $this->nombre;
   }
   public function getespecie()
   {
      return $this->especie;
   }
   public function getimagen()
   {
      return $this->imagen;
   }
   

   public function __toString(){
   return ("Chip ".$this->chip." Nombre ".$this->nombre." Especie ".$this->especie." Imagen ".$this->imagen);
   }
}
   ?>