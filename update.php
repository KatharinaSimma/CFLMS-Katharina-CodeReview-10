<?php 
    require_once 'actions/db_connect.php';

    if ($_GET['id']) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM library WHERE id = {$id}" ;
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        $conn->close();
    }
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



<body>

    <nav>
        <?php include 'navbar.php'; ?>
    </nav>
<main class="container m-4 text-info w-75 mx-auto">

    <h2 class="m-4 text-info">Edit Medium</h2>

    <form action="actions/a_update.php" method="post">

        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title" placeholder="Title of Medium" value="<?php echo $row['title'] ?>">
        </div>

        <div class="form-group row">
            <div class="form-group col-md-6">
                <label>Author's first name</label>
                <input type="text" class="form-control" name="author_fname" placeholder="First Name" value="<?php echo $row['author_fname'] ?>">
                
            </div>
            <div class="form-group col-md-6">
                <label>last name</label>
                <input type="text" class="form-control" name="author_lname" placeholder="Last Name" value="<?php echo $row['author_lname'] ?>">
            </div>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text text-info bg-white" name="description">Description</span>
            </div>
            <textarea name="description" class="form-control" aria-label="With textarea" value="<?php echo $row['description']?>"></textarea>
            
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputState">Type of Medium</label>
                <select name="pub_type" id="inputState" class="form-control">
                    <option value="book" selected>Book</option>
                    <option value="CD">DVD</option>
                    <option value="DVD">CD</option>
                </select>
            </div>

            <div class="form-group col-md-8">
                <label for="image">Image</label>
                <input name="image" type="text" class="form-control" id="image" value="<?php echo $row['image']?>">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="date">Publication Date</label>
                <input name="pub_date" type="date" class="form-control" id="date" value="<?php echo $row['pub_date']?>">
            </div>

            <div class="form-group col-md-7">
                <label for="ISBN">ISBN</label>
                <input name="ISBN" type="text" class="form-control" id="ISBN" value="<?php echo $row['ISBN']?>">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="inputCity">Publisher</label>
                <input name="publisher_name" type="text" class="form-control" id="inputCity" value="<?php echo $row['publisher_name']?>">
            </div>

            <div class="form-group col-md-4">
                <label for="inputZip">Publisher Address</label>
                <input name="publisher_address" type="text" class="form-control" id="inputZip" value="<?php echo $row['publisher_address']?>">
            </div>

            <div class="form-group col-md-3">
                <label for="inputState">Publisher Size</label>
                <select name="publisher_size" id="inputState" class="form-control" value="<?php echo $row['publisher_size']?>">
                    <option value="small" >small</option>
                    <option value="medium">medium</option>
                    <option value="big">big</option>
                </select>
            </div>
        </div>


        <input type= "hidden" name= "id" value= "<?php echo $row['id']?>"/>
        <button type="submit" name="submit" class="btn btn-info">Save Changes</button>

        <a href="index.php"><button type="button" class="btn btn-info">Back to list</button></a>


    </form>

    <?php
        include 'actions/a_update.php'
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