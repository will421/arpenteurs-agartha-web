<?php $pageActive = "evenements"; ?>
<?php require("navbar.php");?>

<?php 
$currentEvent= $events[$_GET["presta"]];
$eventList = randomEvent($_GET["presta"]);
?>

	<!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->
	<div id="blue">
	    <div class="container">
			<div class="row">
				<h3>
				<?php echo($currentEvent["titre"]);?></h3>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->

	<!-- *****************************************************************************************************************
	 TITLE & CONTENT
	 ***************************************************************************************************************** -->

	 <div class="container mt">
	 	<div class="row">
		 	<div class="col-lg-10 col-lg-offset-1 centered">
			 	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <!-- Indicators
				  <ol class="carousel-indicators">
				    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
				  </ol>-->
				
				  <!-- Wrapper for slides -->
				  <div class="<!--carousel-inner-->">
				    <div class="item active">
				      <img src="
					<?php echo($currentEvent["images"]["01"]);?>
			    	" alt="">
				    </div>
				    <div class="item">
				      <img src="assets/img/portfolio/single02.jpg" alt="">
				    </div>
				    <div class="item">
				      <img src="assets/img/portfolio/single03.jpg" alt="">
				    </div>
				  </div>
				</div><! --/Carousel -->
		 	</div>
		 	
		 	<div class="col-lg-10 col-lg-offset-1">
			 	<div class="spacing"></div>
		 		<h3>
				<?php echo($currentEvent["titre"]);?>
				</h3>
		 		<h4>
				<?php echo($currentEvent["sous-titre"]);?>
				</h4>
		 		<p><b>
					<?php echo($currentEvent["date"]);?> - <?php echo($currentEvent["lieu"]);?></b>
				</p>
		 		<p>
				<?php echo($currentEvent["texte"]);?></p>
		 	</div>
		 	
	 	</div><! --/row -->
	 </div><! --/container -->
	 
	<!-- *****************************************************************************************************************
	 EVENEMENTS AUTRES !!!!!! Aleatoire sauf Courant
	 ***************************************************************************************************************** -->
	 <div id="portfoliowrap">
        <div class="portfolio-centered">
        	<h3><?php echo($texteDebutEvents["titreSingleEvent"]);?></h3>
            <div class="recentitems portfolio">
			
			<?php
			$compteur = 0;
			foreach ($eventList as $element)
				{
			 ?>
				<div class="portfolio-item graphic-design">
            <a href="<?php echo("single-event.php?presta=".$element['url'])?>"
            
            class="dmbutton a2" data-animate="fadeInUp">
					<div class="he-wrap tpl6">
					<img src="
					<?php echo($element['imageLien']);?>
					" alt="
					<?php echo($element['imageAlt']);?>
					">
						<div class="he-view">
							<div class="bg a0" data-animate="fadeIn">
                                <h3 class="a1" data-animate="fadeInDown">
                                <?php echo($element['titre']);?>
                                </h3>
                                <h4 class="a1" data-animate="fadeInDown">
                                <?php echo($element['sous-titre']);?>
								</h4>
                                <h5 class="a1" data-animate="fadeInDown">
                                <?php echo($element['date']);?>
                                </h5s>
                        	</div><!-- he bg -->
						</div><!-- he view -->		
					</div><!-- he wrap -->
           </a>
				</div><!-- end col-12 -->
			 <?php 
				if(++$compteur == 5) {
				break;
				}
			};?>
                                        
                    
            </div><!-- portfolio -->
        </div><!-- portfolio container -->
	 </div><!--/Portfoliowrap -->
<?php require("footer.php");?>