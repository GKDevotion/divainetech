    <?php
        $seo = [
            'title' => 'Divaine Tech Portfolio | Web & Software Development Projects',
            'description' => 'Explore Divaine Tech portfolio showcasing innovative web development, software solutions, mobile applications, and digital transformation projects delivered for businesses.',
            'keywords' => 'Divaine Tech portfolio, web development projects, software development projects, mobile app projects, IT solutions portfolio, technology projects',
            'author' => 'Divaine Tech'
        ];
        include_once ('elements/header.php')
    ?> 

    <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Page Header Box Start -->
                        <div class="page-header-box">
                            <h1 class="text-anime-style-3">Portfolio</h1>
                            <nav class="wow fadeInUp" data-wow-delay="0.25s">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">portfolio</li>
                                </ol>
                            </nav>
                        </div>
                        <!-- Page Header Box End -->
                    </div>
                </div>
            </div>
        </div>
	<!-- Page Header End -->

    <!-- Projects Page Start -->
        <div class="our-projects">
            <div class="container">			
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <!-- Sidebar Our Projects Nav start -->
                        <div class="our-projects-nav wow fadeInUp" data-wow-delay="0.25s">
                            <ul>
                                <li><a href="#" class="active-btn" data-filter="*">all</a></li>
                                <li><a href="#" data-filter=".digital">digital marketing</a></li>
                                <li><a href="#" data-filter=".website">website development</a></li>
                                <li><a href="#" data-filter=".app">app development</a></li>
                                <li><a href="#" data-filter=".graphics">graphics design</a></li>							
                            </ul>
                        </div>
                        <!-- Sidebar Our Projects Nav End -->
                    </div>

                    <div class="col-lg-12">
                        <!-- Project Item Box start -->
                        <div class="row project-item-boxes">
                            <div class="col-md-6 project-item-box website graphics">
                                <!-- Works Item Start -->
                                <div class="works-item">
                                    <div class="works-image">
                                        <figure class="image-anime">
                                            <img src="assets/images/works-img-1.jpg" alt="">
                                        </figure>
                                    </div>
                                    <div class="works-content">
                                        <h2>Operation Atlas</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                                <!-- Works Item End -->
                            </div>
                            
                            <div class="col-md-6 project-item-box digital website">
                                <!-- Works Item Start -->
                                <div class="works-item">
                                    <div class="works-image">
                                        <figure class="image-anime">
                                            <img src="assets/images/works-img-2.jpg" alt="">
                                        </figure>
                                    </div>
                                    <div class="works-content">
                                        <h2>Quantum Quest</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                                <!-- Works Item End -->
                            </div>
                            
                            <div class="col-md-6 project-item-box digital">
                                <!-- Works Item Start -->
                                <div class="works-item">
                                    <div class="works-image">
                                        <figure class="image-anime">
                                            <img src="assets/images/works-img-3.jpg" alt="">
                                        </figure>
                                    </div>
                                    <div class="works-content">
                                        <h2>Blue Horizon Initiative</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                                <!-- Works Item End -->
                            </div>
                            
                            <div class="col-md-6 project-item-box app">
                                <!-- Works Item Start -->
                                <div class="works-item">
                                    <div class="works-image">
                                        <figure class="image-anime">
                                            <img src="assets/images/works-img-4.jpg" alt="">
                                        </figure>
                                    </div>
                                    <div class="works-content">
                                        <h2>Project Alpha</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                                <!-- Works Item End -->
                            </div>
                            
                            <div class="col-md-6 project-item-box app">
                                <!-- Works Item Start -->
                                <div class="works-item">
                                    <div class="works-image">
                                        <figure class="image-anime">
                                            <img src="assets/images/works-img-3.jpg" alt="">
                                        </figure>
                                    </div>
                                    <div class="works-content">
                                        <h2>Terra Nova</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                                <!-- Works Item End -->
                            </div>

                            <div class="col-md-6 project-item-box graphics">
                                <!-- Works Item Start -->
                                <div class="works-item">
                                    <div class="works-image">
                                        <figure class="image-anime">
                                            <img src="assets/images/works-img-4.jpg" alt="">
                                        </figure>
                                    </div>
                                    <div class="works-content">
                                        <h2>Infinity Initiative</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                                <!-- Works Item End -->
                            </div>					
                        </div>				
                        <!-- Project Item Box End -->
                    </div>
                </div>
            </div>
        </div>
	<!-- Projects Page End -->

    <?php
        include_once ('elements/footer.php')
    ?>