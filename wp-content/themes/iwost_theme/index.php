<?php get_header(); 
?>
<div class="row">
	<div class="col-sm-12 col-md-3 categories" id="paintings">
		<div class="descriptions" id="p_des" onclick="openSection(this.id)">
			<span>Paintings</span>
		</div>
	</div>	
	<div class="col-sm-12 col-md-3 categories" id="drawings">
	<div class="descriptions" id="d_des" onclick="openSection(this.id)">
			<span>Drawings</span>
		</div></div>	
	<div class="col-sm-12 col-md-3 categories" id="sculptures">
	<div class="descriptions" id="s_des" onclick="openSection(this.id)">
			<span>Sculptures</span>
		</div></div>	
	<div class="col-sm-12 col-md-3 categories" id="photography">
	<div class="descriptions" id="ph_des" onclick="openSection(this.id)">
			<span>Photography</span>
		</div></div>	
</div>


<div>
	
	<div id="p_des_content" class="overlay">
		
  <a href="javascript:void(0)" class="closebtn" id="bu1"onclick="closeSection(this.id)">&times;</a>
		<div class="container">
			<div class="overcont"><h1>
			Paintings
		</h1>
	  <div id="quad">  
	  
    <?php 
			$args = array("post_type" => "post", "order" => "ASC",  "orderby" => "menu_order", "category_name"=>"paintings");
                $the_query = new WP_Query($args);
			
			if ( $the_query->have_posts() )  : 
				while ( $the_query->have_posts() ) : $the_query->the_post();
  	?><div class="row " id="art">
		  <div class="col-sm-12 col-md-8">
			  <?php the_post_thumbnail(); ?>
		  </div>
		  <div class="col-sm-12 col-md-4">
			  <h2 class="itemtitle"><?php the_title(); ?> </h2>
			  <?php the_content();?> 
		  </div>
		   
		  </div>
				
				<?php
  
				endwhile;
		  else: echo "Coming soon!";endif;?>
  </div>
</div>
		</div>
  
	</div>
	
	<div id="d_des_content" class="overlay">
  <a href="javascript:void(0)" class="closebtn" id="bu2"onclick="closeSection(this.id)">&times;</a>
		<div class="container">
			<div class="overcont">
		<h1>
			Drawings
		</h1>
	  <div id="quad"> 
    <?php
	  
	  
			$args = array("post_type" => "post", "order" => "ASC", 'posts_per_page'   => 3, "orderby" => "menu_order", "category_name"=>"drawings");
                $the_query = new WP_Query($args);
			
			if ( $the_query->have_posts() )  : 
				while ( $the_query->have_posts() ) : $the_query->the_post();
  	?><div class="row" id="art">
		  <div class="col-sm-12 col-md-8">
			  <?php the_post_thumbnail(); ?>
		  </div>
		  <div class="col-sm-12 col-md-4">
			  <h2 class="itemtitle"><?php the_title(); ?> </h2>
			  <?php the_content();?> 
		  </div>
		   
		  </div>
	  
		 
		  
				
				<?php
  
				endwhile;
		  else: echo "Coming soon!";endif;?>
  </div>
</div>
		</div>
  
	</div>
	<div id="s_des_content" class="overlay">
		
  <a href="javascript:void(0)" class="closebtn" id="bu3"onclick="closeSection(this.id)">&times;</a>
		<div class="container">
			<div class="overcont"><h1>
			Sculptures
		</h1>
	  <div id="quad"> 
    <?php 
			$args = array("post_type" => "post", "order" => "ASC", 'posts_per_page'   => 3, "orderby" => "menu_order", "category_name"=>"sculptures");
                $the_query = new WP_Query($args);
			
			if ( $the_query->have_posts() )  : 
				while ( $the_query->have_posts() ) : $the_query->the_post();
  	?><div class="row " id="art">
		  <div class="col-sm-12 col-md-8">
			  <?php the_post_thumbnail(); ?>
		  </div>
		  <div class="col-sm-12 col-md-4">
			  <h2 class="itemtitle"><?php the_title(); ?> </h2>
			  <?php the_content();?> 
		  </div>
		   
		  </div>
				
				<?php
  
				endwhile;
		  else: echo "Coming soon!";endif;?>
  </div>
</div>
		</div>
  
	</div>
	
	<div id="ph_des_content" class="overlay">
		
  <a href="javascript:void(0)" class="closebtn" id="bu4"onclick="closeSection(this.id)">&times;</a>
		<div class="container">
			<div class="overcont"><h1>
			Photography
		</h1>
	  <div id="quad"> 
    <?php 
			$args = array("post_type" => "post", "order" => "ASC", 'posts_per_page'   => 3, "orderby" => "menu_order", "category_name"=>"photography");
                $the_query = new WP_Query($args);
			
			if ( $the_query->have_posts() )  : 
				while ( $the_query->have_posts() ) : $the_query->the_post();
  	?><div class="row " id="art">
		  <div class="col-sm-12 col-md-8">
			  <?php the_post_thumbnail(); ?>
		  </div>
		  <div class="col-sm-12 col-md-4">
			  <h2 class="itemtitle"><?php the_title(); ?> </h2>
			  <?php the_content();?> 
		  </div>
		   
		  </div>
				
				<?php
  
				endwhile;
		  else: echo "Coming soon!";endif;?>
  </div>
</div>
		</div>
	</div>
	</div>

<div id="about_section" class="overlay">
		
  <a href="javascript:void(0)" class="closebtn" id="bu5"onclick="closeSection(this.id)">&times;</a>
  <div class="overcont">
	  <div id="aboutcont" class="container"><h1>
			About
		</h1> 
		  <div class="row"><div class="col-md-6 sol-sm-12">
			  <figure><img src="http://localhost/iwost/wp-content/themes/iwost_theme/images/IMG-20180516-WA0002.jpg" width="50%"></figure>
		  </div>
			  <div class="col-md-6 sol-sm-12" id="abouttext">
				  <h3>
					  Iwona Ostaszewska
				  </h3>
			  <?php 
				 
$my_id = 69;
$post_id_5369 = get_post($my_id);
$content = $post_id_5369->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]>', $content);
echo $content;
?>
				  
		  </div>
		  </div>
		  <div class="row">
		  
		  
		  </div>
	  <div class="row d-flex justify-content-center">
		 
		  <a href="<?php echo get_option('facebook'); ?>"><div class="footericons">
	<i class="fab fa-facebook-square"></i></div></a>
	  <a href="<?php echo get_option('instagram'); ?>"><div class="footericons">
	<i class="fab fa-instagram"></i></div></a>
	 </div>
	  <div class="row d-flex justify-content-center">
	  
		  All images are copyrighted © by Iwona Ostaszewska. The use of any image from this site is prohibited unless prior written permission from the artist is obtained.
		  
		  Project and implementation of the website copyright © by Malwina Ostaszewska 2018, m.ostaszewska13@gmail.com
		  
	  </div>
	  </div>
</div>
	</div>
<div id="contact_section" class="overlay">
		
  <a href="javascript:void(0)" class="closebtn" id="bu6"onclick="closeSection(this.id)">&times;</a>
	<div class="container">
		<div class="overcont"><h1>
			Contact
		</h1>
	  <div id="form" class="col-sm-6 offset-sm-3"><?php echo do_shortcode('[wpforms id="63" title="false" description="false"]'); ?></div>
	  
</div>
	</div>
  
	</div>
<?php get_footer(); ?>