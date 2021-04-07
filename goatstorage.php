<?php 
    session_start();
    include('server.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="header">
        <h2>Goats Storage</h2>
    </div>

    <form action="goat_db.php" method="post">
        <?php include('errors.php'); ?>
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <div class="input-group">
            <label for="fatherId">Father Goat ID</label>
            <input type="text" name="fatherId">
        </div>
        <div class="input-group">
            <label for="fatherGoatName">Father Goat Name</label>
            <input type="text" name="fatherGoatName">
        </div>
        <div>
            <label for="fatherGene">Father Gene</label>
            <select id="fatherGene" name="fatherGene">
                <option value="Anglonubian">Anglonubian</option>
                <option value="Boer">Boer</option>
                <option value="Saanen">Saanen</option>
                <option value="Laoshan">Laoshan</option>
                <option value="Alpine">Alpine</option>
                <option value="Toggenburg">Toggenburg</option>
            </select>    
        </div>
        <div class="input-group">
            <label for="motherId">Mother Goat ID</label>
            <input type="text" name="motherId">
        </div>
        <div class="input-group">
            <label for="motherGoatName">Mother Goat Name</label>
            <input type="text" name="motherGoatName">
        </div>
        <div>
            <label for="motherGene">Mother Gene</label>
            <select id="motherGene" name="motherGene">
                <option value="Anglonubian">Anglonubian</option>
                <option value="Boer">Boer</option>
                <option value="Saanen">Saanen</option>
                <option value="Laoshan">Laoshan</option>
                <option value="Alpine">Alpine</option>
                <option value="Toggenburg">Toggenburg</option>
            </select>  
        </div>
        <div class="input-group">
            <label for="goatId">Goat ID</label>
            <input type="text" name="goatId">
        </div>
        <div class="input-group">
            <label for="goatName">Goat Name</label>
            <input type="text" name="goatName">
        </div>
        <div>
            <input type="radio" id="male" name="sex" value="male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="sex" value="female">
            <label for="female">Female</label>
        </div>
        <div>
            <label for="gene">Gene</label>
            <select id="gene" name="gene">
                <option value="Anglonubian">Anglonubian</option>
                <option value="Boer">Boer</option>
                <option value="Saanen">Saanen</option>
                <option value="Laoshan">Laoshan</option>
                <option value="Alpine">Alpine</option>
                <option value="Toggenburg">Toggenburg</option>
            </select> 
        </div>
        <div>
            <label for="picture">Goat Picture</label><br>
            <input type="file" id="picture" name="picture">
        </div>
        <div class="input-group">
            <label for="colour">Colour</label>
            <input type="text" name="colour">
        </div>
        <div class="input-group">
            <label for="dateOfBirth">Date Of Birth</label>
            <input type="date" id="dateOfBirth" name="dateOfBirth">
        </div>
        <div class="input-group">
            <label for="wightOfBirth">Wight Of Birth</label>
            <input type="text" name="wightOfBirth">
        </div>
        <div class="input-group">
            <label for="arrivalDate">Arrival Date</label>
            <input type="date" id="arrivalDate" name="arrivalDate">
        </div>
        <div class="input-group">
            <button type="submit" name="storge_goat" class="btn">Submit</button>
        </div>
        
    </form>

</body>
</html>