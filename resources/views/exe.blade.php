<!DOCTYPE HTML>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <title>練習</title>
  </head>

  <body>
    <?php
        hito::message();
        
        class hito{
            public $name;
            public $sintyo;
            function hyozyun(){
                $s = $this->sintyo / 100;
                return $s * $s * 22;
            }
            static function message(){
                print "健康を大切にしましょう";
            }
        }
    ?>
  </body>
</html>