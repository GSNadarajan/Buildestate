<?php
//  echo __DIR__;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nadarajan</title>
    <link rel="icon" type="image/x-icon" href="assets/images/natttu.ico">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/dist/css/progress.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- aos library cdn -->

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- <link rel="stylesheet" href="dummy.css"> -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    
</head>

<style>
    .navhr:hover{
           background-color:red;
       
           color:white;
    }
     .bg:hover{
        background-color: blue; 
        border-bottom:2px;
        color:white;
        /* justify-content: space-evenly; */
        border-radius: 5px;

     }

     h1{
        letter-spacing: 1.5px;
     }

     /* @media screen and (max-width:768px){
        .home1{
            display:none;
        }
        .home2{
            display: block;
        }
     }
     @media screen and (min-width:767px){
        .home1{
            display: block;
        }
        .home2{
            display: none;
        }
     } */
     @media screen and (max-width:991px) and (min-width:760px){
        .home_left{
            margin-top:20px;
        }
        .home_right{
            margin-top:80px;
        }
     }

     @media screen and (max-width:1195px) and (min-width:992px){
        .home_left{
            margin-top:40px;
        }
        .home_right{
            margin-top:130px;
        }
     }

     @media screen and (max-width:1250px) and (min-width:1196px){
        .home_left{
            margin-top:20px;
        }
        .home_right{
            margin-top:140px;
        }
     }

     @media screen and (max-width:1399px) and (min-width:1251px){
        .home_left{
            margin-top:20px;
        }
        .home_right{
            margin-top:130px;
        }
     }
     
     @media screen and (max-width:1850px) and (min-width:1400px){
        .home_left{
            margin-top:10px;
        }
        .home_right{
            margin-top:160px;
        }
     }
     
     @media screen and  (min-width:1851px){
        .home_left{
            margin-top:10px;
        }
        .home_right{
            margin-top:190px;
        }
     }
     .nav_bg{
    /* background-image: url('https://cutewallpaper.org/23/web-development-wallpaper-hd/1841128648.jpg'); */
    background: linear-gradient(to bottom right, #00d2ff , #928DAB );

     }
   .home1{
    /* background-image: url('https://img.freepik.com/free-vector/laptop-with-program-code-isometric-icon-software-development-programming-applications-dark-neon_39422-971.jpg?w=996&t=st=1661423298~exp=1661423898~hmac=7bb47893b4566e09c12e1ad4c7d71a401f38c16967c7d5be261969d425dd75ef');   */
    /* background-image: url('https://cutewallpaper.org/23/web-development-wallpaper-hd/1841128648.jpg');
     */
    background-image: url('https://media.istockphoto.com/photos/a-laptop-half-closed-in-the-dark-with-colourful-glow-picture-id1321551360?k=20&m=1321551360&s=612x612&w=0&h=oXGTiNPLqGL1r8-8UTVpJwpiL0qzxLl46vDuKAEhpy0=');

    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    width:100%;
    height:100vh;
    position:relative;
    opacity: 0.8;
   }

   .main_content{
    
    position:absolute;
    top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  opacity: 1 !important;
}

.main_content{
    background:rgba(255,255,255,0.2);
    border-radius: 10px;
    color: white;
}

.btpr{
  text-decoration:none;
  color:black;
  font-weight:bold;
  /* background-color:rgba(255,255,255,0.5); */
  padding:14px 10px;
  border-radius:10px;
}
.btt{
  border-radius:13px;
  /* background: linear-gradient(45deg, #0024e1b5, #c010cfb8); */
  /* background: linear-gradient(to bottom right, #cc33ff 0%, #00ffff 104%); */
  background: linear-gradient(to bottom right, #00d2ff , #928DAB );
  color:white;
  border:none;
}






     

</style>
<body style="background-color:white;font-family: 'Poppins', sans-serif;">
  
  <!-- <div class="container-fluid"> -->
    <!-- <nav class="navbar  navbar-expand-lg nav_bg ">
       
           <a class="navbar-brand" href="#">   <h3 class="float-md-start text-white mb-0 build"  style="font-weight:900;font-family: 'Russo One', sans-serif;">Nadarajan<span style="color: blue;"></span></h3></a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"></path>
          </svg></span>
      </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"> <a class="bg nav-link text-white" href="#home">Home</a> </li>
                    <li class=" nav-item "><a class="bg nav-link text-white" href="#about">About us</a>
                    <li class="nav-item "><a class="bg nav-link text-white" href="#skills">Skills</a></li>
                    <li class="nav-item "><a class="bg nav-link text-white" href="#projects">Projects</a></li>
                    <li class="nav-item "><a class="bg nav-link text-white" href="#services">Services</a></li>

      
        </ul>
        <button class="btn  text-white conn1" style=" background:linear-gradient(45deg, #0024e1b5, #c010cfb8);" type="submit">Contact</button>
      
      </div>
       -->
      <!-- </nav> -->

      <nav class="navbar navbar-light bg-light shadow-sm   nav_bg">
        <div class="container">
          <a class="navbar-brand text-white fw-bold fs-4" href="#">Nadarajan</a>
          <div class="dropdown">
            <button class="btn px-3" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-list" style="color: white;font-size:27px;"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item" href="#home">Home</a></li>
              <li><a class="dropdown-item" href="#about">Aboutme</a></li>
              <li><a class="dropdown-item" href="#services">services</a></li>
              <li><a class="dropdown-item" href="#projects">projects</a></li>
        <button class="btn  text-white conn1" style=" background:linear-gradient(45deg, #0024e1b5, #c010cfb8);" type="submit">Contact</button>

            </ul>
    
          </div>
    </div>
    </nav>
    <!-- </div> -->
   
      


      <!-- Main page -->


      <section id="home" style="height:100vh; "  >

        <div class="container-fluid home1" style="background: linear-gradient(to bottom right, #00d2ff , #928DAB );" >

       <div class="main_bg" style="position:relative;">
        <!-- <center class="main_content"><h1 >Hello,<br>I'm Nadarajan<br>Frondend Developer</h1></center> -->
<p class="line anim-typewriter">Hello I'm Nadarajan</p>


      </div>

      </section>

      <!-- home page for mobile -->


      <!-- <section id="Home">

        <div class="container home2" style="margin-top:40px;">

            <div class="row">


                <div class="col-md-6 "  style="margin-top:5px;">
                    <h1>Hi, <br>I'm <span style="color:blue;">Nadarajan G S </span><br> Web Engineer</h1>
                    <button class="btn" style="background-color:blue;color: white;">Contact</button>
                    </div>
    

                <div class="col-md-6" style="margin-top: -1px;">
                   <img src="natraj.jpg" height="100%" width="100%" class="img-fluid">
                </div>

               
               
            </div>
          
        </div>

      </section>  -->

      <section id="about">
        <div class="container">
            <center><h1 style="color: #00d2ff;margin-top: 34px;font-weight:bold;">About me</h1></center>
              
            <div class="row">
                 
                <div class="col-md-6 bg-white p-5" data-aos="fade-right">
    
    
                    <img src="assets/images/natraj.jpg" alt="Girl in a jacket" width="100%" height="100%">
                    <!-- <center><h1 style="color:#c010cfb8;margin-top: -10px;">Nadarajan</h1></center> -->
                    
                 
                </div>

                <div class="col-md-6" style="margin-top:150px;" data-aos="fade-left">
                    <p style="font-size:20px;">Developer</p>
                <h1>Nadarajan<br><h3>Self taught programmer and started my career in programming  during second year of college, and I'm interested to build something in web</h3>While(!(Succeed = try()));</h1>
                    
                </div>
                 

                <div class="row">
               
    
                  <div class="col-md-6 p-5  " style="background-color:rgba(255,255,255,0.1);">
                  
      
                     
                      <div class="row p-3 mt-4" style="border-radius:10px;background: linear-gradient(to bottom right, #00d2ff , #928DAB );"  data-aos="flip-right"
                      data-aos-easing="ease-out-cubic"
                      data-aos-duration="2000">
                      
                          <h6 class="text-white" style="padding:5px 5px;"><span><i class="bi bi-caret-right-fill" style="color:white;font-size: 25px;"></i></span>&nbsp;I've done my schooling at Little FLower Matriclulation School</h6>
                         
                      
                      </div> 
  
                      <div class="row p-3 mt-4" style="border-radius:10px;background: linear-gradient(to bottom right, #00d2ff , #928DAB );"  data-aos="flip-right"
                      data-aos-easing="ease-out-cubic"
                      data-aos-duration="2000">
                      
                          <h6 class="text-white" style="padding:5px 5px;"><span><i class="bi bi-caret-right-fill" style="color:white;font-size: 25px;"></i></span>&nbsp;Currently I'm doing Web Engineering course at SNA</h6>
                         
                      
                      </div> 
  
                      <div class="row p-3 mt-4" style="border-radius:10px;background: linear-gradient(to bottom right, #00d2ff , #928DAB );color: white;"  data-aos="flip-right"
                      data-aos-easing="ease-out-cubic"
                      data-aos-duration="2000">
                      
                          <h6 class="text-white" style="padding:5px 5px;"><span><i class="bi bi-caret-right-fill" style="color:white;font-size: 25px;"></i></span>&nbsp;Frontend Developer</h6>
                         
                      
                      </div> 
                      
  
                      <div class="row p-3 mt-4" style="border-radius:10px;background: linear-gradient(to bottom right, #00d2ff , #928DAB );color: white;"  data-aos="flip-right"
                      data-aos-easing="ease-out-cubic"
                      data-aos-duration="2000">
                      
                          <h6 class="text-white" style="padding:5px 5px;"><span><i class="bi bi-caret-right-fill" style="color:white;font-size: 25px;"></i></span>&nbsp;Frontend Developer at Neulancers</h6>
                         
                      
                      </div> 
                </div>
  
             
                <div class="col-md-6 bg-white p-5" data-aos="fade-left">
      
      
                  <img src="assets/images/Hand coding (8).gif" alt="Girl in a jacket" width="100%" height="100%">
                  
               
              </div>
      



            </div>
        </div>
      </section>


     


   


     



     <section id="skills">

     <div class="container mt-5">
        <center><h1 style="color: #00d2ff;" data-aos="fade-up">Skills</h1></center>
         
        
        <div class="container" style="margin-top:100px;">
        
          <div class="row">
              <div class="col-md-6">
  
  
  
       
                <h4>HTML</h4>
                <div class="loading1" data-aos="fade-right">
                   <div class="line-box1">
                      <div class="line1"></div>
                   </div>
              </div>

              <h4>CSS</h4>
                <div class="loading1" data-aos="fade-right">
                   <div class="line-box1">
                      <div class="line1"></div>
                   </div>
              </div>
  
              <h4>JS</h4>
                <div class="loading2" data-aos="fade-right">
                   <div class="line-box2">
                      <div class="line2"></div>
                   </div>
              </div>
  
  
              <h4>Bootstrap</h4>
              <div class="loading3" data-aos="fade-right">
                 <div class="line-box3">
                    <div class="line3"></div>
                 </div>
            </div>
      
          </div>
  
              <div class="col-md-6">
  
  
  
                 <h4>React</h4>
                 <div class="loading4" data-aos="fade-left">
                    <div class="line-box4">
                       <div class="line4"></div>
                    </div>
               </div>
  
  
  
               <h4>PHP</h4>
               <div class="loading5" data-aos="fade-left">
                  <div class="line-box5">
                     <div class="line5"></div>
                  </div>
             </div>
  
             <h4>Git</h4>
               <div class="loading6" data-aos="fade-left">
                  <div class="line-box6">
                     <div class="line6"></div>
                  </div>
             </div>
  
  
           
  
           <h4>Python</h4>
           <div class="loading7" data-aos="fade-left">
              <div class="line-box7">
                 <div class="line7"></div>
              </div>
         </div>
   
     
  
  
                  
              </div>
         
         
         
         
          </div>
  
      </div>
     </div>
     


     </section>

     <section id="projects" style="margin-top:50px;">
        <center ><h1 style="color: #00d2ff;" data-aos="fade-up"  data-aos="fade-up">Projects</h1></center>
      <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3" style="margin-top:50px;">
            
           <center>
            <div class="col"  data-aos="fade-up">
                <div class="card shadow-sm zoom">
                <div class="card-body " >
                  <img src="assets/images/p1.png" class="img-fluid" style="height:100%;width:100%;">
      
                   
                    <center ><button class="mt-3 btt" type="button"><a class="btpr text-white"  target="_blank" href="https://nattu.me/">Launch website</a></button></center>

                  </div>
                </div>
              </div>
            </center>
              <!-- second col -->
                
              
              <center>
              <div class="col"  data-aos="fade-up">
                <div class="card shadow-sm zoom">
                <div class="card-body " >
                  <img src="assets/images/p2.png" class="img-fluid" style="height:100%;width:100%;">
      
              
                    <center ><button class="mt-3 btt" type="button"><a class="btpr text-white" target="_blank" href="https://nattu.me/const/navbars/new.html">Launch website</a></button></center>

                   
                  </div>
                </div>
              </div>
            </center>

              <!-- third col -->
              
              <center>
              <div class="col"  data-aos="fade-up">
                <div class="card shadow-sm zoom" style="height:100%;width:100%;position:relative;">
                <div class="card-body " >
                  <img src="assets/images/p3.png" class="img-fluid" style="height:100%;width:100%;">
                   <!-- <center style="  position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);"><h2 >Coming soon</h2></center> -->
                   <center ><button class="mt-3 btt" type="button"><a class="btpr text-white" target="_blank" href="https://nattu.me/const/navbars/new.html">Launch website</a></button></center>

                  </div>
                </div>
              </div>
            </center>

           
               
          
    
        </div>
      </div>
     </section>


         <section id="services">
            <center><h1 style="color: #00d2ff;margin-top: 30px;">Services</h1></center>
             
        <div class="container mt-5 " >
              <div class="row">
                 <div class="col-md-6"  style="margin-top:-30px;">
                <img src="assets/images/responsive.gif" height="100%" width="100%" class="img-fluid" data-aos="fade-right">
                     
                 </div>

              
          
                      <div class="col-md-6 bg-white p-5 ">
                      
                          <h2>Why choose me?</h2>
                          <!-- <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p> -->
          
                          <div class="row p-3 mt-4" style="border-radius:10px;background:rgba(255,255,255,0.2);">
                              
                                
          
                          <div class="row p-3 mt-4" style="border-radius:10px;background: linear-gradient(to bottom right, #00d2ff , #928DAB );" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                          data-aos-duration="2000">
                          
                              <h6 class="text-white" style="padding:5px 0px;"><span>   <i class="bi bi-lightbulb-fill"style="color:white;background: rgba(255,255,255,0.1);padding:9px;border-radius:4px;"></i></span>&nbsp;Make your website amazingly with me</h6>
                             
                          
                          </div> 

                          <div class="row p-3 mt-5" style="border-radius:10px;background: linear-gradient(to bottom right, #00d2ff , #928DAB );"  data-aos="flip-left" data-aos-easing="ease-out-cubic"
                          data-aos-duration="2000">
                          
                            <h6 class="text-white" style="padding:5px 0px;"><span>   <i class="bi bi-lightbulb-fill"style="color:white;background: rgba(255,255,255,0.1);padding:9px;border-radius:4px;"></i></span>&nbsp;Make the website more asthetic</h6>
                           
                        
                        </div> 
        
          
          
                          <div class="row p-3 mt-5" style="border-radius:10px;background: linear-gradient(to bottom right, #00d2ff , #928DAB );"  data-aos="flip-left" data-aos-easing="ease-out-cubic"
                          data-aos-duration="2000">
                          
                              <h6 class="text-white" style="padding:5px 0px;"><span>   <i class="bi bi-lightbulb-fill"style="color:white;background: rgba(255,255,255,0.1);padding:9px;border-radius:4px;"></i></span>&nbsp;Make it responsive for all the devices</h6>
                              
          
                          </div> 
          
                       
                       
          
                          
          
                          
          
                      </div>
          
          
                
            </div>
        </div>

      </section>



           <section>
    
              
              
              
              
              
            </div>
           </section>














    
   <div class="container-fluid" style="margin-top:60px;background: linear-gradient(to bottom right, #00d2ff , #928DAB );">
     <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class=" col-md-4 d-flex align-items-center">
          <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
          </a>
          <span class="text-muted">Copyright © 2022</span>
        </div>
    
        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
          <li class="ms-3"> <a href="https://www.linkedin.com/in/nadarajangs/" target="_blank"><i class="bi bi-linkedin" style="color:black;font-size:25px;"></i></a></li>
          <li class="ms-3"><a href="https://github.com/GSNadarajan" target="_blank"><i class="bi bi-github" style="color:black;font-size:25px;"></i></a></li>
          <li class="ms-3"><a href="https://www.instagram.com/natraj_g_s/" target="_blank"><i class="bi bi-instagram" style="color:black;font-size:25px;"></i></a></li>
        </ul>
   
      </footer>
    </div>





      
      <script>
        AOS.init();
      </script>
    
</body>
</html>