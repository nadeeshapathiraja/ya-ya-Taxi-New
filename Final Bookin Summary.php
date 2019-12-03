<!-- After Press Submit Button -->
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
		
		//check for a valid email address
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$error[] = 'Please enter a valid email address';
		}

// //<!-- downlord csv file -->

// 		//if no errors carry on
// 		if(!isset($error)){

// 			# Title of the CSV
// 			$Content = "First Name, Last Name, Email, Phone, Country, Passport Id, Comments, Pickup Date, Pickup Time, Pickup Location, Drop Off Location,
// 				 Payment Method, Number Of Pasengers, Number Of Suitcases, Vehical Type\n";

// 			//set the data of the CSV
// 			$Content .= "$firstname,$lastname,$email,$phone,$country,$passportId,$comments,$pickupdate,$pickuptime,$pickuptime,$pickUpLocation,
// 			$dorpOffLocation,$payment,$pasengers,$suitcases,$vehical\n";

// 			# set the file name and create CSV file
// 			//$FileName = "formdata-".date("d-m-y-h:i:s").".csv";
// 			$FileName = $passportId.".csv";
// 			header('Content-Type: application/csv'); 
// 			header('Content-Disposition: attachment; filename="' . $FileName . '"'); 
// 			echo $Content;
// 			exit();

// 		}
// //end csv file genarate

//Email send to admin
        $to="pdncpathiraja95@gmail.com";
        $subject="Add Ride";
        $message="This Persion want to book our Vehical \n\n"."Full Name: ".$firstname. " ".$lastname."\n"."E-mail: ".$email."\n"."Phone : ".$phone."\n"."Country: ".$country."\n"."Passport Id: ".$passportId."\n"."Comments: ".$comments."\n"
        ."PickUp Date: ".$pickupdate."\n"."Pickup Time: ".$pickuptime."\n"."PickUp Location: ".$pickUpLocation."\n"."Drop Off Location: ".$dorpOffLocation."\n"."Payment Method: ".$payment."\n"."Number Of Pasengers: ".$pasengers."\n"."Number of Suitcases: ".$suitcases."\n"
        ."Vehical Type: ".$vehical."\n";
        $headers="From : $email";

		
        if(mail($to,$subject,$message,$headers)){
            echo "<h2>Thank You For Interest Our Site</h2>";
        }
        else{
            echo "Someting Went Wrong";
		}
		
//end email sent code		

		unset($_REQUEST["submit"]);
    }
?>

<!-- After Press Booking Button -->
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
        $vehical=$_REQUEST['vehical'];


        $to="pdncpathiraja95@gmail.com";
        $subject="Book Ride";
        $message="This Persion Book Our Vehical \n\n"."Full Name: ".$firstname. " ".$lastname."\n"."Phone : ".$phone."\n"."Passport Id: ".$passportId."\n";
		$headers="From : $email";
		
		// if($email !=''&& $phone !=''&& $passportId !='')
		// {
		// 	//  To redirect form on a particular page
		// 	header("Location:http://yayataxis.com/complete-submit/");
		// }
		//window.open(“www.yayataxis.com/complete-submit/”);


        if(mail($to,$subject,$message,$headers)){
            echo "<h2>Email Sent Successfully! Thank You</h2>";
        }
        else{
            echo "Someting Went Wrong";
        }

		unset($_REQUEST["booking"]);
    }
?>

<!-- Cancle button -->
<?php

    if (isset($_REQUEST["cancle"])){
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
        $vehical=$_REQUEST['vehical'];


        $to="pdncpathiraja95@gmail.com";
        $subject="Cancle Ride";
        $message="This Persion Cancle booking \n\n"."Full Name: ".$firstname. " ".$lastname."\n"."Phone : ".$phone."\n"."Passport Id: ".$passportId."\n";
		$headers="From : $email";
		
        if(mail($to,$subject,$message,$headers)){
            echo "<h2>You Cancle your Ride</h2>";
        }
        else{
            echo "Someting Went Wrong";
		}
		
		// window.location.replace('http://yayataxis.com/my-booking-info');
		//window.open(“www.yayataxis.com/my-booking-info”);

		
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

					<!-- <div class="row" style="margin-top: 50px;">
						<div class="col-md-6">
								<label>Total Distance</label>
								<input name="distance" type="text" class="form-control" value="100Km">	
						</div>
						<div class="col-md-6">	
								<label>Total Price</label>
								<input name="price" type="text" class="form-control" value="Rs 50000.00">	
						</div>	
					</div> -->
				</div>

			</div>


	<!-- button -->
			<div class="row">

				
				<div class="col-md-7">
					
				</div>

				<div class="col-md-5">
					<input type='submit' name="cancle" value='Cancle'>
					<input type="submit" value="BOOK NOW!" name="booking"/>
					
				</div>


			</div>


	</form>	



	</div>
	

</body>
</html>