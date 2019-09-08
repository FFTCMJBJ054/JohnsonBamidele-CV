<!DOCTYPE html>
 <html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <?php
            if (isset($_POST['submit'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $title = $_POST['title'];
                $comments = $_POST['comments'];
                if (isset($name)){
                    if(isset($email)){
                        if (isset($title)){
                            if (isset($comments)){
                                echo "NAME:". " ". $name. "<br />";
                                echo "EMAIL-ADDRESS:". " " .$email. "<br />";
                                echo "TITLE:" . " ". $title.  "<br/>";
                                echo "COMMENTS:". " " . $comments;
                            }
                        }
                    }
                }
            }

        ?>
    </body>
</html>