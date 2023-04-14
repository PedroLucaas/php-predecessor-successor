<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="search.css">
        <title>Result</title>
</head>

<body>
        <div class="container">
                <p>
                        <?php
                        $number = $_REQUEST['enteredNumber'];
                        $predecessor = $number - 1;
                        $successor = $number + 1;

                        print "predecessor: " . $predecessor . '</br>';
                        print "successor: " . $successor;
                        ?>
                </p>
                <button onclick="javascript:window.location.href='index.php'">&#x2b05 Back</button>
        </div>
</body>

</html>