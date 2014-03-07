

<html>
    <head>
        <title>
            OBB
        </title>
        <meta http-equiv="refresh" content=""/>
        <link rel="stylesheet" type="text/css" href="info.css"/>
        
         <script>
function validateForm()
{
var a=document.forms["myForm"]["_name"].value;
var b=document.forms["myForm"]["_religion"].value;
var x=document.forms["myForm"]["_email"].value;
var c=document.forms["myForm"]["_city"].value;
var y=document.forms["myForm"]["_state"].value;
var d=document.forms["myForm"]["_clergy_position"].value;
var f=document.forms["myForm"]["_jurisdiction"].value;


if (a==null || a=="")
  {
  alert("ALL Fill must be filled out");
  return false;
  }
 if (b==null || b=="")
  {
  alert("ALL Fill must be filled out");
  return false;
  }
if (x==null || x=="")
  {
  alert("ALL Fill must be filled out");
  return false;
  }
 if (c==null || c=="")
  {
  alert("ALL Fill must be filled out");
  return false;
  }
if (y==null || y=="")
  {
  alert("ALL Fill must be filled out");
  return false;
  }
 if (d==null || d=="")
  {
  alert("ALL Fill must be filled out");
  return false;
  }
  
  if (f==null || f=="")
  {
  alert("ALL Fill must be filled out");
  return false;
  }
}
</script>
        
        
    </head>
    <body  style="background-color: #99ffff">
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
                    <li><a href="#" title="">Contact Us</a></li>                     					
                </ul>
            </div>
                </div>
                
            </div>
            
                   <!--   Register form         -->
            <div bgcolor="white" text="black" link="blue" alink="blue" vlink="blue" background="#3b5564" >
<!-- 756035 -->
<font face="verdana,arial" size=-1>
<center><table cellpadding='2' cellspacing='0' border='0' id='ap_table'>
<tr><td bgcolor="#3b5564"><table cellpadding='0' cellspacing='0' border='0' width='100%'><tr><td bgcolor="#3b5564" align=center style="padding:2;padding-bottom:4"><b><font size=-1 color="#F1B82D" face="verdana,arial"><b>Registration. Please fill in the form below. </b></font></th></tr>
<tr><td bgcolor="white" style="padding:5"><br>
        

<!--<input type="hidden" name="action" value="reg2">-->
<!--<input type="hidden" name="user" value="orthodoxrings">-->
<center><table>
         <form name="myForm" action="" onsubmit="return validateForm()" method="post">
<tr><td><font face="verdana,arial" size=-1>Name:</td>
  <td><font face="verdana,arial" size=-1><input type="text" name="_name"></td></tr>
  <tr><td><font face="verdana,arial" size=-1>Sex:</td>
  <td><font face="verdana,arial" size=-1><input type="radio" value="male" name="radios"/>male<br>
                         <input type="radio" value="female" name="radios"/>female<br>
                         <input type="radio" value="common" name="radios"/>common</td></tr>
  <tr><td><font face="verdana,arial" size=-1>Date of Birth:</td>
  <td><font face="verdana,arial" size=-1><input type="text" name="_religion"></td></tr>
  <tr><td><font face="verdana,arial" size=-1>Email:</td>
  <td><font face="verdana,arial" size=-1><input type="text" name="_email"></td></tr>
<tr><td><font face="verdana,arial" size=-1>City:</td>
  <td><font face="verdana,arial" size=-1><input type="text" name="_city"></td></tr>
<tr><td><font face="verdana,arial" size=-1>State:</td>
  <td><font face="verdana,arial" size=-1><input type="text" name="_state"></td></tr>
<tr><td><font face="verdana,arial" size=-1>Country:</td>
  <td><font face="verdana,arial" size=-1><input type="text" name="_country"></td></tr>
<tr><td><font face="verdana,arial" size=-1>Address:</td>
  <td><font face="verdana,arial" size=-1><input type="text" name="_clergy_position"></td></tr>

<tr><td><font face="verdana,arial" size=-1>phone No</td>
  <td><font face="verdana,arial" size=-1><input type="text" name="_jurisdiction"></td></tr>
<!--<tr><td><font face="verdana,arial" size=-1>Choose username:</td>-->
<!--  <td><font face="verdana,arial" size=-1><input type="text" name="_login"></td></tr>-->
<!--<tr><td><font face="verdana,arial" size=-1>Choose password:</td>-->
<!--  <td><font face="verdana,arial" size=-1><input type="password" name="_password"></td></tr>-->
<!--<tr><td><font face="verdana,arial" size=-1>Verify password:</td>
  <td><font face="verdana,arial" size=-1><input type="password" name="_password2"></td></tr>-->

<tr><td><font face="verdana,arial" size=-1></td>
  <td><font face="verdana,arial" size=-1><input type="submit" value="send" name="submit"></form></td></tr>
  
  <?php
$link=mysql_connect("localhost","root","");
    $con=  mysql_select_db("red",$link);
    if(!$con){
        echo mysql_error();
    }
    else{
        echo  "";
    }
if(isset($_POST['submit'])){
    $user_Name=$_POST['_name'];
    $sex=$_POST['radios'];
    $date=$_POST['_religion'];
    $email=$_POST['_email'];
    $city=$_POST['_city'];
    $state=$_POST['_state'];
    $country=$_POST['_country'];
    $address=$_POST['_clergy_position'];
    $phone=$_POST['_jurisdiction'];
    //$choose_user_Name=$_POST['_login'];
    //$choose_password=$_POST['_password'];
    //echo $user_Name;
    //echo $sex;
    //echo $date;
    //echo $email;
    //echo $city;
    //echo $state;
    //echo $country;
    //echo $address;
    //echo $phone;
    //echo $choose_user_Name;
    //echo $choose_password;
    $id="";
    //$warning = "";
   // $user_Name="";
    
    $result=mysql_query("INSERT INTO singup(id,name,sex,religion,email,city,state,country,address,phone)VALUE('".$id."','".$user_Name."','".$sex."','".$date."','".$email."','".$city."','".$state."','".$country."','".$address."','".$phone."')");   
    if($user_Name==""){
        echo "plz fill the blank";
        break;
    }
    if(!$result){
        echo mysql_error();
    }else{
        echo "sucessfully registrated";
    }
}





?>

</table></center>
</form>
</td></tr></table></td></tr></table>
    </div>

    
                   
                   
        </div>      
    </body>
</html>