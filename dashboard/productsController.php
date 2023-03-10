<?php

include_once 'database.php';

    class productsController{
        public $db;
        public function __construct(){
            $this->db = new Database;
        }

    public function getAll(){
        $query = $this->db->pdo->query('SELECT * from produkte');
       return $query->fetchAll();
    }

    public function insert($request){
        $request['image']='./IMG/'.$request['image'];
        $query =$this->db->pdo->prepare('INSERT INTO produkte (image,title,name,description) VALUES (:image, :title, :name,:description)');

        $query->bindParam(':image',$request['image']);
        $query->bindParam(':title',$request['title']);
        $query->bindParam(':name',$request['name']);
        $query->bindParam(':description',$request['description']);
        $query->execute();

        return header('Location:dashboard.php');

    }

    public function edit($id){
        $query = $this->db->pdo->prepare('SELECT * from produkte WHERE id=:id');
        $query->bindParam(':id',$id);
        $query->execute();

        return $query->fetch();
    }

    public function update($request, $id){
        $query = $this->db->pdo->prepare('UPDATE produkte SET image = :image, title = :title, name = :name, description =:description
        WHERE id=:id');

        $query->bindParam(':image',$request['image']);
        $query->bindParam(':title',$request['title']);
        $query->bindParam(':name',$request['name']);
        $query->bindParam(':description',$request['description']);
        $query->bindParam(':id',$id);
        $query->execute();

    return header('Location:dashboard.php');
    }

    public function delete($id){
        $query=$this->db->pdo->prepare('DELETE from produkte WHERE id=:id');
        $query->bindParam(':id',$id);
        $query->execute();

        return header('Location:dashboard.php');
    }
}
    
?>