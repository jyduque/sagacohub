<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tbDviConfiguracion
 *
 * @ORM\Table(name="e_sagaco.tb_dvi_configuracion")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clDviConfiguracionRepository")
 */
class clDviConfiguracion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_dvi_configuracion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tb_dvi_configuracion_co_dvi_configuracion", allocationSize=1, initialValue=1)
     */
    private $coDviConfiguracion;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_pregunta", type="string", length=255, nullable=false)
     */
    private $txPregunta;

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
     * Get coDviConfiguracion
     *
     * @return integer 
     */
    public function getCoDviConfiguracion()
    {
        return $this->coDviConfiguracion;
    }

    /**
     * Set txPregunta
     *
     * @param string $txPregunta
     * @return clDviConfiguracion
     */
    public function setTxPregunta($txPregunta)
    {
        $this->txPregunta = $txPregunta;

        return $this;
    }

    /**
     * Get txPregunta
     *
     * @return string 
     */
    public function getTxPregunta()
    {
        return $this->txPregunta;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clDviConfiguracion
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
     * @return clDviConfiguracion
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
