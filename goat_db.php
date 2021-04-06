<?php 
    session_start();
    include('server.php');
    
    $errors = array();

    if (isset($_POST['storge_goat'])) {
        $goatId = mysqli_real_escape_string($conn, $_POST['goatId']);
        $goatName = mysqli_real_escape_string($conn, $_POST['goatName']);
        $sex = mysqli_real_escape_string($conn, $_POST['sex']);
        $gene = mysqli_real_escape_string($conn, $_POST['gene']);
        $picture = mysqli_real_escape_string($conn, $_POST['picture']);
        $colour = mysqli_real_escape_string($conn, $_POST['colour']);
        $dateOfBirth = mysqli_real_escape_string($conn, $_POST['dateOfBirth']);
        $wightOfBirth = mysqli_real_escape_string($conn, $_POST['wightOfBirth']);
        $arrivalDate = mysqli_real_escape_string($conn, $_POST['arrivalDate']);
        


        if (empty($goatId)) {
            array_push($errors, "Goat ID is required");
            $_SESSION['error'] = "Goat ID is required";
        }
        if (empty($goatName)) {
            array_push($errors, "Goat Name is required");
            $_SESSION['error'] = "Goat Name is required";
        }
        if (empty($sex)) {
            array_push($errors, "Sex is required");
            $_SESSION['error'] = "Sex is required";
        }
        if (empty($gene)) {
            array_push($errors, "Gene is required");
            $_SESSION['error'] = "Gene is required";
        }
        if (empty($colour)) {
            array_push($errors, "Colour is required");
            $_SESSION['error'] = "Colour is required";
        }
        if (empty($dateOfBirth)) {
            array_push($errors, "Date Of Birth is required");
            $_SESSION['error'] = "Date Of Birth is required";
        }
        if (empty($wightOfBirth)) {
            array_push($errors, "Wight Of Birth is required");
            $_SESSION['error'] = "Wight Of Birth is required";
        }
        if (empty($arrivalDate)) {
            array_push($errors, "Arrival Date is required");
            $_SESSION['error'] = "Arrival Date is required";
        }

        
        if (count($errors) == 0) {
            
            $sql = "INSERT INTO goats (goatId, goatName, sex, gene, picture, colour, dateOfBirth, wightOfBirth, arrivalDate, farmerId) 
            VALUES ('$goatId', '$goatName', '$sex', '$gene', '$picture', '$colour', '$dateOfBirth', '$wightOfBirth', '$arrivalDate', '$farmerId')";
            mysqli_query($conn, $sql);

            $_SESSION['username'] = $username;
            header("location: familygoat.php");
        } else {
            header("location: index.php");
        }
    }

?>