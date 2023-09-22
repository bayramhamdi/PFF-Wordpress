<head>
    <link rel="stylesheet" href="<?php echo mvc_css_url ('df','style.css') ?>">
</head>
<div class="container-fluid py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-5 mb-lg-0">
                <p class="section-title pr-5"><span class="pr-2">PRÉ-INSCRIPTION</span></p>
                <h1 class="mb-4">Ouverture des inscriptions</h1>
                <p>Dream Formation innove constamment et procède aux adaptations nécessaires afin de proposer des programmes d’enseignement
                    de haute qualité, adaptés aux besoins des entreprises et aux choix des stagiaire.
                    Dream Formation oeuvrent à préparer des diplômés opérationnels dès le premier jour sur le marché de l’emploi.</p>
             
            </div>
            <div class="col-lg-5">
                <div class="card border-0">
                    <div class="card-header bg-secondary text-center p-4">
                        <h1 class="text-white m-0">Merci de remplir</br> le formulaire</h1>
                    </div>
                    <div class="card-body rounded-bottom bg-primary p-5">

<form action="" method="POST">
<div class="form-group">

<input type="text" name="nom" class="form-control border-0 p-4" placeholder="Nom" required="required"><br>
</div>
<div class="form-group">
<input type="text" name="prenom" class="form-control border-0 p-4" placeholder="Prénom" required="required"><br>
</div>
<div class="form-group">
<input type="text" name="adresse" class="form-control border-0 p-4" placeholder="Adresse" required="required"><br>
</div>
<div class="form-group">
<input type="text" name="tel" class="form-control border-0 p-4" placeholder="Telephone" required="required"><br>
</div>
<div class="form-group">
<select name="departement_id" class="custom-select border-0 px-4" style="height: 47px;">
    <?php foreach($departements as $departement):?>
    <option value="<?php echo $departement->id;?>"> <?php echo $departement->name;?> </option>
    <?php endforeach;?>
</select>
    </div>
<div>
<input class="btn btn-secondary btn-block border-0 py-3" type="submit" value="Ajouter" name="btn_ajouter">
    </div>
</form>

</div>
                </div>
            </div>
        </div>
    </div>
    </div>