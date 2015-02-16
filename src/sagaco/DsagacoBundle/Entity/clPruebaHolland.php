<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tpPruebaHolland
 *
 * @ORM\Table(name="e_sagaco.tp_prueba_holland", uniqueConstraints={@ORM\UniqueConstraint(name="uk_tp_prueba_holland_co_prueba_co_hollan_seccion", columns={"co_prueba", "co_hollan_seccion"})}, indexes={@ORM\Index(name="IDX_45119CF33EE89582", columns={"co_hollan_seccion"}), @ORM\Index(name="IDX_45119CF3A8023D66", columns={"co_prueba"})})
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clPruebaHollandRepository")
 */
class clPruebaHolland
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_prueba_holland", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tp_prueba_holland_co_prueba_holland", allocationSize=1, initialValue=1)
     */
    private $coPruebaHolland;

    /**
     * @var string
     *
     * @ORM\Column(name="nu_r", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $nuR;

    /**
     * @var string
     *
     * @ORM\Column(name="nu_i", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $nuI;

    /**
     * @var string
     *
     * @ORM\Column(name="nu_a", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $nuA;

    /**
     * @var string
     *
     * @ORM\Column(name="nu_s", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $nuS;

    /**
     * @var string
     *
     * @ORM\Column(name="nu_e", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $nuE;

    /**
     * @var string
     *
     * @ORM\Column(name="nu_c", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $nuC;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_observacion", type="string", length=255, nullable=false)
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
     * @var \ESagaco.tbHollanSeccion
     *
     * @ORM\ManyToOne(targetEntity="clHollanSeccion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_hollan_seccion", referencedColumnName="co_hollan_seccion")
     * })
     */
    private $coHollanSeccion;

    /**
     * @var \ESagaco.tpPrueba
     *
     * @ORM\ManyToOne(targetEntity="clPrueba")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_prueba", referencedColumnName="co_prueba")
     * })
     */
    private $coPrueba;



    /**
     * Get coPruebaHolland
     *
     * @return integer 
     */
    public function getCoPruebaHolland()
    {
        return $this->coPruebaHolland;
    }

    /**
     * Set nuR
     *
     * @param string $nuR
     * @return clPruebaHolland
     */
    public function setNuR($nuR)
    {
        $this->nuR = $nuR;

        return $this;
    }

    /**
     * Get nuR
     *
     * @return string 
     */
    public function getNuR()
    {
        return $this->nuR;
    }

    /**
     * Set nuI
     *
     * @param string $nuI
     * @return clPruebaHolland
     */
    public function setNuI($nuI)
    {
        $this->nuI = $nuI;

        return $this;
    }

    /**
     * Get nuI
     *
     * @return string 
     */
    public function getNuI()
    {
        return $this->nuI;
    }

    /**
     * Set nuA
     *
     * @param string $nuA
     * @return clPruebaHolland
     */
    public function setNuA($nuA)
    {
        $this->nuA = $nuA;

        return $this;
    }

    /**
     * Get nuA
     *
     * @return string 
     */
    public function getNuA()
    {
        return $this->nuA;
    }

    /**
     * Set nuS
     *
     * @param string $nuS
     * @return clPruebaHolland
     */
    public function setNuS($nuS)
    {
        $this->nuS = $nuS;

        return $this;
    }

    /**
     * Get nuS
     *
     * @return string 
     */
    public function getNuS()
    {
        return $this->nuS;
    }

    /**
     * Set nuE
     *
     * @param string $nuE
     * @return clPruebaHolland
     */
    public function setNuE($nuE)
    {
        $this->nuE = $nuE;

        return $this;
    }

    /**
     * Get nuE
     *
     * @return string 
     */
    public function getNuE()
    {
        return $this->nuE;
    }

    /**
     * Set nuC
     *
     * @param string $nuC
     * @return clPruebaHolland
     */
    public function setNuC($nuC)
    {
        $this->nuC = $nuC;

        return $this;
    }

    /**
     * Get nuC
     *
     * @return string 
     */
    public function getNuC()
    {
        return $this->nuC;
    }

    /**
     * Set txObservacion
     *
     * @param string $txObservacion
     * @return clPruebaHolland
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
     * @return clPruebaHolland
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
     * @return clPruebaHolland
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
     * Set coHollanSeccion
     *
     * @param \sagaco\DsagacoBundle\Entity\clHollanSeccion $coHollanSeccion
     * @return clPruebaHolland
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

    /**
     * Set coPrueba
     *
     * @param \sagaco\DsagacoBundle\Entity\clPrueba $coPrueba
     * @return clPruebaHolland
     */
    public function setCoPrueba(\sagaco\DsagacoBundle\Entity\clPrueba $coPrueba = null)
    {
        $this->coPrueba = $coPrueba;

        return $this;
    }

    /**
     * Get coPrueba
     *
     * @return \sagaco\DsagacoBundle\Entity\clPrueba 
     */
    public function getCoPrueba()
    {
        return $this->coPrueba;
    }
}
