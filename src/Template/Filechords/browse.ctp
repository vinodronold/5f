<div class="page-header">
  <h3>Chords</h3>
</div>

<table class="table table-hover">
   <thead>
      <tr>
         <th>#</th>
         <th><?= $this->Paginator->sort('song') ?></th>
         <th><?= $this->Paginator->sort('album') ?></th>
         <th class = "hidden-xs hidden-sm"><?= $this->Paginator->sort('artist') ?></th>
      </tr>
   </thead>
   <tbody>
      <?php
         $Cnt = 0;
         foreach ($filechords as $filechord):
         $Cnt = $Cnt + 1;
      ?>
         <tr>
            <td><?php echo $Cnt ?></td>
            <td><?= $this->Html->link($filechord->song, ['action' => 'view', $filechord->id])?></td>
            <td><?= h($filechord->album) ?></td>
            <td class = "hidden-xs hidden-sm"><?= h($filechord->artist) ?></td>
         </tr>
      <?php endforeach; ?>
   </tbody>
</table>

<div class="paginator">
  <ul class="pagination pagination-sm">
      <?= $this->Paginator->prev('< ' . __('previous')) ?>
      <?= $this->Paginator->numbers() ?>
      <?= $this->Paginator->next(__('next') . ' >') ?>
  </ul>
  <p><?= $this->Paginator->counter() ?></p>
</div>