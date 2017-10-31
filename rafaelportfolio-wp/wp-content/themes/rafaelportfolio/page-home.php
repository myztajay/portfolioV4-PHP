<?php
/**
  Template Name: Home Page
 */

// Advance custom Fields
$features_section_title_1  = get_field('features_section_title_1');
$features_section_desc_1   = get_field('features_section_description_1');
$features_section_icon_1   = get_field('features_section_icon_1');

$features_section_title_2  = get_field('features_section_title_2');
$features_section_desc_2   = get_field('features_section_description_2');
$features_section_icon_2   = get_field('features_section_icon_2');

$features_section_title_3  = get_field('features_section_title_3');
$features_section_desc_3   = get_field('features_section_description_3');
$features_section_icon_3  = get_field('features_section_icon_3');
get_header(); ?>

<header class="masthead">
  <div class="container h-100">
    <div class="row h-100">
      <div class="col-lg-10 my-auto mx-auto text-center">
        <div class="header-content mx-auto ">
          <h2 class="bold-fonts">FULL STACK DEVELOPER</h1>
          <h3 class="mb-5"> I specialize in making modern, responsive web applications & websites. </h1>
        </div>
        <a href="#hire-me"type="button" class="btn btn-xl btn-primary js-scroll-trigger ">I want to build a Webapp/Website</a>
        <a href="#about" class="btn btn-outline btn-xl js-scroll-trigger ">I am an employer looking to hire</a>
      </div>  
    </div>
  </div>
</header>
<section class="features bg-light-gray" id="service">
  <div class="container">
    <div class="section-heading text-center">
      <h2>Specializing in building Web Apps & Websites</h2>
      <p class="text-muted">A Fullstack Developer at Your Service!</p>
      <hr>
    </div>
    <div class="row">
      <div class="col-lg-12 my-auto">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-4">
              <div class="feature-item">
                <i class="icon-<?php echo $features_section_icon_1?> text-primary"></i>
                <h3><?php echo $features_section_title_1 ?></h3>
                <p class="text-muted"><?php echo $features_section_desc_1 ?> </p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="feature-item">
                <i class="icon-<?php echo $features_section_icon_2 ?> text-primary"></i>
                <h3><?php echo $features_section_title_2 ?></h3>
                <p class="text-muted"><?php echo $features_section_desc_2 ?></p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="feature-item">
                <i class="icon-<?php echo $features_section_icon_3 ?> text-primary"></i>
                <h3><?php echo $features_section_title_3 ?></h3>
                <p class="text-muted"><?php echo $features_section_desc_3 ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="download text-center " id="portfolio">
  <div class="container">
    <!-- PORTFOLIO ITEM 1 -->
    <div class="row text-center portfolio-pad">
      <div class="col-md-5 mx-auto">
        <div class="device-container">
          <div class="device-mockup SurfacePro3 landscape black">
            <div class="device">
              <div class="screen">
                <img src= "/wp-content/themes/rafaelportfolio/assets/img/appspark.png" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>   
      </div>
      <div class="col-md-5 mx-auto">
        <h1 class="section-heading">AppSpark </h1>
        <p class='text-muted text-justify'>A Kick Starter-like app, to help find 
          developers and collaborators of all kinds for a projects. Users can post a github repo, request 
          developers, enter scope of work, and more. This project utilizes join tables to map relationships,
          libraries such as devise, AWS storage, omniauth and the github API.
        </p>
           <span class="badge badge-secondary">HTML 5 </span>
           <span class="badge badge-secondary">CSS 3</span>
           <span class="badge badge-secondary">Bootstrap</span>
           <span class="badge badge-secondary">Responsive</span>
           <span class="badge badge-secondary">Mobile-Friendly</span>
           <span class="badge badge-secondary">Refile library</span>
           <span class="badge badge-secondary">Ruby</span>
           <span class="badge badge-secondary">Rails</span>
           <span class="badge badge-secondary">Oauth</span>
           <span class="badge badge-secondary">Devise</span>
           <span class="badge badge-secondary">Postgres</span>
           <span class="badge badge-secondary">Heroku</span>
           <span class="badge badge-secondary">Jquery</span>
           <span class="badge badge-secondary">AWS</span>
           <span class="badge badge-secondary">Git</span>  
           <div class="project-buttons-container">
             <a href="https://appspark.herokuapp.com/"type="button" target="_blank" class="btn btn-xl btn-primary project-button">Demo</a>   
             <a href="https://github.com/myztajay/SparkApp"type="button" target="_blank" class="btn btn-xl btn-primary project-button">Code</a>   
           </div>    
      </div>
      <hr class="animated-hr">  
    </div>
    
    <!-- PORTFOLIO ITEM 2 -->
    <div class="row text-center portfolio-pad">
      <div class="col-md-5 mx-auto">
        <div class="device-container">
          <div class="device-mockup SurfacePro3 landscape black">
            <div class="device">
              <div class="screen">
                <img src="/wp-content/themes/rafaelportfolio/assets/img/portfolio.png" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>   
      </div>
      <div class="col-md-5 mx-auto">
        <h1 class="section-heading">RafaelFernandez </h1>
        <p class='text-muted text-justify'>A fully Responsive and mobile-friendly (self-referential) website that displays my most recent projects.
           This website utilizes boostrap as well serveral other uitilty libraries.</p>
        <span class="badge badge-secondary">HTML 5</span>
        <span class="badge badge-secondary">CSS 3</span>
        <span class="badge badge-secondary">Responsive</span>
        <span class="badge badge-secondary">Mobile-Friendly</span>
        <span class="badge badge-secondary">Javascript</span>
        <span class="badge badge-secondary">AnimateCSS</span>
        <span class="badge badge-secondary">Clipboard</span>
        <span class="badge badge-secondary">Boostrap</span>
        <span class="badge badge-secondary">Jquery</span>
        <div class="project-buttons-container">
          <a href="http://rafaelfernandez.me"type="button" target="_blank" class="btn btn-xl btn-primary project-button">Demo</a>   
          <a href="https://github.com/myztajay/portfolioV4"type="button" target="_blank" class="btn btn-xl btn-primary project-button">Code</a>   
        </div> 
      </div>
      <hr class="animated-hr">  
    </div>
    
    <!-- PORTFOLIO ITEM 2.1 -->
    <div class="row text-center portfolio-pad">
      <div class="col-md-5 mx-auto">
        <div class="device-container">
          <div class="device-mockup galaxy_s5 protrait black">
            <div class="device mx-auto" style=
            "height: 322px;
            width: 175px;
            padding: 0;
            ">
              <div class="screen">
                <img src="/wp-content/themes/rafaelportfolio/assets/img/sessions.png" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>   
      </div>
      <div class="col-md-5 mx-auto">
        <h1 class="section-heading">Sessions </h1>
        <p class='text-muted text-justify'> A React-Native App that allows users to create study sessions 
          and alert other users within a geographical radius of that session. This project utilizes the rapidly changing React-Native library,
          Firebase, NoSQL and component based architecture.
        </p>
           <span class="badge badge-secondary">CSS 3</span>
           <span class="badge badge-secondary">Firebase</span>
           <span class="badge badge-secondary">React</span>
           <span class="badge badge-secondary">React-native</span>
           <span class="badge badge-secondary">Google Places API</span>
           <span class="badge badge-secondary">Webpack</span>
           <span class="badge badge-secondary">Babel</span>
           <span class="badge badge-secondary">NoSQL</span>
           <div class="project-buttons-container">
             <a href="#"type="button" target="_blank" class="btn btn-xl btn-primary project-button" data-toggle="modal" data-target="#codeOnlyModal" data-trigger='hover'>Demo</a>   
             <a href="https://github.com/myztajay/Sessions"type="button" target="_blank" class="btn btn-xl btn-primary project-button">Code</a>        
           </div>    
      </div>
      <hr class="animated-hr">  
    </div>
    
    <!-- Modal code only-->
    <div class="modal fade" id="codeOnlyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title bold-fonts">Sorry</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">    
              <h4>Sorry, this project isn't quite ready for a demo yet, but it will be soon.<br><br>
              In the mean time feel free to check out the <a href="https://github.com/myztajay/Sessions"> code.</a></h4><br>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal End -->
    
    <!-- PORTFOLIO ITEM 3 -->
    <div class="row text-center portfolio-pad">
      <div class="col-md-5 mx-auto">
        <div class="device-container">
          <div class="device-mockup SurfacePro3 landscape black">
            <div class="device">
              <div class="screen">
                <img src="/wp-content/themes/rafaelportfolio/assets/img/compare1.png" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>   
      </div>
      <div class="col-md-5 mx-auto">
        <h1 class="section-heading">Comparative </h1>
        <p class='text-muted text-justify'>An application that gathers crowd sourced opinion 
          of a photo via voting system. The application utilizes relational databases, user 
          authenticaton, and is written in a Ruby and Javascript</p>
        <span class="badge badge-secondary">HTML 5 </span>
        <span class="badge badge-secondary">CSS 3</span>
        <span class="badge badge-secondary">Materialize</span>
        <span class="badge badge-secondary">Ruby</span>
        <span class="badge badge-secondary">Rails</span>
        <span class="badge badge-secondary">Oauth</span>
        <span class="badge badge-secondary">Devise</span>
        <span class="badge badge-secondary">Postgres</span>
        <span class="badge badge-secondary">Heroku</span>
        <span class="badge badge-secondary">Jquery</span>
        <span class="badge badge-secondary">Git</span>
        <div class="project-buttons-container">
          <a href="https://powerful-river-44906.herokuapp.com/users/sign_in"type="button" target="_blank" class="btn btn-xl btn-primary project-button">Demo</a>   
          <a href="https://github.com/myztajay/Comparative"type="button" target="_blank" class="btn btn-xl btn-primary project-button">Code</a> 
        </div>  
      </div>
      <hr class="animated-hr">  
    </div>
    <!-- PORTFOLIO ITEM 3 -->
    <div class="row text-center portfolio-pad">
      <div class="col-md-5 mx-auto">
        <div class="device-container">
          <div class="device-mockup SurfacePro3 landscape black">
            <div class="device">
              <div class="screen">
                <img src="/wp-content/themes/rafaelportfolio/assets/img/simon1.png" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>   
      </div>
      <div class="col-md-5 mx-auto">
        <h1 class="section-heading">Simon</h1>
        <p class='text-muted text-justify'>This project was part of 7 day sprint chellenge and
          was designed to test my understanding of Javascript programming. 
          During this project I utilizes multiple resources such as colleagues,
          Stack Overflow and Github. I was able to build the simon game with
          just functional programming.
        </p>
        <span class="badge badge-secondary">HTML 5</span>
        <span class="badge badge-secondary">CSS 3</span>
        <span class="badge badge-secondary">Javascript</span>
        <span class="badge badge-secondary">JQuery</span>
        <div class="project-buttons-container">
          <a href="https://myztajay.github.io/Simon-Says-Remake/"type="button" target="_blank" class="btn btn-xl btn-primary project-button">Demo</a>   
          <a href="https://github.com/myztajay/Simon-Says-Remake"type="button" target="_blank" class="btn btn-xl btn-primary project-button">Code</a> 
        </div>    
      </div>
      <hr class="animated-hr">  
    </div>
  </div>
</section>
<!-- <section class="features bg-light-gray text-center"> 
  <h1> Some of my Tools</h1>
  <i class="devicon-html5-plain text-muted"></i>
  <i class="devicon-css3-plain text-muted"></i>
  <i class="devicon-javascript-plain text-muted"></i>
  <i class="devicon-ruby-plain text-muted"></i>
  <i class="devicon-rails-plain text-muted"></i>
  <i class="devicon-react-plain text-muted "></i>
  <i class="devicon-postgresql-plain text-muted"></i>
  <i class="devicon-nodejs-plain text-muted"></i>  
</section> -->
<section class=" bg-primary" id="about">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3 text-center ml-auto">
        <img src="/wp-content/themes/rafaelportfolio/assets/img/me.jpg" class="img-fluid rounded-circle" alt=""><Br>
        <br><span class="fa-stack fa-lg grow">
          <i class="fa fa-square-o fa-stack-2x"></i>
          <a href="https://twitter.com/reactor_7"> <i class="fa fa-twitter fa-stack-1x"></i></a>
        </span>
        <span class="fa-stack fa-lg grow ">
          <i class="fa fa-square-o fa-stack-2x"></i>
          <a href="https://github.com/myztajay"><i class="fa fa-github fa-stack-1x"></i></a>
        </span>
        <span class="fa-stack fa-lg grow">
          <i class="fa fa-square-o fa-stack-2x"></i>
          <a href="https://www.linkedin.com/in/rafael-fernandez"><i class="fa fa-linkedin fa-stack-1x"></i></a>
        </span>
        <span class="fa-stack fa-lg grow">
          <i class="fa fa-square-o fa-stack-2x"></i>
          <a href="https://www.facebook.com/rafael.fernandez.161009"><i class="fa fa-facebook fa-stack-1x"></i></a>
        </span>
      </div>
      <div class="col-sm-4 ml-auto">
        <h2> About Me </h2>
        <p>Hey I'm Raf, I specialize in making web applications and modern, responsive websites. 
          I am located in Providence, Rhode Island and have been coding for about a year and a half, more recently
          I've completed one of those coding bootcamps you might've heard about.
          <Br><Br>
          Overall I would say I know enough to be dangerous, but more importantly I can deliver results. I enjoy
          treading new terrain, exploring fresh code libraries, building MVP's, and most of all taking an idea from headspace to database.
         </p>
      </div>   
      <div class="col-sm-3 my-auto ml-auto">
        <a href="./img/resume.pdf" target="_blank"class="btn btn-xl about-button js-scroll-trigger">Resume</a><br>
        <a href="mailto:rafaeljeremyfernandez@gmail.com" class="btn btn-xl about-button">Email</a>
        <h4>Not working? contact information below.</h4>
        <a href="#download" class="btn btn-xl about-button js-scroll-trigger bg-alt-alt" data-toggle="modal" data-target="#contactModal" data-trigger='hover'>Contact Info</a><br>
        <!-- Modal Resume-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <object width="600" height="600" data="./img/resume.pdf"></object>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">close</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal End -->
        <!-- Modal Contact-->
        <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title bold-fonts">Let's talk.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">    
                  <h4>I'm always open to have a dialog about technology, an open position or contract work</h4><br>
                  <input class="contact-input"id='phone' value="4013691072"></input>
                  <button id="copybtn" class="btn btn-outline-primary " data-clipboard-target="#phone">
                    copy
                  </button><br>
                  <input class="contact-input" id='email' value='Rafaeljeremyfernandez@gmail.com'></input>
                  <button id="copybtn2" type="button" data-clipboard-target="#email" class="btn btn-outline-primary">copy</button>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">close</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal End -->
      </div> 
    </div>        
  </div>
</section>

<section class="cta" id='hire-me'>
  <div class="cta-content">
    <div class="container">
      <div class="row ">
        <div class="col-md-5 mx-auto">
          <h2>Stop waiting.<br>Start building.</h2>
        </div>
        <!-- <div class="col-md-4 mx-auto">
          <form>
            <div class="form-group">
              <label for="exampleInputEmail1"></label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
            </div>
            <div class="form-group">
              <input type="name" class="form-control" id="" placeholder="Email">
            </div>
            <div class="form-group">  
              <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Message" rows="3"></textarea>
            </div>  
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div> -->
      </div>
    </div>
  </div>
  <div class="overlay"></div>
</section>

<?php get_footer() ?>
