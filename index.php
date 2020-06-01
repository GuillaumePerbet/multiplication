<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table de la multiplication par 3</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Table du 3</a></li>
                <li><a href="select.php">Sélection de la table</a></li>
                <li><a href="checkbox.php">Afficher des tables</a></li>
                <li><a href="revision.php">Révisions</a></li>
                <li><a href="superrevision">Super Révisions</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <header>
                <h1>La table de multiplication du 3</h1>
            </header>
            
            <?php
            // calculating results
            for ($i=1; $i<=10; $i++){
                $result=3*$i;
                ?>
                <!-- printing result -->
                <p>3 x <?=$i?> = <?=$result?></p>
            <?php
            }
            ?>
        </section>
    </main>
</body>
</html>