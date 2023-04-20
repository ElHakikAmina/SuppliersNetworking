<?php
class User{
    static public function getProfile($data)
    {
        $id = $data['id'];
        try{
            $query = 'SELECT * FROM client WHERE id=:id';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":id"=>$id));
            $product = $stmt->fetch(PDO::FETCH_OBJ);
            return $product;
        }catch(PDOException $ex)
        {
            echo 'erreur'.$ex->getMessage();
        }
    }
    static public function getAll()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM client');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;
    }
    static public function totalClient()
    {
        $query='SELECT * FROM client';
        $stmt =DB::connect()->prepare($query);
        $stmt->execute();
        $count = $stmt->rowCount();
        return $count;
    }
    static public function createUser($data)
    {
        $stmt = DB::connect()->prepare('
        INSERT INTO client 
        (nom_complet,telephone,adresse,ville,email,password,role)
        VALUES
        (:nom_complet,:telephone,:adresse,:ville,:email,:password,:role)
        ');
        $stmt->bindParam(':nom_complet',$data['nom_complet']);
        $stmt->bindParam(':telephone',$data['telephone']);
        $stmt->bindParam(':adresse',$data['adresse']);
        $stmt->bindParam(':ville',$data['ville']);
        $stmt->bindParam(':email',$data['email']);
        $stmt->bindParam(':password',$data['password']);
        $stmt->bindParam(':role',$data['role']);
        if($stmt->execute())
        {
            return 'ok';
        }else{
            return 'error';
        }
        $stmt->close();
        $stmt = null;
    }
    static public function loginAdmin($data)
    {
        $email=$data['email'];
        try{
            $queryAdmin='SELECT * FROM admin where email=:email';
            $stmtAdmin =DB::connect()->prepare($queryAdmin);
            $stmtAdmin->execute(array(":email"=>$email));
            $userAdmin =$stmtAdmin->fetch(PDO::FETCH_OBJ);
            return $userAdmin;
            if($stmtAdmin->execute())
            {
                return 'ok';
            }
        }catch (PDOException $ex)
        {
            echo 'erreur'.$ex->getMessage();
        }
        
    }
    static public function loginClient($data)
    {
        $email=$data['email'];
        try{
            $queryClient='SELECT * FROM client where email=:email';
            $stmtClient =DB::connect()->prepare($queryClient);
            $stmtClient->execute(array(":email"=>$email));
            $userClient =$stmtClient->fetch(PDO::FETCH_OBJ);
            return $userClient;
            if($stmtClient->execute())
            {
                return 'ok';
            }
        }catch (PDOException $ex)
        {
            echo 'erreur'.$ex->getMessage();
        }
        
    }
   
}
?>