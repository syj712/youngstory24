<?php
require_once('css/home_css.php');
?>
<!DOCTYPE html>
<html>
  <head>

    <title>
      <?php
    if(isset($_GET['title'])){
      echo $_GET['title'];
    } elseif(isset($_GET['dir'])){
      echo $_GET['dir'].'_list-Young_-story';
    }else{
      echo "Young_-story";
    }
    ?>
    </title>
    <link href="./master/image/younglogo.ico" rel="shortcut icon" type="image/x-icon">
    <meta name="description" content="나의 기록">

    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php
  if(isset($_GET['title'])){
    echo $_GET['title'];
  } elseif(isset($_GET['dir'])){
    echo $_GET['dir'].'_list-Young_-story';
  }else{
    echo "Young_-story";
  }
  ?>">
    <meta property="og:description" content="Young_-story 나의 기록">
    <meta property="og:image" content="http://youngstory24.ddns.net:9804/master/image/younglogo.jpg">
    <meta property="og:url" content="http://youngstory24.ddns.net">
    <meta property="og:image:width" content="200">
    <meta property="og:image:height" content="200">
    <meta property="og:image:type" content="image/jpeg">

    <meta name="naver-site-verification" content="dbd04f1b5462c7933aae230dff6eaaa618591776" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-189381831-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-189381831-3');
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7S2G2M4LV2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-4HHR9TZ40F');
    </script>

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6635919675718664"
     crossorigin="anonymous"></script>

    <meta name="robots" content="home,follow">

    <meta name="google-site-verification" content="UXzBR1N1CLCNmzlVyj0zsIXR947e6A1nhYO1WVqL3xk" />

    <meta name="google-site-verification" content="UXzBR1N1CLCNmzlVyj0zsIXR947e6A1nhYO1WVqL3xk" />

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  </head>

  <body>
    <div class="header">
      <div class="logo">
        <a href="http://youngstory24.ddns.net:9804/">Young_-story</a>
      </div>
      <div class="menu_img">
        <img src="master/image/menu.jpg">
        <div class="category">
          <ul>
            <?php
            if(1==1){
              $categorydir=scandir('./upload/');

              $i=5;
              while($i<count($categorydir)){
                $categorylist=$categorydir[$i];

                if($categorydir[$i]){
                  echo "<li class=\"menu1\">$categorylist";
                  echo "<ul class=\"menu2_ul\">";

                  if(1==1){
                    $menu2dir=scandir('./upload/'.$categorylist);

                    $i2=2;
                    while($i2<count($menu2dir)){
                      $menu2list=$menu2dir[$i2];

                      if($menu2dir[$i2]){
                        echo"<li class=\"menu2\"><hr><div class=\"menu22\">$menu2list</div><hr><ul>";

                        if(1==1){
                          $menu3dir=scandir('./upload/'.$categorylist.'/'.$menu2list);

                          $i3=2;
                          while($i3<count($menu3dir)){
                            $menu3list=$menu3dir[$i3];

                            if($menu3dir[$i3]){
                              echo"<a href=\"?id=".$categorylist."&sub=".$menu2list."&dir=$menu3list\"><li class=\"menu3\">$menu3list</li></a>";
                            }
                            $i3=$i3+1;
                          }
                          echo "</ul>";
                        }
                      }

                      $i2=$i2+1;
                    }
                    echo "</li>";
                  }

                };

                $i=$i+1;
                echo "</li></ul></li>";
              };
            };
            ?>
            <a href="http://youngstory24.ddns.net:9804/"><li class="menu1">HOME</li></a>
          </ul>
        </div>
      </div>
    </div>

    <div class="list">
      home
      <?php
      if(isset($_GET['id'])&&isset($_GET['sub'])&&isset($_GET['dir'])){
      echo "> ".$_GET['id']." > ".$_GET['sub']." > ".$_GET['dir'];
      } else if( isset($_GET['id'])&&isset($_GET['sub'])){
      echo "> ".$_GET['id']." > ".$_GET['sub'];
      } else if( isset($_GET['id'])){
      echo "> ".$_GET['id'];
      };
      ?>
    </div>

    <div class="menu2_title">
      <?php
      if(isset($_GET['sub'])){
        echo $_GET['id'].' ▶ '.$_GET['sub'];
      } else if(isset($_GET['id'])){
        echo $_GET['id'];
      } else{
        echo "";
      }
      ?>
    </div>

    <div class="main">
      <div class="menu3_title">

        <?php
        if(isset($_GET['dir'])){
          echo "<a href=\"?id=".$_GET['id']."&sub=".$_GET['sub']."&dir=".$_GET['dir']."\">".$_GET['dir']."_list</a>";
        } else{
          echo "";
        }
        ?>
      </div>
      <div class="contents_list">
        <?php
        if(isset($_GET['title'])){
          echo "";
        } else if(isset($_GET['dir'])){
          $contents_listdir=scandir('./upload/'.$_GET['id'].'/'.$_GET['sub'].'/'.$_GET['dir'].'/');

          $icl=2;
          echo "<ol class=\"list_ol\">";
          while($icl<count($contents_listdir)){
            $contents_list=$contents_listdir[$icl];

              if($contents_listdir[$icl]){
                echo "<li><a href=\"?id=".$_GET['id']."&sub=".$_GET['sub']."&dir=".$_GET['dir']."&title=$contents_list\">$contents_list</a></li><hr>";
              };

          $icl=$icl+1;
          };
          echo "</ol>";
        }else{
          echo "";
        }
        ?>
      </div>
      <div class="contents_title">
        <h1>
          <?php
          if(isset($_GET['title'])){
            echo $_GET['title'];
          }
          ?>
        </h1>
      </div>

      <?php
      if(isset($_GET['title'])){
        echo '<hr class="hr_title">';
        }else{
        echo "";
        };
      ?>

      <div class="contents">
        <?php
        if(isset($_GET['title'])){
          echo file_get_contents('./upload/'.$_GET['id'].'/'.$_GET['sub'].'/'.$_GET['dir'].'/'.$_GET['title']);
        }else{
          echo "";
        };

        if(isset($_GET['id'])==0){
          echo file_get_contents('./upload/(tool)/homemain');
        }else{
          echo "";
          };
          ?>
      </div>
    </div>

    <div class="footer">
      hi~!
    </div>

  </body>
</html>
