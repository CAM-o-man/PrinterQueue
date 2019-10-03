<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="You have successfully submitted your file."
        <title>Submitted</title>
        <!-- handle file upload -->
        <?php
            $target_dir = "/uploads";
            $target_file = $target_dir . basename($_FILES["file"]["name"]);
            $uploadOK = 1;
            $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        ?>
    </head>
    <body>
    <!-- All content below here-->
    <?php echo $_POST["firstname"]; ?> <?php echo $_POST["lastname"]; ?> from <?php echo $_POST["academy"]; ?>, you <br/>
    have successfully submitted your file, <?php  pathinfo($target_file, PATHINFO_FILENAME)  ?>.

    <!-- All content above here-->
    </body>
</html>
