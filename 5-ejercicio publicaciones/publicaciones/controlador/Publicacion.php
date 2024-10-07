<?php
class Publicacion {
    protected $precio_base, $titulo, $autor, $anio_publicacion, $num_paginas;
   
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
}
