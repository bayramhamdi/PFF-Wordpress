<h2>Departements</h2>

<?php foreach ($object as $object): ?>

    <?php $this->render_view('_item', array('locals' => array('object' => $object))); ?>

<?php endforeach; ?>

<?php echo $this->pagination(); ?>