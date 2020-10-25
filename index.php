<!DOCTYPE html>
<html>

<head>
    <!-- Bootstrap Imports -->
    <?php include 'includes/bootstrap-scripts.php';?>

    <!-- Animate.css Import -->
    <?php include 'includes/animate-scripts.php';?>

    <!-- Other Imports -->
    <link rel="stylesheet" href="stylesheets/styles.css">

    <title>Home Page</title>
</head>

<body>
    <div class="animate__animated animate__fadeIn">
        <div class="text-center pt-5 pb-5">
            <h1>Welcome, User!</h1>
        </div>
        <div class="pt-5 d-flex justify-content-around">
            <a href="treatments.php" class="btn">
                <img src="images/medicine-icon.png" alt="Medicine Icon">
                <br>
                <h3>Medicine</h3>
            </a>
            <a href="prediction-form.php" class="btn">
                <img src="images/question-mark-icon.png" alt="Question Mark Icon">
                <br>
                <h3>Make a Prediction</h3>
            </a>
            <a href="history.php" class="btn">
                <img src="images/book-icon.png" alt="Book Icon">
                <br>
                <h3>Patient History</h3>
            </a>
        </div>
    </div>
</body>

</html>