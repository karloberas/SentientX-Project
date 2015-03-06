<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Our Works | Sentient X</title>
<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/style_portfolio.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/flaticon.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700,300italic|Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic|Playball' rel='stylesheet' type='text/css' />
<!--favicon-->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<script src="js/jquery.min.js"></script>
<script>
        jQuery(function($) {      
            $('.nav-toggle').hover(function() {
                $('ul.dropdown-menu', this).stop(true, true).delay(200).slideDown('100');
            }, function() {
                $('ul.dropdown-menu', this).stop(true, true).slideUp('100');
            });
        });
</script>
<style>#footer {font-size:14px;}  #footer li:before {content: "";} #footer li {padding-left: 0;}</style>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
  <nav class="navbar navbar-default navbar-fixed-top not-visible-nav" role="navigation" id="navigation" style="padding:0;">
  	<div class="container-fluid">
    	<div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
      		<a class="navbar-brand page-scroll" href="index.html"><span class="logo" style="color: #282828; margin-left:36px;">Sentient</span><span class="logo" style="color: #e74c3c;">X</span></a>
        </div><!--navbar-header-->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
	    	  <ul class="nav navbar-nav nav-adjustment">
               <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li><a href="index.html">Home</a></li>
    	  		<li class="dropdown-toggle nav-toggle"><a class="page-scroll" href="about.html">About Us <span data-toggle="dropdown" class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="about.html#page-top" class="page-scroll">Values</a></li>
                        <li><a href="about.html#team" class="page-scroll">Team</a></li>
                        <li><a href="about.html#history" class="page-scroll">History</a></li>
                    </ul>
                </li>
    	  		<li class="dropdown-toggle nav-toggle"><a href="work.html">Works and Services <span data-toggle="dropdown" class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="work.html#portfolio">Portfolio</a></li>
                        <li><a href="work.html#testimonials" class="page-scroll">Testimonials</a></li>
                        <li><a href="work.html#packages" class="page-scroll">Packages</a></li>
                    </ul>
                </li>
                <li><a href="blog/index.php">Blog</a></li>  
     	  		<li><a href="contact.html">Contact</a></li>
   	   		  </ul>
         </div><!--nav-collapse-->
	</div><!--container-->
  </nav><!--navigation-->
<div class="wrapper">
	<?php 
	$id = $_GET['id'];

	if ($id == 2) {
	?>
	<div class="image-wrapper" id="img-wrapper-2"></div>
		<div class="left-wrapper">
			<h1>Keep Gallery's Portfolio</h1>
			<h3>Imprint the moment of love.</h3>
			<div id="story">
				<h2></h2>
				<p>Keep Gallery is a team of experienced photographers with several awards providing love birds  with professional and high quality wedding photography service. The studio came to us, with a will to polish their existing website for them to "bringing the joy, spontaneity and emotions of the day" to every potential customer.</p>
				<p>&nbsp;</p>
			</div>
			
			<div id="impact">
				<h2></h2>
				<p>We discovered that every photograph tells a love story, so we simply allow them speak loud. In the two most content-enriched page: Home and Portfolio, we showcased the most stunning photographs in category. The About Us page introduces the veteran photographers, claiming to have accumulated experience of over 80 years. This is expressed in a calm, mono-toned page background. Both being creative solution provider, we worked closely with the studio by maximizing the impact of the website, and restlessly exchanged inspirations and ideas during the brainstorming phase. After the project was satisfactory delivered, we are more than glad to witness the increasing love birds who chose Keep Gallery to keep the best scene of The Day.</p>
			</div>
			<div id="livedemo">
				<h2><a href="http://www.keepgallery.com/">see it's live demo &rarr; </a></h2>
			</div>
		</div>
		
		<div class="right-wrapper">
			<div id="client">
				<h3></h3>
				<ul>
					<li>Keep Gallery Wedding Studio</li>
				</ul>
			</div>
			<div id="technique">
				<h3></h3>
				<ul>
					<li>Publication Writing</li>
					<li>Website Development</li>
					<li>Corporate Branding</li>
				</ul>
			</div>
			<div id="budget">
				<h3></h3>
				 <ul>
					<li>Design & Installation:<br>3.8k SGD</li>
					<li>Maintenance:<br>535 SGD / month</li>
				</ul>
			</div>
			<div id="share">
				<h3></h3>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><i class="flaticon-facebook12" style="font-size: 30px;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><i class="flaticon-social19" style="font-size: 30px;"></i></a></p>
			</div>
		</div>

		<div class="detail-footer">
			<h1>check out other works!</h1>
			<div class="item item-type-line">
				<a class="item-hover" href="details.php?id=3">
					<div class="item-info">
						<div class="headline">Orange Cinema</div>
						<div class="line"></div>
						<div class="details">Tasting a movie, like tasting an orange.</div>
					</div>
					<div class="mask"></div>
				</a>
				<div class="item-img" id="img3"></div>
			</div>  
			
			<div class="item item-type-line">
				<a class="item-hover" href="details.php?id=1">
					<div class="item-info">
						<div class="headline">MP Bakunawa</div>
						<div class="line"></div>
						<div class="details">For young poets, musicians, artists, and filmmakers to display their works.

	</div>
					</div>
					<div class="mask"></div>
				</a>
				<div class="item-img" id="img1"></div>
			</div>
			
			<div class="item item-type-line">
            <a class="item-hover" href="details.php?id=4">
                <div class="item-info">
                    <div class="headline">Ateneo CODE</div>
                    <div class="line"></div>
                    <div class="details">Learning is a process whereby knowledge is created through transformational experience.</div>
                </div>
                <div class="mask"></div>
            </a>
            <div class="item-img" id="img4"></div>
			</div>
			
			<div class="item item-type-line">
            <a class="item-hover" href="details.php?id=5">
                <div class="item-info">
                    <div class="headline">G'NOSH</div>
                    <div class="line"></div>
                    <div class="details">Some things are better shared...</div>
                </div>
                <div class="mask"></div>
            </a>
            <div class="item-img" id="img5"></div>
        </div>
			
			<div class="clear"></div>
		</div>

	<?php 
	} else if ($id == 3)
	{
	?>
	<div class="image-wrapper" id="img-wrapper-3"></div>
	<div class="left-wrapper">
    	<h1>Orange Cinema</h1>
        <h3>Tasting a movie, like tasting an orange.</h3>
        <div id="story">
        	<h2></h2>
            <p>Orange Cinema is a pretty out-of-mainstream cinema run by a local film aficionado couple, Shawn and Sherry. "The experience to watch your favourite piece in cinema is just fantastic; yet all those commercial cinemas only keep new released ones for a very short period." said Shawn. "I always feel like watching classical ones, whose gloriousness never fade with time. I believe there will be a group of people who appreciate the no-in-popular movies more, so our cinema is for them." </p>
            <p>&nbsp;</p>
        </div>
        
        <div id="impact">
        	<h2></h2>
        	<p>We set-up this online booking system for Orange Cinema, enabling film-aficionado clusters to browse what's on, what's coming soon, and weekly special events. Orange Cinema is hosted in a cozy cottage with bright colorful paint on the wall. We didn't like to alter its style by applying a stereotyped cinema theme such as a dark theater with red curtains hanging. Instead, we adopted a bold, soft and bright color scheme where every section is hosted in skeuomorphic frames: either a movie ticket, a storyboard, or a schedule board. We also re-designed the logo for the cinema, which is deformed from an orange into a film tape. "It's lovely," said Sherry, "orange cinema is meant for that." Since established, Shawn and Sherry embraced the easiest booking managing experience ever than before.</p>
        </div>
        <div id="livedemo">
        	<h2><a href="http://orangecinema.shirleywang.co/">see it's live demo &rarr; </a></h2>
        </div>
    </div>
    
    <div class="right-wrapper">
    	<div id="client">
        	<h3></h3>
            <ul>
            	<li>Orange Cinema Pte. Ltd.</li>
            </ul>
        </div>
        <div id="technique">
        	<h3></h3>
            <ul>
            	<li>Corporate Branding</li>
                <li>Website Development</li>
                <li>Database Establishment</li>
            </ul>
        </div>
        <div id="budget">
        	<h3></h3>
             <ul>
            	<li>Design & Installation:<br>6.2 SGD</li>
                <li>Maintenance:<br>642 SGD / month</li>
            </ul>
        </div>
        <div id="share">
        	<h3></h3>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><i class="flaticon-facebook12" style="font-size: 30px;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><i class="flaticon-social19" style="font-size: 30px;"></i></a></p>
        </div>
    </div>

	<div class="detail-footer">
			<h1>check out other works!</h1>
			<div class="item item-type-line">
				<a class="item-hover" href="details.php?id=2">
					<div class="item-info">
						<div class="headline">Keep Gallery Wedding Studio</div>
						<div class="line"></div>
						<div class="details">Imprint the moment of love.</div>
					</div>
					<div class="mask"></div>
				</a>
				<div class="item-img" id="img2"></div>
			</div>    
			
			<div class="item item-type-line">
				<a class="item-hover" href="details.php?id=1">
					<div class="item-info">
						<div class="headline">MP Bakunawa</div>
						<div class="line"></div>
						<div class="details">For young poets, musicians, artists, and filmmakers to display their works.

	</div>
					</div>
					<div class="mask"></div>
				</a>
				<div class="item-img" id="img1"></div>
			</div>
			
			<div class="item item-type-line">
            <a class="item-hover" href="details.php?id=4">
                <div class="item-info">
                    <div class="headline">Ateneo CODE</div>
                    <div class="line"></div>
                    <div class="details">Learning is a process whereby knowledge is created through transformational experience.</div>
                </div>
                <div class="mask"></div>
            </a>
            <div class="item-img" id="img4"></div>
			</div>
			
			<div class="item item-type-line">
            <a class="item-hover" href="details.php?id=5">
                <div class="item-info">
                    <div class="headline">G'NOSH</div>
                    <div class="line"></div>
                    <div class="details">Some things are better shared...</div>
                </div>
                <div class="mask"></div>
            </a>
            <div class="item-img" id="img5"></div>
        </div>
			
			<div class="clear"></div>
		</div>
<?php
	} else if ($id == 4)
	{
?>
	<div class="image-wrapper" id="img-wrapper-4"></div>
	<div class="left-wrapper">
    	<h1>Ateneo CODE</h1>
        <h3>Learning is a process whereby knowledge is created through transformational experience.</h3>
        <div id="story">
        	<h2></h2>
            <p>Ateneo CODE is a NGO inspired by a group of aspiring young minds, who aim to serve as organizational development consultants to youth and youth-oriented organizations to help train, develop and strengthen their knowledge, skills and attitude towards attaining an integrated non-academic formation. </p>
            <p>&nbsp;</p>
        </div>
        
        <div id="impact">
        	<h2></h2>
        	<p>Both CODE and SentientX believe that there is always a room for change, improvement, growth, and fun. We approve their efforts of putting learning ability into cultivation, which we believe will arise proud educational influences in future. Threrefore we were more than willing to help this avant-organization to gain more popularity, and spread their passion and service to potential clients over a wider platform. We tailored a corporate logo, with a deformed eagle's head as the leading 'C'. The interactive website combined stats, stories and photos to CODE's post activities, which brought impact to real life. It also worked perfectly alongside the e-magazine "Rel Magazine", which provides a source to the latest fun news.</p>
        </div>
        <div id="livedemo">
        	<h2><a href="http://www.ateneocode.org">see it's live demo &rarr; </a></h2>
        </div>
    </div>
    
    <div class="right-wrapper">
    	<div id="client">
        	<h3></h3>
            <ul>
            	<li>Ateneo CODE</li>
            </ul>
        </div>
        <div id="technique">
        	<h3></h3>
            <ul>
            	<li>Design & Illustration</li>
                <li>Website Development</li>
                <li>Corporate Branding</li>
                <li>Publication Design & Writing </li>
            </ul>
        </div>
        <div id="budget">
        	<h3></h3>
             <ul>
            	<li>Design & Installation:<br>5.1k SGD</li>
                <li>Maintenance:<br>214 SGD / month</li>
            </ul>
        </div>
        <div id="share">
        	<h3></h3>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><i class="flaticon-facebook12" style="font-size: 30px;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><i class="flaticon-social19" style="font-size: 30px;"></i></a></p> 
        </div>
    </div>

	<div class="detail-footer">
			<h1>check out other works!</h1>
			   
			
			<div class="item item-type-line">
				<a class="item-hover" href="details.php?id=1">
					<div class="item-info">
						<div class="headline">MP Bakunawa</div>
						<div class="line"></div>
						<div class="details">For young poets, musicians, artists, and filmmakers to display their works.</div>
					</div>
					<div class="mask"></div>
				</a>
				<div class="item-img" id="img1"></div>
			</div>
			
			<div class="item item-type-line">
				<a class="item-hover" href="details.php?id=2">
					<div class="item-info">
						<div class="headline">Keep Gallery Wedding Studio</div>
						<div class="line"></div>
						<div class="details">Imprint the moment of love.</div>
					</div>
					<div class="mask"></div>
				</a>
				<div class="item-img" id="img2"></div>
			</div> 
			
			<div class="item item-type-line">
				<a class="item-hover" href="details.php?id=3">
					<div class="item-info">
						<div class="headline">Orange Cinema</div>
						<div class="line"></div>
						<div class="details">Tasting a movie, like tasting an orange.</div>
					</div>
					<div class="mask"></div>
				</a>
				<div class="item-img" id="img3"></div>
			</div>  
			
			<div class="item item-type-line">
            <a class="item-hover" href="details.php?id=5">
                <div class="item-info">
                    <div class="headline">G'NOSH</div>
                    <div class="line"></div>
                    <div class="details">Some things are better shared...</div>
                </div>
                <div class="mask"></div>
            </a>
            <div class="item-img" id="img5"></div>
        </div>
			
			<div class="clear"></div>
		</div>
	<?php
	} else if ($id == 5) {
	?>
		<div class="image-wrapper" id="img-wrapper-5"></div>
	<div class="left-wrapper">
    	<h1>G'NOSH</h1>
        <h3>Some things are better shared...</h3>
        <div id="story">
        	<h2></h2>
            <p>Charlotte, a British housewife and mother of G'NOSH, believes that gourmet dips should be made easy and shared. G' (short for gourmet) NOSH, a food to be shared with friends, is all about sharing. Shirley, as an enthusiast in gathering and G'NOSH, sent a request to Charlotte for providing website building service, and that was the beginning of our story.</p>
            <p>&nbsp;</p>
        </div>
        
        <div id="impact">
        	<h2></h2>
        	<p>Before the establishment of a website, G'NOSH's developed a well-rounded branding solution featuring in brush font and organic food images. We inherited the previous strategy, creating a kitchen-like space by assembling photos of the organic ingredients together with headline text in brush strokes. The strokes work consistently with the product's branding style. Two weeks after the launch of the website, G'NOSH was featured in The Gourmet magazine for its unique taste and outstanding package design. The website was also recommended in the article.</p>
        </div>
        <div id="livedemo">
        	<h2><a href="http://www.gnosh.co.uk/">see it's live demo &rarr; </a></h2>
        </div>
    </div>
    
    <div class="right-wrapper">
    	<div id="client">
        	<h3></h3>
            <ul>
            	<li>G'NOSH The Gourmet Dips</li>
            </ul>
        </div>
        <div id="technique">
        	<h3></h3>
            <ul>
            	<li>Illustration & Design</li>
                <li>Website Development</li>
            </ul>
        </div>
        <div id="budget">
        	<h3></h3>
             <ul>
            	<li>Design & Installation:<br>7.2k SGD</li>
                <li>Maintenance:<br>214 SGD / month</li>
            </ul>
        </div>
        <div id="share">
        	<h3></h3>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><i class="flaticon-facebook12" style="font-size: 30px;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><i class="flaticon-social19" style="font-size: 30px;"></i></a></p> 
        </div>
    </div>

	<div class="detail-footer">
    	<h1>check out other works!</h1>
        <div class="item item-type-line">
            <a class="item-hover" href="details.php?id=2">
                <div class="item-info">
                    <div class="headline">Keep Gallery Wedding Studio</div>
                    <div class="line"></div>
                    <div class="details">Imprint the moment of love.</div>
                </div>
                <div class="mask"></div>
            </a>
            <div class="item-img" id="img2"></div>
        </div>  
        
        <div class="item item-type-line">
            <a class="item-hover" href="details.php?id=3">
                <div class="item-info">
                    <div class="headline">Orange Cinema</div>
                    <div class="line"></div>
                    <div class="details">Tasting a movie, like tasting an orange.</div>
                </div>
                <div class="mask"></div>
            </a>
            <div class="item-img" id="img3"></div>
        </div>
        
        <div class="item item-type-line">
            <a class="item-hover" href="details.php?id=4">
                <div class="item-info">
                    <div class="headline">Ateneo CODE</div>
                    <div class="line"></div>
                    <div class="details">Learning is a process whereby knowledge is created through transformational experience.</div>
                </div>
                <div class="mask"></div>
            </a>
            <div class="item-img" id="img4"></div>
        </div>
        
        <div class="item item-type-line">
				<a class="item-hover" href="details.php?id=1">
					<div class="item-info">
						<div class="headline">MP Bakunawa</div>
						<div class="line"></div>
						<div class="details">For young poets, musicians, artists, and filmmakers to display their works.</div>
					</div>
					<div class="mask"></div>
				</a>
				<div class="item-img" id="img1"></div>
			</div>
        
        <div class="clear"></div>
    </div>
	<?php
	} else {
		$id = 1;
	?>
	   <div class="image-wrapper" id="img-wrapper-1"></div>
    <div class="left-wrapper">
        <h1>MP Bakunawa</h1>
        <h3>For young poets, musicians, artists, and filmmakers to display their works.</h3>
        <div id="story">
            <h2></h2>
            <p>The website MP Bakunawa was put together by storytellers, people who make art both to live and to love. MP Bakunawa is founded by a group of young minds majoring in Arts and Humanities who declare that they want to make art fun, to make fun art, and then to share it with others.</p>
            <p>&nbsp;</p>
        </div>
        
        <div id="impact">
            <h2></h2>
            <p>MP Bakunawa is a plantation where the sprout of local art and literature grow. We wish the artworks can be placed in a calm and peaceful environment, where the readers or viewers will only concentrate their attention on the artworks themselves. We thought of piano, where enchanting melodies are created solely by black and white keys, but in the most harmonious way. This is how the base color tone was defined. After the launch of MP Bakunawa, the website embraced an increasing monthly guest flow for over 6 months, and later welcomed a stable flow until now. Some avant-award winners are attracted over and found a place of their own in MP Bakunawa.</p>
        </div>
        <div id="livedemo">
            <h2><a href="http://www.mpbakunawa.com/">see it's live demo &rarr; </a></h2>
        </div>
    </div>
    
    <div class="right-wrapper">
        <div id="client">
            <h3></h3>
            <ul>
                <li>Manic Pixie Bakunawa</li>
            </ul>
        </div>
        <div id="technique">
            <h3></h3>
            <ul>
                <li>Design & Illustration</li>
                <li>Website Development</li>
                <li>Corporate Branding</li>
            </ul>
        </div>
        <div id="budget">
            <h3></h3>
             <ul>
                <li>Design & Installation:<br>4.5k SGD</li>
                <li>Maintenance:<br>321 SGD / month</li>
            </ul>
        </div>
        <div id="share">
            <h3></h3>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><i class="flaticon-facebook12" style="font-size: 30px;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><i class="flaticon-social19" style="font-size: 30px;"></i></a></p> 
        </div>
    </div>

    <div class="detail-footer">
        <h1>check out other works!</h1>
        <div class="item item-type-line">
            <a class="item-hover" href="details.php?id=2">
                <div class="item-info">
                    <div class="headline">Keep Gallery Wedding Studio</div>
                    <div class="line"></div>
                    <div class="details">Imprint the moment of love.</div>
                </div>
                <div class="mask"></div>
            </a>
            <div class="item-img" id="img2"></div>
        </div>  
        
        <div class="item item-type-line">
            <a class="item-hover" href="details.php?id=3">
                <div class="item-info">
                    <div class="headline">Orange Cinema</div>
                    <div class="line"></div>
                    <div class="details">Tasting a movie, like tasting an orange.</div>
                </div>
                <div class="mask"></div>
            </a>
            <div class="item-img" id="img3"></div>
        </div>
        
        <div class="item item-type-line">
            <a class="item-hover" href="details.php?id=4">
                <div class="item-info">
                    <div class="headline">Ateneo CODE</div>
                    <div class="line"></div>
                    <div class="details">Learning is a process whereby knowledge is created through transformational experience.</div>
                </div>
                <div class="mask"></div>
            </a>
            <div class="item-img" id="img4"></div>
        </div>
        
        <div class="item item-type-line">
            <a class="item-hover" href="details.php?id=5">
                <div class="item-info">
                    <div class="headline">G'NOSH</div>
                    <div class="line"></div>
                    <div class="details">Somethings are better shared...</div>
                </div>
                <div class="mask"></div>
            </a>
            <div class="item-img" id="img5"></div>
        </div>
        
        <div class="clear"></div>

    </div>
	<?php
	}
	?>
	
</div>
    <div id="footer">
        <div class="back-home">
            <a id="footer-button"><div id="foo"><span class="flaticon-navigate3" style="font-size: 20px;text-align: center;"></span></div></a>
        </div>
        <div id="footer-content">
            
        <div class="content-wrapper">
        	
            <div class="footer-1">
            	<h4 style="padding-bottom:0;">about us</h4>
                <p><img src="images/logo.png" /> SentientX is a web design agency and creativity producer based in Singapore. "Sentient" stands for the ability to perceive and feel things and "X" is a cross. By delivering creative and quality design work, we are striving to perceive, sense and cross the boundary of dimensions to build the connections.</p>
            </div>
            <div class="footer-2">
            	<h4 style="padding-bottom:0;">contact us</h4>
            	<table>
                	<colgroup>
                    	<col style="width:30%;">
                        <col style="width:70%;">
                    </colgroup>
                	<tr>
                    	<td><img src="images/contacts.png" /></td>
                        <td>Tel: (65) 6790 5786/4863<br />Fax: (65) 6792 6559</td>
                    </tr>
                    <tr>
                        <td><img src="images/mail.png" /></td>
                        <td><a href="mailto:hello@sentientx.com.sg">support@sentientx.com.sg</a><br/><br/></td>
                    </tr>
                    <tr>
                        <td><img src="images/location.png" /></td>
                        <td><a href="https://goo.gl/maps/d1Rcb">Level 4<br>101A Telok Ayer Street<br>Central, Singapore 068574</a></td>
                    </tr>
                </table>
                
            </div>
            <div class="footer-3">
            	<h4 style="padding-bottom:0;">our tweets</h4>
                <div class="tweet"></div>
            </div>
            
        </div>
        <div class="footer-bottom">
        <div class="content-wrapper" style="padding:0;">
        <div class="copyright-area">
            <a class="refresh"><span class="flaticon-navigate3"></span></a>
            <p class="copyright">© 2014 <a href="about.html">SentientX</a> All Rights Reserved | <a href="terms.php" target="_blank">Terms and Conditions</a> | <a href="sitemap.html" target="_blank">Site Map</a></p>  
        </div>
        <div  id="social-area">
                <nav id="social">
            	   <ul>
                	   <li><a href="https://www.facebook.com/" target="_blank"><span class="flaticon-facebook12"></span></a></li>
                        <li><a href="https://twitter.com/sentient_x" target="_blank"><span class="flaticon-social19"></span></a></li>		<!-- Update here! -->
                        <li><a href="https://plus.google.com/" target="_blank"><span class="flaticon-google116"></span></a></li>
                        <li><a href="https://vimeo.com/" target="_blank"><span class="flaticon-vimeo3"></span></a></li>
                        <li><a href="https://github.com/" target="_blank"><span class="flaticon-github7"></span></a></li>
                    </ul>
                </nav>              
        </div><!--social-area-->
        </div><!--center-div-->
        </div><!--footer-bottom-->
        </div>    
	</div><!-- End Footer -->
<script src="js/jquery-1.11.0.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> <!-- jQuery Core -->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- Scrolling Nav JavaScript -->
<script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>
    <script>
        jQuery(function($) {
           	var slide = false;
            var height = $('#footer-content').height();
            $('#footer-button').click(function() {
                var docHeight = $(document).height();
                var windowHeight = $(window).height();
                var scrollPos = docHeight - windowHeight + height;
                $('#footer-content').animate({ height: "toggle"}, 1000);
                if(slide == false) {
                   $('#foo').toggleClass('click');
                    if($.browser.opera) {
                        $('html').animate({scrollTop: scrollPos+'px'}, 1000);
                    }
                    else {
                        $('html, body').animate({scrollTop: scrollPos+'px'}, 1000);
                        
                    }
                                   
                    slide = true;
                }
                else { 
                    slide = false;
                   
                }
                if(scrollPos == height) {
                    
                   $('#foo').addClass('click');  
                }
            });
            
            $('.refresh').click(function() {
                var docHeight = $(document).height();
                var windowHeight = $(window).height();
                var scrollPos = docHeight - windowHeight + height;
                $('#footer-content').animate({ height: "toggle"}, 1000);
                slide = false;
                $('#foo').toggleClass('click');
            });
        });
    </script>
    <!--twitter feed-->
    <script type="text/javascript" src="tweetie.js"></script>
    <script>
    $(window).load(function(){
       $('.tweet').twittie({
            username: 'sentient_x',
            dateFormat: '%b. %d, %Y',
            hideReplies: 'true',
            template: '<strong class="date">{{date}}</strong> - {{screen_name}} {{tweet}}',
            count: 10
        }, function () {
            setInterval(function() {
                var item = $('.footer-3 .tweet ul').find('li:first');

                item.animate( {marginTop: '-220px', 'opacity': '0'}, 500, function() {
                    $(this).detach().appendTo('.footer-3 .tweet ul').removeAttr('style');
                });
            }, 5000);
        });  
    });
    </script>
</body>
</html>
