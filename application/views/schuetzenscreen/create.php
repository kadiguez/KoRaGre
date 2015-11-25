<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('schuetzenscreen/create'); ?>

    <label for="vereinsname">Vereinsname</label>
    <input type="input" name="vereinsname" /><br />

    <label for="username">Username</label>
    <input type="input" name="username" /><br />
   
    <label for="passwort">Passwort</label>
    <input type="input" name="passwort" /><br />

    <label for="email">E-Mail</label>
    <input type="input" name="email" /><br />

    <label for="telefon">Telefon</label>
    <input type="input" name="telefon" /><br />

    <label for="strasse">Strasse</label>
    <input type="input" name="strasse" /><br />

    <label for="plz">PLZ</label>
    <input type="input" name="plz" /><br />

    <label for="ort">Ort</label>
    <input type="input" name="ort" /><br />

    <label for="name">Name Ansprechperson</label>
    <input type="input" name="name" /><br />

    <label for="vorname">Vorname Ansprechperson</label>
    <input type="input" name="vorname" /><br />

    <input type="submit" name="submit" value="Verein erstellen" />

</form>