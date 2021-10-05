@include('includes.header-portfolio')

        <!--
        ===================
           Home
        ===================
        -->
        <section class="mh-home image-bg home-2-img" id="mh-home">
            <div class="img-foverlay img-color-overlay">
                <div class="container">
                    <div class="row section-separator xs-column-reverse vertical-middle-content home-padding">
                        <div class="col-sm-6">
                            <div class="mh-header-info">
                                <div class="mh-promo wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">
                                    <span>Hello I'm</span>
                                </div>

                                <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">{{ $user->name }}</h2>
                                <h4 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">{{ $user->title_job }}</h4>

                                <ul>
                                    <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s"><i class="fa fa-envelope"></i><a href="mailto:">{{ $user->email }}</a></li>
                                    <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s"><i class="fa fa-phone"></i><a href="callto:{{ $user->tel }}">{{ $user->tel }}</a></li>
                                    <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s"><i class="fa fa-map-marker"></i><address>{{ $user->address }}</address></li>
                                </ul>

                                <ul class="social-icon wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="hero-img wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                                <div class="img-border">
                                    <img src="{{ asset('assets/images/hero.png') }}" alt=""  class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--
        ===================
           ABOUT
        ===================
        -->
        <section class="mh-about" id="mh-about">
            <div class="container">
                <div class="row section-separator">
                    <div class="col-sm-12 col-md-6">
                        <div class="mh-about-img shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                            <img src="{{ asset('assets/images/ab-img.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="mh-about-inner">
                            <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">About Me</h2>
                            <p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Hello, I’m a Patrick, web-developer based on Paris.
                            I have rich experience in web site design & building
                            and customization. Also I am good at</p>
                            <div class="mh-about-tag wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                <ul>
                                    @foreach ($user->skill as $skill)
                                        <li><span>{{ $skill->name }}</span></li>
                                    @endforeach
                                </ul>
                            </div>
                            <a href="#" class="btn btn-fill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">Downlaod CV <i class="fa fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--
        ===================
           SERVICE
        ===================
        -->
        <section class="mh-service">
            <div class="container">
                <div class="row section-separator">
                    <div class="col-sm-12 text-center section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <h2>What I do</h2>
                    </div>
                    <div class="col-sm-4">
                        <div class="mh-service-item shadow-1 dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                            <i class="fa fa-bullseye purple-color"></i>
                            <h3>UI Design</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                                magna aliquam erat volutpat.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="mh-service-item shadow-1 dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                            <i class="fa fa-code iron-color"></i>
                            <h3>Web Development</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                                magna aliquam erat volutpat.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="mh-service-item shadow-1 dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                            <i class="fa fa-object-ungroup sky-color"></i>
                            <h3>App Development</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                                magna aliquam erat volutpat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--
        ===================
          FEATURE PROJECTS
        ===================
        -->
        <section class="mh-featured-project image-bg featured-img-one">
            <div class="img-color-overlay">
                <div class="container">
                    <div class="row section-separator">
                        <div class="section-title col-sm-12">
                            <h3>Featured Projects</h3>
                        </div>
                        <div class="col-sm-12">
                            <div class="mh-single-project-slide-by-side row">
                                <!-- Project Items -->
                                <div class="col-sm-12 mh-featured-item">
                                    <div class="row">
                                        <div class="col-sm-7">
                                            <div class="mh-featured-project-img shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">                                                
                                                <img src="{{ asset('assets/images/p-2.png') }}" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="mh-featured-project-content">
                                                <h4 class="project-category wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">Web Design</h4>
                                                <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">Wrap</h2>
                                                <span class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">Design & Development</span>
                                                <p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">Stamp is a clean and elegant Multipurpose Landing Page Template.
                                                It will fit perfectly for Startup, Web App or any type of Web Services.
                                                It has 4 background styles with 6 homepage styles. 6 pre-defined color scheme.
                                                All variations are organized separately so you can use / customize the template very easily.</p>
                                                <a href="#" class="btn btn-fill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">View Details</a>
                                                <div class="mh-testimonial mh-project-testimonial wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.9s">
                                                    <blockquote>
                                    					<q>Excellent Template - suits my needs perfectly whilst allowing me to learn some new technology first hand.</q>
                                    					<cite>- Shane Kavanagh</cite>
                                    				</blockquote>
                                    				<blockquote>
                                    					<q>Creative Template - suits my needs perfectly whilst allowing me to learn some new technology first hand.</q>
                                    					<cite>- Shane Kavanagh</cite>
                                    				</blockquote>
                                    				<blockquote>
                                    					<q>Organize Code - suits my needs perfectly whilst allowing me to learn some new technology first hand.</q>
                                    					<cite>- Shane Kavanagh</cite>
                                    				</blockquote>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Project Items -->
                                <div class="col-sm-12 mh-featured-item">
                                    <div class="row">
                                        <div class="col-sm-7">
                                            <div class="mh-featured-project-img shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                                <img src="{{ asset('assets/images/p-2.png') }}" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="mh-featured-project-content">
                                                <h4 class="project-category wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">Web Design</h4>
                                                <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">Wrap</h2>
                                                <span class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">Design & Development</span>
                                                <p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">Stamp is a clean and elegant Multipurpose Landing Page Template.
                                                It will fit perfectly for Startup, Web App or any type of Web Services.
                                                It has 4 background styles with 6 homepage styles. 6 pre-defined color scheme.
                                                All variations are organized separately so you can use / customize the template very easily.</p>
                                                <a href="#" class="btn btn-fill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">View Details</a>
                                                <div class="mh-testimonial mh-project-testimonial wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.9s">
                                                    <blockquote>
                                    					<q>Excellent Template - suits my needs perfectly whilst allowing me to learn some new technology first hand.</q>
                                    					<cite>- Shane Kavanagh</cite>
                                    				</blockquote>
                                    				<blockquote>
                                    					<q>Creative Template - suits my needs perfectly whilst allowing me to learn some new technology first hand.</q>
                                    					<cite>- Shane Kavanagh</cite>
                                    				</blockquote>
                                    				<blockquote>
                                    					<q>Organize Code - suits my needs perfectly whilst allowing me to learn some new technology first hand.</q>
                                    					<cite>- Shane Kavanagh</cite>
                                    				</blockquote>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Project Items -->
                                <div class="col-sm-12 mh-featured-item">
                                    <div class="row">
                                        <div class="col-sm-7">
                                            <div class="mh-featured-project-img shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                                <img src="{{ asset('assets/images/p-2.png') }}" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="mh-featured-project-content">
                                                <h4 class="project-category wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">Web Design</h4>
                                                <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">Wrap</h2>
                                                <span class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">Design & Development</span>
                                                <p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">Stamp is a clean and elegant Multipurpose Landing Page Template.
                                                It will fit perfectly for Startup, Web App or any type of Web Services.
                                                It has 4 background styles with 6 homepage styles. 6 pre-defined color scheme.
                                                All variations are organized separately so you can use / customize the template very easily.</p>
                                                <a href="#" class="btn btn-fill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">View Details</a>
                                                <div class="mh-testimonial mh-project-testimonial wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.9s">
                                                    <blockquote>
                                    					<q>Excellent Template - suits my needs perfectly whilst allowing me to learn some new technology first hand.</q>
                                    					<cite>- Shane Kavanagh</cite>
                                    				</blockquote>
                                    				<blockquote>
                                    					<q>Creative Template - suits my needs perfectly whilst allowing me to learn some new technology first hand.</q>
                                    					<cite>- Shane Kavanagh</cite>
                                    				</blockquote>
                                    				<blockquote>
                                    					<q>Organize Code - suits my needs perfectly whilst allowing me to learn some new technology first hand.</q>
                                    					<cite>- Shane Kavanagh</cite>
                                    				</blockquote>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End: .row -->
                </div>
            </div>
        </section>

        <!--
        ===================
           SKILLS
        ===================
        -->
        <section class="mh-skills" id="mh-skills">
            <div class="home-v-img">
                <div class="container">
                    <div class="row section-separator">
                        <div class="section-title text-center col-sm-12">
                            <!--<h2>Skills</h2>-->
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mh-skills-inner">
                                <div class="mh-professional-skill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                    <h3>Technical Skills</h3>
                                    <div class="each-skills">
                                        @foreach ($user->skill as $skill)
                                            <div class="candidatos">
                                                <div class="parcial">
                                                    <div class="info">
                                                        <div class="nome">{{ $skill->name}}</div>
                                                        <div class="percentagem-num">{{ $skill->percent }}%</div>
                                                    </div>
                                                    <div class="progressBar">
                                                        <div class="percentagem" style="width: {{ $skill->percent }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mh-professional-skills wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                                <h3>Professional Skills</h3>
                                <ul class="mh-professional-progress">
                                    <li>
                                        <div class="mh-progress mh-progress-circle" data-progress="95"></div>
                                        <div class="pr-skill-name">Communication</div>
                                    </li>
                                    <li>
                                        <div class="mh-progress mh-progress-circle" data-progress="55"></div>
                                        <div class="pr-skill-name">Team Work</div>
                                    </li>
                                    <li>
                                        <div class="mh-progress mh-progress-circle" data-progress="86"></div>
                                        <div class="pr-skill-name">Project Management</div>
                                    </li>
                                    <li>
                                        <div class="mh-progress mh-progress-circle" data-progress="60"></div>
                                        <div class="pr-skill-name">Creativity</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--
        ===================
           EXPERIENCES
        ===================
        -->
        <section class="mh-experince image-bg featured-img-one" id="mh-experience">
            <div class="img-color-overlay">
                <div class="container">
                    <div class="row section-separator">
                        <div class="col-sm-12 col-md-6">
                            <div class="mh-education">
                                <h3 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Education</h3>
                                <div class="mh-education-deatils">
                                    @foreach ($user->education as $education)
                                        <div class="mh-education-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                            <h4>{{ $education->degree }} <a href="#">{{ $education->school_name }}</a></h4>
                                            <div class="mh-eduyear">{{ $education->start_date }} - {{ $education->finish_date }}</div>
                                            <p>{{ $education->description }}</p>
                                        </div>
                                        
                                    @endforeach
                                    <!-- Education Institutes-->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mh-work">
                                 <h3>Work Experience</h3>
                                <div class="mh-experience-deatils">
                                    <!-- Education Institutes-->
                                    <div class="mh-work-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                                        <h4>UI/UX Designer <a href="#">IronSketch</a></h4>
                                        <div class="mh-eduyear">2005-2008</div>
                                        <span>Responsibility :</span>
                                        <ul class="work-responsibility">
                                            <li><i class="fa fa-circle"></i>Validate CSS</li>
                                            <li><i class="fa fa-circle"></i>Project Management</li>
                                        </ul>
                                    </div>
                                    <!-- Education Institutes-->
                                    <div class="mh-work-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                                        <h4>Art & Multimedia From <a href="#">Oxford University</a></h4>
                                        <div class="mh-eduyear">2005-2008</div>
                                        <span>Responsibility :</span>
                                        <ul class="work-responsibility">
                                            <li><i class="fa fa-circle"></i>Validate CSS</li>
                                            <li><i class="fa fa-circle"></i>Project Management</li>
                                        </ul>
                                    </div>
                                    <!-- Education Institutes-->
                                    <div class="mh-work-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                                        <h4>Art & Multimedia From <a href="#">Oxford University</a></h4>
                                        <div class="mh-eduyear">2005-2008</div>
                                        <span>Responsibility :</span>
                                        <ul class="work-responsibility">
                                            <li><i class="fa fa-circle"></i>Validate CSS</li>
                                            <li><i class="fa fa-circle"></i>Project Management</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--
        ===================
           PORTFOLIO
        ===================
        -->
        <section class="mh-portfolio" id="mh-portfolio">
            <div class="container">
                <div class="row section-separator">
                    <div class="section-title col-sm-12 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">
                        <h3>Recent Portfolio</h3>
                    </div>
                    <div class="part col-sm-12">
                        <div class="portfolio-nav col-sm-12" id="filter-button">
                            <ul>
                                <li data-filter="*" class="current wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s"> <span>All Categories</span></li>
                                <li data-filter=".user-interface" class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s"><span>Web Design</span></li>
                                <li data-filter=".branding" class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s"><span>Branding</span></li>
                                <li data-filter=".mockup" class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s"><span>Mockups</span></li>
                                <li data-filter=".ui" class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s"><span>Photography</span></li>
                            </ul>
                        </div>
                        <div class="mh-project-gallery col-sm-12 wow fadeInUp" id="project-gallery" data-wow-duration="0.8s" data-wow-delay="0.5s">
                            <div class="portfolioContainer row">
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 user-interface">
                                    <figure>                                        
                                        <img src="{{ asset('assets/images/portfolio/g1.jpg') }}" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Creative Design</h5>
                                            <span class="sub-title">Photograpy</span>
                                            <a data-fancybox data-src="#mh"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 ui mockup">
                                    <figure>
                                        <img src="{{ asset('assets/images/portfolio/g2.png') }}" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Creative Design</h5>
                                            <span class="sub-title">Photograpy</span>
                                            <a href="{{ asset('assets/images/portfolio/g2.png') }}" data-fancybox data-src="#mh"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 user-interface">
                                    <figure>
                                        <img src="{{ asset('assets/images/portfolio/g3.png') }}" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Creative Design</h5>
                                            <span class="sub-title">Photograpy</span>
                                            <a href="{{ asset('assets/images/portfolio/g3.png') }}" data-fancybox data-src="#mh"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 branding">
                                    <figure>
                                        <img src="{{ asset('assets/images/portfolio/g5.png') }}" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Creative Design</h5>
                                            <span class="sub-title">Photograpy</span>
                                            <a href="{{ asset('assets/images/portfolio/g5.png') }}" data-fancybox data-src="#mh"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 user-interface">
                                    <figure>
                                        <img src="{{ asset('assets/images/portfolio/g4.png') }}" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Creative Design</h5>
                                            <span class="sub-title">Photograpy</span>
                                            <a href="{{ asset('assets/images/portfolio/g4.png') }}" data-fancybox data-src="#mh"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 branding">
                                    <figure>
                                        <img src="{{ asset('assets/images/portfolio/g6.png') }}" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Creative Design</h5>
                                            <span class="sub-title">Photograpy</span>
                                            <a href="{{ asset('assets/images/portfolio/g6.png') }}" data-fancybox data-src="#mh"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 branding">
                                    <figure>
                                        <img src="{{ asset('assets/images/portfolio/g8.png') }}" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Creative Design</h5>
                                            <span class="sub-title">Photograpy</span>
                                            <a href="{{ asset('assets/images/portfolio/g8.png') }}" data-fancybox data-src="#mh"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 ui">
                                    <figure>
                                        <img src="{{ asset('assets/images/portfolio/g9.png') }}" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Creative Design</h5>
                                            <span class="sub-title">Photograpy</span>
                                            <a href="{{ asset('assets/images/portfolio/g9.png') }}" data-fancybox data-src="#mh"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 branding">
                                    <figure>
                                        <img src="{{ asset('assets/images/portfolio/g7.jpg') }}" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Creative Design</h5>
                                            <span class="sub-title">Photograpy</span>
                                            <a href="{{ asset('assets/images/portfolio/g7.jpg') }}" data-fancybox="gallery"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div> <!-- End: .grid .project-gallery -->
                        </div> <!-- End: .grid .project-gallery -->
                    </div> <!-- End: .part -->
                </div> <!-- End: .row -->
            </div>
            <div class="mh-portfolio-modal" id="mh">
                <div class="container">
                    <div class="row mh-portfolio-modal-inner">
                        <div class="col-sm-5">
                            <h2>Wrap - A campanion plugin</h2>
                            <p>Wrap is a clean and elegant Multipurpose Landing Page Template.
                            It will fit perfectly for Startup, Web App or any type of Web Services.
                            It has 4 background styles with 6 homepage styles. 6 pre-defined color scheme.
                            All variations are organized separately so you can use / customize the template very easily.</p>

                            <p>It is a clean and elegant Multipurpose Landing Page Template.
                            It will fit perfectly for Startup, Web App or any type of Web Services.
                            It has 4 background styles with 6 homepage styles. 6 pre-defined color scheme.
                            All variations are organized separately so you can use / customize the template very easily.</p>
                            <div class="mh-about-tag">
                                <ul>
                                    <li><span>php</span></li>
                                    <li><span>html</span></li>
                                    <li><span>css</span></li>
                                    <li><span>php</span></li>
                                    <li><span>wordpress</span></li>
                                    <li><span>React</span></li>
                                    <li><span>Javascript</span></li>
                                </ul>
                            </div>
                            <a href="#" class="btn btn-fill">Live Demo</a>
                        </div>
                        <div class="col-sm-7">
                            <div class="mh-portfolio-modal-img">
                                <img src="assets/images/pr-0.jif" alt="" class="img-fluid">
                                <p>All variations are organized separately so you can use / customize the template very easily.</p>
                                <img src="assets/images/pr-1.jif" alt="" class="img-fluid">
                                <p>All variations are organized separately so you can use / customize the template very easily.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--
        ===================
           QUATES
        ===================
        -->
        <section class="mh-quates image-bg home-2-img">
            <div class="img-color-overlay">
                <div class="container">
                    <div class="row section-separator">
                        <div class="each-quates col-sm-12 col-md-6">
                            <h3 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Interested to Work?</h3>
                            <p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Mirum est notare quam littera gothica.
                            quam nunc putamus parum claram,</p>
                            <a href="#mh-contact" class="btn btn-fill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--
        ===================
           PRICING
        ===================
        -->
        <section class="mh-pricing" id="mh-pricing">
            <div class="">
                <div class="container">
                    <div class="row section-separator">
                        <div class="col-sm-12 section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                            <h3>Pricing Table</h3>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="mh-pricing dark-bg shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                <i class="fa fa-calendar"></i>
                                <h4>Full-time work</h4>
                                <p>I am available for full time</p>
                                <h5>$1500</h5>
                                <ul>
                                    <li>Web Development</li>
                                    <li>Advetising</li>
                                    <li>Game Development</li>
                                    <li>Music Writing</li>
                                </ul>
                                <a href="#" class="btn btn-fill">Hire Me</a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="mh-pricing dark-bg shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                                <i class="fa fa-file"></i>
                                <h4>Fixed Price Project</h4>
                                <p>I am available for fixed roles</p>
                                <h5>$500</h5>
                                <ul>
                                    <li>Web Development</li>
                                    <li>Advetising</li>
                                    <li>Game Development</li>
                                    <li>Music Writing</li>
                                </ul>
                                <a href="#" class="btn btn-fill">Hire Me</a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="mh-pricing dark-bg shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                                <i class="fa fa-hourglass"></i>
                                <h4>Hourley work</h4>
                                <p>I am available for Hourley projets</p>
                                <h5>$50</h5>
                                <ul>
                                    <li>Web Development</li>
                                    <li>Advetising</li>
                                    <li>Game Development</li>
                                    <li>Music Writing</li>
                                </ul>
                                <a href="#" class="btn btn-fill">Hire Me</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--
        ===================
           BLOG
        ===================
        -->
        <section class="mh-blog image-bg featured-img-two" id="mh-blog">
            <div class="img-color-overlay">
                <div class="container">
                    <div class="row section-separator">
                        <div class="col-sm-12 section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                            <h3>Featured Posts</h3>
                        </div>
                        <div class="col-sm-12 col-md-4">
                             <div class="mh-blog-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                <img src="{{ asset('assets/images/b-3.png') }}" alt="" class="img-fluid">
                                <div class="blog-inner">
                                    <h2><a href="blog-single.html">A life without the daily traffic jams</a></h2>
                                    <div class="mh-blog-post-info">
                                        <ul>
                                            <li><strong>Post On</strong><a href="#">24.11.19</a></li>
                                            <li><strong>By</strong><a href="#">ThemeSpiders</a></li>
                                        </ul>
                                    </div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                                    <a href="blog-single.html">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="mh-blog-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                                <img src="{{ asset('assets/images/b-2.png') }}" alt="" class="img-fluid">
                                <div class="blog-inner">
                                    <h2><a href="blog-single.html">Proportion are what’s really needed</a></h2>
                                    <div class="mh-blog-post-info">
                                        <ul>
                                            <li><strong>Post On</strong><a href="#">24.11.19</a></li>
                                            <li><strong>By</strong><a href="#">ThemeSpiders</a></li>
                                        </ul>
                                    </div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                                    <a href="blog-single.html">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="mh-blog-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                                <img src="{{ asset('assets/images/b-1.png') }}" alt="" class="img-fluid">
                                <div class="blog-inner">
                                    <h2><a href="blog-single.html">Mounts of paper work to remember the way</a></h2>
                                    <div class="mh-blog-post-info">
                                        <ul>
                                            <li><strong>Post On</strong><a href="#">24.11.19</a></li>
                                            <li><strong>By</strong><a href="#">ThemeSpiders</a></li>
                                        </ul>
                                    </div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                                    <a href="blog-single.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--
        ===================
           Testimonial
        ===================
        -->
        <section class="mh-testimonial" id="mh-testimonial">
            <div class="home-v-img">
                <div class="container">
                    <div class="row section-separator">
                        <div class="col-sm-12 section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                            <h3>Client Reviews</h3>
                        </div>
                        <div class="col-sm-12 wow fadeInUp" id="mh-client-review" data-wow-duration="0.8s" data-wow-delay="0.3s">
                            <div class="each-client-item">
                                <div class="mh-client-item dark-bg black-shadow-1">
                                    <img src="{{ asset('assets/images/c-1.png') }}" alt="" class="img-fluid">
                                    <p>Absolute wonderful ! I am completely
                                    blown away.The very best.I was amazed
                                    at the quality</p>
                                    <h4>John Mike</h4>
                                    <span>CEO, Author.Inc</span>
                                </div>
                            </div>
                            <div class="each-client-item">
                                <div class="mh-client-item dark-bg black-shadow-1">
                                    <img src="{{ asset('assets/images/c-1.png') }}" alt="" class="img-fluid">
                                    <p>Absolute wonderful ! I am completely
                                    blown away.The very best.I was amazed
                                    at the quality</p>
                                    <h4>John Mike</h4>
                                    <span>CEO, Author.Inc</span>
                                </div>
                            </div>

                            <div class="each-client-item">
                                <div class="mh-client-item dark-bg black-shadow-1">
                                    <img src="{{ asset('assets/images/c-1.png') }}" alt="" class="img-fluid">
                                    <p>Absolute wonderful ! I am completely
                                    blown away.The very best.I was amazed
                                    at the quality</p>
                                    <h4>John Mike</h4>
                                    <span>CEO, Author.Inc</span>
                                </div>
                            </div>
                            <div class="each-client-item">
                                <div class="mh-client-item dark-bg black-shadow-1">
                                    <img src="{{ asset('assets/images/c-1.png') }}" alt="" class="img-fluid">
                                    <p>Absolute wonderful ! I am completely
                                    blown away.The very best.I was amazed
                                    at the quality</p>
                                    <h4>John Mike</h4>
                                    <span>CEO, Author.Inc</span>
                                </div>
                            </div>
                            <div class="each-client-item">
                                <div class="mh-client-item dark-bg black-shadow-1">
                                    <img src="{{ asset('assets/images/c-1.png') }}" alt="" class="img-fluid">
                                    <p>Absolute wonderful ! I am completely
                                    blown away.The very best.I was amazed
                                    at the quality</p>
                                    <h4>John Mike</h4>
                                    <span>CEO, Author.Inc</span>
                                </div>
                            </div>

                            <div class="each-client-item">
                                <div class="mh-client-item dark-bg black-shadow-1">
                                    <img src="{{ asset('assets/images/c-1.png') }}" alt="" class="img-fluid">
                                    <p>Absolute wonderful ! I am completely
                                    blown away.The very best.I was amazed
                                    at the quality</p>
                                    <h4>John Mike</h4>
                                    <span>CEO, Author.Inc</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


@include('includes.footer-portfolio')
