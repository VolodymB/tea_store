<?php
require_once "Model.php";
class Comment extends Model{
    private $id;
    public $user_id;
    public $comment;
    public $raiting;
    private $product_id;
    public $user;
    public $product;

    public function find($id){
        $sql="SELECT * FROM `comment` WHERE `id`=:id";
        $data=array(
            'id'=>$id
        );
        if($result=$this->db->select($sql,$data)){
            $this->id=$result[0]['id'];
            $this->user_id=$result[0]['user_id'];
            $this->comment=$result[0]['comment'];
            $this->raiting=$result[0]['raiting'];
            $this->product_id=$result[0]['product_id'];
            $this->user=$this->getUser();
            $this->product=$this->getProduct();
            return true;
        }
        return false;
    }

    public function save(){
        $data=array(

        );
        if(is_null($this->id)){
            $sql='';
        }
    }


    public function getUser(){
        $user= new User();
        $user->find($this->user_id);
        return $user;
    }

    public function getProduct(){
        $product=new Product();
        $product->find($this->product_id);
        return $product;
    }



}



?>