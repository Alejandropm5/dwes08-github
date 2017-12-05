<?php
class Pelicula{
    private $ID,$Autor,$Nombre_Pelicula,$Imagen,$idAutor,$Imagen_Autor,$Pais;
    
    
    
    
    public function getID()
    {
        return $this->ID;
    }
    public function getAutor()
    {
        return $this->Autor;
    }
    public function getNombre_Pelicula()
    {
        return $this->Nombre_Pelicula;
    }
    public function getImagen()
    {
        return $this->Imagen;
    }
    public function getidAutor()
    {
        return $this->idAutor;
    }
    public function getImagen_Autor()
    {
        return $this->Imagen_Autor;
    }
    public function getPais()
    {
        return $this->Pais;
    }
    
    
    
    public function __toString(){
        return ("ID".$this->ID."Autor".$this->Autor." Nombre Película ".$this->Nombre_Pelicula." Imagen ".$this->Imagen." IdAutor ".$this->idAutor." Imagen_Autor "
            .$this->Imagen_Autor." Pais ".$this->Pais);
    }
}
?>