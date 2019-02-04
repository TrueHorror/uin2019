<!DOCTYPE html>
<html>
  <head>
    <title>Studentregistreringssystem</title>
    <link href="stilark.css" rel="stylesheet" />
  </head>
  <body>
    <?php
      include("header.php");
    ?>
    <main>
      <form class="form-style-5" action="reg.php" method="post">
        <fieldset>
          <legend>
            <span class="number">1</span>
            Personinformasjon
          </legend>
          <label for="navn">Navn</label>
          <input type="text" name="navn" id="navn" required />

          <label for="epost">Epost</label>
          <input type="email" name="epost" id="epost" required />

          <label for="studie">Studie</label>
          <select name="studie" id="studie">
            <?php
              require("data.php");
              foreach ($studier as $key => $value) {
                echo "<option value='". $key ."'>" . $value . "</option>";
              }
             ?>
          </select>

          <label for="aar">Hvilket år går du?</label>
          <input type="number" min="1" max="9" name="aar" id="aar" required />
        </fieldset>
        <fieldset>
          <legend>
            <span class="number">2</span>
            Prosjektinformasjon
          </legend>

          <p>Tar du kurset som valgfag?<p>
          <div class="radio-helper">
            <input type="radio" name="valgfag" value="ja" id="valgfag-ja" /> <label for="valgfag-ja">Ja</label>
            </div>
            <div class="radio-helper">
            <input type="radio" name="valgfag" value="nei" id="valgfag-nei" /> <label for="valgfag-nei">Nei</label>
          </div>

          <div id="kravspek-container">
            <label for="kravspek">Kravspesifikasjon</label>
            <select name="kravspek" id="kravspek">
              <?php
                foreach ($kravspesifikasjoner as $key => $value) {
                  echo "<option value='". $key ."'>" . $value . "</option>";
                }
               ?>
               <option value="e">Eget prosjekt</option>
            </select>
          </div>

          <div id="besk-container">
            <label for="besk">Prosjektbeskrivelse</label>
            <textarea name="besk" id="besk"></textarea>
          </div>

          <div id="gruppe-container">
            <p>Jobber du i gruppe?<p>
            <div class="radio-helper">
              <input type="radio" name="gruppe" value="ja" id="gruppe-ja" /> <label for="gruppe-ja">Ja</label>
              </div>
              <div class="radio-helper">
              <input type="radio" name="gruppe" value="nei" id="gruppe-nei" /> <label for="gruppe-nei">Nei</label>
            </div>
          </div>

          <div id="gruppemedlemmer-container">
            <label for="gruppemedlemmer">Gruppemedlemmer</label>
            <textarea name="gruppemedlemmer" id="gruppemedlemmer"></textarea>
          </div>

          <label for="dag">Ønsket øvingstid</label>
          <select name="dag" id="dag">
            <option value="tir">Tirsdag</option>
            <option value="tor">Torsdag</option>
          </select>
          <select name="tid" id="tid">
            <?php
            foreach ($tirsdag as $key => $value) {
              echo "<option class='tirsdag' hide' value='". $key ."'>" . $value . "</option>";
            }
            foreach ($torsdag as $key => $value) {
              echo "<option class='torsdag hide' value='". $key ."'>" . $value . "</option>";
            }
            ?>

          </select>
          <button type="submit">Registrer</button>
        </fieldset>

      </form>
    </main>
  </body>
</html>
