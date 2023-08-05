<?php
require "header.php";
?>

<header class="header">
    <div class="row">
        <div class="col-md-12 text-center">
   <a class="logo"><img src="img/logo.png" alt="logo"></a>
   </div>
        <div class="col-md-12 text-center">
            <button type="button" onclick="window.location.href='reservation.php'" class="btn btn-outline-light btn-lg"><em>Make a Reservation Now!</em></button>
        </div>
    </div>
</header>


<!--videos section-->


<section id="video">
<br><br>
<div class="container">
<iframe frameborder="0" width="1000" height="600" src="https://biteable.com/watch/embed/3579403/473664e19d3054aaf20736ac8cc532b6" allowfullscreen="true" allow="autoplay"> </iframe> 
<p><a href="https://biteable.com/watch/3579403/473664e19d3054aaf20736ac8cc532b6"></a>  <a href="https://biteable.com"></a>.</p>
</div>

<!--about us section-->

<section id="aboutus">

 <div class="container">
   <h3 class="text-center"><br><br>Masterchef</h3>
   <div class="row">
<!--carousel-->
     <div class="col-sm"><br><br>
      	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
           <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
         </ol>
        <div class="carousel-inner">
           <div class="carousel-item active">
             <img class="d-block w-100" src="img/14.jpg" alt="First slide">
           </div>
           <div class="carousel-item">
           <img class="d-block w-100" src="img/13.jpg" alt="Second slide">
           </div>
           <div class="carousel-item">
           <img class="d-block w-100" src="img/17.jpg" alt="Third slide">
           </div>
        </div>
         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
         </a>
       </div><br><br>
     </div>

<!--end of carousel-->

     <div class="col-sm">
    	<div class="arranging"><br><hr>
	<h4 class="text-center">Our Story</h4>
	<p><br>The restaurant Masterchef, first opened in 2004 in “Psiri”, one of the oldest districts of Athens in the historical center of the city. In 2010 , the restaurant was awarded its first Michelin star and has retained it since.<br><br>
	The same year, the restaurant relocated to the 6th floor of the Onassis Cultural Centre in Syngrou Avenue and was recently redesigned by award-winning architectural firm Divercity.In warmer months of the year the restaurant moves
	to the 7th floor of the building, offering a unique outdoor setting with panoramic view of the Acropolis, Lycebettus hill and the city skyline.<br><br><br></p><hr>
	</div>
     </div>
    </div><br>
  </div>
</section>
<!--end of about us section-->

<div class="header2">
</div>

<!----gallery -->
<div class id="gallery"><br>
    <div class="container">
    <h3 class="text-center"><br>Gallery<br><br></h3>
        <div class="d-flex flex-row flex-wrap justify-content-center">
           <div class="d-flex flex-column">
           <div class="zoom">
              <img src="img/21.jpg" class="img-fluid"> </div>
              <div class="zoom">
              <img src="img/25.jpg" class="img-fluid"> </div>
           </div>
           <div class="d-flex flex-column">
           <div class="zoom">
              <img src="img/5.jpg" class="img-fluid"> </div>
              <div class="zoom">
              <img src="img/24.jpg" class="img-fluid"> </div>
           </div>
           <div class="d-flex flex-column">
           <div class="zoom">
               <img src="img/20.jpg" class="img-fluid"> </div>
               <div class="zoom">
               <img src="img/22.jpg" class="img-fluid"> </div>
           </div>
           <div class="d-flex flex-column">
           <div class="zoom">
               <img src="img/18.jpg" class="img-fluid"> </div>
               <div class="zoom">
               <img src="img/23.jpg" class="img-fluid"> </div>
           </div>
        </div>
    </div>
</div><br><br>



<style>
.zoom:hover { 
   transform: scale(1.2);
   }
           
</style>
<!----end of gallery--> 



<!-- menu section starts  -->

<div class id="menu"><br>
    <div class="container">

    <h3 class="text-center"><br>Our Menu<br><br></h3>


            <h3 class="title">Starters <br></h3>
            <div class="box-container">
               <div class="box">
                  <div class="info">
                     <h4>Matt's masterclass</h4>
                     <p>Matt Preston's trofie with nasturtium and macadamia pesto</p>
                     <h4>Greek masterclass</h4>
                     <p>Geroge and Gray's Kataifi Prawns with Watermelon and Goat's Cheese</p>
                     <h4>Jock's masterclass</h4>
                     <p>Jock Zonfrillo's Black Pepper Crab with Fried Bread<br><br></p>
                  </div>
                  
               </div>
            </div>

         


         
            <h3 class="title">Main dishes <br></h3>
            <div class="box-container">
               <div class="box">
                  <div class="info">
                  <h4>Ultimate Roast Chicken</h4>
                  <p>Curtis Stone's Roast Chicken with Fondant Potatoes and Marsala Sauce</p>
                  </div>
                 
               </div>
               <div class="box">
                  <div class="info">
                  <h4>Malaysian feast</h4>
                  <p>Poh's chicken and potato curry with herbed fried rice, fried whitebait, a red onion and chilli relish and roti</p>
                  </div>
                  
               </div>
               <div class="box">
                  <div class="info">
                  <h4>John Dory a la Nicoise</h4>
                  <p>Marco Pierre White's french creation consisting of john dory, garlic, anchovies and olives <br><br> </p>
                  </div>
                  
               </div>
      

               <h3 class="title">Side dishes<br></h3>
            <div class="box-container">
               <div class="box">
                  <div class="info">
                     <h4>Scallops and fennel</h4>
                     <p>Bllie's Fennel and Ginger Puree, Roasted Fennel with Seared Scallops and an Orange and Ginger vinaigrette.</p>
                  </div>
                 
               </div>
               <div class="box">
                  <div class="info">
                     <h4>The native Australian</h4>
                     <p>Laura's seared bonito with lilly pillies, fried salt bush and Geraldton wax</p>
                  </div>
                  
               </div>
               <div class="box">
                  <div class="info">
                  <h4>Late Autumn </h4>
                  <p>Ben's Seared Coral Trout with Ginger Carrot Purée and Parsley Vinaigrette <br><br></p>  
                  </div>
                  
               </div>

               <h3 class="title">Desserts <br></h3>
            <div class="box-container">
               <div class="box">
                  <div class="info">
                  <h4>Chamomile Ice Cream With Popcorn</h4>
                  <p>Reynold Poernomo's Chamomile ice cream with blood orange granita, caramel popcorn and toasted coconut inside a coconut bowl</p>
               </div>
                 
               </div>
               <div class="box">
                  <div class="info">
                  <h4>Down the Rabbit Hole </h4>
                  <p>Reynold Poernomo's decadent dessert is full of sweetness, with a dulce diplomat cream, vanilla caramel, a moist pistachio sponge and lime yogurt foam.</p>
                  </div>
                  
               </div>
               <div class="box">
                  <div class="info">
                  <h4>The Moss</h4>
                  <p>Reynold's Poernomo's pistachio sponge cake, apple sorbet, pistachio mousse coated in matcha with caramel gel. <br><br></p>
                  </div>
                  
               </div>



         
         

         
   
         </div>

      </div>

     
<!-- menu section ends -->




<!----item of the week -->
<div class="container" id="pick">
    <h3 class="text-center"><br><br>Connoisseur's choice <br><br></h3>
    <img  src="img/28.jpg" class="img-fluid rounded"><br><br>
    <h4 class>The Golden Snitch</h4>
    <h6 class>Inside is a brown butter mousse with a tonka bean caramel, coated with chocolate.</h6>
    <h6 class> On the outside is a ganache holding the honey tuile feathers. With a pear yuzu sorbet and yogurt snow.</h6>
    
</div><br><br><br><br>

<div class="header2">
</div>


<!----item of the week--> 



        
</div><br><br>

<section id="chef">

 <div class="container">
   <h3 class="text-center"><br><br>About Us </h3>
   <div class="row">
<!--carousel-->
<div class="col-sm"><br><br>
      	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
           <div class="carousel-item active">
             <img class="d-block w-100" src="img/11.png" >
           </div>
           
        </div>
        
         
       </div><br><br>
     </div>

<!--end of carousel-->

     <div class="col-sm">
    	<div class="arranging"><br><hr>
	<h4 class="text-center">Connect the faces behind your food </h4>
	<p><br>Our head chef is Marco Pierre White. At age 33, White became the first British chef and the youngest chef at the time to be awarded three Michelin stars. He has trained notable chefs such as Mario Batali, Heston Blumenthal, Shannon Bennett, Gordon Ramsay, and Curtis Stone.<br><br>
	He is assistend by Reynold Poernomo. He is a part of the family business KOI Dessert Bar and a finalist of MasterChef Australia. Reynold was named a finalist in the Gault & Millau Pastry Chef of the Year awards in 2017, and was listed in Forbes Asia's 30 Under 30 that same year<br><br><br></p><hr>
   <img  src="img/10.png" class="img-fluid rounded">
	</div>
     </div>
    </div><br>
  </div>
</section>

<div class="container" id="reservation">
    <h3 class="text-center"><br><br>Reservation<br><br></h3>
    <img  src="img/29.jpg" class="img-fluid rounded">
    <button type="button" onclick="window.location.href='reservation.php'" class="btn btn-outline-dark btn-block btn-lg">Make a reservation Now!</button>

   

<!-- main page map section-->
<section class="map" id="footer">
    <div class="container">
    <h3 class="text-center"><br><br>Find us!</h3><br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d3150.1829966583578!2d23.75232003459512!3d37.85600838634192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e0!4m3!3m2!1d37.8566691!2d23.752137599999998!4m0!5e0!3m2!1sel!2sgr!4v1524459240043" style= "width:100%;  height:250px; border:0;" allowfullscreen></iframe>
    
  
            <div class="col">
            <h4 class="text-right"><strong>Visit Us</strong></h4>
            <p class="text-right">Masterchef<br><i class="fa fa-map-marker"></i>&nbsp; Leof. Posidonos 109, <br>Glyfada <br></p>
            </div>

	</div>
    </div>
</section>
<!--end of main page map section-->


<?php
require "footer.php";
?>