<?php


class WardenClass {

    private $uid, $uname, $ucontact, $urole, $uemail, $errorMsg;

    public function __construct($userID, $userName) {
        $this->uid = $userID;
        $this->uname = $userName;
    }

    public function getUserID() {
        return $this->uid;
    }

    public function getUserName() {
        return $this->uname;
    }

    public function getUserContactNo() {
        return $this->ucontact;
    }
    
    public function getUserRole(){
        return $this->urole;
    }
    
    public function getUserEmail() {
        return $this->uemail;
    }
    
    public function setErrMsg($msg) {
        $this->errorMsg = $msg;
    }

    public function getErrMsg() {
        return $this->errorMsg;
    }

}
