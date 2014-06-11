<?php
class adminModel extends database{
    public function adminvalidation(){
                $data=$this->DB_refreshdata($_POST);
        if($data['username']=='admin' && $data['password']=='admin'){
            session::set('admin','admin');
            $this->DB_adminredirect('index');
            return false;
        }
        $this->DB_adminredirect('index/?msg=error');
    }
}
