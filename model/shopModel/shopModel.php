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
        die('shop model-->sliderimage');
        for($i=0;$i<count($val);$i++){
            
        }
    }
    
    /*

     * <div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="img/products/sample1.jpg" alt="Product1">
												<a href="products_page_v1.html" class="product-hover">
													<i class="icons icon-eye-1"></i> Quick View
												</a>
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.html">Lorem ipsum dolor sit amet</a></h5>
												<span class="price">$251.00<?php echo $i; ?></span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Add to cart</span>
													</span >
												</span>
												<span class="add-to-favorites">
													<span class="action-wrapper">
														<i class="icons icon-heart-empty"></i>
														<span class="action-name">Add to wishlist</span>
													</span>
												</span>
												<span class="add-to-compare">
													<span class="action-wrapper">
														<i class="icons icon-docs"></i>
														<span class="action-name">Add to Compare</span>
													</span>
												</span>
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
     * 
     *      */
}
                                                                            