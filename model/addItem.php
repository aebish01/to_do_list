<?php
if(isset($_POST['Title']) || isset($_POST['Description'])) {
    require('/xampp/htdocs/toDoList/controller/connection.php');
    
    $title = $_POST['Title'];
    $description = $_POST['Description'];
    $query = 'INSERT INTO 
    todoitems(Title, Description)
    VALUE(?,?)';
    $statement = $db->prepare($query);
    $results = $statement->execute([$title, $description]);
    $db = null;
    header('Location: http://localhost/toDoList');
    exit();
} else { 
    echo "big error";
}

?>