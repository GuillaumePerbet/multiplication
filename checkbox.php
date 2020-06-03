<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("head.html"); ?>
    <title>Séléction de tables de multiplication</title>
</head>
<body>
    <?php include_once("navbar.html"); ?>

    <main class="container">
        <section>
            <header>
                <h1>Sélection de tables de multiplication</h1>
            </header>
            
            <section>
                <!-- select tables to print -->
                <form action="checkbox.php" method="post">
                    <fieldset>
                        <legend>Choix des tables à afficher : </legend>
                            <?php
                            for ($i=1; $i<=10; $i++){
                            ?>
                                <!-- form checkboxes -->
                                <input type="checkbox" name=<?=$i?> id=<?=$i?> value=<?=$i?>/>
                                <label for=<?=$i?>><?=$i?></label>
                            <?php
                            }
                            ?>
                    </fieldset>
                    <input type="submit" value="Afficher">
                </form>
            </section>
            
            <?php
            for ($i=1; $i<=10; $i++){
                // check submitted numbers
                if (isset($_POST[$i])){
                    ?>
                    <section class="table">
                        <header>
                            <h2>Table de multiplication du <?=$i?></h2>
                        </header>
                    <?php
                        // compute and print results
                        for ($j=1; $j<=10; $j++){
                            $result=$i*$j;
                        ?>
                            <p><?=$i?> x <?=$j?> = <?=$result?></p>
                        <?php
                        }
                        ?>
                    </section>
                <?php
                }
            }
            ?>
        </section>
    </main>
</body>
</html>