<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tbHollanConfiguracion
 *
 * @ORM\Table(name="e_sagaco.tb_hollan_configuracion", uniqueConstraints={@ORM\UniqueConstraint(name="uk_tb_hollan_configuracion_co_hollan_seccion_co_hollan_letra473", columns={"co_hollan_seccion", "co_hollan_letra", "nu_pregunta"})}, indexes={@ORM\Index(name="IDX_B5B84450F2B32154", columns={"co_hollan_letra"}), @ORM\Index(name="IDX_B5B844503EE89582", columns={"co_hollan_seccion"})})
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clHollanConfiguracionRepository")
 */
class clHollanConfiguracion
{
    /**
     * @var string
     *
     * @ORM\Column(name="co_hollan_configuracion", type="string", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tb_hollan_configuracion_co_hollan_configuracion", allocationSize=1, initialValue=1)
     */
    private $coHollanConfiguracion;

    /**
     * @var string
     *
     * @ORM\Column(name="nu_pregunta", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $nuPregunta;

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
     * @var \ESagaco.tbHollanLetra
     *
     * @ORM\ManyToOne(targetEntity="clHollanLetra")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_hollan_letra", referencedColumnName="co_hollan_letra")
     * })
     */
    private $coHollanLetra;

    /**
     * @var \ESagaco.tbHollanSeccion
     *
     * @ORM\ManyToOne(targetEntity="clHollanSeccion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_hollan_seccion", referencedColumnName="co_hollan_seccion")
     * })
     */
    private $coHollanSeccion;



    /**
     * Get coHollanConfiguracion
     *
     * @return string 
     */
    public function getCoHollanConfiguracion()
    {
        return $this->coHollanConfiguracion;
    }

    /**
     * Set nuPregunta
     *
     * @param string $nuPregunta
     * @return clHollanConfiguracion
     */
    public function setNuPregunta($nuPregunta)
    {
        $this->nuPregunta = $nuPregunta;

        return $this;
    }

    /**
     * Get nuPregunta
     *
     * @return string 
     */
    public function getNuPregunta()
    {
        return $this->nuPregunta;
    }

    /**
     * Set txPregunta
     *
     * @param string $txPregunta
     * @return clHollanConfiguracion
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
     * @return clHollanConfiguracion
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
     * @return clHollanConfiguracion
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
     * Set coHollanLetra
     *
     * @param \sagaco\DsagacoBundle\Entity\clHollanLetra $coHollanLetra
     * @return clHollanConfiguracion
     */
    public function setCoHollanLetra(\sagaco\DsagacoBundle\Entity\clHollanLetra $coHollanLetra = null)
    {
        $this->coHollanLetra = $coHollanLetra;

        return $this;
    }

    /**
     * Get coHollanLetra
     *
     * @return \sagaco\DsagacoBundle\Entity\clHollanLetra 
     */
    public function getCoHollanLetra()
    {
        return $this->coHollanLetra;
    }

    /**
     * Set coHollanSeccion
     *
     * @param \sagaco\DsagacoBundle\Entity\clHollanSeccion $coHollanSeccion
     * @return clHollanConfiguracion
     */
    public function setCoHollanSeccion(\sagaco\DsagacoBundle\Entity\clHollanSeccion $coHollanSeccion = null)
    {
        $this->coHollanSeccion = $coHollanSeccion;

        return $this;
    }

    /**
     * Get coHollanSeccion
     *
     * @return \sagaco\DsagacoBundle\Entity\clHollanSeccion 
     */
    public function getCoHollanSeccion()
    {
        return $this->coHollanSeccion;
    }
}
