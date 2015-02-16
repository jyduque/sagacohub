<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tpPrueba
 *
 * @ORM\Table(name="e_sagaco.tp_prueba", uniqueConstraints={@ORM\UniqueConstraint(name="uk_tp_prueba_co_caso_co_tipo_prueba", columns={"co_tipo_prueba", "co_caso"})}, indexes={@ORM\Index(name="IDX_31E4DCE681A7BB42", columns={"co_estado_prueba"}), @ORM\Index(name="IDX_31E4DCE6FE244094", columns={"co_tipo_prueba"}), @ORM\Index(name="IDX_31E4DCE6DD4AC395", columns={"co_caso"})})
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clPruebaRepository")
 */
class clPrueba
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_prueba", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tp_prueba_co_prueba_3", allocationSize=1, initialValue=1)
     */
    private $coPrueba;

    /**
     * @var string
     *
     * @ORM\Column(name="nu_ultima_pregunta", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $nuUltimaPregunta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fe_presentar", type="date", nullable=true)
     */
    private $fePresentar;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ho_presentar", type="time", nullable=true)
     */
    private $hoPresentar;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fh_inicio", type="datetime", nullable=true)
     */
    private $fhInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fh_culminacion", type="datetime", nullable=true)
     */
    private $fhCulminacion;

    /**
     * @var \ESagaco.tbEstadoPrueba
     *
     * @ORM\ManyToOne(targetEntity="clEstadoPrueba")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_estado_prueba", referencedColumnName="co_estado_prueba")
     * })
     */
    private $coEstadoPrueba;

    /**
     * @var \ESagaco.tbTipoPrueba
     *
     * @ORM\ManyToOne(targetEntity="clTipoPrueba")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_tipo_prueba", referencedColumnName="co_tipo_prueba")
     * })
     */
    private $coTipoPrueba;

    /**
     * @var \ESagaco.tpCaso
     *
     * @ORM\ManyToOne(targetEntity="clCaso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_caso", referencedColumnName="co_caso")
     * })
     */
    private $coCaso;



    /**
     * Get coPrueba
     *
     * @return integer 
     */
    public function getCoPrueba()
    {
        return $this->coPrueba;
    }

    /**
     * Set nuUltimaPregunta
     *
     * @param string $nuUltimaPregunta
     * @return clPrueba
     */
    public function setNuUltimaPregunta($nuUltimaPregunta)
    {
        $this->nuUltimaPregunta = $nuUltimaPregunta;

        return $this;
    }

    /**
     * Get nuUltimaPregunta
     *
     * @return string 
     */
    public function getNuUltimaPregunta()
    {
        return $this->nuUltimaPregunta;
    }

    /**
     * Set fePresentar
     *
     * @param \DateTime $fePresentar
     * @return clPrueba
     */
    public function setFePresentar($fePresentar)
    {
        $this->fePresentar = $fePresentar;

        return $this;
    }

    /**
     * Get fePresentar
     *
     * @return \DateTime 
     */
    public function getFePresentar()
    {
        return $this->fePresentar;
    }

    /**
     * Set hoPresentar
     *
     * @param \DateTime $hoPresentar
     * @return clPrueba
     */
    public function setHoPresentar($hoPresentar)
    {
        $this->hoPresentar = $hoPresentar;

        return $this;
    }

    /**
     * Get hoPresentar
     *
     * @return \DateTime 
     */
    public function getHoPresentar()
    {
        return $this->hoPresentar;
    }

    /**
     * Set fhInicio
     *
     * @param \DateTime $fhInicio
     * @return clPrueba
     */
    public function setFhInicio($fhInicio)
    {
        $this->fhInicio = $fhInicio;

        return $this;
    }

    /**
     * Get fhInicio
     *
     * @return \DateTime 
     */
    public function getFhInicio()
    {
        return $this->fhInicio;
    }

    /**
     * Set fhCulminacion
     *
     * @param \DateTime $fhCulminacion
     * @return clPrueba
     */
    public function setFhCulminacion($fhCulminacion)
    {
        $this->fhCulminacion = $fhCulminacion;

        return $this;
    }

    /**
     * Get fhCulminacion
     *
     * @return \DateTime 
     */
    public function getFhCulminacion()
    {
        return $this->fhCulminacion;
    }

    /**
     * Set coEstadoPrueba
     *
     * @param \sagaco\DsagacoBundle\Entity\clEstadoPrueba $coEstadoPrueba
     * @return clPrueba
     */
    public function setCoEstadoPrueba(\sagaco\DsagacoBundle\Entity\clEstadoPrueba $coEstadoPrueba = null)
    {
        $this->coEstadoPrueba = $coEstadoPrueba;

        return $this;
    }

    /**
     * Get coEstadoPrueba
     *
     * @return \sagaco\DsagacoBundle\Entity\clEstadoPrueba 
     */
    public function getCoEstadoPrueba()
    {
        return $this->coEstadoPrueba;
    }

    /**
     * Set coTipoPrueba
     *
     * @param \sagaco\DsagacoBundle\Entity\clTipoPrueba $coTipoPrueba
     * @return clPrueba
     */
    public function setCoTipoPrueba(\sagaco\DsagacoBundle\Entity\clTipoPrueba $coTipoPrueba = null)
    {
        $this->coTipoPrueba = $coTipoPrueba;

        return $this;
    }

    /**
     * Get coTipoPrueba
     *
     * @return \sagaco\DsagacoBundle\Entity\clTipoPrueba 
     */
    public function getCoTipoPrueba()
    {
        return $this->coTipoPrueba;
    }

    /**
     * Set coCaso
     *
     * @param \sagaco\DsagacoBundle\Entity\clCaso $coCaso
     * @return clPrueba
     */
    public function setCoCaso(\sagaco\DsagacoBundle\Entity\clCaso $coCaso = null)
    {
        $this->coCaso = $coCaso;

        return $this;
    }

    /**
     * Get coCaso
     *
     * @return \sagaco\DsagacoBundle\Entity\clCaso 
     */
    public function getCoCaso()
    {
        return $this->coCaso;
    }
}
