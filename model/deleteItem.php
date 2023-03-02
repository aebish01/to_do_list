<?php
    /*if(isset($_POST['ItemNum'])){
        require('/xampp/htdocs/toDoList/controller/connection.php');
        $id = $_POST['ItemNum'];

       $statement = $db->prepare('DELETE FROM todoitems WHERE ItemNum=?');
        $results = $statement->execute([$id]);

        if($results) {
            echo "Success";
        } else {
            echo "Opps something went wrong";
        }
        $db = null;
        exit();  
    }*/
    require('/xampp/htdocs/toDoList/controller/connection.php');
    function deleteItem($itemNum) {
        global $db;
        $query = 'DELETE FROM todoitems WHERE ItemNum = :itemNum';
        $statement = $db->prepare($query);
        $statement->bindValue(":itemNum", $itemNum);
        $statement->execute();
        $statement->closeCursor();    
    }
    
    