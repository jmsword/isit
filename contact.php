<!doctype html>
<?PHP
	
	if ($_POST["submit"]){
		
		if (!$_POST["name"]){
			$error.='<br/><span style="color:#A91919;">Please enter your name.</span>';
		}
		
		if (!$_POST["email"]){
			$error.='<br/><span style="color:#A91919;">Please enter a valid Email address.</span>';
		}
		
		if (!$_POST["comment"]){
			$error.='<br/><span style="color:#A91919;">Please enter a comment.</span>';
		}
		
		if ($error){
			$result='<span style="color:#A91919;">Please correct the following:</span>'.$error;	
		} else {
			
			if (mail("kvosti@sandiego.edu", "Comment from website", "Name: ".$_POST['name']."
			
			Email: ".$_POST['email']."
			
			Comment: ".$_POST['comment'])) {
				
				$result='<span style="color:#19A950;">Thank you! We will contact you shortly.</span>';
				
			} else {
				$result="Error";
			}
		}	
	}	
	
?>

<html class="no-js" lang="en">
  <head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="keywords" content="isit, isit movement, isit contact, meditation, student mindfulness, student meditation, mindfulness, compassion"/>
	<meta name="description" content="The iSIT Movement raises awareness about the benefits of mindfulness and meditation practice for college students."/>
	<meta name="author" content="Jeff Sword 2015"/>
    <title>iSIT | Contact</title>
	
    <link rel="stylesheet" href="css/foundation.css" />
	<link rel="stylesheet" href="foundation-icons/foundation-icons.css" />
	<link rel="stylesheet" href="slick/slick-theme.css" />
	<link rel="stylesheet" href="slick/slick.css" />
	<link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lucida+Sans|Oswald"/>
	<link rel="normalize" href="css/normalize.css" />
	
    <script type="text/javascript" src="js/vendor/modernizr.js"></script>

  </head>
  <body>
  
	<?php
		include 'header.php';
	?>
	
	<div class="page-description">
	
		<div class="row">
		
			<div class="large-12 columns">
		
				<h3>Contact</h3>
			
			</div>
		
		</div>
		
		<div class="row">
	
			<div class="large-6 columns">
		
				<p>Want to join the movement? Share your work? Please let us know! We would love to hear from you.</p>
		
			</div>
	
			<form method="post">
	
				<div class="large-6 columns">
		
					<?PHP echo $result; ?>
		
					<label>Name:<input type="text" name="name" placeholder="Name" value="<?PHP if ($error) { echo $_POST['name'];} else { echo ""; } ?>"/></label>
		
					<label>Email:<input type="email" name="email" placeholder="Email" value="<?PHP if ($error) { echo $_POST['email'];} else { echo ""; } ?>"/></label>
		
					<label>Question/Comment:<textarea name="comment" placeholder="Your comment here..."><?PHP if ($error) { echo $_POST['comment'];} else { echo ""; } ?></textarea></label>
					
					<input type="submit" value="Submit" name="submit" class="button"/> <br/>
		
				</div>
		
			</form>
	
		</div>
		
	</div>
	
<div class="page-content">
			
	<div class="slideshow-container">
		<div class="row">
			<div class="medium-8 medium-centered columns">
				<div class="autoplay">
					<div>
						<a href="testimonies.php"><p><span style="font-style:italic;">"Meditation has benefited me in more ways than one. After being in the darkest place due to depression and anxiety, meditation allowed me to change my outlook 
						on life and see the value of the small but powerful daily wins. I know that I'm a completely different person than I used to be because of the journey that 
						meditation has taken me on and I'm forever grateful."</span> –Christina, 20, University of San Diego</p></a>
					</div>
					<div>
						<a href="testimonies.php"><p><span style="font-style:italic;">“iSIT has not only helped me to love myself, but also has helped me to understand WHAT I love about myself. It has helped me to center around my most positive attributes 
						as well as work on and explore my weaknesses, and has taught me to be gentle and compassionate towards those weaknesses. Participating in meditation is self-compassion itself, 
						so this group has only helped to enhance and fine-tune mine even more.”</span> –Nikki, 20, University of San Diego</p></a>
					</div>
					<div>
						<a href="testimonies.php"><p><span style="font-style:italic;">“iSIT proved to not only be a fun between-classes activity, but it also aided in my actual school performance. I was able to develop skills that were helpful in creating a quiet, 
						calm space to allow me to really focus on class instruction, information recall for tests, and overall academic performance. We learn how to focus on our own strengths and weaknesses 
						while participating in a community in an effort to improve not just ourselves, but also that community.”</span> –Stacy, 26, University of San Diego</p></a>
					</div>
					<div>
						<a href="testimonies.php"><p><span style="font-style:italic;">“I would go to meditation before intramural basketball games and I played tremendously better than the days I did not go to meditation before. It helped me focus in on what I needed 
						to focus on, which was myself.”</span> –Austin, 19, University of San Diego</p></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>
	
	<?php
	include 'footer.php';
	?>
	
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="js/vendor/jquery.js"></script>
	<script type="text/javascript" src="slick/slick.min.js"></script>
    <script type="text/javascript" src="js/vendor/fastclick.js"></script>
	<script type="text/javascript" src="js/foundation.min.js"></script>
	
    <script>
      $(document).foundation();
    </script>
	
	<script type="text/javascript">
		$('.autoplay').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 17000,
		});
	</script>
	
  </body>

</html>