<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>shorten_links</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="container formcont">
    <div class="row">
        <div class="col-md-8 offset-md-2 text-center">
            <div class="card">
               
<?php

class Link {
    var $servername = "";
    var $username="";
    var $password ="";
    var $db="";
    var  $conn="";
    function __construct() {
     $conn=  $this->connection();
     $this->validate($conn);

    }

function validate($conn){
    if(isset($_GET["id"]) && $_GET["id"]!=null ){
       $GID=$_GET["id"];
       $this-> getlink($conn , $GID);
    }
       else{
        $this-> adddata($conn);
       }
}
    function connection(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db="short_link";
        // Create connection
        $conn = mysqli_connect($servername, $username, $password,$db);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
       
        else{
          
            return $conn;
        } 
            }
    function getlink($conn , $GID){
       
           
            $sql = "SELECT id, olink, nlink  FROM DOlinks where nlink='$GID' ";
            $result = $conn->query($sql);
            if ($result->num_rows ==1) {
                // output data of  row
                while($row = $result->fetch_assoc()) {
                  //  echo "id: " . $row["id"]. " - Name: " . $row["olink"]. " " . $row["nlink"]. "<br>";
                   $rolink =$row["olink"];
                // echo $rolink;
                 header("Location: $rolink");
                }
            } else {
                echo "0 results";
               
        
        
            
    }
}
    function adddata($conn){
        if (isset($_POST["oldlink"]) && $_POST["oldlink"]!=null){
            $oldlink =$_POST["oldlink"];
            $newlink=uniqid();
            
            
            $sql = "SELECT id, olink, nlink  FROM DOlinks where nlink='$newlink' ";
            $result = $conn->query($sql);
            if ($result->num_rows >0) {
            // echo "sorry cant";
                adddata();
                
            }

                else{
                    
            $sql = "SELECT id, olink, nlink  FROM DOlinks where olink='$oldlink' ";
            $result = $conn->query($sql);
            if ($result->num_rows >0) {
                while($row = $result->fetch_assoc()) {
                echo '<h3 >your link has been created successfully </h3> <span> your main link is :</span>  '.$oldlink ."<br> <span>and new link is :</span> localhost/Ayat-Mustafa-Mon-3/link.php?id=" . $row["nlink"];

            }
        }else{

                $sql = "INSERT INTO DOlinks ( olink , nlink)
                VALUES ('$oldlink' ,'$newlink')";
                
                if ($conn->query($sql) === TRUE) {
                    echo '<h3 >your link has been created successfully </h3> <span> your main link is :</span>  '.$oldlink ."<br> <span>and new link is :</span> localhost/Ayat-Mustafa-Mon-3/link.php?id=" . $newlink ;
            
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
           
                   
                }
        }
        else{
            header("Location: http://localhost/Ayat-Mustafa-Mon-3/");
        }
    }
    function __destruct(){
       // $conn->close();
    }
}

$linkd=new link();


?>                 
                    <a href="index.html" class=" mt-3 d-inlin btn btn-light btn-small">click to add another</a>

               </div>
            </div>  
        </div>    
    </div>      
    
<script src="js/popper.min.js"></script>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>