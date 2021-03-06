<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\EntityRepository;


/**
 * clCitaRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class clCitaRepository extends EntityRepository
{ 
    public function listarCitasPorPersona($inPersona){
        
        /* Columna indexada */
        $alias = "a";
        
        /* DB table a usar */
        $tableObjectName = 'DsagacoBundle:clCita';

        /* Campo para ordenar */        
        $txtOrden = 'feCita';
        
        $objConsulta = $this->getEntityManager()
                ->createQuery('SELECT '
                        . $alias . ', o'
                        . ' FROM '. $tableObjectName .' '. $alias 
                        . ' INNER JOIN a.coOrientador o'
                        . ' WHERE a.coPersona = :inPersona'
                        .' ORDER BY '. $alias .'.'. $txtOrden . ' ASC')
                ->setParameter('inPersona', $inPersona);
        try {
            return $objConsulta->getArrayResult();  
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }         
    }  
    
    public function fechaCitaPorSemana ($feInicio, $objEntidadAgenda, $hHora){
        /* Columna indexada */
        $alias = "a";      
       
        /* DB table a usar */
        $tableObjectName = 'DsagacoBundle:clCita';

        /* Campo para ordenar */        
        $txtOrden = 'feCita';
        
        $objConsulta = $this->getEntityManager()
                ->createQuery('SELECT '
                        . 'a.coCita, a.feCita, a.hoCita' 
                        . ' FROM '. $tableObjectName .' '. $alias 
                        //. ' WHERE '. $alias . '.feHorario BETWEEN :feInicio AND :feFin'
                        . ' WHERE '. $alias . '.feCita = :feInicio'
                        . ' AND a.hoCita = :hInicio'
                        . ' AND a.coOrientador = :orientador'
                        . ' ORDER BY '. $alias .'.'. $txtOrden . ' ASC')
                ->setParameter('feInicio', $feInicio)
                //->setParameter('feFin', $feFin)
                ->setParameter('hInicio', $hHora)
                ->setParameter('orientador', $objEntidadAgenda)
                ;
        try {
            return $objConsulta->getArrayResult();  
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
        
    }
}
