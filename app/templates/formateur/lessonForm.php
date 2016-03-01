<?php $this->layout('layoutFormateur', [
    'title' => 'Formateur',
    'organisedThemes' => $organisedThemes,
    'cour' => $cour, 
    'messages' => $messages, 
    ]) ?>
<?php $this->start('main_content') ?>
    <?php if(isset($cour) && $cour['id'] != 0) :?>
            <div class="cour">
                    <h2 class="cour_title"><?= $cour['title']; ?></h2>
                    <p class="cour_body"> <?= $cour['text_body'] ?> </p>
            </div> 
              
    <?php endif; ?>

<!-- Ajout cours -->
<section id="add-lesson">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="section-heading">Ajouter un cours</h2>
        </div>
  
    <div class="row" >
        <div class="col-lg-12">

            <div class="row">
             <div class="col-md-8 col-md-offset-1">
                <?php if (isset($errors['vide'])) : ?>
                <p class="alert alert-danger alert-dismissable fade in" ><?php echo $errors['vide']; ?></p>
            <?php endif; ?>

            <form method="POST"  action="<?php echo $this->url('addLesson') ; ?>">

                <div class="form-group"> 
                    <input type="text" class="form-control" placeholder=" titre *" name="titre" id="titre" required data-validation-required-message="Veuillez saissir un titre *">

                </div>

                <div class="form-group">
                    <select class="form-control" name="themes_id">
                        <option value="1" selected>Sécurité</option>
                        <option value="2">Gestion</option>
                        <option value="3">Conduite</option>
                        <option value="4">Droit</option>
                    </select>
                </div>

                <div class="form-group">
                    <textarea class="form-control"  name="text_body" id="text_body" rows=15>

                    </textarea>
                </div>

                <button type="submit" name="addLesson" class="btn btn-primary">Ajouter</button>

            </div>
        </form>
    </div>   
</div>
</div>
</div>
</section>	
<?php $this->stop('main_content') ?>

