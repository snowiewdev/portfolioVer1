<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Snowie Wong | A Web Developer based in Hong Kong </title>
  <meta name="keywords" content="snowie wong, web developer, web design, web developer portfolio, hong kong, SWdevelopment">
  <meta name="description" content="Welcome to the portfolio page of Snowie Wong, a web developer based in Hong Kong.">
  <link rel="icon" type="image/png" href="./media/logo.png">
  <!--external resources-->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Quicksand&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="./js/jquery.pagepiling.css">
  <link rel="stylesheet" href="./style/main.css">  
</head>

<body>

  <div class="loader">
    <lottie-player src="./js/cat-loading.json"  background="transparent"  speed="1"  style="width: 100px; height: 100px;"  loop  autoplay></lottie-player>
    <p>Welcome:3</p>
  </div>

  <div class="nav-bar">
    <div class="logo">
      <a data-menuanchor="home" href="/">
        <img src="./media/logo.svg" alt="SWdevelopment">
      </a>
    </div>
    <div id="menu" class="nav-list">
      <a data-menuanchor="about" href="#about" data-aos="fade-down" data-aos-duration="200"> About </a>
      <a data-menuanchor="portfolio" href="#portfolio" data-aos="fade-down" data-aos-duration="400"> Portfolio </a>
      <a data-menuanchor="services" href="#services" data-aos="fade-down" data-aos-duration="700"> Services </a>
      <a data-menuanchor="contact" href="#contact" data-aos="fade-down" data-aos-duration="1000"> Contact </a>
    </div>
    <div class="burger">
      <svg onclick="showMenu()" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><g><path d="M2 6a1 1 0 0 1 1-1h18a1 1 0 1 1 0 2H3a1 1 0 0 1-1-1z"/><path d="M2 12.032a1 1 0 0 1 1-1h18a1 1 0 1 1 0 2H3a1 1 0 0 1-1-1z"/><path d="M3 17.064a1 1 0 1 0 0 2h18a1 1 0 0 0 0-2H3z"/></g></svg>
    </div>
  </div>

  <div class="mobile-menu">
      <svg onclick="hideMenu()" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 15 15"><g><path d="M12.854 2.854a.5.5 0 0 0-.708-.708L7.5 6.793L2.854 2.146a.5.5 0 1 0-.708.708L6.793 7.5l-4.647 4.646a.5.5 0 0 0 .708.708L7.5 8.207l4.646 4.647a.5.5 0 0 0 .708-.708L8.207 7.5l4.647-4.646z"/></g></svg>
      <a onclick="hideMenu()" href="#home"> Home </a>
      <a onclick="hideMenu()" href="#about"> About </a>
      <a onclick="hideMenu()" href="#portfolio"> Portfolio </a>
      <a onclick="hideMenu()" href="#services"> Services </a>
      <a onclick="hideMenu()" href="#contact"> Contact </a>
  </div>

  <div id="pagepiling">

    <div id="home" class="section">

      <div class="navbar-space"></div>

      <div class="home-middle">
          <div class="home-text" data-aos="fade-left" data-aos-duration="1200">
            <p> Hi, I'm <span class="highlight">Snowie Wong </span>, <br/>
              a Web Developer based in Hong Kong. <br/>
              I love <span class="typing"> </span>
            </p>
            <br>
            <p class="highlight"> Let's make your dream website alive. </p>
            <br>
            <div class="scroll">
              <a href="#about" class="button"> Learn More </a>
              <a href="#contact" class="button2"> Contact Me </a>
            </div>
          </div>
      </div>

      <div class="home-bottom">
        <div class="home-mail" data-aos="fade-up"> 
          <a href="mailto:hello@snowiewongdev.com"> 
            <span> hello@snowiewongdev.com </span>
          </a> 
        </div>
        <div>
          <a href="https://www.freecodecamp.org/snowie508" target="_blank" title="freeCodeCamp" data-aos="fade-up" data-aos-duration="300">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M6.03 6C4.774 6 1 10.166 1 16.318C1 21.708 4.653 26 6.088 26c.39 0 .912-.427.912-.863c0-.353-.38-.828-1.291-1.825c-.208-.229-.39-.427-.486-.552C3.859 20.977 2.974 18.528 3 15.979c.027-2.621 1.011-5.349 3.064-7.569l.135-.144c.338-.36.801-.852.801-1.342C7 6.434 6.457 6 6.03 6zm19.94 0c-.427 0-.97.434-.97.924c0 .49.463.983.8 1.342l.136.144c2.053 2.22 3.037 4.948 3.064 7.569c.026 2.549-.859 4.998-2.223 6.78c-.096.126-.278.325-.486.553C25.38 24.31 25 24.785 25 25.137c0 .436.522.863.912.863C27.347 26 31 21.707 31 16.318C31 10.166 27.225 6 25.97 6zM13.093 7.025c-.134.033-.215.104-.215.227c0 .123.131.205.234.256c.472.287 1.006 1.097 1.006 1.959c0 2.369-2.965 4.522-2.965 6.984c-.01 2.072 1.448 3.724 3.356 4.422c.226.092.625.266.625-.062c0-.134-.112-.143-.215-.184a1.955 1.955 0 0 1-.984-.781c-.421-.616-.514-1.242-.514-1.98c0-1.642 2.268-1.94 2.268-3.59c0-.627-.4-.811-.4-.985c0-.113.04-.113.153-.113c.411 0 .975.676 1.149 1.015c.113.236.123.309.123.565c0 .359-.031.728-.031 1.097c0 1.385 1.63 1.015 1.63.348c0-.307-.183-.593-.183-.89c0-.043 0-.063.04-.063c.175 0 .481.39.563.514c.297.46.442 1.065.442 1.609c0 1.662-1.518 2.512-1.518 2.871c0 .052.153.402.625.104C19.8 19.568 21 17.906 21 15.742c0-1.724-.44-2.964-1.64-4.232c-.206-.216-.843-.873-1.16-.873c-.422 0 .368.953.368 1.6c0 .368-.246.636-.625.636c-.595 0-.75-1.303-.822-1.713c-.297-1.733-.656-2.985-2.379-3.795c-.4-.193-1.25-.437-1.65-.34zM10.002 23c-.557 0-.979.438-.979 1.016c0 .543.44.984.979.984H22.16c.197 0 .84-.074.84-1.016c0-.598-.33-.984-.84-.984H10.002z"/></svg>
          </a>
          <a href="https://codepen.io/snowie508" target="_blank"  title="Codepen" data-aos="fade-up" data-aos-duration="600">
            <svg xmlns="http://www.w3.org/2000/svg" width="1rem" height="1rem" viewBox="0 0 1792 1792"><path d="M216 1169l603 402v-359L485 989zm-62-144l193-129l-193-129v258zm819 546l603-402l-269-180l-334 223v359zm-77-493l272-182l-272-182l-272 182zM485 803l334-223V221L216 623zm960 93l193 129V767zm-138-93l269-180l-603-402v359zm485-180v546q0 41-34 64l-819 546q-21 13-43 13t-43-13L34 1233q-34-23-34-64V623q0-41 34-64L853 13q21-13 43-13t43 13l819 546q34 23 34 64z"/></svg>
          </a>
          <a href="https://www.linkedin.com/in/snowie-wong/" target="_blank"  title="LinkedIn" data-aos="fade-up" data-aos-duration="1000">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1em" height="1em"  viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037c-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85c3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 0 1-2.063-2.065a2.064 2.064 0 1 1 2.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
          </a>
          <a href="https://github.com/snowiewdev" target="_blank" title="GitHub" data-aos="fade-up" data-aos-duration="1400">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1.2em" height="1.2em" viewBox="0 0 16 16"><path d="M8 .198a8 8 0 0 0-2.529 15.591c.4.074.547-.174.547-.385c0-.191-.008-.821-.011-1.489c-2.226.484-2.695-.944-2.695-.944c-.364-.925-.888-1.171-.888-1.171c-.726-.497.055-.486.055-.486c.803.056 1.226.824 1.226.824c.714 1.223 1.872.869 2.328.665c.072-.517.279-.87.508-1.07c-1.777-.202-3.645-.888-3.645-3.954c0-.873.313-1.587.824-2.147c-.083-.202-.357-1.015.077-2.117c0 0 .672-.215 2.201.82A7.672 7.672 0 0 1 8 4.066c.68.003 1.365.092 2.004.269c1.527-1.035 2.198-.82 2.198-.82c.435 1.102.162 1.916.079 2.117c.513.56.823 1.274.823 2.147c0 3.073-1.872 3.749-3.653 3.947c.287.248.543.735.543 1.481c0 1.07-.009 1.932-.009 2.195c0 .213.144.462.55.384A8 8 0 0 0 8.001.196z"/></svg>
          </a>
        </div>
      </div>
    </div>

    <div id="about" class="section">

      <div class="navbar-space2"></div>

      <div class="split">
        <div class="about1">

          <div class="about1-top">
            <div class="title1">
              <h1> About </h1>
              <hr>
            </div>
            <div class="me"> </div>
          </div>

          <div class="text-box">
            <h3> My Story </h3>
              <span><b> Story Length: </b></span>
              <span class="versions">
                <a class="version">Short</a>
                <a class="version active">Middle</a>
                <a class="version">Long</a>
              </span>
            <br/>

            <div class="stories">
              <p class="story"> Snowie is trying her very best. <br/> Let's give her applause to show some support :D </p>

              <p class="story"> Snowie learnt about programming in high school. Though she didn’t study computer science in university, she started self-learning on front-end web development via online channels and developed her interest on it. <br/><br/>
              Since then, she has continued self-learning and decided to pursue web development as her career. She would be grateful if you could participate in part of her journey.  </p>

              <p class="story"> 
                Snowie studied ICT in high school and learnt about programming. Though she didn’t study computer science in university, she started self-learning on front-end web development via online channels and found that she loves building cool websites with animations and functionality, which gives her feeling like a wizard. <br/><br/>
                Since then, she has continued self-learning and decided to pursue web development as her lifelong career. She would be grateful if you could participate in part of her journey. 
              </p>
            </div>

          </div>

          <a class="view-more more-button"> View More → </a>

        </div>

        <div class="about2">
          <div class="text-box2">
            <h3> Certifications </h3>
            <p> <b> FreeCodeCamp | 2020 </b></p>
            <ul>
              <li> Responsive Web Design Developer Certification </li>
              <li> JavaScript Algorithms and Data Structure Developer Certification </li>
              <li> Front End Libraries Developer Certification </li>
            </ul>
            <br/>

            <p> <b> Hong Kong Polytechnic Univerisity | 2018 </b></p>
            <ul>
              <li> Bachelor of Science (Second Honours)</li>
            </ul>

          </div>

          <div class="text-box2">
            <h3> Technologies that I use </h3>
            <div class="technology">
              <img src="./media/tech/html.svg" class="" alt="HTML" title="HTML">
              <img src="./media/tech/css.svg" class="" alt="CSS" title="CSS">
              <img src="./media/tech/sass.png" alt="SCSS" title="SCSS">
              <img src="./media/tech/js.svg" alt="Javascript" title="Javascript">
              <img src="./media/tech/php.svg" alt="PHP" title="PHP">
              <img src="./media/tech/vscode.png" alt="VS Code" title="VS Code">
              <img src="./media/tech/wordpress.svg" alt="Wordpress" title="Wordpress">
              <img src="./media/tech/woo.png" alt="Woo-Commerce" class="long-img" title="Woo-Commerce">
              <img src="./media/tech/oxygen.png" alt="Oxygen" class="long-img" title="Oxygen">
              <img src="./media/tech/elementor.png" alt="Elementor" class="long-img" title="Elementor">
              <img src="./media/tech/xd.svg" alt="Adobe XD" title="Adobe XD">
              <img src="./media/tech/illustrator.svg" alt="Adobe Illustrator" title="Adobe Illustrator">
            </div>
          </div>
          
          <a class="go-back more-button"> ←  Go Back </a>

        </div>

      </div>
    
    </div>

    <div id="portfolio" class="section">

      <div class="navbar-space"></div>

      <div class="split portfolio">

        <div class="portfolio1">
          
            <div class="title2" data-aos="fade-left">
              <h1> Portfolio </h1>
              <hr>
            </div>

          <div class="portfolio-box">
            <h3> Aromatic </h3>
            <img src="./media/aromatic.jpg" alt="aromatic photo">
            <div class="overlay">
                <p> A demo brochure website for a perfume shop, built with code only.</p>
                <p class="middle"> | HTML5 | SCSS | JS | AOS.js | Glide.js |</p>
                <a href="https://aromatic-snowiewdev.netlify.app/" class="button" target="_blank"> 
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  width="0.8em" height="0.8em" viewBox="0 0 1200 1200"><path d="M320.883 1200l400.642-400.664L600.234 678.07l77.836-77.836l121.266 121.289L1200 320.883L879.117 0l-400.64 400.664L599.766 521.93l-77.836 77.836l-121.266-121.289L0 879.117L320.883 1200zm0-156.619L156.628 879.127l244.031-244.031l42.973 42.974l-78.556 78.555l78.31 78.31l78.557-78.556l42.973 42.974l-244.033 244.028zm478.476-478.477l-42.974-42.974l78.557-78.555l-78.311-78.31l-78.556 78.556l-42.984-42.984l244.031-244.055l164.273 164.264l-244.052 244.033l.016.025z"/></svg>
                  View Website 
                </a>
            </div>
          </div>

          <div class="portfolio-box">
            <h3> Donutly </h3>
            <img src="./media/donutly.jpg" alt="donutly photo">
            <div class="overlay">
              <p> A demo e-commerce website for a donut shop, with email subscription service, blog and connection with IG & FB pages.</p>
              <p class="middle"> | WordPress | Oxygen | WooCommerce | CSS | </p>
              <a href="https://donutly.snowiewongdev.com/" class="button" target="_blank"> 
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  width="0.8em" height="0.8em" viewBox="0 0 1200 1200"><path d="M320.883 1200l400.642-400.664L600.234 678.07l77.836-77.836l121.266 121.289L1200 320.883L879.117 0l-400.64 400.664L599.766 521.93l-77.836 77.836l-121.266-121.289L0 879.117L320.883 1200zm0-156.619L156.628 879.127l244.031-244.031l42.973 42.974l-78.556 78.555l78.31 78.31l78.557-78.556l42.973 42.974l-244.033 244.028zm478.476-478.477l-42.974-42.974l78.557-78.555l-78.311-78.31l-78.556 78.556l-42.984-42.984l244.031-244.055l164.273 164.264l-244.052 244.033l.016.025z"/></svg>
                View Website </a>
            </div>
          </div>

          <a class="view-more more-button"> View More → </a>
        </div>

        <div class="portfolio2">
          
            <div class="title2">
              <h1> Portfolio </h1>
              <hr>
            </div>

          <div class="portfolio-box">
            <h3> Claire Dental Clinic </h3>
            <img src="./media/clinic.jpg" alt="Claire Dental Clinic Photo">
            <div class="overlay">
              <p> A bilingual website with single-page layout, booking system from Calendly for treatment session booking & scroll-to-top button. </p>
              <p class="middle"> | WordPress | Elementor | CSS | Calendly | </p>
              <a href="https://clairedentalclinic.snowiewongdev.com/" class="button" target="_blank"> 
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  width="0.8em" height="0.8em" viewBox="0 0 1200 1200"><path d="M320.883 1200l400.642-400.664L600.234 678.07l77.836-77.836l121.266 121.289L1200 320.883L879.117 0l-400.64 400.664L599.766 521.93l-77.836 77.836l-121.266-121.289L0 879.117L320.883 1200zm0-156.619L156.628 879.127l244.031-244.031l42.973 42.974l-78.556 78.555l78.31 78.31l78.557-78.556l42.973 42.974l-244.033 244.028zm478.476-478.477l-42.974-42.974l78.557-78.555l-78.311-78.31l-78.556 78.556l-42.984-42.984l244.031-244.055l164.273 164.264l-244.052 244.033l.016.025z"/></svg>
                View Website </a>
            </div>
          </div>
    
          <div class="portfolio-box">
            <h3> Okmen Systems & Services Ltd. </h3>
            <img src="./media/okmen.jpg" alt="Okmen Photo">
            <div class="overlay">
              <p> An official company website for Okmen Systems & Services Ltd. with online contact form.</p>
              <p class="middle"> | WordPress | Elementor | SMTP | CSS | </p>
              <a href="https://www.okmen.com.hk/" class="button" target="_blank"> 
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  width="0.8em" height="0.8em" viewBox="0 0 1200 1200"><path d="M320.883 1200l400.642-400.664L600.234 678.07l77.836-77.836l121.266 121.289L1200 320.883L879.117 0l-400.64 400.664L599.766 521.93l-77.836 77.836l-121.266-121.289L0 879.117L320.883 1200zm0-156.619L156.628 879.127l244.031-244.031l42.973 42.974l-78.556 78.555l78.31 78.31l78.557-78.556l42.973 42.974l-244.033 244.028zm478.476-478.477l-42.974-42.974l78.557-78.555l-78.311-78.31l-78.556 78.556l-42.984-42.984l244.031-244.055l164.273 164.264l-244.052 244.033l.016.025z"/></svg>
                View Website </a>
            </div>
          </div>

          <a class="go-back more-button"> ←  Go Back </a>
        </div>

       

      </div> 

    </div>

    <div id="services" class="section">
      <div class="navbar-space2"></div>

      <div class="split">
        <div class="service1">

          <div class="title1">
            <h1> Services </h1>
            <hr>
          </div>

          <div class="service-item"> 
            <h3> Website Design & Development </h3>
            <div class="icon-left">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	          viewBox="0 0 504 504" style="enable-background:new 0 0 504 504;" xml:space="preserve">
            <circle style="fill:#FFD05B;" cx="252" cy="252" r="252"/>
            <rect x="94.5" y="94.5" style="fill:#54C0EB;" width="315" height="315"/>
            <rect x="122.1" y="160.7" style="fill:#FFFFFF;" width="259.9" height="221.2"/>
            <rect x="122.1" y="118" style="fill:#F1543F;" width="32.5" height="19.2"/>
            <rect x="175.7" y="118" style="fill:#FFFFFF;" width="32.5" height="19.2"/>
            <rect x="229.4" y="118" style="fill:#2B3B4E;" width="32.5" height="19.2"/>
            <circle style="fill:#324A5E;" cx="252" cy="271.3" r="80.9"/>
            <g>
              <polygon style="fill:#FFFFFF;" points="215.2,304.8 180.2,271.3 215.2,237.9 225.6,248.8 202,271.3 225.6,293.9 	"/>
              <polygon style="fill:#FFFFFF;" points="288.8,304.8 278.4,293.9 302,271.3 278.4,248.8 288.8,237.9 323.8,271.3 	"/>
              <rect x="244.499" y="213.507" transform="matrix(-0.9299 -0.3678 0.3678 -0.9299 386.5471 616.2808)" style="fill:#FFFFFF;" width="15" height="115.599"/>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            </svg>
            <ul class="feature">
              <li>Responsive Design</li>
              <li>Landing Page</li>
              <li>Online Store</li>
              <li>Template-based Website</li>
              <li>Tailor-made Website</li>
              <li>WordPress CMS</li>
            </ul>
            </div>
            <hr>
            <ul class="adv">
              <li>Increase your reach to costumers</li>
              <li>Automatize selling process</li>
              <li>Manage your content easily</li>
            </ul>   
          </div>

          <div class="service-item"> 
            <h3> Website Maintanence </h3>
            <div class="icon-left">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" x="0" y="0" viewBox="0 0 504 504" style="enable-background:new 0 0 512 512" xml:space="preserve"><g>
              <circle xmlns="http://www.w3.org/2000/svg" cx="252" cy="252" r="252" fill="#90dfaa" data-original="#84dbff" class=""/>
              <polygon xmlns="http://www.w3.org/2000/svg" points="277.7,94.5 114.2,94.5 114.2,409.3 351.4,409.3 351.4,168.3 " fill="#ffffff" data-original="#ffffff"/>
              <polygon xmlns="http://www.w3.org/2000/svg" points="277.7,168.3 351.4,168.3 277.7,94.5 " fill="#acb3ba" data-original="#acb3ba"/>
              <rect xmlns="http://www.w3.org/2000/svg" x="133.7" y="115.4" width="124.4" height="56.1" fill="#54c0eb" data-original="#54c0eb"/>
              <rect xmlns="http://www.w3.org/2000/svg" x="160.7" y="195.3" width="144.1" height="11.6" fill="#f1543f" data-original="#f1543f"/>
              <g xmlns="http://www.w3.org/2000/svg">
                <rect x="140.3" y="232.5" width="184.9" height="10.4" fill="#acb3ba" data-original="#acb3ba"/>
                <rect x="140.3" y="256.7" width="184.9" height="10.4" fill="#acb3ba" data-original="#acb3ba"/>
                <rect x="140.3" y="281" width="184.9" height="10.4" fill="#acb3ba" data-original="#acb3ba"/>
                <rect x="140.3" y="305.2" width="88.7" height="10.4" fill="#acb3ba" data-original="#acb3ba"/>
                <rect x="140.3" y="329.5" width="184.9" height="10.4" fill="#acb3ba" data-original="#acb3ba"/>
                <rect x="140.3" y="353.7" width="184.9" height="10.4" fill="#acb3ba" data-original="#acb3ba"/>
                <rect x="140.3" y="378" width="111.6" height="10.4" fill="#acb3ba" data-original="#acb3ba"/>
              </g>
              <g xmlns="http://www.w3.org/2000/svg">
                <path d="M161.9,133.7c2.6,2.3,3.9,5.6,3.9,9.8s-1.3,7.5-3.8,9.9s-6.3,3.7-11.5,3.7h-9.2v-26.9h9.5   C155.7,130.1,159.4,131.3,161.9,133.7z M157.5,149.7c1.5-1.4,2.2-3.4,2.2-6s-0.7-4.7-2.2-6.1c-1.5-1.4-3.7-2.1-6.8-2.1h-3.4v16.4   h3.8C153.9,151.7,156.1,151,157.5,149.7z" fill="#ffffff" data-original="#ffffff"/>
                <path d="M193.6,153.3c-2.7,2.7-6.1,4-10.1,4s-7.3-1.3-10-4s-4.1-6-4.1-9.9c0-4,1.4-7.3,4.1-9.9s6.1-4,10-4   s7.3,1.3,10.1,4c2.7,2.7,4.1,6,4.1,9.9C197.7,147.4,196.4,150.7,193.6,153.3z M191.6,143.4c0-2.4-0.8-4.4-2.3-6.1   c-1.5-1.7-3.4-2.5-5.7-2.5c-2.2,0-4.1,0.8-5.7,2.5c-1.5,1.7-2.3,3.7-2.3,6.1s0.8,4.4,2.3,6.1c1.5,1.7,3.4,2.5,5.7,2.5   c2.2,0,4.1-0.8,5.7-2.5C190.8,147.9,191.6,145.8,191.6,143.4z" fill="#ffffff" data-original="#ffffff"/>
                <path d="M215.2,151.7c3,0,5.4-1.2,7.2-3.5l3.8,4c-3.1,3.4-6.7,5.2-10.8,5.2s-7.6-1.3-10.2-3.9   c-2.7-2.6-4-5.9-4-9.9s1.4-7.3,4.1-10c2.7-2.7,6.1-4,10-4c4.4,0,8.1,1.7,11.1,5l-3.7,4.2c-1.9-2.4-4.3-3.5-7.1-3.5   c-2.3,0-4.2,0.7-5.8,2.2s-2.4,3.5-2.4,6s0.8,4.5,2.3,6C211.2,151,213,151.7,215.2,151.7z" fill="#ffffff" data-original="#ffffff"/>
                <path d="M237.3,135.5c-0.6,0.5-0.9,1.1-0.9,1.9c0,0.8,0.4,1.4,1.1,1.9c0.7,0.5,2.3,1,4.9,1.6   c2.6,0.6,4.5,1.6,6,2.8c1.4,1.3,2.1,3.1,2.1,5.5s-0.9,4.4-2.7,5.9s-4.2,2.3-7.1,2.3c-4.3,0-8.1-1.6-11.5-4.7l3.6-4.4   c2.9,2.5,5.6,3.8,8,3.8c1.1,0,2-0.2,2.6-0.7s0.9-1.1,0.9-1.9s-0.3-1.5-1-1.9c-0.7-0.5-2-1-4-1.4c-3.1-0.7-5.4-1.7-6.9-2.9   s-2.2-3.1-2.2-5.6c0-2.6,0.9-4.5,2.8-5.9c1.8-1.4,4.1-2.1,6.9-2.1c1.8,0,3.6,0.3,5.4,0.9c1.8,0.6,3.4,1.5,4.7,2.6l-3,4.4   c-2.3-1.8-4.8-2.7-7.2-2.7C238.7,134.8,237.9,135,237.3,135.5z" fill="#ffffff" data-original="#ffffff"/>
              </g>
              <path xmlns="http://www.w3.org/2000/svg" d="M429.1,334.8v-60.2c-41.4-1.5-59.7-25.3-59.7-25.3s-18.3,23.9-59.7,25.3v60.2c0,0-4.4,52.3,59.7,74.7  C433.5,387.1,429.1,334.8,429.1,334.8z" fill="#324a5e" data-original="#324a5e"/>
              <path xmlns="http://www.w3.org/2000/svg" d="M376.8,324.3h38.7V287c-16.7-2.5-29.5-8.2-38.7-14V324.3z" fill="#ffd05b" data-original="#ffd05b"/>
              <path xmlns="http://www.w3.org/2000/svg" d="M362.1,324.3V273c-9.2,5.8-22,11.5-38.7,14v37.3H362.1z" fill="#ffffff" data-original="#ffffff"/>
              <path xmlns="http://www.w3.org/2000/svg" d="M362.1,339.1h-38.7c0.5,9.3,4.9,36,38.7,52.6V339.1z" fill="#ffd05b" data-original="#ffd05b"/>
              <path xmlns="http://www.w3.org/2000/svg" d="M376.8,339.1v52.6c33.9-16.7,38.2-43.5,38.7-52.6H376.8z" fill="#ffffff" data-original="#ffffff"/>
              <g xmlns="http://www.w3.org/2000/svg">
              </g>
              <g xmlns="http://www.w3.org/2000/svg">
              </g>
              <g xmlns="http://www.w3.org/2000/svg">
              </g>
              <g xmlns="http://www.w3.org/2000/svg">
              </g>
              <g xmlns="http://www.w3.org/2000/svg">
              </g>
              <g xmlns="http://www.w3.org/2000/svg">
              </g>
              <g xmlns="http://www.w3.org/2000/svg">
              </g>
              <g xmlns="http://www.w3.org/2000/svg">
              </g>
              <g xmlns="http://www.w3.org/2000/svg">
              </g>
              <g xmlns="http://www.w3.org/2000/svg">
              </g>
              <g xmlns="http://www.w3.org/2000/svg">
              </g>
              <g xmlns="http://www.w3.org/2000/svg">
              </g>
              <g xmlns="http://www.w3.org/2000/svg">
              </g>
              <g xmlns="http://www.w3.org/2000/svg">
              </g>
              <g xmlns="http://www.w3.org/2000/svg">
              </g>
            </g></svg>
            <ul class="feature">
              <li>Regular Backup</li>
              <li>Website Updates</li>
              <li>SSL Certificate</li>
              <li>Firewall Security</li>
            </ul>
            </div>
            <hr>
            <ul class="adv">
              <li>Enhance website security & stability</li>
              <li>Enhance visitors' trust on your business</li>
            </ul>
          </div>

          <a class="view-more more-button"> View More → </a>

        </div>

        <div class="service2">

          <div class="service-item">
            <h3> Domain & Hosting </h3> 
            <div class="icon-left">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 504 504" style="enable-background:new 0 0 504 504;" xml:space="preserve">
            <circle style="fill:#84DBFF;" cx="252" cy="252" r="252"/>
            <rect x="94.5" y="94.5" style="fill:#324A5E;" width="315" height="315"/>
            <g>
              <rect x="122.1" y="161.6" style="fill:#FFFFFF;" width="259.9" height="220"/>
              <rect x="122.1" y="118.3" style="fill:#FFFFFF;" width="32.5" height="19.4"/>
            </g>
            <rect x="175.7" y="118.3" style="fill:#F9B54C;" width="32.5" height="19.4"/>
            <rect x="229.4" y="118.3" style="fill:#54C0EB;" width="32.5" height="19.4"/>
            <g>
            <path style="fill:#ACB3BA;" d="M345.7,293.6h-12.8c-1.8,9.9-5.3,19.3-10.6,28c-0.2-0.1-0.5-0.3-0.7-0.4c-1.3-0.7-2.6-1.4-3.9-2
              c-0.4-0.2-0.7-0.4-1.1-0.5c-1.7-0.8-3.5-1.6-5.3-2.3c-0.4-0.2-0.8-0.3-1.2-0.5c-1.5-0.6-3-1.1-4.5-1.7c-0.6-0.2-1.2-0.4-1.8-0.6
              c-1.6-0.5-3.2-1-4.8-1.5c-0.3-0.1-0.6-0.2-0.9-0.3v-0.1H298c0.1-0.7,0.2-1.4,0.4-2.1c0.1-0.7,0.3-1.5,0.4-2.2
              c0.4-2.8,0.8-5.6,1.2-8.5v-0.1c0.2-1.7,0.3-3.5,0.4-5.2h-12.7c-0.1,1.1-0.1,2.3-0.2,3.4c0,0.1,0,0.2,0,0.3
              c-0.4,3.6-0.9,7.1-1.5,10.6c-0.1,0.4-0.1,0.7-0.2,1.1c-0.7-0.1-1.4-0.2-2.1-0.4c-0.7-0.1-1.5-0.3-2.2-0.4c-2.7-0.4-5.5-0.8-8.3-1.2
              c-0.2,0-0.3,0-0.5-0.1c-3-0.3-5.9-0.6-9-0.7c-0.8,0-1.6-0.1-2.4-0.1c-0.9,0-1.8-0.1-2.7-0.1v-12.4H246V306c-0.9,0-1.8,0.1-2.7,0.1
              c-0.8,0-1.6,0.1-2.3,0.1c-3,0.2-6,0.4-9,0.7c-0.2,0-0.3,0-0.5,0.1c-2.8,0.3-5.6,0.7-8.3,1.2c-0.7,0.1-1.5,0.2-2.2,0.4
              c-0.7,0.1-1.4,0.2-2.1,0.4c-0.1-0.4-0.1-0.7-0.2-1.1c-0.6-3.5-1.1-7-1.5-10.6c0-0.1,0-0.3,0-0.4c-0.1-1.1-0.1-2.3-0.2-3.4h-12.7
              c0.1,1.7,0.2,3.5,0.4,5.2l0,0c0.3,2.9,0.7,5.8,1.2,8.6c0.1,0.7,0.2,1.4,0.3,2.1s0.2,1.5,0.4,2.2h-0.1v0.1c-0.3,0.1-0.6,0.2-0.9,0.3
              c-1.6,0.5-3.2,0.9-4.7,1.4c-0.6,0.2-1.2,0.4-1.8,0.6c-1.5,0.5-3,1.1-4.4,1.6c-0.4,0.2-0.9,0.3-1.3,0.5c-1.8,0.7-3.6,1.5-5.3,2.3
              c-0.4,0.2-0.8,0.4-1.2,0.6c-1.3,0.6-2.6,1.3-3.8,2c-0.2,0.1-0.5,0.3-0.8,0.4c-5.3-8.7-8.9-18.1-10.6-28h-12.8
              c1.9,12.3,6.2,24.1,12.8,34.8l-0.2,0.1l3.8,5.3l0,0l3.6,5l0.2-0.1c16.6,20.4,41.1,33.1,67.2,34.8v0.2h12.6v-0.2
              c26.2-1.8,50.6-14.4,67.2-34.9l0.2,0.1l3.6-5l0,0l3.8-5.3l-0.2-0.1C339.4,317.7,343.7,305.9,345.7,293.6z M189.2,332
              c0.1-0.1,0.2-0.1,0.3-0.2c1.3-0.7,2.6-1.4,4.1-2c0.1-0.1,0.3-0.1,0.4-0.2c1.3-0.6,2.6-1.1,4-1.7c0.5-0.2,1-0.4,1.5-0.6
              c1-0.4,2.1-0.8,3.2-1.2c0.6-0.2,1.2-0.4,1.8-0.6c1.1-0.4,2.2-0.7,3.3-1c0.4-0.1,0.7-0.2,1.1-0.3c0,0,0,0,0,0.1
              c0.8,2.8,1.6,5.5,2.5,8.1c0.2,0.6,0.4,1.2,0.6,1.9c0.9,2.5,1.9,5,2.9,7.3c0.1,0.3,0.3,0.6,0.4,0.9c0.9,2.1,1.9,4.1,3,6
              c0.3,0.5,0.5,1,0.8,1.4c1.2,2,2.3,3.9,3.6,5.7c0.1,0.1,0.1,0.2,0.2,0.4C210,350.9,198.3,342.7,189.2,332z M245.7,359.7
              c-0.1-0.1-0.2-0.1-0.3-0.2c-1.1-0.5-2.1-1.1-3.2-1.8c-0.1-0.1-0.3-0.2-0.4-0.3c-1-0.7-1.9-1.5-2.8-2.4c-0.2-0.2-0.5-0.4-0.7-0.7
              c-1-1-2-2.1-3-3.3c-0.2-0.2-0.3-0.4-0.5-0.6c-0.9-1.1-1.7-2.3-2.5-3.6c-0.2-0.3-0.4-0.6-0.6-0.9c-0.9-1.5-1.8-3-2.7-4.6
              c-0.1-0.3-0.3-0.6-0.4-0.9c-0.8-1.5-1.5-3-2.2-4.6c-0.2-0.4-0.3-0.7-0.5-1.1c-0.8-1.9-1.5-3.8-2.2-5.8c-0.1-0.4-0.2-0.8-0.4-1.1
              c-0.6-1.8-1.2-3.7-1.7-5.6c-0.1-0.2-0.1-0.5-0.2-0.7c0.4-0.1,0.7-0.1,1.1-0.2c3.6-0.6,7.2-1.2,10.8-1.6c0.2,0,0.5,0,0.7-0.1
              c3.5-0.4,7-0.6,10.5-0.8c0.4,0,0.9,0,1.3,0v40.9H245.7z M280.4,328.9c-0.7,2-1.5,4-2.2,5.8c-0.2,0.4-0.3,0.7-0.5,1.1
              c-0.7,1.6-1.4,3.2-2.2,4.7c-0.1,0.3-0.3,0.6-0.4,0.9c-0.9,1.6-1.8,3.2-2.7,4.7c-0.2,0.3-0.4,0.6-0.6,0.9c-0.8,1.3-1.7,2.5-2.6,3.6
              c-0.1,0.2-0.3,0.4-0.4,0.6c-1,1.2-2,2.3-3,3.3c-0.2,0.2-0.5,0.4-0.7,0.7c-0.9,0.9-1.9,1.7-2.8,2.4c-0.1,0.1-0.3,0.2-0.4,0.3
              c-1.1,0.7-2.1,1.3-3.2,1.8c-0.1,0.1-0.2,0.1-0.3,0.1v-41c0.4,0,0.9,0,1.3,0c3.5,0.2,7,0.4,10.5,0.8c0.2,0,0.5,0,0.7,0.1
              c3.7,0.4,7.3,1,10.9,1.6c0.4,0.1,0.7,0.1,1.1,0.2c-0.1,0.2-0.1,0.5-0.2,0.7c-0.6,2-1.1,3.9-1.8,5.7
              C280.7,328.2,280.5,328.5,280.4,328.9z M281,355.9c0.1-0.1,0.1-0.2,0.2-0.4c1.2-1.8,2.4-3.7,3.6-5.7c0.3-0.5,0.5-1,0.8-1.4
              c1-1.9,2-3.8,2.9-5.9c0.1-0.3,0.3-0.6,0.4-0.9c1-2.3,2-4.7,2.9-7.3c0.2-0.6,0.4-1.3,0.7-1.9c0.9-2.6,1.7-5.3,2.5-8.1l0,0
              c0.4,0.1,0.7,0.2,1.1,0.3c1.2,0.3,2.3,0.7,3.4,1c0.6,0.2,1.1,0.4,1.7,0.6c1.1,0.4,2.2,0.8,3.3,1.2c0.5,0.2,1,0.4,1.4,0.5
              c1.4,0.6,2.8,1.1,4.1,1.7c0.1,0,0.2,0.1,0.3,0.1c1.4,0.6,2.8,1.3,4.1,2c0.1,0.1,0.2,0.1,0.3,0.2C305.7,342.7,294,350.9,281,355.9z"
              />
            <path style="fill:#ACB3BA;" d="M158.3,249.5h12.8c1.8-9.9,5.3-19.3,10.6-28c0.2,0.1,0.5,0.3,0.7,0.4c1.3,0.7,2.6,1.4,3.9,2
              c0.4,0.2,0.7,0.4,1.1,0.5c1.7,0.8,3.5,1.6,5.3,2.3c0.4,0.2,0.8,0.3,1.2,0.5c1.5,0.6,3,1.1,4.5,1.7c0.6,0.2,1.2,0.4,1.8,0.6
              c1.6,0.5,3.2,1,4.8,1.5c0.3,0.1,0.6,0.2,0.9,0.3v0.1h0.1c-0.1,0.7-0.2,1.4-0.4,2.1c-0.1,0.7-0.2,1.5-0.4,2.2
              c-0.4,2.8-0.8,5.6-1.2,8.5v0.1c-0.2,1.7-0.3,3.5-0.4,5.2h12.7c0.1-1.1,0.1-2.3,0.2-3.4c0-0.1,0-0.2,0-0.3c0.4-3.6,0.9-7.1,1.5-10.6
              c0.1-0.4,0.1-0.7,0.2-1.1c0.7,0.1,1.4,0.2,2.1,0.4c0.7,0.1,1.5,0.3,2.2,0.4c2.7,0.4,5.5,0.8,8.3,1.2c0.2,0,0.3,0,0.5,0.1
              c3,0.3,5.9,0.6,9,0.7c0.8,0,1.6,0.1,2.4,0.1c0.9,0,1.8,0.1,2.7,0.1v12.4H258v-12.4c0.9,0,1.8-0.1,2.7-0.1c0.8,0,1.6-0.1,2.3-0.1
              c3-0.2,6-0.4,9-0.7c0.2,0,0.3,0,0.5-0.1c2.8-0.3,5.6-0.7,8.3-1.2c0.7-0.1,1.5-0.2,2.2-0.4c0.7-0.1,1.4-0.2,2.1-0.4
              c0.1,0.4,0.1,0.7,0.2,1.1c0.6,3.5,1.1,7,1.5,10.6c0,0.1,0,0.3,0,0.4c0.1,1.1,0.1,2.3,0.2,3.4h12.7c-0.1-1.7-0.2-3.5-0.4-5.2l0,0
              c-0.3-2.9-0.7-5.8-1.2-8.6c-0.1-0.7-0.2-1.4-0.3-2.1c-0.1-0.7-0.2-1.5-0.4-2.2h0.1v-0.1c0.3-0.1,0.6-0.2,0.9-0.3
              c1.6-0.5,3.2-0.9,4.7-1.4c0.6-0.2,1.2-0.4,1.8-0.6c1.5-0.5,3-1.1,4.4-1.6c0.4-0.2,0.9-0.3,1.3-0.5c1.8-0.7,3.6-1.5,5.3-2.3
              c0.4-0.2,0.8-0.4,1.2-0.6c1.3-0.6,2.6-1.3,3.8-2c0.2-0.1,0.5-0.3,0.8-0.4c5.3,8.7,8.9,18.1,10.6,28h12.8
              c-1.9-12.3-6.2-24.1-12.8-34.8l0.2-0.1l-3.8-5.3l0,0l-3.6-5l-0.2,0.1c-16.6-20.4-41.1-33.1-67.2-34.8v-0.2h-12.6v0.2
              c-26.2,1.8-50.6,14.4-67.2,34.9l-0.2-0.1l-3.6,5l0,0l-3.8,5.3l0.2,0.1C164.6,225.4,160.3,237.2,158.3,249.5z M314.8,211.2
              c-0.1,0.1-0.2,0.1-0.3,0.2c-1.3,0.7-2.6,1.4-4.1,2c-0.1,0.1-0.3,0.1-0.4,0.2c-1.3,0.6-2.6,1.1-4,1.7c-0.5,0.2-1,0.4-1.5,0.6
              c-1,0.4-2.1,0.8-3.2,1.2c-0.6,0.2-1.2,0.4-1.8,0.6c-1.1,0.4-2.2,0.7-3.3,1c-0.4,0.1-0.7,0.2-1.1,0.3c0,0,0,0,0-0.1
              c-0.8-2.8-1.6-5.5-2.5-8.1c-0.2-0.6-0.4-1.2-0.6-1.9c-0.9-2.5-1.9-5-2.9-7.3c-0.1-0.3-0.3-0.6-0.4-0.9c-0.9-2.1-1.9-4.1-3-6
              c-0.3-0.5-0.5-1-0.8-1.4c-1.2-2-2.3-3.9-3.6-5.7c-0.1-0.1-0.1-0.2-0.2-0.4C294,192.2,305.7,200.4,314.8,211.2z M258.3,183.4
              c0.1,0.1,0.2,0.1,0.3,0.2c1.1,0.5,2.1,1.1,3.2,1.8c0.1,0.1,0.3,0.2,0.4,0.3c1,0.7,1.9,1.5,2.8,2.4c0.2,0.2,0.5,0.4,0.7,0.7
              c1,1,2,2.1,3,3.3c0.2,0.2,0.3,0.4,0.5,0.6c0.9,1.1,1.7,2.3,2.5,3.6c0.2,0.3,0.4,0.6,0.6,0.9c0.9,1.5,1.8,3,2.7,4.6
              c0.1,0.3,0.3,0.6,0.4,0.9c0.8,1.5,1.5,3,2.2,4.6c0.2,0.4,0.3,0.7,0.5,1.1c0.8,1.9,1.5,3.8,2.2,5.8c0.1,0.4,0.2,0.8,0.4,1.1
              c0.6,1.8,1.2,3.7,1.7,5.6c0.1,0.2,0.1,0.5,0.2,0.7c-0.4,0.1-0.7,0.1-1.1,0.2c-3.6,0.6-7.2,1.2-10.8,1.6c-0.2,0-0.5,0-0.7,0.1
              c-3.5,0.4-7,0.6-10.5,0.8c-0.4,0-0.9,0-1.3,0v-40.9H258.3z M223.6,214.3c0.7-2,1.5-4,2.2-5.8c0.2-0.4,0.3-0.7,0.5-1.1
              c0.7-1.6,1.4-3.2,2.2-4.7c0.1-0.3,0.3-0.6,0.4-0.9c0.9-1.6,1.8-3.2,2.7-4.7c0.2-0.3,0.4-0.6,0.6-0.9c0.8-1.3,1.7-2.5,2.6-3.6
              c0.1-0.2,0.3-0.4,0.4-0.6c1-1.2,2-2.3,3-3.3c0.2-0.2,0.5-0.4,0.7-0.7c0.9-0.9,1.9-1.7,2.8-2.4c0.1-0.1,0.3-0.2,0.4-0.3
              c1.1-0.7,2.1-1.3,3.2-1.8c0.1-0.1,0.2-0.1,0.3-0.1v41c-0.4,0-0.9,0-1.3,0c-3.5-0.2-7-0.4-10.5-0.8c-0.2,0-0.5,0-0.7-0.1
              c-3.7-0.4-7.3-1-10.9-1.6c-0.4-0.1-0.7-0.1-1.1-0.2c0.1-0.2,0.1-0.5,0.2-0.7c0.6-2,1.1-3.9,1.8-5.7
              C223.3,215,223.5,214.6,223.6,214.3z M223,187.3c-0.1,0.1-0.1,0.2-0.2,0.4c-1.2,1.8-2.4,3.7-3.6,5.7c-0.3,0.5-0.5,1-0.8,1.4
              c-1,1.9-2,3.8-2.9,5.9c-0.1,0.3-0.3,0.6-0.4,0.9c-1,2.3-2,4.7-2.9,7.3c-0.2,0.6-0.4,1.3-0.7,1.9c-0.9,2.6-1.7,5.3-2.5,8.1l0,0
              c-0.4-0.1-0.7-0.2-1.1-0.3c-1.2-0.3-2.3-0.7-3.4-1c-0.6-0.2-1.1-0.4-1.7-0.6c-1.1-0.4-2.2-0.8-3.3-1.2c-0.5-0.2-1-0.4-1.4-0.5
              c-1.4-0.6-2.8-1.1-4.1-1.7c-0.1,0-0.2-0.1-0.3-0.1c-1.4-0.6-2.8-1.3-4.1-2c-0.1-0.1-0.2-0.1-0.3-0.2
              C198.3,200.4,210,192.2,223,187.3z"/>
            </g>
            <g>
            <path style="fill:#F1543F;" d="M188.7,286.9h-9.8l-11.6-30.6h9.8l6.6,18.5l6.6-18.5h9.2l6.6,18.5l6.6-18.5h9.9L211,286.9h-9.9
              l-6.3-16.7L188.7,286.9z"/>
            <path style="fill:#F1543F;" d="M245.7,286.9h-9.8l-11.6-30.6h9.8l6.6,18.5l6.6-18.5h9.2l6.6,18.5l6.6-18.5h9.9L268,286.9h-9.9
              l-6.3-16.7L245.7,286.9z"/>
            <path style="fill:#F1543F;" d="M302.7,286.9h-9.8l-11.6-30.6h9.8l6.6,18.5l6.6-18.5h9.2l6.6,18.5l6.6-18.5h9.9L325,286.9h-9.9
              l-6.3-16.7L302.7,286.9z"/>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
            </svg>         
            <ul class="feature">
              <li> Domain Name Purchase</li>
              <li> Shared Hosting </li>
              <li> VPS Hosting </li>
            </ul>
            </div>
            <hr>
            <ul class="adv">
              <li> Choose cost-effective hosting plan</li>
              <li> Assist you in domain name purchase</li>
            </ul>
          </div>
          
          <div class="service-item"> 
            <h3> Website Performance & Analytics </h3>
            <div class="icon-left">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 504 504" style="enable-background:new 0 0 504 504;" xml:space="preserve">
            <circle style="fill:#FD8469;" cx="252" cy="252" r="252"/>
            <rect x="94.5" y="94.5" style="fill:#324A5E;" width="315" height="315"/>
            <g>
              <rect x="122.1" y="160.7" style="fill:#FFFFFF;" width="259.9" height="221.2"/>
              <rect x="122.1" y="118" style="fill:#FFFFFF;" width="32.5" height="19.2"/>
            </g>
            <rect x="175.7" y="118" style="fill:#F9B54C;" width="32.5" height="19.2"/>
            <rect x="229.4" y="118" style="fill:#54C0EB;" width="32.5" height="19.2"/>
            <rect x="226.9" y="237.8" style="fill:#ACB3BA;" width="50.3" height="122.3"/>
            <rect x="144.3" y="182.6" style="fill:#F1543F;" width="50.3" height="177.4"/>
            <rect x="309.4" y="292.9" style="fill:#2C9984;" width="50.3" height="67.1"/>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            </svg>           
            <ul class="feature">
              <li>Google Analytics</li>
              <li>Search Engine Optimization</li>
              <li>Website Speed Enhancement</li>
            </ul>
            </div>
            <hr>
            <ul class="adv">
              <li> Better understanding on potential costumers </li>
              <li> Increase your business exposure </li>
            </ul>
          </div>

          <a href="#contact" class="button"> Get A Quote </a>

          <a class="go-back more-button"> ←  Go Back </a>

        </div>

      </div>

    </div>

    <div id="contact" class="section">
      <div class="navbar-space"></div>

      <div class="full">
        
        <div class="title3">
          <hr>
          <h1>Contact</h1>
          <hr>
        </div>

        <div class="contact-middle">
          <div class="contact-img">
            <lottie-player id="girl" src="./js/girl.json"  background="transparent"  speed="1"  loop  autoplay></lottie-player>
          </div>

          <div class="contact">
            <div class="contact-info">
              <p> <b> Let's Get In Touch </b> </p>
              <a href="mailto:hello@snowiewongdev.com" target="_blank" title="Send me an email :)"> Email: hello@snowiewongdev.com </a>
            </div>
          
            <div class="contact-form">
              <p>Leave A Message</p>
              <p id="display"> 
                <?php echo isset($_SESSION['msg']) ? $_SESSION['msg'] : '' ?> 
              </p>
              <form id="contactForm" action="contactform.php" method="POST" role="form">
                <input id="name" name="name" type="text" min-length="3" max-length="50" placeholder="Your Name" required> <br/>

                <input id="email" name="email" type="email" max-length="50" placeholder="Email"required> <br/>

                <input list="topic" name="topic" type="text" max-length="100" placeholder="About" required>
                <datalist id="topic">
                  <option value="Quotation"></option>
                  <option value="Service Enquiry"></option>
                  <option value="Others"></option>
                </datalist> <br/>

                <textarea type="text" name="message" id="message" placeholder="Message" required></textarea> <br/>

                <input name="submit" type="submit" value="Send Message">
                <input type="hidden" id="g-token" name="g-token" />
              </form>
            </div>
          </div>
        </div>

      </div>

      <div class="footer">
          <div>
            <a href="https://www.freecodecamp.org/snowie508" target="_blank" title="freeCodeCamp">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M6.03 6C4.774 6 1 10.166 1 16.318C1 21.708 4.653 26 6.088 26c.39 0 .912-.427.912-.863c0-.353-.38-.828-1.291-1.825c-.208-.229-.39-.427-.486-.552C3.859 20.977 2.974 18.528 3 15.979c.027-2.621 1.011-5.349 3.064-7.569l.135-.144c.338-.36.801-.852.801-1.342C7 6.434 6.457 6 6.03 6zm19.94 0c-.427 0-.97.434-.97.924c0 .49.463.983.8 1.342l.136.144c2.053 2.22 3.037 4.948 3.064 7.569c.026 2.549-.859 4.998-2.223 6.78c-.096.126-.278.325-.486.553C25.38 24.31 25 24.785 25 25.137c0 .436.522.863.912.863C27.347 26 31 21.707 31 16.318C31 10.166 27.225 6 25.97 6zM13.093 7.025c-.134.033-.215.104-.215.227c0 .123.131.205.234.256c.472.287 1.006 1.097 1.006 1.959c0 2.369-2.965 4.522-2.965 6.984c-.01 2.072 1.448 3.724 3.356 4.422c.226.092.625.266.625-.062c0-.134-.112-.143-.215-.184a1.955 1.955 0 0 1-.984-.781c-.421-.616-.514-1.242-.514-1.98c0-1.642 2.268-1.94 2.268-3.59c0-.627-.4-.811-.4-.985c0-.113.04-.113.153-.113c.411 0 .975.676 1.149 1.015c.113.236.123.309.123.565c0 .359-.031.728-.031 1.097c0 1.385 1.63 1.015 1.63.348c0-.307-.183-.593-.183-.89c0-.043 0-.063.04-.063c.175 0 .481.39.563.514c.297.46.442 1.065.442 1.609c0 1.662-1.518 2.512-1.518 2.871c0 .052.153.402.625.104C19.8 19.568 21 17.906 21 15.742c0-1.724-.44-2.964-1.64-4.232c-.206-.216-.843-.873-1.16-.873c-.422 0 .368.953.368 1.6c0 .368-.246.636-.625.636c-.595 0-.75-1.303-.822-1.713c-.297-1.733-.656-2.985-2.379-3.795c-.4-.193-1.25-.437-1.65-.34zM10.002 23c-.557 0-.979.438-.979 1.016c0 .543.44.984.979.984H22.16c.197 0 .84-.074.84-1.016c0-.598-.33-.984-.84-.984H10.002z"/>
              </svg>
            </a>
            <a href="https://codepen.io/snowie508" target="_blank"  title="Codepen">
              <svg xmlns="http://www.w3.org/2000/svg" width="1rem" height="1rem" viewBox="0 0 1792 1792"><path d="M216 1169l603 402v-359L485 989zm-62-144l193-129l-193-129v258zm819 546l603-402l-269-180l-334 223v359zm-77-493l272-182l-272-182l-272 182zM485 803l334-223V221L216 623zm960 93l193 129V767zm-138-93l269-180l-603-402v359zm485-180v546q0 41-34 64l-819 546q-21 13-43 13t-43-13L34 1233q-34-23-34-64V623q0-41 34-64L853 13q21-13 43-13t43 13l819 546q34 23 34 64z"/></svg>
            </a>
            <a href="https://www.linkedin.com/in/snowie-wong/" target="_blank"  title="LinkedIn">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1em" height="1em"  viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037c-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85c3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 0 1-2.063-2.065a2.064 2.064 0 1 1 2.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
            </a>
            <a href="https://github.com/snowiewdev" target="_blank" title="GitHub">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1.2em" height="1.2em" viewBox="0 0 16 16"><path d="M8 .198a8 8 0 0 0-2.529 15.591c.4.074.547-.174.547-.385c0-.191-.008-.821-.011-1.489c-2.226.484-2.695-.944-2.695-.944c-.364-.925-.888-1.171-.888-1.171c-.726-.497.055-.486.055-.486c.803.056 1.226.824 1.226.824c.714 1.223 1.872.869 2.328.665c.072-.517.279-.87.508-1.07c-1.777-.202-3.645-.888-3.645-3.954c0-.873.313-1.587.824-2.147c-.083-.202-.357-1.015.077-2.117c0 0 .672-.215 2.201.82A7.672 7.672 0 0 1 8 4.066c.68.003 1.365.092 2.004.269c1.527-1.035 2.198-.82 2.198-.82c.435 1.102.162 1.916.079 2.117c.513.56.823 1.274.823 2.147c0 3.073-1.872 3.749-3.653 3.947c.287.248.543.735.543 1.481c0 1.07-.009 1.932-.009 2.195c0 .213.144.462.55.384A8 8 0 0 0 8.001.196z"/></svg>
            </a>
          </div>
          <div>
            <p> Copyright <span id="year"></span> © <span id="name"> Snowie Wong </span> </p>
          </div>
        </div>

    </div>

  </div>

  <script src="./js/lottie-player.js"></script>
  <script src="./js/jquery.min.js"></script>
  <script src="./js/jquery.pagepiling.min.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script src="./js/typed.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js?render=6LeUgdcZAAAAAIE7LuIJLIhN-qbPfzpYs_QGzW94"></script>
  <script src="./js/main.js"></script>
</body>
</html>