<form id="form1" name="form1" method="post" action="<?=$_SERVER['PHP_SELF'];?>">
    <table class="formatTblClass">
        <tr>
        <th colspan="6"><?=$message;?></th>
        </tr>
        <tr>
        <td width="68"><span>First Name</span></td>
        <td width="215"><input class="<?=$aClass;?>" type="text" name="fn" id="fn" /></td>
        <td width="62"><span>Last Name</span></td>
        <td colspan="3"><input class="<?=$aClass;?>" name="ln" type="text" id="ln" size="50" /></td>
        </tr>
        <tr>
        <td colspan="6"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
        <td width="71">Address</td>
        <td width="721"><input class="<?=$aClass;?>" name="address" type="text" id="address" size="100" /></td>
        </tr>
        </table></td>
        </tr>
        <tr>
        <td><span>City</span></td>
        <td><input class="<?=$aClass;?>" type="text" name="city" id="city" /></td>
        <td><span>State</span></td>
        <td width="148"><input class="<?=$aClass;?>" type="text" name="state" id="state" /></td>
        <td width="24"><span>ZIP</span></td>
        <td width="255"><input class="<?=$aClass;?>" type="text" name="zip" id="zip" /></td>
        </tr>
        <tr>
        <td><span>Phone</span></td>
        <td><input class="<?=$aClass;?>" type="text" name="phone" id="phone" /></td>
        <td><span>Email</span></td>
        <td><input class="<?=$aClass;?>" type="text" name="email" id="email" /></td>
        <td><input name="emailMe" type="checkbox" id="emailMe" value="Yes" checked="checked" /></td>
        <td>Please send me email</td>
        </tr>
        <tr>
        <td colspan="6"><span>Comments
        <textarea name="comments" id="comments" cols="45" rows="5"></textarea>
        </span>
        <div align="center">
        <input type="submit" name="Submit" id="Submit" value="Submit" />
        <input type="reset" name="Reset" id="button" value="Reset" />
        </div></td>
        </tr>
    </table>
</form>

<?php

$fn = $_POST['fn'];
$ln = $_POST['ln'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$emailMe = (isset($_POST['emailMe'])) ? $_POST['emailMe'] : 'No';
$comments = $_POST['comments'];

//validate

if(empty($fn) || empty($ln) || empty($address) || empty($city) || empty($state) || empty($zip) || empty($phone) || empty($email)){//show the form
    $message = 'Fill in areas in red!';
    $aClass = 'errorClass';
}
//this is where the creating of the csv takes place
$cvsData = $fn . "," . $ln . "," . $address . "," . $city . "," . $state . "," . $zip . "," . $phone . "," . $email . "," .$emailMe . "," . $comments ."\n";

$fp = fopen("formTest.csv","a"); // $fp is now the file pointer to file $filename

if($fp){
    fwrite($fp,$cvsData); // Write information to the file
    fclose($fp); // Close the file
}

?>