<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="`admin_settings`")
 */
class Admin_Settings
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     *
     * @ORM\Column(name="`title`", type="string", length=200, nullable=true)
     */
    protected $title;

    /**
     *
     * @ORM\Column(name="`short_title`", type="string", length=200, nullable=true)
     */
    protected $short_title;

    /**
     * @ORM\Column(name="`home_page`", type="text", length=8000, nullable=true)
     */
    protected $home_page;

    /**
     * @ORM\Column(name="`about`", type="text", length=5000, nullable=true)
     */
    protected $about;

    /**
     * @ORM\Column(name="`download`", type="text", length=8000, nullable=true)
     */
    protected $download;


    /**
     * @ORM\Column(name="`documentation`", type="text", length=8000, nullable=true)
     */
    protected $documentation;

    /**
     * @ORM\Column(name="`show_downloads`", type="boolean")
     */
    protected $show_downloads;

    /**
     * @ORM\Column(name="`show_download_all`", type="boolean")
     */
    protected $show_download_all;

    /**
     * @ORM\Column(name="`footer`", type="text", length=2000, nullable=true)
     */
    protected $footer;

    /**
     * @ORM\Column(name="`main_color_scheme`", type="string", length=10, nullable=true)
     */
    protected $main_color_scheme;

    /**
     * @ORM\Column(name="`header_color_scheme`", type="string", length=10, nullable=true)
     */
    protected $header_color_scheme;

    /**
     * @ORM\Column(name="`logo_color_scheme`", type="string", length=10, nullable=true)
     */
    protected $logo_color_scheme;

    /**
     * @ORM\Column(name="`button_color_scheme`", type="string", length=10, nullable=true)
     */
    protected $button_color_scheme;

    /**
     * @ORM\Column(name="`example_1`", type="string", length=20, nullable=true)
     */
    protected $example_1;

    /**
     * @ORM\Column(name="`example_2`", type="string", length=20, nullable=true)
     */
    protected $example_2;

    /**
     * @ORM\Column(name="`example_3`", type="string", length=20, nullable=true)
     */
    protected $example_3;


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
     * Set title
     *
     * @param string $title
     *
     * @return Admin_Settings
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set homePage
     *
     * @param string $homePage
     *
     * @return Admin_Settings
     */
    public function setHomePage($homePage)
    {
        $this->home_page = $homePage;

        return $this;
    }

    /**
     * Get homePage
     *
     * @return string
     */
    public function getHomePage()
    {
        return $this->home_page;
    }

    /**
     * Set about
     *
     * @param string $about
     *
     * @return Admin_Settings
     */
    public function setAbout($about)
    {
        $this->about = $about;

        return $this;
    }

    /**
     * Get about
     *
     * @return string
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * Set shortTitle
     *
     * @param string $shortTitle
     *
     * @return Admin_Settings
     */
    public function setShortTitle($shortTitle)
    {
        $this->short_title = $shortTitle;

        return $this;
    }

    /**
     * Get shortTitle
     *
     * @return string
     */
    public function getShortTitle()
    {
        return $this->short_title;
    }

    /**
     * Set example1
     *
     * @param string $example1
     *
     * @return Admin_Settings
     */
    public function setExample1($example1)
    {
        $this->example_1 = $example1;

        return $this;
    }

    /**
     * Get example1
     *
     * @return string
     */
    public function getExample1()
    {
        return $this->example_1;
    }

    /**
     * Set example2
     *
     * @param string $example2
     *
     * @return Admin_Settings
     */
    public function setExample2($example2)
    {
        $this->example_2 = $example2;

        return $this;
    }

    /**
     * Get example2
     *
     * @return string
     */
    public function getExample2()
    {
        return $this->example_2;
    }

    /**
     * Set example3
     *
     * @param string $example3
     *
     * @return Admin_Settings
     */
    public function setExample3($example3)
    {
        $this->example_3 = $example3;

        return $this;
    }

    /**
     * Get example3
     *
     * @return string
     */
    public function getExample3()
    {
        return $this->example_3;
    }

    /**
     * Set download
     *
     * @param string $download
     *
     * @return Admin_Settings
     */
    public function setDownload($download)
    {
        $this->download = $download;

        return $this;
    }

    /**
     * Get download
     *
     * @return string
     */
    public function getDownload()
    {
        return $this->download;
    }

    /**
     * Set footer
     *
     * @param string $footer
     *
     * @return Admin_Settings
     */
    public function setFooter($footer)
    {
        $this->footer = $footer;

        return $this;
    }

    /**
     * Get footer
     *
     * @return string
     */
    public function getFooter()
    {
        return $this->footer;
    }

    /**
     * Set mainColorScheme
     *
     * @param string $mainColorScheme
     *
     * @return Admin_Settings
     */
    public function setMainColorScheme($mainColorScheme)
    {
        $this->main_color_scheme = $mainColorScheme;

        return $this;
    }

    /**
     * Get mainColorScheme
     *
     * @return string
     */
    public function getMainColorScheme()
    {
        return $this->main_color_scheme;
    }

    /**
     * Set headerColorScheme
     *
     * @param string $headerColorScheme
     *
     * @return Admin_Settings
     */
    public function setHeaderColorScheme($headerColorScheme)
    {
        $this->header_color_scheme = $headerColorScheme;

        return $this;
    }

    /**
     * Get headerColorScheme
     *
     * @return string
     */
    public function getHeaderColorScheme()
    {
        return $this->header_color_scheme;
    }

    /**
     * Set logoColorScheme
     *
     * @param string $logoColorScheme
     *
     * @return Admin_Settings
     */
    public function setLogoColorScheme($logoColorScheme)
    {
        $this->logo_color_scheme = $logoColorScheme;

        return $this;
    }

    /**
     * Get logoColorScheme
     *
     * @return string
     */
    public function getLogoColorScheme()
    {
        return $this->logo_color_scheme;
    }

    /**
     * Set buttonColorScheme
     *
     * @param string $buttonColorScheme
     *
     * @return Admin_Settings
     */
    public function setButtonColorScheme($buttonColorScheme)
    {
        $this->button_color_scheme = $buttonColorScheme;

        return $this;
    }

    /**
     * Get buttonColorScheme
     *
     * @return string
     */
    public function getButtonColorScheme()
    {
        return $this->button_color_scheme;
    }

    /**
     * Set showDownloads
     *
     * @param boolean $showDownloads
     *
     * @return Admin_Settings
     */
    public function setShowDownloads($showDownloads)
    {
        $this->show_downloads = $showDownloads;

        return $this;
    }

    /**
     * Get showDownloads
     *
     * @return boolean
     */
    public function getShowDownloads()
    {
        return $this->show_downloads;
    }

    /**
     * Set showDownloadAll
     *
     * @param boolean $showDownloadAll
     *
     * @return Admin_Settings
     */
    public function setShowDownloadAll($showDownloadAll)
    {
        $this->show_download_all = $showDownloadAll;

        return $this;
    }

    /**
     * Get showDownloadAll
     *
     * @return boolean
     */
    public function getShowDownloadAll()
    {
        return $this->show_download_all;
    }

    /**
     * Set documentation
     *
     * @param string $documentation
     *
     * @return Admin_Settings
     */
    public function setDocumentation($documentation)
    {
        $this->documentation = $documentation;

        return $this;
    }

    /**
     * Get documentation
     *
     * @return string
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }
}
?>