<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace sagaco\DsagacoBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Description of clDisponCalendario
 *
 * @author Jorge Duque
 */
class clDisponCalendario {
    
    protected $idCalendario;
    
    public $hoCalendario;

    protected $diDisponDocente;
    
    public function __construct()
    {
        $this->diDisponDocente = new ArrayCollection();
    }
    
    public function getIdCalendario()
    {
        return $this->idCalendario;
    }

    public function setIdCalendario($idCalendario)
    {
        $this->idCalendario = $idCalendario;
    }
    
    public function getHoCalendario()
    {
        return $this->hoCalendario;
    }

    public function setHoCalendario($hoCalendario)
    {
        $this->hoCalendario = $hoCalendario;
    }
    
    public function getDiDisponDocente()
    {
        return $this->diDisponDocente;
    }

    public function setDiDisponDocente(ArrayCollection $diDisponDocente)
    {
        $this->diDisponDocente = $diDisponDocente;
    }
    
    
}
