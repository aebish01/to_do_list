<?php

require('controller/connection.php'); 


$todos = $db->query("SELECT * FROM todoitems");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/main.css">
    <title>Document</title>
    <style>
        body {
    border-style: solid;
    border-color: gray;
}

h1 {
    background-color: blue;
    color: white;
    margin-top: 0%;
    padding-left: 10px;
    padding-top: 10px;
    padding-bottom: 10px;
}
.todo-item h2 {
    color: darkblue;
    margin: 0%;
}
.todo-item small {
    color: darkblue;
    margin: 0%;
    font-size: 16px;
    
}
.todo-item button {
    float: right;
    margin-right: 10%;
    font-size: 40px;
    color: red;
    width: 5px;
    padding: 2px;
    border: none;
    background-color: bisque;

}
.todo-item {
    background-color: bisque;
    padding-left: 5%;
    border: grey solid 2px;
    margin: 10px;
    border-radius: 25px 25px 25px;
}
.addSect {
    background-color: blue;
}
.addSect input {
    height: 30px;
    width: 400px;
    margin: 5px;
    border-radius: 5px 5px 5px;
}
.addSect button {
    margin-left: 20px;
}
    </style>
</head>
<body>
    <header>
        <?php include 'view/header.php';  ?>
    </header>
    <main>

<?php if($todos->rowCount() <= 0){ ?>
                    <div class="empty">
                        <p>No to do items</p>
                    </div>
<?php } ?>

<?php while($todo = $todos->fetch(PDO::FETCH_ASSOC)) { ?>
    <div class="todo-item">
    
        <button action="model/deleteItem.php" type="submit" id="<?php echo $todo['ItemNum']; ?>"
            class="remove-to-do">x</button>
        
    
        
        <h2 ><?php echo $todo['Title'] ?></h2>
    
    <br>
    <small id="desc"><?php echo $todo['Description'] ?></small>
    </div> 
<?php } ?>
    </main>
    <footer>
        <div class="addSect">
            <form action="model/addItem.php" method="POST" autocomplete="off">
                <input type="text"
                name="Title"
                placeholder="Input title of To Do Item"
                required/>
                <br>
                
                <input type="text"
                name="Description"
                placeholder="Input description of To Do Item"
                required/>
                <button type="submit">Add Item</button>
            </form>
        </div>
    </footer>
</body>

</html>