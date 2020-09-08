<!--
REPO: php-ajax-dischi
GOAL:
Stampare a schermo una decina di dischi musicali
(vedi screenshot) in due modi diversi:
- Solo con l'utilizzo di PHP, che stampa
direttamente i dischi in pagina: al caricamento
della pagina ci saranno tutti i dischi.
- Attraverso l'utilizzo di AJAX: al caricamento
della pagina ajax chiederà attraverso una
chiamata i dischi a php e li stamperà
attraverso handlebars.
Utilizzare: Html, JS, jQuery, handlebars, Php
OPZIONALE:
- Attraverso un'altra chiamata ajax, filtrare gli
album per artista -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CD - PHP</title>
  </head>
  <body style="background-color: #444; margin:0; padding:0; box-sizing:border-box">
    <div style="width: 100vw; height: 100vh; padding: 0 15%; display: flex; flex-wrap:wrap; align-items: center; box-sizing:border-box">

      <?php
        $data = [
          "success" => true,
          "response" => [
            [
              "poster" => "https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg",
              "title" => "New Jersey",
              "author" => "Bon Jovi",
              "genre" => "Rock",
              "year" => "1988"
            ],
            [
              "poster" => "https://images.pyramidshop.com/images/_popup/ACPPR48056.jpg",
              "title" => "Live at Wembley 86",
              "author" => "Queen",
              "genre" => "Pop",
              "year" => "1992"
            ],
            [
              "poster" => "https://images-na.ssl-images-amazon.com/images/I/41JD3CW65HL.jpg",
              "title" => "Ten's Summoner's Tales",
              "author" => "Sting",
              "genre" => "Pop",
              "year" => "1993"
            ],
            [
              "poster" => "https://cdn2.jazztimes.com/2018/05/SteveGadd-800x723.jpg",
              "title" => "Steve Gadd Band",
              "author" => "Steve Gadd Band",
              "genre" => "Jazz",
              "year" => "2018"
            ],
            [
              "poster" => "https://images-na.ssl-images-amazon.com/images/I/810nSIQOLiL._SY355_.jpg",
              "title" => "Brave new World",
              "author" => "Iron Maiden",
              "genre" => "Metal",
              "year" => "2000"
            ],
            [
              "poster" => "https://upload.wikimedia.org/wikipedia/en/9/97/Eric_Clapton_OMCOMR.jpg",
              "title" => "One more car, one more raider",
              "author" => "Eric Clapton",
              "genre" => "Rock",
              "year" => "2002"
            ],
            [
              "poster" => "https://images-na.ssl-images-amazon.com/images/I/51rggtPgmRL.jpg",
              "title" => "Made in Japan",
              "author" => "Deep Purple",
              "genre" => "Rock",
              "year" => "1972"
            ],
            [
              "poster" => "https://images-na.ssl-images-amazon.com/images/I/81r3FVfNG3L._SY355_.jpg",
              "title" => "And Justice for All",
              "author" => "Metallica",
              "genre" => "Metal",
              "year" => "1988"
            ],
            [
              "poster" => "https://img.discogs.com/KOBsqQwKiNKH-q927oHMyVdDzSo=/fit-in/596x596/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-6406665-1418464475-6120.jpeg.jpg",
              "title" => "Hard Wired",
              "author" => "Dave Weckl",
              "genre" => "Jazz",
              "year" => "1994"
            ],
            [
              "poster" => "https://m.media-amazon.com/images/I/71K9CbNZPsL._SS500_.jpg",
              "title" => "Bad",
              "author" => "Michael Jacjson",
              "genre" => "Pop",
              "year" => "1987"
            ]
          ]
        ];

        $cds = $data["response"];
        foreach ($cds as $cd) {
          ?>
          <div class="card" style="width:200px; height: 300px; margin: 3% 2%; background: black; box-sizing:border-box; text-align: center; color:white;">

            <div style="width:80%; height:160px; margin:10px auto;">
              <img style="width:100%; height:auto" src="<?php echo $cd["poster"]; ?>" alt="poster">
            </div>

            <h4>
              <?php echo $cd["title"]; ?>
            </h4>

            <div style="color:#999">
              <?php echo $cd["author"]; ?>
            </div>

            <small style="color:white">
              <?php echo $cd["year"]; ?>
            </small>

          </div>
          <?php
        }
      ?>

    </div>
  </body>
</html>
