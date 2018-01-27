<?php
  /* Template Name: Custom Home */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php get_template_part('template-parts/svg'); ?>

	<div id="content" class="site-content">

<div class="home-banner-image">

  <div class="header">
    <svg viewBox="-0.003 2.698 299.094 256.22" xmlns="http://www.w3.org/2000/svg" version="1.1">
      <use xlink:href="#rooster"></use>
    </svg>
    <h1>schmidtyworks</h1>
    <h4>Web | Design | Code</h4>
  </div>

</div>

    <div class="work-section home-section">
  <h1 class="section-header"><span>Work</span></h1>
  <div class="work-section-icons">
    <ul>
      <li>
        <svg viewBox="0 0 309 309" xmlns="http://www.w3.org/2000/svg" version="1.1">
          <use xlink:href="#design"></use>
        </svg>
        <p> = Design</p>
      </li>
      <li>
        <svg viewBox="0 0 309 309" xmlns="http://www.w3.org/2000/svg" version="1.1">
          <use xlink:href="#code"></use>
        </svg>
        <p> = Build</p>
      </li>
      <li>
        <svg viewBox="0 0 309 309" xmlns="http://www.w3.org/2000/svg" version="1.1">
          <use xlink:href="#database"></use>
        </svg>
        <p> = Host</p>
      </li>
      <li>
        <svg viewBox="0 0 309 309" xmlns="http://www.w3.org/2000/svg" version="1.1">
          <use xlink:href="#dollar1"></use>
        </svg>
        <p> = Market</p>
      </li>
    </ul>
  </div>
  <div class="work-example-section">
		<?php get_template_part( 'template-parts/content', 'home' ); ?>

  </div>
</div>

<div class="responsive home-section">
  <h1 class="section-header"><span>Responsive Design</span></h1>
  <div class="screen-size">
    <img src="images/screen_size.png" alt="Website I designed at various screen sizes">
  </div>
</div>

    <div class="wood-west">
  <div class="wood-west-word">
    <p>Web Design inspired by the west.</p>
  </div>
  <div class="wood-west-child">
    <div class="wood"></div>
    <div class="code"></div>
  </div>
</div>

    <div class="offering-wrap">


  <div class="offering-section">
    <div class="offering-icon ">
      <svg  viewBox="0 0 309 309" xmlns="http://www.w3.org/2000/svg" version="1.1">
        <use xlink:href="#rocket1"></use>
      </svg>
      <h2>Fast</h2>
    </div>


  </div>

  <div class="offering-section">
    <div class="offering-icon">
      <svg viewBox="0 0 309 309" xmlns="http://www.w3.org/2000/svg" version="1.1">
        <use xlink:href="#modern"></use>
      </svg>
      <h2>Modern</h2>
    </div>

  </div>

  <div class="offering-section ">
    <div class="offering-icon code-icon">
      <svg viewBox="0 0 309 309" xmlns="http://www.w3.org/2000/svg" version="1.1">
        <use xlink:href="#code"></use>
      </svg>
      <h2>Custom</h2>
    </div>

  </div>

  <div class="offering-section">
    <div class="offering-icon affordable-icon">
      <svg viewBox="0 0 309 309" xmlns="http://www.w3.org/2000/svg" version="1.1">
        <use xlink:href="#dollar1"></use>
      </svg>
      <h2>Affordable</h2>
    </div>

  </div>
</div>

    <div class=" contact flex-parent">
  <div class="flex-child left">
    <h2>Have a Project?<br>Let's Chat</h2>
    <div class="contact-info">
      <p>schmidtyworks@gmail.com</p>
      <a href="#">C</a>
    </div>
    <div class="contact-info">
      <p>(801) 680-3695</p>
      <a href="#">C</a>
    </div>
    <p class="small-text">(Click C to copy to your clipboard)</p>
  </div>
  <div class="flex-child right">
    <img src="images/cow.jpg" alt="">
  </div>
</div>
</body>
</html>
