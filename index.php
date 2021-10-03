<?php 
    include 'includes/header.php';
?>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>


<body>

    <canvas id="bg"></canvas>


    <main>
    <!-- header -->
    <header id="home">

        <?php 
            include 'includes/navbar-home.php';
        ?>

        <!-- home intro -->
        <div class="home-intro segments">
            <div class="container">
                <div class="intro-content box-content">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <div class="intro-caption">
                                <span >I am <span class="sahil-hadke">Sahil Hadke</span></span>
                                <h2>Web Developer</h2>
                                <!-- <h2></h2> -->
                                <a href="https://docs.google.com/document/d/1o2ogxSxiVYZQT2uHd5JLnPu4pcYd9nTDU5cs5gB6nv0/edit?usp=sharing" target=_blank><button class="button">View Resume</button></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12 md-d-none">
                            <div class="intro-image">
                                <img src="images/sahil.webp" alt="">

<!-- <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_sk5h1kfn.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop autoplay></lottie-player> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end home intro -->

    </header>
    <!-- end header -->

    <!-- about -->
    <div id="about" class="about segments">
        <div class="container">
            <div class="box-content">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="content-left">
                            <div class="section-title section-title-center">
                                <h3>About Me</h3>
                            </div>
                            <div class="content text-center">
                                <p>
                                    Motivated college student with 1+ years of experience working as a 
                                    Web Technology Associate for OG Advertising Pvt. Ltd.
                                    Pursuing a degree in Computer Engineering from AISSMS IOIT, Pune.
                                </p>
                                <p>
                                    I'm passionate about my work, and love what I do.
                                    I taught myself how to build websites and soon turned this  into a profession.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->

    <!-- resume -->
    <div id="resume" class="resume segments">
        <div class="container">
            <div class="box-content">
                <div class="section-title">
                    <h3>My Resume</h3>
                </div>
                <div class="owl-carousel owl-theme">
                    <div class="content">
                        <!-- my experience -->
                        <div class="row ">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="content-left">
                                    <div class="title-resume">
                                        <h3>Experience</h3>
                                        <h2>Always deliver more than <span>expected</span>.</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="content-right work-exp">
                                    <ul class="timeline">
                                        <li>
                                            <h4>OG Advertising Pvt. Ltd.</h4>
                                            <span>Web Technology Associate Intern<br>(July 2020 - December 2020)</span>
                                        </li>
                                        <li>
                                            <h4>OG Advertising Pvt. Ltd.</h4>
                                            <span>Web Technology Associate<br>(December 2020 - Present)</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end my experience -->
                    </div>
                    <div class="content">
                        <!-- my education -->
                        <div class="row ">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="content-left">
                                    <div class="title-resume">
                                        <h3>Education</h3>
                                        <h2>Education is the movement from <span>darkness</span> to <span>light</span>.</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="content-right">
                                    <ul class="timeline">
                                        <li>
                                            <h4>Vidya Bhavan High School & Jr. College</h4>
                                            <span>10th SSC (2016) - 88.20%</span>
                                        </li>
                                        <li>
                                            <h4>Vidya Bhavan High School & Jr. College</h4>
                                            <span>12th HSC (2018) - 93.69%</span>
                                        </li>
                                        <li>
                                            <h4>AISSMS IOIT</h4>
                                            <span>Computer Engineering (2018-2022)</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end my education -->
                    </div>
                    <div class="content">
                        <!-- my skill -->
                        <div class="my-skill">
                            <div class="row ">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="content-left">
                                        <div class="title-resume">
                                            <h3>Skill</h3>
                                            <h2>When love and <span>skill</span> work together, expect a <span>masterpiece</span>.</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="content-right">
                                        <div id="accordionSkill" class="accordion">
                                            <div class="card">
                                                <div id="web-dev" class="card-header">
                                                    <h2>
                                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                                            <i class="fa fa-angle-down"></i>Web Development
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapse1" class="collapse" aria-labelledby="web-dev" data-parent="#accordionSkill">
                                                    <div class="card-body">
                                                        <ul class="web-dev">
                                                            <li>
                                                                <div class="skill-title">
                                                                    <span>HTML / CSS</span>
                                                                </div>
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="skill-title">
                                                                    <span>PHP</span>
                                                                </div>
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="skill-title">
                                                                    <span>JavaScript</span>
                                                                </div>
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="skill-title">
                                                                    <span>WordPress</span>
                                                                </div>
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="skill-title">
                                                                    <span>MySQL</span>
                                                                </div>
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="card">
                                                <div id="mern" class="card-header">
                                                    <h2>
                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse2">
                                                            <i class="fa fa-angle-down"></i>MERN
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapse4" class="collapse" aria-labelledby="mern" data-parent="#accordionSkill">
                                                    <div class="card-body">
                                                        <ul class="pro-skill">
                                                            <li>
                                                                <div class="skill-title">
                                                                    <span>MongoDB</span>
                                                                </div>
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="width: 68%"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="skill-title">
                                                                    <span>Express</span>
                                                                </div>
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="skill-title">
                                                                    <span>React</span>
                                                                </div>
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="skill-title">
                                                                    <span>Node</span>
                                                                </div>
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div id="prog-lang" class="card-header">
                                                    <h2>
                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                                            <i class="fa fa-angle-down"></i>Programming Languages
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapse2" class="collapse" aria-labelledby="prog-lang" data-parent="#accordionSkill">
                                                    <div class="card-body">
                                                        <ul class="pro-skill">
                                                            <li>
                                                                <div class="skill-title">
                                                                    <span>C++</span>
                                                                </div>
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="skill-title">
                                                                    <span>Python</span>
                                                                </div>
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                                                                </div>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div id="misc" class="card-header">
                                                    <h2>
                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse2">
                                                            <i class="fa fa-angle-down"></i>Other
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapse3" class="collapse" aria-labelledby="misc" data-parent="#accordionSkill">
                                                    <div class="card-body">
                                                        <ul class="pro-skill">
                                                            <li>
                                                                <div class="skill-title">
                                                                    <span>GIMP</span>
                                                                </div>
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 68%"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="skill-title">
                                                                    <span>Unity3D / C# (Basics)</span>
                                                                </div>
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="skill-title">
                                                                    <span>cPanel / WHM</span>
                                                                </div>
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="skill-title">
                                                                    <span>Linux</span>
                                                                </div>
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end my skill -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end resume -->

    <!-- [projects] -->
    <div id="projects" class="portfolio segments">
        <div class="container">
            <div class="box-content">
                <div class="section-title">
                    <h3>Featured Projects</h3>
                </div>

                <div class="row no-gutters filtr-container">
                    <div class="col-md-6 col-sm-12 col-xs-12 filtr-item" data-category="3">
                        <div class="content-image">
                            <a href="https://password-manager-sh.herokuapp.com/" target=_blank>
                                <img src="images/password.webp" alt="">
                                <div class="image-overlay"></div>
                                <div class="portfolio-caption">
                                    <div class="title-new">
                                        <h4>Password Manager</h4>
                                    </div>
                                    <div class="subtitle-new">
                                        <span>Node, React, MongoDB, Express</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 filtr-item" data-category="1">
                        <div class="content-image">
                            <a href="https://sahil-weather-forecast.herokuapp.com/" target=_blank>
                                <img src="images/weather.webp" alt="">
                                <div class="image-overlay"></div>
                                <div class="portfolio-caption">
                                    <div class="title-new">
                                        <h4>Weather Forecast App</h4>
                                    </div>
                                    <div class="subtitle-new">
                                        <span>Node, Express</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- [projects] -->

    <!-- blog -->
    <div id="blog" class="blog segments">
        <div class="container">
            <div class="section-title">
                <h3>Featured Blogs</h3>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="content">
                        <div class="image">
                            <img src="images/blog-1.webp" alt="">
                        </div>
                        <div class="blog-title">
                            <h4><a href="oumuamua-an-alien-spaceship.php">Oumuamua - An Alien Spaceship?</a></h4>
                            <div class="date">
                                 <a href="oumuamua-an-alien-spaceship.php"><span>Science & Technology</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content">
                        <div class="image">
                            <img src="images/zen.webp" alt="">
                        </div>
                        <div class="blog-title">
                            <h4><a href="zen-for-an-evoled-leadership.php">Zense : For an Evolved Leadership</a></h4>
                            <div class="date">
                                 <a href="zen-for-an-evoled-leadership.php"><span>Book Summary</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end blog -->

    <!-- contact -->
    <div id="contact" class="contact segments">
        <div class="container">
            <div class="box-content">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="content-left">
                            <div class="section-title section-title-left">
                                <h3>Contact Me</h3>
                            </div>
                            <h2>Your <span class="pri-color">network</span> is your <span class="pri-color">net worth</span>.</h2>
                            <ul>
                                <li>
                                    <a href="https://www.instagram.com/sahil_hadke_/" target=_blank><i class="fa fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="https://github.com/sahilhadke/" target=_blank><i class="fa fa-github"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/sahil-hadke-48a864131/" target=_blank><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="content-right">
                            <form class="contact-form" id="contact-form" method="post">
                                <div class="row">
                                    <div class="col">
                                        <div id="first-name-field">
                                            <input type="text" id="name" name="name" placeholder="Name" class="form-control" name="form-name" required>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div id="email-field">
                                            <input type="email" id="email" name="email" placeholder="Email" class="form-control" name="form-email" required>
                                        </div>
                                    </div>
                                </div>
                              
                                <div class="row">
                                    <div class="col">
                                        <div id="message-field">
                                            <textarea cols="30" id="message" name="message" rows="5" class="form-control" id="form-message" name="form-message" required placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="g-recaptcha" data-sitekey="6LfS60QcAAAAAGMxZipuwgesYQr89fVJXTfYHW1E"></div>


                                <button class="button" type="submit" id="submit" name="submit">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->

</main>

  <!-- Modal -->
  <div class="modal fade" id="wait" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body" style="text-align: center;font-size:2rem;min-height: 200px;position:relative">

            <p class='v-center'>
          Sending Message Please Wait...
            </p>
      </div>
      </div>
      
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="thankyou" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body" style="padding:50px;text-align: center;font-size:2rem;min-height: 200px;position:relative;">

            <p class='text-center' style="line-height:1.5;">
                <strong>Thank You for Getting in Touch!</strong>

            </p>

            <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_f8swhg5f.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;margin:0 auto"  loop  autoplay></lottie-player>

        </div>
      </div>
    </div>
  </div>


<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>





<?php 
    include 'includes/footer.php';
?>


<script>

    $('#contact-form').submit(function(event) { //Trigger on form submit
    
            $('#wait').modal('show');
             //Prevent the default submit

             
            $('#name').empty(); 
            $('#email').empty();
            $('#message').empty();
    
            //Validate fields if required using jQuery
    
            var postForm = { //Fetch form data
                'name'     : $('#name').val(),
                'message'     : $('#message').val(),
                'email'     : $('#email').val()
            };
    
            $.ajax({ //Process the form using $.ajax()
                type      : 'POST', //Method type
                url       : 'submit-form.php', //Your form processing file URL
                data      : postForm, //Forms name
                dataType  : 'json',
                success   : function(data) {
                    if (data == "1") { //If fails
                        $('#wait').modal('hide');
                        $('#thankyou').modal('show');
                    }
                    else {                        
                        console.log(data);
                    }
                }
            });

            event.preventDefault();
        });
        
    </script>


</body>

</html>