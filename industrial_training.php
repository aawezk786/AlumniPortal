<?php
      ob_start();
      session_start();
      include"includes/db_conn.php";
      include"includes/header.php";
?>
    <body>
    <header id="home">
<?php 
      include"includes/navmenu.php";
?>
    </header>

<br>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
<center>
<h2>Industrial Training(Internship)</h2>
<span><b>Describe your company/organization and internship position with as much detail as possible. ... Students are attracted to companies that care about creating stellar internship experiences.<b></span>

</center>
<div>
    
<br>
<br>


</div>

<div class="container">
  <form method="post" class="form-group" action="Process/training_submit.php">
  <div class="row">
    <div class="col-25">
      <label for="name">Name</label>
    </div>
    <div class="col-75">
      <input type="text"  name="name" class="form-control" placeholder="Name..." required>
    </div>
  </div>
  <br>
   <div class="row">
    <div class="col-25">
      <label for="email">Email</label>
    </div>
    <div class="col-75">
      <input type="email" name="email" class="form-control" placeholder="Your email.." required>
    </div>
  </div>
    <br>

 <div class="row">
    <div class="col-25">
      <label for="Branch">Branch</label>
    </div>
    <div class="col-75">
      <select id="Branch" name="Branch" class="form-control" required>
        <option value="Computer Engineering">Computer Engineering</option>
        <option value="Electrical Engineering">Electrical Engineering</option>
        <option value="Civil Engineering">Civil Engineering</option>
        <option value="Electronics and Telecommunication Engineering">Electronics and Telecommunication Engineering</option>
        <option value="Mechanical Engineering">Mechanical Engineering</option>
      </select>
    </div>
  </div>
  <br>
  
  <div class="row">
    <div class="col-25">
      <label for="PassYear">PassOut Year</label>
    </div>
    <div class="col-75">
     <select name="PassYear" class="form-control" required>
            <option value="2003">2003</option>
            <option value="2004">2004</option>
            <option value="2005">2005</option>
            <option value="2006">2006</option>
            <option value="2007">2007</option>
            <option value="2008">2008</option>
            <option value="2009">2009</option>
            <option value="2010">2010</option>
            <option value="2011">2011</option>
            <option value="2012">2012</option>
            <option value="2013">2013</option>
            <option value="2014">2014</option>
            <option value="2015">2015</option>
            <option value="2016">2016</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>
        </select>
    </div>
    <br>
    

  <div class="">
    <div class="col-25">
      <label for="name_com">Name of Company</label>
    </div>
    <div class="col-75">
      <input type="text"  name="name_com" class="form-control" placeholder="Company name..." required>
    </div>
  </div>
  <br>

  <div class="">
    <div class="col-25">
      <label for="Dept">Department for Internship</label>
    </div>
    <div class="col-75">
      <select name="Dept" class="form-control" required>
        <option value="Computer Engineering">Computer Engineering</option>
        <option value="Electrical Engineering">Electrical Engineering</option>
        <option value="Civil Engineering">Civil Engineering</option>
        <option value="Electronics and Telecommunication Engineering">Electronics and Telecommunication Engineering</option>
        <option value="Mechanical Engineering">Mechanical Engineering</option>
      </select>
    </div>
  </div>
  <br>

  
  <div class="">
    <div class="col-25">
      <label for="Sector">Sector</label>
    </div>
    <div class="col-75">
       <input type="text" class="form-control" name="Sector" placeholder="eg..IT Sector,etc" required>
    </div>
  </div>
  <br>

  <div class="">
    <div class="col-25">
      <label for="description">Description</label>
    </div>
    <div class="col-75">
      <input type="text" name="description" class="form-control" placeholder="Description about post & company.." required>
    </div>
  </div>
  <br>
  

    <div class="">
    <div class="col-25">
      <label for="nosstudent">Number of Students</label>
    </div>
    <div class="col-75">
      <input type="Number" class="form-control" name="nosstudent" placeholder="Number of students..." required>
    </div>
  </div>
  



      <br>         

  <div class="row">  
    <center>
     <input type="submit" class="btn btn-success" name="submit" value="Submit"> 
    &nbsp;&nbsp;
     <input type="reset" class="btn btn-danger" value="Reset">            
  </center>
  </div>
  </form>
</div>

</body>
</html>
<br>

<?php
    include"includes/footer.php";
    include"includes/modals.php";
    
?>