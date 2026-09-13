<?php

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $student_id = $_POST["student_id"] ?? "";
    $student_name = $_POST["student_name"] ?? "";
    $email = $_POST["email"] ?? "";
    $department = $_POST["department"] ?? "";
    $phone = $_POST["phone"] ?? "";

    $book_id = $_POST["book_id"] ?? "";
    $book_title = $_POST["book_title"] ?? "";
    $author = $_POST["author"] ?? "";
    $category = $_POST["category"] ?? "";

    $transaction_type = $_POST["transaction_type"] ?? "";
    $issue_date = $_POST["issue_date"] ?? "";
    $return_date = $_POST["return_date"] ?? "";
    $book_condition = $_POST["book_condition"] ?? "";

    $remarks = $_POST["remarks"] ?? "";


    /* Student Validation */

    if (empty($student_id)) {

        $errors[] = "Student ID is required.";

    }


    if (empty($student_name)) {

        $errors[] = "Student name is required.";

    }


    if (empty($email)) {

        $errors[] = "Email is required.";

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $errors[] = "Invalid email address.";

    }


    if (empty($department)) {

        $errors[] = "Please select your department.";

    }


    if (empty($phone)) {

        $errors[] = "Phone number is required.";

    }


    /* Book Validation */

    if (empty($book_id)) {

        $errors[] = "Book ID is required.";

    }


    if (empty($book_title)) {

        $errors[] = "Book title is required.";

    }


    if (empty($author)) {

        $errors[] = "Author name is required.";

    }


    if (empty($category)) {

        $errors[] = "Please select a book category.";

    }


    /* Transaction Validation */

    if (empty($transaction_type)) {

        $errors[] = "Please select Borrow or Return.";

    }


    if (empty($issue_date)) {

        $errors[] = "Issue date is required.";

    }


    if (empty($return_date)) {

        $errors[] = "Return date is required.";

    }


    if (empty($book_condition)) {

        $errors[] = "Please select the book condition.";

    }


    if (empty($remarks)) {

        $errors[] = "Remarks are required.";

    }


    /* If there are no errors */

    if (count($errors) == 0) {

        header(
            "Location: success.php?" .
            "student_id=" . urlencode($student_id) .
            "&student_name=" . urlencode($student_name) .
            "&email=" . urlencode($email) .
            "&department=" . urlencode($department) .
            "&phone=" . urlencode($phone) .
            "&book_id=" . urlencode($book_id) .
            "&book_title=" . urlencode($book_title) .
            "&author=" . urlencode($author) .
            "&category=" . urlencode($category) .
            "&transaction_type=" . urlencode($transaction_type) .
            "&issue_date=" . urlencode($issue_date) .
            "&return_date=" . urlencode($return_date) .
            "&book_condition=" . urlencode($book_condition) .
            "&remarks=" . urlencode($remarks)
        );

        exit();

    }

}

?>

<!DOCTYPE html>

<html>

<head>

    <title>Library Transaction Result</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #dff6ff;
            margin: 0;
            padding: 40px;
        }

        .container {
            width: 60%;
            margin: auto;
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.15);
        }

        h2 {
            text-align: center;
            color: #159a9c;
        }

        h3 {
            color: #e74c3c;
            text-align: center;
        }

        .error {
            background-color: #ffe6e6;
            padding: 10px;
            margin: 8px 0;
            border-radius: 6px;
            color: #c0392b;
        }

        .back {
            display: block;
            width: 130px;
            margin: 25px auto 0;
            padding: 12px;
            text-align: center;
            text-decoration: none;
            color: white;
            background-color: #20b2aa;
            border-radius: 6px;
        }

    </style>

</head>

<body>

<div class="container">

    <h2>Library Transaction Result</h2>

    <?php

    if (count($errors) > 0) {

        echo "<h3>Transaction Failed</h3>";

        foreach ($errors as $error) {

            echo "<p class='error'>$error</p>";

        }

        echo '<a class="back" href="index.php">Go Back</a>';

    }

    ?>

</div>

</body>

</html><?php

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $student_id = $_POST["student_id"] ?? "";
    $student_name = $_POST["student_name"] ?? "";
    $email = $_POST["email"] ?? "";
    $department = $_POST["department"] ?? "";
    $phone = $_POST["phone"] ?? "";

    $book_id = $_POST["book_id"] ?? "";
    $book_title = $_POST["book_title"] ?? "";
    $author = $_POST["author"] ?? "";
    $category = $_POST["category"] ?? "";

    $transaction_type = $_POST["transaction_type"] ?? "";
    $issue_date = $_POST["issue_date"] ?? "";
    $return_date = $_POST["return_date"] ?? "";
    $book_condition = $_POST["book_condition"] ?? "";

    $remarks = $_POST["remarks"] ?? "";


    /* Student Validation */

    if (empty($student_id)) {

        $errors[] = "Student ID is required.";

    }


    if (empty($student_name)) {

        $errors[] = "Student name is required.";

    }


    if (empty($email)) {

        $errors[] = "Email is required.";

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $errors[] = "Invalid email address.";

    }


    if (empty($department)) {

        $errors[] = "Please select your department.";

    }


    if (empty($phone)) {

        $errors[] = "Phone number is required.";

    }


    /* Book Validation */

    if (empty($book_id)) {

        $errors[] = "Book ID is required.";

    }


    if (empty($book_title)) {

        $errors[] = "Book title is required.";

    }


    if (empty($author)) {

        $errors[] = "Author name is required.";

    }


    if (empty($category)) {

        $errors[] = "Please select a book category.";

    }


    /* Transaction Validation */

    if (empty($transaction_type)) {

        $errors[] = "Please select Borrow or Return.";

    }


    if (empty($issue_date)) {

        $errors[] = "Issue date is required.";

    }


    if (empty($return_date)) {

        $errors[] = "Return date is required.";

    }


    if (empty($book_condition)) {

        $errors[] = "Please select the book condition.";

    }


    if (empty($remarks)) {

        $errors[] = "Remarks are required.";

    }


    /* If there are no errors */

    if (count($errors) == 0) {

        header(
            "Location: success.php?" .
            "student_id=" . urlencode($student_id) .
            "&student_name=" . urlencode($student_name) .
            "&email=" . urlencode($email) .
            "&department=" . urlencode($department) .
            "&phone=" . urlencode($phone) .
            "&book_id=" . urlencode($book_id) .
            "&book_title=" . urlencode($book_title) .
            "&author=" . urlencode($author) .
            "&category=" . urlencode($category) .
            "&transaction_type=" . urlencode($transaction_type) .
            "&issue_date=" . urlencode($issue_date) .
            "&return_date=" . urlencode($return_date) .
            "&book_condition=" . urlencode($book_condition) .
            "&remarks=" . urlencode($remarks)
        );

        exit();

    }

}

?>

<!DOCTYPE html>

<html>

<head>

    <title>Library Transaction Result</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #dff6ff;
            margin: 0;
            padding: 40px;
        }

        .container {
            width: 60%;
            margin: auto;
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.15);
        }

        h2 {
            text-align: center;
            color: #159a9c;
        }

        h3 {
            color: #e74c3c;
            text-align: center;
        }

        .error {
            background-color: #ffe6e6;
            padding: 10px;
            margin: 8px 0;
            border-radius: 6px;
            color: #c0392b;
        }

        .back {
            display: block;
            width: 130px;
            margin: 25px auto 0;
            padding: 12px;
            text-align: center;
            text-decoration: none;
            color: white;
            background-color: #20b2aa;
            border-radius: 6px;
        }

    </style>

</head>

<body>

<div class="container">

    <h2>Library Transaction Result</h2>

    <?php

    if (count($errors) > 0) {

        echo "<h3>Transaction Failed</h3>";

        foreach ($errors as $error) {

            echo "<p class='error'>$error</p>";

        }

        echo '<a class="back" href="index.php">Go Back</a>';

    }

    ?>

</div>

</body>

</html>