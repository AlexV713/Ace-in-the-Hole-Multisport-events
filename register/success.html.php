<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/styles.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/cf72e27b3d.js" crossorigin="anonymous"></script>
    <script src="../scripts.js"></script>
    <title>Ace in the Hole Multisports Events</title>
</head>

<body>

    <?php require_once("../includes/header.html.php"); ?>

    <main>

        <div id="wrapper">

            <h1>Thank you!</h1>
            <p><strong>Our records show you submitted the following:</strong><br>
                <strong>Name:</strong> <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?><br>
                <strong>Age:</strong> <?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?><br>
                <strong>Gender:</strong> <?php echo htmlspecialchars($gender, ENT_QUOTES, 'UTF-8'); ?><br>
                <strong>Role:</strong> <?php echo htmlspecialchars($role, ENT_QUOTES, 'UTF-8'); ?><br>
                <strong>Email:</strong> <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?><br><br>
                <strong>Emergency Contact Name:</strong> <?php echo htmlspecialchars($econtactname, ENT_QUOTES, 'UTF-8'); ?><br>
                <strong>Emergency Contact Phone:</strong> <?php echo htmlspecialchars($econtactphone, ENT_QUOTES, 'UTF-8'); ?><br><br>
                <strong>Saturday Event:</strong> <?php echo htmlspecialchars($saturdayevent, ENT_QUOTES, 'UTF-8'); ?><br><br>
                <strong>Sunday Event:</strong> <?php echo htmlspecialchars($sundayevent, ENT_QUOTES, 'UTF-8'); ?><br><br>
                <strong>Special Accomodations:</strong> <?php echo htmlspecialchars($accommodations, ENT_QUOTES, 'UTF-8'); ?><br>
            </p>

            <button onclick="topFunction()" id="up-button" title="Go to top">Top</button>

        </div>

    </main>

    <?php require_once("../includes/footer.html.php"); ?>

</body>

</html>