<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tbDviBaremo
 *
 * @ORM\Table(name="e_sagaco.tb_dvi_baremo", uniqueConstraints={@ORM\UniqueConstraint(name="uk_tb_dvi_baremo_nu_dvi_respuesta", columns={"nu_dvi_respuesta"})})
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clDviBaremoRepository")
 */
class clDviBaremo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_dvi_baremo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tb_dvi_baremo_co_dvi_baremo", allocationSize=1, initialValue=1)
     */
    private $coDviBaremo;

    /**
     * @var string
     *
     * @ORM\Column(name="nu_dvi_respuesta", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $nuDviRespuesta;

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_intere_1", type="boolean", nullable=false)
     */
    private $inIntere1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_intere_2", type="boolean", nullable=false)
     */
    private $inIntere2;

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_intere_2_1", type="boolean", nullable=false)
     */
    private $inIntere21;

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_intere_4", type="boolean", nullable=false)
     */
    private $inIntere4;

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_intere_5", type="boolean", nullable=false)
     */
    private $inIntere5;

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_intere_6", type="boolean", nullable=false)
     */
    private $inIntere6;

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_intere_7", type="boolean", nullable=false)
     */
    private $inIntere7;

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_intere_8", type="boolean", nullable=false)
     */
    private $inIntere8;

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_intere_9", type="boolean", nullable=false)
     */
    private $inIntere9;

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_intere_10", type="boolean", nullable=false)
     */
    private $inIntere10;

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_intere_11", type="boolean", nullable=false)
     */
    private $inIntere11;

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_intere_12", type="boolean", nullable=false)
     */
    private $inIntere12;

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_intere_13", type="boolean", nullable=false)
     */
    private $inIntere13;

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_intere_14", type="boolean", nullable=false)
     */
    private $inIntere14;

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_intere_15", type="boolean", nullable=false)
     */
    private $inIntere15;

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_intere_16", type="boolean", nullable=false)
     */
    private $inIntere16;

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_intere_17", type="boolean", nullable=false)
     */
    private $inIntere17;

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_intere_18", type="boolean", nullable=false)
     */
    private $inIntere18;

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
     * Get coDviBaremo
     *
     * @return integer 
     */
    public function getCoDviBaremo()
    {
        return $this->coDviBaremo;
    }

    /**
     * Set nuDviRespuesta
     *
     * @param string $nuDviRespuesta
     * @return clDviBaremo
     */
    public function setNuDviRespuesta($nuDviRespuesta)
    {
        $this->nuDviRespuesta = $nuDviRespuesta;

        return $this;
    }

    /**
     * Get nuDviRespuesta
     *
     * @return string 
     */
    public function getNuDviRespuesta()
    {
        return $this->nuDviRespuesta;
    }

    /**
     * Set inIntere1
     *
     * @param boolean $inIntere1
     * @return clDviBaremo
     */
    public function setInIntere1($inIntere1)
    {
        $this->inIntere1 = $inIntere1;

        return $this;
    }

    /**
     * Get inIntere1
     *
     * @return boolean 
     */
    public function getInIntere1()
    {
        return $this->inIntere1;
    }

    /**
     * Set inIntere2
     *
     * @param boolean $inIntere2
     * @return clDviBaremo
     */
    public function setInIntere2($inIntere2)
    {
        $this->inIntere2 = $inIntere2;

        return $this;
    }

    /**
     * Get inIntere2
     *
     * @return boolean 
     */
    public function getInIntere2()
    {
        return $this->inIntere2;
    }

    /**
     * Set inIntere21
     *
     * @param boolean $inIntere21
     * @return clDviBaremo
     */
    public function setInIntere21($inIntere21)
    {
        $this->inIntere21 = $inIntere21;

        return $this;
    }

    /**
     * Get inIntere21
     *
     * @return boolean 
     */
    public function getInIntere21()
    {
        return $this->inIntere21;
    }

    /**
     * Set inIntere4
     *
     * @param boolean $inIntere4
     * @return clDviBaremo
     */
    public function setInIntere4($inIntere4)
    {
        $this->inIntere4 = $inIntere4;

        return $this;
    }

    /**
     * Get inIntere4
     *
     * @return boolean 
     */
    public function getInIntere4()
    {
        return $this->inIntere4;
    }

    /**
     * Set inIntere5
     *
     * @param boolean $inIntere5
     * @return clDviBaremo
     */
    public function setInIntere5($inIntere5)
    {
        $this->inIntere5 = $inIntere5;

        return $this;
    }

    /**
     * Get inIntere5
     *
     * @return boolean 
     */
    public function getInIntere5()
    {
        return $this->inIntere5;
    }

    /**
     * Set inIntere6
     *
     * @param boolean $inIntere6
     * @return clDviBaremo
     */
    public function setInIntere6($inIntere6)
    {
        $this->inIntere6 = $inIntere6;

        return $this;
    }

    /**
     * Get inIntere6
     *
     * @return boolean 
     */
    public function getInIntere6()
    {
        return $this->inIntere6;
    }

    /**
     * Set inIntere7
     *
     * @param boolean $inIntere7
     * @return clDviBaremo
     */
    public function setInIntere7($inIntere7)
    {
        $this->inIntere7 = $inIntere7;

        return $this;
    }

    /**
     * Get inIntere7
     *
     * @return boolean 
     */
    public function getInIntere7()
    {
        return $this->inIntere7;
    }

    /**
     * Set inIntere8
     *
     * @param boolean $inIntere8
     * @return clDviBaremo
     */
    public function setInIntere8($inIntere8)
    {
        $this->inIntere8 = $inIntere8;

        return $this;
    }

    /**
     * Get inIntere8
     *
     * @return boolean 
     */
    public function getInIntere8()
    {
        return $this->inIntere8;
    }

    /**
     * Set inIntere9
     *
     * @param boolean $inIntere9
     * @return clDviBaremo
     */
    public function setInIntere9($inIntere9)
    {
        $this->inIntere9 = $inIntere9;

        return $this;
    }

    /**
     * Get inIntere9
     *
     * @return boolean 
     */
    public function getInIntere9()
    {
        return $this->inIntere9;
    }

    /**
     * Set inIntere10
     *
     * @param boolean $inIntere10
     * @return clDviBaremo
     */
    public function setInIntere10($inIntere10)
    {
        $this->inIntere10 = $inIntere10;

        return $this;
    }

    /**
     * Get inIntere10
     *
     * @return boolean 
     */
    public function getInIntere10()
    {
        return $this->inIntere10;
    }

    /**
     * Set inIntere11
     *
     * @param boolean $inIntere11
     * @return clDviBaremo
     */
    public function setInIntere11($inIntere11)
    {
        $this->inIntere11 = $inIntere11;

        return $this;
    }

    /**
     * Get inIntere11
     *
     * @return boolean 
     */
    public function getInIntere11()
    {
        return $this->inIntere11;
    }

    /**
     * Set inIntere12
     *
     * @param boolean $inIntere12
     * @return clDviBaremo
     */
    public function setInIntere12($inIntere12)
    {
        $this->inIntere12 = $inIntere12;

        return $this;
    }

    /**
     * Get inIntere12
     *
     * @return boolean 
     */
    public function getInIntere12()
    {
        return $this->inIntere12;
    }

    /**
     * Set inIntere13
     *
     * @param boolean $inIntere13
     * @return clDviBaremo
     */
    public function setInIntere13($inIntere13)
    {
        $this->inIntere13 = $inIntere13;

        return $this;
    }

    /**
     * Get inIntere13
     *
     * @return boolean 
     */
    public function getInIntere13()
    {
        return $this->inIntere13;
    }

    /**
     * Set inIntere14
     *
     * @param boolean $inIntere14
     * @return clDviBaremo
     */
    public function setInIntere14($inIntere14)
    {
        $this->inIntere14 = $inIntere14;

        return $this;
    }

    /**
     * Get inIntere14
     *
     * @return boolean 
     */
    public function getInIntere14()
    {
        return $this->inIntere14;
    }

    /**
     * Set inIntere15
     *
     * @param boolean $inIntere15
     * @return clDviBaremo
     */
    public function setInIntere15($inIntere15)
    {
        $this->inIntere15 = $inIntere15;

        return $this;
    }

    /**
     * Get inIntere15
     *
     * @return boolean 
     */
    public function getInIntere15()
    {
        return $this->inIntere15;
    }

    /**
     * Set inIntere16
     *
     * @param boolean $inIntere16
     * @return clDviBaremo
     */
    public function setInIntere16($inIntere16)
    {
        $this->inIntere16 = $inIntere16;

        return $this;
    }

    /**
     * Get inIntere16
     *
     * @return boolean 
     */
    public function getInIntere16()
    {
        return $this->inIntere16;
    }

    /**
     * Set inIntere17
     *
     * @param boolean $inIntere17
     * @return clDviBaremo
     */
    public function setInIntere17($inIntere17)
    {
        $this->inIntere17 = $inIntere17;

        return $this;
    }

    /**
     * Get inIntere17
     *
     * @return boolean 
     */
    public function getInIntere17()
    {
        return $this->inIntere17;
    }

    /**
     * Set inIntere18
     *
     * @param boolean $inIntere18
     * @return clDviBaremo
     */
    public function setInIntere18($inIntere18)
    {
        $this->inIntere18 = $inIntere18;

        return $this;
    }

    /**
     * Get inIntere18
     *
     * @return boolean 
     */
    public function getInIntere18()
    {
        return $this->inIntere18;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clDviBaremo
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
     * @return clDviBaremo
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
