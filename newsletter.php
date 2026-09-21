<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Newsletter</title>
    <?php include 'includes/bootstrapcdnlinks.php'; ?>
</head>
<body class="p-3">
    <?php include 'includes/navigation.php'; ?>

    <main class="container" style="max-width: 760px;">
        <h1>Newsletter</h1>

        <!-- Step 3: Display the current request method here. -->
        <!-- strong:  -->
        <!--  < ? = : shortcut for the echo function -->
        <p> Request method is <strong><?= $_SERVER['REQUEST_METHOD'] ?></p>
        <!-- Step 4: Inspect the POST array here. -->
        <!-- HTML - PHP mixing -->
        <?php  if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
            <h2>Raw POST data</h2>
            <!-- pre: Make the var_dump look like code -->
            <pre><?php var_dump($_POST); ?></pre>
            <!-- Now a GET request, as it wasn't submitted using a $_POST. POST shows up within the body rather than the URL like $_GET -->
            <a class="btn btn-secondary" href="newsletter.php">Back to form</a>
        <?php else: ?>
        <!-- IF the information request is NOT POST, it allows the following to load: -->

        <!-- Step 5: Place this form in the GET branch. -->
        <form action="newsletter.php" method="post">
            <!-- Bootstrap provides form controls, but you need to add form -->
            <div class="mb-3">
                <label class="form-label" for="user">Username</label>
                <input class="form-control" type="text" id="user" name="user">
            </div>

            <div class="mb-3">
                <label class="form-label" for="email">Email</label>
                <input class="form-control" type="text" id="email" name="email">
            </div>

            <button class="btn btn-primary" type="submit">Subscribe</button>
        </form>
        <?php endif; ?>
    </main>
</body>
</html>
