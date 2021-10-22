<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World in PHP</title>
</head>
<body>
    <?php
    //test heelo world
    #course id: 477-302
    /* semester: 1/2021 */
        echo "Hello world in PHP!";
    ?>
    <?php
        echo "<h1>Hello world in PHP!</h1>";
    ?>

    <!-- ---- -->

    <?php 
        echo "<div style='color:red'><h1>Hello World in PHP</h1></div> without HTML";
    ?>
    <div style="color:green">
        <h1>
            <?php echo "Hello world in PHP";?>
        </h1>
    </div>
    without HTML!

    <?php
        $txt1 = "I am ";
        $age = 21;
        $txt2 = " years old.";
        echo $txt1 . $age . $txt2;
    ?>
</body>
</html>