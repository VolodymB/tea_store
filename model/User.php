<?php
require_once "Model.php";

class User extends Model{
    protected $id;
    public $name;
    public $surname;
    public $email;
    public $login;
    public $password;

    public function find($id){
        $sql="SELECT * FROM `user` WHERE `id`=:id";
        $data=array(
            'id'=>$id
        );
        if($result=$this->db->select($sql,$data)){
            $this->id=$result[0]['id'];
            $this->name=$result[0]['name'];
            $this->surname=$result[0]['surname'];
            $this->email=$result[0]['email'];
            $this->login=$result[0]['login'];
            $this->password=$result[0]['password'];
            return true;
        }
        return false;
    }

    public function save(){
        $data=array(
            'username'=>$this->name,
            'surname'=>$this->surname,
            'email'=>$this->email,
            'userlogin'=>$this->login,
            'userpassword'=>$this->password
        );
        if(is_null($this->id)){
            $sql="INSERT INTO `user`(`name`, `surname`, `email`, `login`, `password`) VALUES (:username,:surname,:email,:userlogin,:userpassword)";            
        }else{
            $sql='UPDATE `user` SET `name`=:username,`surname`=:surname,`email`=:email,`login`=:userlogin,`password`=:userpassword WHERE `id`=:id';
            $data['id']=$this->id;
        }
        if($result=$this->db->query($sql,$data)){
            $this->id=$result;
            return true;
        }
        return false;
    }


}

?>