<?php $pageActive = "accueil"; ?>
<?php require("navbar.php");?>



	<!-- *****************************************************************************************************************
	 HEADERWRAP
	 ***************************************************************************************************************** -->
	<div id="headerwrap">
	    <div class="container">
			<div class="row cadre">
				<div class="col-md-offset-2 col-md-8">
					<img src="assets/img/titre.png" class="img-responsive">
				</div>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /headerwrap -->
	
	<!-- *****************************************************************************************************************
	 ASSO ABOUT
	 ***************************************************************************************************************** -->

	 <div class="container mtb">
	 	<div class="row">
	 	
	 		<div class="col-sm-6">
	 			<img class="img-responsive" src="assets/img/image-intro.jpg" alt="">
	 		</div>
	 		
	 		<div class="col-lg-6">
		 		<h3><?php echo($introAsso["titre"]); ?></h3>
		 		<p><?php echo($introAsso["texte"]); ?>
				</p>
	 		</div>
	 	</div><! --/row -->
	 </div><! --/container -->

	<!-- *****************************************************************************************************************
	 SERVICE LOGOS
	 ***************************************************************************************************************** -->
	 <div id="service">
	 
       <!-- <h3 class="centered">ACTIVITES</h3>-->
	 	<div class="container">
 			<div class="row centered">
	 	
 			 			
 			<?php
			foreach ($icones as $element)
				{
			 ?>
 				<div class="col-sm-4">
 					<i>
						<img src="
						<?php echo($element['imageLien']) ;?>
						" alt="
						<?php echo($element['imageAlt']);?>
						">
 					</i>
 					<h4>
 						<?php echo($element['titre']);?>
 					</h4>
 					<p>
 						<?php echo($element['texte']);?> 						
 					</p>
 						<br/>
 						<a href="
 						<?php echo($element['lien']);?>
 						" class="btn btn-theme">
 						<?php echo($element['titreBtn']);?>
 						</a>
 				</div>
			 <?php };?>
 					 				
	 		</div>
	 	</div><! --/container -->
	 </div><! --/service -->
	 
	 <!-- *****************************************************************************************************************
	PROCHAIN EVENT
	 ***************************************************************************************************************** -->

	 <div class="container mtb">
	 	<div class="row">
	 	
	 		<div class="col-sm-6">
	 			<img class="img-responsive" src="<?php echo($events['placeAuxJeux2018']['imageLien']); ?>" alt="">
	 		</div>
	 		
	 		<div class="col-lg-6">
		 		<h3>Prochain événement !</h3>
		 		<h4><?php echo($events['placeAuxJeux2018']['titre']); ?> - <?php echo($events['placeAuxJeux2018']["lieu"]);?></h4>
				</p>
		 		<p><?php echo($events['placeAuxJeux2018']["texte"]); ?>
				</p>
				
 				<p><br/><a href="single-event.php?presta=<?php echo($events[placeAuxJeux2018]["url"])?>" class="btn btn-theme">Voir l'affiche</a></p>
	 		</div>
	 	</div><! --/row -->
	 </div><! --/container -->

		 
<?php require("footer.php");?>
