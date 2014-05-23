<!DOCTYPE HTML> 
<html>
    <head>
        <style>    	
            body
            {
            	background-image:url('image/background.jpg');
            }
            h1
            {
                color:white;
                text-align:center;
            }
			td{color:white;}
            th
            {
            	text-align:center;
                background-color:#CC6633;
                color:white;
            }
            table {
                text-align: center;
            }
        </style>
    </head>

    <body> 

        <h1>Book Application!</h1>   
      <table align="center">
        <td>
            <form  action="Search.php" method="post">
                <input  type="submit" name="Search" value="search">
            </form>
        </td>
        </table>
        <br>
        <br>
    <table align="center" " border="1px">
        <tr>
            <th>ID</th>
            <th>Book Name</th>
            <th>Date Create</th>
            <th>Created by</th>
            <th>Authors</th>
            <th>Category</th>
            <th>Update Day</th>
            <th>Price</th>
            <th>Image</th>
            <th>Description</th>
        </tr>
    </tr>
    <?php include("dbconnect.php"); ?> 
    <?php 
    $result = mysql_query("select * from book") or 
    die (mysql_error()); 
    while ($row = mysql_fetch_array($result)) 
    { ?>
    <tr>
       
        <?php 
        include 'display.php';
        } 
        mysql_free_result($result); 
        ?> 	

    </tr>

</table>
<br>
<br>
<table align="center" >
		<td>
	 	<form action="newfile.php" method="post">
        	Input ID book to delete :
        	<input type="text" name="id" size="40">
            <input type="submit" name="Delete" value="delete">
        </form>
        <?php 
        include("dbconnect.php");
        ?>
        <?php
        error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
        if(isset($_POST['Delete']))
				{
					$id = $_POST['id'];
					$result = mysql_query("DELETE FROM book WHERE id = $id");
				}	
		?>
		<td>
		</table>
<br>
<br>
<table align="center" >
	
    <tr>
		
        <td>	
            <form action="add.php" method="post">
                <input type="submit" name="Add" value="   Add   ">
            </form>
        </td>

        <td>
            <form action="Edit.php" method="post">
                <input type="submit" name="Edit" value="   edit   ">
            </form>
        </td>
    </tr>
</table>
</body>
</html>