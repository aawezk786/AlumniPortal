
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

<center><h2>Expert Talk</h2>
<b> Expert Talk on “Students as Future Entrepreneurs : Opportunities and Challenges” will be conducted by Industry Expert for student- entrepreneurs. Prospects to learn about the real challenges and opportunities in Entrepreneurship and the Path which leads to success.<b>
</center>

<div>
    

<br>


</div>

<div class="container">
  <form class="form-group" method="post" action="Process/expert_submit.php">
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
      <select id="Branch" class="form-control" name="Branch" required>
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
    
  
  
    <div class="col-25">
      <label for="Audience">Target Audience</label>
    </div>
  <div class="col-75">
      <select id="Audience" name="Audience" class="form-control" required>
        <option value="Teaching Staff">Teaching Staff</option>
        <option value="Non-teaching Staff">Non-teaching Staff</option>
        <option value="All Students">All Students</option>
        <option value="First Year">First Year</option>
        <option value="Second year">Second year</option>
        <option value="Third Year">Third Year</option>
      </select>
    </div>
    
   
    <br>
    
    <div class="">
      <label for="Dept">Department for Expert Talk</label>
    </div>
    <div class="">
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
  <div class="row">
    <div class="col-25">
      <label for="InterestedTopics">Interested Topics</label>
    </div>
    <div class="col-75">
     <input type="text"  name="InterestedTopic" class="form-control" placeholder="Your Interested Topics.." required>
    </div>
</div>
<br>
   

<div class="row">
    <div class="col-25">
      <label for="datetime">Suitable Date and Time</label>
    </div>
    <br>
    <div class="col-75">
     <input type="date"  name="Date"   required> <input type="time"  name="Time"  required>  
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