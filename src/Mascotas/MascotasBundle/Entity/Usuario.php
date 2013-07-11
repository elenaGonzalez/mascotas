<?php

namespace Mascotas\MascotasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\EquatableInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Usuario
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Mascotas\MascotasBundle\Entity\UsuarioRepository")
 */
class Usuario implements UserInterface, \Serializable, EquatableInterface {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=255)
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=50)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario", type="string", length=255 , unique = true)
     */
    private $usuario;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     * @Assert\Length(min = 5)
     */
    private $password;

    /**
     * @ORM\Column(name="salt", type="string", length=255)
     */
    private $salt;

       
     /**    
     * @ORM\OneToMany(targetEntity="Comentario", mappedBy="usuario")
     */
    private $comentarios;
    
     /**
     * 
     * @ORM\Column(name="usuario_role", type="string", length=10)
     * 
     */    
    private $usuario_roles;
    
     /**
     * 
     * @ORM\OneToMany(targetEntity="Publicacion", mappedBy="usuario")
     *
     */
    private $publicacion;
            
    /**
     * Get id
     *
     * @return integer 
     */
            
    public function getId() {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Usuario
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre() {
        return $this->nombre;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     * @return Usuario
     */
    public function setApellido($apellido) {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido() {
        return $this->apellido;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return Usuario
     */
    public function setTel($tel) {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel() {
        return $this->tel;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Usuario
     */
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set usuario
     *
     * @param string $usuario
     * @return Usuario
     */
    public function setUsuario($usuario) {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return string 
     */
    public function getUsuario() {
        return $this->usuario;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Usuario
     */
    public function setPassword($password) {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Usuario
     */
    public function setSalt($salt) {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getSalt() {
        return $this->salt;        
    }

    public function serialize() {
        return serialize(array($this->id, ));
    }

    public function unserialize($serialized) {
        list($this->id, ) = unserialize($serialized);
    }

    public function eraseCredentials() {
        
    }
       
    public function addRole($role){
     $this->usuario_roles = $role;
    }
    
    public function getUsuarioRoles() {
        return $this->usuario_roles;
    }
    
     /**
     * Set rol
     *
     * @param string $usuario_roles
     * @return Usuario
     */
    public function setRoles($usuario_roles) {
        $this->usuario_roles = $usuario_roles;

        return $this;
    }
    
    /**
     * 
     * @return Doctrine\Common\Collections\Collection
     * 
     */
    public function getRoles(){
        $d[] = $this->usuario_roles;
        return $d;
    }

    public function getUsername() {
        return $this->getUsuario();
    }
    
    public function __construct() {
        $this->mascotas = new ArrayCollection();
        $this->comentarios = new ArrayCollection();
        $this->publicacion = new ArrayCollection();
        $this->usuario_roles = new ArrayCollection();
                
        $this->setSalt(md5(uniqid(null, true)));
        $this->addRole('ROLE_USER');
    }

    public function isEqualTo(UserInterface $user) {        
        return md5($this->getUsername()) === md5($user->getUsername());
    }

    /**
     * Add comentarios
     *
     * @param \Mascotas\MascotasBundle\Entity\Comentario $comentarios
     * @return Usuario
     */
    public function addComentario(\Mascotas\MascotasBundle\Entity\Comentario $comentarios)
    {
        $this->comentarios[] = $comentarios;
    
        return $this;
    }
    
    
    /**
     * Remove comentarios
     *
     * @param \Mascotas\MascotasBundle\Entity\Comentario $comentarios
     */
    public function removeComentario(\Mascotas\MascotasBundle\Entity\Comentario $comentarios)
    {
        $this->comentarios->removeElement($comentarios);
    }

    /**
     * Get comentarios
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComentarios()
    {
        return $this->comentarios;
    }
    
    public function __toString() {
        return $this->getUsername();
    }
    
    /**
     * Add comentarios
     *
     * @param \Mascotas\MascotasBundle\Entity\Publicacion $publicaciones
     * @return Usuario
     */
    public function addPublicacion(\Mascotas\MascotasBundle\Entity\Publicacion $publicaciones)
    {
        $this->publicaciones[] = $publicaciones;
    
        return $this;
    }
    
    /**
     * Remove publicaciones
     *
     * @param \Mascotas\MascotasBundle\Entity\Publicacion $publicaciones
     */
    public function removePublicacion(\Mascotas\MascotasBundle\Entity\Publicacion $publicaciones)
    {
        $this->publicaciones->removeElement($publicaciones);
    }

}
