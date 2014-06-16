<?php
class search extends controller{
    public function __construct($url){
        parent::__construct();
        if($this->checkmethodexists($this, $url)){
             $this->$url[2]();                
        }
        else{
             $this->initial();                
        }
    }
    private function initial(){
        $this->view->data=$this->model->call('user','index');
        $this->view->render('page/search');
    }
    private function productalone(){
        //$this->view->data=$this->model->call('user','index');
        $this->view->render('page/product');
    }
    
}
?>

