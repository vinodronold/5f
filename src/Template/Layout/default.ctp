<?php
/**
* CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
* Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
*
* Licensed under The MIT License
* For full copyright and license information, please see the LICENSE.txt
* Redistributions of files must retain the above copyright notice.
*
* @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
* @link          http://cakephp.org CakePHP(tm) Project
* @since         0.10.0
* @license       http://www.opensource.org/licenses/mit-license.php MIT License
*/

?>
<!DOCTYPE html><html>
<head>
   <?= $this->Html->charset() ?>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content=<?= '"fivefrets.com : '.$pageDescription.'"'?>>
   <meta name="keywords" content=<?= '"fivefrets.com, '.$pageKey.', guitar chords, guitar tabs, latest guitar chords, tamil songs, chords for tamil songs, telugu songs, chords for telugu songs, hindi songs, chords for hindi songs, bollywood songs, chords for bolly songs"'?> >
   <meta name="author" content="Vinod Ronold">
   <title>
      <?= $pageDescription ?>
   </title>
   <?= $this->Html->meta('icon') ?>
   <?= $this->Html->css('bootstrap.min.css') ?>

   <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->

   <?= $this->fetch('meta') ?>
   <?= $this->fetch('css') ?>
   
   <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-27892942-1', 'auto');
      ga('send', 'pageview');
   </script>

</head>

<body>

  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=118037094994231";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

   <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
         <!-- Brand and toggle get grouped for better mobile display -->
         <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-ffmenu" aria-expanded="false">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </button>
            <?= $this->Html->link('f i v e f r e t s', ['controller' => 'Filechords', 'action' => 'index']
                                                  , ['class' => 'navbar-brand']);?>
         </div>

         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="navbar-collapse-ffmenu">
            <ul class="nav navbar-nav navbar-right">
               <?php
                    echo '<li>';
                    echo $this->Html->link('<span class="glyphicon glyphicon-list" aria-hidden="true"></span>&nbsp;Browse Chords'
                                        , ['controller' => 'Filechords', 'action' => 'browse']
                                        , ['escape' => false]);
                    echo '</li>';
               ?>
            </ul>
         </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
   </nav>
   <?php
      If (strtoupper($this->request->params['controller']) == 'FILECHORDS'
         And strtoupper($this->request->params['action']) == 'INDEX') {

           echo '<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">';
           // Indicators
           echo '<ol class="carousel-indicators">';
           echo '<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>';
           echo '</ol>';

           // Wrapper for slides -->
           echo '<div class="carousel-inner" role="listbox">';
           echo '<div class="item active">';
           echo $this->Html->image('main_banner.jpg', ['alt' => 'Main Banner']);
           echo '<div class="carousel-caption">';
           echo '<h1 class="col-sm-12 text-center hidden-xs hidden-sm"><center>Love Music | Share Music<center></h1>';
           echo '<h6 class="col-sm-12 text-center hidden-md hidden-lg"><center>Love Music | Share Music<center></h6>';

           echo '</div>';
           echo '</div>';
           echo '</div>';

           echo '</div>';
      }else{
        echo '<br><br><br>';
      }
    ?>
 <br>
	<div class="container-fluid">
	   <div class="row">

	      <div class="col-sm-12 text-center hidden-xs hidden-sm">
            <div class="btn-group btn-group-sm" role="group" aria-label="...">
               <?= $this->Html->link('Latest', ['controller' => 'Filechords', 'action' => 'browse']
                                                  , ['class' => 'btn btn-default', 'role' => 'button']);?>
               <?= $this->Html->link('0-9', ['controller' => 'Filechords', 'action' => 'browse','0']
                                                  , ['class' => 'btn btn-default', 'role' => 'button']);?>
               <?= $this->Html->link('A', ['controller' => 'Filechords', 'action' => 'browse','a']
                                                  , ['class' => 'btn btn-default', 'role' => 'button']);?>
               <?= $this->Html->link('B', ['controller' => 'Filechords', 'action' => 'browse','b']
                                                  , ['class' => 'btn btn-default', 'role' => 'button']);?>
               <?= $this->Html->link('C', ['controller' => 'Filechords', 'action' => 'browse','c']
                                                  , ['class' => 'btn btn-default', 'role' => 'button']);?>
               <?= $this->Html->link('D', ['controller' => 'Filechords', 'action' => 'browse','d']
                                                  , ['class' => 'btn btn-default', 'role' => 'button']);?>
               <?= $this->Html->link('E', ['controller' => 'Filechords', 'action' => 'browse','e']
                                                  , ['class' => 'btn btn-default', 'role' => 'button']);?>
               <?= $this->Html->link('F', ['controller' => 'Filechords', 'action' => 'browse','f']
                                                  , ['class' => 'btn btn-default', 'role' => 'button']);?>
               <?= $this->Html->link('G', ['controller' => 'Filechords', 'action' => 'browse','g']
                                                  , ['class' => 'btn btn-default', 'role' => 'button']);?>
               <?= $this->Html->link('H', ['controller' => 'Filechords', 'action' => 'browse','h']
                                                  , ['class' => 'btn btn-default', 'role' => 'button']);?>
               <?= $this->Html->link('I', ['controller' => 'Filechords', 'action' => 'browse','i']
                                                  , ['class' => 'btn btn-default', 'role' => 'button']);?>
               <?= $this->Html->link('J', ['controller' => 'Filechords', 'action' => 'browse','j']
                                                  , ['class' => 'btn btn-default', 'role' => 'button']);?>
               <?= $this->Html->link('K', ['controller' => 'Filechords', 'action' => 'browse','k']
                                                  , ['class' => 'btn btn-default', 'role' => 'button']);?>
               <?= $this->Html->link('L', ['controller' => 'Filechords', 'action' => 'browse','l']
                                                  , ['class' => 'btn btn-default', 'role' => 'button']);?>
               <?= $this->Html->link('M', ['controller' => 'Filechords', 'action' => 'browse','m']
                                                  , ['class' => 'btn btn-default', 'role' => 'button']);?>
               <?= $this->Html->link('N', ['controller' => 'Filechords', 'action' => 'browse','n']
                                                  , ['class' => 'btn btn-default', 'role' => 'button']);?>
               <?= $this->Html->link('O', ['controller' => 'Filechords', 'action' => 'browse','o']
                                                  , ['class' => 'btn btn-default', 'role' => 'button']);?>
               <?= $this->Html->link('P', ['controller' => 'Filechords', 'action' => 'browse','p']
                                                  , ['class' => 'btn btn-default', 'role' => 'button']);?>
               <?= $this->Html->link('Q', ['controller' => 'Filechords', 'action' => 'browse','q']
                                                  , ['class' => 'btn btn-default', 'role' => 'button']);?>
               <?= $this->Html->link('R', ['controller' => 'Filechords', 'action' => 'browse','r']
                                                  , ['class' => 'btn btn-default', 'role' => 'button']);?>
               <?= $this->Html->link('S', ['controller' => 'Filechords', 'action' => 'browse','s']
                                                  , ['class' => 'btn btn-default', 'role' => 'button']);?>
               <?= $this->Html->link('T', ['controller' => 'Filechords', 'action' => 'browse','t']
                                                  , ['class' => 'btn btn-default', 'role' => 'button']);?>
               <?= $this->Html->link('U', ['controller' => 'Filechords', 'action' => 'browse','u']
                                                  , ['class' => 'btn btn-default', 'role' => 'button']);?>
               <?= $this->Html->link('V', ['controller' => 'Filechords', 'action' => 'browse','v']
                                                  , ['class' => 'btn btn-default', 'role' => 'button']);?>
               <?= $this->Html->link('W', ['controller' => 'Filechords', 'action' => 'browse','w']
                                                  , ['class' => 'btn btn-default', 'role' => 'button']);?>
               <?= $this->Html->link('X', ['controller' => 'Filechords', 'action' => 'browse','x']
                                                  , ['class' => 'btn btn-default', 'role' => 'button']);?>
               <?= $this->Html->link('Y', ['controller' => 'Filechords', 'action' => 'browse','y']
                                                  , ['class' => 'btn btn-default', 'role' => 'button']);?>
               <?= $this->Html->link('Z', ['controller' => 'Filechords', 'action' => 'browse','z']
                                                  , ['class' => 'btn btn-default', 'role' => 'button']);?>
            </div>
	      </div>
	   </div>
   </div>
   <section>

      <div class="container-fluid">
         <div class="row">
           <div class="col-md-8 col-md-push-4"><?= $this->fetch('content') ?></div>
           <div class="col-md-4 col-md-pull-8">
               <div class="page-header">
                  <h3>Like us on Facebook</h3>
               </div>
               
               <div class="fb-page" data-href="https://www.facebook.com/fivefretscom-230588093690032/" data-tabs="timeline" data-width="500" data-height="70" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"></div>
               
               <div class="page-header">
                  <h3>Albums</h3>
               </div>
               <div class="list-group">
                  <?php
                     foreach ($albums as $Album) {
                        /*echo '<a href="#" class="list-group-item">'.$Album->album.'</a>';*/
                        echo $this->Html->link($Album->album, ['controller' => 'Filechords', 'action' => 'album',$Album->album]
                                                           , ['class' => 'list-group-item']);
                     }
                  ?>
               </div>
            </div>
         </div>
      </div>
   </section>

   <footer>
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-12">
               <p class="text-muted">Developed by fivefrets.com | Powered by CakePHP</p>
            </div>
         </div>
      </div>

   </footer>



   <?= $this->Html->script(['https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', 'bootstrap.min.js']); ?>
   <?= $this->fetch('script') ?>
   
</body>
</html>