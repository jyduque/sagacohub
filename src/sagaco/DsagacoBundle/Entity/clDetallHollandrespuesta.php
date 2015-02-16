<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tpDetallHollandrespuesta
 *
 * @ORM\Table(name="e_sagaco.tp_detall_hollandrespuesta", uniqueConstraints={@ORM\UniqueConstraint(name="uk_tp_detall_hollandrespuesta_co_prueba_holland_co_hollan_se498", columns={"co_prueba_holland"})}, indexes={@ORM\Index(name="IDX_5EE775CEC7916766", columns={"co_hollan_configuracion"})})
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clDetallHollandrespuestaRepository")
 */
class clDetallHollandrespuesta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_detall_hollandrespuesta", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tp_detall_hollandrespuesta_co_detall_hollandrespuesta", allocationSize=1, initialValue=1)
     */
    private $coDetallHollandrespuesta;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_respue_ocupacion", type="string", length=100, nullable=true)
     */
    private $txRespueOcupacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_respue_agrado", type="boolean", nullable=true)
     */
    private $inRespueAgrado;

    /**
     * @var string
     *
     * @ORM\Column(name="nu_respue_autoevaluacion", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $nuRespueAutoevaluacion;

    /**
     * @var \ESagaco.tbHollanConfiguracion
     *
     * @ORM\ManyToOne(targetEntity="clHollanConfiguracion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_hollan_configuracion", referencedColumnName="co_hollan_configuracion")
     * })
     */
    private $coHollanConfiguracion;

    /**
     * @var \ESagaco.tpPruebaHolland
     *
     * @ORM\ManyToOne(targetEntity="clPruebaHolland")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_prueba_holland", referencedColumnName="co_prueba_holland")
     * })
     */
    private $coPruebaHolland;



    /**
     * Get coDetallHollandrespuesta
     *
     * @return integer 
     */
    public function getCoDetallHollandrespuesta()
    {
        return $this->coDetallHollandrespuesta;
    }

    /**
     * Set txRespueOcupacion
     *
     * @param string $txRespueOcupacion
     * @return clDetallHollandrespuesta
     */
    public function setTxRespueOcupacion($txRespueOcupacion)
    {
        $this->txRespueOcupacion = $txRespueOcupacion;

        return $this;
    }

    /**
     * Get txRespueOcupacion
     *
     * @return string 
     */
    public function getTxRespueOcupacion()
    {
        return $this->txRespueOcupacion;
    }

    /**
     * Set inRespueAgrado
     *
     * @param boolean $inRespueAgrado
     * @return clDetallHollandrespuesta
     */
    public function setInRespueAgrado($inRespueAgrado)
    {
        $this->inRespueAgrado = $inRespueAgrado;

        return $this;
    }

    /**
     * Get inRespueAgrado
     *
     * @return boolean 
     */
    public function getInRespueAgrado()
    {
        return $this->inRespueAgrado;
    }

    /**
     * Set nuRespueAutoevaluacion
     *
     * @param string $nuRespueAutoevaluacion
     * @return clDetallHollandrespuesta
     */
    public function setNuRespueAutoevaluacion($nuRespueAutoevaluacion)
    {
        $this->nuRespueAutoevaluacion = $nuRespueAutoevaluacion;

        return $this;
    }

    /**
     * Get nuRespueAutoevaluacion
     *
     * @return string 
     */
    public function getNuRespueAutoevaluacion()
    {
        return $this->nuRespueAutoevaluacion;
    }

    /**
     * Set coHollanConfiguracion
     *
     * @param \sagaco\DsagacoBundle\Entity\clHollanConfiguracion $coHollanConfiguracion
     * @return clDetallHollandrespuesta
     */
    public function setCoHollanConfiguracion(\sagaco\DsagacoBundle\Entity\clHollanConfiguracion $coHollanConfiguracion = null)
    {
        $this->coHollanConfiguracion = $coHollanConfiguracion;

        return $this;
    }

    /**
     * Get coHollanConfiguracion
     *
     * @return \sagaco\DsagacoBundle\Entity\clHollanConfiguracion 
     */
    public function getCoHollanConfiguracion()
    {
        return $this->coHollanConfiguracion;
    }

    /**
     * Set coPruebaHolland
     *
     * @param \sagaco\DsagacoBundle\Entity\clPruebaHolland $coPruebaHolland
     * @return clDetallHollandrespuesta
     */
    public function setCoPruebaHolland(\sagaco\DsagacoBundle\Entity\clPruebaHolland $coPruebaHolland = null)
    {
        $this->coPruebaHolland = $coPruebaHolland;

        return $this;
    }

    /**
     * Get coPruebaHolland
     *
     * @return \sagaco\DsagacoBundle\Entity\clPruebaHolland 
     */
    public function getCoPruebaHolland()
    {
        return $this->coPruebaHolland;
    }
}
