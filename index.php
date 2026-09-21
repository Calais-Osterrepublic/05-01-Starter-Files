<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Week 5 Request Practice</title>
    <?php include 'includes/bootstrapcdnlinks.php'; ?>
</head>

<body class="p-3">
    <?php include 'includes/navigation.php'; ?>

    <main class="container py-4">
        <h1>PHP Requests</h1>
        <p>Use the navigation to practice query strings, redirects, and form submissions.</p>

        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Newsletter Form</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <a class="btn btn-primary" href="newsletter.php" role="button">Go NOW</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Redirect Demo</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <!-- clicking this sends you not to "subscribe" but to a new page -->
                        <a class="btn btn-primary" href="subscribe.php?access=denied" role="button">Open Subscribe</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>