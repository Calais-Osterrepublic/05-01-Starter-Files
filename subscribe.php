<?php
// Step 1: Read the access value from the query string.
$access = $_GET['access'] ?? null;
var_dump($access);

// Step 2: Redirect to login.php when access is denied.
if ($access === "denied") {
    // if access === denied, subscribe bumps you to login
    // this allows for website bumping
    //ALL header action should be done before any part of the page loaded
    header("Location: login.php");
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Subscribe</title>
    <?php include 'includes/bootstrapcdnlinks.php'; ?>
</head>

<body class="p-3">
    <?php include 'includes/navigation.php'; ?>

    <main class="container">
        <h1>Subscribe</h1>
        <p>The Subscribe page rendered because this request was not redirected.</p>

    </main>
    <?php
    // ALL header action should be done before any part of the page loaded
    // if ($access === "denied") {
    //     // if access === denied, subscribe bumps you to login
    //     // this allows for website bumping
    //     header("Location: login.php");
    // }
    ?>
</body>

</html>