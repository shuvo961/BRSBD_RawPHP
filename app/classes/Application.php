<?php


namespace App\classes;

use App\classes\Database;
class Application
{
      public  function  getAllPublishedBlogInfo(){

          $sql = "SELECT * FROM blogs WHERE status=1";
          if(mysqli_query(Database::dbConnection(),$sql)){

              $query= mysqli_query(Database::dbConnection(),$sql);
              return $query;

          } else {
              die('Query problem'.mysqli_query(Database::dbConnection(),$sql));
          }


      }
    public  function  getAllPublishedBlog($id){

        $sql = "SELECT * FROM blogs WHERE id=$id";
        if(mysqli_query(Database::dbConnection(),$sql)){

            $query= mysqli_query(Database::dbConnection(),$sql);
            return $query;

        } else {
            die('Query problem'.mysqli_query(Database::dbConnection(),$sql));
        }


    }

}