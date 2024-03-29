<?php


/** @var string $action */
switch ($action) {
    case 'choisir':
    {
        //Récupération des données du formulaire

        //Récupération des données du modèle

        // Envoie des données dans la vue reponse

        break;
    }
    case 'administrer':
    {
        //Récupération des données du formulaire

        //Envoie des données du modèle

        //appel de la vue accueil


        break;
    }
    case 'connecter':{
        //appel de la vue connexion

        break;
    }
    case 'valider':{
        //Récupération des données du formulaire

        //Récupération des données du modèle

        // Choix de la vue

           // vue ajouter si la connexion est correcte


            // vue connexion sinon

        break;
    }
    default:
    {
        //Récupération des données du modèle

        // Envoie des données dans la vue accueil

    }
}