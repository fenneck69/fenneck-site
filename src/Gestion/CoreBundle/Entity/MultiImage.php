<?php

namespace Gestion\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;
use Thrace\MediaBundle\Entity\AbstractMultiImage;
/**
 * MultiImage
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gestion\CoreBundle\Entity\MultiImageRepository")
 */
class MultiImage extends AbstractMultiImage
{
	/**
     * @ORM\ManyToOne(targetEntity="Gestion\CoreBundle\Entity\Gallerie", inversedBy="items")
     * 
     */
    private $gallerie;
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

	
		/**
     * Set gallerie
     *
     * @param string $gallerie
     * @return GallerieItem
     */
    public function setGallerie($gallerie)
    {
        $this->gallerie = $gallerie;
    
        return $this;
    }

    /**
     * Get gallerie
     *
     * @return string 
     */
    public function getGallerie()
    {
        return $this->gallerie;
    }
	
	
	
	
		/****************GESTION IMAGE********************/

    public function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../web'.$this->getUploadDir();
    }

    public function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return '/uploads/gallerie';
    }

}
