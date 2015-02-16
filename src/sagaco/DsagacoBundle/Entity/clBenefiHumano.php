<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.viBenefiHumano
 *
 * @ORM\Table(name="e_sagaco.vi_benefi_humano", uniqueConstraints={@ORM\UniqueConstraint(name="uk_vi_benefi_humano_co_recurs_humano_nu_cedula", columns={"nu_cedula"})}, indexes={@ORM\Index(name="IDX_B1B412B472BC55D8", columns={"co_recurs_humano"})})
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clBenefiHumanoRepository")
 */
class clBenefiHumano
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_benefi_humano", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_vi_benefi_humano_co_benefi_humano", allocationSize=1, initialValue=1)
     */
    private $coBenefiHumano;

    /**
     * @var string
     *
     * @ORM\Column(name="nu_cedula", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $nuCedula;

    /**
     * @var string
     *
     * @ORM\Column(name="in_nacionalidad", type="string", length=2, nullable=false)
     */
    private $inNacionalidad;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_primer_nombre", type="string", length=15, nullable=false)
     */
    private $txPrimerNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_segund_nombre", type="string", length=15, nullable=true)
     */
    private $txSegundNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_primer_apellido", type="string", length=15, nullable=false)
     */
    private $txPrimerApellido;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_segund_apellido", type="string", length=15, nullable=true)
     */
    private $txSegundApellido;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_parentesco", type="string", length=6, nullable=false)
     */
    private $txParentesco;

    /**
     * @var string
     *
     * @ORM\Column(name="in_sexo", type="string", length=2, nullable=false)
     */
    private $inSexo;

    /**
     * @var string
     *
     * @ORM\Column(name="in_estado_civil", type="string", length=2, nullable=false)
     */
    private $inEstadoCivil;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_correo_electronico", type="string", length=200, nullable=true)
     */
    private $txCorreoElectronico;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_telefo_habitacion", type="string", length=15, nullable=true)
     */
    private $txTelefoHabitacion;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_telefo_celular", type="string", length=15, nullable=true)
     */
    private $txTelefoCelular;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_lugar_residencia", type="string", length=255, nullable=true)
     */
    private $txLugarResidencia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fh_creacion", type="datetime", nullable=true)
     */
    private $fhCreacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fh_actualizacion", type="datetime", nullable=true)
     */
    private $fhActualizacion;

    /**
     * @var \ESagaco.viRecursHumano
     *
     * @ORM\ManyToOne(targetEntity="ESagaco.viRecursHumano")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_recurs_humano", referencedColumnName="co_recurs_humano")
     * })
     */
    private $coRecursHumano;



    /**
     * Get coBenefiHumano
     *
     * @return integer 
     */
    public function getCoBenefiHumano()
    {
        return $this->coBenefiHumano;
    }

    /**
     * Set nuCedula
     *
     * @param string $nuCedula
     * @return clBenefiHumano
     */
    public function setNuCedula($nuCedula)
    {
        $this->nuCedula = $nuCedula;

        return $this;
    }

    /**
     * Get nuCedula
     *
     * @return string 
     */
    public function getNuCedula()
    {
        return $this->nuCedula;
    }

    /**
     * Set inNacionalidad
     *
     * @param string $inNacionalidad
     * @return clBenefiHumano
     */
    public function setInNacionalidad($inNacionalidad)
    {
        $this->inNacionalidad = $inNacionalidad;

        return $this;
    }

    /**
     * Get inNacionalidad
     *
     * @return string 
     */
    public function getInNacionalidad()
    {
        return $this->inNacionalidad;
    }

    /**
     * Set txPrimerNombre
     *
     * @param string $txPrimerNombre
     * @return clBenefiHumano
     */
    public function setTxPrimerNombre($txPrimerNombre)
    {
        $this->txPrimerNombre = $txPrimerNombre;

        return $this;
    }

    /**
     * Get txPrimerNombre
     *
     * @return string 
     */
    public function getTxPrimerNombre()
    {
        return $this->txPrimerNombre;
    }

    /**
     * Set txSegundNombre
     *
     * @param string $txSegundNombre
     * @return clBenefiHumano
     */
    public function setTxSegundNombre($txSegundNombre)
    {
        $this->txSegundNombre = $txSegundNombre;

        return $this;
    }

    /**
     * Get txSegundNombre
     *
     * @return string 
     */
    public function getTxSegundNombre()
    {
        return $this->txSegundNombre;
    }

    /**
     * Set txPrimerApellido
     *
     * @param string $txPrimerApellido
     * @return clBenefiHumano
     */
    public function setTxPrimerApellido($txPrimerApellido)
    {
        $this->txPrimerApellido = $txPrimerApellido;

        return $this;
    }

    /**
     * Get txPrimerApellido
     *
     * @return string 
     */
    public function getTxPrimerApellido()
    {
        return $this->txPrimerApellido;
    }

    /**
     * Set txSegundApellido
     *
     * @param string $txSegundApellido
     * @return clBenefiHumano
     */
    public function setTxSegundApellido($txSegundApellido)
    {
        $this->txSegundApellido = $txSegundApellido;

        return $this;
    }

    /**
     * Get txSegundApellido
     *
     * @return string 
     */
    public function getTxSegundApellido()
    {
        return $this->txSegundApellido;
    }

    /**
     * Set txParentesco
     *
     * @param string $txParentesco
     * @return clBenefiHumano
     */
    public function setTxParentesco($txParentesco)
    {
        $this->txParentesco = $txParentesco;

        return $this;
    }

    /**
     * Get txParentesco
     *
     * @return string 
     */
    public function getTxParentesco()
    {
        return $this->txParentesco;
    }

    /**
     * Set inSexo
     *
     * @param string $inSexo
     * @return clBenefiHumano
     */
    public function setInSexo($inSexo)
    {
        $this->inSexo = $inSexo;

        return $this;
    }

    /**
     * Get inSexo
     *
     * @return string 
     */
    public function getInSexo()
    {
        return $this->inSexo;
    }

    /**
     * Set inEstadoCivil
     *
     * @param string $inEstadoCivil
     * @return clBenefiHumano
     */
    public function setInEstadoCivil($inEstadoCivil)
    {
        $this->inEstadoCivil = $inEstadoCivil;

        return $this;
    }

    /**
     * Get inEstadoCivil
     *
     * @return string 
     */
    public function getInEstadoCivil()
    {
        return $this->inEstadoCivil;
    }

    /**
     * Set txCorreoElectronico
     *
     * @param string $txCorreoElectronico
     * @return clBenefiHumano
     */
    public function setTxCorreoElectronico($txCorreoElectronico)
    {
        $this->txCorreoElectronico = $txCorreoElectronico;

        return $this;
    }

    /**
     * Get txCorreoElectronico
     *
     * @return string 
     */
    public function getTxCorreoElectronico()
    {
        return $this->txCorreoElectronico;
    }

    /**
     * Set txTelefoHabitacion
     *
     * @param string $txTelefoHabitacion
     * @return clBenefiHumano
     */
    public function setTxTelefoHabitacion($txTelefoHabitacion)
    {
        $this->txTelefoHabitacion = $txTelefoHabitacion;

        return $this;
    }

    /**
     * Get txTelefoHabitacion
     *
     * @return string 
     */
    public function getTxTelefoHabitacion()
    {
        return $this->txTelefoHabitacion;
    }

    /**
     * Set txTelefoCelular
     *
     * @param string $txTelefoCelular
     * @return clBenefiHumano
     */
    public function setTxTelefoCelular($txTelefoCelular)
    {
        $this->txTelefoCelular = $txTelefoCelular;

        return $this;
    }

    /**
     * Get txTelefoCelular
     *
     * @return string 
     */
    public function getTxTelefoCelular()
    {
        return $this->txTelefoCelular;
    }

    /**
     * Set txLugarResidencia
     *
     * @param string $txLugarResidencia
     * @return clBenefiHumano
     */
    public function setTxLugarResidencia($txLugarResidencia)
    {
        $this->txLugarResidencia = $txLugarResidencia;

        return $this;
    }

    /**
     * Get txLugarResidencia
     *
     * @return string 
     */
    public function getTxLugarResidencia()
    {
        return $this->txLugarResidencia;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clBenefiHumano
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
     * @return clBenefiHumano
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
     * @param \sagaco\DsagacoBundle\Entity\ESagaco.viRecursHumano $coRecursHumano
     * @return clBenefiHumano
     */
    public function setCoRecursHumano(\sagaco\DsagacoBundle\Entity\clRecursHumano $coRecursHumano = null)
    {
        $this->coRecursHumano = $coRecursHumano;

        return $this;
    }

    /**
     * Get coRecursHumano
     *
     * @return \sagaco\DsagacoBundle\Entity\ESagaco.viRecursHumano 
     */
    public function getCoRecursHumano()
    {
        return $this->coRecursHumano;
    }
}
