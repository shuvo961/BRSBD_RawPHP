<?php


namespace App\classes;
use App\classes\Database;

class users
{
    public function getAlluser(){

        $sql = "SELECT * FROM `user`";
        if(mysqli_query(Database::dbConnection(),$sql)){

            $query = mysqli_query(Database::dbConnection(),$sql);

            return $query;
        }

    }


    public function viewApplicant($uid){

        $sql = "SELECT * FROM `user` WHERE uid=$uid";
        if(mysqli_query(Database::dbConnection(),$sql)){

            $query = mysqli_query(Database::dbConnection(),$sql);
            $result=mysqli_fetch_assoc($query);
            return $result;        }

    }




    public function approveUser($id){

        $sql = "UPDATE user SET status=1 WHERE uid=$id;";
        if(mysqli_query(Database::dbConnection(),$sql)){

            header("Location: tables.php");
        }

    }

    public function declineUser($id){

        $sql = "DELETE FROM user WHERE uid=$id";
        if(mysqli_query(Database::dbConnection(),$sql)){

            header("Location: tables.php");
        }

    }




}