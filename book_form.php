<?php
// Connection to the database
$connection = mysqli_connect('localhost', 'root', 'dt170g', 'travelbook_db');
if (!$connection) {
    die('Connection failed: ' . mysqli_connect_error());
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['send'])) {
    // Use mysqli_real_escape_string to avoid SQL injection
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $phone = mysqli_real_escape_string($connection, $_POST['phone']);
    $address = mysqli_real_escape_string($connection, $_POST['address']);
    $location = mysqli_real_escape_string($connection, $_POST['location']);
    $guests = mysqli_real_escape_string($connection, $_POST['guests']);
    $arrivals = mysqli_real_escape_string($connection, $_POST['arrivals']);
    $leaving = mysqli_real_escape_string($connection, $_POST['leaving']);

    // SQL query to insert data into the database
    $sql = "INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, leaving) VALUES ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')";

    // Execute the query and handle the result
    if (mysqli_query($connection, $sql)) {
        echo "<script>
                alert('Booking submitted successfully!');
                window.location.href='book.html';
              </script>";
    } else {
        echo "Error: " . mysqli_error($connection) . "<br>" . "Query: " . $sql;
    }

    // Close the connection
    mysqli_close($connection);
} else {
    echo "Something went wrong. Please try again.";
}
?>
