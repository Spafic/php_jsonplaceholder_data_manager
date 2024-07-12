<?php
require_once ('helper.php');
$url = 'https://jsonplaceholder.org/comments';
$result = json_Content($url);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="../Styles/styles.css">
    <title>Comments</title>

</head>

<body>
<?php require_once 'navbar.html'; ?>
    <h1>Comments</h1>

    <table>
        <tr>
            <th>Id</th>
            <th>Post Id</th>
            <th>User Id</th>
            <th>Profile</th>
        </tr>
        <?php foreach ($result as $user): ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['postId']; ?></td>
                <td><?php echo $user['userId']; ?></td>
                <td>
                    <a href="usercomments.php?id=<?php echo $user['id']; ?>">View Profile</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>