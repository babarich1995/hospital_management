@extends('homepage.home')
@section('content')
  
    
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  }

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
  height: 80%;
  
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 20px;
 
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>
<body>




<div class="container">
  <h2>Welcome, <?php echo "fullname";?>!</h2>
      <div class='alert alert-info'>
              <strong>Info!</strong> Appointment will be booked only for today - <? echo date("d-m-y"); ?>. Appointment time will be between 10:30 to 3:30 or 4:30 to 9:30 once appointment is booked.</div>
      <h3>Enter Information</h3>
	  
                <?php
                  if(isset($_POST['apfullname'])){
                    $i = enter_patient_info($_POST['apfullname'],$_POST['apAge'],$_POST['apweight'],$_POST['apphone_no'],$_POST['apaddress']);
                    appointment_booking($i, $_POST['apSpecialist'], $_POST['apCondition']);
                    unset($_POST['apfullname']); //unset all post variables
                    if (isset($_POST['apfullname'])){
                      echo '<script type="text/javascript">location.reload();</script>';
                    }

                  }
                ?>
				
				
				
				
				
            <form action="" method="POST">

            <div class="form-group" >
              <label for="usr">Full Name:</label>
              <input type="text" class="form-control" id="usr" name="apfullname" required>
            </div>

            <div class="form-group">
              <label for="pwd">Age: (in years)</label>
              <input type="number" class="form-control" id="pwd" name="apAge" min="1" max="200" required>
            </div>
            <div class="form-group">
              <label for="pwd">Weight (in kgs):</label>
              <input type="tel" class="form-control" id="pwd" name="apweight" min="1" max="300" required>
            </div>
            <div class="form-group">
              <label for="pwd">Phone No:</label>
              <input type="tel" class="form-control" id="pwd" name="apphone_no" required>
            </div>
            <div class="form-group">
              <label for="pwd">Address:</label>
              <textarea class="form-control" id="pwd" name="apaddress" required></textarea>
            </div>

            <div class="form-group">
              <label for="pwd">Doctor Needed:</label>
              <select required value=1 name="apSpecialist">
                <option value="Audiologist" class="option">Audiologist - Ear Expert</option>
                <option value="Allergist" class="option">Allergist - Allergy Expert</option>
                <option value="Anesthesiologist" class="option">Anesthesiologist - Anesthetic Expert</option>
                <option value="Cardiologist" class="option">Cardiologist - Heart Expert</option>
                <option value="Dentist" class="option">Dentist - Oral Care Expert</option>
                <option value="Dermatologist" class="option">Dermatologist - Skin Expert</option>
                <option value="Endocrinologist" class="option">Endocrinologist - Endocrine Expert</option>
              </select>
            </div>

            <div class="form-group">
              <label for="pwd">Medical Condition / Purpose of visit:</label>
              <textarea class="form-control" id="pwd" name="apCondition" required></textarea>
            </div>

            <div class="form-group">
              <input type="submit" class="btn btn-primary" >
              <input type="reset" name="" class="btn btn-danger">
            </div>
          </form>
		  
<!-- Trigger/Open The Modal -->
<center>Patient Details&nbsp;&nbsp;&nbsp;<button id="myBtn">View Patient Details</button></center>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span><body>
    <p>	

 <?php 
	
	
	if((isset($_SESSION['full_name']))){
               $full_name=$_SESSION['full_name'];
			 //$query = "SELECT patient_id, full_name, appointments.medical_condition FROM patient_info, appointments WHERE patient_info.patient_id = appointments.patient_id";

                                       // $select_posts = mysql_query($connection,$query);
    $result = getAllPatientDetail2($full_name);

                                        while($row = $result->fetch_array()) {
                                           // echo $row['patient_id'];
											echo"<br>";
                                            echo $row['full_name'];
											//echo"<br>";
                                           // echo $row['medical_condition'];
                                           // $query_email = $row['doctors_suggestion'];
										}
	}
                                     ?>
                                   
</p></body>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</div>
@endsection
