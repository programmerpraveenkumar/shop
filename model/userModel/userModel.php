<?php
use driver\categoryDRIVER as categoryDRIVER;
class userModel extends database{
    private $_tmp;
    public function categorydriver(){
        return new categoryDRIVER();
    }
    public function index(){
        //<li><a href="#">Shop by Brands <i class="icons icon-right-dir"></i></a></li>
        return array("categorylist"=>$this->categorydriver()->option(),"categoryleft"=>$this->_leftMenu());
    }
    private function _categorytoselect(){
        $this->categorydriver()->option();
    }
    private function _leftMenu(){
        $data=$this->categorydriver()->get();
        while($res=$data->fetch_object()){
            $this->_tmp.='<li><a href="#">'.$res->name.'<i class="icons icon-right-dir"></i></a></li>';
        }
        return $this->_tmp;
    }
}
?>