<?php
error_reporting(0);

if (isset($_POST['upload'])) {

    $db = mysqli_connect("localhost", "root", "", "railwaydb");

    session_start();
    $user=$_SESSION["username"];
    $cod="select * from registration where username='$user'";
    $result=mysqli_query($db,$cod);
    $rows=mysqli_fetch_array($result);
    $uid=$rows["userid"];



    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./image/" . $filename;
 
  $sql="select * from tbl_image ";
    
  $res=mysqli_query($db, $sql);
    if($res==true)
     {
     while($row=mysqli_fetch_assoc($res))
     {
      
       if($row['uid']==$uid)
        {
         $qry="update tbl_image set filename='$filename' where uid='$uid'";

         mysqli_query($db, $qry);
 
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        echo '<script>alert("image updated");</script>';
        header('refresh:0;url=profile.php');
       

        
    } 
    
    else {
        echo '<script>alert("failed to update");</script>';
        header('refresh:0;url=profile.php');

        
    }
        }


        else{

           $sql = "INSERT INTO tbl_image VALUES ('$uid','$filename')";
           mysqli_query($db, $sql);
 
    
    if (move_uploaded_file($tempname, $folder)) {
        echo '<script>alert("image uploaded");</script>';
        header('refresh:0;url=profile.php');

        

        
    } else {
        echo '<script>alert("failed to upload");</script>';
        header('refresh:0;url=profile.php');
    }
        }
    
      
     }
   }

   }
 ?>
    
    
