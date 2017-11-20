<?php
  include("card.php");

  $content = '<div class="container">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                      <img class="d-block img-fluid" src="http://placehold.it/1920x600" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block img-fluid" src="http://placehold.it/1920x600" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block img-fluid" src="http://placehold.it/1920x600" alt="Third slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>

              <div class="container">
                <br>
                <div class="row">
                  '.card("col-sm-8", "Was sind die Sternsinger?", "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat explicabo, maiores!</p>").'
                  '.card("col-sm-4", "Sternsinger bestellen", '<p>Möchten Sie, dass die Sternsinger zu Ihnen in Neureut oder Kirchfeld nach Hause kommen? Dann geben Sie hier Ihre Bestellung ab.</p><p><a class="btn btn-primary btn-lg" href="?page=order">Jetzt bestellen! &raquo;</a></p>').'
                </div>
                <br>
                <div class="row">
                  '.card("col-sm-8", "Sternsinger Aktion 2018", 'Die Sterninger Aktion 2018 steht unter dem Motto...</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat explicabo, maiores!</p>').'
                  '.card("col-sm-4", "Login für Leiter", '<p>Als Leiter kannst du online deine Bestellungen und Routen abrufen. Die Login Daten erhälst du bei den Verantwortlichen.</p><p><a class="btn btn-success" href="#">Login &raquo;</a></p>').'
                </div>
                <br>
                <div class="row">
                  '.card("col-sm-8", "Termine", '<p>Hier werden alle wichtigen Termine gelistet.</p>').'
                  '.card("col-sm-4", "Spenden", '<p>Hier können Sie eine Spende abgeben</p><p><a class="btn btn-warning" href="">Jetzt Spenden! &raquo;</a></p>').'
                </div>
                <br>
                <div class="row">
                  '.card("col-sm-4", "König und Königin werden", '<p>Du möchtest selbst eine Krone aufsetzen, mit Menschen in deinem Alter durch die Straße ziehen und Gutes Tun?</p><p><a class="btn btn-primary" href="">Los geht\'s! &raquo;</a></p>').'
                  '.card("col-sm-4", "Eine Gruppe leiten", '<p>Für das Sternsingen fühlst du dich zu alt? Dann werde Leiter.</p><p><a class="btn btn-primary" href="">Jawohl! &raquo;</a></p>').'
                  '.card("col-sm-4", "Mittagessen", '<p>Auch Sternsinger müssen mal etwas essen.</p><p><a class="btn btn-primary" href="">Lecker! &raquo;</a></p>').'
                </div>
                <br>
                <div class="row">
                  '.card("col-sm-2", "Links", '<p><a href="http://www.kath-ka-hardt.de/" target="_blank">Katholische Kirchgemeinde Karlsruhe Hardt</a><br><a href="http://sternsinger.de/" target="_blank">Sternsinger Homepage</a></p>').'
                  '.card("col-sm-5", "Planungsteam und Ansprechpartner", '<p>Die Sternsinger werden von...</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat explicabo, maiores!</p>').'
                  '.card("col-sm-5", "Sternsinger unterwegs", '<p>X Kinder und Jugendliche ziehen dieses Jahr durch die Straßen...</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur magni in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt voluptate. Voluptatum.</p>').'
                </div>
              </div>';
?>
