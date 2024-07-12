<?php
require_once ('helper.php');
$id = $_GET['id'];
$url = 'https://jsonplaceholder.org/comments/' . $id;
$result = json_Content($url);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../Styles/styles.css">
    <link rel="stylesheet" href="usercomments.css">
    <title>User Comments</title>

</head>

<body>
<?php require_once 'navbar.html'; ?>
    <div class="container">
        <div class="header">
            <h1>User Comment Details</h1>
        </div>
        <p><strong>Id is :</strong> <?php echo $result['id']; ?></p>
        <p><strong>Post Id :</strong> <?php echo $result['postId']; ?></p>
        <p><strong>User Id :</strong> <?php echo $result['userId']; ?></p>
        <div class="comment">
            <strong>Comment :</strong> <br><?php echo $result['comment']; ?>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>