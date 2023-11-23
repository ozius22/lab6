<?php
require 'index.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <link rel="stylesheet" href="dist/output.css">
</head>
<body class="flex items-center justify-center h-screen">

<div class="display-container text-center mb-11">
    <?php
    session_start();

    if (isset($_SESSION['formInfo'])) {
        $formInfo = $_SESSION['formInfo'];

        echo "<h2 class='text-2xl font-bold mb-4'>Form Information</h2>";
        echo "<p class=''>Last Name: " . $formInfo->getLastName() . "</p>";
        echo "<p class=''>First Name: " . $formInfo->getFirstName() . "</p>";
        echo "<p class=''>Middle Initial: " . $formInfo->getMiddleInitial() . "</p>";
        echo "<p class=''>Age: " . $formInfo->getAge() . "</p>";
        echo "<p class=''>Contact No: " . $formInfo->getContactNo() . "</p>";
        echo "<p class=''>Email: " . $formInfo->getEmail() . "</p>";
        echo "<p class=''>Address: " . $formInfo->getAddress() . "</p>";
        unset($_SESSION['formInfo']);
    } else {
        echo "<p class='text-red-500'>Form information not available.</p>";
    }
    ?>
</div>

<style>
    form {
        display: none;
    }
</style>
</body>
</html>