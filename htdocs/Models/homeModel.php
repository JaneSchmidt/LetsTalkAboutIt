<?php


class HomeModel{

    public function getArticles(){
        $query = "SELECT * FROM aritcles;";
        
        $connection = Connection::getConnection();
        
        $result = mysqli_query($connection, $query);
        var_dump($result);

        if(!$result){
            echo "Query failed";
        } else {
            header('location: /login');
        }

    }


    
}