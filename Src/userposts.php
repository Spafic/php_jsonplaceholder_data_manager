<?php
require_once ('helper.php');
$id = $_GET['id'];
$url = 'https://jsonplaceholder.org/posts/' . $id;
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
    <link rel="stylesheet" href="userposts.css">

    <title>User Comments</title>
</head>

<body>
<?php require_once 'navbar.html'; ?>
    <div class="container">
        <div class="header">
            <h1>User Post Details</h1>
        </div>
        <p><strong>Id : </strong> <?php echo $result['id']; ?></p>
        <p><strong>Slug :</strong> <?php echo $result['slug']; ?></p>
        <p><strong>Title : </strong> <?php echo $result['title']; ?></p>
        <p><strong>Category : </strong> <?php echo $result['category']; ?></p>
        <p><strong>Published At : </strong> <?php echo $result['publishedAt']; ?></p>
        <div class="comment">
            <strong>Post :</strong> <br><?php echo "Published at : " . $result['content']; ?>
        </div>
        <br>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>