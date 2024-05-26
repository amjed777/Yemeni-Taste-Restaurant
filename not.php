<?php 
include "dpcon.php";

if (isset($_POST['full_name']) && isset($_POST['Emil']) && isset($_POST['topic']) && isset($_POST['Note_message'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $full_name = validate($_POST['full_name']);
    $Emil = validate($_POST['Emil']);
    $topic = validate($_POST['topic']);
    $Note_message = validate($_POST['Note_message']);

    if (empty($full_name)) {
        header("Location: indx.php?error=full_name is required");
        exit();
    } else if (empty($Emil)) {
        header("Location: indx.php?error=Emil is required");
        exit();
    } else if (empty($topic)) {
        header("Location: indx.php?error=topic is required");
        exit();
    } else if (empty($Note_message)) {
        header("Location: indx.php?error=Note_message is required");
        exit();
    } else {
        $sql = "INSERT INTO customer_note (full_name, Emil, topic, Note_message) VALUES ('$full_name', '$Emil', '$topic', '$Note_message')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "HELLO";
            header("Location: indx.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
} else {
    header("Location: indx.php");
    exit();
}
?>
