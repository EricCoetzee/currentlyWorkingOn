
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload form</title>
    <link rel="stylesheet" href="style.css">
    
    <style>
    .error {
      color: firebrick;
      font-size: larger;
      }
    </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script>
    $(document).ready(function(){
      $("#cars").submit(function(event){
        event.preventDefault();
        let bodyType = $("#bodyType").val();
        let carMake = $("#carMake").val();
        let carModel = $("#carModel").val();
        let carMileage = $("#carMileage").val();
        let carColor = $("#carColor").val();
        let carYear = $("#carYear").val();
        let carTrans = $("#carTrans").val();
        let carFuelType = $("#carFuelType").val();
        let province = $("#province").val();
        let city = $("#city").val();
        let area = $("#area").val();
        let title = $("#input-title").val();
        let body = $("#body").val();
        let amount = $("#input-amount").val();
        let phoneNumber = $("#input-phone-number").val();
        let email = $("#input-email").val();
        let carSubmit = $("#carSubmit").val();

        $(".form-message").load("car_post.php", {
            bodyType: bodyType,
            carMake: carMake,
            carModel: carModel,
            carMileage: carMileage,
            carColor: carColor,
            carYear: carYear,
            carTrans: carTrans,
            carFuelType: carFuelType,
            province: province,
            city: city,
            area: area,
            title:  title,
            body:  body, 
            amount:  amount, 
            phoneNumber:  phoneNumber,
            email: email,
            carSubmit: carSubmit
        });
      });

      $("#carsPart").submit(function(event){
        event.preventDefault();
        let carSpares = $("#carSpares").val();
        let provinceTwo = $("#provinceTwo").val();
        let cityTwo = $("#cityTwo").val();
        let areaTwo = $("#areaTwo").val();
        let titleTwo = $("#input-titleTwo").val();
        let bodyTwo = $("#bodyTwo").val();
        let amountTwo = $("#input-amountTwo").val();
        let phoneNumberTwo = $("#input-phone-numberTwo").val();
        let emailTwo = $("#input-emailTwo").val();
        let sparesSubmit = $("#carSubmit").val();

        $(".form-message").load("car_spares_post.php", {
            carSpares: carSpares,
            provinceTwo: provinceTwo,
            cityTwo: cityTwo,
            areaTwo: areaTwo,
            titleTwo:  titleTwo,
            bodyTwo:  bodyTwo, 
            amountTwo:  amountTwo, 
            phoneNumberTwo:  phoneNumberTwo,
            emailTwo: emailTwo,
            sparesSubmit: sparesSubmit
        });
      });
      $("#bikes").submit(function(event){
        event.preventDefault();
        let bodyType = $("#bodyType").val();
        let carMake = $("#carMake").val();
        let carModel = $("#carModel").val();
        let carMileage = $("#carMileage").val();
        let carColor = $("#carColor").val();
        let carYear = $("#carYear").val();
        let carTrans = $("#carTrans").val();
        let carFuelType = $("#carFuelType").val();
        let province = $("#province").val();
        let city = $("#city").val();
        let area = $("#area").val();
        let title = $("#input-title").val();
        let body = $("#body").val();
        let amount = $("#input-amount").val();
        let phoneNumber = $("#input-phone-number").val();
        let email = $("#input-email").val();
        let carSubmit = $("#carSubmit").val();

        $(".form-message").load("car_post.php", {
            bodyType: bodyType,
            carMake: carMake,
            carModel: carModel,
            carMileage: carMileage,
            carColor: carColor,
            carYear: carYear,
            carTrans: carTrans,
            carFuelType: carFuelType,
            province: province,
            city: city,
            area: area,
            title:  title,
            body:  body, 
            amount:  amount, 
            phoneNumber:  phoneNumber,
            email: email,
            carSubmit: carSubmit
        });
      });
    });

  </script>


    <script>

      function showElement(elem){

      switch (elem) {
      case "cars":
        document.getElementById("autoType").style.display = "block";
      break;

      case "automotive":
        document.getElementById("cars").style.display = "block";
        document.getElementById("carsPart").style.display = "none";
      break;

      case "carSpares":
        document.getElementById("cars").style.display = "none";
        document.getElementById("carsPart").style.display = "block";
      break;
  
      default:

      }
    }

    function EnableDisableTextBox(ddlModels) {
            var selectedValue = ddlModels.options[ddlModels.selectedIndex].value;
            var txtOther = document.getElementById("input-amount");
            txtOther.disabled = selectedValue === "amount" ? false : true;
            if (!txtOther.disabled) {
                txtOther.focus();
            }else if (txtOther.disabled) {
              document.getElementById('input-amount').value= 0.0000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000001;
            } 
        }
        function EnableDisableTextBoxTwo(ddlModelsTwo) {
            var selectedValue = ddlModelsTwo.options[ddlModelsTwo.selectedIndex].value;
            var txtOther = document.getElementById("input-amountTwo");
            txtOther.disabled = selectedValue === "amount" ? false : true;
            if (!txtOther.disabled) {
                txtOther.focus();
            }else if (txtOther.disabled) {
              document.getElementById('input-amountTwo').value= 0.0000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000001;
            } 
        }
    </script>
</head>
<body>

        
<div class="create-classfieds-container">
      <h1>Create Classifieds</h1>
      <p><span class="error">* required field</span></p>

<!-- *************************************************************************************************************************************** -->

      <div class="wrapper"><h3>Select the category type <span style="color: firebrick; font-size: larger;">*</span></h3>
          <div class="category-type">
<!-- *************************************************************************************************************************************** -->

            <div id="automotive">
              <label >
                  <input type="radio" name="cat_type" onclick="showElement('cars')" value="automotive">
                  <div class="automotive-category">
                      <svg aria-hidden="true" width="60px" height="60px" focusable="false" data-prefix="fas" data-icon="car" class="svg-inline--fa fa-car fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M499.99 176h-59.87l-16.64-41.6C406.38 91.63 365.57 64 319.5 64h-127c-46.06 0-86.88 27.63-103.99 70.4L71.87 176H12.01C4.2 176-1.53 183.34.37 190.91l6 24C7.7 220.25 12.5 224 18.01 224h20.07C24.65 235.73 16 252.78 16 272v48c0 16.12 6.16 30.67 16 41.93V416c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-32h256v32c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-54.07c9.84-11.25 16-25.8 16-41.93v-48c0-19.22-8.65-36.27-22.07-48H494c5.51 0 10.31-3.75 11.64-9.09l6-24c1.89-7.57-3.84-14.91-11.65-14.91zm-352.06-17.83c7.29-18.22 24.94-30.17 44.57-30.17h127c19.63 0 37.28 11.95 44.57 30.17L384 208H128l19.93-49.83zM96 319.8c-19.2 0-32-12.76-32-31.9S76.8 256 96 256s48 28.71 48 47.85-28.8 15.95-48 15.95zm320 0c-19.2 0-48 3.19-48-15.95S396.8 256 416 256s32 12.76 32 31.9-12.8 31.9-32 31.9z"></path></svg>
                      <p>Automotive</p>
                  </div>
              </label>
            </div>
<!-- *************************************************************************************************************************************** -->
            
            <div id="propery">
              <label >
                  <input type="radio" name="cat_type" onclick="showElement('property')" value="property" >
                  <div class="property-category">
                      <svg aria-hidden="true" width="60px" height="60px" focusable="false" data-prefix="fas" data-icon="home" class="svg-inline--fa fa-home fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z"></path></svg>
                      <p>Property</p>
                  </div>
                </label>
              </div>

<!-- *************************************************************************************************************************************** -->

              <div id="employment">
                <label>
                  <input type="radio" name="cat_type" value="employment" >
                  <div class="employment-category">
                      <svg aria-hidden="true" width="60px" height="60px" focusable="false" data-prefix="fas" data-icon="briefcase" class="svg-inline--fa fa-briefcase fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M320 336c0 8.84-7.16 16-16 16h-96c-8.84 0-16-7.16-16-16v-48H0v144c0 25.6 22.4 48 48 48h416c25.6 0 48-22.4 48-48V288H320v48zm144-208h-80V80c0-25.6-22.4-48-48-48H176c-25.6 0-48 22.4-48 48v48H48c-25.6 0-48 22.4-48 48v80h512v-80c0-25.6-22.4-48-48-48zm-144 0H192V96h128v32z"></path></svg>
                      <p>Employment</p>
                  </div>
                </label>
              </div>
             
 <!-- *************************************************************************************************************************************** -->
             
              <div id="business">
                <label>
                  <input type="radio" name="cat_type" value="business" >
                  <div class="business-category">
                      <svg aria-hidden="true" width="60px" height="60px" focusable="false" data-prefix="fas" data-icon="user-tie" class="svg-inline--fa fa-user-tie fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm95.8 32.6L272 480l-32-136 32-56h-96l32 56-32 136-47.8-191.4C56.9 292 0 350.3 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-72.1-56.9-130.4-128.2-133.8z"></path></svg>
                      <p>Business</p>
                  </div>
                </label>
              </div>

<!-- *************************************************************************************************************************************** -->
              <div id="electronics">
                <label>
                  <input type="radio" name="cat_type" value="electronics" >
                  <div class="electronics-category">
                      <svg aria-hidden="true" width="60px" height="60px" focusable="false" data-prefix="fas" data-icon="tv" class="svg-inline--fa fa-tv fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M592 0H48A48 48 0 0 0 0 48v320a48 48 0 0 0 48 48h240v32H112a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16H352v-32h240a48 48 0 0 0 48-48V48a48 48 0 0 0-48-48zm-16 352H64V64h512z"></path></svg>
                      <p>Electronics</p>
                  </div>
                </label>
              </div>
              
<!-- *************************************************************************************************************************************** -->

              <div id="otherCats">
                <label>
                  <input type="radio" id="otherCats" name="cat_type" onclick="showElement('otherCats')" value="other" >
                  <div class="all-categories">
                      <svg aria-hidden="true" width="60px" height="60px" focusable="false" data-prefix="fas" data-icon="asterisk" class="svg-inline--fa fa-asterisk fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M478.21 334.093L336 256l142.21-78.093c11.795-6.477 15.961-21.384 9.232-33.037l-19.48-33.741c-6.728-11.653-21.72-15.499-33.227-8.523L296 186.718l3.475-162.204C299.763 11.061 288.937 0 275.48 0h-38.96c-13.456 0-24.283 11.061-23.994 24.514L216 186.718 77.265 102.607c-11.506-6.976-26.499-3.13-33.227 8.523l-19.48 33.741c-6.728 11.653-2.562 26.56 9.233 33.037L176 256 33.79 334.093c-11.795 6.477-15.961 21.384-9.232 33.037l19.48 33.741c6.728 11.653 21.721 15.499 33.227 8.523L216 325.282l-3.475 162.204C212.237 500.939 223.064 512 236.52 512h38.961c13.456 0 24.283-11.061 23.995-24.514L296 325.282l138.735 84.111c11.506 6.976 26.499 3.13 33.227-8.523l19.48-33.741c6.728-11.653 2.563-26.559-9.232-33.036z"></path></svg>
                      <p>Other categories</p>
                  </div>
                </label>
              </div>

<!-- *************************************************************************************************************************************** -->

          </div>
      </div>

<!-- *************************************************************************************************************************************** -->
  
    <div class="tab" id="autoType"><h3>Choose Automotive Type <span style="color: firebrick; font-size: larger;">*</span></h3>
        <div class="category-type">
<!-- *************************************************************************************************************************************** -->

          <div>
            <label>
                <input type="radio" id="auto_type" name="auto_type" onclick="showElement('automotive')" value="cars">
                <div class="automotive-category">
                  <svg aria-hidden="true" width="60px" height="60px" width="60px" height="60px"  focusable="false" data-prefix="fas" data-icon="truck-pickup" class="svg-inline--fa fa-truck-pickup fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M624 288h-16v-64c0-17.67-14.33-32-32-32h-48L419.22 56.02A64.025 64.025 0 0 0 369.24 32H256c-17.67 0-32 14.33-32 32v128H64c-17.67 0-32 14.33-32 32v64H16c-8.84 0-16 7.16-16 16v32c0 8.84 7.16 16 16 16h49.61c-.76 5.27-1.61 10.52-1.61 16 0 61.86 50.14 112 112 112s112-50.14 112-112c0-5.48-.85-10.73-1.61-16h67.23c-.76 5.27-1.61 10.52-1.61 16 0 61.86 50.14 112 112 112s112-50.14 112-112c0-5.48-.85-10.73-1.61-16H624c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16zM288 96h81.24l76.8 96H288V96zM176 416c-26.47 0-48-21.53-48-48s21.53-48 48-48 48 21.53 48 48-21.53 48-48 48zm288 0c-26.47 0-48-21.53-48-48s21.53-48 48-48 48 21.53 48 48-21.53 48-48 48z"></path></svg>
                  <p>Cars & Bakkies</p>
                </div>
            </label>
          </div>
<!-- *************************************************************************************************************************************** -->
          
          <div>
            <label>
                <input type="radio" name="auto_type" id="auto_spares" value="carParts" onclick="showElement('carSpares')">
                <div class="property-category">
                  <svg aria-hidden="true" width="60px" height="60px" focusable="false" data-prefix="fas" data-icon="wrench" class="svg-inline--fa fa-wrench fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M507.73 109.1c-2.24-9.03-13.54-12.09-20.12-5.51l-74.36 74.36-67.88-11.31-11.31-67.88 74.36-74.36c6.62-6.62 3.43-17.9-5.66-20.16-47.38-11.74-99.55.91-136.58 37.93-39.64 39.64-50.55 97.1-34.05 147.2L18.74 402.76c-24.99 24.99-24.99 65.51 0 90.5 24.99 24.99 65.51 24.99 90.5 0l213.21-213.21c50.12 16.71 107.47 5.68 147.37-34.22 37.07-37.07 49.7-89.32 37.91-136.73zM64 472c-13.25 0-24-10.75-24-24 0-13.26 10.75-24 24-24s24 10.74 24 24c0 13.25-10.75 24-24 24z"></path></svg>
                  <p>Auto Parts</p>
                </div>
              </label>
            </div>

<!-- *************************************************************************************************************************************** -->

            <div>
              <label>
                <input type="radio" name="auto_type" value="bikes"  onclick="showElement('bikes')">
                <div class="employment-category">
                  <svg aria-hidden="true" width="60px" height="60px" focusable="false" data-prefix="fas" data-icon="motorcycle" class="svg-inline--fa fa-motorcycle fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M512.9 192c-14.9-.1-29.1 2.3-42.4 6.9L437.6 144H520c13.3 0 24-10.7 24-24V88c0-13.3-10.7-24-24-24h-45.3c-6.8 0-13.3 2.9-17.8 7.9l-37.5 41.7-22.8-38C392.2 68.4 384.4 64 376 64h-80c-8.8 0-16 7.2-16 16v16c0 8.8 7.2 16 16 16h66.4l19.2 32H227.9c-17.7-23.1-44.9-40-99.9-40H72.5C59 104 47.7 115 48 128.5c.2 13 10.9 23.5 24 23.5h56c24.5 0 38.7 10.9 47.8 24.8l-11.3 20.5c-13-3.9-26.9-5.7-41.3-5.2C55.9 194.5 1.6 249.6 0 317c-1.6 72.1 56.3 131 128 131 59.6 0 109.7-40.8 124-96h84.2c13.7 0 24.6-11.4 24-25.1-2.1-47.1 17.5-93.7 56.2-125l12.5 20.8c-27.6 23.7-45.1 58.9-44.8 98.2.5 69.6 57.2 126.5 126.8 127.1 71.6.7 129.8-57.5 129.2-129.1-.7-69.6-57.6-126.4-127.2-126.9zM128 400c-44.1 0-80-35.9-80-80s35.9-80 80-80c4.2 0 8.4.3 12.5 1L99 316.4c-8.8 16 2.8 35.6 21 35.6h81.3c-12.4 28.2-40.6 48-73.3 48zm463.9-75.6c-2.2 40.6-35 73.4-75.5 75.5-46.1 2.5-84.4-34.3-84.4-79.9 0-21.4 8.4-40.8 22.1-55.1l49.4 82.4c4.5 7.6 14.4 10 22 5.5l13.7-8.2c7.6-4.5 10-14.4 5.5-22l-48.6-80.9c5.2-1.1 10.5-1.6 15.9-1.6 45.6-.1 82.3 38.2 79.9 84.3z"></path></svg>
                  <p>Motorbikes & Scooters</p>
                </div>
              </label>
            </div>
           
 <!-- *************************************************************************************************************************************** -->
           
            <div>
              <label>
                <input type="radio" name="auto_type" value="bike_spares" onclick="showElement('bikeSpares')">
                <div class="business-category">
                  <svg aria-hidden="true" width="60px" height="60px" focusable="false" data-prefix="fas" data-icon="tools" class="svg-inline--fa fa-tools fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M501.1 395.7L384 278.6c-23.1-23.1-57.6-27.6-85.4-13.9L192 158.1V96L64 0 0 64l96 128h62.1l106.6 106.6c-13.6 27.8-9.2 62.3 13.9 85.4l117.1 117.1c14.6 14.6 38.2 14.6 52.7 0l52.7-52.7c14.5-14.6 14.5-38.2 0-52.7zM331.7 225c28.3 0 54.9 11 74.9 31l19.4 19.4c15.8-6.9 30.8-16.5 43.8-29.5 37.1-37.1 49.7-89.3 37.9-136.7-2.2-9-13.5-12.1-20.1-5.5l-74.4 74.4-67.9-11.3L334 98.9l74.4-74.4c6.6-6.6 3.4-17.9-5.7-20.2-47.4-11.7-99.6.9-136.6 37.9-28.5 28.5-41.9 66.1-41.2 103.6l82.1 82.1c8.1-1.9 16.5-2.9 24.7-2.9zm-103.9 82l-56.7-56.7L18.7 402.8c-25 25-25 65.5 0 90.5s65.5 25 90.5 0l123.6-123.6c-7.6-19.9-9.9-41.6-5-62.7zM64 472c-13.2 0-24-10.8-24-24 0-13.3 10.7-24 24-24s24 10.7 24 24c0 13.2-10.7 24-24 24z"></path></svg>
                  <p>Motorbikes Parts</p>
                </div>
              </label>
            </div>
            
 <!-- *************************************************************************************************************************************** -->
           
            <div>
              <label>
                <input type="radio" name="auto_type" value="construction"  onclick="showElement('contruction')">
                <div class="electronics-category">
                  <svg aria-hidden="true" width="60px" height="60px" focusable="false" data-prefix="fas" data-icon="tractor" class="svg-inline--fa fa-tractor fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M528 336c-48.6 0-88 39.4-88 88s39.4 88 88 88 88-39.4 88-88-39.4-88-88-88zm0 112c-13.23 0-24-10.77-24-24s10.77-24 24-24 24 10.77 24 24-10.77 24-24 24zm80-288h-64v-40.2c0-14.12 4.7-27.76 13.15-38.84 4.42-5.8 3.55-14.06-1.32-19.49L534.2 37.3c-6.66-7.45-18.32-6.92-24.7.78C490.58 60.9 480 89.81 480 119.8V160H377.67L321.58 29.14A47.914 47.914 0 0 0 277.45 0H144c-26.47 0-48 21.53-48 48v146.52c-8.63-6.73-20.96-6.46-28.89 1.47L36 227.1c-8.59 8.59-8.59 22.52 0 31.11l5.06 5.06c-4.99 9.26-8.96 18.82-11.91 28.72H22c-12.15 0-22 9.85-22 22v44c0 12.15 9.85 22 22 22h7.14c2.96 9.91 6.92 19.46 11.91 28.73l-5.06 5.06c-8.59 8.59-8.59 22.52 0 31.11L67.1 476c8.59 8.59 22.52 8.59 31.11 0l5.06-5.06c9.26 4.99 18.82 8.96 28.72 11.91V490c0 12.15 9.85 22 22 22h44c12.15 0 22-9.85 22-22v-7.14c9.9-2.95 19.46-6.92 28.72-11.91l5.06 5.06c8.59 8.59 22.52 8.59 31.11 0l31.11-31.11c8.59-8.59 8.59-22.52 0-31.11l-5.06-5.06c4.99-9.26 8.96-18.82 11.91-28.72H330c12.15 0 22-9.85 22-22v-6h80.54c21.91-28.99 56.32-48 95.46-48 18.64 0 36.07 4.61 51.8 12.2l50.82-50.82c6-6 9.37-14.14 9.37-22.63V192c.01-17.67-14.32-32-31.99-32zM176 416c-44.18 0-80-35.82-80-80s35.82-80 80-80 80 35.82 80 80-35.82 80-80 80zm22-256h-38V64h106.89l41.15 96H198z"></path></svg>
                  <p>Contruction & Farm</p>
                </div>
              </label>
            </div>
            
<!-- *************************************************************************************************************************************** -->

            <div>
              <label>
                <input type="radio" name="auto_type" value="other"  onclick="showElement('other-vehicle')">
                <div class="all-categories">
                  <svg aria-hidden="true" width="60px" height="60px" focusable="false" data-prefix="fas" data-icon="caravan" class="svg-inline--fa fa-caravan fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M416,208a16,16,0,1,0,16,16A16,16,0,0,0,416,208ZM624,320H576V160A160,160,0,0,0,416,0H64A64,64,0,0,0,0,64V320a64,64,0,0,0,64,64H96a96,96,0,0,0,192,0H624a16,16,0,0,0,16-16V336A16,16,0,0,0,624,320ZM192,432a48,48,0,1,1,48-48A48.05,48.05,0,0,1,192,432Zm64-240a32,32,0,0,1-32,32H96a32,32,0,0,1-32-32V128A32,32,0,0,1,96,96H224a32,32,0,0,1,32,32ZM448,320H320V128a32,32,0,0,1,32-32h64a32,32,0,0,1,32,32Z"></path></svg>
                  <p>Other</p>
                </div>
              </label>
            </div>
             
<!-- *************************************************************************************************************************************** -->
        </div>
    </div>
<div class="form-container">

<form id="cars" class="tab" method="POST" action="classifieds_post.php" >

  <input type="text" hidden name="automotive" value="automotive">
  <input type="text" hidden name="auto-type" value="cars">

    <div  id="additionalCarInfo"><h3 class="car-info-title">Additional Vehicle Information <span style="color: firebrick; font-size: larger;">*</span></h3>

      <div class="car-make">
        <label for="make">
          <div class="">
              <select class="input" id="bodyType" name="bodyType" >
                <option value="" disabled="true" selected>The Body:</option>
                <option value="hatchback" >Hatchback</option>
                <option value="sedan" >Sedan</option>
                <option value="suv" >SUV</option>
                <option value="pickup" >Pickup/Bakkie</option>
                <option value="van" >Minivan/Van</option>
                <option value="wagon" >Wagon</option>
                <option value="crossover" >Crossover</option>
                <option value="coupe" >Coupe</option>
              </select>
            </div>
          </label>
      </div>

      <div class="car-model">
        <label for="model">
        <div  class="">
            <select class="input" id="carMake" name="carMake" >
              <option value="" disabled="true" selected>The Make:</option>
              <option value="volkswagen" >Volkswagen</option>
              <option value="" disabled="true">--</option>
            </select>
          </div>
        </label>
      </div>

      <div class="car-mileage">
        <label for="mileage">
          <div  class="">
              <select class="input" id="carModel" name="carModel" >
                <option value="" disabled="true" selected>The Model:</option>
                <option value="polo" >Polo</option>
              </select>
            </div>
          </label>
        </div>

        <div class="car-body">
          <label for="btype">
          <div  class="">
              <select class="input" id="carMileage" name="carMileage" >
                <option value="" disabled="true" selected>The Mileage:</option>
                <option value="1 to 1000" >1 to 1000 Km</option>
                <option value="1000 to 10000" >1000 to 10000 Km</option>
                <option value="10000 to 50000" >10000 to 50000 Km</option>
                <option value="50000 to 100000" >50000 to 100000 Km</option>
                <option value="100000 to 150000" >100000 to 150000 Km</option>
                <option value="200000 plus" >200000 Plus Km</option>
              </select>
            </div>
          </label>
        </div>

        <div class="car-color">
          <label for="carColor">
            <div class="">
                <select class="input" id="carColor" name="carColor" >
                  <option value="" disabled="true" selected>The Color:</option>
                  <option value="white">White</option>
                </select>
              </div>
            </label>
        </div>

        <div class="car-year">
          <label for="year">
           <input type="number" min="1980" max="2030" class="input" step="1" placeholder="The Car Year" name="carYear" id="carYear">
            </label>
        </div>

        <div class="transmission">
          <label for="transmission">
            <div class="">
                <select class="input" id="carTrans" name="carTrans" >
                  <option value="" disabled="true" selected>The Transmission:</option>
                  <option value="automatic" >Automatic</option>
                  <option value="manual" >Manual</option>
                </select>
              </div>
            </label>
          </div>

          <div class="fuel-type">
            <label for="fuelType">
              <div class="">
                  <select class="input" id="carFuelType" name="carFuelType" >
                    <option value="" disabled="true" selected>The Fuel Type:</option>
                    <option value="petrol" >Petrol</option>
                    <option value="diesel" >Diesel</option>
                    <option value="electronic vehicle" >Electronic</option>
                    <option value="hybrid" >Hybrid</option>
                  </select>
                </div>
              </label>
          </div>

    </div>

      <div  id="location"><h3 class="location-heading">Select Location <span style="color: firebrick; font-size: larger;">*</span></h3>

        <div class="province">
          <label for="province">
            <div class="">
                <select class="input" id="province" name="province" >
                  <option value="" disabled="true" selected>My Province:</option>
                  <option value="western cape">Western Cape</option>
                </select>
              </div>
            </label>
        </div>

        <div class="city">
          <label for="city">
            <div  class="">
                <select class="input" id="city" name="city" >
                  <option value="" disabled="true" selected>My City:</option>
                  <option value="cape town" >Cape Town</option>
                </select>
              </div>
            </label>
          </div>

          <div class="area">
            <label for="area">
              <div class="">
                  <select class="input" id="area" name="area" >
                    <option value=""  disabled="true" selected>My Area:</option>
                    <option value="mitchells plain">Mitchells Plain</option>
                  </select >
                  <span class="error"><?php /* echo $nameErr; */?></span>
                </div>
              </label>
            </div>
      </div>

      

      <div id="titleDescription" style="width: 98%;"><h3>Add post title and post description <span style="color: firebrick; font-size: larger;">*</span></h3>
        <p><input placeholder="Title" id="input-title" class="input" name="title" ></p>
        <p><textarea  placeholder="Description"  id="body" name="body"></textarea></p>

      </div>

 <!-- ************************************************************************************************************ -->

      <div id="images"><h3>Add Images</h3>
        <div class="image-upload-container">
          <div class="image-upload-one">
            <div class="center">
              <div class="form-input">
                <label for="file-ip-1">
                  <img id="file-ip-1-preview" src="img/default.png">
                  <button type="button" class="imgRemove" onclick="myImgRemoveFunctionOne()"></button>
                </label>
                <input type="file"  name="img_one" id="file-ip-1" accept="image/*" onchange="showPreviewOne(event);">
              </div>
              <small class="small">Use the &#8634; icon to remove the image</small>
            </div>
          </div>
          <!-- ************************************************************************************************************ -->
          <div class="image-upload-two">
            <div class="center">
              <div class="form-input">
                <label for="file-ip-2">
                  <img id="file-ip-2-preview" src="img/default.png">
                  <button type="button" class="imgRemove" onclick="myImgRemoveFunctionTwo()"></button>
                </label>
                <input type="file" name="img_two" id="file-ip-2" accept="image/*" onchange="showPreviewTwo(event);">
              </div>
              <small class="small">Use the &#8634; icon to reset the image</small>
            </div>
          </div>
    
          <!-- ************************************************************************************************************ -->
          <div class="image-upload-three">
            <div class="center">
              <div class="form-input">
                <label for="file-ip-3">
                  <img id="file-ip-3-preview" src="img/default.png">
                  <button type="button" class="imgRemove" onclick="myImgRemoveFunctionThree()"></button>
                </label>
                <input type="file" name="img_three" id="file-ip-3" accept="image/*" onchange="showPreviewThree(event);">
              </div>
              <small class="small">Use the &#8634; icon to reset the image</small>
            </div>
          </div>
          <!-- *********************************************************************************************************** -->
            <div class="image-upload-four">
              <div class="center">
                <div class="form-input">
                  <label for="file-ip-4">
                    <img id="file-ip-4-preview" src="img/default.png">
                    <button type="button" class="imgRemove" onclick="myImgRemoveFunctionFour()"></button>
                  </label>
                  <input type="file" name="img_four" id="file-ip-4" accept="image/*" onchange="showPreviewFour(event);">
                </div>
                <small class="small">Use the &#8634; icon to reset the image</small>
              </div>
            </div>
            <!-- ************************************************************************************************************ -->
            <div class="image-upload-five">
              <div class="center">
                <div class="form-input">
                  <label for="file-ip-5">
                    <img id="file-ip-5-preview" src="img/default.png">
                    <button type="button" class="imgRemove" onclick="myImgRemoveFunctionFive()"></button>
                  </label>
                  <input type="file" name="img_five" id="file-ip-5" accept="image/*" onchange="showPreviewFive(event);">
                </div>
                <small class="small">Use the &#8634; icon to reset the image</small>
              </div>
            </div>
      
            <!-- ************************************************************************************************************ -->
            <div class="image-upload-six">
              <div class="center">
                <div class="form-input">
                  <label for="file-ip-6">
                    <img id="file-ip-6-preview" src="img/default.png">
                    <button type="button" class="imgRemove" onclick="myImgRemoveFunctionSix()"></button>
                  </label>
                  <input type="file" name="img_six" id="file-ip-6" accept="image/*" onchange="showPreviewSix(event);">
                </div>
                <small class="small">Use the &#8634; icon to reset the image</small>
              </div>
            </div>
    
          <!-- ************************************************************************************************************** -->
        </div>
        </div>

        <div id="pricing"><h3 class="pricing-heading">Pricing Details <span style="color: firebrick; font-size: larger;">*</span></h3>
          <div class="amount-type">
            <label for="post-type">
              <div class="custom-pricing-select" style="width:270px;">
                  <select  name="pricingSelect" class="input selected" id="ddlModels" onchange="EnableDisableTextBoxTwo(this)" >
                    <option value="negotaible" >Negotaible</option>    
                    <option value="free" >Free</option>
                    <option value="trade" >Trade</option>
                    <option value="Contact owner" >Contact Me</option>
                    <option  value="amount" selected>Amount</option>
                  </select>
                </div>
              </label>
          </div>
          <div class="amount">
            <p><input type="number"  id="input-amount" pattern="[0-9]*" placeholder="Add price" class="input the-price" autocomplete="off" name="amount"></p>
            <span class="error"><?php /* echo $nameErr; */?></span>
          </div>
        </div>

      
        <div id="contact"><h3>Contact Information <span style="color: firebrick; font-size: larger;">*</span></h3>
        
          <p><input placeholder="Phone No." id="input-phone-number" style="width: 270px;"  class="input" name="phoneNumber"></p>
          <span class="error"><?php /* echo $nameErr; */?></span>
          <p><input placeholder="Email" id="input-email" class="input"  style="width: 270px; " name="email" type="text"></p>
          <span class="error"><?php /* echo $nameErr; */?></span>
        
        <h3 > Preffered Contact Method </h3>
        <label class="check-container">Voice Call
          <input type="checkbox" checked>
          <span class="checkmark"></span>
        </label>
        <label class="check-container">Whatsapp
          <input type="checkbox" checked>
          <span class="checkmark"></span>
        </label>
        <label class="check-container">Email
          <input type="checkbox" checked>
          <span class="checkmark"></span>
        </label>
      </div>
      
      <div id="subBtn">
        <input class="sub-btn" id="carSubmit" type="submit" name="carSubmit">
    </div>

    <p class="form-message" style="display: flex; justify-content:center; width:100%;" ></p>
    </form>
              




































  <!-- ************************************************************************************************** -->
  
  <form id="carsPart" class="tab" method="POST" action="classifieds_post.php" >

<input type="text" hidden name="automotive" value="automotive">
<input type="text" hidden name="auto-type" value="carParts">

  <div  id="car-spares"><h3 class="spares-title">Additional Vehicle Information <span style="color: firebrick; font-size: larger;">*</span></h3>

    <div class="car-auto-parts">
      <label for="car-spares">
        <div class="">
            <select class="input" id="carSpares" name="carSpares" >
              <option value="" disabled="true" selected>Select Auto Spares Type:</option>
              <option value="engine">Engine</option>
            </select>
          </div>
        </label>
    </div>

   
  </div>

    <div  id="location"><h3 class="location-heading">Select Location <span style="color: firebrick; font-size: larger;">*</span></h3>

      <div class="province">
        <label for="province">
          <div class="">
              <select class="input" id="provinceTwo" name="provinceTwo" >
                <option value="" disabled="true" selected>My Province:</option>
                <option value="western cape">Western Cape</option>
              </select>
            </div>
          </label>
      </div>

      <div class="city">
        <label for="city">
          <div  class="">
              <select class="input" id="cityTwo" name="cityTwo" >
                <option value="" disabled="true" selected>My City:</option>
                <option value="cape town" >Cape Town</option>
              </select>
            </div>
          </label>
        </div>

        <div class="area">
          <label for="area">
            <div class="">
                <select class="input" id="areaTwo" name="areaTwo" >
                  <option value=""  disabled="true" selected>My Area:</option>
                  <option value="mitchells plain">Mitchells Plain</option>
                </select >
              </div>
            </label>
          </div>
    </div>

    

    <div id="titleDescription" style="width: 98%;"><h3>Add post title and post description <span style="color: firebrick; font-size: larger;">*</span></h3>
      <p><input placeholder="Title" id="input-titleTwo" class="input" name="titleTwo" ></p>
      <p><textarea  placeholder="Description"  id="bodyTwo" name="bodyTwo"></textarea></p>

    </div>

<!-- ************************************************************************************************************ -->

    <div id="images"><h3>Add Images</h3>
      <div class="image-upload-container">
        <div class="image-upload-one">
          <div class="center">
            <div class="form-input">
              <label for="file-ip-1-2">
                <img id="file-ip-1-previewTwo" src="img/default.png">
                <button type="button" class="imgRemove" onclick="myImgRemoveFunctionOneTwo()"></button>
              </label>
              <input type="file"  name="img_one" id="file-ip-1-2" accept="image/*" onchange="showPreviewOneTwo(event);">
            </div>
            <small class="small">Use the &#8634; icon to remove the image</small>
          </div>
        </div>
        <!-- ************************************************************************************************************ -->
        <div class="image-upload-two">
          <div class="center">
            <div class="form-input">
              <label for="file-ip-2-2">
                <img id="file-ip-2-previewTwo" src="img/default.png">
                <button type="button" class="imgRemove" onclick="myImgRemoveFunctionTwoTwo()"></button>
              </label>
              <input type="file" name="img_two" id="file-ip-2-2" accept="image/*" onchange="showPreviewTwoTwo(event);">
            </div>
            <small class="small">Use the &#8634; icon to reset the image</small>
          </div>
        </div>
  
        <!-- ************************************************************************************************************ -->
        <div class="image-upload-three">
          <div class="center">
            <div class="form-input">
              <label for="file-ip-3-2">
                <img id="file-ip-3-previewTwo" src="img/default.png">
                <button type="button" class="imgRemove" onclick="myImgRemoveFunctionThreeTwo()"></button>
              </label>
              <input type="file" name="img_three" id="file-ip-3-2" accept="image/*" onchange="showPreviewThreeTwo(event);">
            </div>
            <small class="small">Use the &#8634; icon to reset the image</small>
          </div>
        </div>
        <!-- *********************************************************************************************************** -->
          <div class="image-upload-four">
            <div class="center">
              <div class="form-input">
                <label for="file-ip-4-2">
                  <img id="file-ip-4-previewTwo" src="img/default.png">
                  <button type="button" class="imgRemove" onclick="myImgRemoveFunctionFourTwo()"></button>
                </label>
                <input type="file" name="img_four" id="file-ip-4-2" accept="image/*" onchange="showPreviewFourTwo(event);">
              </div>
              <small class="small">Use the &#8634; icon to reset the image</small>
            </div>
          </div>
          <!-- ************************************************************************************************************ -->
          <div class="image-upload-five">
            <div class="center">
              <div class="form-input">
                <label for="file-ip-5-2">
                  <img id="file-ip-5-previewTwo" src="img/default.png">
                  <button type="button" class="imgRemove" onclick="myImgRemoveFunctionFiveTwo()"></button>
                </label>
                <input type="file" name="img_five" id="file-ip-5-2" accept="image/*" onchange="showPreviewFiveTwo(event);">
              </div>
              <small class="small">Use the &#8634; icon to reset the image</small>
            </div>
          </div>
    
          <!-- ************************************************************************************************************ -->
          <div class="image-upload-six">
            <div class="center">
              <div class="form-input">
                <label for="file-ip-6-2">
                  <img id="file-ip-6-previewTwo" src="img/default.png">
                  <button type="button" class="imgRemove" onclick="myImgRemoveFunctionSixTwo()"></button>
                </label>
                <input type="file" name="img_six" id="file-ip-6-2" accept="image/*" onchange="showPreviewSixTwo(event);">
              </div>
              <small class="small">Use the &#8634; icon to reset the image</small>
            </div>
          </div>
  
        <!-- ************************************************************************************************************** -->
      </div>
      </div>

      <div id="pricing"><h3  class="pricing-heading">Pricing Details <span style="color: firebrick; font-size: larger;">*</span></h3>
        <div class="amount-type">
          <label for="post-type">
            <div class="custom-pricing-select" style="width:270px;">
                <select  name="pricingSelectTwo" class="input selected" id="ddlModelsTwo" onchange="EnableDisableTextBoxTwo(this)" >
                  <option value="negotaible" >Negotaible</option>    
                  <option value="free" >Free</option>
                  <option value="trade" >Trade</option>
                  <option value="Contact owner" >Contact Me</option>
                  <option  value="amount" selected>Amount</option>
                </select>
              </div>
            </label>
        </div>
        <div class="amount">
          <p><input type="number"  id="input-amountTwo" pattern="[0-9]*" placeholder="Add price" class="input the-price" autocomplete="off" name="amountTwo"></p>
      
        </div>
      </div>

    
      <div id="contact"><h3>Contact Information <span style="color: firebrick; font-size: larger;">*</span></h3>
      
        <p><input placeholder="Phone No." id="input-phone-numberTwo" style="width: 270px;"  class="input" name="phoneNumberTwo"></p>
        
        <p><input placeholder="Email" id="input-emailTwo" class="input"  style="width: 270px; " name="emailTwo" type="text"></p>
        
      
      <h3 > Preffered Contact Method </h3>
      <label class="check-container">Voice Call
        <input type="checkbox" checked>
        <span class="checkmark"></span>
      </label>
      <label class="check-container">Whatsapp
        <input type="checkbox" checked>
        <span class="checkmark"></span>
      </label>
      <label class="check-container">Email
        <input type="checkbox" checked>
        <span class="checkmark"></span>
      </label>
    </div>
    
    <div id="subBtn">
      <input class="sub-btn" id="sparesSubmit" type="submit" name="sparesSubmit">
  </div>

  <p class="form-message" style="display: flex; justify-content:center; width:100%;" ></p>
  </form>


<!-- ********************************************************************************************************* -->
















































<!-- ********************************************************************************************************* -->


  <form id="cars" class="tab" method="POST" action="classifieds_post.php" >

  <input type="text" hidden name="automotive" value="automotive">
  <input type="text" hidden name="auto-type" value="cars">

    <div  id="additionalCarInfo"><h3 class="car-info-title">Additional Vehicle Information <span style="color: firebrick; font-size: larger;">*</span></h3>

      <div class="car-make">
        <label for="make">
          <div class="">
              <select class="input" id="bodyType" name="bodyType" >
                <option value="" disabled="true" selected>The Body:</option>
                <option value="hatchback" >Hatchback</option>
                <option value="sedan" >Sedan</option>
                <option value="suv" >SUV</option>
                <option value="pickup" >Pickup/Bakkie</option>
                <option value="van" >Minivan/Van</option>
                <option value="wagon" >Wagon</option>
                <option value="crossover" >Crossover</option>
                <option value="coupe" >Coupe</option>
              </select>
            </div>
          </label>
      </div>

      <div class="car-model">
        <label for="model">
        <div  class="">
            <select class="input" id="carMake" name="carMake" >
              <option value="" disabled="true" selected>The Make:</option>
              <option value="volkswagen" >Volkswagen</option>
              <option value="" disabled="true">--</option>
            </select>
          </div>
        </label>
      </div>

      <div class="car-mileage">
        <label for="mileage">
          <div  class="">
              <select class="input" id="carModel" name="carModel" >
                <option value="" disabled="true" selected>The Model:</option>
                <option value="polo" >Polo</option>
              </select>
            </div>
          </label>
        </div>

        <div class="car-body">
          <label for="btype">
          <div  class="">
              <select class="input" id="carMileage" name="carMileage" >
                <option value="" disabled="true" selected>The Mileage:</option>
                <option value="1 to 1000" >1 to 1000 Km</option>
                <option value="1000 to 10000" >1000 to 10000 Km</option>
                <option value="10000 to 50000" >10000 to 50000 Km</option>
                <option value="50000 to 100000" >50000 to 100000 Km</option>
                <option value="100000 to 150000" >100000 to 150000 Km</option>
                <option value="200000 plus" >200000 Plus Km</option>
              </select>
            </div>
          </label>
        </div>

        <div class="car-color">
          <label for="carColor">
            <div class="">
                <select class="input" id="carColor" name="carColor" >
                  <option value="" disabled="true" selected>The Color:</option>
                  <option value="white">White</option>
                </select>
              </div>
            </label>
        </div>

        <div class="car-year">
          <label for="year">
           <input type="number" min="1980" max="2030" class="input" step="1" placeholder="The Car Year" name="carYear" id="carYear">
            </label>
        </div>

        <div class="transmission">
          <label for="transmission">
            <div class="">
                <select class="input" id="carTrans" name="carTrans" >
                  <option value="" disabled="true" selected>The Transmission:</option>
                  <option value="automatic" >Automatic</option>
                  <option value="manual" >Manual</option>
                </select>
              </div>
            </label>
          </div>

          <div class="fuel-type">
            <label for="fuelType">
              <div class="">
                  <select class="input" id="carFuelType" name="carFuelType" >
                    <option value="" disabled="true" selected>The Fuel Type:</option>
                    <option value="petrol" >Petrol</option>
                    <option value="diesel" >Diesel</option>
                    <option value="electronic vehicle" >Electronic</option>
                    <option value="hybrid" >Hybrid</option>
                  </select>
                </div>
              </label>
          </div>

    </div>

      <div  id="location"><h3 class="location-heading">Select Location <span style="color: firebrick; font-size: larger;">*</span></h3>

        <div class="province">
          <label for="province">
            <div class="">
                <select class="input" id="province" name="province" >
                  <option value="" disabled="true" selected>My Province:</option>
                  <option value="western cape">Western Cape</option>
                </select>
              </div>
            </label>
        </div>

        <div class="city">
          <label for="city">
            <div  class="">
                <select class="input" id="city" name="city" >
                  <option value="" disabled="true" selected>My City:</option>
                  <option value="cape town" >Cape Town</option>
                </select>
              </div>
            </label>
          </div>

          <div class="area">
            <label for="area">
              <div class="">
                  <select class="input" id="area" name="area" >
                    <option value=""  disabled="true" selected>My Area:</option>
                    <option value="mitchells plain">Mitchells Plain</option>
                  </select >
                  <span class="error"><?php /* echo $nameErr; */?></span>
                </div>
              </label>
            </div>
      </div>

      

      <div id="titleDescription" style="width: 98%;"><h3>Add post title and post description <span style="color: firebrick; font-size: larger;">*</span></h3>
        <p><input placeholder="Title" id="input-title" class="input" name="title" ></p>
        <p><textarea  placeholder="Description"  id="body" name="body"></textarea></p>

      </div>

 <!-- ************************************************************************************************************ -->

      <div id="images"><h3>Add Images</h3>
        <div class="image-upload-container">
          <div class="image-upload-one">
            <div class="center">
              <div class="form-input">
                <label for="file-ip-1">
                  <img id="file-ip-1-preview" src="img/default.png">
                  <button type="button" class="imgRemove" onclick="myImgRemoveFunctionOne()"></button>
                </label>
                <input type="file"  name="img_one" id="file-ip-1" accept="image/*" onchange="showPreviewOne(event);">
              </div>
              <small class="small">Use the &#8634; icon to remove the image</small>
            </div>
          </div>
          <!-- ************************************************************************************************************ -->
          <div class="image-upload-two">
            <div class="center">
              <div class="form-input">
                <label for="file-ip-2">
                  <img id="file-ip-2-preview" src="img/default.png">
                  <button type="button" class="imgRemove" onclick="myImgRemoveFunctionTwo()"></button>
                </label>
                <input type="file" name="img_two" id="file-ip-2" accept="image/*" onchange="showPreviewTwo(event);">
              </div>
              <small class="small">Use the &#8634; icon to reset the image</small>
            </div>
          </div>
    
          <!-- ************************************************************************************************************ -->
          <div class="image-upload-three">
            <div class="center">
              <div class="form-input">
                <label for="file-ip-3">
                  <img id="file-ip-3-preview" src="img/default.png">
                  <button type="button" class="imgRemove" onclick="myImgRemoveFunctionThree()"></button>
                </label>
                <input type="file" name="img_three" id="file-ip-3" accept="image/*" onchange="showPreviewThree(event);">
              </div>
              <small class="small">Use the &#8634; icon to reset the image</small>
            </div>
          </div>
          <!-- *********************************************************************************************************** -->
            <div class="image-upload-four">
              <div class="center">
                <div class="form-input">
                  <label for="file-ip-4">
                    <img id="file-ip-4-preview" src="img/default.png">
                    <button type="button" class="imgRemove" onclick="myImgRemoveFunctionFour()"></button>
                  </label>
                  <input type="file" name="img_four" id="file-ip-4" accept="image/*" onchange="showPreviewFour(event);">
                </div>
                <small class="small">Use the &#8634; icon to reset the image</small>
              </div>
            </div>
            <!-- ************************************************************************************************************ -->
            <div class="image-upload-five">
              <div class="center">
                <div class="form-input">
                  <label for="file-ip-5">
                    <img id="file-ip-5-preview" src="img/default.png">
                    <button type="button" class="imgRemove" onclick="myImgRemoveFunctionFive()"></button>
                  </label>
                  <input type="file" name="img_five" id="file-ip-5" accept="image/*" onchange="showPreviewFive(event);">
                </div>
                <small class="small">Use the &#8634; icon to reset the image</small>
              </div>
            </div>
      
            <!-- ************************************************************************************************************ -->
            <div class="image-upload-six">
              <div class="center">
                <div class="form-input">
                  <label for="file-ip-6">
                    <img id="file-ip-6-preview" src="img/default.png">
                    <button type="button" class="imgRemove" onclick="myImgRemoveFunctionSix()"></button>
                  </label>
                  <input type="file" name="img_six" id="file-ip-6" accept="image/*" onchange="showPreviewSix(event);">
                </div>
                <small class="small">Use the &#8634; icon to reset the image</small>
              </div>
            </div>
    
          <!-- ************************************************************************************************************** -->
        </div>
        </div>

        <div id="pricing"><h3 class="pricing-heading">Pricing Details <span style="color: firebrick; font-size: larger;">*</span></h3>
          <div class="amount-type">
            <label for="post-type">
              <div class="custom-pricing-select" style="width:270px;">
                  <select  name="pricingSelect" class="input selected" id="ddlModels" onchange="EnableDisableTextBoxTwo(this)" >
                    <option value="negotaible" >Negotaible</option>    
                    <option value="free" >Free</option>
                    <option value="trade" >Trade</option>
                    <option value="Contact owner" >Contact Me</option>
                    <option  value="amount" selected>Amount</option>
                  </select>
                </div>
              </label>
          </div>
          <div class="amount">
            <p><input type="number"  id="input-amount" pattern="[0-9]*" placeholder="Add price" class="input the-price" autocomplete="off" name="amount"></p>
            <span class="error"><?php /* echo $nameErr; */?></span>
          </div>
        </div>

      
        <div id="contact"><h3>Contact Information <span style="color: firebrick; font-size: larger;">*</span></h3>
        
          <p><input placeholder="Phone No." id="input-phone-number" style="width: 270px;"  class="input" name="phoneNumber"></p>
          <span class="error"><?php /* echo $nameErr; */?></span>
          <p><input placeholder="Email" id="input-email" class="input"  style="width: 270px; " name="email" type="text"></p>
          <span class="error"><?php /* echo $nameErr; */?></span>
        
        <h3 > Preffered Contact Method </h3>
        <label class="check-container">Voice Call
          <input type="checkbox" checked>
          <span class="checkmark"></span>
        </label>
        <label class="check-container">Whatsapp
          <input type="checkbox" checked>
          <span class="checkmark"></span>
        </label>
        <label class="check-container">Email
          <input type="checkbox" checked>
          <span class="checkmark"></span>
        </label>
      </div>
      
      <div id="subBtn">
        <input class="sub-btn" id="carSubmit" type="submit" name="carSubmit">
    </div>

    <p class="form-message" style="display: flex; justify-content:center; width:100%;" ></p>
    </form>
  </div>

  </div>
    <script>
      document.addEventListener("DOMContentLoaded", function(event) { 
        ClassicEditor
      .create( document.querySelector( '#body' ), {
        removePlugins: [ 'insertImage', 'insertMedia', 'Link', 'blockQuote' ],
        toolbar: [ 'Heading', 'bold', 'italic', 'bulletedList', 'numberedList',  ]
      } ) 
      .catch( error => {
        console.error( error );
      } );
      });

      document.addEventListener("DOMContentLoaded", function(event) { 
        ClassicEditor
      .create( document.querySelector( '#bodyTwo' ), {
        removePlugins: [ 'insertImage', 'insertMedia', 'Link', 'blockQuote' ],
        toolbar: [ 'Heading', 'bold', 'italic', 'bulletedList', 'numberedList',  ]
      } ) 
      .catch( error => {
        console.error( error );
      } );
      });
    </script>
    <script src="https://cdn.ckeditor.com/ckeditor5/18.0.0/classic/ckeditor.js"></script>
    <script src="script.js"></script>
</body>
</html>