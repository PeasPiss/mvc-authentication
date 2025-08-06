<section id="register-container">
    <h1 class="card-title text-center mb-4" id="title">Ajouter un Utilisateur</h1>
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="roounded-4">
                <div class="card-body" id="login">
                    <div id="register">
                        <form action="register" method="post" id="registerForm">
                            <div> <!--  class="row justify-content-center" -->
                                <div id="o-o"> <!--  class="col-md-8" -->

                                    <!-- Utilisateur -->
                                    <div class="mb-3 row">
                                        <label for="utilisateur" class="col-sm-4 col-form-label text-start">Utilisateur :</label>
                                        <div class="col-sm-8" id="TwT">
                                            <input type="text" name="nom" id="utilisateur" class="form-control">
                                            <div class="invalid-feedback" id="utilisateurError">Veuillez entrer un nom d'utilisateur.</div>
                                        </div>
                                    </div>

                                    <!-- Mot de passe -->
                                    <div class="mb-3 row">
                                        <label for="password" class="col-sm-4 col-form-label text-start">Mot de passe :</label>
                                        <div class="col-sm-8" id="TwT">
                                            <input type="password" name="password" id="password" class="form-control">
                                            <div class="invalid-feedback" id="passwordError">Veuillez entrer un mot de passe.</div> <!-- id="q-q" -->
                                        </div>
                                    </div>

                                    <!-- Email -->
                                    <div class="mb-3 row">
                                        <label for="email" class="col-sm-4 col-form-label text-start">Email :</label>
                                        <div class="col-sm-8" id="TwT">
                                            <input type="email" name="email" id="email" class="form-control">
                                            <div class="invalid-feedback" id="emailError">Veuillez entrer une adresse email valide.</div>
                                        </div>
                                    </div>

                                    <!-- Fonction -->
                                    <div class="mb-3 row">
                                        <label for="fonction" class="col-sm-4 col-form-label text-start">Fonction :</label>
                                        <div class="col-sm-8" id="TwT">
                                            <input type="text" name="fonction" id="fonction" class="form-control">
                                            <div class="invalid-feedback" id="fonctionError">Veuillez saisir une fonction.</div>
                                        </div>
                                    </div>

                                    <!-- Boutons -->
                                    <div class="row">
                                        <div class="offset-sm-4 col-sm-8">
                                            <button type="submit" class="btn btn-primary me-2" id="V">Enregistrer</button>
                                            <button type="reset" class="btn btn-outiline-secondary" id="A">Annuler</button>
                                        </div>
                                    </div>
                                    
                                    <!-- Bouton "Retour à l'accueil" -->
                                    <div class="row justify-content-between align-items-left mb-3">
                                        <div class="col-6"></div>
                                        <div> <!--  class="col-6 text-end" -->
                                            <a href="/" class="btn btn-outline-danger" id="CUC">Retour à l'accueil</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    if (isset($error_message)) {
    ?>
        <div>
            <p><?= $error_message ?></p>
        </div>
    <?php
    } ?>
</section>