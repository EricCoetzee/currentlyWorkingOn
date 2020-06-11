
<?php

if(isset($_POST['carSubmit'])){
  $bodyType = $_POST['bodyType'];
  $carMake = $_POST['carMake'];
  $carModel = $_POST['carModel'];
  $carMileage = $_POST['carMileage'];
  $carColor = $_POST['carColor'];
  $carYear = $_POST['carYear'];
  $carTrans = $_POST['carTrans'];
  $carFuelType = $_POST['carFuelType'];
  $province = $_POST['province'];
  $city = $_POST['city'];
  $area = $_POST['area'];
  $title =  $_POST['title'];
  $description =  $_POST['body']; 
  $price =  $_POST['amount']; 
  $phoneNumber =  $_POST['phoneNumber'];
  $email = $_POST['email'];

  $bodyTypeEmpty = false;
  $carMakeEmpty = false;
  $carModelEmpty = false;
  $carMileageEmpty = false;
  $carColorEmpty = false;
  $carYearEmpty = false;
  $carTransEmpty = false;
  $carFuelTypeEmpty = false;
  $provinceEmpty = false;
  $cityEmpty = false;
  $areaEmpty = false;
  $titleEmpty = false;
  $descriptionEmpty = false;
  $priceEmpty = false;
  $phoneNumberEmpty = false;
  $emailEmpty = false;
  $errorEmail = false;

if(empty($bodyType)){
    echo '<span class="error">Select the Car Body Type!</span>';
    $bodyTypeEmpty = true;
}elseif(empty($carMake)){
    echo '<span class="error">Select the Car Make!</span>';
    $carMakeEmpty = true;
}elseif(empty($carModel)){
    echo '<span class="error">Select the Car Model!</span>';
    $carModelEmpty = true;
}elseif(empty($carMileage)){
    echo '<span class="error">Select the Car Mileage!</span>';
    $carMileageEmpty = true;
}elseif(empty($carColor)){
    echo '<span class="error">Select the Car Color!</span>';
    $carColorEmpty = true;
}elseif(empty($carYear)){
    echo '<span class="error">Please add the Car Year!</span>';
    $carYearEmpty = true;
}elseif(empty($carTrans)){
    echo '<span class="error">Select the Car Transmission!</span>';
    $carTransEmpty = true;
}elseif(empty($carFuelType)){
    echo '<span class="error">Select the Car Fuel Type!</span>';
    $carFuelTypeEmpty = true;
}elseif(empty($province)){
  echo '<span class="error">Select your Province!</span>';
  $provinceEmpty = true;
}elseif(empty($city)){
  echo '<span class="error">Select your City!</span>';
  $cityEmpty = true;
}elseif(empty($area)){
  echo '<span class="error">Select your Area!</span>';
  $areaEmpty = true;
}elseif(empty($title)){
    echo '<span class="error">Add Your title!</span>';
    $titleEmpty = true;
}elseif(empty($description)){
    echo '<span class="error">Add a description!</span>';
    $descriptionEmpty = true;
}elseif(empty($price)){
    echo '<span class="error">Add add the price!</span>';
    $priceEmpty = true;
}elseif(empty($phoneNumber)){
    echo '<span class="error">Add you phone number!</span>';
    $phoneNumberEmpty = true;
}elseif(empty($email)){
    echo '<span class="error">Add your email!</span>';
    $emailEmpty = true;
}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo '<span class="error">Please add a valid email address</span>';
    $errorEmail = true;
}else {
    echo '<span style="color:green; font-size:larger; font-weight: 700;">Classfieds Successfully Posted</span>';
  }

}else {
  echo '<span class="error">There was an error.</span>';
}


?>

<script>


$("#bodyType, #carMake, #carModel, #carMileage, #carColor, #carYear, #carTrans, #carFuelType, #province, #city, #area, #input-title, #body, #input-amount, #input-phone-number, #input-email").removeClass("input-error");
 
  var bodyTypeEmpty = "<?php echo $bodyTypeEmpty ?>";
  var carMakeEmpty = "<?php echo $carMakeEmpty ?>";
  var carModelEmpty = "<?php echo $carModelEmpty ?>";
  var carMileageEmpty = "<?php echo $carMileageEmpty ?>";
  var carColorEmpty = "<?php echo $carColorEmpty ?>";
  var carYearEmpty = "<?php echo $carYearEmpty ?>";
  var carTransEmpty = "<?php echo $carTransEmpty ?>";
  var carFuelTypeEmpty = "<?php echo $carFuelTypeEmpty ?>";
  var provinceEmpty = "<?php echo $provinceEmpty ?>";
  var cityEmpty = "<?php echo $cityEmpty ?>";
  var areaEmpty = "<?php echo $areaEmpty ?>";
  var titleEmpty = "<?php echo $titleEmpty ?>";
  var descriptionEmpty = "<?php echo $descriptionEmpty ?>";
  var priceEmpty = "<?php echo $priceEmpty ?>";
  var phoneNumberEmpty = "<?php echo $phoneNumberEmpty ?>";
  var emailEmpty = "<?php echo $emailEmpty?>";
  var errorEmail = "<?php echo $errorEmail ?>";

 

  if(bodyTypeEmpty == true){
    $("#bodyType").addClass("input-error");
  }

  if(carMakeEmpty == true){
    $("#carMake").addClass("input-error");
  }

  if(carModelEmpty == true){
    $("#carModel").addClass("input-error");
  }

  if(carMileageEmpty == true){
    $("#carMileage").addClass("input-error");
  }

  if(carColorEmpty == true){
    $("#carColor").addClass("input-error");
  }

  if(carYearEmpty == true){
    $("#carYear").addClass("input-error");
  }

  if(carTransEmpty == true){
    $("#carTrans").addClass("input-error");
  }

  if(carFuelTypeEmpty == true){
    $("#carFuelType").addClass("input-error");
  }

  if(provinceEmpty == true){
    $("#province").addClass("input-error");
  }

  if(cityEmpty == true){
    $("#city").addClass("input-error");
  }

  if(areaEmpty == true){
    $("#area").addClass("input-error");
  }

  if(titleEmpty == true){
    $("#input-title").addClass("input-error");
  }

  if(descriptionEmpty == true){
    $("#body").addClass("input-error");
  }

  if(priceEmpty == true){
    $("#input-amount").addClass("input-error");
  }

  if(phoneNumberEmpty == true){
    $("#input-phone-number").addClass("input-error");
  }

  if(emailEmpty == true){
    $("#input-email").addClass("input-error");
  }

  if(errorEmail == true){
    $("#input-email").addClass("input-error");
  }

  if(bodyTypeEmpty == false && carMakeEmpty == false && carModelEmpty == false && carMileageEmpty == false && carColorEmpty == false && carYearEmpty == false && carTransEmpty == false && carFuelTypeEmpty == false && provinceEmpty == false && cityEmpty == false && areaEmpty == false && titleEmpty == false && descriptionEmpty == false && priceEmpty == false && phoneNumberEmpty == false && emailEmpty == false && errorEmail == false){
    $("#bodyType, #carMake, #carModel, #carMileage, #carColor, #carYear, #carTrans, #carFuelType, #province, #city, #area #input-title, #body, #input-amount, #input-phone-number, #input-email").val("");
  }
</script>
