<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("template/head.html"); ?>
    <title>Super Révisions Ajax</title>
</head>
<body>
    <?php include_once("template/navbar.html"); ?>
    
    <main>
        <section class="container flex column center">
            <header>
                <h1>Super Révisions</h1>
            </header>

            <div class="elevation flex column center">
                <!--introduction-->
                <p id="intro" class="txt-center">Répondez à une série de 5 questions</p>
                <!-- ask questions -->
                <form id="questions" style="display: none" class="flex column">
                    <div class="margin">
                        <label for="answer1" id="label1"></label>
                        <input type="number" name="answer1" id="answer1">
                        <input type="hidden" id="number1-1" name="number1-1" value="">
                        <input type="hidden" id="number1-2" name="number1-2" value="">
                    </div>
    
                    <div class="margin">
                        <label for="answer2" id="label2"></label>
                        <input type="number" name="answer2" id="answer2">
                        <input type="hidden" id="number2-1" name="number2-1" value="">
                        <input type="hidden" id="number2-2" name="number2-2" value="">
                    </div>
    
                    <div class="margin">
                        <label for="answer3" id="label3"></label>
                        <input type="number" name="answer3" id="answer3">
                        <input type="hidden" id="number3-1" name="number3-1" value="">
                        <input type="hidden" id="number3-2" name="number3-2" value="">
                    </div>
    
                    <div class="margin">
                        <label for="answer4" id="label4"></label>
                        <input type="number" name="answer4" id="answer4">
                        <input type="hidden" id="number4-1" name="number4-1" value="">
                        <input type="hidden" id="number4-2" name="number4-2" value="">
                    </div>
    
                    <div class="margin">
                        <label for="answer5" id="label5"></label>
                        <input type="number" name="answer5" id="answer5">
                        <input type="hidden" id="number5-1" name="number5-1" value="">
                        <input type="hidden" id="number5-2" name="number5-2" value="">
                    </div>

                    <!-- print answer and score-->
                    <p class="score" id="score"></p>
    
                    <input id="questionsSubmit" type="submit" value="Valider">
                </form>
    
                <!-- launch -->
                <form id="launch" class="flex column center">
                    <input type="submit" value="C'est parti !">
                </form>
            </div>

        </section>
    </main>
    
    <script src="js/script.js"></script>
    <script src="js/burger.js"></script>
</body>
</html>