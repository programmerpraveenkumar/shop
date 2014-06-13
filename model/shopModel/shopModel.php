<?php
class shopModel extends database{
    private $_tmp;
    private function _formfield($details=array()){
        switch($details['type']){
            case 'textbox':
                $this->_tmp='<input class="textbox" type="text" name="'.$details["name"].'" value="" />';
            break;
            case 'select':
                $this->_tmp='<select class="textbox" name="'.$details["name"].'"><option>--select one option----</option></select>';
            break;
            case 'button':
                $this->_tmp='<input type="button" class="submit_btn" value="'.$details["value"].'" class="textbox" name="'.$details["name"].'" />';
            break;
            case 'textarea':
                $this->_tmp='<textarea class="textarea"  name="'.$details["name"].'"></textarea>';
            break;
            case 'textarea':
                $this->_tmp='<input class="textbox" type="file" name="'.$details["name"].'" />';
            break;
        }
        return '<div class="separator"><label class="label">'.$details["label"].'</label>'.$this->_tmp.'</div>';
    }
    public function addform(){
        $field=$this->_formfield(array("name"=>"product_name","label"=>"Product Name","type"=>"textbox"));
        $field.=$this->_formfield(array("name"=>"category","label"=>"Product Category","type"=>"select"));
        $field.=$this->_formfield(array("name"=>"sub_category","label"=>"Select Sub Category","type"=>"select"));
        $field.=$this->_formfield(array("name"=>"shop_name","label"=>"Shop Name","type"=>"textbox"));
        $field.=$this->_formfield(array("name"=>"street","label"=>"Street","type"=>"textbox"));
        $field.=$this->_formfield(array("name"=>"city","label"=>"City","type"=>"textbox"));
        $field.=$this->_formfield(array("name"=>"district","label"=>"district","type"=>"textbox"));
        $field.=$this->_formfield(array("name"=>"state","label"=>"state","type"=>"textbox"));
        $field.=$this->_formfield(array("name"=>"country","label"=>"Country","type"=>"textbox"));
        $field.=$this->_formfield(array("name"=>"mobile","label"=>"Mobile","type"=>"textbox"));
        $field.=$this->_formfield(array("name"=>"phone","label"=>"Phone","type"=>"textbox"));
        $field.=$this->_formfield(array("name"=>"description","label"=>"Description","type"=>"textarea"));
        $field.=$this->_formfield(array("name"=>"mainimage","label"=>"Main Product Image","type"=>"file"));
        $field.=$this->_formfield(array("name"=>"submit","label"=>"","type"=>"button","value"=>"Store"));
        $data='<form class="form">'.$field.'</form>';
        return array("title"=>"Product Add Form","data"=>$data);
    }
}
