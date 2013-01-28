<?php $this->inc('elements/header.php'); ?>

<!-- Début de la zone supérieure -->
	<div class="hero-unit">
		<?php   
            $a = new Area('zone_haut');  
            $a->display($c);  
    	?> 
		<h2>Contenu du haut de page</h2>
	</div>  
<!-- Fin de la zone supérieure -->

<!-- Début du container du corps -->
    <div class="row">  

        <!-- Début de la colonne de gauche -->  
        <div class="span4">  
            <?php   
                $a = new Area('corps_gauche');  
                $a->display($c);  
            ?>  
            <h2>Colonne de gauche</h2>       
        </div>  
        <!-- fin de la colonne de gauche -->  

        <!-- Début de la zone du centre -->  
        <div class="span4" style="max-height: 400px">    
            <?php              
                $a = new Area('corps_centre');  
                $a->display($c);           
            ?>  
            <h2>Colonne du centre</h2>
        </div>
        <!-- fin de la colonne du centre -->

        <!-- Début de la colonne de droite -->  
        <div class="span4">    
            <?php              
                $a = new Area('corps_droite');  
                $a->display($c);           
            ?>  
            <h2>Colonne de droite</h2>
        </div>          
        <!-- fin de la colonne de droite -->

    </div>  
<!-- Fin du container du Corps --> 

<!-- Début de la zone inférieure -->  
    <div>     
        <?php   
            $a = new Area('zone_bas');  
            $a->display($c);  
        ?>  
   		<h2>Contenu du bas de page</h2>
    </div>
<!-- Fin de la zone inférieure -->  

<?php $this->inc('elements/footer.php'); ?>