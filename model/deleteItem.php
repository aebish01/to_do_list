<?php
    if(isset($_POST['ItemNum'])){
        require('/xampp/htdocs/toDoList/controller/connection.php');
        $id = $_POST['ItemNum'];

  /*      $statement = $db->prepare('DELETE FROM todoitems WHERE ItemNum=?');
        $results = $statement->execute([$id]);

        if($results) {
            echo "Success";
        } else {
            echo "Opps something went wrong";
        }
        $db = null;
        exit();  
    }*/
    function delete_itemNum($id)
{
    global $db;
    //$query = ;
    $statement = $db->prepare('DELETE FROM todoitems WHERE ID = :item_id');
   // $statement->bindValue(':item_id', $itemNum);
    $statement->execute([$id]);
      
}
    }