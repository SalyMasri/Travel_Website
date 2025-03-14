<?php
// Connection to the database
$connection = mysqli_connect('localhost', 'root', 'dt170g', 'travelbook_db');
if (!$connection) {
    die('Connection failed: ' . mysqli_connect_error());
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = mysqli_real_escape_string($connection, $_POST['fullname']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $message = mysqli_real_escape_string($connection, $_POST['message']);

    // SQL query to insert data into the database
    $sql = "INSERT INTO messages (fullname, email, message) VALUES ('$fullname', '$email', '$message')";

    // Execute the query
    if (mysqli_query($connection, $sql)) {
        echo "<script>
        alert('Message sent successfully!');
        window.location.href='contact.html';
      </script>";
        
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }

    // Close the connection
    mysqli_close($connection);
}
?>
