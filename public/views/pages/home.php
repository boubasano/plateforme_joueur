<?php $title = 'Accueil'; ?>
<?php ob_start(); ?>

<p>
    <?= $data ?>
</p>

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>