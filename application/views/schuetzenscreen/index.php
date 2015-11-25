<h2><?php echo $Vereinsname; ?></h2>

<?php foreach ($Verein as $verein_item): ?>

        <h3><?php echo $verein_item['Vereinsname']; ?></h3>
        <div class="main">
                <?php echo $verein_item['Username']; ?>
                <br>
                <?php echo $verein_item['Ansprechpartner_Vorname']; ?>
            
            <a href="create">Create</a>
        </div>

<?php endforeach; ?>