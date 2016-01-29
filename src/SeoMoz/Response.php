<?php

namespace SeoMoz;

/**
 * Class Response
 * @package SeoMoz
 * @author Jon Gotlin
 */
final class Response
{
    /**
     * @var
     */
    private $pageAuthority;
    /**
     * @var
     */
    private $domainAuthority;
    /**
     * @var
     */
    private $httpStatusCode;
    /**
     * @var
     */
    private $externalLinks;
    /**
     * @var
     */
    private $mozRank;

    /**
     * @var
     */
    private $timeLastCrawled;

    public function __construct(\stdClass $result)
    {
        if (isset($result->upa)) {
            $this->setPageAuthority($result->upa);
        }
        if (isset($result->pda)) {
            $this->setDomainAuthority($result->pda);
        }

        if (isset($result->us)) {
            $this->setHttpStatusCode($result->us);
        }
        if (isset($result->ueid)) {
            $this->setExternalLinks($result->ueid);
        }
        if (isset($result->umrp)) {
            $this->setMozRank($result->umrp);
        }
        if (isset($result->ulc)) {
            $this->setTimeLastCrawled($result->ulc);
        }
    }


    /**
     * @return mixed
     */
    public function getDomainAuthority()
    {
        return $this->domainAuthority;
    }

    /**
     * @return mixed
     */
    public function getExternalLinks()
    {
        return $this->externalLinks;
    }

    /**
     * @return mixed
     */
    public function getHttpStatusCode()
    {
        return $this->httpStatusCode;
    }

    /**
     * @return mixed
     */
    public function getPageAuthority()
    {
        return $this->pageAuthority;
    }

    /**
     * @return mixed
     */
    public function getMozRank(){
        return $this->mozRank;
    }


    /**
     * @return mixed
     */
    public function getTimeLastCrawled(){
        return $this->timeLastCrawled;
    }

    /**
     * Set time last crawled
     * @param $timeLastCrawled
     */
    private function setTimeLastCrawled($timeLastCrawled){
        $this->timeLastCrawled =  $timeLastCrawled;
    }

    /**
     * @param mixed $mozRank
     */
    private function setMozRank($mozRank){
        $this->mozRank =  $mozRank;
    }

    /**
     * @param mixed $domainAuthority
     */
    private function setDomainAuthority($domainAuthority)
    {
        $this->domainAuthority = $domainAuthority;
    }

    /**
     * @param mixed $externalLinks
     */
    private function setExternalLinks($externalLinks)
    {
        $this->externalLinks = $externalLinks;
    }

    /**
     * @param mixed $httpStatusCode
     */
    private function setHttpStatusCode($httpStatusCode)
    {
        $this->httpStatusCode = $httpStatusCode;
    }

    /**
     * @param mixed $pageAuthority
     */
    private function setPageAuthority($pageAuthority)
    {
        $this->pageAuthority = $pageAuthority;
    }
}