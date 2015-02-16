<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tbBenefiEstudiante
 *
 * @ORM\Table(name="e_sagaco.tb_benefi_estudiante", uniqueConstraints={@ORM\UniqueConstraint(name="uk_tb_benefi_estudiante_co_contro_estudio_nu_cedula", columns={"co_contro_estudio", "nu_cedula"})}, indexes={@ORM\Index(name="IDX_1F029D8160F526BB", columns={"co_ciudad"}), @ORM\Index(name="IDX_1F029D81FFD41E0D", columns={"co_estado_civil"}), @ORM\Index(name="IDX_1F029D814E73AB1F", columns={"co_genero"}), @ORM\Index(name="IDX_1F029D81705972E9", columns={"co_parentesco"}), @ORM\Index(name="IDX_1F029D81D8A3436", columns={"co_contro_estudio"})})
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clBenefiEstudianteRepository")
 */
class clBenefiEstudiante
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_benefi_estudiante", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tb_benefi_estudiante_co_benefi_estudiante", allocationSize=1, initialValue=1)
     */
    private $coBenefiEstudiante;

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
     * @ORM\Column(name="tx_primer_nombre", type="string", length=20, nullable=false)
     */
    private $txPrimerNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_segung_nombre", type="string", length=20, nullable=true)
     */
    private $txSegungNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_primer_apellido", type="string", length=20, nullable=false)
     */
    private $txPrimerApellido;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_segund_apellido", type="string", length=20, nullable=true)
     */
    private $txSegundApellido;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_direccion1", type="string", length=50, nullable=false)
     */
    private $txDireccion1;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_direccion2", type="string", length=50, nullable=true)
     */
    private $txDireccion2;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_telefo_casa", type="string", length=16, nullable=true)
     */
    private $txTelefoCasa;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_telefo_celular", type="string", length=15, nullable=true)
     */
    private $txTelefoCelular;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_correo_electronico", type="string", length=80, nullable=true)
     */
    private $txCorreoElectronico;

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
     * @var \ESagaco.tbCiudad
     *
     * @ORM\ManyToOne(targetEntity="ESagaco.tbCiudad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_ciudad", referencedColumnName="co_ciudad")
     * })
     */
    private $coCiudad;

    /**
     * @var \ESagaco.tbEstadoCivil
     *
     * @ORM\ManyToOne(targetEntity="ESagaco.tbEstadoCivil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_estado_civil", referencedColumnName="co_estado_civil")
     * })
     */
    private $coEstadoCivil;

    /**
     * @var \ESagaco.tbGenero
     *
     * @ORM\ManyToOne(targetEntity="ESagaco.tbGenero")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_genero", referencedColumnName="co_genero")
     * })
     */
    private $coGenero;

    /**
     * @var \ESagaco.tbParentesco
     *
     * @ORM\ManyToOne(targetEntity="ESagaco.tbParentesco")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_parentesco", referencedColumnName="co_parentesco")
     * })
     */
    private $coParentesco;

    /**
     * @var \ESagaco.viControEstudio
     *
     * @ORM\ManyToOne(targetEntity="ESagaco.viControEstudio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_contro_estudio", referencedColumnName="co_contro_estudio")
     * })
     */
    private $coControEstudio;



    /**
     * Get coBenefiEstudiante
     *
     * @return integer 
     */
    public function getCoBenefiEstudiante()
    {
        return $this->coBenefiEstudiante;
    }

    /**
     * Set nuCedula
     *
     * @param string $nuCedula
     * @return clBenefiEstudiante
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
     * @return clBenefiEstudiante
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
     * @return clBenefiEstudiante
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
     * Set txSegungNombre
     *
     * @param string $txSegungNombre
     * @return clBenefiEstudiante
     */
    public function setTxSegungNombre($txSegungNombre)
    {
        $this->txSegungNombre = $txSegungNombre;

        return $this;
    }

    /**
     * Get txSegungNombre
     *
     * @return string 
     */
    public function getTxSegungNombre()
    {
        return $this->txSegungNombre;
    }

    /**
     * Set txPrimerApellido
     *
     * @param string $txPrimerApellido
     * @return clBenefiEstudiante
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
     * @return clBenefiEstudiante
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
     * Set txDireccion1
     *
     * @param string $txDireccion1
     * @return clBenefiEstudiante
     */
    public function setTxDireccion1($txDireccion1)
    {
        $this->txDireccion1 = $txDireccion1;

        return $this;
    }

    /**
     * Get txDireccion1
     *
     * @return string 
     */
    public function getTxDireccion1()
    {
        return $this->txDireccion1;
    }

    /**
     * Set txDireccion2
     *
     * @param string $txDireccion2
     * @return clBenefiEstudiante
     */
    public function setTxDireccion2($txDireccion2)
    {
        $this->txDireccion2 = $txDireccion2;

        return $this;
    }

    /**
     * Get txDireccion2
     *
     * @return string 
     */
    public function getTxDireccion2()
    {
        return $this->txDireccion2;
    }

    /**
     * Set txTelefoCasa
     *
     * @param string $txTelefoCasa
     * @return clBenefiEstudiante
     */
    public function setTxTelefoCasa($txTelefoCasa)
    {
        $this->txTelefoCasa = $txTelefoCasa;

        return $this;
    }

    /**
     * Get txTelefoCasa
     *
     * @return string 
     */
    public function getTxTelefoCasa()
    {
        return $this->txTelefoCasa;
    }

    /**
     * Set txTelefoCelular
     *
     * @param string $txTelefoCelular
     * @return clBenefiEstudiante
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
     * Set txCorreoElectronico
     *
     * @param string $txCorreoElectronico
     * @return clBenefiEstudiante
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
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clBenefiEstudiante
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
     * @return clBenefiEstudiante
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
     * Set coCiudad
     *
     * @param \sagaco\DsagacoBundle\Entity\ESagaco.tbCiudad $coCiudad
     * @return clBenefiEstudiante
     */
    public function setCoCiudad(\sagaco\DsagacoBundle\Entity\clCiudad $coCiudad = null)
    {
        $this->coCiudad = $coCiudad;

        return $this;
    }

    /**
     * Get coCiudad
     *
     * @return \sagaco\DsagacoBundle\Entity\ESagaco.tbCiudad 
     */
    public function getCoCiudad()
    {
        return $this->coCiudad;
    }

    /**
     * Set coEstadoCivil
     *
     * @param \sagaco\DsagacoBundle\Entity\ESagaco.tbEstadoCivil $coEstadoCivil
     * @return clBenefiEstudiante
     */
    public function setCoEstadoCivil(\sagaco\DsagacoBundle\Entity\clEstadoCivil $coEstadoCivil = null)
    {
        $this->coEstadoCivil = $coEstadoCivil;

        return $this;
    }

    /**
     * Get coEstadoCivil
     *
     * @return \sagaco\DsagacoBundle\Entity\ESagaco.tbEstadoCivil 
     */
    public function getCoEstadoCivil()
    {
        return $this->coEstadoCivil;
    }

    /**
     * Set coGenero
     *
     * @param \sagaco\DsagacoBundle\Entity\ESagaco.tbGenero $coGenero
     * @return clBenefiEstudiante
     */
    public function setCoGenero(\sagaco\DsagacoBundle\Entity\clGenero $coGenero = null)
    {
        $this->coGenero = $coGenero;

        return $this;
    }

    /**
     * Get coGenero
     *
     * @return \sagaco\DsagacoBundle\Entity\ESagaco.tbGenero 
     */
    public function getCoGenero()
    {
        return $this->coGenero;
    }

    /**
     * Set coParentesco
     *
     * @param \sagaco\DsagacoBundle\Entity\ESagaco.tbParentesco $coParentesco
     * @return clBenefiEstudiante
     */
    public function setCoParentesco(\sagaco\DsagacoBundle\Entity\clParentesco $coParentesco = null)
    {
        $this->coParentesco = $coParentesco;

        return $this;
    }

    /**
     * Get coParentesco
     *
     * @return \sagaco\DsagacoBundle\Entity\ESagaco.tbParentesco 
     */
    public function getCoParentesco()
    {
        return $this->coParentesco;
    }

    /**
     * Set coControEstudio
     *
     * @param \sagaco\DsagacoBundle\Entity\ESagaco.viControEstudio $coControEstudio
     * @return clBenefiEstudiante
     */
    public function setCoControEstudio(\sagaco\DsagacoBundle\Entity\clControEstudio $coControEstudio = null)
    {
        $this->coControEstudio = $coControEstudio;

        return $this;
    }

    /**
     * Get coControEstudio
     *
     * @return \sagaco\DsagacoBundle\Entity\ESagaco.viControEstudio 
     */
    public function getCoControEstudio()
    {
        return $this->coControEstudio;
    }
}
