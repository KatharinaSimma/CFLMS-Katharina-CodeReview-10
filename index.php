<?php require_once 'actions/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <title>Big Library</title>


</head>
<body class="bg-light">
<nav>
    <?php include 'navbar.php'; ?>
</nav>


<main></main>
<div class ="container w-80">

    <h1 class="text-info my-5">All media in the Big Library </h1>
    <a href= "create.php"><button type="button" class='btn btn-info'>Add Media</button></a>

   
    <table class="table text-info table-hover m-3">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Date of Publishing</th>
                <th scope="col">Availability</th>
            </tr>
        </thead>
       <tbody>
       <?php
           $sql = "SELECT * FROM library";
           $result = $conn->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "  <tr>
                                <td scope='row'>" . $row['id'] ."</td>    
                                <td>" . $row['title'] ."</td>
                                <td>" . $row['author_fname'] ." ". $row['author_lname'] ."</td>
                                <td>" . $row['pub_date'] . "</td>
                                <td>" . $row['status'] . "</td>
                                <td>
                                    <a href='update.php?id=" .$row['id']."'><button type='button' class='btn btn-info'>Edit</button></a>
                                     <a href='delete.php?id=" .$row['id']."'><button type='button' class='btn btn-info'>Delete</button></a>
                                </td>
                             </tr>" ;
               }
           } else  {
               echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
           }
            ?>
       </tbody>
   </table>

   <a href= "create.php"><button type="button" class='btn btn-info'>Add Media</button></a>

   

</div>

</main>

<footer class="mt-4">
    <?php include 'navbar.php'; ?>
</footer>

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





</body>
</html>