<?php
class index  extends controller{
    public function __construct($_url){
        parent::__construct();
                $this->adminsession();
            if($this->checkmethodexists($this,$_url)){
                    $this->$_url[2]();
            }else{
                $this->initial();
            }
    }
    public function initial(){
       
        $this->view->render('admin/index');
    }
    public function logout(){
                session::delete('admin');
                header("location:".ADMIN);
    }
}
?>

