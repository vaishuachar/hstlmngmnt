<?php


class StudentClass {

    private $uregno, $uid, $uname, $ugender, $date, $ucontact, $guardian, $relationship, $gcontact, $paddress, $urole, $uemail, $errorMsg;

    public function __construct($userID, $userName) {
        $this->uid = $userID;
        $this->uname = $userName;
    }
    
    public function getUserRegNo() {
        return $this->uregno;
    }

    public function getUserID() {
        return $this->uid;
    }

    public function getUserName() {
        return $this->uname;
    }

    public function getUserGender() {
        return $this->ugender;
    }
    
    public function getUserDob() {
        return $this->date;
    }
    
    public function getUserContactNo() {
        return $this->ucontact;
    }
    
    public function getUserGuardian() {
        return $this->guardian;
    }
    
    public function getRelationship() {
        return $this->relationship;
    }
    
    public function getGuardianConNo() {
        return $this->gcontact;
    }
    
    public function getUserPermanentAddr() {
        return $this->paddress;
    }
    
    public function getUserRole() {
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
