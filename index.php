<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Upper HTML Website Template</title>
<!--
Upper Template
http://www.templatemo.com/tm-497-upper
-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  
    <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(  )?>/font-awesome-4.5.0/css/font-awesome.min.css">                
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(  )?>/css/bootstrap.min.css">                                      
    <!-- Bootstrap style -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(  )?>/css/hero-slider-style.css">                              
    <!-- Hero slider style (https://codyhouse.co/gem/hero-slider/) -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(  )?>/css/magnific-popup.css">                                 
    <!-- Magnific popup style (http://dimsemenov.com/plugins/magnific-popup/) -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(  )?>/css/templatemo-style.css">                                   
    <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
          <?php wp_head();?>
</head>

    <body <?php body_class()?>>

       
        
        <!-- Content -->
        <div class="cd-hero">

            <!-- Navigation -->        
            <div class="cd-slider-nav">
                <nav class="navbar">
                    <div class="tm-navbar-bg">
                        
                        <a class="navbar-brand text-uppercase" href="#"><i class="fa <?php the_field( 'logoicon', 'option' ); ?> tm-brand-icon"></i><?php the_field( 'logo_text', 'option' ); ?></a>

                        <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                            &#9776;
                        </button>
                        <div class="collapse navbar-toggleable-md text-xs-center text-uppercase tm-navbar" id="tmNavbar">
                            <ul class="nav navbar-nav">
                                <li class="nav-item active selected">
                                    <a class="nav-link" href="#0" data-no="1">Home <span class="sr-only">(current)</span></a>
                                </li>                                
                                <li class="nav-item">
                                    <a class="nav-link" href="#0" data-no="2">First Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#0" data-no="3">Second</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#0" data-no="4">Third Grid</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#0" data-no="5">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#0" data-no="6">Contact</a>
                                </li>
                            </ul>
                        </div>                        
                    </div>

                </nav>
            </div> 

            <ul class="cd-hero-slider">

                <!-- Page 1 Home -->
                <li class="selected">
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content tm-page-pad" data-page-no="1">
                            <div class="row">
                                    <div class="tm-3-col-container">                                        
                                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 tm-3-col-textbox">
                                                <div class="text-xs-left tm-textbox tm-textbox-padding tm-bg-white-translucent tm-3-col-textbox-inner">
                                                    <i class="fa fa-4x <?php the_field( 'content_1_icon', 'option' ); ?> tm-home-fa"></i>
                                                    <h2 class="tm-text-title"><?php the_field( 'content_1_title', 'option' ); ?></h2>                                           
                                                    <p class="tm-text"><?php the_field( 'content_1_description', 'option' ); ?></p>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 tm-3-col-textbox">
                                                <div class="text-xs-left tm-textbox tm-textbox-padding tm-bg-white-translucent tm-3-col-textbox-inner">
                                                    <i class="fa fa-4x <?php the_field( 'content_1_icon_copy', 'option' ); ?> tm-home-fa"></i>
                                                    <h2 class="tm-text-title"><?php the_field( 'content_1_title_copy', 'option' ); ?>!</h2>
                                                    <p class="tm-text"><?php the_field( 'content_1_description_copy', 'option' ); ?></p>
                                                </div>          
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 tm-3-col-textbox">
                                                <div class="text-xs-left tm-textbox tm-textbox-padding tm-bg-white-translucent tm-3-col-textbox-inner">
                                                    <i class="fa fa-4x <?php the_field( 'content_1_icon_copy2', 'option' ); ?> tm-home-fa"></i>
                                                    <h2 class="tm-text-title"><?php the_field( 'content_1_title_copy2', 'option' ); ?></h2>
                                                    <p class="tm-text"><?php the_field( 'content_1_description_copy2', 'option' ); ?></p>
                                                </div>          
                                            </div>                                        
                                    </div>
                            </div>
                        </div>
                    </div>
                </li>
                
                <!-- Page 2 Gallery One -->
                <li>                    
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content" data-page-no="2" data-page-type="gallery">
                            <div class="tm-img-gallery-container">
                                <div class="tm-img-gallery gallery-one">
                                <!-- Gallery One pop up connected with JS code below -->                                    
                                    <div class="tm-img-gallery-info-container">                                    
                                        <h2 class="tm-text-title tm-gallery-title tm-white"><span class="tm-white"><?php the_field( 'titlerrrr', 'option' ); ?></span></h2>
                                        <p class="tm-text"><?php the_field( 'descrigrrgption', 'option' ); ?>
                                        </p>
                                    </div>




                                    <?php if ( have_rows( 'add_content', 'option' ) ) : ?>
                                    <?php while ( have_rows( 'add_content', 'option' ) ) : the_row(); ?>

                                        <div class="grid-item">
                                            <figure class="effect-ruby">
                                            <?php $imageff = get_sub_field( 'imageff' ); ?>
                                            <?php if ( $imageff ) : ?>
                                                <img class="img-fluid tm-img" src="<?php echo esc_url( $imageff['url'] ); ?>" alt="<?php echo esc_attr( $imageff['alt'] ); ?>" />
                                            <?php endif; ?>
                
                                                <figcaption>
                                                    <h2 class="tm-figure-title"><?php the_sub_field( 'titleff' ); ?></h2>
                                                    <p class="tm-figure-description"><?php the_sub_field( 'descriptiongg' ); ?></p>
                                                    <?php $imageff_copy = get_sub_field( 'imageff_copy' ); ?>
                                                    <?php if ( $imageff_copy ) : ?>
                     
                                                        <a href=" <?php echo esc_url( $imageff_copy['url'] ); ?>">View more</a>
                                                    <?php endif; ?>
                                                    
                                                </figcaption>      

                                            </figure>
                                        </div>

                                        <?php endwhile; ?>
                                    <?php else : ?>
                                        <?php // no rows found ?>
                                    <?php endif; ?>
                                    
                                    
                                </div>                                 
                            </div>
                        </div>                                                    
                    </div>                    
                </li>

                <!-- Page 3 Gallery Two -->
                <li>                    
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content" data-page-no="3" data-page-type="gallery">
                            <div class="tm-img-gallery-container tm-img-gallery-container-2">
                                <div class="tm-img-gallery gallery-two">
                                <!-- Gallery Two pop up connected with JS code below -->
                                    
                                    <div class="tm-img-gallery-info-container">                                    
                                        <h2 class="tm-text-title tm-gallery-title"><span class="tm-white"><?php the_field( 'titlerrrrs', 'option' ); ?></span></h2>
                                        <p class="tm-text"><span class="tm-white"><?php the_field( 'descrigrrgptionss', 'option' ); ?></span>
                                        </p>
                                    </div>



                                    <?php if ( have_rows( 'add_contentss', 'option' ) ) : ?>
                                    <?php while ( have_rows( 'add_contentss', 'option' ) ) : the_row(); ?>

                                    <div class="grid-item">
                                        <figure class="effect-ruby">
 
                                            <?php $imagefffds = get_sub_field( 'imagefffds' ); ?>
                                            <?php if ( $imagefffds ) : ?>
                                                <img class="img-fluid tm-img" src="<?php echo esc_url( $imagefffds['url'] ); ?>" alt="<?php echo esc_attr( $imagefffds['alt'] ); ?>" />
                                            <?php endif; ?>
                                            <figcaption>
                                                <h2 class="tm-figure-title"><?php the_sub_field( 'titlefffsd' ); ?></h2>
                                                <p class="tm-figure-description"><?php the_sub_field( 'descriptionggfdf' ); ?></p>
                                                <?php $imagefffds_copy = get_sub_field( 'imagefffds_copy' ); ?>
                                                <?php if ( $imagefffds_copy ) : ?>
                                                    
                                                    <a href=" <?php echo esc_url( $imagefffds_copy['url'] ); ?>">View more</a>
                                                <?php endif; ?>
                                              
                                            </figcaption>           
                                        </figure>
                                    </div>

                                    <?php endwhile; ?>
                                    <?php else : ?>
                                        <?php // no rows found ?>
                                    <?php endif; ?>


                                </div>                                 
                            </div>
                        </div>                      
                    </div>
                </li>

                <!-- Page 4 Gallery Three -->
                <li>
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content" data-page-no="4" data-page-type="gallery">                        
                            <div class="tm-img-gallery-container tm-img-gallery-container-3">
                                <div class="tm-img-gallery gallery-three">
                                <!-- Gallery Two pop up connected with JS code below -->
                                    
                                    <div class="tm-img-gallery-info-container">                                    
                                        <h2 class="tm-text-title tm-gallery-title"><span class="tm-white"><?php the_field( 'titlerrrrsg', 'option' ); ?></span></h2>
                                        <p class="tm-text"><span class="tm-white"><?php the_field( 'descrigrrgptionssg', 'option' ); ?></span>
                                        </p>                                     
                                    </div>



                                    <?php if ( have_rows( 'add_contentssgd', 'option' ) ) : ?>
                                        <?php while ( have_rows( 'add_contentssgd', 'option' ) ) : the_row(); ?>
                                        <div class="grid-item">
                                            <figure class="effect-ruby">
                                               
                                                <?php $imagefffdsf = get_sub_field( 'imagefffdsf' ); ?>
                                                <?php if ( $imagefffdsf ) : ?>
                                                    <img class="img-fluid tm-img" src="<?php echo esc_url( $imagefffdsf['url'] ); ?>" alt="<?php echo esc_attr( $imagefffdsf['alt'] ); ?>" />
                                                <?php endif; ?>
                                                <figcaption>
                                                    <h2 class="tm-figure-title"><?php the_sub_field( 'titlefffsdf' ); ?></h2>
                                                    <p class="tm-figure-description"><?php the_sub_field( 'descriptionggfdff' ); ?></p>
                                                   
                                                    <?php $imagefffdsf_copy = get_sub_field( 'imagefffdsf_copy' ); ?>
                                                    <?php if ( $imagefffdsf_copy ) : ?>
                                                       
                                                        <a href="<?php echo esc_url( $imagefffdsf_copy['url'] ); ?>">View more</a>
                                                    <?php endif; ?>
                                                </figcaption>           
                                            </figure>
                                        </div>
                                        <?php endwhile; ?>
                                    <?php else : ?>
                                        <?php // no rows found ?>
                                    <?php endif; ?>
                                    
                                    
                                </div>                                 
                            </div> <!-- .tm-img-gallery-container -->
                        </div>         
                    </div>  
                </li>

                <!-- Page 5 About -->
                <li>
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content tm-page-width" data-page-no="5">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="tm-flex">
                                        <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-textbox-padding tm-white-box-margin-b">
                                            <h2 class="tm-text-title"><?php the_field( '1st_part_title', 'option' ); ?></h2>
                                            <p class="tm-text"><?php the_field( '1st_part_content', 'option' ); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="tm-flex">
                                        <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding">
                                            <h2 class="tm-text-title"><?php the_field( '2nd_part_title', 'option' ); ?></h2>
                                            <p class="tm-text"><?php the_field( '2nd_part_content', 'option' ); ?></p>
                                        </div>
                                        <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding">
                                            <h2 class="tm-text-title"><?php the_field( '3rd_part_title', 'option' ); ?></h2>
                                            <p class="tm-text"><?php the_field( '3rd_part_title', 'option' ); ?></p>     
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                        </div>              
                    </div> <!-- .cd-full-width -->

                </li>

                <!-- Page 6 Contact Us -->
                <li>
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content tm-page-pad" data-page-no="6">
                            <div class="tm-contact-page">                                
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="tm-flex tm-contact-container">                                
                                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding tm-textbox-padding-contact">
                                                <h2 class="tm-contact-info"><?php the_field( 'titleffff', 'option' ); ?></h2>
                                                <p class="tm-text"><?php the_field( 'descriptionfsfasvg', 'option' ); ?></p>                                                
                                                
                                                <!-- contact form -->
                                                <div action="index.html" method="post" class="tm-contact-form">

                                                    <!-- <div class="form-group">
                                                        <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name"  required/>
                                                    </div>
                                        
                                                    <div class="form-group">                                                        
                                                        <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email"  required/>
                                                    </div>                                                        
                                                    
                                                    <div class="form-group">
                                                        <textarea id="contact_message" name="contact_message" class="form-control" rows="5" placeholder="Your message" required></textarea>
                                                    </div> 

                                                    <button type="submit" class="pull-xs-right tm-submit-btn">Send</button>   -->

                                                    <?php echo do_shortcode('[contact-form-7 id="7" title="Contact form 1"]')?>
                                                
                                                </div>  



                                            </div>

                                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding tm-textbox-padding-contact">
                                                <h2 class="tm-contact-info"><?php the_field( 'address', 'option' ); ?></h2>
                                                <!-- google map goes here -->
                                                <div id="google-map"></div>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>    

                        </div>
                        
                    </div> <!-- .cd-full-width -->
                </li>
            </ul> <!-- .cd-hero-slider -->
            
            <footer class="tm-footer">
            
                <div class="tm-social-icons-container text-xs-center">
                    <!-- <a href="#" class="tm-social-link"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="tm-social-link"><i class="fa fa-google-plus"></i></a>
                    <a href="#" class="tm-social-link"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="tm-social-link"><i class="fa fa-behance"></i></a>
                    <a href="#" class="tm-social-link"><i class="fa fa-linkedin"></i></a> -->
                    <?php if ( have_rows( 'add_social', 'option' ) ) : ?>
                        <?php while ( have_rows( 'add_social', 'option' ) ) : the_row(); ?>
                        <a href="<?php the_sub_field( 'linkff' ); ?>" class="tm-social-link"><i class="fa <?php the_sub_field( 'iconff' ); ?>"></i></a>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <?php // no rows found ?>
                    <?php endif; ?>
                </div>
                
                <p class="tm-copyright-text"><?php the_field( 'copyright_text', 'option' ); ?></p>

            </footer>
                    
        </div> <!-- .cd-hero -->
        

        <!-- Preloader, https://ihatetomatoes.net/create-custom-preloading-screen/ -->
        <div id="loader-wrapper">
            
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

        </div>
        
        <!-- load JS files -->
        <script src="<?php echo get_template_directory_uri(  )?>/js/jquery-1.11.3.min.js"></script>         <!-- jQuery (https://jquery.com/download/) -->
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap (http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h) --> 
        <script src="<?php echo get_template_directory_uri(  )?>/js/bootstrap.min.js"></script>             <!-- Bootstrap js (v4-alpha.getbootstrap.com/) -->
        <script src="<?php echo get_template_directory_uri(  )?>/js/hero-slider-main.js"></script>          <!-- Hero slider (https://codyhouse.co/gem/hero-slider/) -->
        <script src="<?php echo get_template_directory_uri(  )?>/js/jquery.magnific-popup.min.js"></script> <!-- Magnific popup (http://dimsemenov.com/plugins/magnific-popup/) -->
        <script src="<?php echo get_template_directory_uri(  )?>/js/custom.js"></script> <!-- Magnific popup (http://dimsemenov.com/plugins/magnific-popup/) -->
        
        <script>

          

        </script>            
<?php wp_footer()?>
</body>
</html>