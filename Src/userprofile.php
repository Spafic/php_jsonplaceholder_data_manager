<?php
require_once ('helper.php');
$id = $_GET['id'];
$url = 'https://jsonplaceholder.org/users/' . $id; // Ensure the URL is correct
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
    <link rel = "stylesheet" href="userprofile.css">
    <title>User Profile</title>
</head>

<body>
<?php require_once 'navbar.html'; ?>
    <div class="container">
        <h1><?php echo $result['firstname'] ." ". $result['lastname']; ?> Details</h1>
        <div class="profile-info"><strong>First name:</strong> <?php echo $result['firstname']; ?></div>
        <div class="profile-info"><strong>Last name:</strong> <?php echo $result['lastname']; ?></div>
        <div class="profile-info"><strong>Email:</strong> <?php echo $result['email']; ?></div>
        <div class="profile-info"><strong>Id:</strong> <?php echo $result['id']; ?></div>
        <div class="profile-info"><strong>Birth Date:</strong> <?php echo $result['birthDate']; ?></div>
        <div class="profile-info"><strong>Phone number:</strong> <?php echo $result['phone']; ?></div>
        <div class="profile-info"><strong>Address:</strong>
            <?php echo $result['address']['city'] . " - " . $result['address']['street']; ?></div>
        <div class="profile-info"><strong>Company:</strong>
            <?php echo $result['company']['name'] . " - " . $result['company']['catchPhrase'] . " - " . $result['company']['bs']; ?>
        </div>
        <div class="profile-info"><strong>Website:</strong> <a href="http://<?php echo $result['website']; ?>"
                target="_blank"><?php echo $result['website']; ?></a></div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>