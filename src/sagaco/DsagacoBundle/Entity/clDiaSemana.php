<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tbDiaSemana
 *
 * @ORM\Table(name="e_sagaco.tb_dia_semana")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clDiaSemanaRepository")
 */
class clDiaSemana
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_dia_semana", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tb_dia_semana_co_dia_semana_1", allocationSize=1, initialValue=1)
     */
    private $coDiaSemana;

    /**
     * @var string
     *
     * @ORM\Column(name="nb_dia_semana", type="string", length=15, nullable=false)
     */
    private $nbDiaSemana;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fh_creacion", type="datetime", nullable=false)
     */
    private $fhCreacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fh_actualizacion", type="datetime", nullable=false)
     */
    private $fhActualizacion;



    /**
     * Get coDiaSemana
     *
     * @return integer 
     */
    public function getCoDiaSemana()
    {
        return $this->coDiaSemana;
    }

    /**
     * Set nbDiaSemana
     *
     * @param string $nbDiaSemana
     * @return clDiaSemana
     */
    public function setNbDiaSemana($nbDiaSemana)
    {
        $this->nbDiaSemana = $nbDiaSemana;

        return $this;
    }

    /**
     * Get nbDiaSemana
     *
     * @return string 
     */
    public function getNbDiaSemana()
    {
        return $this->nbDiaSemana;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clDiaSemana
     */
    public function setFhCreacion($fhCreacion)
    {
        $this->fhCreacion = $fhCreacion;

        return $this;
    }

    /**
     * Get fhCreacion
     *
     * @return \DateTime 
     */
    public function getFhCreacion()
    {
        return $this->fhCreacion;
    }

    /**
     * Set fhActualizacion
     *
     * @param \DateTime $fhActualizacion
     * @return clDiaSemana
     */
    public function setFhActualizacion($fhActualizacion)
    {
        $this->fhActualizacion = $fhActualizacion;

        return $this;
    }

    /**
     * Get fhActualizacion
     *
     * @return \DateTime 
     */
    public function getFhActualizacion()
    {
        return $this->fhActualizacion;
    }
    
    public function __toString()
    {
        return $this->getNbDiaSemana();
    }
}
