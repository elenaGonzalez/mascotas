<?php

namespace Mascotas\MascotasBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Publicacion
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Mascotas\MascotasBundle\Entity\PublicacionRepository")
 */
class Publicacion {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

     /**
     * @ORM\ManyToOne(targetEntity="Usuario", inversedBy="publicacion", cascade={"persist"})
     */
    private $usuario;


    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=1)
     */

    private $tipo;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="fechapublicacion", type="date")
     */
    private $fechapublicacion;
    
     /**
     * @var DateTime
     *
     * @ORM\Column(name="fechafinalizacion", type="date", nullable=true)
     */
    private $fechafinalizacion;
    
    /**
     * @var string
     *
     * @ORM\Column(name="motivo", type="string", length=255, nullable=true)
     */
    private $motivo;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="lugar", type="string", length=255)
     */
    private $aviso;
    
    /**
     *
     * @ORM\OneToOne(targetEntity="Document", cascade={"persist"})
     * @ORM\JoinColumn(name="document_id", referencedColumnName="id") 
     * 
     */    
     private $foto;
     

    /**
     * @var string
     *
     * @ORM\Column(name="contacto", type="string", length=255)
     */
    private $contacto;

    /**
     *
     * @ORM\OneToMany(targetEntity="Comentario", mappedBy="publicacion")
     */
    private $comentarios;
    
    // para recibir la fotos/uploadedfile del formulario
    private $foto_subida;
    
    public function __construct() {
        $this->comentarios = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }
    
    /**
     * Set tipo
     *
     * @param string $tipo
     * @return Publicacion
     */
    public function setTipo($tipo) {
        $this->tipo = $tipo;
        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo() {
        return $this->tipo;
    }

    /**
     * Set lugar
     *
     * @param string $aviso
     * @return Publicacion
     */
    public function setAviso($aviso) {
        $this->aviso = $aviso;

        return $this;
    }

    /**
     * Get aviso
     *
     * @return string 
     */
    public function getAviso() {
        return $this->aviso;
    }

    /**
     * Set contacto
     *
     * @param string $contacto
     * @return Publicacion
     */
    public function setContacto($contacto) {
        $this->contacto = $contacto;

        return $this;
    }

    /**
     * Get contacto
     *
     * @return string 
     */
    public function getContacto() {
        return $this->contacto;
    }

    public function __toString() {
        return $this->getAviso();
    }
    
    /**
     * Add comentarios
     *
     * @param \Mascotas\MascotasBundle\Entity\Comentario $comentarios
     * @return Publicacion
     */
    public function addComentario(\Mascotas\MascotasBundle\Entity\Comentario $comentarios) {
        $this->comentarios[] = $comentarios;

        return $this;
    }

    /**
     * Remove comentarios
     *
     * @param \Mascotas\MascotasBundle\Entity\Comentario $comentarios
     */
    public function removeComentario(\Mascotas\MascotasBundle\Entity\Comentario $comentarios) {
        $this->comentarios->removeElement($comentarios);
    }

    /**
     * Get comentarios
     *
     * @return Collection 
     */
    public function getComentarios() {
        return $this->comentarios;
    }


    /**
     * Set fechapublicacion
     *
     * @param DateTime $fechapublicacion
     * @return Publicacion
     */
    public function setFechapublicacion($fechapublicacion)
    {
        $this->fechapublicacion = $fechapublicacion;
    
        return $this;
    }

    /**
     * Get fechapublicacion
     *
     * @return DateTime 
     */
    public function getFechapublicacion()
    {
        return $this->fechapublicacion;
    }

    /**
     * Set foto
     *
     * @param \Mascotas\MascotasBundle\Entity\Document $foto
     * @return Publicacion
     */
    public function setFoto(\Mascotas\MascotasBundle\Entity\Document $foto = null)
    {
        $this->foto = $foto;
    
        return $this;
    }

    /**
     * Get foto
     *
     * @return \Mascotas\MascotasBundle\Entity\Document 
     */
    public function getFoto()
    {
        return $this->foto;
    }
    
    /**
     * Get foto_subida
     *
     * @return UploadedFile
     */
    public function getFotoSubida(){
        return $this->foto_subida;
    }
    
    public function setFotoSubida(UploadedFile $fotoSubida){
        $this->foto_subida = $fotoSubida;
    }

    /**
     * Set fechafinalizacion
     *
     * @param \DateTime $fechafinalizacion
     * @return Publicacion
     */
    public function setFechafinalizacion($fechafinalizacion)
    {
        $this->fechafinalizacion = $fechafinalizacion;
    
        return $this;
    }

    /**
     * Get fechafinalizacion
     *
     * @return \DateTime 
     */
    public function getFechafinalizacion()
    {
        return $this->fechafinalizacion;
    }

    /**
     * Set motivo
     *
     * @param string $motivo
     * @return Publicacion
     */
    public function setMotivo($motivo)
    {
        $this->motivo = $motivo;
    
        return $this;
    }

    /**
     * Get motivo
     *
     * @return string 
     */
    public function getMotivo()
    {
        return $this->motivo;
    }
    
    
    /**
     * Set usuario
     *
     * @param \Mascotas\MascotasBundle\Entity\Usuario $usuario
     * @return Publicacion
     */
    public function setUsuario(\Mascotas\MascotasBundle\Entity\Usuario $usuario)
    {
        $this->usuario = $usuario;
    
        return $this;
    }

    /**
     * Get usuario
     *
     * @return \Mascotas\MascotasBundle\Entity\Usuario 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}
