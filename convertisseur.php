<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="Convertisseur EUR">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="styles.css">
    <title>Convertisseur de devises</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>

<body>
    <h1 class="title">Convertisseur de devises</h1>
    <form method="get">
        <label for="amount">Montant en EUR :</label>
        <input type="number" name="amount" id="amount" required>
        <br>
        <label for="currency">Convertir en :</label>
        <select name="currency" id="currency">
            <option value="USD">Dollar américain (USD)</option>
            <option value="CAD">Dollar canadien (CAD)</option>
            <option value="GBT">Livres sterling (GBT)</option>
            <option value="JPY">Yen japonais (JPY)</option>
            <option value="CNY">Yuan chinois (CNY)</option>
        </select>
        <br>
        <input class="button" type="submit" name="convert" value="Convertir">
    </form>
    <?php
    //On récupère via la clé de l'API les taux de change des différentes devises.
    $url = "https://v6.exchangerate-api.com/v6/46ecdf6f84693f8d4660affe/latest/EUR";
    $response = file_get_contents($url);
    if ($response === false) {
        echo "Erreur lors de la récupération des données. Vérifiez votre connexion internet.";
    }
    $data = json_decode($response, true);
    //Si le bouton "convert" a été cliqué, 
    //alors on attribue aux variables amount et currency les valeurs précisées dans le formulaire
    if (isset($_GET["convert"])) {
        $amount = $_GET["amount"];
        $currency = $_GET["currency"];
        if (array_key_exists($currency, $data["conversion_rates"])) {
            $exchange_rates = $data["conversion_rates"][$currency];
            $converted_amount = round($amount * $exchange_rates);
            echo "<p>$amount EUR est égal à $converted_amount $currency.</p>";
        }
    }
    ?>
</body>

</html>