<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\EntityRepository;


/**
 * clHollanSeccionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class clHollanSeccionRepository extends EntityRepository
{ 
    public function listar(){
        
        /* Columna indexada */
        $alias = "a";
        
        /* DB table a usar */
        $tableObjectName = 'DsagacoBundle:clHollanSeccion';

        /* Campo para ordenar */        
        $txtOrden = 'coHollanSeccion';
        
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