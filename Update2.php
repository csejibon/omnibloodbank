<?php
$warning = "";
if(isset($_POST['submit'])){
    $userID=$_POST['id'];
    //echo $userID;
   // $userName=$_POST['name'];
   // echo$userName;
    //$group=$_POST['group'];
   // echo$group;
   // $gendar=$_POST['radios'];
    //echo"$gendar$";
    $mobil_number=$_POST['mobil_num'];
    $state=$_POST['state'];
    $address=$_POST['Address'];
   // $country=$_POST['country'];
    if($mobil_number==""){
         $warning = '<p style="color:red ">All Field Required</p>';
    }
    $link=mysql_connect("localhost","root","");
    $con=  mysql_select_db("red",$link);   
      
          //$query1=mysql_query("UPDATE info SET stuName='".$userName."'  WHERE stuID='".$userID."' ");
          // $query2=mysql_query("UPDATE info SET dep='".$group."'  WHERE stuID='".$userID."' ");
            $query3=mysql_query("UPDATE info SET mobil_number='".$mobil_number."'  WHERE stuID='".$userID."' ");
            $query6=mysql_query("UPDATE info SET state='".$state."'  WHERE stuID='".$userID."' ");
             $query4=mysql_query("UPDATE info SET address='".$address."'  WHERE stuID='".$userID."' ");
              //$query5=mysql_query("UPDATE info SET Country='".$country."'  WHERE stuID='".$userID."' ");
//               $query6=mysql_query("UPDATE info SET stuName='".$userName."'  WHERE stuID='".$userID."' ");
       
        if($mobil_number==""){
        echo "plz fill the blank";
        break;
    }
    if(!$query3){
        echo mysql_error();
    }else{
        echo "Sucessfully Update";
    }
    

}

?>






<html>
    <head>
        <title>
            UPDATE
        </title>
        <meta http-equiv="refresh" content=""/>
        <link rel="stylesheet" type="text/css" href="info.css"/>
        
         <script>
function validateForm()
{
var a=document.forms["myForm"]["id"].value;
var c=document.forms["myForm"]["mobil_num"].value;
var y=document.forms["myForm"]["state"].value;
var d=document.forms["myForm"]["Address"].value;



if (a==null || a=="")
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
                     <li><a href="search.php" title="">Search Donar</a></li>
                    <li><a href="add.php" title="">Add Donar</a></li>
                    <li><a href="Update.php" title="">Update Donar</a></li>
                </ul>
            </div>
                </div>   
            </div>
            
            
             <form name="myForm" action="" onsubmit="return validateForm()" method="post">
        <div class="a" style="background-color: #33ffff;height: 100%;width: 100%;">
            <div class="b" style="background-color: #33ff33;height: 7%;width: 34%;margin-left: 400px;text-align: center;"
                 <font color=#3333ff size=10"><B style="size: 10;color: #ff0000">Update Blood Bank</B></font><br>
                 <?php echo $warning; ?>
        </div>
            <table border="2px" style="position: absolute;top: 150px;;margin-left: 400px;color: red">
                <tr style="color: red;">
                  <td style="color: red;"> 
                    ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="varchar" value="" name="id"/><br>
<!--                Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="" name="name"/></br>-->
<!--                Blood: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->
<!--                           <select name="group" style="width:40%; height:25px; border:3px solid lightgray">-->
<!--                            <option value=""></option>-->
<!--                            <option value="A+">A+</option>-->
<!--                            <option value="O+">O+</option>-->
<!--                            <option value="B+">B+</option>-->
<!--                            <option value="A-">A-</option>-->
<!--                            <option value="O-">O-</option>-->
<!--                            <option value="B-">B-</option>-->
<!--                            <option value="AB+">AB+</option>-->
<!--                            <option value="AB-">AB-</option></select>-->
<!--                </br>-->
<!--                Gender:  <input type="radio" value="1" name="radios"/>male-->
<!--                         <input type="radio" value="2" name="radios"/>female-->
<!--                         <input type="radio" value="3" name="radios"/>common<br>-->
                        Mobil_num:&nbsp;&nbsp;<input type="text" value="" name="mobil_num"/></br>
                        State/City/Town/Area:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <select name="state" style="width:25%; height:25px; border:3px solid lightgray">
                            <option value=""></option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="CTG">CTG</option>
                            <option value="Comilla">Comilla</option>
                            <option value="Feni">Feni</option>
                            <option value="Bandarbon">Bandarbon</option>
                            <option value="Sylhet">Sylhet</option>
                            <option value="CoxBazar">CoxBazar</option></select></br>
                         
                       Address:<textarea rows="3" cols="25" wrap="hard"  onBlur="DataCheck(this.value,this.name);" name="Address"></textarea><br>
<!--                       Country:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="textarea" value="" name="country"/></br>-->
                Submit:  <input type="submit" value="send" name="submit"/></td></tr>
<!--            Search: <input type=Button name="new_info" value="Search_Blood_Bank" onclick="window.location='Search.php'" style="width: 200px; hight:200px; font-family:Times New Roman; font-size:20px; font-style:normal"><br/>-->
<!--                 Delete: <input type=Button name="new_info" value="Delete_User" onclick="window.location='Delete.php'" style="width: 200px; hight:200px; font-family:Times New Roman; font-size:20px; font-style:normal"></br>-->
<!--                 Update: <input type=Button name="new_info" value="Update_User" onclick="window.location='Update.php'" style="width: 200px; hight:200px; font-family:Times New Roman; font-size:20px; font-style:normal">-->
                
                
          
            </table>
        </form>
        </div>
    </body>
</html>