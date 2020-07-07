<?php
	$success_msg = "";
	$email = "";
    $sujet = "";
    $comment = "";

    // On vérifie que tous les paramètres sont bien transmis au serveur une fois que l'utilisateur a cliqué sur le boutton
	if(isset($_GET['boutton']) && isset($_GET['email']) && isset($_GET['sujet']) && isset($_GET['message'])){

		$statut = $_GET['boutton'];
		
		// Si le paramètre boutton est celui attendu, alors on déroule la logique serveur
		if($statut==="clique"){	

			// Sécurisation des valeurs entrées par l'utilisateur
		    $email = htmlspecialchars($_GET["email"]);
		    $sujet = htmlspecialchars($_GET["sujet"]);
		    $comment = htmlspecialchars($_GET["message"]);

		    // Conversion des valeurs dans le type chaines de caractères
		    $strEmail = settype($email, "string");
		    $strSujet = settype($sujet, "string");
		    $strComment = settype($comment, "string");

		    // On vérifie si le mail respecte bien les standards
		    $mailValid = false;
		    if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $email)){
        		$mailValid = true;
    		}

    		// Préparation du message à envoyer
		    date_default_timezone_set("Europe/Paris");
		    $timeMsg = date("j M Y à H:i:s");
		    $msg = "Message de : " . $email . "\nLe : " . $timeMsg . "\nMessage :\n" . $comment. "\n\n";

		    // Pour traiter les informations reçues, on vérifie qu'on a réussi à les sécuriser (=conversion en chaines de caractères réussie)
		    if(($strEmail == true) && ($strSujet == true) && ($strComment == true)){
		        
		        // Toutes les cases sont correctement remplies ?
		        if($mailValid == true && (strcasecmp("Bug", $sujet)==0 || strcasecmp("Idée", $sujet)==0) && strlen($comment)>0){
		            
		            // Si toutes les cases sont remplies, alors on essaie d'envoyer un email
		            $headers = "From: undercoverword@gmail.com";
					
					// Mail() retourne TRUE si le mail a été accepté pour livraison
					if(mail("undercoverword@gmail.com", $sujet, $msg, $headers) == true){
						$success_msg = "Merci ! Votre message a été transmis à l'équipe UndercoverWord";
					}
					
					// Si le mail est refusé pour la livraison
					else{
						$success_msg = "Oops ! Une erreur est survenue lors de l'envoi :(";
					}
		        }

		        // Sinon, sur quoi porte l'erreur
		        else{
		        	if($mailValid == false){
		            	if(strlen($email)==0){
		            		echo "<div>L'email n'est pas indiqué</div>";
		            	}
		            	else{
		            		echo "<div>L'email renseigné présente une erreur</div>";
	            		}
	            	}
	            	if(strcasecmp("Bug", $sujet)!=0 && strcasecmp("Idée", $sujet)!=0){
		            	echo "<div>Le sujet n'est pas choisi</div>";
	            	}
	            	if(strlen($comment)==0){
		            	echo "<div>Le message n'est pas renseigné</div>";
	            	}
		        }
		    }

		}
		
		// Cas où le paramètre boutton est défini mais avec une valeur inattendue
		else{
			echo "<div>Une erreur est survenue</div>";
		}
	}
	
	// Tous les paramètres n'ont pas été transmis (cas normal si l'utilisateur n'a pas cliqué sur le boutton)
	else
	{
		echo "<div></div>";
		$success_msg = "";
	}
	echo $success_msg;
	
?>