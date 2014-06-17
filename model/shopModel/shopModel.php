<?php
use driver\categoryDRIVER as categoryDRIVER;
class shopModel extends database{
    private $_tmp;
    private $_path;
            public function __construct(){
               parent::__construct();
                $this->_path='photo/';
            }
    public function categoryDriver(){
        return new categoryDRIVER();
    }
    private function _formfield($details=array()){
        $default=array("onclick"=>"","value"=>"","attributes"=>"");
        $details=array_merge($default, $details);  
        switch($details['type']){
            case 'textbox':
                $this->_tmp='<input class="textbox" type="text" name="'.$details["name"].'" value="" />';
            break;
            case 'select':
                $this->_tmp='<select class="textbox" '.$details["attributes"].'  name="'.$details["name"].'"><option value="">--select one option----</option>'.$details["value"].'</select>';
            break;
            case 'button':
                $this->_tmp='<input type="button" onclick="'.$details["onclick"].'" class="submit_btn" value="'.$details["value"].'" class="textbox" name="'.$details["name"].'" />';
            break;
            case 'textarea':
                $this->_tmp='<textarea class="textarea"  name="'.$details["name"].'"></textarea>';
            break;
            case 'file':
                $this->_tmp='<input class="textbox" type="file" name="'.$details["name"].'" />';
            break;
        }
        return '<div class="separator"><label class="label">'.$details["label"].'</label>'.$this->_tmp.'<span id="error_'.$details["name"].'"></span></div>';
    }
    public function addform(){
        $field=$this->_formfield(array("name"=>"product_name","label"=>"Product Name","type"=>"textbox"));
        $field.=$this->_formfield(array("name"=>"category","label"=>"Product Category","type"=>"select","value"=>$this->_maincategory(),"attributes"=>"onchange=\"ajax_call('subcategory','inner',{'id':'sub_cat_id','value':this.value})\""));
        $field.=$this->_formfield(array("name"=>"sub_category","label"=>"Select Sub Category","type"=>"select","attributes"=>"id=\"sub_cat_id\""));
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
        $field.=$this->_formfield(array("name"=>"submitt","label"=>"","type"=>"button","value"=>"Store","onclick"=>'ajaxvalidation({\'type\':\'submit\',\'name\':\'shopaddform\'},{\'1d\':[\'product_name\',\'empty\'],\'2d\':[\'category\',\'empty\'],\'3d\':[\'sub_category\',\'empty\'],\'4d\':[\'shop_name\',\'empty\'],\'5d\':[\'street\',\'empty\'],\'6d\':[\'city\',\'empty\'],\'7d\':[\'district\',\'empty\'],\'8d\':[\'state\',\'empty\'],\'9d\':[\'country\',\'empty\'],\'mod\':[\'mobile\',\'number\'],\'10d\':[\'phone\',\'empty\'],\'11d\':[\'description\',\'empty\'],\'12d\':[\'mainimage\',\'file\'],\'tyd\':[\'ajax\',\'ajax\']})'));
        $data='<form action="'.ADMIN.'shop/productstore" method="post" enctype="multipart/form-data" class="form" name="shopaddform">'.$field.'</form>';
       
        return array("title"=>"Product Add Form","data"=>$data);
    }
    private function _maincategory(){
        return $this->categoryDriver()->option();
    }
    public function shopstore(){
                $data=$this->DB_refreshdata($_POST);                
                $res=$this->onefetchstoredProcedure("sp_product('add','(shopname,productname,category,sub_category,street,city,district,state,country,mobile,phone,description)values(\'$data[shop_name]\',\'$data[product_name]\',\'$data[category]\',\'$data[sub_category]\',\'$data[street]\',\'$data[city]\',\'$data[district]\',\'$data[state]\',\'$data[country]\',\'$data[mobile]\',\'$data[phone]\',\'$data[description]\')')");               
                if($res->result=='ok') {
                   $this->_path.='product/'.$res->id.'/';                   
                   mkdir($this->_path);
                   move_uploaded_file($_FILES['mainimage']['tmp_name'], $this->_path.'main.jpg');
                   $this->DB_adminredirect('shop?msg=add_ok');
               }
               else{
                   $this->DB_adminredirect('shop?msg=add_er');
               }
                       
    }
    public function sliderimageform(){
        $field=$this->_formfield(array("name"=>"image","label"=>"Select Image","type"=>"file"));
        $field.=$this->_formfield(array("name"=>"submitt","label"=>"","type"=>"button","value"=>"Store","onclick"=>'ajaxvalidation({\'type\':\'submit\',\'name\':\'slider\'},{\'1d\':[\'image\',\'file\'],\'tyd\':[\'ajax\',\'ajax\']})'));
        $data='<form name="slider" action="'.ADMIN.'shop/sliderimagestore" method="post" enctype="multipart/form-data">'.$field.'</form>';
        return array("title"=>"Product Add Form","data"=>$data);
    }
    public function sliderimagestore(){
        if(isset($_FILES['image']['name'])){
            $name=uniqid();
            if(!move_uploaded_file($_FILES['image']['tmp_name'],'photo/slider/'.$name.'.jpg')){
                error::developererror('upload files error');
            }
            $this->DB_adminredirect('shop/sliderimage?msg=up_ok');            
        }
        else{
            $this->DB_adminredirect('shop/sliderimage?msg=empty');
        }
    }
    public function sliderimage(){
        $path='photo/slider/';
        $val=array_values(array_diff(scandir($path),array('.','..')));
        die('shop-->sliderimage');
        for($i=0;$i<count($val);$i++){
            
        }
    }
    public function searchproduct(){
                $recv=isset($_GET['category'])?$_GET['category']:'update';
                $res=$this->storedProcedure("sp_product('product_search','$recv')");
                if($res->num_rows<=0){
                    return array("searchcontent"=>"no record Found","categorytitle"=>"No record found for this search","categoryleft"=>$this->categorydriver()->leftMenu());
                }
                while($data=$res->fetch_object()){
                    $path=PAGE_PATH.'search/productalone?id='.$data->id;
                    $this->_tmp.='<tr>
                                	<td class="wishlist-image">
                                    	<a href="'.$path.'"><img src="'.PATH.'photo/photo/getindexImagefromsearch?id='.$data->id.'" alt="Product1"></a>
                                    </td>
                                    <td class="wishlist-info">
                                    	<h5><a href="'.$path.'">'.$data->productname.'</a></h5>
                                        <span class="product-category"><a href="'.$path.'">'.$data->categoryname.'</a></span>
										<div class="rating readonly-rating" data-score="4"></div>
                                    </td>                                    
                                    <td class="wishlist-actions"><p>'.$data->shopname.',</p><p>'.$data->street.' ,'.$data->city.'-'.$data->pincode.'</p>'.$data->mobile.'
                                    </td>
                                </tr>';
                }
                return array("searchcontent"=>$this->_tmp,"categorytitle"=>"title f the category","categoryleft"=>$this->categorydriver()->leftMenu());
    }    
    public function getproductalone(){        
         $res=$this->onefetchstoredProcedure("sp_product('id_name_product','1')");         
        return array("id"=>$res->id,"title"=>$res->productname,"description"=>$res->description,"categorylist"=>$this->categorydriver()->optionwithnames(),"categoryleft"=>$this->categorydriver()->leftMenu(),
                "moreimage"=>$this->_getsliderMoreimage($res->id),
                "address"=>"<tr><td>$res->street</td><tr><td>$res->city</td></tr><tr><td>$res->district-$res->pincode</td></tr><tr><td>$res->mobile</td></tr>"
                );      
    }   
    private function _getsliderMoreimage($id){
    $path='photo/product/'.$id.'/';
            if(!file_exists($path)){                
                return false;
            }
            else{
                   $image=array_values(array_diff(scandir($path),array('.','..')));
                       for($i=0;$i<count($image);$i++){
                           if($image[$i]!='main.jpg'){                           
                               $path='';
                                   $this->_tmp.='<li>
                    <a class="fancybox" rel="product-images" href="'.PHOTO_PATH.'product/".$id></a>												
                    <img src="img/products/single1.jpg" data-large="img/products/single1.jpg" alt="" />
                </li>';
                       }
        
                       
            }
            return $this->_tmp;      
        }
     }
}
 /*

  * 
  * 
  *   */                                                                           