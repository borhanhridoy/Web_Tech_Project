<?php
	session_start();
	
	
	if(isset($_SESSION['login'])){ 
?>



<html>

<head>
    <title>admin page</title>
</head>

<body>
    <center><u>
            <h1>Welcome</h1>
        </u></center>
    
     <p align="left">
      <button><a href="profile.php" style="text-decoration: none;">Profile</a></button>
     <input type="button" value="Edit any information" />
     <button><a href="logout.php" style="text-decoration: none;">logout</a></button>
    
</p>
   <div>
       <h3 align="right">To add new survice click "Add New Service" button :
         <input type="button" value="Add New Service" /></h3>
   </div>
    <div class="admin1" width="51%">
        <h1>
            <center>Hospital informations</center>
        </h1>
        <table border="1" width="100%">
            <ol>
                <tr>
                    <td>
                        <center>Hospital Name</center>
                    </td>
                    <td>Manager name</td>
                    <td>Comission</td>
                    <td>Discount</td>

                </tr>
                <tr>

                    <td>
                        <li>Green Life Hospital,Green Road</li>
                    </td>
                    <td>Tushar</td>
                    <td>2000</td>
                    <td>5%</td>
                    <td> <input type="button" value="Edit" /></td>
                </tr>
                <tr>
                    <td>
                        <li>CMH Hospital,CMH-Dhaka Cantonment</li>
                    </td>
                    <td>Tanvir</td>
                    <td>3000</td>
                    <td>10%</td>
                   <td> <input type="button" value="Edit" /></td>
                </tr>
                <tr>
                    <td>
                        <li>Green Life Hospital,Green Road</li>
                    </td>
                    <td>Borhan</td>
                    <td>3050</td>
                    <td>12%</td>
                    <td><button>Edit</button></td>
                </tr>
                <tr>
                    <td>
                        <li>Green Life Hospital,Green Road</li>
                    </td>
                    <td>Sifat</td>
                    <td>5000</td>
                    <td>15%</td>
                    <td> <input type="button" value="Edit" /></td>
                </tr>
                 <tr>
                    <td>
                        <li>Shahid Suhrawardy Hospital, Shamoli, Dhaka</li>
                    </td>
                    <td>Rasel</td>
                    <td>2000</td>
                    <td>7%</td>
                   <td> <input type="button" value="Edit" /></td>
                </tr>
                 <tr>
                    <td>
                        <li>Ad-Din Hospital,Mogbazar,Dhaka</li>
                    </td>
                    <td>Rafi</td>
                    <td>1000</td>
                    <td>13%</td>
                   <td> <input type="button" value="Edit" /></td>
                </tr>
                 <tr>
                    <td>
                        <li>Appolo Hospital,Mohammadpur</li>
                    </td>
                    <td>Nabi</td>
                    <td>3500</td>
                    <td>12%</td>
                   <td> <input type="button" value="Edit" /></td>
                </tr>
                 <tr>
                    <td>
                        <li>Bangabandhu Shiekh Mujib Medical University,Shahbag,Dhaka</li>
                    </td>
                    <td>Karim</td>
                    <td>1000</td>
                    <td>15%</td>
                   <td> <input type="button" value="Edit" /></td>
                </tr>
                 <tr>
                    <td>
                        <li>Bangladesh Heart & Chest Hospital,Dhanmondi</li>
                    </td>
                    <td>Rahim</td>
                    <td>3000</td>
                    <td>18%</td>
                   <td> <input type="button" value="Edit" /></td>
                </tr>
                 <tr>
                    <td>
                        <li>Bangladesh Medical College,Dhanmondi</li>
                    </td>
                    <td>Faruk</td>
                    <td>3500</td>
                    <td>15%</td>
                   <td> <input type="button" value="Edit" /></td>
                </tr>
            </ol>
        </table>
            <br>
           <p align="right">
  <input type="button" value="Add Hospital" />
    <input type="button" value="Delete Hospital" />
</p>
    

    </div>
    <div align="center">
        <br>
        <h1>Medicle Store Info</h1>
        <table border="1" width="50%">
            <ol>
                <tr>
                    <td>
                        <center>Medicine Store</center>
                    </td>
                    <td>Manager name</td>

                    <td>Salary</td>

                </tr>
                <tr>

                    <td>
                        <li>Green Drugs,Green Road</li>
                    </td>
                    <td>Tushar</td>
                    <td>20000</td>

                   <td> <input type="button" value="Edit" /></td>
                </tr>
                <tr>
                    <td>
                        <li>Moon Medicine,Dhaka Cantonment</li>
                    </td>
                    <td>Tanvir</td>
                    <td>30000</td>

                    <td> <input type="button" value="Edit" /></td>
                </tr>
                <tr>
                    <td>
                        <li>Medicure ,Green Road</li>
                    </td>
                    <td>Tanvir</td>
                    <td>30500</td>

                    <td> <input type="button" value="Edit" /></td>
                </tr>
                <tr>
                    <td>
                        <li>Green leaf,Dhanmondi</li>
                    </td>
                    <td>Tanvir</td>
                    <td>35000</td>

                   <td> <input type="button" value="Edit" /></td>
                </tr>
                <tr>

                    <td>
                        <li>Rafi medicare,Mohammadpur</li>
                    </td>
                    <td>Tushar</td>
                    <td>20000</td>

                   <td> <input type="button" value="Edit" /></td>
                </tr>
                <tr>

                    <td>
                        <li>Lamia pharma,Uttara</li>
                    </td>
                    <td>Rafiq</td>
                    <td>26000</td>

                   <td> <input type="button" value="Edit" /></td>
                </tr>
                <tr>

                    <td>
                        <li>Ikram Medicine,Farmget</li>
                    </td>
                    <td>Ikram</td>
                    <td>32000</td>

                   <td> <input type="button" value="Edit" /></td>
                </tr>
                <tr>

                    <td>
                        <li>Rahim Medicare,Gulistan</li>
                    </td>
                    <td>Rahim</td>
                    <td>22000</td>

                   <td> <input type="button" value="Edit" /></td>
                </tr>
               
                
            </ol>
        </table>
        <br>
        <p align="center">
  <input type="button" value="Add Medical Store" />
    <input type="button" value="Delete Medical Store" />
</p>
    </div>
    <div class="Medicine_info">
      <h3 align="left">Search with Medical Store name to see which medicine are available in medical Store :      <input type="text" value="" />
     <input type="button" value="Search" /></h3>
        
    </div>
     <div class="medicine_information" align="center">
        <br>
        <h1>Medicine information</h1>
        <table border="1" width="50%">
            <ol>
                <tr>
                    <td>
                        <center>Medicine Store name : Green Drugs,Green Road</center>
                    </td>

                </tr>
                <tr>

                    <td>
                        Medicine List
                    </td>
                   
                   <td> <input type="button" value="Edit" /></td>
                </tr>
                <tr>
                    <td>
                        <li>Areana 400mg</li>
                    </td>
                   

                    <td> <input type="button" value="Edit" /></td>
                </tr>
                <tr>
                    <td>
                        <li>Napa Extra</li>
                    </td>
                    

                    <td> <input type="button" value="Edit" /></td>
                </tr>
                <tr>
                    <td>
                        <li>Odez 500mg</li>
                    </td>
                    

                   <td> <input type="button" value="Edit" /></td>
                </tr>
                <tr>
                    <td>
                        <li>Odez 500mg</li>
                    </td>
                    

                   <td> <input type="button" value="Edit" /></td>
                </tr>
                <tr>
                    <td>
                        <li>Odez 500mg</li>
                    </td>
                    

                   <td> <input type="button" value="Edit" /></td>
                </tr>
                <tr>
                    <td>
                        <li>Odez 500mg</li>
                    </td>
                    

                   <td> <input type="button" value="Edit" /></td>
                </tr>
                <tr>
                    <td>
                        <li>Odez 500mg</li>
                    </td>
                    

                   <td> <input type="button" value="Edit" /></td>
                </tr>
                <tr>
                    <td>
                        <li>Odez 500mg</li>
                    </td>
                    

                   <td> <input type="button" value="Edit" /></td>
                </tr>
                <tr>
                    <td>
                        <li>Odez 500mg</li>
                    </td>
                    

                   <td> <input type="button" value="Edit" /></td>
                </tr>
            </ol>
        </table>
        <br>
        <p align="center">
  <input type="button" value="Add Medicine" />
    <input type="button" value="Delete Medicine" />
</p>
    </div>
    <div class="ambulance_information" align="center">
        <br>
        <h1>Ambulence information</h1>
        <table border="1" width="50%">
            <ol>
                <tr>
                    <td>
                        <center>Ambulance Name</center>
                    </td>
                     <td>
                        <center>Owner Name</center>
                    </td>
                     <td>
                        <center>Number</center>
                    </td>

                </tr>
                <tr>
                <td>
                        <center>Green Life Ambulance</center>
                    </td>
                     <td>
                        <center>Rifat Ahmed</center>
                    </td>
                     <td>
                        <center>01768321919</center>
                    </td>

                   
                   <td> <input type="button" value="Edit" /></td>
                </tr>
                <tr>
                    <td>
                        <center>Sun moon Ambulance</center>
                    </td>
                     <td>
                        <center>Rafi Ahmed</center>
                    </td>
                     <td>
                        <center>01768321541</center>
                    </td>

                   

                    <td> <input type="button" value="Edit" /></td>
                </tr>
                <tr>
                    <td>
                        <center>Mujeeb Ambulance</center>
                    </td>
                     <td>
                        <center>Karim Mujeeb</center>
                    </td>
                     <td>
                        <center>0178723089</center>
                    </td>

                    

                    <td> <input type="button" value="Edit" /></td>
                </tr>
                <tr>
                   <td>
                        <center>Moon Light Ambulance</center>
                    </td>
                     <td>
                        <center>Moon Ahmed</center>
                    </td>
                     <td>
                        <center>01798732537</center>
                    </td>

                    

                   <td> <input type="button" value="Edit" /></td>
                </tr>
                <tr>
                   <td>
                        <center>Rafiq Ambulance</center>
                    </td>
                     <td>
                        <center>Rafiq Ahmed</center>
                    </td>
                     <td>
                        <center>01873643821</center>
                    </td>


                   <td> <input type="button" value="Edit" /></td>
                </tr>
                <tr>
                   <td>
                        <center>Green Life Ambulance</center>
                    </td>
                     <td>
                        <center>Rifat Ahmed</center>
                    </td>
                     <td>
                        <center>01768321919</center>
                    </td>

                    

                   <td> <input type="button" value="Edit" /></td>
                </tr>
                <tr>
                    <td>
                        <center>Green Life Ambulance</center>
                    </td>
                     <td>
                        <center>Rifat Ahmed</center>
                    </td>
                     <td>
                        <center>01768321919</center>
                    </td>

                    

                   <td> <input type="button" value="Edit" /></td>
                </tr>
                <tr>
                    <td>
                        <center>Green Life Ambulance</center>
                    </td>
                     <td>
                        <center>Rifat Ahmed</center>
                    </td>
                     <td>
                        <center>01768321919</center>
                    </td>

                    

                   <td> <input type="button" value="Edit" /></td>
                </tr>
                <tr>
                    <td>
                        <center>Green Life Ambulance</center>
                    </td>
                     <td>
                        <center>Rifat Ahmed</center>
                    </td>
                     <td>
                        <center>01768321919</center>
                    </td>

                    

                   <td> <input type="button" value="Edit" /></td>
                </tr>
                <tr>
                    <td>
                        <center>Green Life Ambulance</center>
                    </td>
                     <td>
                        <center>Rifat Ahmed</center>
                    </td>
                     <td>
                        <center>01768321919</center>
                    </td>

                    

                   <td> <input type="button" value="Edit" /></td>
                </tr>
            </ol>
        </table>
        <br>
        <p align="center">
  <input type="button" value="Add Ambulance" />
    <input type="button" value="Delete Ambulance" />
</p>
    </div>
    <div class="noticeboard">
       <h2 style="margin-left:3%">To see latest update check the notice board daily :</h2>
       
       <ol align="left" >
          <li  >Today is 20% discount on by showing our private code number on "Green Life Hospital,green reoad(date:5/15/19)</li>
           <li  >Today is 25% discount on by showing our private code number on ambulance hired by us(date:7/15/19)</li>
           
       </ol>
       <br>
       <h3 style="margin-left:3%">
           <input type="button" value="add new notice on board">
           <input type="button" value="Delete notice from board">
       </h3>
       
        
    </div>

</body>

</html>
<?php }else{
	header("location: login.php");
} ?>

