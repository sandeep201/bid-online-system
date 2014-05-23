<!DOCTYPE HTML>
<html>
    <head>
        <style>
            body
            {
                background-image:url('image/add.jpg');
            }
             h1
            {
                color:white;
                text-align:center;
            }
			div.transbox
  			{	
  				align: center;
  				width:400px;
  				height:500px;
  				margin:30px 455px;
  				background-color:#ffffff;
  				border:0px solid black;
  				opacity:0.6;
  				filter:alpha(opacity=80);
  			}
  			div.transbox p
  			{
  				align:center
 				margin:30px 40px;
  				font-weight:bold;
                text-align:center;
  			}
        </style>
    </head>
    <body>
         <form action="Edit.php" method="post">
         <h1 align="center">Edit Book</h1>
        	<div class="transbox" align="center">
				<p>	
				<table align="center">
				<br>
           	<tr>
                <td align="righr">Book ID:</td>
                <td><input type="text" name="id"><td>
            </tr>
            <tr>
                <td align="right">Book Name:</td>
                <td><input type="text" name="bookname"></td>
            </tr>
            <tr>
                <td align="right">Creat date:</td>
                <td><input type=date name="createdate"></td>
            </tr>
            <tr>
                <td align="right">Creat user:</td>
                <td><input type="text" name="createuser"></td>
            </tr>
            <tr>
                <td align="right">Authors:</td>
                <td><input type="text" name="author"></td>
            </tr>
            <tr>
                <td align="right">Type:</td>
                <td><input type="text" name="type"></td>
            </tr>
             <tr>
                <td align="right">Update day:</td>
                <td><input type=date name="updateday"></td>
            </tr>
            <tr>
                <td align="right">Price:</td>
                <td><input type="text" name="price"></td>
            </tr>
            
            <tr>
                <td align="right">Image:</td>
                <td><input type='file' name=picturebook value="upload"></td>
            
			</tr>
			
            <tr>
                <td align="right">Description:</td>
                <td><textarea name="description" rows="8"></textarea></td>
            </tr>
            
            
            <tr></tr>
            <tr></tr>
            
            <tr>
            	
                <td align="right" >
                    <input type = submit name= submit value = "Edit">
                </form>
                </td>
                <td>
                <form align="right" action="newfile.php" method="post">
                        <input type="submit" value="cancel">
                </form>
                </td>
            </tr>
        </table>
        </p>
        </div>
        </form>
        <?php include("dbconnect.php");
			if (isset($_POST['submit']))
			{ 
    			$id = $_POST['id'];
    			$bookname=$_POST['bookname'];
    			$createdate=$_POST['createdate'];
   				$createuser=$_POST['createuser'];
    			$author=$_POST['author'];
    			$type=$_POST['type'];
    			$updateday=$_POST['updateday'];
    			$price=$_POST['price'];
    			$picturebook=$_POST['picturebook'];
    			$description=$_POST['description'];
    			
				$query = "UPDATE book set
				bookname = '$bookname',createdate = '$createdate',createuser = '$createuser',author = '$author',
				type = '$type',updateday = '$updateday',price = '$price' ,picturebook = '$picturebook',description= '$description'
				WHERE id = '$id' "; 
				mysql_query($query) or die (mysql_error()); 
				
			} 
			?>
      
    </body>
</html>