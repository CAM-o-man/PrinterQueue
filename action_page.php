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

      <?php
        $name = ($_POST["firstname"] + $_POST["lastname"]);
        mkdir("uploads/" . $name);
        $target_dir = "uploads/" . $name;
        $uploadOK = 1;

        if (file_exists($target_file)) {
          echo "Sorry, that file already exists.";
          $uploadOK = 0;
        }

        if ($uploadOK === 0) {
          echo "Sorry, there has been an error uploading your file.";
        } else {
          if (move_uploaded_file($_FILES["file"]["name"], $target_file)) {
            echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded";
          } else {
            echo "An error has been encountered.";
          }
        }
      ?>

    </head>
    <body>
    <!-- All content below here-->
    <?php echo $_POST["firstname"]; ?> <?php echo $_POST["lastname"]; ?> from <?php echo $_POST["academy"]; ?>, you <br/>
    have successfully submitted your file, <?php  pathinfo($target_file, PATHINFO_FILENAME)  ?>.

    <!-- All content above here-->
    </body>
</html>
