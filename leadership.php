<!doctype html>
<html class="no-js" lang="en">
  <head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="keywords" content="isit, isit movement, isit leadership, meditation, student mindfulness, student meditation, mindfulness, compassion"/>
	<meta name="description" content="The iSIT Movement raises awareness about the benefits of mindfulness and meditation practice for college students."/>
	<meta name="author" content="Jeff Sword 2015"/>
    <title>iSIT | Leadership</title>
	
    <link rel="stylesheet" href="css/foundation.css" />
	<link rel="stylesheet" href="foundation-icons/foundation-icons.css" />
	<link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lucida+Sans|Oswald"/>
	<link rel="normalize" href="css/normalize.css" />
	
    <script type="text/javascript" src="../js/vendor/modernizr.js"></script>
	
  </head>
  <body>
  
	<?php
		include 'header.php';
	?>
	
	<div class="page-description">
	
		<div class="row">
	
			<div class="large-12 columns">
		
				<h3>Leadership</h3>
				
				<blockquote>
					<p>“<span style="font-style:italic;">Transformational Leadership</span> occurs when one or more 
					persons engage with others in such a way that leaders and followers raise one another to higher 
					levels of motivation and morality.” –James MacGregor Burns. <span style="font-style:italic;">Leadership</span>, 1978</p> 
				</blockquote>
				
			
				<p>This serves as an ongoing blog for the working papers of students exploring the nature of leadership. Click below to read how 
				students are investigating leadership theory and practice. If you are interested in contributing your work on leadership, please 
				send us a comment from the <a href="contact.php">contact</a> page!</p>
		
			</div>
	
		</div>
	
	</div>
	
	<div class="page-content">
	
		<div class="row">
		
			<div class="large-12 columns">
			
				<ul class="accordion" data-accordion>
					<li class="accordion-navigation">
						<a href="#panel1a"><span style="font-style:italic;">Leadership and Mindfulness: Definitions and Applications</span> 
						<strong>- Sidney Widmark, University of San Diego</strong></a>
						<div id="panel1a" class="content">
							<span style="font-style:italic;">Leadership and Mindfulness: Definitions and Applications</span> 
							is a synthesis of literature and personal understandings of mindfulness, a practice regarded by the author as one that 
							enhances moment-by-moment experience. <a href="docs/leadership_and_mindfulness.pdf" target="_blank">Read full essay</a>
						</div>
					</li>
					<li class="accordion-navigation">
						<a href="#panel2a"><span style="font-style:italic;">Being, Knowing, and Doing</span><strong> - Sue Carter Kahl, University of San Diego</strong></a>
						<div id="panel2a" class="content">
							It started with a question: What is your work? On the surface, that work was to explore the relationship between leadership and 
							mindfulness for a course. On a deeper level, the work was to discover the connection for myself, discern my emerging place in the 
							world and find integration between the seemingly disparate avenues to which I felt called. <a href="docs/BeingKnowingDoing.SueCarterKahl.pdf" target="_blank">Read full essay</a>
						</div>
					</li>
					<li class="accordion-navigation">
						<a href="#panel3a">Your work here!</a>
						<div id="panel3a" class="content">
							<p>Send us a comment from the <a href="contact.php">contact</a> page to have your work displayed here!</p>
						</div>
					</li>					
				</ul>
			
			</div>
		
		</div>
	
	</div>
	
	<?php
	include 'footer.php';
	?>
	
	<script type="text/javascript" src="js/vendor/jquery.js"></script>
    <script type="text/javascript" src="js/vendor/fastclick.js"></script>
	<script type="text/javascript" src="js/foundation.min.js"></script>
	<script type="text/javascript" src="js/foundation.accordion"></script>
	
    <script>
      $(document).foundation();
    </script>
	<script type="text/javascript">
       $(".accordion li").on("click", "a:eq(0)", function (event)
      {
        var li_parent = $(this).parent();
		
		$('html, body').animate({
			scrollTop: $('ul.accordion').offset().top
			});

        if(li_parent.hasClass('active'))
          $(".accordion li div.content:visible").slideToggle("slow");
        else
        {
          $(".accordion li div.content:visible").slideToggle("slow");
          $(this).parent().find(".content").slideToggle("slow");
        }
      });
	</script>
	
  </body>

</html>