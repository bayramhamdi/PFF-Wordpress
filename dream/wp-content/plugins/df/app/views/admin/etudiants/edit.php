<h2>Edit Etudiant</h2>

<?php echo $this->form->create($model->name, array('is_admin' => $this->is_admin)); ?>
<?php echo $this->form->open_admin_table(); ?>
<?php echo $this->form->input('nom'); ?>
<?php echo $this->form->close_admin_table(); ?>
<?php echo $this->form->end('Update'); ?>