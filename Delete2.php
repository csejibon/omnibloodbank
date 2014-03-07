<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <title>
            DELETE
        </title>
        <meta http-equiv="refresh" content=""/>
        <link rel="stylesheet" type="text/css" href="info.css"/>
        
          <script>
function validateForm()
{
var x=document.forms["myForm"]["id"].value;
if (x==null || x=="")
  {
  alert("User_ID must be filled out");
  return false;
  }
}
</script>
        
    </head>
    <body style="background-color: #99ffff">
        <div class="maincontain" >
            <div class="nav">
                <div class="header">
                    <a href="index.html"> <font color="red" size=+4> OBB </font></a> 
                    <div class="top_manu">
                    <a href="login.php" class="login">login</a>
                    <a href="signup.php" class="signup">sing_up</a>
                </div>
                    <div id="menu">
                <ul>                                              
                    <li><a class="current" href="index.html" title="">Home</a></li>
                     <li><a href="user_plane.php" title="">User Plan</a></li>
                    <li><a href="About.html" title="">About Us</a></li>
                    <li><a href="contact_us.php" title="">Contact Us</a></li>                     					
                </ul>
            </div>
                </div>   
            </div>
            
            <form name="myForm" action="" onsubmit="return validateForm()" method="post">
            
            <div class="" style="background-color: #00ffff;position: absolute;top: 108px;height: 500px;width: 900px;">
            <div class="b" style="background-color: #33ff33;height: 7%;width: 34%;margin-left: 300px;text-align: center;"
                 <font color=#3333ff size=10"><B style="size: 10;color: #ff0000">Delete OBB</B></font><br>
                    
                <div class="" style="position: absolute;top:150px;">
                    User_ID:  <input type="text" value="" name="id"/>
                     <input type="submit" value="DELETE" name="submit"/>
                </div>
             
             
             <?php
$link=mysql_connect("localhost","root","");
    $con=  mysql_select_db("red",$link); 
$warning="";
//$id="";
if(isset($_POST['submit'])){
    $userID=$_POST['id'];
    //echo $userID;
   // //    $state=$_POST['state'];
    
    //echo"$studentID
       
        
          $result=mysql_query("DELETE  FROM info WHERE stuID='".$userID."'");
           if($userID==""){
        echo "plz fill the blank";
        break;
    }
    if(!$result){
        echo mysql_error();
    }else{
        echo "Sucessfully Delete";
    }
    
         
      
}
?>



            </div>
            
           
        </div>
        </form>
           
                
                
          
            </table>
        </form>
        </div>
        
        
        
         

    </body>
</html>