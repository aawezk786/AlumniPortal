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
<style type="text/css">
  h4{
    color:red;
  }
</style>
</head>
<body>
<center>
<h2>Any Other</h2>
<span><b><h4>NOTE: In this you have to put the option that is not in our portal....  <h4><b></span>

</center>
<div>
    
<br>



</div>

<div class="container">
  <form method="post" class="from-group" action="Process/other_submit.php">
  <div class="row">
    <div class="col-25">
      <label for="name">Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="name" class="form-control" name="name" placeholder="Your name.." required>
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
        <option value="CO">Computer Engineering</option>
        <option value="EJ">Electrical Engineering</option>
        <option value="CE">Civil Engineering</option>
        <option value="EXTC">Electronics and Telecommunication Engineering</option>
        <option value="ME">Mechanical Engineering</option>
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
      <label for="description">Description</label>
    </div>
    <div class="col-75">
     <input type="text" class="form-control" name="description" placeholder="Description..." required>
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