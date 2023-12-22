<!DOCTYPE html>
<html lang="en">
<head>
<title>Saiful</title>
   <?php include 'links.php' ?>
</head>
<body>
      
         
          <div id="nav1">
          <nav>
            <div class="logo "><i style=" text-transform: lowercase;">healthy life</i></div>
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="#">Home</a>
                <a href="#aboutus">About us</a>
                <a href="#trainer" >Trainer</a>
                <a href="#ourwork">Our work</a>
                <a href="login.php">Login</a>
                <a href="#team">Our Teams</a>
                <a href="#contact">Contact</a>
              </div>
              <span class="icon" style="cursor:pointer" onclick="openNav()">&#9776; </span>
              </nav>
            </div>
   
        <div id="nav2">
                <div class="w3-top">
                    <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
                      <a href="#home" class="w3-bar-item w3-button">healthy life</a>
                      <!-- Right-sided navbar links. Hide them on small screens -->
                      <div class="w3-right w3-hide-small">

                        <a href="#demo" class="w3-bar-item w3-button">Home</a> 
                        <a href="#aboutus" class="w3-bar-item w3-button">About</a> 
                        <a href="filter.php" class="w3-bar-item w3-button">Trainer</a>
                        <a href="#ourwork" class="w3-bar-item w3-button">Our work</a>
                        <a href="login.php" class="w3-bar-item w3-button">Login</a>
                        <a href="#team" class="w3-bar-item w3-button">Our Team</a>
                        <a href="#contact" class="w3-bar-item w3-button">Contact</a>
                      </div>
                    </div>
                  </div>
                  
            </div>   
      
       
        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="pics/image_1.jpg" alt="Los Angeles" width="1100" height="500">
                <div class="carousel-caption">
                    <h2><b>To ensure good health</b></h2>
                  <p><b>Yeat lightly, breathe deeply, live moderately, cultivate </b></p>
                </div>   
              </div>
              <div class="carousel-item">
                <img src="pics/gallery-1.jpg" alt="Chicago" width="1100" height="500">
                <div class="carousel-caption">
                  <h2><b>Health.</b></h2>
                  <p><b>is a state of complete harmony of the body, mind and spiri</b></p>
                </div>   
              </div>
              <div class="carousel-item">
                <img src="pics/h1.jpg" alt="New York" width="1100" height="500">
                <div class="carousel-caption">
                  <h2><b>Joseph Pilates</b></h2>
                  <p><b>Physical fitness is the first requisite of happiness</b></p>
                </div>   
              </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          </div>
          <br>
         


<!--header end-->
    
 
<section id="aboutus">
    <br>
    <br>
     <div class="container text-center text-warning  wow animate__animated animate__rollIn" style="font-size: 30px;">
                <b>About</b>&nbsp;<b class="text-info">Us</b> </div>
                      <br>
                    <div class="row">
                      <div class="col-sm-4">    
                           <div class="card  wow animate__animated animate__slideInLeft"  id="card1">
                             <div class="card-body">
                             <img src="pics/gallery-3.jpg " class="img-fluid">
                            </div>
                          </div>
                      </div>
                      <br>
                      <div class="col-md-6">    
                        <div class="card bg-transparent  wow animate__animated animate__slideInRight"   id="card2">
                          <div class="card-body">
                              <h4 class="text-">&nbsp; Who we are today…</h4>
                            <p class="text-center text-white"> <b style="font-size: 15px;">
                            This project aims to automate gym and fitness admission process as the admission process in gyms and selecting a trainer is difficult. Sometimes it is difficult to get a desired slot timing. Being healthy is the first thing to be kept in mind because most of the time our attitude depends on how we feel. Being healthy gives us the energy to work and do things.t is hard to get admission in health club when slots are full. This health club management system will help to overcome such problems by booking the desired slot online and pay fees by electronic money transfer. In this fitness club system, there is 3 entity namely, Admin, Member, and Trainer. 
                            
                            </b></p>
                         </div>
                       </div>
                     </div>
                       
                </div>
    
</section>   


<section id="services">
    <br>
    <br>
     <div class="container text-center text-warning  wow animate__animated animate__fadeInTopLeft" style="font-size: 30px;">
         <b>Important</b>&nbsp;<b class="text-info">Exercise
         </b> </div>
         <br>
         
         <div class="container"style="background-image:url('pics/bg.jpg')">
            <div class="row">
              <div class="col-sm" id="services-col">
                <div class="card shadow-sm wow animate__animated animate__fadeInTopLeft" >
                    <div class="card-body text- text-center">
    
                        <br><h3 class="text-">Exercise controls weight</h3> <br>
                        <p class="text-">Exercise can help prevent excess weight gain or help maintain weight loss. When you engage in physical activity, you burn calories. the more calories you burn. </p>
                                               
                    </div>
                </div>
              </div>
              <div class="col-sm">
                <div class="card  shadow-sm wow animate__animated animate__fadeInTopRight" id="services-col" >
                    <div class="card-body text- text-center">
                        
                        <br><h3 class="text-">Exercise combats health conditions and diseases</h3> <br>
                        <p class="text-">This one-two punch keeps your blood flowing smoothly, which decreases your risk of cardiovascular diseases. </p>
                                                   
                    </div>
                </div>
              </div>
              <div class="col-sm" id="services-col">
                <div class="card shadow-sm  wow animate__animated animate__slideInLeft">
                    <div class="card-body text- text-center">
                       
                        <br><h3 class="text-">Exercise improves mood</h3> <br>
                        <p class="text-">You may also feel better about your appearance and yourself when you exercise regularly, which can boost your confidence and improve your self-esteem.</p>
                                               
                    </div>
                </div>
              </div>
            </div>

            <div class="row">
                <div class="col-sm" id="services-col">
                    <div class="card shadow-sm wow animate__animated animate__slideInRight">
                        <div class="card-body text- text-center">
                           
                            <br><h3 class="text-">Exercise boosts energy</h3> <br>
                            <p class="text-">Winded by grocery shopping or household chores? Regular physical activity can improve your muscle strength and boost your endurance. </p>
                                                   
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card shadow-sm wow animate__animated animate__slideInUp" id="services-col">
                        <div class="card-body text- text-center">
                          
                            <br><h3 class="text-">Exercise promotes better sleep</h3> <br>
                            <p class="text-">Struggling to snooze? Regular physical activity can help you fall asleep faster, get better sleep and deepen your sleep. </p>
                                                   
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card shadow-sm wow animate__animated animate__slideInUp" id="services-col">
                        <div class="card-body text- text-center">
                           
                            <br><h3 class="text-">Exercise can be fun</h3> <br>
                            <p class="text-">They give you a chance to unwind, enjoy the outdoors or simply engage in activities that make you happy. </p>
                                                   
                        </div>
                    </div>
                </div>
              </div>
       <br>
          </div>
          <br>
</section>

<section id="ourwork">
    <br>
    <br>
    <br>
     <div class="container text-center text-warning  wow animate__animated animate__rollIn

" style="font-size: 30px;">
         <b>Our</b>&nbsp;<b class="text-info">Work</b> </div>
         
 <div class="container  wow animate__animated animate__zoomIn">
                 
              
           <div class="row">
       
              <div class="col-sm-4">
                <div class="card">
                  <img src="images/program-1.jpg">
                  <div class="info">
                    <h1><b>Physique Trainers </b></h1>
                    We’re covering the largest portion of trainers with this first category. Most people want to change the look of their body, so most trainers are helping people do just that

                        
                  </div>
              </div>
             <div class="card">
              <img src="images/per.jpg">
                 <div class="info">
                  <h1><b>Performance Trainers</b></h1>
                  ere is a much smaller group of trainers who specialize in the performance side of fitness. These can be sport specific for athletes, or just people who would prefer to talk about their 3-mile run time instead of trying to show you how much weight they’ve lost.
                    </div>
                 </div>
              </div>
            
              <div class="col-sm-4">
                     
                <div class="card">
                  <img src="images/yogi.jpg">
                  <div class="info">
                    <h1><b>Lifestyle Trainers (Mindset)</b></h1>
                    Most of us have a goal. We usually think we don’t obtain our goal because we are missing the strategy.
                
                  </div>
                </div>
                <div class="card">
                  <img src="images/bg_2.jpg">
                  <div class="info">
                    <h1><b>Yoga</b></h1>
                    It’s time to roll out your yoga mat and discover the combination of physical and mental exercises. 
                  </div>
               </div>
                  
                   
              </div>
              
              <div class="col-sm-4">
                  <div class="card">
                    <img src="images/push-ups.jpg">
                    <div class="info">
                      <h1>Push-ups<b>
                      </b></h1>
                      The Push-up is an oldie but goodie.You can modify intensity by changing hand placement.   
                    </div>
                  </div>
                  <div class="card">
                    <img src="images/walks.jpg">
                    <div class="info">
                        <h1><b>Walking</b></h1>
                        Morning walk is an exercise with many benefits. A person who goes on morning walk has to get up early in the morning 
                    </div>
                  </div>
                 
               </div>

         </div>

           

    </div>
    <br>
    <br>
</section>
<br>
<br>
   
<section id="team">
       <div class="container text-center text-warning wow animate__animated animate__swing" data-wow-delay="0.2s" style="font-size: 30px;">
    <br>       
 <b>Our</b>&nbsp;<b class="text-info">Team</b> </div>
     <br>             
    <div class="container">
            <div class="row">
                 <div class="col-sm-6  wow animate__animated animate__fadeInLeft" id="team-col1" style=" transform: rotate(15deg); width: 450px; ">                 
                 <div class="card" >
                        <div class="card-body">  
                          <img src="pics/team.jpg" class="img-fluid">
                        </div>
                     </div> 
                </div>
                <div class="col-sm-4 bg-white  shadow wow animate__animated animate__fadeInUp" id="team-col2"><div id="carouselExampleCaptions" class="carousel slide team-member bg-info" data-ride="carousel">
                        <ol class="carousel-indicators"><li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="images/NurAmin.jpg" style="height: 350px; width: 200px;" class="d-block w-100" alt="...">
                            <div class="carousel-caption  d-md-block " id="team-detail">
                              <h2 style="color : red"><b>Nur Amin Molla</b></h2>
                              <h3 style="color : Black"><b>Web developer</b></h3>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src="images/naman.jpeg" style="height: 350px; width: 200px;" class="d-block w-100" alt="...">
                            <div class="carousel-caption  d-md-block"  id="team-detail">
                              <h2 style="color : red"><b>Rajan Pandey</b></h2>
                              <h3 style="color : Black"><b>Competitive Coder</b></h3>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src="images/kuku.jpeg" style="height: 350px; width: 200px;" class="d-block w-100" alt="...">
                            <div class="carousel-caption  d-md-block"  id="team-detail">
                              <h2 style="color : red"><b>Pawan Nath Tiwari</b></h2>
                              <h3 style="color : Black"><B>Editer</b></h3>
                            </div>
                          </div>
                          
                          
                        </div>
                        <a class="carousel-control-prev " href="#carouselExampleCaptions" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only ">Previous</span>
                        </a>
                        <a class="carousel-control-next " href="#carouselExampleCaptions" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
               </div>
                     
                </div>
         </div>
        
    </div>
</section>

<section id="contact">
     <div class="container text-center text-warning" style="font-size: 30px;">
         <b>Contact</b>&nbsp;<b class="text-info">us</b> </div>
        <br>
        <div class="row">
          <div class="col-sm-6 wow animate__animated animate__slideInLeft">
                  <div class="card" id="contactcard1" style=" height:350px; padding: 10px; ">
                        <div class="card-body text-center text-white">
                                <h5 class="card-title text-white text-center"><b>Get in Touch</b></h5>
                                 <span class="fa fa-mobile" aria-hidden="true" style="font-size:50px;"></span>
                                <h6 class="card-subtitle mb-2 text-white text-center">8405812667</h6><br>
                                 <span class="fa fa-envelope-o " aria-hidden="true" style="font-size:30px;"></span>
                                  <h6 class="card-subtitle mb-2 text-white text-center">nurRajanPawan@gmail.com</h6><br>
                                   <span class="fa fa-map-marker " aria-hidden="true" style="font-size:30px;"></span>
                                 <p class="card-text text-center text-white">Dehradun, UK.  </p>
                        </div>
                  </div>                   
          </div>
          <div class="col-sm-6  wow animate__animated animate__slideInRight">
                   <div class="card bg-transparent" id="contactcard2">
                        <div class="card-body">
                         <h5 class="card-title text-center">Drop a note</h5>
                         <form>
                           <div class="form-group">
                             <input type="email" class="form-control" placeholder="Your Name" aria-describedby="emailHelp">
                           </div>
                           <div class="form-group">
                             <input type="email" class="form-control" placeholder="Your Email" aria-describedby="emailHelp">
                             <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                           </div>
                           <div class="form-group">
                             <textarea class="form-control"  rows="2" placeholder="Your Message"></textarea>
                           </div>
                           <button type="submit" class="btn btn-primary">Submit</button>
                         </form> 

                        </div>
                   </div>
          </div>
         </div>

    
</section>


<footer>
  <p>Footer</p>
</footer>

<script>
    $('.carousel').carousel({
  interval: 2000
})
function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
          
        }
        
        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
        }
</script>
    <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>   
   
</body>
</html>