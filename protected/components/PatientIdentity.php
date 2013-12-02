<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class PatientIdentity extends CUserIdentity
{
    public $fname
    private $id;
 
    public function authenticate()
    {
        $record=Patient::model()->findAllByAttributes(array('fname'=>$this->fname));
        if($record===null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        else
        {
            $this->id=$record->fname;            
            $this->errorCode=self::ERROR_NONE;
        }
        return !$this->errorCode;
    }
 
    public function getId(){
        return $this->id;
    }
}

