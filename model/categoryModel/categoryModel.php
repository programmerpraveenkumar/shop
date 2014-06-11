<?php
use driver\categoryDRIVER as categoryDRIVER;
class categoryModel extends database{
    public function categoryDriver(){
        return new categoryDRIVER();
    }
    public function addForm(){
        $data='<form class="form" method="post" action="'.ADMIN.'category/addstore" name="category" onsubmit="return validation(\'category\',{0:[\'name\',\'empty\']})"><div class="separator"><label class="label">Cagory Name</label><input class="textbox" type="text" name="name" /><span id="error_name"></span></div><div class="submitdiv separator "><input class="submit_btn" type="submit" value="Add" /></div> </form>';
        return array("title"=>"Add Category","data"=>$data);
    }
    public function delete(){
    }
    public function update(){
   
        
    }
    public function select(){
        $data=$this->categoryDriver()->get();
        while($get_res=$data->fetch_object()){
            print_r($get_res);
        }
        //die();
    }
    public function addstore(){
        $data=$this->DB_refreshdata($_POST);
        $this->storedProcedure("sp_category('add','$data[name]')");
        $this->DB_adminredirect('category/add?msg=add_ok');        
    }
    
}
?>