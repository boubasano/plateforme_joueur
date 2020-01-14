<?php ob_start(); ?>

<div class="container">

<h1>Infos joueur</h1>


    <?= $errors; ?>
    <!-- formulaire -->
    <?= $formulaireHtml; ?>



</div>

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>