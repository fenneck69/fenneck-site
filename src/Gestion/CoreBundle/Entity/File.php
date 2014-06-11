<?php

namespace Gestion\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Thrace\MediaBundle\Entity\AbstractFile;


/**
 * File
 *
 * @ORM\Entity
 */
class File extends AbstractFile
{
    /**
     * @var integer
     *
     * @ORM\Id @ORM\Column(name="id", type="integer")
     *
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
	public function __toString(){
		return $this->getOriginalName();
	}
    public function getUploadDir()
    {
        return '/uploads/rib';
    }

}
