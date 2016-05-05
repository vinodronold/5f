
<div class="page-header">
  <h3>Contact</h3>
</div>

<?= $this->Flash->render(); ?>

<?php echo $this->Form->create($contact, ['class' => 'form-horizontal']); ?>
<?php
if ($this->Form->isFieldError('name')) {
   echo '<div class="form-group has-error has-feedback">';
}else{
   echo '<div class="form-group">';
};
?>
    <label for="ContactName" class="col-md-2 control-label">Name</label>
    <div class="col-md-10">
        <?php
           echo $this->Form->input('name', ['error' => false, 'label' => false, 'class' => 'form-control input-md', 'id' => 'ContactName', 'placeholder' => 'Enter your Name']);
           if ($this->Form->isFieldError('name')) {
              echo '<p class="text-danger">' . $contact->errors()['name']['length'] . '</p>';

           };
        ?>
    </div>
</div>
<?php
if ($this->Form->isFieldError('email')) {
   echo '<div class="form-group has-error has-feedback">';
}else{
   echo '<div class="form-group">';
};
?>
    <label for="ContactEmail" class="col-md-2 control-label">Email ID</label>
    <div class="col-md-10">
        <?php
           echo $this->Form->input('email', ['error' => false, 'label' => false, 'class' => 'form-control input-md', 'id' => 'ContactEmail', 'placeholder' => 'Enter your email ID']);
           if ($this->Form->isFieldError('email')) {
              echo '<p class="text-danger">' . $contact->errors()['email']['format'] . '</p>';

           };
        ?>

    </div>
</div>
<?php
if ($this->Form->isFieldError('body')) {
   echo '<div class="form-group has-error has-feedback">';
}else{
   echo '<div class="form-group">';
};
?>
    <label for="ContactMessage" class="col-md-2 control-label">Message</label>
    <div class="col-md-10">
        <?php
           echo $this->Form->input('body', ['error' => false, 'label' => false, 'rows' => '10', 'class' => 'form-control input-md', 'id' => 'ContactMessage', 'placeholder' => 'Write your message']);
           if ($this->Form->isFieldError('body')) {
              echo '<p class="text-danger">' . $contact->errors()['body']['length'] . '</p>';

           };
        ?>
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">&nbsp</label>
    <div class="col-md-10">
        <?= $this->Recaptcha->display() ?>
    </div>
</div>
<div class="form-group">
    <div class="col-md-offset-2 col-md-10">
        <?php echo $this->Form->button('Submit', ['class' => 'btn btn-primary btn-md']); ?>
    </div>
</div>

<?php echo $this->Form->end(); ?>
