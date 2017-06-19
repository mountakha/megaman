<?php

// Connexion à la base de données

try

{

    $bdd = new PDO('mysql:host=localhost;dbname=test2;charset=utf8', 'root', '');

}

catch(Exception $e)

{

        die('Erreur : '.$e->getMessage());

}


// Récupération des 10 derniers messages

$reponse = $bdd->query('SELECT pseudo, message FROM test2 ORDER BY ID DESC LIMIT 0, 10');


// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch())

{

    echo '<p>' . '<strong>:' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';

}


$reponse->closeCursor();


?>

    </body>

</html>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Bootstrap contact form with PHP example by BootstrapBay.com.">
        <meta name="author" content="BootstrapBay.com">
        <title>Bootstrap Contact Form With PHP Example</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="./CSS/index.css">
        <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Sirin+Stencil" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    </head>
    <body>


        <div>
            <img src="Image/Megaman%20bk-2.png" alt="" class="img-responsive" width="100%">
        </div>
        <div >
            <nav class="navbar navbar-webmaster">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="./index.html">INDEX<span class="sr-only">(current)</span></a></li>
                            <li class="active"><a href="./apropos.html">A PROPOS<span class="sr-only">(current)</span></a></li>
                            <li class="active"><a href="business_plan.html">BUSINESS PLAN<span class="sr-only">(current)</span></a></li>
                            <li class="active"><a href="contact.php">CONTACT<span class="sr-only">(current)</span></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            
            
            
            
            
            
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h1 class="page-header text-center"> Contactez-nous !</h1>
        <form action="messagerie.php" method="post" style="color:gray ">
        <p>
        <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" /><br />
        <label for="message">Message</label> :  <textarea type="text" name="message" id="message" ></textarea><br />
        <input type="submit" value="Envoyer" />
         
        </p>

        </form>

                   
                   
            </div>
            </div>
        


      
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

        <div id="fourth" >
            <div class="container">
                <div class="col-md-7" >
                    <h3>Contactez-nous!</h3>
                    <p3><br>En vous remerciant de votre visite, en cas de manque de renseignement ou nécessité d’aide veuillez nous faire parvenir ce formulaire. N’hésitez pas à nous faire un retour de vos remarques et surtout n’oubliez pas de faire partager notre intention !</p3>
                    <br>
                </div> 
                <div class="col-md-5"  >
                    <h3>Rechercher</h3>
                    <div class="span12">
                        <form id="custom-search-form" class="form-search form-horizontal pull-left">
                            <div class="input-append span12">
                                <input type="text" class="search-query mac-style" placeholder="Que cherches-tu?">
                                <button type="submit" class="btn"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <br><br>
                    <h3> Réseaux Sociaux</h3>

                    <nav class="nav icon-set">
                        <div class="container">
                            <ul class="nav navbar-nav">
                                <li class="facebook"><a href="#" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook fa-lg"></i></a></li>
                                <li class="instagram"><a href="#" data-toggle="tooltip" title="Instagram"><i class="fa fa-instagram fa-lg"></i></a></li>
                                <li class="twitter"><a href="#" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter fa-lg"></i></a></li>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <hr>
            <p4 class="lol">Copyright © MegamanRetro 2017.</p4>
            <!-- pagination -->
            <center>
                <div class="pagination">
                    <ul id="pagination-clean" position="center">
                        <li class="previous-off">« Précédent</li>
                        <li><a href="./index.html">1</a></li>
                        <li><a href="./apropos.html">2</a></li>
                        <li><a href="./business_plan.html">3</a></li>
                        <li class="next"><a href="./index.html">Suivant »</a></li>
                    </ul></div>
            </center>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed --><!- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </body>
</html>
