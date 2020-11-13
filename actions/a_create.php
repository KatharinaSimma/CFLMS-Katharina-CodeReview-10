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

        /*$sql = "INSERT INTO `library`(`id`, `title`, `image`, `author_fname`, `author_lname`, `ISBN`, `description`, `pub_date`, `publisher_name`, `publisher_address`, `publisher_size`, `pub_type`) VALUES ('$title', '$fname', '$lname', '$ISBN', '$description', '$pub_date', '$p_name', '$p_address','$p_size', '$pub_type')";*/

        $sql = "INSERT INTO `library`(
            `title`,
            `author_fname`,
            `author_lname`,
            `ISBN`,
            `description`,
            `pub_date`,
            `publisher_name`,
            `publisher_address`,
            `publisher_size`,
            `pub_type`
        )
        VALUES(
            '$title',
            '$fname',
            '$lname',
            '$ISBN',
            '$description',
            '$pub_date',
            '$p_name',
            '$p_address',
            '$p_size',
            '$pub_type'
        )";
                
            if($conn->query($sql) === TRUE) {
                echo "<p>New Record Successfully Created</p>" ;
                echo "<a href='../create.php'><button type='button'>Back</button></a>";
                    echo "<a href='../index.php'><button type='button'>Home</button></a>";
            } else {
                echo "Error " . $sql . ' ' . $conn->connect_error;
            }

        $conn->close();
    }

?>