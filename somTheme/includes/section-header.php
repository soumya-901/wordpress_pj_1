<!-- 
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-lg">
        <a class="navbar-brand">My WordPress</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/wordpress/#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/wordpress/index.php/home/about/">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/wordpress/index.php/home/contact-us/">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header> -->

<header style="margin-bottom:5rem;" >
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark  fixed-top mt-4">
      <div class="container-xl">
        <a class="navbar-brand">SomTecho</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse flex navbar-collapse justify-content-end align-baseline mt-1" id="navbarNav">
          <!-- <div style="top: 20px;"> -->
            <div class="col col-lg-5 mt-2" >

              <?php 
          wp_nav_menu( 
            array(
              'theme_location' => 'top-menu',
              'menu_class' => 'top-bar'
              )
            );
            ?>
            </div>
            <!-- <div class="col col-lg-3">

              <?php get_search_form();?>
            </div> -->
            <!-- </div> -->
        </div>
      </div>
    </nav>
  </header>