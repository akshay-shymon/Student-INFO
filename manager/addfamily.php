<?php
include('header.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>

</style>
</head>

<body>
<form action="addfamilyaction.php" method="post" style="background-color:#CCCCCC">
<div style="width:50%; margin-left:25%;padding-top: 9%; padding-bottom:12%">
<h1 align="center">FAMILY REGISTRATION</h1>
<div style="padding-top:5%">
<div class="row" style="padding-top:1%">
   <div class="col-md-4">
     <label>HOUSE NAME</label>
   </div>
   <div class="col-md-8">
     <input type="text" class="form-control" name="hname" pattern="^[A-Za_z][A-Za-z -]+$" title="Must enter a  valid name"  required=""  style="width:80%"/>
   </div>
</div>
<div class="row" style="padding-top:1%">
    <div class="col-md-4">
     <label>HOUSE NO.</label>
	</div>
    <div class="col-md-8">
     <input type="text" class="form-control" name="hno" required="" pattern="[0-9]{3}"  style="width:80%" />
    </div>
</div>
<div class="row" style="padding-top:1%">
   <div class="col-md-4">
     <label>NO.OF FAMILY MEMBERS</label>
   </div>
   <div class="col-md-8">
     <input type="text" class="form-control" name="count"  required="" pattern="[0-9]{2}"   style="width:80%"/>
   </div>
</div>


<div class="row" style="padding-top:1%">
    <div class="col-md-4">
     <label>DISTRICT</label>
	 </div>
    <div class="col-md-8">
	<select name="district" class="form-control" style="width:80%">
		<option>--select--</option>

	<option value="1">kottayam</option>
		<option value="2">Idukki</option>

	</select>
    </div>
</div>

<div class="row" style="padding-top:1%">
    <div class="col-md-4">
     <label>PLACE</label>
	 </div>
    <div class="col-md-8">
     <input type="text" class="form-control" name="place" required="" pattern="^[A-Za_z][A-Za-z -]+$"  style="width:80%"  />
    </div>
</div>
<div class="row" style="padding-top:1%">
  <div class="col-md-4">
    <label>PINCODE</label>
  </div>
  <div class="col-md-8">
   <input type="text" class="form-control" name="pin" required="" pattern="[0-9]{6}"   style="width:80%"/>
  </div>
</div>

<div class="row" style="padding-top:1%">
  <div class="col-md-4">
    <label>GENDER</label>
  </div>
  <div class="col-md-8">
   <input type="radio"  name="gender"  /><label>MALE</label>
      <input type="radio"  name="gender"  /><label>FEMALE</label>

  </div>
</div>

<div class="row" style="padding-top:1%">
  <div class="col-md-4">
    <label>Date of birth</label>
  </div>
  <div class="col-md-8">
   <input type="date"  name="dob" class="form-control" style="width:80%" />

  </div>
</div>



<div class="row" style="padding-top:1%">
  <div class="col-md-4">
   <label>E MAIL</label>
   </div>
  <div class="col-md-8">
    <input type="email" class="form-control" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="must enter a valid email address" required="" style="width:80%"  />
  </div>
</div>
<div class="row" style="padding-top:1%">
<div class="col-md-4">
<label>PASSWORD</label></div>
<div class="col-md-8">
<input type="password" class="form-control" name="password" required=""  style="width:80%" />
</div>
</div>
<div class="form-group" align="center" style="padding-top:3%; size:25%">
<input type="submit" class="btn btn-primary" name="submit"  style="padding-bottom:4%; padding-top:4%; padding-left:4%; padding-right:4%;color:#FFFFFF; background-color:#000000"/>
</div>
</div>
</div>
</form>
</body>
</html>
<?php
include('footer.php');
?>