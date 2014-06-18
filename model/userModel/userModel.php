<?php
use driver\categoryDRIVER as categoryDRIVER;
class userModel extends database{
    private $_tmp;
    public function categorydriver(){
        return new categoryDRIVER();
    }
    public function index(){
        //<li><a href="#">Shop by Brands <i class="icons icon-right-dir"></i></a></li>
        return array("categorylist"=>$this->categorydriver()->optionwithnames(),"categoryleft"=>$this->categorydriver()->leftMenu(),"product"=>$this->_getproductlist());
    }
    private function _categorytoselect(){
        $this->categorydriver()->option();
    }
//    private function _leftMenu(){
//        $data=$this->categorydriver()->get();
//        while($res=$data->fetch_object()){
//            $this->_tmp.='<li><a href="#">'.$res->name.'<i class="icons icon-right-dir"></i></a></li>';
//        }
//        return $this->_tmp;
//    }
    private function _getproductlist(){
    $load=array();
                $res=$this->storedProcedure("sp_product('by_rank','')");
        while($data=$res->fetch_object()){
            $productalone=PAGE_PATH.'search/productalone?id='.$data->id;
        $load[]='<div><!-- Carousel Item -->
                            <div class="product">
											
                        <div class="product-image">
                                <img src="'.PATH.'photo/photo/getindexImagefromsearch?id='.$data->id.'" alt="Product1">
                                <a href="'.$productalone.'">
                                        
                                </a>
                        </div>

                        <div class="product-info">
                                <h5><a href="'.$productalone.'">Shop name</a></h5>
                               <span class="price">Product name</span>                                
                        </div>

                        
                </div>
                <!-- /Carousel Item -->
        </div>';
    }
//    $max=9;
//    if(count($load)<$max){
//        $max=count($load);
//    }
//    $another=array();
//    $j=0;
//    for($i=0;$i<$max;$i++){
//        if($i%3==0 && $i!=0){
//            $j++;
//           
//        }
//         $another[$j].=$load[$i];   
//    }
  
    //echo count($another);
    //die();
   return array_chunk($load,'3');     
    }
}
?>