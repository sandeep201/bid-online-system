<!DOCTYPE HTML>
<html>
    <head>
        <style>
            body
            {
                background-image:url('image/search.jpg');
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
                background-color:white;
                color:black;
            }
            table {

                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>Search Book</h1>
        <form action="Search.php" method="post">
           Search by
            <select name="select">
                <option selected value="id">id</option>
                <option value="author">Arthor</option>
                <option value="bookname">Book Name</option>
                <option value="type">Category</option>
                <option value="createuser">Created by</option>
            </select>
            <input type="text" name="keyword" size="40">
            
            <input type="submit" name="search" value="search">
			<br>
			<br>
            <table border="1px">
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
                <?php 
                include("dbconnect.php");
				if(isset($_POST['search']))
				{
					
					if (isset($_POST['search']))  {
    				$keyword = $_POST['keyword'];
    				$select = $_POST['select'];
					$keyword = strtoupper($keyword); 
 					$keyword = strip_tags($keyword); 
 					$keyword = trim ($keyword);  
 					if('keyword' == "")
 					{
 						echo "abc";
 						exit;
 					}
    				$result = mysql_query("SELECT * FROM book WHERE upper($select) LIKE'%$keyword%'");
					while ($row = mysql_fetch_array($result)) 
					{ ?>
                 	<tr>
        				
        			<?php
        			include 'display.php'; 
        			} 
        				mysql_free_result($result); 		
    				}
				}
                ?> 	

                	</tr>

            </table>     
        </form>
        
        <form aligh="right" action="newfile.php" method="post">
            <input type="submit" value="Back">
        </form>
        
    </body>
</html>