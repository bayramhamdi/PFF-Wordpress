<h2>Etudiants</h2>

<?php foreach ($data as $object): ?>

    <?php $this->render_view('_item', array('locals' => array('object' => $object))); ?>

<?php endforeach; ?> 

<?php echo $this->pagination(); ?>