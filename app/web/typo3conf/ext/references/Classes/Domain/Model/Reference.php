<?php
namespace GeorgRinger\References\Domain\Model;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Reference
 */
class Reference extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * name
     *
     * @var string
     * @validate NotEmpty
     */
    protected $name = '';
    
    /**
     * uri
     *
     * @var string
     */
    protected $uri = '';
    
    /**
     * teaser
     *
     * @var string
     */
    protected $teaser = '';
    
    /**
     * description
     *
     * @var string
     */
    protected $description = '';
    
    /**
     * media
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    protected $media = null;
    
    /**
     * county
     *
     * @var int
     */
    protected $county = 0;
    
    /**
     * staffCount
     *
     * @var int
     */
    protected $staffCount = 0;
    
    /**
     * turnover
     *
     * @var int
     */
    protected $turnover = 0;
    
    /**
     * year
     *
     * @var string
     */
    protected $year = '';
    
    /**
     * responsive
     *
     * @var bool
     */
    protected $responsive = false;
    
    /**
     * logo
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    protected $logo = null;
    
    /**
     * multilingual
     *
     * @var bool
     */
    protected $multilingual = false;
    
    /**
     * agency
     *
     * @var \GeorgRinger\References\Domain\Model\Agency
     */
    protected $agency = null;
    
    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /**
     * Returns the teaser
     *
     * @return string $teaser
     */
    public function getTeaser()
    {
        return $this->teaser;
    }
    
    /**
     * Sets the teaser
     *
     * @param string $teaser
     * @return void
     */
    public function setTeaser($teaser)
    {
        $this->teaser = $teaser;
    }
    
    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    /**
     * Returns the media
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $media
     */
    public function getMedia()
    {
        return $this->media;
    }
    
    /**
     * Sets the media
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $media
     * @return void
     */
    public function setMedia(\TYPO3\CMS\Extbase\Domain\Model\FileReference $media)
    {
        $this->media = $media;
    }
    
    /**
     * Returns the county
     *
     * @return int $county
     */
    public function getCounty()
    {
        return $this->county;
    }
    
    /**
     * Sets the county
     *
     * @param int $county
     * @return void
     */
    public function setCounty($county)
    {
        $this->county = $county;
    }
    
    /**
     * Returns the staffCount
     *
     * @return int $staffCount
     */
    public function getStaffCount()
    {
        return $this->staffCount;
    }
    
    /**
     * Sets the staffCount
     *
     * @param int $staffCount
     * @return void
     */
    public function setStaffCount($staffCount)
    {
        $this->staffCount = $staffCount;
    }
    
    /**
     * Returns the turnover
     *
     * @return int $turnover
     */
    public function getTurnover()
    {
        return $this->turnover;
    }
    
    /**
     * Sets the turnover
     *
     * @param int $turnover
     * @return void
     */
    public function setTurnover($turnover)
    {
        $this->turnover = $turnover;
    }
    
    /**
     * Returns the year
     *
     * @return string $year
     */
    public function getYear()
    {
        return $this->year;
    }
    
    /**
     * Sets the year
     *
     * @param string $year
     * @return void
     */
    public function setYear($year)
    {
        $this->year = $year;
    }
    
    /**
     * Returns the responsive
     *
     * @return bool $responsive
     */
    public function getResponsive()
    {
        return $this->responsive;
    }
    
    /**
     * Sets the responsive
     *
     * @param bool $responsive
     * @return void
     */
    public function setResponsive($responsive)
    {
        $this->responsive = $responsive;
    }
    
    /**
     * Returns the boolean state of responsive
     *
     * @return bool
     */
    public function isResponsive()
    {
        return $this->responsive;
    }
    
    /**
     * Returns the multilingual
     *
     * @return bool $multilingual
     */
    public function getMultilingual()
    {
        return $this->multilingual;
    }
    
    /**
     * Sets the multilingual
     *
     * @param bool $multilingual
     * @return void
     */
    public function setMultilingual($multilingual)
    {
        $this->multilingual = $multilingual;
    }
    
    /**
     * Returns the boolean state of multilingual
     *
     * @return bool
     */
    public function isMultilingual()
    {
        return $this->multilingual;
    }
    
    /**
     * Returns the agency
     *
     * @return \GeorgRinger\References\Domain\Model\Agency $agency
     */
    public function getAgency()
    {
        return $this->agency;
    }
    
    /**
     * Sets the agency
     *
     * @param \GeorgRinger\References\Domain\Model\Agency $agency
     * @return void
     */
    public function setAgency(\GeorgRinger\References\Domain\Model\Agency $agency)
    {
        $this->agency = $agency;
    }
    
    /**
     * Returns the uri
     *
     * @return string $uri
     */
    public function getUri()
    {
        return $this->uri;
    }
    
    /**
     * Sets the uri
     *
     * @param string $uri
     * @return void
     */
    public function setUri($uri)
    {
        $this->uri = $uri;
    }
    
    /**
     * Returns the logo
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $logo
     */
    public function getLogo()
    {
        return $this->logo;
    }
    
    /**
     * Sets the logo
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $logo
     * @return void
     */
    public function setLogo(\TYPO3\CMS\Extbase\Domain\Model\FileReference $logo)
    {
        $this->logo = $logo;
    }

}