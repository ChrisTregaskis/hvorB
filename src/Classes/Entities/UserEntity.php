<?php

namespace WBApp\Entities;

class UserEntity extends ValidationEntity implements \JsonSerializable
{
    protected $id;
    protected $fname;
    protected $sname;
    protected $fullName;
    protected $knownCompany;
    protected $knownEmail;
    protected $companyAPIResult;
    protected $matchPrevious;
    protected $matchCurrent;

    public function __construct(
        $fname = null,
        $sname = null,
        $fullName = null, 
        $knownCompany = null,
        $companyAPIResult = null,
        $matchPrevious = null,
        $matchCurrent = null)
    {
        $this->fname = ($this->fname ?? $fname);
        $this->sname = ($this->sname ?? $sname);
        $this->fullName = ($this->fullName ?? $fullName);
        $this->knownCompany = ($this->knownCompany ?? $knownCompany);
        $this->companyAPIResult = ($this->companyAPIResult ?? $companyAPIResult);
        $this->matchPrevious = ($this->matchPrevious ?? $matchPrevious);
        $this->matchCurrent = ($this->matchCurrent ?? $matchCurrent);

        $this->sanitiseData();
    }

    /**
     * Returns protected properties from object.
     *
     * @return array|mixed
     */
    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'fname' => $this->fname,
            'sname' => $this->sname,
            'fullName' => $this->fullName,
            'knownCompany' => $this->knownCompany,
            'knownEmail' => $this->knownEmail,
            'companyAPIResult' => $this->companyAPIResult,
            'matchPrevious' => $this->matchPrevious,
            'matchCurrent' => $this->matchCurrent,

        ];
    }

    /**
     *  function will sanitise all the fields for a row of data
     */
    private function sanitiseData()
    {
        $this->id = (int) $this->id;
        $this->fname = self::sanitiseString($this->fname);
        $this->sname = self::sanitiseString($this->sname);
        $this->fullName = self::sanitiseString($this->fullName);
        $this->knownCompany = self::sanitiseString($this->knownCompany);
        $this->companyAPIResult = self::sanitiseString($this->companyAPIResult);
        $this->matchPrevious = (int) ($this->matchPrevious);
        $this->matchCurrent = (int) ($this->matchCurrent);

    }
}
