<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

    /**
     * Page d'accueil par défaut
     */
    public function home()
    {
        

        $this->show('default/home');
    }

    public function mail(){
        if (isset($_POST['submit'])) {
            $errors=[];
            $infos = [];
            $name = trim(htmlentities($_POST['name']));
            $email = trim(htmlentities($_POST['email']));
            $text = trim(htmlentities($_POST['message']));
            if ($_POST['human']!='5') {
                $errors['robot'] = "êtes-vous resté bloqué en maternelle ou avez-vous de serieux problemes cognitifs  ?";

            }
            if(empty($email) || (filter_var($email,FILTER_VALIDATE_EMAIL))=== false){
                $errors['email'] = "Veuillez renseigner email";}
                if(empty($name)){
                    $errors['name'] = "Veuillez renseigner le nom";

                }
                if(empty($text)){
                    $errors['message'] = "Pourquoi nous envoyer un mail vide ?!!";
                }

                if (empty($errors)) {

                    $destinataire = "jean.savauge@gmail.com";
                    $objet = "Contact CPR";
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $corps = $_POST['message'];    
                    $passage_ligne = "\n";
                    $boundary = "-----=".md5(rand());

        // Pour les champs $expediteur / $copie / $destinataire, séparer par une virgule s'il y a plusieurs adresses
                    $expediteur = $_POST['email'];
        $headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
        $headers .= 'Content-type: text/html; charset=UTF-8'."\n"; // l'en-tete Content-type pour le format HTML
        $headers .= 'Reply-To: '.$expediteur."\n"; // Mail de reponse
        $headers .= 'From: "Nom_de_expediteur"<'.$email.'>'."\n"; // Expediteur
        $headers .= 'Delivered-to: '.$destinataire."\n"; // Destinataire      
        
        $message = '<div style="width: 100%; text-align: center; font-weight: bold">Bonjour un client vous a contact&eacute; : !</div>';
        $message .= "Nom : ".$name."<br/>";
        $message .= "Email : ".$email."<br/>";
        $message .= "Message : ".$corps."<br/>";
        mail($destinataire, $objet, $message, $headers);

        if (mail($destinataire, $objet, $message, $headers)) // Envoi du message
        {
            $infos['good']="Votre message a bien été envoyé";
        }
            else // Non envoyé
            {
                $infos['bad']="Votre message n'a pas pu être envoyé";
            }


    

        }


        $this->show('default/home',['infos' => $infos,'errors' =>$errors]);

        

    }



}

}