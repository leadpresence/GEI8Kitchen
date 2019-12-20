 
var index = 1;

imageSlider(index);

function onClickSlide(n){
    imageSlider(index += n);
}

function currentImg(n){
    imageSlider(index = n);
}

function imageSlider(n){
    var slides = document.getElementsByClassName('slides');
    var dots = document.getElementsByClassName('dots');
    if(n > slides.length){
        index = 1;
    }
    if(n < 1){
        index = slides.length;
    }
    for(var i = 0; i < slides.length; i++){
        slides[i].style.display = "none";
    }
    for(var i = 0; i < dots.length; i++){
        dots[i].className = dots[i].className.replace(" active", "");
    }
     slides[index - 1].style.display = "block";
    dots[index - 1].className += " active";
    index += 1;
}


window.onload = function(){
    setInterval(function() {
        imageSlider(index)
    },5000);
}


//This gets the buttons
        let buttons = document.getElementsByClassName("orderbtn");
        var meal_price1=  document.getElementById("meal01Price").value;
        var meal_price2=  document.getElementById("meal02Price").value;
var meal_price3=  document.getElementById("meal03Price").value;
var meal_price4=  document.getElementById("meal04Price").value;
var meal_price5=  document.getElementById("meal05Price").value;
var meal_price6=  document.getElementById("meal06Price").value;
var meal_price7=  document.getElementById("meal07Price").value;
var meal_price8=  document.getElementById("meal08Price").value;
var meal_price9=  document.getElementById("meal09Price").value;
var meal_price10=  document.getElementById("meal10Price").value;
var meal_price11=  document.getElementById("meal11Price").value;
var meal_price12=  document.getElementById("meal12Price").value;
var meal_price13=  document.getElementById("meal13Price").value;
var meal_price14=  document.getElementById("meal14Price").value;
var meal_price15=  document.getElementById("meal15Price").value;
var meal_price16=  document.getElementById("meal16Price").value;

        //This is the event listener. It receives an event object
        //redirects to google with the ID of the clicked button
        function buttonClicked(event) {
            let clickedButton = event.target;
            let clickedButtonId = clickedButton.id;
           // window.location = "http://google.com/search?q=" + clickedButtonId; 
           // window.location ="file:///C:/Users/GEI8/Desktop/GEI8Kitchen/Meal- order.php";
            if(clickedButton.id=="Edikaikong-soup-beef"){
              window.location = "../GEI8Kitchen/Meal-order.php"; 
          localStorage.setItem("name","Edikaikong-soup-beef");
        localStorage.setItem("price",meal_price1);
        //window.location="/Meal- order.php";
    }else if(clickedButton.id=="meal02"){ localStorage.setItem("name","Afang-soup-beef");localStorage.setItem("price",meal_price2);  window.location = "../GEI8Kitchen/Meal-order.php"; }
else if(clickedButton.id=="meal03"){ localStorage.setItem("name","Oha soup cow leg");localStorage.setItem("price",meal_price3); window.location = "../GEI8Kitchen/Meal-order.php";}
else  if(clickedButton.id=="meal04"){ localStorage.setItem("name","Oha soup cow leg7000");localStorage.setItem("price",meal_price4); window.location = "../GEI8Kitchen/Meal-order.php";   }
else if(clickedButton.id=="meal05"){ localStorage.setItem("name","Egusi-soup-beef");localStorage.setItem("price",meal_price5);  window.location = "../GEI8Kitchen/Meal-order.php";   }
else if(clickedButton.id=="meal06"){ localStorage.setItem("name","Black-soup-assorted");localStorage.setItem("price",meal_price6);  window.location = "../GEI8Kitchen/Meal-order.php"; }
else if(clickedButton.id=="meal07"){ localStorage.setItem("name","White-soup-chicken");localStorage.setItem("price",meal_price7);  window.location = "../GEI8Kitchen/Meal-order.php"; }
else if(clickedButton.id=="meal08"){ localStorage.setItem("name","Banga-soup-catfish");localStorage.setItem("price",meal_price8);  window.location = "../GEI8Kitchen/Meal-order.php"; }

else if(clickedButton.id=="meal09"){ localStorage.setItem("name","Bitterleaf-soup-beef");localStorage.setItem("price",meal_price9);  window.location = "../GEI8Kitchen/Meal-order.php";}
else if(clickedButton.id=="meal10"){ localStorage.setItem("name","Chicken-stew");localStorage.setItem("price",meal_price10); window.location = "../GEI8Kitchen/Meal-order.php"}
else if(clickedButton.id=="meal11"){ localStorage.setItem("name","Beef-Pomo-stew");localStorage.setItem("price",meal_price11);  window.location = "../GEI8Kitchen/Meal-order.php";}
else if(clickedButton.id=="meal12"){ localStorage.setItem("name","Jollof rice cooler");localStorage.setItem("price",meal_price12);  window.location = "../GEI8Kitchen/Meal-order.php";    }
else if(clickedButton.id=="meal13"){ localStorage.setItem("name","Fried-rice-cooler");localStorage.setItem("price",meal_price13);  window.location = "../GEI8Kitchen/Meal-order.php";}

else if(clickedButton.id=="meal14"){ localStorage.setItem("name","Tilapia fish stew");localStorage.setItem("price",meal_price14);  window.location = "../GEI8Kitchen/Meal-order.php";}
else if(clickedButton.id=="meal15"){ localStorage.setItem("name","chicken stew");localStorage.setItem("price",meal_price15);  window.location = "../GEI8Kitchen/Meal-order.php"; } 
else     if(clickedButton.id=="meal16"){ localStorage.setItem("name","Fisherman okro");localStorage.setItem("price",meal_price16);  window.location = "../GEI8Kitchen/Meal-order.php";  }

        //var x=localStorage.getItem("name");
        //var y=localStorage.getItem("price");
        //var z= x + "" + y;
          
        }

        //This loops through the buttons and attaches the event listener to each one
        for (button of buttons) {
            button.addEventListener("click", buttonClicked);
            //window.location = "../GEI8Kitchen/Meal-order.php"; 
        }
