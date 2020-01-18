<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script> -->

<!-- LoginModal -->
<div class="modal fade" id="LoginModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <form class="form-group" action="Process/login.php" method="post">
                <label for="">Email ID</label>
                <input type="text" class="form-control" name="email_l" required>
                <label for="">Password</label>
                <input type="password" class="form-control" name="password_l" id="password_l" required>
                <label for="role">Role</label>
                <select name="role" class="form-control" required>
                    <option value="Alumni">Alumni</option>
                    <option value="Student">Student</option>
                </select>
                <br>
                <center><input type="submit" class="btn btn-success" name="login" value="Login"></center>
                <center>Don't Have an Account</center>
                <center>
                <button class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#AlumniModal" >Register As Alumni</button>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#StudentModal" >Register As Student</button>
                </center>
                <br>
                <center><button class="btn btn-danger" data-dismiss="modal" data-toggle="modal" data-target="#forgetModal">Forget/Change Password</button></center>
            </form>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
</div>




<!--Alumni Modal-->
<div class="modal fade" id="AlumniModal">
    <div class="modal-dialog modal-dialog-centered" style="height:600px;overflow:auto">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">REGISTRATION - Alumni</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <form class="form-group" action="Process/signup.php" method="post" enctype="multipart/form-data">
                <label for="">Name</label>
                <input type="text" class="form-control" name="al_name_s" required>
                <label for="">Email ID</label>
                <input type="email" class="form-control" name="al_email_s" required>
                <label for="">Password</label>
                <input type="password" class="form-control" name="al_password_s" id="password_s" required>
                <label for="Phone No">Phone No</label>
                <input type="text" class="form-control" maxlength="10" name="al_ph_no_s" required>
                <label for="Gender">Gender</label>
                <select name="al_gender_s" class="form-control" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
                <!--Country-->
                        
            <label for="country">Country</label>
             <select name="country" class="form-control" required>
<option value="Afghanistan" >Afghanistan</option>
<option value="Albania" >Albania</option>
<option value="Algeria" >Algeria</option>
<option value="Andorra" >Andorra</option>
<option value="Antigua and Barbuda" >Antigua and Barbuda</option>
<option value="Argentina" >Argentina</option>
<option value="Armenia" >Armenia</option>
<option value="Australia" >Australia</option>
<option value="Austria" >Austria</option>
<option value="Azerbaijan" >Azerbaijan</option>
<option value="Bahamas" >Bahamas</option>
<option value="Bahrain" >Bahrain</option>
<option value="Bangladesh" >Bangladesh</option>
<option value="Barbados" >Barbados</option>
<option value="Belarus" >Belarus</option>
<option value="Belgium" >Belgium</option>
<option value="Belize" >Belize</option>
<option value="Benin" >Benin</option>
<option value="Bhutan" >Bhutan</option>
<option value="Bolivia" >Bolivia</option>
<option value="Bosnia and Herzegovina" >Bosnia and Herzegovina</option>
<option value="Botswana" >Botswana</option>
<option value="Brazil" >Brazil</option>
<option value="Brunei" >Brunei</option>
<option value="Bulgaria" >Bulgaria</option>
<option value="Burkina Faso" >Burkina Faso</option>
<option value="Burundi" >Burundi</option>
<option value="Cambodia" >Cambodia</option>
<option value="Cameroon" >Cameroon</option>
<option value="Canada" >Canada</option>
<option value="Cape Verde" >Cape Verde</option>
<option value="Central African Republic" >Central African Republic</option>
<option value="Chad" >Chad</option>
<option value="Chile" >Chile</option>
<option value="China" >China</option>
<option value="Colombia" >Colombia</option>
<option value="Comoros" >Comoros</option>
<option value="Congo" >Congo</option>
<option value="Costa Rica" >Costa Rica</option>
<option value="Côte d'Ivoire" >Côte d'Ivoire</option>
<option value="Croatia" >Croatia</option>
<option value="Cuba" >Cuba</option>
<option value="Cyprus" >Cyprus</option>
<option value="Czech Republic" >Czech Republic</option>
<option value="Denmark" >Denmark</option>
<option value="Djibouti" >Djibouti</option>
<option value="Dominica" >Dominica</option>
<option value="Dominican Republic" >Dominican Republic</option>
<option value="East Timor" >East Timor</option>
<option value="Ecuador" >Ecuador</option>
<option value="Egypt" >Egypt</option>
<option value="El Salvador" >El Salvador</option>
<option value="Equatorial Guinea" >Equatorial Guinea</option>
<option value="Eritrea" >Eritrea</option>
<option value="Estonia" >Estonia</option>
<option value="Ethiopia" >Ethiopia</option>
<option value="Fiji" >Fiji</option>
<option value="Finland" >Finland</option>
<option value="France" >France</option>
<option value="Gabon" >Gabon</option>
<option value="Gambia" >Gambia</option>
<option value="Georgia" >Georgia</option>
<option value="Germany" >Germany</option>
<option value="Ghana" >Ghana</option>
<option value="Greece" >Greece</option>
<option value="Grenada" >Grenada</option>
<option value="Guatemala" >Guatemala</option>
<option value="Guinea" >Guinea</option>
<option value="Guinea-Bissau" >Guinea-Bissau</option>
<option value="Guyana" >Guyana</option>
<option value="Haiti" >Haiti</option>
<option value="Honduras" >Honduras</option>
<option value="Hong Kong" >Hong Kong</option>
<option value="Hungary" >Hungary</option>
<option value="Iceland" >Iceland</option>
<option value="India" >India</option>
<option value="Indonesia" >Indonesia</option>
<option value="Iran" >Iran</option>
<option value="Iraq" >Iraq</option>
<option value="Ireland" >Ireland</option>
<option value="Israel" >Israel</option>
<option value="Italy" >Italy</option>
<option value="Jamaica" >Jamaica</option>
<option value="Japan" >Japan</option>
<option value="Jordan" >Jordan</option>
<option value="Kazakhstan" >Kazakhstan</option>
<option value="Kenya" >Kenya</option>
<option value="Kiribati" >Kiribati</option>
<option value="North Korea" >North Korea</option>
<option value="South Korea" >South Korea</option>
<option value="Kuwait" >Kuwait</option>
<option value="Kyrgyzstan" >Kyrgyzstan</option>
<option value="Laos" >Laos</option>
<option value="Latvia" >Latvia</option>
<option value="Lebanon" >Lebanon</option>
<option value="Lesotho" >Lesotho</option>
<option value="Liberia" >Liberia</option>
<option value="Libya" >Libya</option>
<option value="Liechtenstein" >Liechtenstein</option>
<option value="Lithuania" >Lithuania</option>
<option value="Luxembourg" >Luxembourg</option>
<option value="Macedonia" >Macedonia</option>
<option value="Madagascar" >Madagascar</option>
<option value="Malawi" >Malawi</option>
<option value="Malaysia" >Malaysia</option>
<option value="Maldives" >Maldives</option>
<option value="Mali" >Mali</option>
<option value="Malta" >Malta</option>
<option value="Marshall Islands" >Marshall Islands</option>
<option value="Mauritania" >Mauritania</option>
<option value="Mauritius" >Mauritius</option>
<option value="Mexico" >Mexico</option>
<option value="Micronesia" >Micronesia</option>
<option value="Moldova" >Moldova</option>
<option value="Monaco" >Monaco</option>
<option value="Mongolia" >Mongolia</option>
<option value="Montenegro" >Montenegro</option>
<option value="Morocco" >Morocco</option>
<option value="Mozambique" >Mozambique</option>
<option value="Myanmar" >Myanmar</option>
<option value="Namibia" >Namibia</option>
<option value="Nauru" >Nauru</option>
<option value="Nepal" >Nepal</option>
<option value="Netherlands" >Netherlands</option>
<option value="New Zealand" >New Zealand</option>
<option value="Nicaragua" >Nicaragua</option>
<option value="Niger" >Niger</option>
<option value="Nigeria" >Nigeria</option>
<option value="Norway" >Norway</option>
<option value="Oman" >Oman</option>
<option value="Pakistan" >Pakistan</option>
<option value="Palau" >Palau</option>
<option value="Panama" >Panama</option>
<option value="Papua New Guinea" >Papua New Guinea</option>
<option value="Paraguay" >Paraguay</option>
<option value="Peru" >Peru</option>
<option value="Philippines" >Philippines</option>
<option value="Poland" >Poland</option>
<option value="Portugal" >Portugal</option>
<option value="Puerto Rico" >Puerto Rico</option>
<option value="Qatar" >Qatar</option>
<option value="Romania" >Romania</option>
<option value="Russia" >Russia</option>
<option value="Rwanda" >Rwanda</option>
<option value="Saint Kitts and Nevis" >Saint Kitts and Nevis</option>
<option value="Saint Lucia" >Saint Lucia</option>
<option value="Saint Vincent and the Grenadines" >Saint Vincent and the Grenadines</option>
<option value="Samoa" >Samoa</option>
<option value="San Marino" >San Marino</option>
<option value="Sao Tome and Principe" >Sao Tome and Principe</option>
<option value="Saudi Arabia" >Saudi Arabia</option>
<option value="Senegal" >Senegal</option>
<option value="Serbia and Montenegro" >Serbia and Montenegro</option>
<option value="Seychelles" >Seychelles</option>
<option value="Sierra Leone" >Sierra Leone</option>
<option value="Singapore" >Singapore</option>
<option value="Slovakia" >Slovakia</option>
<option value="Slovenia" >Slovenia</option>
<option value="Solomon Islands" >Solomon Islands</option>
<option value="Somalia" >Somalia</option>
<option value="South Africa" >South Africa</option>
<option value="Spain" >Spain</option>
<option value="Sri Lanka" >Sri Lanka</option>
<option value="Sudan" >Sudan</option>
<option value="Suriname" >Suriname</option>
<option value="Swaziland" >Swaziland</option>
<option value="Sweden" >Sweden</option>
<option value="Switzerland" >Switzerland</option>
<option value="Syria" >Syria</option>
<option value="Taiwan" >Taiwan</option>
<option value="Tajikistan" >Tajikistan</option>
<option value="Tanzania" >Tanzania</option>
<option value="Thailand" >Thailand</option>
<option value="Togo" >Togo</option>
<option value="Tonga" >Tonga</option>
<option value="Trinidad and Tobago" >Trinidad and Tobago</option>
<option value="Tunisia" >Tunisia</option>
<option value="Turkey" >Turkey</option>
<option value="Turkmenistan" >Turkmenistan</option>
<option value="Tuvalu" >Tuvalu</option>
<option value="Uganda" >Uganda</option>
<option value="Ukraine" >Ukraine</option>
<option value="United Arab Emirates" >United Arab Emirates</option>
<option value="United Kingdom" >United Kingdom</option>
<option value="United States" >United States</option>
<option value="Uruguay" >Uruguay</option>
<option value="Uzbekistan" >Uzbekistan</option>
<option value="Vanuatu" >Vanuatu</option>
<option value="Vatican City" >Vatican City</option>
<option value="Venezuela" >Venezuela</option>
<option value="Vietnam" >Vietnam</option>
<option value="Yemen" >Yemen</option>
<option value="Zambia" >Zambia</option>
<option value="Zimbabwe" >Zimbabwe</option>
    
            </select>
        
 
                <label for="Course">Course</label>
                <select name="al_course_s" class="form-control" required>
                    <option value="Computer Engineering">Computer Engineering</option>
                    <option value="Electrical Engineering">Electrical Engineering</option>
                    <option value="Civil Engineering">Civil Engineering</option>
                    <option value="Electronics & Telecommunications Engineering">Electronics & Telecommunications Engineering</option>
                    <option value="Mechanical Engineering">Mechanical Engineering</option>
                </select>
                <label for="End Year">End Year</label>
                <select name="al_last_year_s" class="form-control" required>
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
                <label for="">Certificate Code</label>
                <input type="text" class="form-control" name="cert_code" required>

               <fieldset  id="currentstatus">
                    <label for="">Current Status:</label>
                    <br>
                    <input type="radio" name="Status" value="Higher Studies">Pursuing Higher Studies
                    <br>
                    <input type="radio" name="Status" value="Job">Job
                    <br>
                    <input type="radio" name="Status" value="Entrepreneur">Entrepreneur
                    <br>
                    <input type="radio" name="Status" value="Other">Any Other
                </fieldset>

                    <div id="Studies" style="display:none">
                    <label>Course</label>
                    <input type="text" class="form-control" name="course_status">
                    <label>Institute</label>
                    <input type="text" class="form-control" name="institute_status">
                    <label>Related Document</label>
                    <input type="file" class="form-control" id="pic_phs" name="pic_phs" accept="image/*">
                    <span id="upload_phs"></span>
                    </div>
                
              
                    <div id="Job" style="display:none">
                    <label>Name of Company</label>
                    <input type="text" class="form-control" name="name_com">
                    <label>Designation</label>
                    <input type="text" class="form-control" name="designation" placeholder="Your Post in Company">
                    <label>Related Document</label>
                    <input type="file" class="form-control" name="pic_job" id="pic_job" accept="image/*">
                    <span id="upload_job"></span>
                    </div>

                    <script type="text/javascript">
                        $(document).ready(function(){
                            $(document).on('change','#pic_phs', function(){
                                $(document).on('change','#pic_job', function(){
                                    var property = document.getElementById("pic_phs").files[0];
                                    var property1 = document.getElementById("pic_job").files[1];
                                    var image_phs = property.name;
                                    var image_job = property1.name;
                                    var image_ext_phs = image_phs.split('.').pop().toLowerCase();
                                    var image_ext_job image_job.split('.').pop().toLowerCase();
                                    if(jQuery.inArray(image_ext_phs, ['png','jpg','jpeg']) == -1)
                                    {
                                        alert("Invalid Image File");
                                    }
                                    if(jQuery.inArray(image_ext_job, ['png','jpg','jpeg']) == -1)
                                    {
                                        alert("Inavalid Image File");
                                    }
                                    var image_size_phs = property.size;
                                    var image_size_job = property1.size;
                                    /*if(image_size_phs > 2000000)
                                    {
                                        alert("Image File is very Big");
                                    }
                                    else
                                    {
                                        var form_data = new FormData();
                                        form_data.append("pic_phs",property);
                                        $.ajax({
                                            url:"../Process/signup.php",
                                            method:"POST",
                                            data:form_data,
                                            contentType:false,
                                            cache:false,
                                            processData:false,
                                            beforeSend:function(){
                                                $('#upload_phs').html("<label class='text-success'>Image Uploading...</label>");

                                            },
                                            success:function(data)
                                            {
                                                $('#upload_phs').html(data);
                                            }

                                        })
                                    }*/
                                    if (image_size_job > 2000000) 
                                    {
                                        alert("Image Size is Very big");
                                    }
                                    else
                                    {
                                        var form_data1 = new FormData1();
                                        form_data1.append("pic_job",property1);
                                        $.ajax({
                                            url:"../Process/signup.php",
                                            method:"POST",
                                            data:form_data1,
                                            contentType:false,
                                            cache:false,
                                            processData:false,
                                            beforeSend:function(){
                                                $('#upload_job').html("<label class='text-success'>Image Uploading...</label>");

                                            },
                                            success:function(data)
                                            {
                                                $('#upload_job').html(data);
                                            }

                                        })
                                    }

                                    });
                                
                            });
                        });
                    </script>
               
                
                    <div id="Entrepreneur" style="display:none">
                    <label>Name of Organization</label>
                    <input type="text" class="form-control" name="name_org">
                    <label>Number of Employee</label>
                    <input type="Number" class="form-control" name="no_emp">
                    <label>Turnover</label>
                    <input type="text" name="turnover" class="form-control">
                    </div>
                
                
                    <div id="Other" style="display:none">
                    <label>Description</label>
                   <textarea name="description" class="form-control" placeholder="* Your current status..."></textarea>
                    </div>

                    <script type="text/javascript">
                         $("input[name='Status']:radio")
                          .change(function() {
                         $("#Studies").toggle($(this).val() == "Higher Studies");
                         $("#Job").toggle($(this).val() == "Job");
                         $("#Entrepreneur").toggle($(this).val() == "Entrepreneur");
                         $("#Other").toggle($(this).val() == "Other"); });
                    </script>


                <br>

                <center><input type="submit" name="signup_alumni" class="btn btn-primary" value="Create Account"><center>

                <center><a href="" data-toggle="modal" data-dismiss="modal" data-target="#LoginModal">Already a Member?</a></center>
            </form>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
</div>





<!--Student Modal-->
<div class="modal fade" id="StudentModal">
    <div class="modal-dialog modal-dialog-centered" style="height:600px;overflow:auto">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">REGISTRATION - Student</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <form class="form-group" action="Process/signupstud.php" method="post">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name_s" required>
                <label for="">Email ID</label>
                <input type="email" class="form-control" name="email_s" required>
                <label for="">Password</label>
                <input type="password" class="form-control" name="password_s" id="password_s" required>
                <label for="Phone No">Phone No</label>
                <input type="text" class="form-control" maxlength="10" name="ph_no_s" required>
                <label for="Gender">Gender</label>
                <select name="gender" class="form-control">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
                <!--City-->
                <label for="Course">Course</label>
                <select name="course" class="form-control">
                    <option value="Computer Engineering">Computer Engineering</option>
                    <option value="Electrical Engineering">Electrical Engineering</option>
                    <option value="Civil Engineering">Civil Engineering</option>
                    <option value="Electronics & Telecommunications Engineering">Electronics & Telecommunications Engineering</option>
                    <option value="Mechanical Engineering">Mechanical Engineering</option>
                </select>
                <label for="Enroll">Enrollment No</label>
                <input type="text" name="enroll" maxlength="10" class="form-control" required>
                <br>
                <center><input type="submit" name="signup" class="btn btn-primary" value="Create Account"><center>
                <center><a href="" data-toggle="modal" data-dismiss="modal" data-target="#LoginModal">Already a Member?</a></center>
            </form>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
</div>
<!-- Forget Password -->
<div class="modal fade" id="forgetModal">
    <div class="modal-dialog modal-dialog-centered" style="height:600px;overflow:auto">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Forget/Change Password</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <form class="form-group" action="mail/mail.php" method="post">
                <label for="step1">Step 1:If You Have Forget Your Current Password.....Send Your Current Password to Your Registered Email</label>
                <br>
                <label for="email">Email ID</label>
                <input type="email" class="form-control" name="email" required>
                <br>
                <center><input type="submit" name="sendpw" class="btn btn-primary" value="Sent Mail"></center>    
            </form>
        </div>
         <div class="modal-body">
            <form class="form-group" action="Process/forgetpw.php" method="post">
                <label for="step2">Step 2:Enter Your New Password</label>
                <br>
                <label for="email">Email ID</label>
                <input type="email" class="form-control" name="email" required>
                <label for="role">Role</label>
                <select name="role" class="form-control" required>
                    <option value="Alumni">Alumni</option>
                    <option value="Student">Student</option>
                </select>
                <label for="currentpw">Current Password</label>
                <input type="password" class="form-control" name="currentpw" required>
                <label for="newpw">New Password</label>
                <input type="password" class="form-control" name="newpw" required>
                <br>
                <center><input type="submit" name="submit_forget" class="btn btn-primary" value="Submit"></center>    
            </form>
        </div>



        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
</div>



<!-- Profile Update -->
<div class="modal fade" id="Updatemodal">
    <div class="modal-dialog modal-dialog-centered" style="height:600px;overflow:auto">
      <div class="modal-content">


        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Profile Update</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
<?php
        
        if(isset($_SESSION['alumni_name_session']))
        {
            ?>
            
        <div class="modal-body">
            <form class="form-group" action="Profileupdate.php" method="post">
                 <label for="role">Role</label>
                <select name="role" class="form-control" required>
                    <option value="Alumni">Alumni</option>
                    <option value="Student">Student</option>
                </select>
                <label for="">Email ID</label>
                <input type="email" class="form-control" name="email_update"  value="<?php echo$_SESSION['email_session'];?>" required>
                 <label for="Phone No">Phone No</label>
                <input type="text" class="form-control" maxlength="10" name="ph_no_update" value="<?php echo$_SESSION['alumni_ph_no_session'];?>" required>
                <label for="country">Country</label>
             <select name="country" class="form-control" value="<?php echo$_SESSION['country_session'];?>" required>
<option value="Afghanistan" >Afghanistan</option>
<option value="Albania" >Albania</option>
<option value="Algeria" >Algeria</option>
<option value="Andorra" >Andorra</option>
<option value="Antigua and Barbuda" >Antigua and Barbuda</option>
<option value="Argentina" >Argentina</option>
<option value="Armenia" >Armenia</option>
<option value="Australia" >Australia</option>
<option value="Austria" >Austria</option>
<option value="Azerbaijan" >Azerbaijan</option>
<option value="Bahamas" >Bahamas</option>
<option value="Bahrain" >Bahrain</option>
<option value="Bangladesh" >Bangladesh</option>
<option value="Barbados" >Barbados</option>
<option value="Belarus" >Belarus</option>
<option value="Belgium" >Belgium</option>
<option value="Belize" >Belize</option>
<option value="Benin" >Benin</option>
<option value="Bhutan" >Bhutan</option>
<option value="Bolivia" >Bolivia</option>
<option value="Bosnia and Herzegovina" >Bosnia and Herzegovina</option>
<option value="Botswana" >Botswana</option>
<option value="Brazil" >Brazil</option>
<option value="Brunei" >Brunei</option>
<option value="Bulgaria" >Bulgaria</option>
<option value="Burkina Faso" >Burkina Faso</option>
<option value="Burundi" >Burundi</option>
<option value="Cambodia" >Cambodia</option>
<option value="Cameroon" >Cameroon</option>
<option value="Canada" >Canada</option>
<option value="Cape Verde" >Cape Verde</option>
<option value="Central African Republic" >Central African Republic</option>
<option value="Chad" >Chad</option>
<option value="Chile" >Chile</option>
<option value="China" >China</option>
<option value="Colombia" >Colombia</option>
<option value="Comoros" >Comoros</option>
<option value="Congo" >Congo</option>
<option value="Costa Rica" >Costa Rica</option>
<option value="Côte d'Ivoire" >Côte d'Ivoire</option>
<option value="Croatia" >Croatia</option>
<option value="Cuba" >Cuba</option>
<option value="Cyprus" >Cyprus</option>
<option value="Czech Republic" >Czech Republic</option>
<option value="Denmark" >Denmark</option>
<option value="Djibouti" >Djibouti</option>
<option value="Dominica" >Dominica</option>
<option value="Dominican Republic" >Dominican Republic</option>
<option value="East Timor" >East Timor</option>
<option value="Ecuador" >Ecuador</option>
<option value="Egypt" >Egypt</option>
<option value="El Salvador" >El Salvador</option>
<option value="Equatorial Guinea" >Equatorial Guinea</option>
<option value="Eritrea" >Eritrea</option>
<option value="Estonia" >Estonia</option>
<option value="Ethiopia" >Ethiopia</option>
<option value="Fiji" >Fiji</option>
<option value="Finland" >Finland</option>
<option value="France" >France</option>
<option value="Gabon" >Gabon</option>
<option value="Gambia" >Gambia</option>
<option value="Georgia" >Georgia</option>
<option value="Germany" >Germany</option>
<option value="Ghana" >Ghana</option>
<option value="Greece" >Greece</option>
<option value="Grenada" >Grenada</option>
<option value="Guatemala" >Guatemala</option>
<option value="Guinea" >Guinea</option>
<option value="Guinea-Bissau" >Guinea-Bissau</option>
<option value="Guyana" >Guyana</option>
<option value="Haiti" >Haiti</option>
<option value="Honduras" >Honduras</option>
<option value="Hong Kong" >Hong Kong</option>
<option value="Hungary" >Hungary</option>
<option value="Iceland" >Iceland</option>
<option value="India" >India</option>
<option value="Indonesia" >Indonesia</option>
<option value="Iran" >Iran</option>
<option value="Iraq" >Iraq</option>
<option value="Ireland" >Ireland</option>
<option value="Israel" >Israel</option>
<option value="Italy" >Italy</option>
<option value="Jamaica" >Jamaica</option>
<option value="Japan" >Japan</option>
<option value="Jordan" >Jordan</option>
<option value="Kazakhstan" >Kazakhstan</option>
<option value="Kenya" >Kenya</option>
<option value="Kiribati" >Kiribati</option>
<option value="North Korea" >North Korea</option>
<option value="South Korea" >South Korea</option>
<option value="Kuwait" >Kuwait</option>
<option value="Kyrgyzstan" >Kyrgyzstan</option>
<option value="Laos" >Laos</option>
<option value="Latvia" >Latvia</option>
<option value="Lebanon" >Lebanon</option>
<option value="Lesotho" >Lesotho</option>
<option value="Liberia" >Liberia</option>
<option value="Libya" >Libya</option>
<option value="Liechtenstein" >Liechtenstein</option>
<option value="Lithuania" >Lithuania</option>
<option value="Luxembourg" >Luxembourg</option>
<option value="Macedonia" >Macedonia</option>
<option value="Madagascar" >Madagascar</option>
<option value="Malawi" >Malawi</option>
<option value="Malaysia" >Malaysia</option>
<option value="Maldives" >Maldives</option>
<option value="Mali" >Mali</option>
<option value="Malta" >Malta</option>
<option value="Marshall Islands" >Marshall Islands</option>
<option value="Mauritania" >Mauritania</option>
<option value="Mauritius" >Mauritius</option>
<option value="Mexico" >Mexico</option>
<option value="Micronesia" >Micronesia</option>
<option value="Moldova" >Moldova</option>
<option value="Monaco" >Monaco</option>
<option value="Mongolia" >Mongolia</option>
<option value="Montenegro" >Montenegro</option>
<option value="Morocco" >Morocco</option>
<option value="Mozambique" >Mozambique</option>
<option value="Myanmar" >Myanmar</option>
<option value="Namibia" >Namibia</option>
<option value="Nauru" >Nauru</option>
<option value="Nepal" >Nepal</option>
<option value="Netherlands" >Netherlands</option>
<option value="New Zealand" >New Zealand</option>
<option value="Nicaragua" >Nicaragua</option>
<option value="Niger" >Niger</option>
<option value="Nigeria" >Nigeria</option>
<option value="Norway" >Norway</option>
<option value="Oman" >Oman</option>
<option value="Pakistan" >Pakistan</option>
<option value="Palau" >Palau</option>
<option value="Panama" >Panama</option>
<option value="Papua New Guinea" >Papua New Guinea</option>
<option value="Paraguay" >Paraguay</option>
<option value="Peru" >Peru</option>
<option value="Philippines" >Philippines</option>
<option value="Poland" >Poland</option>
<option value="Portugal" >Portugal</option>
<option value="Puerto Rico" >Puerto Rico</option>
<option value="Qatar" >Qatar</option>
<option value="Romania" >Romania</option>
<option value="Russia" >Russia</option>
<option value="Rwanda" >Rwanda</option>
<option value="Saint Kitts and Nevis" >Saint Kitts and Nevis</option>
<option value="Saint Lucia" >Saint Lucia</option>
<option value="Saint Vincent and the Grenadines" >Saint Vincent and the Grenadines</option>
<option value="Samoa" >Samoa</option>
<option value="San Marino" >San Marino</option>
<option value="Sao Tome and Principe" >Sao Tome and Principe</option>
<option value="Saudi Arabia" >Saudi Arabia</option>
<option value="Senegal" >Senegal</option>
<option value="Serbia and Montenegro" >Serbia and Montenegro</option>
<option value="Seychelles" >Seychelles</option>
<option value="Sierra Leone" >Sierra Leone</option>
<option value="Singapore" >Singapore</option>
<option value="Slovakia" >Slovakia</option>
<option value="Slovenia" >Slovenia</option>
<option value="Solomon Islands" >Solomon Islands</option>
<option value="Somalia" >Somalia</option>
<option value="South Africa" >South Africa</option>
<option value="Spain" >Spain</option>
<option value="Sri Lanka" >Sri Lanka</option>
<option value="Sudan" >Sudan</option>
<option value="Suriname" >Suriname</option>
<option value="Swaziland" >Swaziland</option>
<option value="Sweden" >Sweden</option>
<option value="Switzerland" >Switzerland</option>
<option value="Syria" >Syria</option>
<option value="Taiwan" >Taiwan</option>
<option value="Tajikistan" >Tajikistan</option>
<option value="Tanzania" >Tanzania</option>
<option value="Thailand" >Thailand</option>
<option value="Togo" >Togo</option>
<option value="Tonga" >Tonga</option>
<option value="Trinidad and Tobago" >Trinidad and Tobago</option>
<option value="Tunisia" >Tunisia</option>
<option value="Turkey" >Turkey</option>
<option value="Turkmenistan" >Turkmenistan</option>
<option value="Tuvalu" >Tuvalu</option>
<option value="Uganda" >Uganda</option>
<option value="Ukraine" >Ukraine</option>
<option value="United Arab Emirates" >United Arab Emirates</option>
<option value="United Kingdom" >United Kingdom</option>
<option value="United States" >United States</option>
<option value="Uruguay" >Uruguay</option>
<option value="Uzbekistan" >Uzbekistan</option>
<option value="Vanuatu" >Vanuatu</option>
<option value="Vatican City" >Vatican City</option>
<option value="Venezuela" >Venezuela</option>
<option value="Vietnam" >Vietnam</option>
<option value="Yemen" >Yemen</option>
<option value="Zambia" >Zambia</option>
<option value="Zimbabwe" >Zimbabwe</option>
    
            </select>
<?php
    }
    ?>
<?php
    if(isset($_SESSION['stud_name_session']))
        {
            ?>
            
        <div class="modal-body">
            <form class="form-group" action="Profileupdate.php" method="post">
                 <label for="role">Role</label>
                <select name="role" class="form-control" required>
                    <option value="Alumni">Alumni</option>
                    <option value="Student">Student</option>
                </select>
                <label for="">Email ID</label>
                <input type="email" class="form-control" name="email_update"  value="<?php echo$_SESSION['email_session'];?>" required>
                 <label for="Phone No">Phone No</label>
                <input type="text" class="form-control" maxlength="10" name="ph_no_update" value="<?php echo$_SESSION['student_ph_no_session'];?>" required>
               
<?php
    }
    ?>
        

                <br>
                <center><input type="submit" class="btn btn-success" name="update_profile" value="Update"></center>
                
                   </form>

        </div>

    
        

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
</div>

