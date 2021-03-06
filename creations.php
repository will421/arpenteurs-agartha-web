<?php $pageActive = "creations"; ?>
<?php require("navbar.php");?>

<?php 
$creaList = randomCrea();
?>

	<!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->
	<div id="blue">
	    <div class="container">
			<div class="row">
				<h3><?php echo($texteDebutCreas['titre']);?></h3>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->

	<!-- *****************************************************************************************************************
	 TITLE & CONTENT
	 ***************************************************************************************************************** -->

	 <div class="container mtb">
	 	<div class="row">
		 	<div class="col-lg-8 col-lg-offset-2 centered">
		 		<h2><?php echo($texteDebutCreas['sous-titre']);?></h2>
		 		<br>
		 		<div class="hline"></div>
		 	</div>
	 	</div>
	 </div><! --/container -->
	 
	<!-- *****************************************************************************************************************
	 PORTFOLIO SECTION
	 ***************************************************************************************************************** -->
	 <div id="portfoliowrap">
        <div class="portfolio-centered">
            <div class="recentitems portfolio">
            
			<?php
			foreach ($creaList as $element)
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
                        	</div><!-- he bg -->
						</div><!-- he view -->		
					</div><!-- he wrap -->
           </a>
				</div><!-- end col-12 -->
			 <?php };?>
                    
            </div><!-- portfolio -->
        </div><!-- portfolio container -->
	 </div><!--/Portfoliowrap -->
	 
<?php require("footer.php");?>