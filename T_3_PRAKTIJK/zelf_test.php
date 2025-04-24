<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $score = 0;
    for ($i = 1; $i <= 10; $i++) {
        if (isset($_POST["vraag$i"])) {
            $score += intval($_POST["vraag$i"]);
        }
    }

    // Bepaal het resultaat op basis van de score
    if ($score >= 80) {
        $resultaat = "<h2>Uitslag is: $score. Je hebt een uitstekend verzorgd gebit!</h2>";
    } elseif ($score >= 60) {
        $resultaat = "<h2>Uitslag is: $score. Je gebit is goed verzorgd, maar er zijn specifieke onderdelen waar je je gedrag moet verbeteren.</h2>";
    } elseif ($score >= 20) {
        $resultaat = "<h2>Uitslag is: $score. Je gebit is matig verzorgd. Het is verstandig om advies te vragen aan een tandarts. Waarschijnlijk heb je al gebitsproblemen.</h2>";
    } else {
        $resultaat = "<h2>Uitslag is: $score. Je gebit is niet goed verzorgd. Je moet advies vragen aan een tandarts. Waarschijnlijk ga je niet regelmatig naar de tandarts en heb je al gebitsproblemen.</h2>";
    }
}
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Mondzorg</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <header>
        <h1>Zelf-test</h1>
       <!--inlcude php nav menu-->
       <?php include "includes/nav.php" ?>
       
    </header>

    <main>
        <h2>Zelftest: Hoe gezond is jouw gebit?</h2>

        <!-- Toon het resultaat als het beschikbaar is -->
        <?php if (isset($resultaat)): ?>
            <div class="resultaat">
                <?php echo $resultaat; ?>
                <p><a href="zelf_test.php">Doe de test opnieuw</a></p>
            </div>
        <?php endif; ?>

        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

            <!-- Vraag 1 -->
            <label>1) Hoe vaak poets je per dag?</label><br>
            <input type="radio" name="vraag1" value="10" required>  2 keer per dag<br>
            <input type="radio" name="vraag1" value="5"> 1 keer per dag<br>
            <input type="radio" name="vraag1" value="-10"> Minder dan 1 keer per dag<br><br>

            <!-- Vraag 2 -->
            <label>2) Gebruik je na iedere maaltijd of minimaal 1 keer per dag?</label><br>
            <input type="radio" name="vraag2" value="10" required> Rager<br>
            <input type="radio" name="vraag2" value="5"> Tandenstoker<br>
            <input type="radio" name="vraag2" value="-5"> Niks<br><br>

            <!-- Vraag 3 -->
            <label>3) Ga je ieder halfjaar naar een mondhygieniste?</label><br>
            <input type="radio" name="vraag3" value="10" required> Ja<br>
            <input type="radio" name="vraag3" value="5"> Minder dan 1x per jaar<br>
            <input type="radio" name="vraag3" value="0"> Nee<br><br>

            <!-- Vraag 4 -->
            <label>4) Gebruik je een electrische tandenborstel?</label><br>
            <input type="radio" name="vraag4" value="10" required> Ja<br>
            <input type="radio" name="vraag4" value="5"> Nee<br><br>

            <!-- Vraag 5 -->
            <label>5) Gebruik je een tandpasta met fluoride?</label><br>
            <input type="radio" name="vraag5" value="10" required> Ja<br>
            <input type="radio" name="vraag5" value="5"> Nee<br><br>

            <!-- Vraag 6 -->
            <label>6) Heb je wel eens last van een stinkende adem?</label><br>
            <input type="radio" name="vraag6" value="0" required> Ja<br>
            <input type="radio" name="vraag6" value="10"> Nee<br><br>

            <!-- Vraag 7 -->
            <label>7) Gebruik je wel eens een tongschraper?</label><br>
            <input type="radio" name="vraag7" value="10" required> Ja<br>
            <input type="radio" name="vraag7" value="5"> Nee<br><br>

            <!-- Vraag 8 -->
            <label>8) Heb je weleens last van bloedend tandvlees?</label><br>
            <input type="radio" name="vraag8" value="-10" required> Ja<br>
            <input type="radio" name="vraag8" value="10"> Nee<br><br>

            <!-- Vraag 9 -->
            <label>9) Poets je minimaal 2 minuten en werk je alles grondig af?</label><br>
            <input type="radio" name="vraag9" value="10" required> Ja<br>
            <input type="radio" name="vraag9" value="5"> Nee<br><br>

            <!-- Vraag 10 -->
            <label>10) Gebruik je mondwater zonder alcohol?</label><br>
            <input type="radio" name="vraag10" value="10" required> Ja<br>
            <input type="radio" name="vraag10" value="5"> Nee<br><br>

            <input type="submit" value="Verstuur">
        </form>

    </main>

    <footer>
        <p>&copy; 2025 Mondzorg Zelf-test. Alle rechten voorbehouden.</p>
    </footer>

</body>

</html>