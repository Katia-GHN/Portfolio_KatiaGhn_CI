<!DOCTYPE html>
<html lang="en">
    <body>
        <!-- validation form -->
        <div>
            <?php if($this->session->flashdata('success')): ?>
                <div class="alert alert-success alert-dismissible fade show my-5">
                <?php echo $this->session->flashdata('success') ?>
                </div>
            <?php endif; ?>
            <?php if(validation_errors()): ?>
                <div class="alert alert-danger alert-dismissible fade show my-5">
                    <?php echo validation_errors('<p>', '</p>'); ?>
                </div>
            <?php endif; ?>
            <?php if($this->session->flashdata('error')): ?>
                <div class="alert alert-danger">
                <?php echo $this->session->flashdata('error') ?>
                </div>
            <?php endif; ?>
        </div> 
        <!-- Formulaire inscription user -->
        <div class="container-fluid col-6" id="container">
            <h1>Page User</h1>
            <?php echo form_open('user/create_user'); ?>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                    <label for="prenom_id">Prenom*</label>
                    <input type="text" class="form-control" id="prenom_id" name="prenom" placeholder="Prénom" required>
                    </div>
                    <div class="col-md-4 mb-3">
                    <label for="nom_id">Nom</label>
                    <input type="text" class="form-control" id="nom_id" name="nom" placeholder="Nom" >
                    </div>
                    <div class="col-md-4 mb-3">
                    <label for="mail_id">Adresse mail</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend2">@</span>
                        </div>
                        <input type="text" class="form-control" id="email_id" name="email" placeholder="Adresse mail" aria-describedby="inputGroupPrepend2">
                    </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                    <label for="adresse_id">Adresse</label>
                    <input type="text" class="form-control" id="adresse_id" name="adresse" placeholder="Adresse" >
                    </div>
                    <div class="col-md-3 mb-3">
                    <label for="ville_id">Ville</label>
                    <input type="text" class="form-control" id="ville_id" name="ville" placeholder="Ville" >
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox"  id="checkbox_id" name="checkbox" value="1" >
                    <label class="form-check-label" for="checkbox_id">
                        Un check pour le fun
                    </label>
                    </div>
                </div>
                <!-- submit-->
                <div class="form-group mb-3 ">
                <button class="btn btn-primary " type="submit">Inscription</button>
                </div>
            <?php echo form_close(); ?>
        </div>
        <!-- retour des résultats via les inputs -->
	    <div class="container-fluid col-7" id="container">
            <h1>Résultats du formulaire d'inscription</h1>
            <p>Prénom <?php echo isset($user_prenom) ? $user_prenom : ''; ?></p>
            <p>Nom: <?php echo isset($user_nom) ? $user_nom : ''; ?></p>
            <p>Email: <?php echo isset($user_email) ? $user_email : ''; ?></p>
            <p>Adresse: <?php echo isset($user_adresse) ? $user_adresse : ''; ?></p>
            <p>Ville: <?php echo isset($user_ville) ? $user_ville: ''; ?></p>
            <p>Checkbox: <?php echo isset($user_checkbox) && $user_checkbox == 'on' ? 'Oui' : 'Non'; ?></p>
            <p>Id: <?php echo isset($user_id) ? $user_id : ''; ?></p>
        </div>
        <!-- liste des contacts -->
	    <a href="<?php echo base_url('user/users_list'); ?>" class=" btn btn-primary ">Liste des contacts</a>
    </body>
</html>