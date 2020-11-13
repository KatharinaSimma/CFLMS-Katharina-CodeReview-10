<!DOCTYPE html>
<html>
<head>
   <title>Big Library  |  Add Media</title>

   <style type= "text/css">
       fieldset {
            margin: auto;
            margin-top: 100px;
            width: 50% ;
       }

       table tr th  {
           padding-top: 20px;
           text-align: left;
       }
   </style>

</head>
<body>

<fieldset>
   <legend>Add Media</legend>

   <form  action="actions/a_create.php" method="post">
       <table cellspacing= "0" cellpadding="0">
           <tr>
               <th>Title</th>
               <td><input type="text" name="title" placeholder="Title of Medium"/></td>
           </tr>    
           <tr>
               <th>Author's first name</th>
               <td><input  type="text" name="author_fname" placeholder="First Name"/></td>
           </tr>
           <tr>
               <th>Author's last name</th>
               <td><input type="text" name="author_lname" placeholder ="Last Name"/></td>
           </tr>
           <tr>
               <th>ISBN</th>
               <td><input type="text" name="ISBN" placeholder ="ISBN"/></td>
           </tr>
           <tr>
               <th>Description</th>
               <td><input type="text" name="description" placeholder ="Description"/></td>
           </tr>
           <tr>
               <th>Publication Date</th>
               <td><input type="text" name="pub_date" placeholder ="yyyy-mm-dd"/></td>
           </tr>
           <tr>
               <th>Publisher's name</th>
               <td><input type="text" name="publisher_name" placeholder ="Publisher Name"/></td>
           </tr>
           <tr>
               <th>Publisher's address</th>
               <td><input type="text" name="publisher_address" placeholder ="Publisher Address"/></td>
           </tr>
           <tr>
                <th>Publisher's size</th>
                <td>
                    <select name="publisher_size">
                            <option value="small">Small</option>
                            <option value="medium">Medium</option>
                            <option value="big">Big</option>
                    </select>
                </td>
           </tr>
           <tr>
                <th>Type of Medium</th>
                <td>
                    <select name="pub_type">
                            <option value="book">Book</option>
                            <option value="CD">CD</option>
                            <option value="DVD">DVD</option>
                    </select>
                </td>
           </tr>
           <tr>
               <td><button type ="submit" name="submit">Insert user</button></td>
               <td><a href= "index.php"><button  type="button">Back</button></a></td>
           </tr>
       </table>
   </form>

</fieldset>

</body>
</html>