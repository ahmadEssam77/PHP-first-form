<?php

// Sanitize the data or secure it after receiveing it from the form.
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Receiveing data from html form.
$fName = test_input($_POST['fName']);
$sName = test_input($_POST['sName']);
$email = test_input($_POST['email']);
$website = test_input($_POST['website']);
$message = test_input($_POST['message']);
$gender = @test_input($_POST['gender']);

// Check if submitting action done or not.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Print on screen some data.
    echo "Welcome ".$fName." ". $sName."<br /> Your email is ".$email."<br /> <br />";
    // Trying validate inputs.
    if ($message == "") {
        echo "You did not enter a message";
    }
    else {
        echo $message;
    }
}
else {
    echo "Ops! not post!";
}

echo "<br /> <br />";

// Upload single file.
// $fileName = $_FILES['the-file']['name'];
// $fileTemp = $_FILES['the-file']['tmp_name'];
// $extension = explode('.', $fileName);
// echo $extension[1];
// move_uploaded_file($fileTemp, "upload/".$_POST['namingFile'].".".$extension[1]);

// The task, Multiple files upload.
$countFiles = count($_FILES['files']['name']);

for ($i = 0; $i < $countFiles; $i++) {
    $fileName = $_FILES['files']['name'][$i];
    move_uploaded_file($_FILES['files']['tmp_name'][$i], 'upload/'.$fileName);
}


?>