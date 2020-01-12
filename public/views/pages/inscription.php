<?php ob_start(); ?>

<h1> Bienvenue sur la page d'inscription </h1><br>

<div class="col">
  <div class="col-sm-12">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">Joueur</h2>
        <h5 class="card-text"> Cliquez ici pour vous inscrire</h5>
        <a href="<?=url('infojoueur')?>" class="btn btn-primary">S'inscrire</a>
      </div>
    </div>
  </div>
  <div class="col-sm-12">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">Club</h2>
        <h5 class="card-text"> Cliquez ici pour vous inscrire</h5>
        <a href="<?=url('club')?>" class="btn btn-primary">S'inscrire</a>
      </div>
    </div>
  </div>
  <div class="col-sm-12">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">Agent</h2>
        <h5 class="card-text"> Cliquez ici pour vous inscrire</h5>
        <a href="<?=url('agent')?>" class="btn btn-primary">S'inscrire</a>
      </div>
    </div>
  </div>
</div>

      


<?php $content = ob_get_clean() ?> 
<?php view('template', compact('content')); ?>  