<?php
class Publicacion {
    protected $precio_base;
    protected $titulo;
    protected $autor;
    protected $anio_publicacion;
    protected $num_paginas;
   
    public function __construct($titulo, $anio_publicacion, $precio_base){

    }



    /**
     * Get the value of num_paginas
     */
    public function getNumPaginas() {
        return $this->num_paginas;
    }

    /**
     * Set the value of num_paginas
     */
    public function setNumPaginas($num_paginas): self {
        $this->num_paginas = $num_paginas;
        return $this;
    }

    /**
     * Get the value of precio_base
     */
    public function getPrecioBase() {
        return $this->precio_base;
    }

    /**
     * Set the value of precio_base
     */
    public function setPrecioBase($precio_base): self {
        $this->precio_base = $precio_base;
        return $this;
    }

    /**
     * Get the value of titulo
     */
    public function getTitulo() {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     */
    public function setTitulo($titulo): self {
        $this->titulo = $titulo;
        return $this;
    }

    /**
     * Get the value of autor
     */
    public function getAutor() {
        return $this->autor;
    }

    /**
     * Set the value of autor
     */
    public function setAutor($autor): self {
        $this->autor = $autor;
        return $this;
    }

    /**
     * Get the value of anio_publicacion
     */
    public function getAnioPublicacion() {
        return $this->anio_publicacion;
    }

    /**
     * Set the value of anio_publicacion
     */
    public function setAnioPublicacion($anio_publicacion): self {
        $this->anio_publicacion = $anio_publicacion;
        return $this;
    }
}
