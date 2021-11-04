<?php

class UserPremium extends User{
    protected $premium = true;
    protected $cassa = 0;
    protected $addCassa;


    function getPremium(){
        return $this->premium;
    }

    public function getCassa(){
        return $this->cassa;
    }

    public function setCassa($cassa){
        if($this->premium == true){
            $this->cassa = $cassa += 50;
            $this->premium = false;
        }else if($this->premium == false){
            $this->cassa += $cassa;
            $this->premium = false;
        }
    }
}