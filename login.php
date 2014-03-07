<?php
    session_start();
    $warning = "";
    $userName = ""; 
    $passWord = "";
    $link=mysql_connect("localhost","root","");
    $con=  mysql_select_db("red",$link);
    if(!$con){
        echo mysql_error();
    }
    else{
        echo  "";
    }
   // if($_SESSION['name']){
     //   header("location:edu.html");
    //} 
if(isset($_POST['submit'])){
    $userName=$_POST['userName'];
   // echo"userName:".$userName."<br>";
    $passWord=$_POST['passWord'];
    //echo"passWord:".$passWord."<br>";
    if($userName==""||$passWord==""){
        $warning = '<p style="color:red ">All Field Required</p>';
    }else{
        $query = mysql_query("SELECT * FROM login WHERE name='".$userName."' AND password='".$passWord."'");
         if (!$query){
                echo mysql_error();            } else {
                echo " error"."<br/>"; 
            }
    
     $query2 = mysql_num_rows($query);
            if($query2 > 0){
                echo $query2."<br/>";
                $_SESSION['name'] = $userName;
                $_SESSION['time'] = time();
                header("location:admin.php");
            }else { 
                echo mysql_error();
            }
    }
}


?>











<html>
    <head>
        <title>
            omni
        </title>
        
        <meta charset="uft-8"/>
        <script src="jquery.js"></script>
        <script src="login.js"></script>
        
         <script>
function validateForm()
{
var x=document.forms["myForm"]["userName"].value;
var y=document.forms["myForm"]["passWord"].value;

if (x==null || x=="")
  {
  alert("User_name must be filled out");
  return false;
  }
if (y==null || y=="")
  {
  alert("Password must be filled out");
  return false;
  }  
}

</script>
        
        
   </head>
   <body>
       <div class="a" style="background-color: #9999ff;">
           <form name="myForm" action="" onsubmit="return validateForm()" method="post" style="height: 300px;width: 300px ;color: #ff00ff">
<!--       <form method="POST" action="" style="height: 300px;width: 300px ;color: #ff00ff">-->
           <fieldset style="margin-top: 200px;margin-left: 500px;color: #33ffff">
               <legend style="margin-left: 50px;color: #66ff66">
                   login
                   
               </legend >
               <?php echo $warning; ?>
               userName:<input type="text" value="" name="userName"/>
               passWord:<input type="password" value="" name="passWord"/>
               <input type="submit" value="send" name="submit"/>
           </fieldset>
           </div>
       </form>
       
   </body>
</html>