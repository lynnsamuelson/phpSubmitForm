
<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $words = htmlentities($_POST['words']);

    $mysqli = new mysqli("localhost", "root", "WNS2+=mt;v&<f5?g", "sys");
    try {
        if($mysqli){
            $sql = "INSERT INTO sys.contactform (name, email, words) VALUES (?, ?, ?)";
            $stm = $mysqli->prepare($sql);
            $stm->bind_param('sss', $name, $email, $words);
            $stm->execute();
        }
        header( 'Location: ./form.html?message=success' ) ;
    }catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
        header( 'Location: ./form.html?message=error' ) ;
    }

    mysqli_close($mysqli);

?>