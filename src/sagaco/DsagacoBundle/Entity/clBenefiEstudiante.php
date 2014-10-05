<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * tb_benefi_estudiante
 *
 * @ORM\Table(name="tb_benefi_estudiante")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clBenefiEstudianteRepository")
 */
class clBenefiEstudiante
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="co_benefi_estudiante", type="integer")
     */
    private $coBenefiEstudiante;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_primer_nombre", type="string", length=20)
     */
    private $txPrimerNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_segund_nombre", type="string", length=20, nullable=true)
     */
    private $txSegundNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_primer_apellido", type="string", length=20)
     */
    private $txPrimerApellido;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_segund_apellido", type="string", length=20, nullable=true)
     */
    private $txSegundApellido;

    /**
     * @var integer
     *
     * @ORM\Column(name="nu_cedula", type="integer", nullable=true)
     */
    private $nuCedula;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_parentesco", type="string", length=5)
     */
    private $txParentesco;

    /**
     * @var string
     *
     * @ORM\Column(name="in_sexo", type="string", length=1)
     */
    private $inSexo;

    /**
     * @var string
     *
     * @ORM\Column(name="in_nacionalidad", type="string", length=1)
     */
    private $inNacionalidad;

    /**
     * @var string
     *
     * @ORM\Column(name="in_estado_civil", type="string", length=1)
     */
    private $inEstadoCivil;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_correo_electronico", type="string", length=80, nullable=true)
     */
    private $txCorreoElectronico;

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
     * @ORM\Column(name="tx_lugar_residencia", type="text", nullable=true)
     */
    private $txLugarResidencia;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_descripcion", type="text", nullable=true)
     */
    private $txDescripcion;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set coBenefiEstudiante
     *
     * @param integer $coBenefiEstudiante
     * @return tb_benefi_estudiante
     */
    public function setCoBenefiEstudiante($coBenefiEstudiante)
    {
        $this->coBenefiEstudiante = $coBenefiEstudiante;

        return $this;
    }

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
     * Set txPrimerNombre
     *
     * @param string $txPrimerNombre
     * @return tb_benefi_estudiante
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
     * @return tb_benefi_estudiante
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
     * @return tb_benefi_estudiante
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
     * @return tb_benefi_estudiante
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
     * Set nuCedula
     *
     * @param integer $nuCedula
     * @return tb_benefi_estudiante
     */
    public function setNuCedula($nuCedula)
    {
        $this->nuCedula = $nuCedula;

        return $this;
    }

    /**
     * Get nuCedula
     *
     * @return integer 
     */
    public function getNuCedula()
    {
        return $this->nuCedula;
    }

    /**
     * Set txParentesco
     *
     * @param string $txParentesco
     * @return tb_benefi_estudiante
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
     * @return tb_benefi_estudiante
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
     * Set inNacionalidad
     *
     * @param string $inNacionalidad
     * @return tb_benefi_estudiante
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
     * Set inEstadoCivil
     *
     * @param string $inEstadoCivil
     * @return tb_benefi_estudiante
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
     * @return tb_benefi_estudiante
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
     * Set txTelefoCasa
     *
     * @param string $txTelefoCasa
     * @return tb_benefi_estudiante
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
     * @return tb_benefi_estudiante
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
     * @return tb_benefi_estudiante
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
     * Set txDescripcion
     *
     * @param string $txDescripcion
     * @return tb_benefi_estudiante
     */
    public function setTxDescripcion($txDescripcion)
    {
        $this->txDescripcion = $txDescripcion;

        return $this;
    }

    /**
     * Get txDescripcion
     *
     * @return string 
     */
    public function getTxDescripcion()
    {
        return $this->txDescripcion;
    }
}
