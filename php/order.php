<?php
  include("card.php");
  include("dbsettings.php");

  if (isset($_POST["inputName"])) {
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    $name = mysqli_real_escape_string($_POST["inputName"]);
    $adress = mysqli_real_escape_string($_POST["inputAdress"]);
    $mail = mysqli_real_escape_string($POST["inputMail"]);
    $phone = mysqli_real_escape_string($_POST["inputPhone"]);
    //test
    if (isset($_POST["input1"])) { $input1 = true; } else { $input1 = false; }
    if (isset($_POST["input2"])) { $input2 = true; } else { $input2 = false; }
    if (isset($_POST["input3"])) { $input3 = true; } else { $input3 = false; }
    if (isset($_POST["input4"])) { $input4 = true; } else { $input4 = false; }
    $sql = "INSERT INTO AUSFÜLLEN (id, name, adress, mail, phone, day1, day2, day3, day4) VALUES (NULL, '".$name."', '".$adress."', '".$mail."', '".$phone."', '.$input1.', '.$input2.', '.$input3.', '.$input4.')";
    echo $sql;
    if (mysqli_query($conn, $sql)) {
      echo "JUHUUUU!";
    } else {
      echo "Oh nein, es hat nicht geklappt :((((((((((((((((((((((";
    }
  }

  $content = '<div class="container">
                <br><br>
                <div class="row">
                  '.card("col-sm-12", "Jetzt bestellen", '<p><form method="POST" action="?page=order">
                      <div class="form-group">
                        <label for="inputName"><b>Name</b></label>
                        <input type="text" class="form-control" name="inputName" id="inputName" placeholder="Vorname Nachname" required>
                      </div>
                      <div class="form-group">
                        <label for="inputAdress"><b>Adresse</b></label>
                        <input type="text" class="form-control" name="inputAdress" id="inputAdress" placeholder="Straßenname Hausnummer" required>
                      </div>
                      <b>An diesen Tagen kommen wir bei Ihnen zwischen 14 und 18 Uhr vorbei</b>
                      <br>
                      <div class="form-check">
                        <label class="form-check-label col-sm-2">
                          <input type="checkbox" name="input1" class="form-check-input">
                          2. Januar 2018
                        </label>
                        <label class="form-check-label col-sm-2">
                          <input type="checkbox" name="input2" class="form-check-input">
                          3. Januar 2018
                        </label>
                        <label class="form-check-label col-sm-2">
                          <input type="checkbox" name="input3" class="form-check-input">
                          4. Januar 2018
                        </label>
                        <label class="form-check-label col-sm-2">
                          <input type="checkbox" name="input4" class="form-check-input">
                          5. Januar 2018
                        </label>
                      </div>
                      <br>
                      <div class="form-group">
                        <label for="inputMail"><b>E-Mail (optional)</b></label>
                        <input type="email" class="form-control" name="inputMail" id="inputMail" placeholder="E-Mailardesse">
                      </div>
                      <div class="form-group">
                        <label for="inputPhone"><b>Telefonnummer (optional)</b></label>
                        <input type="text" class="form-control" name="inputPhone" id="inputPhone" placeholder="Telefonnummer">
                      </div>
                      <button type="submit" class="btn btn-primary btn-lg">Ich freue mich auf euch</button>
                    </form></p>').'
                </div>
              </div>';
?>
