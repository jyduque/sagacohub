<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tbConfigEntrevista
 *
 * @ORM\Table(name="e_sagaco.tb_config_entrevista", indexes={@ORM\Index(name="IDX_B9D45B95830BBB13", columns={"co_tipo_entrevista"}), @ORM\Index(name="IDX_B9D45B95EC4A7689", columns={"co_tipo_pregunta"})})
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clConfigEntrevistaRepository")
 */
class clConfigEntrevista
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_pregunta", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tb_config_entrevista_co_pregunta", allocationSize=1, initialValue=1)
     */
    private $coPregunta;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_pregunta", type="string", length=255, nullable=false)
     */
    private $txPregunta;

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_activa", type="boolean", nullable=true)
     */
    private $inActiva;

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
     * @var \ESagaco.tbTipoEntrevista
     *
     * @ORM\ManyToOne(targetEntity="clTipoEntrevista")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_tipo_entrevista", referencedColumnName="co_tipo_entrevista")
     * })
     */
    private $coTipoEntrevista;

    /**
     * @var \ESagaco.tbTipoPregunta
     *
     * @ORM\ManyToOne(targetEntity="clTipoPregunta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_tipo_pregunta", referencedColumnName="co_tipo_pregunta")
     * })
     */
    private $coTipoPregunta;



    /**
     * Get coPregunta
     *
     * @return integer 
     */
    public function getCoPregunta()
    {
        return $this->coPregunta;
    }

    /**
     * Set txPregunta
     *
     * @param string $txPregunta
     * @return clConfigEntrevista
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
     * Set inActiva
     *
     * @param boolean $inActiva
     * @return clConfigEntrevista
     */
    public function setInActiva($inActiva)
    {
        $this->inActiva = $inActiva;

        return $this;
    }

    /**
     * Get inActiva
     *
     * @return boolean 
     */
    public function getInActiva()
    {
        return $this->inActiva;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clConfigEntrevista
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
     * @return clConfigEntrevista
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
     * Set coTipoEntrevista
     *
     * @param \sagaco\DsagacoBundle\Entity\clTipoEntrevista $coTipoEntrevista
     * @return clConfigEntrevista
     */
    public function setCoTipoEntrevista(\sagaco\DsagacoBundle\Entity\clTipoEntrevista $coTipoEntrevista = null)
    {
        $this->coTipoEntrevista = $coTipoEntrevista;

        return $this;
    }

    /**
     * Get coTipoEntrevista
     *
     * @return \sagaco\DsagacoBundle\Entity\clTipoEntrevista 
     */
    public function getCoTipoEntrevista()
    {
        return $this->coTipoEntrevista;
    }

    /**
     * Set coTipoPregunta
     *
     * @param \sagaco\DsagacoBundle\Entity\clTipoPregunta $coTipoPregunta
     * @return clConfigEntrevista
     */
    public function setCoTipoPregunta(\sagaco\DsagacoBundle\Entity\clTipoPregunta $coTipoPregunta = null)
    {
        $this->coTipoPregunta = $coTipoPregunta;

        return $this;
    }

    /**
     * Get coTipoPregunta
     *
     * @return \sagaco\DsagacoBundle\Entity\clTipoPregunta 
     */
    public function getCoTipoPregunta()
    {
        return $this->coTipoPregunta;
    }
}
