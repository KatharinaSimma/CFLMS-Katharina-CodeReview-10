<?php 

require_once 'db_connect.php';



if ($_POST) {
    $title = $_POST['title'];
    $fname = $_POST['author_fname'];
    $lname = $_POST['author_lname'];
    $ISBN = $_POST[ 'ISBN'];
    $description = $_POST['description'];
    $pub_date = $_POST['pub_date'];
    $p_name = $_POST['publisher_name'];
    $p_address = $_POST['publisher_address'];
    $p_size = $_POST['publisher_size'];
    $pub_type = $_POST['pub_type'];

    $id = $_POST['id'];


    $sql = "UPDATE library
        SET 
            `title` = '$title',
            `author_fname` = '$fname',
            `author_lname` = '$lname',
            `ISBN` = '$ISBN',
            `description` = '$description',
            `pub_date` = '$pub_date',
            `publisher_name` = '$p_name',
            `publisher_address` = '$p_address',
            `publisher_size` = '$p_size',
            `pub_type`  = '$pub_type'
        WHERE id = {$id}";


    if($conn->query($sql) === TRUE) {
        echo "<h2>Successfully Updated</h2>";
        echo "<a href='../update.php?id=" .$id."'><button type='button' class='btn btn-info my-4'>Back to Editing</button></a>";
        echo "<a href='../index.php'><button type='button' class='btn btn-info my-4'>Home</button></a>";
    } else {
            echo "Error while updating record : ". $conn->error;
    }

    $conn->close();

}

?>

