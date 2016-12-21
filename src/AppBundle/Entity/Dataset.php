<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="`dataset`")
 */
class Dataset
{
	
	
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\ManyToMany(targetEntity="Interaction" , inversedBy="datasets")
	 * @ORM\JoinTable(name="interaction_dataset",
	 *      joinColumns={
	 *      		@ORM\JoinColumn(name="dataset_id", referencedColumnName="id")
	 *      	},
	 *      inverseJoinColumns={
	 *      		@ORM\JoinColumn(name="interaction_id", referencedColumnName="id")
	 *      	}
	 * 		)
	 */
	public $interactions;
	
	/**
	 * @ORM\ManyToMany(targetEntity="Data_File" , inversedBy="datasets")
	 * @ORM\JoinTable(name="dataset_data_file",
	 *      joinColumns={
	 *      		@ORM\JoinColumn(name="data_file_id", referencedColumnName="id")
	 *      	},
	 *      inverseJoinColumns={
	 *      		@ORM\JoinColumn(name="dataset_id", referencedColumnName="id")
	 *      	}
	 * 		)
	 */
	public $data_files;
	
	public function __construct() {
		$this->interactions = new \Doctrine\Common\Collections\ArrayCollection();
		$this->data_files = new \Doctrine\Common\Collections\ArrayCollection();
	}
	

	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	protected $pubmed_id;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	protected $author;
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	protected $year;
	
	
	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	protected $interaction_status;
	
	/**
	 * @ORM\Column(type="string", length=100, nullable=true)
	 */
	protected $description;
	

	/**
	 * @ORM\Column(type="string", length=100, nullable=true)
	 */
	protected $number_of_interactions;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add interactions
     *
     * @param \AppBundle\Entity\Interaction $interactions
     * @return Dataset
     */
    public function addInteraction(\AppBundle\Entity\Interaction $interactions)
    {
        $this->interactions[] = $interactions;

        return $this;
    }

    /**
     * Remove interactions
     *
     * @param \AppBundle\Entity\Interaction $interactions
     */
    public function removeInteraction(\AppBundle\Entity\Interaction $interactions)
    {
        $this->interactions->removeElement($interactions);
    }

    /**
     * Get interactions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getInteractions()
    {
        return $this->interactions;
    }

    /**
     * Add data_files
     *
     * @param \AppBundle\Entity\Data_File $data_files
     * @return Dataset
     */
    public function addDataFile(\AppBundle\Entity\Data_File $data_files)
    {
        $this->data_files[] = $data_files;

        return $this;
    }

    /**
     * Remove data_files
     *
     * @param \AppBundle\Entity\Data_File $data_files
     */
    public function removeDataFile(\AppBundle\Entity\Data_File $data_files)
    {
        $this->data_files->removeElement($data_files);
    }

    /**
     * Get data_files
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDataFiles()
    {
        return $this->data_files;
    }

    /**
     * Set pubmedId
     *
     * @param string $pubmedId
     *
     * @return Dataset
     */
    public function setPubmedId($pubmedId)
    {
        $this->pubmed_id = $pubmedId;

        return $this;
    }

    /**
     * Get pubmedId
     *
     * @return string
     */
    public function getPubmedId()
    {
        return $this->pubmed_id;
    }

    /**
     * Set author
     *
     * @param string $author
     *
     * @return Dataset
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set year
     *
     * @param string $year
     *
     * @return Dataset
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return string
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Dataset
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set numberOfInteractions
     *
     * @param string $numberOfInteractions
     *
     * @return Dataset
     */
    public function setNumberOfInteractions($numberOfInteractions)
    {
        $this->number_of_interactions = $numberOfInteractions;

        return $this;
    }

    /**
     * Get numberOfInteractions
     *
     * @return string
     */
    public function getNumberOfInteractions()
    {
        return $this->number_of_interactions;
    }

    /**
     * Set interactionStatus
     *
     * @param string $interactionStatus
     *
     * @return Dataset
     */
    public function setInteractionStatus($interactionStatus)
    {
        $this->interaction_status = $interactionStatus;

        return $this;
    }

    /**
     * Get interactionStatus
     *
     * @return string
     */
    public function getInteractionStatus()
    {
        return $this->interaction_status;
    }
}
