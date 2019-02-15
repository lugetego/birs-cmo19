<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\HttpFoundation\File\File;

/**
 * Registro
 *
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="registro")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RegistroRepository")
 *
 */
class Registro
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombres", type="string", length=120)
     */
    private $nombres;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=120)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="lugar", type="string", length=120)
     * @Assert\NotBlank(message="Lugar de nacimiento")
     */
    private $lugar;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="nacimiento", type="date", nullable=true)
     */
    private $nacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="pais", type="string", length=180)
     */
    private $pais;


    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=180)
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email.",
     *     checkMX = true
     * )
     *
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="estatus", type="string", length=180)
     */
    private $estatus;

    /**
     * @var string
     *
     * @ORM\Column(name="universidad", type="string", length=255)
     */
    private $universidad;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreProfesor", type="string", length=180, nullable=true)
     */
    private $nombreProfesor;

    /**
     * @var string
     *
     * @ORM\Column(name="emailProfesor", type="string", length=180, nullable=true)
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email.",
     *     checkMX = true
     * )
     */
    private $emailProfesor;

    /**
     * @var string
     *
     * @ORM\Column(name="area", type="text", nullable=true)
     */
    private $area;

    /**
     * @var string
     *
     * @ORM\Column(name="grupos", type="text", nullable=true)
     */
    private $grupos;

    /**
     * @var string
     *
     * @ORM\Column(name="publicaciones", type="text", nullable=true)
     */
    private $publicaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="proposito", type="text", nullable=true)
     */
    private $proposito;

    /**
     * @var bool
     *
     * @ORM\Column(name="lecturas", type="boolean")
     */
    private $lecturas;

    /**
     * @var string
     *
     * @ORM\Column(name="apoyo", type="string", length=20)
     */
    private $apoyo;

    /**
     * @var bool
     *
     * @ORM\Column(name="aceptado", type="boolean", nullable=true)
     */
    private $aceptado;

    /**
     * @var bool
     *
     * @ORM\Column(name="confirmado", type="boolean", nullable=true)
     */
    private $confirmado;

    /**
     * @var string
     *
     * @ORM\Column(name="comentarios", type="text", nullable=true)
     */
    private $comentarios;

    /**
     * @var string
     * @Gedmo\Slug(fields={"nombres", "apellidos"}, updatable=false)
     * @ORM\Column(length=255, unique=true)
     */
    private $slug;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="date")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modifiedAt", type="date", nullable=true)
     */
    private $modifiedAt;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     *
     * @return Registro
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set nombres
     *
     * @param string $nombres
     *
     * @return Registro
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;

        return $this;
    }

    /**
     * Get nombres
     *
     * @return string
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * @return string
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * @param string $pais
     */
    public function setPais($pais)
    {
        $this->pais = $pais;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Registro
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set estatus
     *
     * @param string $estatus
     *
     * @return Registro
     */
    public function setEstatus($estatus)
    {
        $this->estatus = $estatus;

        return $this;
    }

    /**
     * Get estatus
     *
     * @return string
     */
    public function getEstatus()
    {
        return $this->estatus;
    }

    /**
     * Set universidad
     *
     * @param string $universidad
     *
     * @return Registro
     */
    public function setUniversidad($universidad)
    {
        $this->universidad = $universidad;

        return $this;
    }

    /**
     * Get universidad
     *
     * @return string
     */
    public function getUniversidad()
    {
        return $this->universidad;
    }

    /**
     * Set nombreProfesor
     *
     * @param string $nombreProfesor
     *
     * @return Registro
     */
    public function setNombreProfesor($nombreProfesor)
    {
        $this->nombreProfesor = $nombreProfesor;

        return $this;
    }

    /**
     * Get nombreProfesor
     *
     * @return string
     */
    public function getNombreProfesor()
    {
        return $this->nombreProfesor;
    }

    /**
     * Set emailProfesor
     *
     * @param string $emailProfesor
     *
     * @return Registro
     */
    public function setEmailProfesor($emailProfesor)
    {
        $this->emailProfesor = $emailProfesor;

        return $this;
    }

    /**
     * Get emailProfesor
     *
     * @return string
     */
    public function getEmailProfesor()
    {
        return $this->emailProfesor;
    }

    /**
     * @return string
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @param string $area
     */
    public function setArea($area)
    {
        $this->area = $area;
    }

    /**
     * @return string
     */
    public function getGrupos()
    {
        return $this->grupos;
    }

    /**
     * @param string $grupos
     */
    public function setGrupos($grupos)
    {
        $this->grupos = $grupos;
    }

    /**
     * @return string
     */
    public function getPublicaciones()
    {
        return $this->publicaciones;
    }

    /**
     * @param string $publicaciones
     */
    public function setPublicaciones($publicaciones)
    {
        $this->publicaciones = $publicaciones;
    }

    /**
     * @return string
     */
    public function getProposito()
    {
        return $this->proposito;
    }

    /**
     * @param string $proposito
     */
    public function setProposito($proposito)
    {
        $this->proposito = $proposito;
    }

    /**
     * @return bool
     */
    public function isLecturas()
    {
        return $this->lecturas;
    }

    /**
     * @param bool $lecturas
     */
    public function setLecturas($lecturas)
    {
        $this->lecturas = $lecturas;
    }

    /**
     * @return string
     */
    public function getApoyo()
    {
        return $this->apoyo;
    }

    /**
     * @param string $apoyo
     */
    public function setApoyo($apoyo)
    {
        $this->apoyo = $apoyo;
    }

    /**
     * @return bool
     */
    public function isAceptado()
    {
        return $this->aceptado;
    }

    /**
     * @param bool $aceptado
     */
    public function setAceptado($aceptado)
    {
        $this->aceptado = $aceptado;
    }

    /**
     * @return bool
     */
    public function isConfirmado()
    {
        return $this->confirmado;
    }

    /**
     * @param bool $confirmado
     */
    public function setConfirmado($confirmado)
    {
        $this->confirmado = $confirmado;
    }

    /**
     * @return string
     */
    public function getComentarios()
    {
        return $this->comentarios;
    }

    /**
     * @param string $comentarios
     */
    public function setComentarios($comentarios)
    {
        $this->comentarios = $comentarios;
    }

    /**
     * @return string
     */
    public function getLugar()
    {
        return $this->lugar;
    }

    /**
     * @param string $lugar
     */
    public function setLugar($lugar)
    {
        $this->lugar = $lugar;
    }

    /**
     * @return \DateTime
     */
    public function getNacimiento()
    {
        return $this->nacimiento;
    }

    /**
     * @param \DateTime $nacimiento
     */
    public function setNacimiento($nacimiento)
    {
        $this->nacimiento = $nacimiento;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Registro
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Registro
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getModifiedAt()
    {
        return $this->modifiedAt;
    }

    /**
     * @param \DateTime $modifiedAt
     */
    public function setModifiedAt($modifiedAt)
    {
        $this->modifiedAt = $modifiedAt;
    }


//    /**
//     * @ORM\PrePersist
//     */
//    public function setCreatedAtValue()
//    {
//        $this->createdAt = new \DateTime();
//
//    }

    /**
     * @ORM\PrePersist
     */
    public function prePersist()
    {
        $this->setCreatedAt(new \DateTime());
        $this->setModifiedAt(new \DateTime());
    }


    /**
     * @ORM\PreUpdate
     */
    public function preUpdate()
    {
        $this->setModifiedAt(new \DateTime());
    }

}

