<?php
/** Autoloading The required Classes **/


class IndexModel
{
    function __construct(){
      
    }

    public function getUsers(){
        $users = [
            ["name" => "Williams Isaac", "Phone Number" => "090982xxxxxx"],
            ["name" => "Oji Isaac", "Phone Number"=> "080982xxxxxx"]
            ];
        return json_encode($users);
    }
}
 ?>
