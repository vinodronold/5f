<div class="page-header">
   <h3><?= $filechord->song ?><small>&nbsp;&minus;&nbsp;<?= $filechord->album.' | '.$filechord->artist?> </small></h3>
</div>
<div class="panel panel-default">
   <div class="panel-body">
     <?= $this->Text->autoParagraph(h($filechord->content)); ?>
   </div>
</div>

<div class="panel panel-default">
    <div class="panel-body">
      <p><b>Posted on </b> <?= $filechord->created->i18nFormat('MMMM dd, YYYY'); ?></p>
    </div>
</div>

<div class="fb-comments" data-href="https://www.facebook.com/fivefretscom-230588093690032/" data-numposts="5" data-width="100%"></div>