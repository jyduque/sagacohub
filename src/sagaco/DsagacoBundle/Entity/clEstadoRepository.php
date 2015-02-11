<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\EntityRepository;


/**
 * clEstadoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class clEstadoRepository extends EntityRepository
{ 
    public function listar(){
        
        /* Columna indexada */
        $alias = "a";
        
        /* DB table a usar */
        $tableObjectName = 'DsagacoBundle:clEstado';

        /* Campo para ordenar */        
        $txtOrden = 'coEstado';
        
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