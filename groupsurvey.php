  <!DOCTYPE html>
  <html lang="en">
  <script>
      function checkIfRadioButtonSelected() {
          "use strict";
          var isChecked = false;
          var len = document.getElementsByName('favLesson').length;
          var choices = new Array();
          for (var i = 0; i < len; i++) {
              if (document.getElementsByName('favLesson')[i].checked) {
                  choices.push(document.getElementsByName('favLesson')[i].value);
              }
          } //end of for loop

          if (choices.length > 0) {
              isChecked = true;
              document.getElementsByTagName('fieldset')[0].style = null;
              document.getElementsByTagName('legend')[0].style = null;
          } else {
              document.getElementsByTagName('fieldset')[0].style.borderColor = 'red';
              document.getElementsByTagName('legend')[0].style.color = 'red';
          }

          return isChecked;

      } //end of function checkIfRadioButtonSelected

  </script>
  <?php
    $path = './';
    $page = 'Survey';
    require $path.'assets/inc/header.php';
?>

  <body>
      <form action="surveypost.php" method="POST" onsubmit="return checkIfRadioButtonSelected();">
          <p>&nbsp;</p>
          <br>Please rate your overall experiance
          <br>
          <p>0
              <input type="range" name="experiance" min="0" max="10" step="1" list="set">
              <datalist id="set">
                  <option>0</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                  <option>8</option>
                  <option>9</option>
                  <option>10</option>
              </datalist>
              10</p>
          <br>Please rate the overall User Interface
          <br>
          <p>0
              <input type="range" name="ui" min="0" max="10" step="1" list="set">
              <datalist id="set">
                  <option>0</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                  <option>8</option>
                  <option>9</option>
                  <option>10</option>
              </datalist>
              10</p>
          <br>Please rate the lesson information
          <br>
          <p>0
              <input type="range" name="lessons" min="0" max="10" step="1" list="set">
              <datalist id="set">
                  <option>0</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                  <option>8</option>
                  <option>9</option>
                  <option>10</option>
              </datalist>
              10</p>

          <fieldset>
              <legend>What was your favorite lesson?</legend>
              <input id="syntax" type="radio" name="favLesson" value="Syntax" onclick="turnoff()"><label for="syntax">Syntax</label><br>

              <input id="var" type="radio" name="favLesson" value="Variables and Data Types" onclick="turnoff()"><label for="var">Variables and Data Types</label><br>

              <input id="loops" type="radio" name="favLesson" value="Loops" onclick="turnoff()"><label for="loops">Loops</label><br>

              <input id="write" type="radio" name="favLesson" value="Writing a Program" onclick="turnoff()"><label for="write">Writing a Program</label><br>

              <input id="oop" type="radio" name="favLesson" value="Object Oriented Programming" onclick="turnoff()"><label for="oop">Object Oriented Programming</label><br>

          </fieldset>
          <p><input type="submit" name="submitform" action="index.php" onclick="return form" value="Submit"></p>
      </form>
      <?php 
    $filename = 'groupsurvey.php';
	include $path.'assets/inc/footer.php';
    mysqli_close($mysqli);
?>
  </body>

  </html>
