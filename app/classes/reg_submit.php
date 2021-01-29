<?php


namespace App\classes;
use App\classes\Database;

class reg_submit
{

    public function regSubmit($data){


        $fullname= ' ';
        $fullname = $data['fname'].' '.$data['lname'];

        $sql = "INSERT INTO `user` (`uid`, `division`, `district`, `thana`, `fname`, `lname`, `fullname`, `gender`, `bdate`, `father`, `fnationality`, `fnid`, `mother`, `mnationality`, `mnid`, `presaddress`, `peraddress`) VALUES (NULL,
'$data[division]', '$data[district]','$data[thana]','$data[fname]','$data[lname]','$fullname','$data[gender]', '$data[bdate]','$data[father]','$data[fnationality]', '$data[fnid]','$data[mother]','$data[mnationality]','$data[mnid]','$data[presaddress]','$data[peraddress]');";



        if(mysqli_query(Database::dbConnection(),$sql))
        {    $name=$fullname;
              $uniq=$data['fnid'];

            header("Location: success.php?name=$name&key=$uniq");
            die();

        } else {
            die("Query Problem".mysqli_error(Database::dbConnection()));
        }




    }


    public function applicationID($name,$key){


        $sql = "SELECT * FROM `user` WHERE `fullname`='$name' and fnid='$key' ";

        if(mysqli_query(Database::dbConnection(),$sql))
        {
            $query= mysqli_query(Database::dbConnection(),$sql);
            return $query;

        } else {
            die("Query Problem".mysqli_error(Database::dbConnection()));
        }


    }


    public function loadDivisionName(){


        $sql = "SELECT name FROM `divisions` ORDER BY name";


        if(mysqli_query(Database::dbConnection(),$sql))
        {
            $query= mysqli_query(Database::dbConnection(),$sql);

            return $query;

        } else {
            die("Query Problem".mysqli_error(Database::dbConnection()));
        }

    }


    public function loadDistrictName(){


        $sql = "SELECT name FROM `districts` ORDER BY name";


        if(mysqli_query(Database::dbConnection(),$sql))
        {
            $query= mysqli_query(Database::dbConnection(),$sql);

            return $query;

        } else {
            die("Query Problem".mysqli_error(Database::dbConnection()));
        }

    }



    public function loadUpazilaName(){


        $sql = "SELECT name FROM `upazilas` ORDER BY name";


        if(mysqli_query(Database::dbConnection(),$sql))
        {
            $query= mysqli_query(Database::dbConnection(),$sql);

            return $query;

        } else {
            die("Query Problem".mysqli_error(Database::dbConnection()));
        }

    }




}