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
                var x=document.forms["myForm"]["group"].value;
                if (x==null || x=="")
                {
                    alert("Blood_Group must be filled out");
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
                <!--        <div class="" style="background-color: #33ff33;height: 600px;width: 100%;">-->

                <div class="" style="background-color: #00ffff;position: absolute;top: 108px;height: 100%;width: 900px;">
                    <font color=#3333ff size=7><B style="color: #cc0033">Go for search</B></font><br>
        <!--             User_ID:  <input type="text" value="" name="id"/>-->
        <!--             State: <input type="text" value="" name="state"/>-->
                    Blood_Group:<select name="group" style="width:20%; height:25px; border:3px solid lightgray">
                        <option value=""></option>
                        <option value="A+">A+</option>
                        <option value="O+">O+</option>
                        <option value="B+">B+</option>
                        <option value="A-">A-</option>
                        <option value="O-">O-</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>

                        <input type="submit" value="Search" name="submit"/>
                        <font color=#3333ff size=4><B style="color: red">Conform DELETE</B></font>
           <!--        conform_User_ID:  <input type="text" value="" name="id"/>-->
                        <input type=Button name="new_info" value="Delete_User" onclick="window.location='Delete2.php'" style="width: 200px; hight:200px; font-family:Times New Roman; font-size:20px; font-style:normal"></br>





                        <table bgcolor=white align=center border=1 style="MARGIN-TOP:20px;MARGIN-BOTTOM:20px;width:460;" cellspacing=3 cellpadding= 3 bgcolor=LightSeaGreen >
                            <tr><td align=center><p1>ID</p1></td>
                            <td align=center><p1>Name</p1></td>
                            <td align=center><p1>Blood Group</p1></td>
                            <td align=center><p1>Mobil_Num</p1></td>
                            <td align=center><p1>State</p1></td>
                            <td align=center><p1>Address</p1></td>
                            <td align=center><p1>Country</p1></td></tr>

                            <?php
                            $link = mysql_connect("localhost", "root", "");
                            $con = mysql_select_db("red", $link);
                            $warning = "";
                            $group = "";
//$userID="";
//$userName="";
                            if (isset($_POST['submit'])) {
                                $group = $_POST['group'];
                                // $state=$_POST['state'];
                                //echo"$studentID

                                if ($group == "") {
                                    $warning = '<p style="color:red ">All Field Required</p>';
                                } else {
                                    $result = mysql_query("SELECT * FROM info WHERE dep='" . $group . "'");

                                    while ($row = mysql_fetch_array($result)) {
                                        if ($row['dep'] == $group) {
                                            print '<tr>';
                                            print '<td align=center><b>' . $row['stuID'] . '</b></td>';
                                            print '<td align=center><b>' . $row['stuName'] . '</b></td>';
                                            print '<td align=center><b>' . $row['dep'] . '</b></td>';
                                            print '<td align=center><b>' . $row['mobil_number'] . '</b></td>';
                                            print '<td align=center><b>' . $row['state'] . '</b></td>';
                                            print '<td align=center><b>' . $row['address'] . '</b></td>';
                                            print '<td align=center><b>' . $row['Country'] . '</b></td>';
                                            print '</tr>';
                                        }
                                    }
                                }
                            }
                            ?>



                            </div>


                            </div>
                            </form>




                        </table>
                        <!--              <font color=#3333ff size=4><B style="color: #cc0033">confram DELETE</B></font>-->
                        <!--           confram_ID:  <input type="text" value="" name="id"/>-->
                        <!--                          <input type="submit" value="Delete" name="submit"/>-->

                        </form>
                </div>





                </body>
                </html>

