<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tbOrientador
 *
 * @ORM\Table(name="e_sagaco.tb_orientador", indexes={@ORM\Index(name="IDX_6F75FA7772BC55D8", columns={"co_recurs_humano"})})
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clOrientadorRepository")
 */
class clOrientador
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_orientador", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tb_orientador_co_orientador", allocationSize=1, initialValue=1)
     */
    private $coOrientador;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_profesion", type="string", length=15, nullable=false)
     */
    private $txProfesion;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_period_vigencia", type="string", length=50, nullable=false)
     */
    private $txPeriodVigencia;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_comentario", type="string", length=255, nullable=true)
     */
    private $txComentario;

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
     * @var \ESagaco.viRecursHumano
     *
     * @ORM\ManyToOne(targetEntity="clRecursHumano")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_recurs_humano", referencedColumnName="co_recurs_humano")
     * })
     */
    private $coRecursHumano;

    /**
     * @var \ESagaco.tbCarrera
     *
     * @ORM\ManyToOne(targetEntity="clCarrera")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_carrera", referencedColumnName="co_carrera")
     * })
     */
    private $coCarrera;

    /**
     * Get coOrientador
     *
     * @return integer 
     */
    public function getCoOrientador()
    {
        return $this->coOrientador;
    }

    /**
     * Set txProfesion
     *
     * @param string $txProfesion
     * @return clOrientador
     */
    public function setTxProfesion($txProfesion)
    {
        $this->txProfesion = $txProfesion;

        return $this;
    }

    /**
     * Get txProfesion
     *
     * @return string 
     */
    public function getTxProfesion()
    {
        return $this->txProfesion;
    }

    /**
     * Set txPeriodVigencia
     *
     * @param string $txPeriodVigencia
     * @return clOrientador
     */
    public function setTxPeriodVigencia($txPeriodVigencia)
    {
        $this->txPeriodVigencia = $txPeriodVigencia;

        return $this;
    }

    /**
     * Get txPeriodVigencia
     *
     * @return string 
     */
    public function getTxPeriodVigencia()
    {
        return $this->txPeriodVigencia;
    }

    /**
     * Set txComentario
     *
     * @param string $txComentario
     * @return clOrientador
     */
    public function setTxComentario($txComentario)
    {
        $this->txComentario = $txComentario;

        return $this;
    }

    /**
     * Get txComentario
     *
     * @return string 
     */
    public function getTxComentario()
    {
        return $this->txComentario;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clOrientador
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
     * @return clOrientador
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

    /**
     * Set coRecursHumano
     *
     * @param \sagaco\DsagacoBundle\Entity\clRecursHumano $coRecursHumano
     * @return clOrientador
     */
    public function setCoRecursHumano(\sagaco\DsagacoBundle\Entity\clRecursHumano $coRecursHumano = null)
    {
        $this->coRecursHumano = $coRecursHumano;

        return $this;
    }

    /**
     * Get coRecursHumano
     *
     * @return \sagaco\DsagacoBundle\Entity\clRecursHumano 
     */
    public function getCoRecursHumano()
    {
        return $this->coRecursHumano;
    }   
    
        /**
     * Set coCarrera
     *
     * @param \sagaco\DsagacoBundle\Entity\clCarrera $coCarrera
     * @return clOrientador
     */
    public function setCoCarrera(\sagaco\DsagacoBundle\Entity\clCarrera $coCarrera = null)
    {
        $this->coCarrera = $coCarrera;

        return $this;
    }

    /**
     * Get coCarrera
     *
     * @return \sagaco\DsagacoBundle\Entity\clCarrera 
     */
    public function getCoCarrera()
    {
        return $this->coCarrera;
    }
    
    public function __toString()
    {
        return $this->coRecursHumano->getTxPrimerNombre().' '.$this->coRecursHumano->getTxPrimerApellido();
    }
}
