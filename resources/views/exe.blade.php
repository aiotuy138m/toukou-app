<!DOCTYPE HTML>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <title>練習</title>
  </head>

  <body>
    <?php
      $obj = new hito2();
      $obj->name = "西澤";
      $obj->sintyo = 175;
      $obj->taizyu = 80;

      print $obj->name . "さんの健康チェック<br>";
      print "標準体重は" . $obj->hyozyun() . "<br>";
      print "体重は" . $obj->taizyu . "<br>";
      print "BMIは" . $obj->bmi() . "<br>";
      print $obj->himan();


      //hitoクラスの定義
      class hito{
        public $name;
        public $sintyo;

        function hyozyun(){
          $s = $this->sintyo / 100;
          return $s * $s * 22;
        }
      }

      //hito2クラスの定義
      class hito2 extends hito {
        public $taizyu;
        
        function bmi(){
          $s2 = $this->sintyo/100;
          return $this->taizyu/($s2*$s2);
        }

        function himan() {
          $b = $this->bmi();
          if ($b >= 40) {
            print "肥満度4";
          }elseif ($b >= 35){
            print "肥満度3";
          }elseif ($b >= 30){
            print "肥満度2";
          }elseif ($b >= 25){
            print "肥満体重1";
          }elseif ($b >= 18.5){
            print "普通体重";
          }else {
            print "低体重";
          }
        }
      }
    ?>
  </body>
</html>