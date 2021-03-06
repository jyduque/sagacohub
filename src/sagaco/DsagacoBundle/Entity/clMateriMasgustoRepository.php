<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\EntityRepository;


/**
 * clMateriMasgustoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class clMateriMasgustoRepository extends EntityRepository
{ 
    public function listar(){
        
        /* Columna indexada */
        $alias = "a";
        
        /* DB table a usar */
        $tableObjectName = 'DsagacoBundle:clMateriMasgusto';

        /* Campo para ordenar */        
        $txtOrden = 'coMateriMasgusto';
        
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