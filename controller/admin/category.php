<?php
class category extends controller{
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
             $this->view->render('admin/index');
        }
}
?>