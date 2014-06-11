<?php
use driver\categoryDRIVER as categoryDRIVER;
class userModel extends database{
    public function categorydriver(){
        return new categoryDRIVER();
    }
    public function index(){
        
        return array("categorylist"=>$this->categorydriver()->option());
    }
    private function _categorytoselect(){
        $this->categorydriver()->option();
    }
}
?>