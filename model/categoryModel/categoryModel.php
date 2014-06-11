<?php
use driver\categoryDRIVER as categoryDRIVER;
class categoryModel extends database{
    public function categoryDriver(){
        return new categoryDRIVER();
    }
    private function _categoryform($type=''){
        return '<form class="form" method="post" action="'.ADMIN.'category/action?type='.$type.'" name="category" onsubmit="return validation(\'category\',{0:[\'name\',\'empty\']})">';
    }
    public function addForm(){
        $data=$this->_categoryform('add').'<div class="separator"><label class="label">Category Name</label><input class="textbox" type="text" name="name" /><span id="error_name"></span></div><div class="submitdiv separator "><input class="submit_btn" type="submit" value="Add" /></div> </form>';
        return array("title"=>"Add Category","data"=>$data);
    }
    public function deleteForm(){
      $data=$this->_categoryform('delete').'<div class="separator"><label class="label">Select Category</label><select class="select" name="name"><option value="">--select category--</option></option>'.$this->categoryDriver()->option().'</select><span id="error_name"></span></div><div class="submitdiv separator "><input class="submit_btn" type="submit" value="Add" /></div> </form>';
        return array("title"=>"Delete Category","data"=>$data);  
    }
    public function updateForm(){
   $data=$this->_categoryform('delete').'<div class="separator"><label class="label">Select Category</label><input class="textbox" type="text" name="name" /><span id="error_name"></span></div><div class="submitdiv separator "><input class="submit_btn" type="submit" value="Add" /></div> </form>';
        return array("title"=>"Update Category","data"=>$data);
        
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
        $this->DB_adminredirect('category/?type=add&msg=add_ok');        
    }
    public function update(){     
        $data=$this->DB_refreshdata($_POST);
        $this->storedProcedure("sp_category('add','$data[name]')");
        $this->DB_adminredirect('category/?type=update&msg=update_ok');        
    }
    public function delete(){     
        $data=$this->DB_refreshdata($_POST);
        $this->storedProcedure("sp_category('delete','$data[name]')");
        $this->DB_adminredirect('category/?type=delete&msg=del_ok');        
    }
    
}
?>