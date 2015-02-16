<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tpDviRespuesta
 *
 * @ORM\Table(name="e_sagaco.tp_dvi_respuesta", indexes={@ORM\Index(name="IDX_45150555A8023D66", columns={"co_prueba"})})
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clDviRespuestaRepository")
 */
class clDviRespuesta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_dvi_respuesta", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tp_dvi_respuesta_co_dvi_respuesta", allocationSize=1, initialValue=1)
     */
    private $coDviRespuesta;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_observacion", type="string", length=255, nullable=true)
     */
    private $txObservacion;

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
     * @var \ESagaco.tpPrueba
     *
     * @ORM\ManyToOne(targetEntity="ESagaco.tpPrueba")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_prueba", referencedColumnName="co_prueba")
     * })
     */
    private $coPrueba;



    /**
     * Get coDviRespuesta
     *
     * @return integer 
     */
    public function getCoDviRespuesta()
    {
        return $this->coDviRespuesta;
    }

    /**
     * Set txObservacion
     *
     * @param string $txObservacion
     * @return clDviRespuesta
     */
    public function setTxObservacion($txObservacion)
    {
        $this->txObservacion = $txObservacion;

        return $this;
    }

    /**
     * Get txObservacion
     *
     * @return string 
     */
    public function getTxObservacion()
    {
        return $this->txObservacion;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clDviRespuesta
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
     * @return clDviRespuesta
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
     * Set coPrueba
     *
     * @param \sagaco\DsagacoBundle\Entity\ESagaco.tpPrueba $coPrueba
     * @return clDviRespuesta
     */
    public function setCoPrueba(\sagaco\DsagacoBundle\Entity\clPrueba $coPrueba = null)
    {
        $this->coPrueba = $coPrueba;

        return $this;
    }

    /**
     * Get coPrueba
     *
     * @return \sagaco\DsagacoBundle\Entity\ESagaco.tpPrueba 
     */
    public function getCoPrueba()
    {
        return $this->coPrueba;
    }
}
