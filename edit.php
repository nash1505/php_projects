<?php
require_once "conn.php";
                //button name
if(isset($_POST['update']))
{

  



		if($_FILES["company_photo"]["name"]
	!="" && $_FILES["company_photo"]["error"] == 0)
	{
		$ext_array = explode('.',$_FILES["company_photo"]["name"]);
        $ext=end($ext_array);


        $new_photo_name="sp_".rand(100,999).date('YmdHis').'.'.$ext;
    	if(move_uploaded_file($_FILES["company_photo"]["tmp_name"],'images/'.$new_photo_name))



    	{
    		$new_pic=$new_photo_name;
    	}
	}
	else
	{
		$new_pic=$_POST['company_photo'];
	}




$head =$_POST['head'];
$subhead =$_POST['subhead'];
$content =$_POST['content'];
$publishdate =$_POST['publishdate'];
//$company_photo =$_POST['company_photo'];



$db_host="localhost";
$dbname="news";
$db_username="root";
$db_pass="";

$conn= mysqli_connect("$db_host","$db_username","$db_pass", "$dbname") or die ("could not connect to mysql"); 
$sqlCommand="INSERT into np(head,subhead,content,publishdate,company_photo) values('$head','$subhead','$content','$publishdate','$new_pic')";
$query=mysqli_query($conn, $sqlCommand) or die(mysqli_error($conn));


	if($query)
	{
		echo "Data updated successfully";
	}
	else
	{
		echo "Data not updated";
	}



}

            
      //print_r($row_select);exit;


?>
<!DOCTYPE html>
      <html>
      <head>
            <title></title>
            <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <script  type="text/javascript" src="js/bootstrap.min.js"></script>
      </head>
      <body>
      <form class="form-signin" method="post" action="" enctype="multipart/form-data">   
        <div class="row">      
      <center><h1>ADD A News</h1></center>
      <br>
      <div>
            <center><label>Heading</label>
            <br>
      <textarea type="text" class="form-control" name="head" cols="50" rows="5"></textarea>
      </center></div><br>
      <div>
            <center><label>Subhead</label><br>
      <textarea type="text" class="form-control" name="subhead" cols="50" rows="10"></textarea>
      </center></div><br>
      <div>
            <center><label>Content</label><br>
      <textarea type="text" class="form-control" name="content" cols="50" rows="10"></textarea>
      </center></div><br>

      <center><label>publish date</label><br>
      <input type="date" name="publishdate" value="publishdate"></center>
      <br>
      <br>

<center>
      company Photo: 
      
      <input type="file" name="company_photo" id="fileSelect">
      <br>
      <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="update">update</button>  <br><br>
            <button class="btn btn-lg btn-primary btn-block"><a href="dashboard.php">back</a></button>  </center>

     </div>
    </form>
      </body>
      </html>