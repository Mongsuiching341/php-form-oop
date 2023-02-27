<?php
//person class
include './oop/classes.php';
//task 3 new script
include './script.php';
//instance of person class for task 2;
$userOne = new Person('John', 'john@gmail.com');

//new instance for task 3
$name = '';
$email = '';
$userTwo = new Person();
//task 3
if (isset($_POST['submit'])) {
    setNameEmail($userTwo);

    $name = $userTwo->getName();
    $email = $userTwo->getEmail();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>
    <section class="container">
        <div class="form flex-item">
            <h2>Task-1</h2>
            <form action="" method="post">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value=<?php echo $name ?>>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value=<?php echo $email ?>>
                <button type="submit" name="submit">Submit</button>
            </form>
        </div>
        <div class="oop-output flex-item">
            <h2>Task-2</h2>
            <h5>User Name: <?php echo $userOne->getName(); ?></h5>
            <h5>User Email: <?php echo $userOne->getEmail(); ?></h5>
        </div>
        <div class="task-3 flex-item">
            <h2>Task-3</h2>
            <?php if ($name !== '' && $email !== '') : ?>
                <h5>User Name: <?php echo $userTwo->getName(); ?></h5>
                <h5>User Email: <?php echo $userTwo->getEmail(); ?></h5>
            <?php else : ?>
                <h5>User name and email is empty</h5>
            <?php endif; ?>

        </div>
    </section>
</body>

</html>