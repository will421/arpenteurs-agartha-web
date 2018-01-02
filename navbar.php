<?php require("head.php");?>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><?php echo($titreH1);?></a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
           
			<?php
			foreach ($pages as $element)
				{
			 ?>
			 <li class="">
				 <a href="
				 <?php echo($element['lien']);?>
				 ">
				 <?php echo($element['titre']);?>
				 </a>
			</li>
			 <?php };?>
          
			<li>
          		<a href="https://www.facebook.com/ArpenteursdAgartha/" target="_blank"><i class="fa fa-facebook"></i></a>
          	</li>
           
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>