
<?php include "inc/header.php"; ?>

  <h2 class="right__title">Nous contacter</h2>

  <pre>
    <?php var_dump( $_POST ) ?>
    
  </pre>

  <?php

    if( count( $_POST ) > 0 ) :
      $validated_mail = filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL );
  ?>

    <section>
      <h3>Confirmation</h3>
      <p>
        Merci <?= $_POST['prenom']; ?>, votre demande a bien été envoyée.
        Vous recevrez une réponse sous 48h à l'adresse <?= $_POST['email']; ?>.
      </p>
    </section>

  <?php
    endif;
  ?>

  <section id="contact">
    <form id="form" action="index.php" method="post">
        <fieldset>
            <legend>Identité</legend>
            <div class="form-row">
                <label>Je suis</label>
                <div class="input-group">
                    <input type="radio" name="genre" value="2">
                    <span>une femme /</span>
                    <input type="radio" name="genre" value="1" checked>
                    <span>un homme</span>
                </div>
            </div>
            <div class="form-row">
                <label for="prenom">Mon prénom est </label>
                <input type="text" id="prenom" required placeholder="Prenom">
            </div>
            <div class="form-row">
                <label for="nom">Et mon nom, </label>
                <input type="text" id="nom" name="nom" required placeholder="Nom">
            </div>
        </fieldset>

        <fieldset>
            <legend>Message</legend>
            <div class="form-row">
                <label for="email">Répondez-moi via</label>
                <input type="email" id="email" name="email" required placeholder="Adresse e-mail">
            </div>
            <div class="form-row">
                <label for="message">Je voulais vous dire que</label>
                <textarea id="message" name="message" required placeholder="Votre message"></textarea>
            </div>
        </fieldset>

        <fieldset>
            <div class="form-row">
                <label for="info">Je certifie la véracité de ces informations.</label>
                <input id="info" type="checkbox" required name="info" value="1">
            </div>
        </fieldset>

        <button id="submit-form" type="submit">Envoyer</button>
    </form>
  </section>

<?php include "inc/footer.php"; ?>