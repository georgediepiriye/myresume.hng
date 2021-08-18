<!DOCTYPE html>
<html lang="en">
<head>
    <title>MyResume.hng</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive HTML5 Resume/CV Template for Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico">  
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/orbit-1.css">
</head> 

<body>
    <div style="display: initial;">
        
        <img class="nav-logo" src="assets/images/i4g.png" />
        <img class="nav-logo" src="assets/images/hng.png" />
        <img class="nav-logo" src="assets/images/zuri.png" style="float:right" />
        @if (session()->has('name'))
            <h5 style="margin-left: 10px;">Hello <span>{{ Str::ucfirst(session()->get('name') ) }}</span>, here's my resume</h5>
            
        @endif
     
        

    </div>
    <div class="wrapper mt-lg-5">
        <div class="sidebar-wrapper">
            <div class="profile-container">
                <img class="profile" src="assets/images/mypic1.jpg" alt="" />
                <h1 class="name">George Diepiriye</h1>
                <h3 class="tagline">Backend Developer</h3>
            </div><!--//profile-container-->
           
            <div class="contact-container container-block">
                <ul class="list-unstyled contact-list">
                    <li class="email"><i class="fas fa-envelope"></i><a href="mailto: yourname@email.com">georgediepiriye4u@gmail.com</a></li>
                    <li class="phone"><i class="fas fa-phone"></i><a href="tel:0123 456 789">+2348066738338</a></li>
                    <li class="linkedin"><i class="fab fa-linkedin-in"></i><a href="https://www.linkedin.com/in/georgediepiriye/" target="_blank">linkedin.com/in/georgediepiriye</a></li>
                    <li class="github"><i class="fab fa-github"></i><a href="github.com/georgediepiriye" target="_blank">github.com/georgediepiriye</a></li>
                    <li class="twitter"><i class="fab fa-twitter"></i><a href="#" target="_blank">@georgeDiepiriye</a></li>
                </ul>
            </div><!--//contact-container-->
            <hr>
            <div class="education-container container-block">
                <h2 class="container-block-title">Education</h2>
                <div class="item">
                    <h4 class="degree">MSc in Computer Science(In view)</h4>
                    <h5 class="meta">Ignatius Ajuru University,Port Harcourt</h5>
	                    <div class="time">2019 - 2021</div>
                </div><!--//item-->
                <div class="item">
                    <h4 class="degree">BSc in Computer Science</h4>
                    <h5 class="meta">Niger Delta University</h5>
                    <div class="time">2012 - 2016</div>
                </div><!--//item-->
            </div><!--//education-container-->
            
            <div class="languages-container container-block">
                <h2 class="container-block-title">Languages</h2>
                <ul class="list-unstyled interests-list">
                    <li>English <span class="lang-desc">(Native)</span></li>
                   
                </ul>
            </div><!--//interests-->
            
            <div class="interests-container container-block">
                <h2 class="container-block-title">Hobbies</h2>
                <ul class="list-unstyled interests-list">
                    <li>Reading</li>
                    <li>Traveling</li>
                    <li>Watching Movies</li>
                    <li>Going Swimming</li>
                </ul>
            </div><!--//interests-->

            <div class="interests-container container-block" style="border: 2px solid white;">
                <h2 class="container-block-title">Contact Me</h2>
                <form action="" method="POST">
                    <input name="email" type="email" placeholder="Enter email" style="padding: 5px;;width:220px; ">
                    <textarea name="message" placeholder="Enter message here" style="width:220px;margin-top:10px; padding-left:5px;padding-top:5px;"></textarea>
                    <button type="submit" class="btn btn-success" style="margin-top:10px;">Send</button>    

                </form>
            </div><!--//interests-->
            
        </div><!--//sidebar-wrapper-->
        
        <div class="main-wrapper">
            
            <section class="section summary-section">
                <h2 class="section-title"><span class="icon-holder"><i class="fas fa-user"></i></span>Career Profile</h2>
                <div class="summary">
                    <p>Innovative and result-oriented Software Engineer, with experience in building scalable web applications and API’s using modern architectures . Adept at developing, implementing and maintaining Laravel Web Applications. Effective multitasking skill, able to handle a high volume of simultaneous projects with complete accuracy and professionalism. I’m skilled in HTML, CSS ,Bootstrap, Laravel, Java, Git ,MySQL, PgSQL, building and working with third party API’s  and I also have basic knowledge of Google cloud as I’m currently taking the Pluralsight Google Cloud Engineering course.</p>
                </div><!--//summary-->
            </section><!--//section-->
            
            <section class="section experiences-section">
                <h2 class="section-title"><span class="icon-holder"><i class="fas fa-briefcase"></i></span>Experiences</h2>
                
                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">Backend Developer (Intern)</h3>
                            <div class="time">March 2021 - July 2021</div>
                        </div><!--//upper-row-->
                        <div class="company">Zuri Team</div>
                    </div><!--//meta-->
                    <div class="details">
                        <p>•	Led a team of designers, frontend and Backend developers  to build  web applications with Laravel</p>
                        <p>•	Wrote backend codes and  documentation for web applications</p>
                        <p>•	Integrated frontend codes with backend codes</p>
                        <p>•	Hosted and maintained web applications</p>
                        <p>•	Carried out all assigned tasks with complete professionalism</p>

                    </div><!--//details-->
                </div><!--//item-->
                
                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">Java Developer</h3>
                            <div class="time">2018 - 2020</div>
                        </div><!--//upper-row-->
                        <div class="company">Freelance</div>
                    </div><!--//meta-->
                    <div class="details">
                        <p>•	Built scalable and easy to maintain Enterprise web applications using modern architectures</p>
                        <p>•	Wrote, modified, and maintained software documentation and specifications.</p> 
                        <p>•	Involved in code reviews and ensure code quality across projects.</p>
                        <p>•	Collaborated with diverse programming teams to prototype and solve complex business problems.</p>
                        <p>•	Manages and analyses log files to find information and facilitate problem resolution.</p>

                    </div><!--//details-->
                </div><!--//item-->
                
                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">IT Support (NYSC) </h3>
                            <div class="time">Nov 2017 – Oct 2018 </div>
                        </div><!--//upper-row-->
                        <div class="company">Nigerian Maritime Administration and Safety Agency </div>
                    </div><!--//meta-->
                    <div class="details">
                       <p> •	Performed extensive diagnostics and troubleshooting with PCs, software, communications devices, servers and network connection issues in the eastern zonal office.</p> 
                       <p> •	Managed computer networks, hardware and software: installation, configuration, troubleshooting and access rights issues. </p> 
                       <p> •	Prepared templates for presentations. </p> 
                       <p> •	Responsible for Software deployment/virus checks and Co-managed the ICT e-service help desk. </p> 
                       <p> •	Responsible for AIS tracking of Vessels and International Ships using the Lloyds platform and prepared reports for enforcement.</p>  
                       <p> •	Set up new users' accounts and profiles and dealt with password issues.</p>  
                       <p> •	Tested and evaluated new technologies.</p>  
                       <p> •	Identified, addressed, and resolved all technical issues without compromising safety or productivity.</p>  

                    </div><!--//details-->
                </div><!--//item-->
                
            </section><!--//section-->
            
            <section class="section projects-section">
                <h2 class="section-title"><span class="icon-holder"><i class="fas fa-archive"></i></span>Projects</h2>
                <div class="intro">
                    <p>These are some of the projects i've worked on</p>
                </div><!--//intro-->
                <div class="item">
                    <span class="project-title"><a href="http://talesoftime.herokuapp.com/" target="_blank">TalesofTime</a></span> - <span class="project-tagline">A wrist watch ecommerce web app with admin panel. </span>
                    
                </div><!--//item-->
                <div class="item">
                    <span class="project-title"><a href="http://ayalo.herokuapp.com/" target="_blank">Ayalo</a></span> - <span class="project-tagline">A web app where people can hire items from others who have items to rent out.</span>
                </div><!--//item-->
            
              
            </section><!--//section-->
            
            <section class="skills-section section">
                <h2 class="section-title"><span class="icon-holder"><i class="fas fa-rocket"></i></span>Skills &amp; Proficiency</h2>
                <div class="skillset">        
                    <div class="item">
                        <h3 class="level-title">PHP &amp; Laravel</h3>
                        <div class="progress level-bar">
						    <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 99%" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100"></div>
						</div>                               
                    </div><!--//item-->
                    
                    <div class="item">
                        <h3 class="level-title">Java</h3>
                        <div class="progress level-bar">
						    <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
						</div>                              
                    </div><!--//item-->
                    
                 
                    
                    <div class="item">
                        <h3 class="level-title">HTML5 &amp; CSS</h3>
                        <div class="progress level-bar">
							    <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
						</div>                                
                    </div><!--//item-->
                    
                    <div class="item">
                        <h3 class="level-title">MySQL</h3>
                        <div class="progress level-bar">
						    <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
						</div>                                  
                    </div><!--//item-->
                    
                    <div class="item">
                        <h3 class="level-title">Google Cloud</h3>
                        <div class="progress level-bar">
						    <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
						</div>                                 
                    </div><!--//item-->
                    
                </div>  
            </section><!--//skills-section-->
            
        </div><!--//main-body-->
    </div>
 
    <footer class="footer">
        <div class="text-center">
            <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <small class="copyright">Designed with <i class="fas fa-heart"></i> by <a href="http://themes.3rdwavemedia.com" target="_blank">George Diepiriye</a> for developers</small>
        </div><!--//container-->
    </footer><!--//footer-->
        
</body>
</html> 

