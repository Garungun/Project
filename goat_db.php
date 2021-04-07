<?php 
    session_start();
    include('server.php');
    
    $errors = array();

    if (isset($_POST['storge_goat'])) {
        $fatherId = mysqli_real_escape_string($conn, $_POST['fatherId']);
        $fatherGoatName = mysqli_real_escape_string($conn, $_POST['fatherGoatName']);
        $fatherGene  = mysqli_real_escape_string($conn, $_POST['fatherGene']);
        $motherId = mysqli_real_escape_string($conn, $_POST['motherId']);
        $motherGoatName = mysqli_real_escape_string($conn, $_POST['motherGoatName']);
        $motherGene = mysqli_real_escape_string($conn, $_POST['motherGene']);
        $goatId = mysqli_real_escape_string($conn, $_POST['goatId']);
        $goatName = mysqli_real_escape_string($conn, $_POST['goatName']);
        $sex = mysqli_real_escape_string($conn, $_POST['sex']);
        $gene = mysqli_real_escape_string($conn, $_POST['gene']);
        $picture = mysqli_real_escape_string($conn, $_POST['picture']);
        $colour = mysqli_real_escape_string($conn, $_POST['colour']);
        $dateOfBirth = mysqli_real_escape_string($conn, $_POST['dateOfBirth']);
        $wightOfBirth = mysqli_real_escape_string($conn, $_POST['wightOfBirth']);
        $arrivalDate = mysqli_real_escape_string($conn, $_POST['arrivalDate']);
        
        if (empty($fatherId)) {
            array_push($errors, "Father Goat ID is required");
            $_SESSION['error'] = "Father Goat ID is required";
        }
        if (empty($fatherGoatName)) {
            array_push($errors, "Father Goat Name is required");
            $_SESSION['error'] = "Father Goat Name is required";
        }
        if (empty($fatherGene)) {
            array_push($errors, "Father Gene is required");
            $_SESSION['error'] = "Father Gene is required";
        }
        if (empty($motherId)) {
            array_push($errors, "Mother Goat ID is required");
            $_SESSION['error'] = "Mother Goat ID is required";
        }
        if (empty($motherGoatName)) {
            array_push($errors, "Mother Goat Name is required");
            $_SESSION['error'] = "Mother Goat Name is required";
        }
        if (empty($motherGene)) {
            array_push($errors, "Mother Gene is required");
            $_SESSION['error'] = "Mother Gene is required";
        }
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
            
            $sql1 = "INSERT INTO fatherGoat (fatherId, fatherGoatName, fatherGene) 
            VALUES ('$fatherId', '$fatherGoatName', '$fatherGene')";
            mysqli_query($conn, $sql1);

            $sql2 = "INSERT INTO motherGoat (motherId, motherGoatName, motherGene) 
            VALUES ('$motherId', '$motherGoatName', '$motherGene')";
            mysqli_query($conn, $sql2);

            $sql3 = "INSERT INTO goats (goatId, goatName, sex, gene, picture, colour, dateOfBirth, wightOfBirth, arrivalDate, farmerId, fatherId, motherId) 
            VALUES ('$goatId', '$goatName', '$sex', '$gene', '$picture', '$colour', '$dateOfBirth', '$wightOfBirth', '$arrivalDate', 
            (SELECT farmerId FROM farmer), (SELECT fatherId FROM fatherGoat), (SELECT motherId FROM motherGoat))";
            mysqli_query($conn, $sql3);

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Finished";
            header("location: index.php");
        } else {
            header("location: goatstorage.php");
        }
    }

?>