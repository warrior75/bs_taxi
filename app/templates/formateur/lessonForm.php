<?php $this->layout('layoutGeneral', ['title' => 'Formateur']) ?>

<?php $this->start('main_content') ?>
<!-- Ajout cours -->
<section id="add-user">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="section-heading">Ajout Cours</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">

            <div class="row">
             <div class="col-md-4 col-md-offset-4">
                <?php if (isset($errors['vide'])) : ?>
                <p class="bg-danger" ><?php echo $errors['vide']; ?></p>
            <?php endif; ?>

            <form method="POST"  action="<?php echo $this->url('addLesson') ; ?>">

                <div class="form-group"> 
                    <input type="text" class="form-control" placeholder=" titre *" name="titre" id="titre" required data-validation-required-message="Veuillez saissir un titre *">

                </div>

                <div class="form-group">
                    <select class="form-control" name="theme_id">
                        <option value="1" selected>Sécurité</option>
                        <option value="2">Gestion</option>
                        <option value="3">Conduite</option>
                        <option value="4">Droit</option>
                    </select>
                </div>

                <div class="form-group">
                    <textarea class="form-control"  name="text_body" id="text_body">

                    </textarea>
                </div>

                <button type="submit" name="addLesson" class="btn btn-primary">Ajouter</button>

            </div>
        </form>
    </div>   
</div>
</div>
</section>	
<?php $this->stop('main_content') ?>

