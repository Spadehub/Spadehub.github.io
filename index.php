<html>
    <head>
        <title>Music Albums</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="format.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    </head>

    <body>
      <div class="grid-container" style="grid-template-rows: 13em 55px auto 55px;">
        <div class="header">
            <img src="pics/logo-new.png" alt="" style="height: 19em; position: relative; bottom: 45px;">
        </div>
        <div class="menu">
          <?php
            $mQuotes = array('“Without music, life would be a mistake.” ― Friedrich Nietzsche, Twilight of the Idols',
                            '“One good thing about music, when it hits you, you feel no pain.” ― Bob Marley',
                            '“Music expresses that which cannot be put into words and that which cannot remain silent” ― Victor Hugo',
                            '“And those who were seen dancing were thought to be insane by those who could not hear the music.” ― Friedrich Nietzsche',
                            '“This above all: to thine own self be true, And it must follow, as the night the day, Thou canst not then be false to any man.” ― William Shakespeare, Hamlet');
            $mRandom_Quote = array_rand($mQuotes);
          ?>
          <span id="scrolling"><?php echo"$mQuotes[$mRandom_Quote]"; ?></span>
        </div>

        <div class="content">
          <h1>Benvenuto - Willkommen - Welcome</h1>
          <h2>Scegli la lingua - Sprache Auswählen - Choose Language</h2>
          <div class="gallery">
            <a href="it/index.html">
              <div id="ita">
                <img src="pics/ita.png" alt ="Italiano">
                <div id="ita-hidden">Italiano</div>
              </div>
            </a>
            <div id="deu">
              <img src="pics/deu.png" alt ="Deutsch">
              <div id="deu-hidden">Deutsch</div>
            </div>
            <div id="eng">
              <img src="pics/eng.png" alt ="English">
              <div id="eng-hidden">English</div>
            </div>
          </div>
        </div>

        <div class="footer">&copy;Vincenzo Carusotto</div>
      </div>
    </body>
</html>
