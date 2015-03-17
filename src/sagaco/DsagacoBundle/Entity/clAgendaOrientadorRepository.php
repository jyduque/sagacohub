<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\EntityRepository;


/**
 * clAgendaOrientadorRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class clAgendaOrientadorRepository extends EntityRepository
{ 
    public function listar(){
        
        /* Columna indexada */
        $alias = "a";
        
        /* DB table a usar */
        $tableObjectName = 'DsagacoBundle:clAgendaOrientador';

        /* Campo para ordenar */        
        $txtOrden = 'coAgendaOrientador';
        
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
    
    public function calendario($intOrientador, $intSemestre){
        /* Columna indexada */
        $alias = "a";
        $alias1 = "b";
        
        /* DB table a usar */
        $tableObjectName = 'DsagacoBundle:clAgendaOrientador';

        /* Campo para ordenar */        
        $txtOrden = 'coDiaSemana';
        $txtFiltro1 = $intOrientador; //Colocar el orientador
        $txtFiltro2 = $intSemestre; //Colocar el semestre
                
        
        $objConsulta = $this->getEntityManager()
                ->createQuery('SELECT '
                        . $alias .', '. $alias1
                        .' FROM '. $tableObjectName .' '. $alias 
                        .' JOIN '. $alias . '.' . 'coOrientador '. $alias1
                        .' WHERE '. $alias .'.'.'coOrientador = '. $txtFiltro1
                        .' AND '. $alias .'.'.'coSemestre = '. $txtFiltro2
                        .' ORDER BY '. $alias .'.'. $txtOrden . ' ASC');
        try {
            return $objConsulta->getArrayResult();  
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    
    }
}