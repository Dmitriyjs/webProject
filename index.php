<?php require_once "php/point.php" ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/main.css">
    <title>WorkPrj</title>
  </head>
  <body>
    <h1>Eeeboy</h1>
    <h2>1</h2>
    <h2> <?php
      echo 1+1;
      ?>
    </h2>
    <h2>Сгенерировано случайное число (0 - 100): <?php echo mt_rand(0, 100);?></h2>
    <h2><?php
              $varFloat = 42.43752;
              $varRound = round($varFloat, 2);
              echo "$varRound";
     ?></h2>
     <h3><?php
              $point1 = new Point();
              $point2 = new Point();
              $point1->x = 3;
              $point1->y = 5;
              $point1->z = 1;
              $point2->x = 5;
              $point2->y = 5;
              $point2->z = 2;
              $mathOperation = ($point2->x - $point1->x)*($point2->x - $point1->x)+($point2->y - $point1->y)*($point2->y - $point1->y)+
                                ($point2->z - $point1->z)*($point2->z - $point1->z);
              $distance = sqrt($mathOperation);
              echo "$distance";
      ?></h3>
<?php require_once "php/work.php" ?>
      <p><?php //echo $str; ?></p>
      <form action="php/post.php" method="post">
        Введите имя: <input type="text" name="name" value="">
        <br>
        <button type="submit">Скажи привет</button>
      </form>
      <input type="button" id="buttonAchieve">Тест ачивы</button>
      <!--
      <div class="newAchieve">
            <img src="img/newAch.png">
      </div>
    -->
      <script>
        buttonAchieve.onclick = function alertAchieve()
        {
          var count = 0;
          //count = count+1;
          //for (count = 0; ; count++)
          //{
            var div = document.createElement("div");
            document.body.appendChild(div);
            div.setAttribute('class', 'newAchieve-'+count);
            var parentE = document.getElementsByClassName('newAchieve-'+count)[0];
            var img = document.createElement("img");
            parentE.appendChild(img);
            img.setAttribute('src', 'img/newAch.png');

          if (document.getElementsByClassName('newAchieve-'+count)[0] !== null) {
           function clearAch()
           {
             document.getElementsByClassName('newAchieve-'+count)[0].parentNode.removeChild(document.getElementsByClassName('newAchieve-'+count)[0]);
           };

          };
            setTimeout(clearAch, 4000); //call function after 4 sec
        //  };

        };
      </script>
      <!--
      <script>
        buttonAchieve.onclick = function alertAchieve()
        {
          var div = document.createElement("div");
          document.body.appendChild(div);
          div.setAttribute('class', 'newAchieve');
          var parentE = document.getElementsByClassName('newAchieve')[0];
          var img = document.createElement("img");
          parentE.appendChild(img);
          img.setAttribute('src', 'img/newAch.png');
          if (document.getElementsByClassName('newAchieve')[0] !== null) {
           function clearAch()
           {
             document.getElementsByClassName('newAchieve')[0].parentNode.removeChild(document.getElementsByClassName('newAchieve')[0]);
           };
          };
          setTimeout(clearAch, 4000); //call function after 4 sec
        };
      </script>
      <script>
        buttonAchieve.onclick = function alertAchieve()
        {
          var div = document.createElement("div");
          document.body.appendChild(div);
          div.setAttribute('id', 'newAchieve');
          var parentE = document.getElementById('newAchieve');
          var img = document.createElement("img");
          parentE.appendChild(img);
          img.setAttribute('src', 'img/newAch.png');
          if (document.getElementById('newAchieve') !== null) {
           function clearAch()
           {
             document.getElementById('newAchieve').parentNode.removeChild(document.getElementById('newAchieve'));
           };
          };
          setTimeout(clearAch, 4000); //call function after 4 sec
        };
      </script>
      -->
  </body>
</html>
