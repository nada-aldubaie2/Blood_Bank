<?php include("connection.php");$sql=mysqli_query($con,"select * from `donors` WHERE  ID=".$_GET['id']);$row=mysqli_fetch_array($sql); ?><!doctypehtml><html lang="en"><head><meta charset="UTF-8"><meta content="IE=edge"http-equiv="X-UA-Compatible"><meta content="width=device-width,initial-scale=1"name="viewport"><link href="CSS/login.css"rel="stylesheet"><link href="Images/blood logo shortcut.png"rel="shortcut icon"><title>Blood Bank</title></head><body><form action=""class="wrapper"method="post"><div class="title">Update Data Of Donors</div><div class="form"><div class="input_filed"><label for="">ID</label> <input class="input"name="id"value="<?php echo $row[0]; ?>"readonly></div><div class="input_filed"><label for="">Name</label> <input class="input"name="name"value="<?php echo $row[1]; ?>"></div><div class="input_filed"><label for="">Blood Type</label> <input class="input"name="bloodType"value="<?php echo $row[2]; ?>"></div><div class="input_filed custom_select"><label for="">Gender</label> <select class="custom_select"id=""name="gender"><?php $selc1=null;$selc2=null;if($row[3]=="Male"){$selc1="selected";$selc2=null;}else{$selc2="selected";$selc1=null;} ?><option value="male"<?php echo $selc1  ?>>Male</option><option value="female"<?php echo $selc2  ?>>Female</option></select></div><div class="input_filed"><label for="">Number</label> <input class="input"name="phoneNumber"value="<?php echo $row[4]; ?>"></div><div class="input_filed"><label for="">Address</label> <input class="input"name="address"value="<?php echo $row[5]; ?>"></div><div class="inputfiled"><input class="btn"name="update"value=" Update"type="submit"></div></div></form></body></html><?php if(isset($_POST['update'])){$id=$_POST["id"];$name=$_POST["name"];$bloodType=$_POST["bloodType"];$gender=$_POST["gender"];$phoneNumber=$_POST["phoneNumber"];$address=$_POST["address"];$sql3=mysqli_query($con,"UPDATE `donors` SET `Donor Nmae`='$name',`Blood Type`='$bloodType',`Gender`='$gender',`Number`='$phoneNumber',`Address`='$address' WHERE `donors`.`ID`=$id");if($sql3){echo "<div>Has Updated Successfully  </div>";header("REFRESH:3;url=dashboard.php");}else{echo "<div>Oops! Try Again</div>";}} ?>