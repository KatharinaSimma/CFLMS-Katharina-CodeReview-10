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
   <title >Edit User</title>

   <style type= "text/css">
       fieldset {
           margin : auto;
           margin-top: 100px;
            width: 50%;
       }

       table  tr th {
           padding-top: 20px;
       }
   </style>

</head>
    <body>
        <fieldset>
        <legend>Update user</legend>

            <form action="actions/a_update.php"  method="post">
                <table  cellspacing="0" cellpadding= "0">
                    <tr>
                        <th>Title</th>
                        <td><input type="text" value="<?php echo $row['title'] ?>" name="title" placeholder="Title of Medium"/></td>
                    </tr>    
                    <tr>
                        <th>Author's first name</th>
                        <td><input  type="text" value="<?php echo $row['author_fname'] ?>"name="author_fname" placeholder="First Name"/></td>
                    </tr>
                    <tr>
                        <th>Author's last name</th>
                        <td><input type="text" value="<?php echo $row['author_lname'] ?>"name="author_lname" placeholder ="Last Name"/></td>
                    </tr>
                    <tr>
                        <th>ISBN</th>
                        <td><input type="text" value="<?php echo $row['ISBN'] ?>"name="ISBN" placeholder ="ISBN"/></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><input type="text" value="<?php echo $row['description'] ?>" name="description" placeholder ="Description"/></td>
                    </tr>
                    <tr>
                        <th>Publication Date</th>
                        <td><input type="text" value="<?php echo $row['pub_date'] ?>"name="pub_date" placeholder ="yyyy-mm-dd"/></td>
                    </tr>
                    <tr>
                        <th>Publisher's name</th>
                        <td><input type="text" value="<?php echo $row['publisher_name'] ?>"name="publisher_name" placeholder ="Publisher Name"/></td>
                    </tr>
                    <tr>
                        <th>Publisher's address</th>
                        <td><input type="text" value="<?php echo $row['publisher_address'] ?>" name="publisher_address" placeholder ="Publisher Address"/></td>
                    </tr>
                    <tr>
                        <th>Publisher's size</th>
                        <td>
                            <select name="publisher_size" value="<?php echo $row['publisher_size'] ?>">
                                    <option value="small">Small</option>
                                    <option value="medium">Medium</option>
                                    <option value="big">Big</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Type of Medium</th>
                        <td>
                            <select name="pub_type" value="<?php echo $row['pub_type'] ?>">
                                    <option value="book">Book</option>
                                    <option value="CD">CD</option>
                                    <option value="DVD">DVD</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <input type= "hidden" name= "id" value= "<?php echo $row['id']?>" />
                        <td><button  type= "submit">Save Changes</button ></td>
                        <td><a  href= "index.php"><button  type="button" >Back</button ></a ></td >
                    </tr>
                </table>
            </form >
        </fieldset >
    </body >
</html >