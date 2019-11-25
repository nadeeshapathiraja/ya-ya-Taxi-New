<?php

    if (isset($_REQUEST["submit"])){
//  session_start();

        $firstname=$_REQUEST['firstname'];
        $lastname=$_REQUEST['lastname'];
        $email=$_REQUEST['email'];
        $phone=$_REQUEST['phone'];
        $country=$_REQUEST['country'];
        $passportId=$_REQUEST['passportId'];
        $comments=$_REQUEST['comments'];
        $pickupdate=$_REQUEST['pickupdate'];
        $pickuptime=$_REQUEST['pickuptime'];
        $pickUpLocation=$_REQUEST['pickUpLocation'];
        $dorpOffLocation=$_REQUEST['dorpOffLocation'];
        $payment=$_REQUEST['payment'];      
        $pasengers=$_REQUEST['pasengers'];
        $suitcases=$_REQUEST['suitcases'];
        $vehical=$_REQUEST['selectVehical'];


        $to="pdncpathiraja95@gmail.com";
        $subject="Add Ride";
        $message="This Persion want to book our Vehical \n\n"."Full Name: ".$firstname. " ".$lastname."\n"."E-mail: ".$email."\n"."Phone : ".$phone."\n"."Country: ".$country."\n"."Passport Id: ".$passportId."\n"."Comments: ".$comments."\n"
        ."PickUp Date: ".$pickupdate."\n"."Pickup Time: ".$pickuptime."\n"."PickUp Location: ".$pickUpLocation."\n"."Drop Off Location: ".$dorpOffLocation."\n"."Payment Method: ".$payment."\n"."Number Of Pasengers: ".$pasengers."\n"."Number of Suitcases: ".$suitcases."\n"
        ."Vehical Type: ".$vehical."\n";
        $headers="From : nadeesha@gmail.com";

        if(mail($to,$subject,$message,$headers)){
            echo "<h2>Thank You</h2>";
        }
        else{
            echo "Someting Went Wrong";
        }

		unset($_REQUEST["submit"]);
    }
?>

<?php

    if (isset($_REQUEST["booking"])){
//  session_start();

        $firstname=$_REQUEST['firstname'];
        $lastname=$_REQUEST['lastname'];
        $email=$_REQUEST['email'];
        $phone=$_REQUEST['phone'];
        $country=$_REQUEST['country'];
        $passportId=$_REQUEST['passportId'];
        $comments=$_REQUEST['comments'];
        $pickupdate=$_REQUEST['pickupdate'];
        $pickuptime=$_REQUEST['pickuptime'];
        $pickUpLocation=$_REQUEST['pickUpLocation'];
        $dorpOffLocation=$_REQUEST['dorpOffLocation'];
        $payment=$_REQUEST['payment'];      
        $pasengers=$_REQUEST['pasengers'];
        $suitcases=$_REQUEST['suitcases'];
        $vehical=$_REQUEST['selectVehical'];


        $to="pdncpathiraja95@gmail.com";
        $subject="Add Ride";
        $message="This Persion Book Our Vehical \n\n"."Full Name: ".$firstname. " ".$lastname."\n"."E-mail: ".$email."\n"."Phone : ".$phone."\n"."Country: ".$country."\n"."Passport Id: ".$passportId."\n"."Comments: ".$comments."\n"
        ."PickUp Date: ".$pickupdate."\n"."Pickup Time: ".$pickuptime."\n"."PickUp Location: ".$pickUpLocation."\n"."Drop Off Location: ".$dorpOffLocation."\n"."Payment Method: ".$payment."\n"."Number Of Pasengers: ".$pasengers."\n"."Number of Suitcases: ".$suitcases."\n"
        ."Vehical Type: ".$vehical."\n";
        $headers="From : nadeesha@gmail.com";

        if(mail($to,$subject,$message,$headers)){
            echo "<h2>Email Sent Successfully! Thank You</h2>";
        }
        else{
            echo "Someting Went Wrong";
        }

		unset($_REQUEST["submit"]);
    }
?>

<?php

	// define variables and set to empty values
	$nameErr = $emailErr = $phoneErr = "";
	$name = $email = $phoneErr = "";

	if ($_SERVER["REQUEST_METHOD"] == "") {

		if (empty($_POST["name"])) {
			$nameErr = "Name is required";
		} else {
			$name = test_input($_POST["name"]);
			// check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			$nameErr = "Only letters and white space allowed";
			}
		}
		
		if (empty($_POST["email"])) {
			$emailErr = "Email is required";
		} else {
			$email = test_input($_POST["email"]);
			// check if e-mail address is well-formed
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailErr = "Invalid email format";
			}
		}

		if (empty($_POST["phone"])) {
			$phoneErr = "Phone Number is required";
		} else {
			$phone = test_input($_POST["phone"]);
			// check if e-mail address is well-formed
			if (!filter_var($phone, FILTER_VALIDATE_EMAIL)) {
			$phoneErr = "Invalid Phone Number format";
			}
		}
	
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>card booking summary</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style>
		.error {color: #FF0000;}
	</style>

</head>
<body>


<!-- Summary -->

	<div class="container">

		<form action="#" method="post">

			<div>
				<h1> Booking Summary</h1>
			</div>

			<div class="row">

				<div class="col-md-4">

					<h2>Ride Details</h2>
					
					

						<div class="row" style="margin-top: 30px;">

							<div class="col-md-6">
								<label>First Name</label>
								<input name="firstname" type="text" class="form-control" value=<?php echo $firstname ?>>
							</div>

							<div class="col-md-6">
								<label>Last Name</label>
								<input name="lastname" type="text" class="form-control" value=<?php echo $lastname ?>>
							</div>	

						</div>

						<div class="row">
							<div class="col-md-6">
								<label>Email</label>
								<input name="email" type="text" class="form-control" value=<?php echo $email ?>>
							</div>
							<div class="col-md-6">
								<label>Phone</label>
								<input name="phone" type="text" class="form-control" value=<?php echo $phone ?>>
							</div>	
						</div>

						<div class="row">
							<div class="col-md-6">
								<label>Country</label>
								<input name="country" type="text" class="form-control" value=<?php echo $country ?>>
							</div>
							<div class="col-md-6">
								<label>Passport Id</label>
								<input name="passportId" type="text" class="form-control" value=<?php echo $passportId ?>>
							</div>	
						</div>

						<div class="row">
							<div class="col-md-6">
								<label>Pick Up Date</label>
								<input name="pickupdate" type="date" class="form-control" value=<?php echo $pickupdate ?>>
							</div>
							<div class="col-md-6">
								<label>Pick Up Time</label>
								<input name="pickuptime" type="text" class="form-control" value=<?php echo $pickuptime ?>>
							</div>	
						</div>

						<div class="row">

							<div class="col-md-6">
								<label>Pick Up Location</label>
								<input name="pickUpLocation" type="text" class="form-control" value=<?php echo $pickUpLocation ?>>
							</div>
							<div class="col-md-6">
								<label>Drop Of Location</label>
								<input name="dorpOffLocation" type="text" class="form-control" value=<?php echo $dorpOffLocation ?>>	
							</div>
				
						</div>
			
				</div>

				<div class="col-md-4">
					<h2 class="display-4">Payment Details</h2>
		    
						<div class="custom-control custom-radio">
							<label>Payment Method</label>
							<input name="payment" type="text" class="form-control" value=<?php echo $payment ?>>
						</div>

				</div>

				<div class="col-md-4">

					<div class="row">
						<div class="col-md-12">

						<h2>Vehical Details</h2>
                            
                            <label>Vehical Type</label>
							<input name="vehical" type="text" class="form-control" value=<?php echo $vehical ?>>
							
							<label>Number Of Pasengers</label>
							<input name="pasengers" type="text" class="form-control" value=<?php echo $pasengers ?>>

							<label>Number Of Suitcases</label>
							<input name="suitcases" type="text" class="form-control" value=<?php echo $suitcases ?>>
				

						</div>
					</div>						

					<div class="row" style="margin-top: 50px;">
						<div class="col-md-6">
							
								<label>Total Distance</label>
								<input name="distance" type="text" class="form-control" value="100Km">
	
						</div>
						<div class="col-md-6">
							

								<label>Total Price</label>
								<input name="price" type="text" class="form-control" value="Rs 50000.00">

							
							
						</div>	
					</div>
				</div>

			</div>


	<!-- button -->
			<div class="row">

				
				<div class="col-md-7">
					
				</div>

				<div class="col-md-5">

						<input type='button' onclick="window.location.replace('http://yayataxis.com/my-booking-info/?preview_id=610&preview_nonce=a5958a0fae&preview=true')" value='Cancle'>	
						<input type="submit" value="BOOK NOW!" name="booking"/>
					
				</div>


			</div>


	</form>	



	</div>
	

</body>
</html>