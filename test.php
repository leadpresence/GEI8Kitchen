<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
</body>
</html>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>GEI8 Meal Order</title>
    <style type="text/css">
    	.body{box-sizing: content-box;background-color: #f7f7cc;}
    	.mealorder{
    		    width: 630px;
    margin: 0 auto; padding-top: 45px;
}
    	}
    	.meal_signup__title{font-family: "Open Sans","lucida grande","Segoe UI",arial,verdana,"lucida sans unicode",tahoma,sans-serif;margin: 10px 0;text-align:center;
       font-size: 28px;
        font-weight: 100;}
       #orderform{display:block; }
      .hiddenSelect{display: none;}
     .form-rounded {
             border-radius: 1rem;

               }
    </style>
  </head>

  <body>
  	  

<h1 class="meal_signup__title">GEI8 Kitchen</h1>

 <div class="container mealorder">
	 
<div class="card mealorder">
  <div class="card-header" id="meal-order">
  	<img src="Order-banner.png" class="img-fluid" alt="GEI8 Kitchen">
  </div>
  <div class="card-body">
   <!-- <h5 class="card-title"></h5>-->
   <div class="form-row align-items-center">  <div class="col-auto my-1"><p class="card-text" id="mealName" name="mealName" ></p></div><div class="col-auto my-1"><p class="card-text" id="mealPrice" name="mealPrice"></p></div></div>
 
<form id="orderform" action="#" method="POST">
	<div class="form-row align-items-center">
		<legend>Extras</legend>
    <div class="col-auto my-1">
      <label class="mr-sm-2" for="soupSelect">Soup</label>
      <select class="custom-select mr-sm-2" name="soupSelect" id="soupSelect">
        <option selected>Quantity...</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>
    <div class="col-auto my-1">
      <label class="mr-sm-2" for="meatSelect">Meat</label>
      <select class="custom-select mr-sm-2" id="meatSelect" name="meatSelect">
        <option selected>Quantity</option>
        <?php for($i=0; $i<=100; $i++){
echo "<option value=$i>" . $i. "</option>";
			}?>
      </select>
    </div>
</div>

	<div class="form-group">
		<label for="Ebacheck">Eba</label>
		<input type="checkbox" id="EbaCheck1" name="Ebacheck" onclick="eb()">
	</div>
	<div class="form-group">
		<select id="hiddenSelectEba" name="EbaQty" class="custom-select mr-sm-2 hiddenSelect">
			<option>Quntity</option>
			<?php for($i=0; $i<=100; $i++){
echo "<option value=$i>" . $i. "</option>";
			}?>
				
			
		</select>
	</div>

<div class="form-group">
		<label for="Semocheck">Semo</label>
		<input type="checkbox" id="SemoCheck1" name="Semocheck" onclick="semo()">
	</div>
	<div class="form-group">
		<select id="hiddenSelectSemo" name="SemoQty" class="custom-select mr-sm-2 hiddenSelect">
			<option>Quntity</option>
			<?php for($i=0; $i<=100; $i++){
echo "<option value=$i>" . $i. "</option>";
			}?>
				
			
		</select>
	</div>

<!--  User Details-->
	<div class="form-group">

                            <label for="FullName" class="">Full Name</label>
                            <input type="text" name="FullName" id="FullName" class="form-control" placeholder="Enter Full Name">
                        </div>
                        <div class="form-group">
                            <label for="key" class="">Address</label>
                            <input type="text" name="Address" id="Address" class="form-control" placeholder="Address">
                        </div>
                         <div class="form-group">
                            <label for="key" class="">Phone</label>
                            <input type="text" name="Phone" id="Phone" class="form-control" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <label for="Email" class="">Email</label>
                            <input type="text" name="Email" id="Email" class="form-control" placeholder="Email">
                        </div>
                        <div class="checkbox">
                           
                        </div>
                        <input type="submit" id="SubmitButton" class="btn btn-primary btn-sm" value="Complete Meal Order">

</form>
<small style="color: blue">**We only use your details to contact you,We will never shar your information by any means..</small>
 <!--   <a href="#" class="btn btn-primary">Submit</a>-->
  </div>
</div>
</div>
 <script type="text/javascript">

    	let meal_Price=document.getElementById("mealPrice");
    	let meal_Name=document.getElementById("mealName");
    	//this displays the oder form after checking the agreemnt chkbx 
    	//pulls out the localstorage value of selceted meal
    	function mc(){
    	var frm =document.getElementById("orderform");
    	var c=document.getElementById("mealCheck");
    	var d=document.getElementById("meal-order");
    	 if (c.checked == true){
       frm.style.display = "block";
       meal_Price.innerHTML=localStorage.getItem("price");
       meal_Name.innerHTML=localStorage.getItem("name");	
//meal_Name.innerHTML
  }else if (c.checked !==true){
  	 frm.style.display = "none";
  }
  }</script>

<script type="text/javascript">
	
   function eb(){
    if (document.getElementById("EbaCheck1").checked==true) {document.getElementById("hiddenSelectEba").style.display="block";}else{document.getElementById("hiddenSelectEba").style.display="none";}
 
}

   function semo(){
    if (document.getElementById("SemoCheck1").checked==true) {document.getElementById("hiddenSelectSemo").style.display="block";}else{document.getElementById("hiddenSelectSemo").style.display="none";}
 
}
</script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/proper.min.js"></script>
    <script type="text/javascript">

    	</script>
  </body>
</html>