<?php
	$html = "";
	if(isset($_GET['page'])){
		
		$r = $_GET['page'];
		
		if($r==="accueil"){
			$html = '
			<div class="row d-flex justify-content-between" style="margin-bottom: 10%;">
				<img class="img_header d-none d-lg-block col-lg-3" src="img/BANNIERE-1.jpg" alt="logo UndercoverWord">
				<h3 class="cover-heading col-12 col-lg-6" style="text-align: center;padding-top :0.5em;">Entrez à <strong>UndercoverWord</strong><br>pour démasquer <strong>l\'intrus</strong></h3>
				<img class="img_header d-none d-lg-block col-lg-3" src="img/BANNIERE-2.jpg" alt="logo UndercoverWord">
			</div>

			<div class="d-flex flex-column justify-content-between">
			  <div class="row d-flex justify-content-around">
			    <div class="col-12 col-md-4 col-lg-3">
			      <p class="h4">1 mot intrus</p>
			      <p>Chaque <strong>joueur</strong> a le même <strong>mot</strong>, sauf un ! Trouvez-le pour marquer des points</p>
			    </div>
			    <div class="col-12 col-md-4 col-lg-3">
			      <h4>Sérieux ou bluffer ?</h4>
			        <p>Adaptez votre <strong>stratégie</strong> à votre <strong>jeu</strong> et à celui des autres</p>
			    </div>
			    <div class="col-12 col-md-4 col-lg-3">
			      <h4><strong>Multijoueurs en ligne</strong></h4>
			        <p>Plus y\'en a, plus le <strong>jeu</strong> est brouillé. Un <strong>jeu</strong> de poker ...</p>
			    </div>
			  </div>

			  <p class="lead" style="padding-top: 35px">
			    <a href="launcher/launcher.zip" target="_blank" class="btn btn-lg btn-secondary">Télécharger le jeu</a>
			  </p>
			</div>
			';

		}
		else if($r==="regles"){
			$html = '
	        <p class="regles">Après avoir <a href="launcher/launcher.zip" target="_blank" class="link_regles">téléchargé</a> le jeu et cliqué sur Launcher.exe pour lancer le jeu.</p>
	        <p class="regles">Créez votre salle de jeu avec tous les participants:</p>
	        <ul>
	          <li class="regles"><p>Un 1er joueur renseigne son <kbd>pseudo</kbd> et clique sur <kbd>créer une salle.</kbd></p></li>
	          <li class="regles"><p>Un numéro de salle est donné au 1er joueur. Les autres joueurs n\'ont plus qu\'à renseigner leur <kbd>pseudo</kbd> et entrer le <kbd>numéro de la salle.</kbd></p></li>
	          <li class="regles"><p>Chaque joueur reçoit son mot : tous les joueurs ont le même, sauf un joueur qui reçoit un mot différent mais proche du mot de référence.</p></li>
	        </ul>
	        <p class="regles">Jouez !</p>
	        <ul>
	          <li class="regles"><p>Chaque joueur fournit aux autres l\'<kbd>indice</kbd> qu\'il souhaite donner. Il n\'y a pas d\'ordre pour jouer : chacun peut écrire son <kbd>indice</kbd> avant ou après les autres. C\'est votre stratégie : choisissez bien votre indice et le moment où vous le dévoilez!</p></li>
	          <li class="regles"><p>Une fois que tous les joueurs ont indiqué leur 1er indice, chacun écrit un nouvel <kbd>indice</kbd>, et ainsi de suite.</p></li>
	          <li class="regles"><p>Si un joueur pense avoir découvert l\'intrus il peut cliquer sur <kbd>voter</kbd>.</p></li>
	          <li class="regles"><p>Dès que plus de 50% des joueurs ont cliqué sur <kbd>voter</kbd>, le jeu s\'arrête et place au jugement ! Cliquez sur le joueur que vous pensez être l\'intrus.</p></li>
	          <li class="regles"><p>Vous pouvez modifier votre choix autant que bon vous semble. Et si vous commenciez par bluffer pour influencer les autres?</p></li>
	          <li class="regles"><p>Une fois votre choix définitif cliquez sur <kbd>valider</kbd>. Les joueurs ayant la bonne réponse marquent des points.</p></li>
	        </ul>
			';
		}	
		else if($r==="contact"){
			$html = '
			
			<p class="lead">Vous rencontrez un bug ou vous avez des idées pour prendre plus de plaisir avec le jeu ?</p>
	        <p class="lead">Contactez-nous</p><br>

	        <form method="post">
	          <div class="form-group row">

	            <div class="input-group mb-3 d-flex justify-content-center">
	              <label for="contact_email" class="col-11 col-lg-2 col-form-label label_form d-flex justify-content-center align-items-center">E-mail</label>
	              <div class="col-12 col-lg-9">
	                <input type="email" class="form-control" name="contact_email" id="contact_email" aria-describedby="emailUser" required>
	              </div>
	            </div>

	            <div class="input-group mb-3 d-flex justify-content-center">
	              <label for="contact_sujet" class="col-11 col-lg-2 col-form-label label_form d-flex justify-content-center align-items-center">Sujet</label>
	              <div class="col-12 col-lg-9">
	                <select class="custom-select" name="contact_sujet" id="contact_sujet" required>
	                  <option selected></option>
	                  <option value="Bug">J\'ai trouvé un bug</option>
	                  <option value="Idée">J\'ai une idée pour améliorer le jeu</option>
	                </select>
	              </div>
	            </div>

	            <div class="input-group mb-3 d-flex justify-content-center">
	              <label for="contact_message" class="col-11 col-lg-2 col-form-label label_form d-flex justify-content-center align-items-center">Message</label>
	              <div class="col-12 col-lg-9">
	                <textarea class="form-control" name="contact_message" id="contact_message" aria-label="With textarea" required></textarea>
	              </div>
	            </div>
	          </div>
	          
	          <div class="d-flex align-items-center justify-content-center">
	          <p id=\'resultat_msg\' class=\'empty\' role="alert"></p>
	          </div>

	          
	          
	        </form>

        	<p class="d-flex justify-content-center indication">Tous les champs sont obligatoires</p>

	        <div class="d-flex align-items-center justify-content-center">
	          <button type="submit" class="btn btn-primary" id="submit-btn" onclick="submit_form()">Envoyer</button>
	        </div>

		    ';
		}
		else{
			$html = "Désolé, une erreur est survenue dans le chargement de la page";
		}
	}
	else
	{
		$html = '
		<div class="row d-flex justify-content-between" style="margin-bottom: 10%;">
			<img class="img_header d-none d-lg-block col-lg-3" src="img/BANNIERE-1.jpg" alt="logo UndercoverWord">
			<h3 class="cover-heading col-12 col-lg-6" style="text-align: center;padding-top :0.5em;">Entrez à <strong>UndercoverWord</strong><br>pour démasquer <strong>l\'intrus</strong></h3>
			<img class="img_header d-none d-lg-block col-lg-3" src="img/BANNIERE-2.jpg" alt="logo UndercoverWord">
		</div>

		<div class="d-flex flex-column justify-content-between">
		  <div class="row d-flex justify-content-around">
		    <div class="col-12 col-md-4 col-lg-3">
		      <p class="h4">1 mot intrus</p>
		      <p>Chaque <strong>joueur</strong> a le même <strong>mot</strong>, sauf un ! Trouvez-le pour marquer des points</p>
		    </div>
		    <div class="col-12 col-md-4 col-lg-3">
		      <h4>Sérieux ou bluffer ?</h4>
		        <p>Adaptez votre <strong>stratégie</strong> à votre <strong>jeu</strong> et à celui des autres</p>
		    </div>
		    <div class="col-12 col-md-4 col-lg-3">
		      <h4><strong>Multijoueurs en ligne</strong></h4>
		        <p>Plus y\'en a, plus le <strong>jeu</strong> est brouillé. Un <strong>jeu</strong> de poker ...</p>
		    </div>
		  </div>

		  <p class="lead" style="padding-top: 35px">
		    <a href="launcher/launcher.zip" target="_blank" class="btn btn-lg btn-secondary">Télécharger le jeu</a>
		  </p>
		</div>
		';
	}
	echo $html;
?>