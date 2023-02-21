<?php
    if(isset($_POST['ItemNum'])){
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
    }
?>