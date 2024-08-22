<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- SITE TITLE -->
    <title> Unified Payment Solution </title>

    <!--Header-->
    <?php isset($header) ? include($header): ''?>


</head>

<body class="theme-light">

    <div id="page">

        <!--Content-->
        <?php (isset($content)) ? include($content) : ''; ?>
    </div>

    <!--Footer-->
    <?php (isset($footer)) ? include($footer): ''; ?>

</body>

</html>