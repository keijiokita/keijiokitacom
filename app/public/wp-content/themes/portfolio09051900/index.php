<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>KEIJI OKITA PORTFOLIO</title>
  <link rel="stylesheet" href="https://cdn.digital.arizona.edu/lib/arizona-bootstrap/2.0.24/css/arizona-bootstrap.min.css" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ress.css" type="text/css" media="screen">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css" media="screen">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.0/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body>
  <div class="wrapper">
    <header class="header">
      <ul class="sakura">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
      <div class="container">
        <h1 class="header-logo">
          <a href="#" class="home">KEIJI <span class="red-o">O</span>KITA</a>
        </h1>
        <nav class="gnav">
          <ul class="gnav-list">
            <li class="gnav-item">
              <a href="#about">AB<span class="red-o">O</span>UT</a>
            </li>
            <li class="gnav-item">
              <a href="#work">W<span class="red-o">O</span>RK</a>
            </li>
            <li class="gnav-item">
              <a href="#skill">SKILLS&T<span class="red-o">OO</span>LS</a>
            </li>
            <li class="gnav-item">
              <a href="mailto:keiji.okita.ca@icloud.com">C<span class="red-o">O</span>NTACT</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <main>
      <div class="mv">
        <video id="detect-video" class="bg-video" preload="auto" webkit-playsinline playsinline muted autoplay loop>
          <source src="<?php echo get_template_directory_uri(); ?>/img/video.mp4" type="video/mp4" style="  pointer-events: none;" />
        </video>
        <div class="mv-container">
          <p class="mv-title">KEIJI <span class="red-o">O</span>KITA</p>
          <p class="mv-subtitle">UI/UX Designer<br /> & Frontend Web Developer,<br />based in Tucson, AZ, USA</p>
          <div class="test-box">
            <p class="test"></p>
            <p class="test2"></p>
            <p class="test3"></p>
            <p class="test4"></p>
          </div>
        </div>
      </div>
      <section class="about section" id="about">
        <div class="container">
          <h2 class="title">AB<span class="red-o">O</span>UT</h2>
          <div class="profile">
            <p class="profile-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/profile.jpg" alt="Keiji Okita" />
            </p>
            <div class="profile-body">
              <p>
                My international journey, which began as a high school
                exchange student in Michigan and continued through my studies
                in Chinese at San Francisco State University, has equipped me
                with a unique perspective. This experience, coupled with my
                professional endeavors, has sharpened my problem-solving
                skills, enabling me to offer more inclusive and effective
                solutions.
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="work section" id="work">
        <div class="container">
          <h2 class="title">W<span class="red-o">O</span>RK</h2>
          <div class="work-list">
            <div class="container bs-container">
              <div class="row">
                <!-- work#1 start -->
                <div class="col-md-6">
                  <div class="work-item">
                    <div>
                      <div class="work-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img
/work1.png" alt="ILLUMIRISE" />
                      </div>
                      <div id="exampleModalScrollable" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalScrollableTitle"><a href="https://illumirise.jp/" target="_blank" class="work-name">ILLUMIRISE</a></h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <p class="work-info">E-commerce website for cosmetics</p>
                              <div class="work-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img
/work-img1.png" alt="Illumirise" />
                              </div>
                              <div class="work-detail">
                                <p class="detail-title">My role</p>
                                <p class="detail-description">UI/UX Design, Coding</p>
                                <p class="detail-title">Scope</p>
                                <p class="detail-description">6-month client project</p>
                                <p class="detail-title">Problem</p>
                                <p class="detail-description">When I launched the cosmetics online site, the backend was
                                  complete, but the front-end design was vague and not finalized. It was confusing for users,
                                  and especially, it was not responsive. When viewed on a smartphone, there were many areas
                                  where the design was broken.</p>
                                <p class="detail-title">Solution</p>
                                <p class="detail-description">To clarify the issues with the design, I collaborated with
                                  front-end designers and held a workhop. In this workhop, we identified design weaknesses
                                  from a usability perspective and listed improvements. We especially addressed the design
                                  issues on smartphones by repeatedly checking on actual devices. As a result, I was able to
                                  complete a site that is responsive and displays the design appropriately regardless of the
                                  device used to access it.</p>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-blue btn-sm" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModalScrollable">
                        see more</button>
                    </div>
                  </div>
                </div>
                <!-- work#1 end -->
                <!-- work#2 start-->
                <div class="col-md-6">
                  <div class="work-item">
                    <div class="work-img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/work2.png" alt="Rakuten Mobile" />
                    </div>
                    <div id="exampleModalScrollable2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalScrollableTitle"><a href="https://corp.mobile.rakuten.co.jp/english/?l-id=corp_header_logo_lang_en" target="_blank" class="work-name">Rakuten Mobile</a></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p class="work-info">A major Japanese mobile network operator's website</p>
                            <div class="work-img">
                              <img src="<?php echo get_template_directory_uri(); ?>/img
/work-img2.png" alt="Rakuten Mobile" />
                            </div>
                            <div class="work-detail">
                              <p class="detail-title">My role</p>
                              <p class="detail-description">Project management, UI/UX Design, Testing</p>
                              <p class="detail-title">Scope</p>
                              <p class="detail-description">6-month project with Rakuten Mobile team & WeLearn co. team</p>
                              <p class="detail-title">Problem</p>
                              <p class="detail-description">The service mainly targeted b2b, causing the loss of potential b2c customers. Additionally, the flow between b2b and b2c was confusing. The b2b site only allowed stock verification by phone due to bulk orders.</p>
                              <p class="detail-title">Solution</p>
                              <p class="detail-description">Introduce a dedicated page for b2c on the website, establish clear navigation to distinguish between b2b and b2c pathways, and implement a feature that allows both customer groups to check stock availability online.</p>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-blue btn-sm" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModalScrollable2">
                      see more</button>
                  </div>
                </div>
              </div>
              <div class="row">
                <!-- work#3 start -->
                <div class="col-md-6">
                  <div class="work-item">
                    <div class="work-img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img
/work3.png" alt="AstraZeneca" />
                    </div>
                    <div id="exampleModalScrollable3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalScrollableTitle"><a href="https://medicalinformation.astrazeneca.co.jp/" target="_blank" class="work-name">AstraZeneca</a></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p class="work-info">Multinational pharmaceutical company's localized web service</p>
                            <div class="work-img">
                              <img src="<?php echo get_template_directory_uri(); ?>/img
/work-img3.png" alt="AstraZeneca" />
                            </div>
                            <div class="work-detail">
                              <p class="detail-title">My role</p>
                              <p class="detail-description">Project management, UI/UX Design, Testing</p>
                              <p class="detail-title">Scope</p>
                              <p class="detail-description">6-month project in collaboration with AstraZeneca Japan, India, & UK.</p>
                              <p class="detail-title">Problem</p>
                              <p class="detail-description">Initially, AstraZeneca's website was predominantly in English with limited pages in Japanese, making it challenging for the Japanese client base. The content displayed varied depending on the country or hospital, and there wasn't an appropriate differentiation of information based on country. Additionally, while logging into the members-only site, registration was exclusively via email, and it lacked sso authentication, making the pathway to different login methods unclear.</p>
                              <p class="detail-title">Solution</p>
                              <p class="detail-description">I increased the number of Japanese pages on AstraZeneca's website to enhance accessibility for Japanese users.
                                Considering the variations in product displays across different countries and hospitals, I introduced a mechanism to differentiate information based on the country.
                                I revisited the login procedure for the members-only site. Besides registration via email, I incorporated sso authentication to improve user convenience. Furthermore, I improved the design to clearly indicate pathways for different login methods.</p>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-blue btn-sm" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModalScrollable3">
                      see more</button>
                  </div>
                </div>
                <!-- work#3 end -->
                <!-- work#4  start-->
                <div class="col-md-6">
                  <div class="work-item">
                    <div class="work-img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img
/work4.png" alt="YAOKO Marketplace" />
                    </div>
                    <div id="exampleModalScrollable4" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalScrollableTitle"><a href="https://www.yaoko-net.com/" target="_blank" class="work-name">YAOKO Marketplace</a></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p class="work-info">A web service for a major retail store in Saitama prefecture, Japan</p>
                            <div class="work-img">
                              <img src="<?php echo get_template_directory_uri(); ?>/img
/work-img4.png" alt="YAOKO Marketplace" />
                            </div>
                            <div class="work-detail">
                              <p class="detail-title">My role</p>
                              <p class="detail-description">Frontend development, UI/UX Design, CMS development, Testing</p>
                              <p class="detail-title">Scope</p>
                              <p class="detail-description">9-month client project</p>
                              <p class="detail-title">Problem</p>
                              <p class="detail-description">Before I joined the project, there was an issue with the old system of the online supermarket. A new system was built, but as the focus was primarily on backend development, the UIUX was very user-unfriendly. Moreover, unlike physical stores, it was hard to find products in the online supermarket. Especially, there were many elderly customers, and the platform was difficult to understand for those not familiar with the internet.</p>
                              <p class="detail-title">Solution</p>
                              <p class="detail-description">After joining the project, we revisited the UIUX design based on customer feedback and usage experience. We especially conducted user tests targeting the elderly, focusing on improving usability for them. Furthermore, we enhanced the product search feature, innovating the way products were categorized and displayed as recommended items, making it easier to locate them. We also provided guides and tutorials for first-time users and those unfamiliar with the web, assisting them in understanding how to use the platform.</p>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-blue btn-sm" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModalScrollable4">
                      see more</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="skill section" id="skill">
        <div class="container">
          <h2 class="title">SKILLS&T<span class="red-o">OO</span>LS</h2>
          <div class="skill-list">
            <div class="skill-item">
              <p class="skill-img"><img src="<?php echo get_template_directory_uri(); ?>/img
/icon_skill.png" alt="" /></p>
              <div class="skill-body">
                <h3 class="skill-name">Languages & Framework</h3>
                <p class="skill-text">
                  HTML5, CSS3, Javascript, jQuery, PHP, Ruby, Ruby on Rails, Slim
                </p>
              </div>
            </div>
            <div class="skill-item">
              <p class="skill-img"><img src="<?php echo get_template_directory_uri(); ?>/img
/icon_skill.png" alt="" /></p>
              <div class="skill-body">
                <h3 class="skill-name">Operating Systems</h3>
                <p class="skill-text">
                  Windows OS, MacOS, Linux, Ubuntu, Windows Subsystem for
                  Linux
                </p>
              </div>
            </div>
            <div class="skill-item">
              <p class="skill-img"><img src="<?php echo get_template_directory_uri(); ?>/img
/icon_skill.png" alt="" /></p>
              <div class="skill-body">
                <h3 class="skill-name">Applications & Platforms</h3>
                <p class="skill-text">
                  Amazon Web Services, Visual Studio Code, Docker, MySQL,
                  WordPress, Photoshop, Illustrator, Figma, Canva, Bootstrap,
                  Google Fonts, FTP software, Chrome developer tool, Jira,
                  Confluence, Dropbox, Git, GitHub, GitLab, ChatGPT4, Github Copilot, Microsoft Office,
                  etc...
                </p>
              </div>
            </div>
            <div class="skill-item">
              <p class="skill-img"><img src="<?php echo get_template_directory_uri(); ?>/img
/icon_skill.png" alt="" /></p>
              <div class="skill-body">
                <h3 class="skill-name">Communication</h3>
                <p class="skill-text">
                  Slack, Microsoft Teams, Zoom, Discord, Google Meet, Skype
                </p>
              </div>
            </div>
            <div class="skill-item">
              <p class="skill-img"><img src="<?php echo get_template_directory_uri(); ?>/img
/icon_skill.png" alt="" /></p>
              <div class="skill-body">
                <h3 class="skill-name">Core Competencies</h3>
                <p class="skill-text">
                  Project Management, Frontend Development, Responsive Design,
                  UI/UX Design, Testing, Debugging, Problem Solving, Strong
                  Communication, Adaptability, Native proficiency in Japanese
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <a href="#" id="page-top"></a>
    <footer class="footer">
      <div class="contact_link">
        <a class="contact-item" href="https://www.linkedin.com/in/keiji-okita-597412272/" target="_blank" rel="noopener" style="text-decoration: underline"><i class="fab fa-linkedin fa-3x" style="color: #ffffff; margin-right:15px;"></i></a>
        <a href="mailto:keiji.okita.ca@icloud.com" class="contact-item" style="text-decoration: underline"><i class="fas fa-envelope fa-3x" style="color: #ffffff; margin-left:15px;"></i></a>
      </div>
      <div class="copyright">&copy;KEIJI OKITA 2023</div>
    </footer>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js" integrity="sha384-MYL22lstpGhSa4+udJSGro5I+VfM13fdJfCbAzP9krCEoK5r2EDFdgTg2+DGXdj+" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.digital.arizona.edu/lib/arizona-bootstrap/2.0.24/js/arizona-bootstrap.min.js" crossorigin="anonymous"></script>
</body>

</html>