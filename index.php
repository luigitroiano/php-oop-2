<!-- Istruzioni:
Crea un diagramma per una tabella di db che rappresenti gli Users di un blog.
Crea una classe User che rappresenti quella tabella, e usala per stampare in pagina i dati di alcuni Users.
Il database e la tabella non devono essere realmente creati.
Bonus (non tanto facoltativo):
Una volta finita la classe User, pensate a che altre entitá possiamo avere in un sistema di Blogging oltre all'utente.
Per darvi un idea, un blog ha degli articoli, categorie, tags etc.
Create nel diagramma anche le altre entitá e definite per ciascuna le rispettive classi con proprietá e metodi. -->
<?php
include __DIR__ . '/classes/Users.php';
include __DIR__ . '/classes/Posts.php';

$users = [
  new Users('Ciccio', 'Caputo', 33, 'cicciocaputo@delsassuolo.it'),
  new Users('Ciccio', 'Graziani', 70, 'cicciograziani@delcervia.it'),
  new Users('Ciccio', 'Bello', 2, 'cicciobello@monello.it'),
  new Users('Ciccio', 'Valenti', 45, 'cicciovalenti@smackdown.it')
];

$posts = [
  new Posts('Ciccio', 'Caputo', 33, 'cicciocaputo@delsassuolo.it', 'Addio Virtus Entella', 'Grazie per avermi seguito in migliaia, resterà un ricordo bellissimo', 'Sport Serie B Calcio', '#Entella, #serieb, #brentonico2016', '30 luglio 2016', '30 luglio 2016', 'posted'),
  new Posts('Ciccio', 'Graziani', 70, 'cicciograziani@delcervia.it', 'Graziani vs Italiano', 'Ciccio durante l intervallo di una partita: < Se cè una partita dove non bisognerebbe dire niente è questa...non siamo venuti qui a fare le VITTIME SACRIFICATRICI !!>', 'Sport, Calcio, Allenatori', '#cicciograziani, #cervia', '25 Giugno 2011', '25 Giugno 2011', 'posted'),
  new Posts('Ciccio', 'Bello', 2, 'cicciobello@monello.it', 'Titolo', 'Lorem ipsum lorem ipsum lorem ipsum lorem ipsum v lorem ipsum', 'Giocattoli, Bambini', '#cicciobello', '26 Novembre 1996', '26 Novembre 1996', 'posted'),
  new Posts('Ciccio', 'Valenti', 45, 'cicciovalenti@smackdown.it', 'Big Show meglio di John Cena', 'Rimpiango i tempi della chop slam', 'Wrestling, Botte', '#strafiguremerd, #619', '8 Novembre 2008', '8 Novembre 2008', 'posted')
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OOP</title>
</head>

<body>
  <h1 style="text-align: center;">My Blog</h1>
  <div>
    SEZIONE USER:
    <?php
    foreach ($users as $user) { ?>
      <ul>
        <li>
          <!-- name  -->
          <h2><?php echo $user->name;
              echo $user->surname ?></h2>
          <!-- age and email -->
          <ul>
            <li>
              <p>Età: <?php echo $user->age ?></p>
            </li>
            <li>
              <p>Email: <?php echo $user->email ?></p>
            </li>
          </ul>
        </li>
      </ul>
    <?php }
    ?>
  </div>
  <hr>
  <div>
    SEZIONE POST:
    <?php
    foreach ($posts as $value) { ?>
      <ul>
        <li>
          <!-- name -->
          <h2><?php echo $value->name ?> <?php echo $value->surname ?></h2>
          <!-- age anda email -->
          <ul>
            <li>
              <p>Età: <?php echo $value->age ?></p>
            </li>
            <li>
              <p>Email: <?php echo $value->email ?></p>
            </li>
          </ul>
          <!-- POST -->
          <p>POST: <?php echo $value->title ?></p>
          <p><em><?php echo $value->content ?></em></p>
          <p>topics: <?php echo $value->topic ?></p>
          <p>tags: <?php echo $value->tags ?></p>
          <p>postato il: <?php echo $value->create_time ?></p>
        </li>
      </ul>
    <?php }
    ?>
  </div>
</body>

</html>