<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
    private $id;
 
    public function authenticate()
    {
        $record=Login::model()->findByAttributes(array('loginName'=>$this->username));
        if($record===null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        else if($record->password!==crypt($this->password, $this->username))
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else
        {
            $this->id=$record->loginName;
            $this->setState('roles', $record->userType);            
            $this->errorCode=self::ERROR_NONE;
        }
        return !$this->errorCode;
    }
 
    public function getId(){
        return $this->id;
    }
}

