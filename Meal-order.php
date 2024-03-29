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
  	  
<?php 
require_once ('connect.php');

if (isset($_POST['SubmitButton'])) {
  echo "<div class='alert alert-primary' role='alert'>
  Order Succesful <a href='#' class='alert-link'>You can now proceed to payment</a>. </div>";
  //call 'Submition.php';
  //call 'mailorder.php'
  # code...
}



?>
<h1 class="meal_signup__title">GEI8 Kitchen</h1>

 <div class="container mealorder">
	 
<div class="card mealorder">
  <div class="card-header" id="meal-order">
  	<img src="Order-banner.png" class="img-fluid" alt="GEI8 Kitchen">
  </div>
  <div class="card-body">
   <!-- <h5 class="card-title"></h5>-->
   <div class="form-row align-items-center">  <div class="col-auto my-1"><p class="card-text" id="mealName" name="mealName"></p></div><div class="col-auto my-1"><p class="card-text" id="mealPrice" name="mealPrice"></p></div></div>
 
<form id="orderform" action="#" method="POST">
  <div class="col-auto my-1">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="mealCheck" onclick="mc()">
        <label class="form-check-label" for="autoSizingCheck2">
         Agree to pay online before meal gets prepared
        </label>
      </div>
    </div>
	<div class="form-row align-items-center">
		<legend>Extras</legend>
    <div class="col-auto my-1">
      <label class="mr-sm-2" for="soupSelect">Soup</label>
      <select class="custom-select mr-sm-2" name="soupSelect" id="soupQty">
        <option selected>Quantity...</option>
       <option value="1">One Litres</option>
        <option value="2">two Litres</option>
 <option value="3">three Litres</option>
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
<!-- this holds the swallos quantity -->
<div class="form-row align-items-center">
    <div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="EbaCheck1" onclick="eb()">
  <label class="custom-control-label" for="EbaCheck1">Eba</label>
</div>
      <div class="col-auto my-1" >
      <select class="custom-select mr-sm-2 hiddenSelect" id="hiddenSelectEba" name="EbaQty">
      
        <option>Eba Quantity</option>
      <?php for($i=0; $i<=100; $i++){
echo "<option value=$i>" . $i. "</option>";
      }?>
   
      </select>
    </div>

    <div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="SemoCheck1" onclick="semo()">
  <label class="custom-control-label" for="SemoCheck1">Semo</label>
</div>
      <div class="col-auto my-1" >
      <select class="custom-select mr-sm-2 hiddenSelect" id="hiddenSelectSemo" name="SemoQty">
        
       <option>Semo Quantity</option>
      <?php for($i=0; $i<=100; $i++){
echo "<option value=$i>" . $i. "</option>";
      }?>
         
      </select>
    </div>
     <div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="WheatCheck1" onclick="Wheat()">
  <label class="custom-control-label" for="WheatCheck1">Wheat</label>
</div>
      <div class="col-auto my-1" >
      <select class="custom-select mr-sm-2 hiddenSelect" id="hiddenSelectWheat" name="WheatQty">
        
         
         <option>Wheat Quantity</option>
      <?php for($i=0; $i<=100; $i++){
echo "<option value=$i>" . $i. "</option>";
      }?>
      </select>
    </div>
 <div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="AmalaCheck1" onclick="Amala()">
  <label class="custom-control-label" for="AmalaCheck1">Amala</label>
</div>
      <div class="col-auto my-1" >
      <select class="custom-select mr-sm-2 hiddenSelect" id="hiddenSelectAmala" name="AmalaQty">
        <option> Amala Quantity</option>
      <?php for($i=0; $i<=100; $i++){
echo "<option value=$i>" . $i. "</option>";
      }?>
      </select>
    </div>

     <div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="PandoCheck1" onclick="pando()">
  <label class="custom-control-label" for="PandoCheck1">Poundo(pounded yam)</label>
</div>
      <div class="col-auto my-1" >
      <select class="custom-select mr-sm-2 hiddenSelect" id="hiddenSelectPando" name="PandoQty">
<option>Poundo Quantity</option>
      <?php for($i=0; $i<=100; $i++){
echo "<option value=$i>" . $i. "</option>";
      }?>
      </select>
    </div>

</div>
  <div class="form-group">
    <label for="fullnamet">Full Name</label>
    <input type="text" class="form-control form-control-sm"  placeholder="Full Name" name="fullname" id="fullname">
  </div>
  <div class="form-group">
    <label for="Address">Address</label>
    <input type="text" class="form-control form-control-sm"  name="Address" id="Address" placeholder="Address">
  </div>
  <div class="form-group">
    <label for="Email">Email</label>
    <input type="text" class="form-control form-control-sm" name="Email" id="Email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="Phone">Phone</label>
    <input type="text" class="form-control form-control-sm" id="Phone" name="Phone" placeholder="Phone Number">

  </div>
   <div class="form-group">
    <label for="Phone">More Info ?.....</label>
    <input type="textarea" class="form-control form-control-sm form-rounded" rows="10"  id="otherInfo" name="textarea" placeholder="Other such as extra,inclusions etc...">

  </div>
       
      <div><input type="Submit" name="SubmitButton" value="Complete Order" class="btn btn-primary"> </div>   
</form>

 <!--   <a href="#" class="btn btn-primary">Submit</a>-->
  </div>
</div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/proper.min.js"></script>
    <script type="text/javascript">
 
    	</script>
       <script type="text/javascript">
let TotalPice=0;
var soups={
  soupname:['Edikaikong-soup-beef','Afang-soup-beef','Oha soup cow leg','Oha soup cow leg','Egusi-soup-beef','Black-soup-assorted','White-soup-chicken',
  'Banga-soup-catfish','Bitterleaf-soup-beef','Chicken-stew','Beef-Pomo-stew','Jollof rice cooler','Fried-rice-cooler','Tilapia fish stew','chicken stew','Fisherman okro',
  'Crab in pepper Sauce','Pepper snail'],

prices:[8500,
8500,7000,6500,6500,6000,6000,6000,6000,6500,6500,  6000,6000,6000,6500,8500,4000,1000]
};
// 
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
     //frm.style.display = "none";
  }
  }</script>

<script type="text/javascript">
  
   function eb(){
    if (document.getElementById("EbaCheck1").checked==true) {document.getElementById("hiddenSelectEba").style.display="block";}else{document.getElementById("hiddenSelectEba").style.display="none";}
 
}

   function semo(){
    if (document.getElementById("SemoCheck1").checked==true) {document.getElementById("hiddenSelectSemo").style.display="block";}else{document.getElementById("hiddenSelectSemo").style.display="none";}
 
}
function pando(){

   if (document.getElementById("PandoCheck1").checked==true) {document.getElementById("hiddenSelectPando").style.display="block";}else{document.getElementById("hiddenSelectPando").style.display="none";}
}
function Wheat(){

if (document.getElementById("WheatCheck1").checked==true) {document.getElementById("hiddenSelectWheat").style.display="block";}else{document.getElementById("hiddenSelectWheat").style.display="none";}
}
function Amala(){
   if (document.getElementById("AmalaCheck1").checked==true) {document.getElementById("hiddenSelectAmala").style.display="block";}else{document.getElementById("hiddenSelectAmala").style.display="none";}
}

$( "#meatSelect" ).on('change',function() {
//let x= $('#mealPrice').value + (300* $('#meatSelect').value);
  alert(x);
});

</script>

  </body>
</html>