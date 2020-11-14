<?php 

require_once 'db_connect.php';

?>

<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <title>Edit Media</title>

</head>



<body class="bg-light">

    <nav>
        <?php include '../navbar.php'; ?>
    </nav>

<main class="container">

<?php
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
        echo "<h2 class='text-info mt-4'>The record was successfully updated! </h2>";
        echo "<a href='../update.php?id=" .$id."'><button type='button' class='btn btn-info mr-2'>Back to Editing</button></a>";
        echo "<a href='../index.php'><button type='button' class='btn btn-info my-4'>Home</button></a>";
    } else {
            echo "Error while updating record : ". $conn->error;
    }

    $conn->close();

}

?>

</main>



<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
crossorigin="anonymous"></script>



</body >
</html >