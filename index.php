<?php



// подключение к базе
$pdo = new PDO("mysql:host=localhost; dbname=test", "root", "", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
//подготовить запрос
$statement = $pdo->prepare("SELECT * FROM `tasks`");


// выполнить запрос
$result = $statement->execute();

//var_dump($result);
//var_dump($statement->fetchAll(2));
//var_dump($statement->fetchAll(PDO::FETCH_ASSOC));  //тоже самое

$tasks = $statement->fetchAll(2);

die;







?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1> All tasks </h1>
            <a href="#" class="btn btn-success"> Add task</a>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Go to the store</td>
                    <td>
                        <a href="#" class="btn btn-warning">
                            Edit
                        </a>
                        <a href="#" class="btn btn-danger">
                            Delete
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>