<?php $pageActive = "creations"; ?>
<?php require("navbar.php");?>


	<!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->
	<div id="blue">
	    <div class="container">
			<div class="row">
				<h3>
				<?php echo($creations[$crea]["titre"]);?></h3>
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
				    <div class="item active">	<!--ne mettre active que à la première diapo-->
				      <img src="
				      <?php echo($creations[$crea]["images"]["01"]);?>
		 			" alt="
		 			<?php echo($creations[$crea]["alt"]);?>">
				    </div>
				    </div>
				  </div>
				</div><! --/Carousel -->
		 	</div>
		 	
		 	<div class="col-lg-5 col-lg-offset-1">
			 	<div class="spacing"></div>
		 		<h4>
		 			<?php echo($creations[$crea]["sous-titre"]);?></h4>
		 		<p>
		 			<?php echo($creations[$crea]["texte"]);?></p>
		 	</div>
		 	
		 	<div class="col-lg-4 col-lg-offset-1">
			 	<div class="spacing"></div>
		 		<h4>Détails</h4>
		 		<div class="hline"></div>
		 		<p>
		 			<?php echo($creations[$crea]["description"]);?>
		 		</p>
		 	</div>
		 	
	 	</div><! --/row -->
	 </div><! --/container -->
	 
	<!-- *****************************************************************************************************************
	 PORTFOLIO SECTION !!!!Aleatoir sauf Courant
	 ***************************************************************************************************************** -->
	 <div id="portfoliowrap">
        <div class="portfolio-centered">
        	<h3><?php echo($texteDebutCreas["titreSingleCrea"]);?></h3>
            <div class="recentitems portfolio">
            
            
			<?php
			$compteur = 0;
			foreach ($creations as $element)
				{
			 ?>
				<div class="portfolio-item graphic-design">
            <a href="<?php echo("single-creation.php?crea=".$element['url'])?>" 
                        
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
                                <p class="a1" data-animate="fadeInDown">
                                <?php echo($element['date']);?>
                                </p>
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