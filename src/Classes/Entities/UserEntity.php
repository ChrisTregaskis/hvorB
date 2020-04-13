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


    /**
     * Returns protected properties from object.
     *
     * @return array|mixed
     */
    public function jsonSerialize()
    {f

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
}
