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
        <div class="input-group">
            <label for="gene">Confirm Password</label>
            <input type="text" name="gene">
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
            <label for="arrivalDate">Tel No.</label>
            <input type="text" name="arrivalDate">
        </div>
        <div class="input-group">
            <button type="submit" name="reg_user" class="btn">Next</button>
        </div>
        
    </form>

</body>
</html>