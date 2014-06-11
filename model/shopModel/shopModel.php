<?php
class shopModel extends database{
    public function addform(){
        $data='<form><div><label>Shop name</label><input type="text"  name="shopname" value=""/></div></form>';
        return array("title"=>"shopform","data"=>$data);
    }
}
