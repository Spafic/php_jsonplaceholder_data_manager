<?php
require_once ('helper.php');
$url = 'https://jsonplaceholder.org/posts';
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
    <title>Posts</title>

</head>

<body>
<?php require_once 'navbar.html'; ?>
    <h1>Posts</h1>

    <table>
        <tr>
            <th>Id</th>
            <th>slug</th>
            <th>title</th>
            <th>Profile</th>
        </tr>
        <?php foreach ($result as $user): ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['slug']; ?></td>
                <td><?php echo $user['title']; ?></td>
                <td>
                    <a href="userposts.php?id=<?=$user['id']; ?>">View Profile</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>