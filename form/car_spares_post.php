<?php

if(isset($_POST['sparesSubmit'])){
  $carSpares = $_POST['carSpares'];
  $provinceTwo = $_POST['provinceTwo'];
  $cityTwo = $_POST['cityTwo'];
  $areaTwo = $_POST['areaTwo'];
  $titleTwo =  $_POST['titleTwo'];
  $descriptionTwo =  $_POST['bodyTwo']; 
  $priceTwo =  $_POST['amountTwo']; 
  $phoneNumberTwo =  $_POST['phoneNumberTwo'];
  $emailTwo = $_POST['emailTwo'];

  $carSparesEmpty = false;
  $provinceEmptyTwo = false;
  $cityEmptyTwo = false;
  $areaEmptyTwo = false;
  $titleEmptyTwo = false;
  $descriptionEmptyTwo = false;
  $priceEmptyTwo = false;
  $phoneNumberEmptyTwo = false;
  $emailEmptyTwo = false;
  $errorEmailTwo = false;

if(empty($carSpares)){
    echo '<span class="error">Select the Car Spares Type!</span>';
    $carSparesEmpty = true;
}elseif(empty($provinceTwo)){
  echo '<span class="error">Select your Province!</span>';
  $provinceEmptyTwo = true;
}elseif(empty($cityTwo)){
  echo '<span class="error">Select your City!</span>';
  $cityEmptyTwo = true;
}elseif(empty($areaTwo)){
  echo '<span class="error">Select your Area!</span>';
  $areaEmptyTwo = true;
}elseif(empty($titleTwo)){
    echo '<span class="error">Add Your title!</span>';
    $titleEmptyTwo = true;
}elseif(empty($descriptionTwo)){
    echo '<span class="error">Add a description!</span>';
    $descriptionEmptyTwo = true;
}elseif(empty($priceTwo)){
    echo '<span class="error">Add add the price!</span>';
    $priceEmptyTwo = true;
}elseif(empty($phoneNumberTwo)){
    echo '<span class="error">Add you phone number!</span>';
    $phoneNumberEmptyTwo = true;
}elseif(empty($emailTwo)){
    echo '<span class="error">Add your email!</span>';
    $emailEmptyTwo = true;
}elseif(!filter_var($emailTwo, FILTER_VALIDATE_EMAIL)){
    echo '<span class="error">Please add a valid email address</span>';
    $errorEmailTwo = true;
}else {
    echo '<span style="color:green; font-size:larger; font-weight: 700;">Classfieds Successfully Posted</span>';
  }

}else {
  echo '<span class="error">There was an error.</span>';
}


?>

<script>


$("#carSpares, #provinceTwo, #cityTwo, #areaTwo, #input-titleTwo, #bodyTwo, #input-amountTwo, #input-phone-numberTwo, #input-emailTwo").removeClass("input-error");
 
  var carSparesEmpty = "<?php echo $carSparesEmpty ?>";
  var provinceEmptyTwo = "<?php echo $provinceEmptyTwo ?>";
  var cityEmptyTwo = "<?php echo $cityEmptyTwo ?>";
  var areaEmptyTwo = "<?php echo $areaEmptyTwo ?>";
  var titleEmptyTwo = "<?php echo $titleEmptyTwo ?>";
  var descriptionEmptyTwo = "<?php echo $descriptionEmptyTwo ?>";
  var priceEmptyTwo = "<?php echo $priceEmptyTwo ?>";
  var phoneNumberEmptyTwo = "<?php echo $phoneNumberEmptyTwo ?>";
  var emailEmptyTwo = "<?php echo $emailEmptyTwo ?>";
  var errorEmailTwo = "<?php echo $errorEmailTwo ?>";

 

  if(carSparesEmpty == true){
    $("#carSpares").addClass("input-error");
  }

  if(provinceEmptyTwo == true){
    $("#provinceTwo").addClass("input-error");
  }

  if(cityEmptyTwo == true){
    $("#cityTwo").addClass("input-error");
  }

  if(areaEmptyTwo == true){
    $("#areaTwo").addClass("input-error");
  }

  if(titleEmptyTwo == true){
    $("#input-titleTwo").addClass("input-error");
  }

  if(descriptionEmptyTwo == true){
    $("#bodyTwo").addClass("input-error");
  }

  if(priceEmptyTwo == true){
    $("#input-amountTwo").addClass("input-error");
  }

  if(phoneNumberEmptyTwo == true){
    $("#input-phone-numberTwo").addClass("input-error");
  }

  if(emailEmptyTwo == true){
    $("#input-emailTwo").addClass("input-error");
  }

  if(errorEmailTwo == true){
    $("#input-emailTwo").addClass("input-error");
  }

  if(carSparesEmpty == false && provinceEmptyTwo == false && cityEmptyTwo == false && areaEmptyTwo == false && titleEmptyTwo == false && descriptionEmptyTwo == false && priceEmptyTwo == false && phoneNumberEmptyTwo == false && emailEmptyTwo == false && errorEmailTwo == false){
    $("#carSpares, #provinceTwo, #cityTwo, #areaTwo #input-titleTwo, #bodyTwo, #input-amountTwo, #input-phone-numberTwo, #input-emailTwo").val("");
  }
</script>


