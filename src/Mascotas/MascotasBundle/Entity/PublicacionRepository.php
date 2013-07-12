<?php

namespace Mascotas\MascotasBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * PublicacionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PublicacionRepository extends EntityRepository {

    public function getPagina($nro_pagina, $tipo = null) {
        
        $limit = 5;
        $offset = ($nro_pagina * $limit) - $limit;
        if (isset($tipo)) {
            $criteria = array('tipo' => $tipo);
        } else {
            $criteria = array();
        }
        
        $orderBy = array('id' => 'desc');
        return $this->findBy($criteria, $orderBy, $limit, $offset);
    }

    public function getCantidad($tipo = null) {        
        if (isset($tipo)){            
            $criteria = array('tipo' => $tipo);            
            return ceil(count($this->findBy($criteria)) / 5);
        }else{
            return ceil(count($this->findAll()) / 5);
        }
        
    }

}

