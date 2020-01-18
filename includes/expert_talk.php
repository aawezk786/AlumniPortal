
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





<html>
<head>
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=reset] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

input[type=reset]:hover {
  background-color: #45a049;
}



.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<h2>Expert Talk</h2>
<span><b> Expert Talk on “Students as Future Entrepreneurs : Opportunities and Challenges” will be conducted by Industry Expert for student- entrepreneurs. Prospects to learn about the real challenges and opportunities in Entrepreneurship and the Path which leads to success.<b></span>


<div>
    
<br>
<br>


</div>

<div class="container">
  <form method="post" action="../Process/expert_submit.php">
  <div class="row">
    <div class="col-25">
      <label for="name">Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="name" name="name" placeholder="Your name.." required>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-25">
      <label for="email">Email</label>
    </div>
    <div class="col-75">
      <input type="text" name="email" placeholder="Your email.." required>
    </div>
    <br>
  
  <div class="row">
    <div class="col-25">
      <label for="Branch">Branch</label>
    </div>
    <div class="col-75">
      <select id="Branch" name="Branch" required>
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
     <select name="PassYear" required>
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
    <br>
    <br>
   <br>
  <div class="row">
    <div class="col-25">
      <label for="Audience">Target Audience</label>
    </div>
  <div class="col-75">
      <select id="Audience" name="Audience" required>
        <option value="Teaching Staff">Teaching Staff</option>
        <option value="Non-teaching Staff">Non-teaching Staff</option>
        <option value="All Students">All Students</option>
        <option value="First Year">First Year</option>
        <option value="Second year">Second year</option>
        <option value="Third Year">Third Year</option>
      </select>
    </div>
    <br><br>
    <br>
    <br>
    <div class="row">
    <div class="col-25">
      <label for="Dept">Department for Expert Talk</label>
    </div>
    <div class="col-75">
      <select name="Dept" required>
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
     <input type="text"  name="InterestedTopic" placeholder="Your Interested Topics.." required>
    </div>
</div>
<br>
   

<div class="row">
    <div class="col-25">
      <label for="datetime">Suitable Date and Time</label>
    </div>
    <br>
    <div class="col-75">
     <input type="date"  name="Date"  required> <input type="time"  name="Time"  required>  
    </div>

      <br>         

  <div class="row">
     <input type="reset" value="Reset">  
    <input type="submit" name="submit" value="Submit">                
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