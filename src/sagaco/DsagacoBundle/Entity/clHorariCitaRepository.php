<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\EntityRepository;


/**
 * clHorariCitaRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class clHorariCitaRepository extends EntityRepository
{ 
    public function listar(){
        
        /* Columna indexada */
        $alias = "a";
        $orientador =4;
        
        /* DB table a usar */
        $tableObjectName = 'DsagacoBundle:clHorariCita';

        /* Campo para ordenar */        
        $txtOrden = 'coHorariCita';
        
        $objConsulta = $this->getEntityManager()
                ->createQuery('SELECT '
                        . $alias .
                        ' FROM '. $tableObjectName .' '. $alias 
                        . ' WHERE '. $alias . '.coOrientador = '. $orientador
                        .' ORDER BY '. $alias .'.'. $txtOrden . ' ASC');
        try {
            return $objConsulta->getArrayResult();  
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }         
    }  
}
