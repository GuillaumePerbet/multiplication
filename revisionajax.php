<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Révisions Ajax</title>
</head>
<body>
    <?php include_once("navbar.php"); ?>
    
    <main>
        <section>
            <header>
                <h1>Révisions</h1>
            </header>

            <!-- print result -->
            <p id="result"></p>

            <!-- select table to practice -->
            <form id="select">
                <label for="number">Choisir la table à réviser :</label>
                <select name="number" id="number">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
                <input type="submit" value="Choisir">
            </form>

            <!-- ask question -->
            <form id="question" style="display:none">
                <label for="answer"></label>
                <input type="number" name="answer" id="anwer">
                <input type="submit" value="Valider">
            </form>
        </section>
    </main>
    <script src="revision.js"></script>
</body>
</html>