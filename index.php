<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <title>VaR ForecasT</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <link rel="stylesheet"  href="designe.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="shortcut icon" type="image/x-icon" href="Images/logo.jpg" />
  </head>

  <body>
<!-- creation du bandeau ou l'on trouves les differents bouttons-->
    <header class="header">
            <a href="#" class="header-logo">VaR ForecasT</a>
            <nav class=header-menu>
            <a href="index.php">Accueil</a>
            <a href="carte_var.php">Carte du Var</a>
            <a href="a_propos.html">A propos</a>
        </nav>
    </header>
  <!-- image de fond dans la page d'acceuil-->
        <div class="banner">
        <img src="Images/mer.jpg" width="450px" height="450px" alt="vague"class="banner-image"/>
            <div class="banner-content">
            <!-- texte sur l'image-->
                <h1 class="title is-1">VaR ForecasT</h1><br>
                <h2 class=subtitle>Ce site a pour but de prévoir les conditions météorologiques en lien avec la pratique du windsurf, du surf, du kitesurf, du windfoil, kitefoil, surfoil, et tous les autres sports nautiques en rapport avec les conditions météos.</h2>
                
                <div class="rect">
                  <article class = "Hyere">
                  <!-- création de la balise PHP-->
                    <?php
                      
                    // récupération de l'API.
                      $json = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Hyeres&APPID=3b7783150d8a719202d56f64b0550801&lang=fr");
                      // met les données de l'API dans une tableau.
                      $parsee = json_decode($json,true);
                      // navigation dans le tableau.
                      $vitesseh = $parsee['wind']['speed'];// récupère vitesse du vent en m/s
                      $vitesseh = round($vitesseh * 1.9,1);
                      $orientation = $parsee['wind']['deg'];// récupère orientation du vent en °
                      // affichage des donnée traité
                      echo '<p>';
                      echo $parsee['name'].'<br>';
                      echo $parsee['weather']['0']['description'].'<br>';
                      echo '</p>';
                      echo 'speed : '.$vitesseh.'nds<br>';
                      // création condition pour orientation du vent.
                      if ($orientation >= 337 AND $orientation <=360 OR $orientation >= 0 AND $orientation <=22)
                      {
                        echo " Orientation: Nord";
                      }
                      elseif ($orientation >=157 AND $orientation <= 202)
                      {
                      echo "Orientation: Sud";
                      }
                      elseif ($orientation >=247 AND $orientation <= 292)
                      {
                        echo "Orientation: Ouest";
                      }
                      elseif ($orientation >=67 AND $orientation <= 112)
                      {
                        echo "Orientation: Est";
                      }
                      elseif ($orientation >=292 AND $orientation <= 337)
                      {
                        echo "Orientation: Nord-Ouest";
                      }
                      elseif ($orientation >=22 AND $orientation <= 67)
                      {
                        echo "Orientation: Nord-Est";
                      }
                      elseif ($orientation >=112 AND $orientation <= 157)
                      {
                        echo "Orientation: Sud-Est";
                      }
                      elseif ($orientation >=202 AND $orientation <= 247)
                      {
                        echo "Orientation: Sud-Ouest";
                      }
                      ?>
                      </article>
                      <article class = "st-tropez">
                      <?php
                      $json = file_get_contents("http://api.openweathermap.org/data/2.5/weather?lat=43.275816&lon=6.609998&APPID=78557f28982ee3ebb1a1a74bb1bfee6f&lang=fr");
                      $parsee = json_decode($json,true);
                      $vitessest  = $parsee['wind']['speed'];
                      $vitessest = round($vitessest * 1.9,1);
                      $orientation = $parsee['wind']['deg'];
                      echo '<p>';
                      echo $parsee['name'].'<br>';
                      echo $parsee['weather']['0']['description'].'<br>';
                      echo '</p>';
                      echo 'Speed : '.$vitessest.'nds<br>';
                 
                      if ($orientation >= 337 AND $orientation <=360 OR $orientation >= 0 AND $orientation <=22)
                      {
                        echo " Orientation: Nord";
                      }
                      elseif ($orientation >=157 AND $orientation <= 202)
                      {
                      echo "Orientation: Sud";
                      }
                      elseif ($orientation >=247 AND $orientation <= 292)
                      {
                        echo "Orientation: Ouest";
                      }
                      elseif ($orientation >=67 AND $orientation <= 112)
                      {
                        echo "Orientation: Est";
                      }
                      elseif ($orientation >=292 AND $orientation <= 337)
                      {
                        echo "Orientation: Nord-Ouest";
                      }
                      elseif ($orientation >=22 AND $orientation <= 67)
                      {
                        echo "Orientation: Nord-Est";
                      }
                      elseif ($orientation >=112 AND $orientation <= 157)
                      {
                        echo "Orientation: Sud-Est";
                      }
                      elseif ($orientation >=202 AND $orientation <= 247)
                      {
                        echo "Orientation: Sud-Ouest";
                      }
                      ?>
                       
                      </article>
                      <article class =  "sifour">
                      <?php
                      $json = file_get_contents("http://api.openweathermap.org/data/2.5/weather?lat=43.093869&lon=5.810698&APPID=78557f28982ee3ebb1a1a74bb1bfee6f&lang=fr");
                      $parsee = json_decode($json,true);
                      $vitessesi = $parsee['wind']['speed'];
                      $vitessesi = round($vitessesi * 1.9,1);
                      $orientation = $parsee['wind']['deg'];
                      
                      echo '<p>';
                      echo $parsee['name'].'<br>';
                      echo $parsee['weather']['0']['description'].'<br>';
                      echo '</p>';
                      echo 'Speed : '.$vitessesi.'nds<br>';           
                      if ($orientation >= 337 AND $orientation <=360 OR $orientation >= 0 AND $orientation <=22)
                      {
                        echo " Orientation: Nord";
                      }
                      elseif ($orientation >=157 AND $orientation <= 202)
                      {
                      echo "Orientation: Sud";
                      }
                      elseif ($orientation >=247 AND $orientation <= 292)
                      {
                        echo "Orientation: Ouest";
                      }
                      elseif ($orientation >=67 AND $orientation <= 112)
                      {
                        echo "Orientation: Est";
                      }
                      elseif ($orientation >=292 AND $orientation <= 337)
                      {
                        echo "Orientation: Nord-Ouest";
                      }
                      elseif ($orientation >=22 AND $orientation <= 67)
                      {
                        echo "Orientation: Nord-Est";
                      }
                      elseif ($orientation >=112 AND $orientation <= 157)
                      {
                        echo "Orientation: Sud-Est";
                      }
                      elseif ($orientation >=202 AND $orientation <= 247)
                      {
                        echo "Orientation: Sud-Ouest";
                      }
                    ?>
                  </article>
                </div>
        </div>
     </div>

     <div class = 'previsionSt'>
       <br>
       <h1>Prévision St-tropez</h1>
       <br>
     <?php
       $json = file_get_contents("http://api.openweathermap.org/data/2.5/forecast?lat=43.275816&lon=6.609998&APPID=a3aa2b36de4f933c62a4aba5bbccd4fd");
        $parsee = json_decode($json,true);
        $jour = array('Dim.','Lun.','Mar.','Mer.','Jeu.','Ven.','Sam.');
        $today= 367;
       echo'<table border=1.5>';
       echo '<tr>';
       echo '<td>'.'Date'.'</td>';
       foreach($parsee['list'] as $value){
        if ($today == 367){
          $today = date('z', $value['dt']);
        }
        if(date('z', $value['dt']) < $today+5){
       //echo '<td>'.$value['dt_txt'].'</dt>';
       $nbre = date('w', $value['dt']);
       echo '<td>'.$jour[$nbre].'</dt>';
        }
       }
       echo '</tr>';
       echo '<tr>';
       echo '<td>'.'Heure'.'</td>';
       foreach($parsee['list'] as $value){
        if ($today == 367){
          $today = date('z', $value['dt']);
         }
        if(date('z', $value['dt']) < $today+5){
        echo '<td>'.date('H', $value['dt']).'h</dt>';
        }
        } 
       echo '</tr>';
       echo '<tr>';
       echo '<td>'.'Vent'.'</td>';
       foreach($parsee['list'] as $value){
        if(date('z', $value['dt']) < $today+5){
          if ($today == 367){
            $today = date('z', $value['dt']);
           }
         echo '<td>'.round($value['wind']['speed']*1.9,1).'</td>';
        }
       }
       echo '</tr>';
       echo '<tr>';
       echo '<td>'.'Orientation'.'</td>';
       foreach($parsee['list'] as $value){
        if ($today == 367){
          $today = date('z', $value['dt']);
         }
        if(date('z', $value['dt']) < $today+5){
        echo '<td>';
       if ($value['wind']['deg'] >= 337 AND $value['wind']['deg'] <=360 OR $value['wind']['deg'] >= 0 AND $value['wind']['deg'] <=22)
       {
         echo "N";
       }
       elseif ($value['wind']['deg'] >=157 AND $value['wind']['deg'] <= 202)
       {
       echo " S";
       }
       elseif ($value['wind']['deg'] >=247 AND $value['wind']['deg'] <= 292)
       {
         echo " O";
       }
       elseif ($value['wind']['deg'] >=67 AND $value['wind']['deg'] <= 112)
       {
         echo " E";
       }
       elseif ($value['wind']['deg'] >=292 AND $value['wind']['deg'] <= 337)
       {
         echo " NO";
       }
       elseif ($value['wind']['deg'] >=22 AND$value['wind']['deg'] <= 67)
       {
         echo "NE";
       }
       elseif ($value['wind']['deg'] >=112 AND $value['wind']['deg']<= 157)
       {
         echo "SE";
       }
       elseif ($value['wind']['deg'] >=202 AND $value['wind']['deg'] <= 247)
       {
         echo " SO";
       }
      }
       echo '</td>';
      }
       echo '</tr>';
       echo'</table>';
      ?> 
     </div> 
      <br>
     <div class = 'previsionHy'>
       <br>
       <h1>Prévision Hyeres</h1>
       <br>
     <?php
       $json = file_get_contents("http://api.openweathermap.org/data/2.5/forecast?lat=43.066236&lon=6.16008&APPID=a3aa2b36de4f933c62a4aba5bbccd4fd");
        $parsee = json_decode($json,true);
       echo'<table border=1.5>';
       echo '<tr>';
       echo '<td>'.'Date'.'</td>';
       foreach($parsee['list'] as $value){
        if ($today == 367){
          $today = date('z', $value['dt']);
         }
        if(date('z', $value['dt']) < $today+5){
       //echo '<td>'.$value['dt_txt'].'</dt>';
       $nbre = date('w', $value['dt']);
       echo '<td>'.$jour[$nbre].'</dt>';
        }
       }
       echo '</tr>';
       echo '<tr>';
       echo '<td>'.'Heure'.'</td>';
       foreach($parsee['list'] as $value){
        if ($today == 367){
          $today = date('z', $value['dt']);
         }
        //echo '<td>'.$value['dt_txt'].'</dt>';
        if(date('z', $value['dt']) < $today+5){
        echo '<td>'.date('H', $value['dt']).'h</dt>';
        }
        } 
       echo '</tr>';
       echo '<tr>';
       echo '<td>'.'Vent'.'</td>';
       foreach($parsee['list'] as $value){
        if ($today == 367){
          $today = date('z', $value['dt']);
         }
        if(date('z', $value['dt']) < $today+5){
         echo '<td>'.round($value['wind']['speed']*1.9,1).'</td>';
       }}
       echo '</tr>';
       echo '<tr>';
       echo '<td>'.'Orientation'.'</td>';
       foreach($parsee['list'] as $value){
        if ($today == 367){
          $today = date('z', $value['dt']);
         }
        if(date('z', $value['dt']) < $today+5){
        echo '<td>';
       if ($value['wind']['deg'] >= 337 AND $value['wind']['deg'] <=360 OR $value['wind']['deg'] >= 0 AND $value['wind']['deg'] <=22)
       {
         echo "N";
       }
       elseif ($value['wind']['deg'] >=157 AND $value['wind']['deg'] <= 202)
       {
       echo " S";
       }
       elseif ($value['wind']['deg'] >=247 AND $value['wind']['deg'] <= 292)
       {
         echo " O";
       }
       elseif ($value['wind']['deg'] >=67 AND $value['wind']['deg'] <= 112)
       {
         echo " E";
       }
       elseif ($value['wind']['deg'] >=292 AND $value['wind']['deg'] <= 337)
       {
         echo " NO";
       }
       elseif ($value['wind']['deg'] >=22 AND$value['wind']['deg'] <= 67)
       {
         echo "NE";
       }
       elseif ($value['wind']['deg'] >=112 AND $value['wind']['deg']<= 157)
       {
         echo "SE";
       }
       elseif ($value['wind']['deg'] >=202 AND $value['wind']['deg'] <= 247)
       {
         echo " SO";
       }}
       echo '</td>';
      }
       echo '</tr>';
       echo'</table>';
      ?>
     </div> 
     <br>
     <div class = 'previsionSi'>
       <br>
       <h1>Prévision Six-fours-les-plages</h1>
       <br>
       
     <?php
       $json = file_get_contents("http://api.openweathermap.org/data/2.5/forecast?lat=43.093869&lon=5.810698&APPID=a3aa2b36de4f933c62a4aba5bbccd4fd");
        $parsee = json_decode($json,true);
       echo'<table border=1>';
       echo '<tr>';
       echo '<td>'.'Date'.'</td>';
       foreach($parsee['list'] as $value){
        if ($today == 367){
          $today = date('z', $value['dt']);
         }
       //echo '<td>'.$value['dt_txt'].'</dt>';
       if(date('z', $value['dt']) < $today+5){
       $nbre = date('w', $value['dt']);
       echo '<td>'.$jour[$nbre].'</dt>';
       }}
       echo '<tr>';
       echo '<td>'.'Heure'.'</td>';
       foreach($parsee['list'] as $value){
        if ($today == 367){
          $today = date('z', $value['dt']);
         }
        //echo '<td>'.$value['dt_txt'].'</dt>';
        if(date('z', $value['dt']) < $today+5){
        echo '<td>'.date('H', $value['dt']).'h</dt>';
        }
        } 
       echo '</tr>';
       echo '</tr>';
       echo '<tr>';
       echo '<td>'.'Vent'.'</td>';
       foreach($parsee['list'] as $value){
        if(date('z', $value['dt']) < $today+5){
         echo '<td>'.round($value['wind']['speed']*1.9,1).'</td>';
       }}
       echo '</tr>';
       echo '<tr>';
       echo '<td>'.'Orientation'.'</td>';
       foreach($parsee['list'] as $value){
        if ($today == 367){
          $today = date('z', $value['dt']);
         }
        if(date('z', $value['dt']) < $today+5){
        echo '<td>';
       if ($value['wind']['deg'] >= 337 AND $value['wind']['deg'] <=360 OR $value['wind']['deg'] >= 0 AND $value['wind']['deg'] <=22)
       {
         echo "N";
       }
       elseif ($value['wind']['deg'] >=157 AND $value['wind']['deg'] <= 202)
       {
       echo " S";
       }
       elseif ($value['wind']['deg'] >=247 AND $value['wind']['deg'] <= 292)
       {
         echo " O";
       }
       elseif ($value['wind']['deg'] >=67 AND $value['wind']['deg'] <= 112)
       {
         echo " E";
       }
       elseif ($value['wind']['deg'] >=292 AND $value['wind']['deg'] <= 337)
       {
         echo " NO";
       }
       elseif ($value['wind']['deg'] >=22 AND$value['wind']['deg'] <= 67)
       {
         echo "NE";
       }
       elseif ($value['wind']['deg'] >=112 AND $value['wind']['deg']<= 157)
       {
         echo "SE";
       }
       elseif ($value['wind']['deg'] >=202 AND $value['wind']['deg'] <= 247)
       {
         echo " SO";
       }}
       echo '</td>';
      }
       echo '</tr>';
       echo'</table>';
      ?>
     </div> 
     
  </body>
</html> 