<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\EntityRepository;


/**
 * clTipoInstitucionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class clTipoInstitucionRepository extends EntityRepository
{ 
    public function listar(){
        
        /* Indexed column (used for fast and accurate table cardinality) */
        $alias = "a";
        
        /* DB tabla a usar */
        $tableObjectName = 'DsagacoBundle:clTipoInstitucion';
        
        /* Campo para ordenar */        
        $txtOrden = 'coTipoInstitucion';
        
        $objConsulta = $this->getEntityManager()
                ->createQuery('SELECT '
                        . $alias .
                        ' FROM '. $tableObjectName .' '. $alias 
                        .' ORDER BY '. $alias .'.'. $txtOrden . ' ASC');

        try {
            return $objConsulta->getArrayResult();  
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }         
    }    
}