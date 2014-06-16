<?php
class shop extends controller{
    public function __construct($_url){
        parent::__construct();
        $this->adminsession();
            if($this->checkmethodexists($this,$_url)){
                  $this->$_url[2]();
            }else{
                $this->initial();
            }
    }
    private function initial(){
        $this->view->data=$this->model->call('shop','addform');
        $this->view->render('admin/index');
    }
    private function indexproduct(){
        die('index product');
    }
    private function sliderimage(){
        die('images');
    }
    private function productstore(){
        $this->model->call('shop','shopstore');
    }
}

