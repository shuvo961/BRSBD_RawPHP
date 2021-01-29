<?php


namespace App\classes;


class check_status
{

    public function checkStatus($key)
    {

        $sql = "SELECT status FROM user WHERE uid=$key";
        if (mysqli_query(Database::dbConnection(), $sql)) {
            $query = mysqli_query(Database::dbConnection(), $sql);
            $result = mysqli_fetch_assoc($query);
            if($result){
                 return $result;
            }
            else {

                return $result='false';
            }

        } else {
            die("Query Problem" . mysqli_error(Database::dbConnection()));
        }




    }


    public function verify($data)
    {    $fullname= $data["fullname"];
         $fnid= $data["fnid"];

        $sql = "SELECT * FROM user WHERE fullname='$data[fullname]' and fnid='$data[fnid]' and bdate='$data[bdate]' and status=1 ; ";

        if (mysqli_query(Database::dbConnection(), $sql)) {
            $query = mysqli_query(Database::dbConnection(), $sql);
            $result = mysqli_fetch_assoc($query);
            if($result){
                     header("Location: view.php?name=$fullname&id=$fnid");
            }
            else {
                echo '<script type="text/javascript">';
                echo 'alert("You have not been Approved!!")';
                echo '</script>';

            }

        } else {
            die("Query Problem" . mysqli_error(Database::dbConnection()));
        }

    }



    public function view($name,$id)
    {

        $sql = "SELECT * FROM user WHERE fullname='$name' and fnid='$id' ";

        if (mysqli_query(Database::dbConnection(), $sql)) {
            $query = mysqli_query(Database::dbConnection(), $sql);
            $result = mysqli_fetch_assoc($query);
            if($result){
                   return $result;
            }
            else {
                echo "Please enter a valid input";
            }

        } else {
            die("Query Problem" . mysqli_error(Database::dbConnection()));
        }

    }


}