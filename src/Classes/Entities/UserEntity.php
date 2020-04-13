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
        $this->matchPrevious = (bool) ($this->matchPrevious);
        $this->matchCurrent = (bool) ($this->matchCurrent);

    }

    /** Get user id
     *
     * @return mixed
     */
    public function getUserId()
    {
        return $this->id;
    }

    /** Get user first name
     *
     * @return string
     */
    public function getUserFName(): string
    {
        return $this->fname;
    }

    /** Get user surname
     *
     * @return string
     */
    public function getUserSName(): string
    {
        return $this->sname;
    }

    /** Get user full name
     *
     * @return string
     */
    public function getUserFullName(): string
    {
        return $this->fullName;
    }

    /** Get user known company
     *
     * @return string
     */
    public function getUserKnownCompany(): string
    {
        return $this->knownCompany;
    }

    /** Get user known email
     *
     * @return mixed
     */
    public function getUserKnownEmail()
    {
        return $this->knownEmail;
    }

    /** Get user last company api result
     *
     * @return string
     */
    public function getUserCompanyAPIResult(): string
    {
        return $this->companyAPIResult;
    }

    /** Get bool saying if current known company matches any previous company
     *
     * @return bool
     */
    public function getUserMatchPrevious()
    {
        return $this->matchPrevious;
    }

    /** Get bool saying if current known company matches current api call company
     *
     * @return
     */
    public function getUserMatchCurrent()
    {
        return $this->matchCurrent;
    }

}
