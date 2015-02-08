<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tbEstadoPrueba
 *
 * @ORM\Table(name="e_sagaco.tb_estado_prueba")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clEstadoPruebaRepository")
 */
class clEstadoPrueba
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_estado_prueba", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tb_estado_prueba_co_estado_prueba", allocationSize=1, initialValue=1)
     */
    private $coEstadoPrueba;

    /**
     * @var string
     *
     * @ORM\Column(name="nb_estado_prueba", type="string", length=20, nullable=false)
     */
    private $nbEstadoPrueba;

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
     * Get coEstadoPrueba
     *
     * @return integer 
     */
    public function getCoEstadoPrueba()
    {
        return $this->coEstadoPrueba;
    }

    /**
     * Set nbEstadoPrueba
     *
     * @param string $nbEstadoPrueba
     * @return clEstadoPrueba
     */
    public function setNbEstadoPrueba($nbEstadoPrueba)
    {
        $this->nbEstadoPrueba = $nbEstadoPrueba;

        return $this;
    }

    /**
     * Get nbEstadoPrueba
     *
     * @return string 
     */
    public function getNbEstadoPrueba()
    {
        return $this->nbEstadoPrueba;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clEstadoPrueba
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
     * @return clEstadoPrueba
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
}
