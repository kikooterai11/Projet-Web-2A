<?php
// Include the config file to connect to the database
include('config.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Sanitize and assign form inputs to variables with default values
    $roomNum = isset($_POST['room_num']) ? mysqli_real_escape_string($conn, $_POST['room_num']) : '';
    $roomType = isset($_POST['room_type']) ? mysqli_real_escape_string($conn, $_POST['room_type']) : '';
    $roomStatus = isset($_POST['room_status']) ? mysqli_real_escape_string($conn, $_POST['room_status']) : '';
    $reservationId = isset($_POST['id_res']) ? mysqli_real_escape_string($conn, $_POST['id_res']) : '';

    // Insert the room data into the room table
    $sql_room = "INSERT INTO room (roomNum, type, status, idRes)
                 VALUES ('$roomNum', '$roomType', '$roomStatus', '$reservationId')";
    
    if (mysqli_query($conn, $sql_room)) {
        // Success message
        echo "Room added successfully!";
    } else {
        // Error message
        echo "Failed to add room: " . mysqli_error($conn);
    }

    // Optionally close the connection
    mysqli_close($conn);
}
?>
