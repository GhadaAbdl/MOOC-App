<?php
namespace Mooc\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 * @ORM\HasLifecycleCallbacks
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     *
     * @ORM\Column(type="string" , length=255)
     */
    private $name;
    /**
     *
     * @ORM\Column(type="string" , length=255 , unique=true)
     */
    private $surname;
    /**
     *
     * @ORM\Column(type="date" )
     */
    private $birth_date;
    /**
     *
     * @ORM\Column(type="string" , length=255)
     */
    private $level;
    /**
     *
     * @ORM\Column(type="string" , length=255)
     */
    private $type;
    /**
     *
     * @ORM\Column(type="string" , length=255)
     */
    public $cv_link;
    /**
     *
     * @ORM\Column(type="string" , length=255)
     */
    public $img_link;
    
    /**
     * @var string
     *
     * @ORM\Column(name="facebook_id", type="string", nullable=true)
     */
    private $facebookID;
 
    /**
     * @var string
     *
     * @ORM\Column(name="google_id", type="string", nullable=true)
     */
    private $googleID;
    
    
    /**
     * @Assert\File(maxSize="10M")
     */
    public $image_file;
    /**
     * @Assert\File(maxSize="10M")
     */
    public $cv_file;
    
    
    public function getUploadRootDir(){
        return __dir__.'/../../../../web/mooc';
    }
    public function getUploadRootDircv(){
        return __dir__.'/../../../../web/mooc';
    }
    
    public function getAbsolutePath(){
        return null === $this->img_link ? null : $this->getUploadRootDir().'/'.$this->img_link;
    }
    public function getAbsolutePathcv(){
        return null === $this->cv_link ? null : $this->getUploadRootDircv().'/'.$this->cv_link;
    }
    
    /**
     * @ORM\Prepersist()
     * @ORM\Preupdate()
     */
    public function preUpload()
    {
        $this->tempFile = $this->getAbsolutePath();
        $this->oldFile = $this->getImgLink();
        
        if(null !== $this->image_file) 
            $this->img_link = sha1(uniqid(mt_rand(),true)).'.'.$this->image_file->guessExtension();
        
    }
    
        /**
     * @ORM\Prepersist()
     * @ORM\Preupdate()
     */
    public function preUploadcv()
    {
        $this->tempFilecv = $this->getAbsolutePathcv();
        $this->oldFilecv = $this->getCvLink();
        
        if(null !== $this->cv_file) 
            $this->cv_link = sha1(uniqid(mt_rand(),true)).'.'.$this->cv_file->guessExtension();
        
    }
    
    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload(){
        if (null !== $this->image_file){
            $this->image_file->move($this->getUploadRootDir(),$this->img_link);
            $this->image_file = null;
            
            if($this->oldFile != null) unlink ($this->tempFile);
        }
    }
    
    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function uploadcv(){
        if (null !== $this->cv_file){
            $this->cv_file->move($this->getUploadRootDircv(),$this->cv_link);
            $this->cv_file = null;
            
            if($this->oldFilecv != null) unlink ($this->tempFilecv);
        }
    }
    
    /**
     * @ORM\PreRemove()
     */
    public function preRemoveUpload(){
        $this->tempFile = $this->getAbsolutePath();
    }
    
    /**
     * @ORM\PreRemove()
     */
    public function preRemoveUploadcv(){
        $this->tempFilecv = $this->getAbsolutePathcv();
    }
    
    /**
     * @ORM\PostRemove()
     */
    public function removeUpload(){
        if(file_exists($this->tempFile)) unlink ($this->tempFile);
    }
    
    /**
     * @ORM\PostRemove()
     */
    public function removeUploadcv(){
        if(file_exists($this->tempFilecv)) unlink ($this->tempFilecv);
    }


    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

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
     * Set name
     *
     * @param string $name
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set surname
     *
     * @param string $surname
     * @return User
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string 
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set birth_date
     *
     * @param \DateTime $birthDate
     * @return User
     */
    public function setBirthDate($birthDate)
    {
        $this->birth_date = $birthDate;

        return $this;
    }

    /**
     * Get birth_date
     *
     * @return \DateTime 
     */
    public function getBirthDate()
    {
        return $this->birth_date;
    }

    /**
     * Set level
     *
     * @param string $level
     * @return User
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return string 
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return User
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set cv_link
     *
     * @param string $cvLink
     * @return User
     */
    public function setCvLink($cvLink)
    {
        $this->cv_link = $cvLink;

        return $this;
    }

    /**
     * Get cv_link
     *
     * @return string 
     */
    public function getCvLink()
    {
        return $this->cv_link;
    }

    /**
     * Set img_link
     *
     * @param string $imgLink
     * @return User
     */
    public function setImgLink($imgLink)
    {
        $this->img_link = $imgLink;

        return $this;
    }

    /**
     * Get img_link
     *
     * @return string 
     */
    public function getImgLink()
    {
        return $this->img_link;
    }
    
    public function getParent()
 {
 return 'FOSUserBundle';
 }
}
