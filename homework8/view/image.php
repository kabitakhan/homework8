<?php
 include("../database/config.php");
$msg="";
if(isset ($_POST['upload'])){
    $target="img/".basename($_FILES['img'] ['name']);

$db=mysqli_connect("localhost","root","","demo");
    
    $image= $_FILES['img']['name'];
$text=$_POST['text'];
    $sql="INSERT INTO images(image,text) VALUE('$image','$text')";
    mysqli_query($db,$sql);
     
    if(move_uploaded_file($_FILES ['img']['name'],$target)){
        $msg="Image upload successfully";
    }
    else{
        
        $msg = "there was a problem uploading image";
    }
    
}
?>
<!DOCTYPE html>
<html>
    <head>
<title> image upload</title>
    
<style>



#content{
    
    width:50%;
    margin: 20px auto;
    border: 1px solid #cbcbcb;
}
form{
   width:50%;
    margin: 20px auto; 
    
}
form div{

    margin-top: 5px;
}
#img_div{
     width: 80%;
    
    padding: 5px;
    margin: 15px auto;
        border: 1px solid #cbcbcb;
}
#img_div:after{
    content:"";
    display:block;
    clear: both;
}
#img{
    float: left;
    margin: 5px;
    width: 400*444px;
    height: 140px;
}
    
    </head>
</style>
    <body>
    <div id="content">
        <?php
        
        $db=mysqli_connect("localhost","root","","demo");
$sql="SELECT*FROM images";
        $result=mysqli_query($db,$sql);
        while ($row=mysqli_fetch_array($result)){
            echo "<div id='img_div'>";
            echo "<img src='img/".$row['image']."'>";
                echo"<P>".$row['text']."</p>";
            echo"</div>";
        }
        ?>
       
    <form method="post" action="image.php"enctype="multipart/form-data">
        <input type ="hidden" name="size" value="=1000000">
        <div>
            <input type="file" name="img">
        </div>
        <div>
            <textarea name="text" cols="40" rows="4" placeholder="details of about image..."></textarea>
        </div>
        <div>
        <input type ="submit" name= "upload" value="upload image">
        </div>
    </form>
        
        
        </div>
        
    </body>

    </html>