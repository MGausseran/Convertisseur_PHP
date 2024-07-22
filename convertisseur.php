<!DOCTYPE html>
<html>

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

        <?php
        $currencies_with_names = [
            "AED" => "Dirham des Émirats arabes unis (AED)",
            "AFN" => "Afghani afghan (AFN)",
            "ALL" => "Lek albanais (ALL)",
            "AMD" => "Dram arménien (AMD)",
            "ANG" => "Florin antillais (ANG)",
            "AOA" => "Kwanza angolais (AOA)",
            "ARS" => "Peso argentin (ARS)",
            "AUD" => "Dollar australien (AUD)",
            "AWG" => "Florin arubais (AWG)",
            "AZN" => "Manat azéri (AZN)",
            "BAM" => "Mark convertible bosniaque (BAM)",
            "BBD" => "Dollar barbadien (BBD)",
            "BDT" => "Taka bangladais (BDT)",
            "BGN" => "Lev bulgare (BGN)",
            "BHD" => "Dinar bahreïni (BHD)",
            "BIF" => "Franc burundais (BIF)",
            "BMD" => "Dollar bermudien (BMD)",
            "BND" => "Dollar brunéien (BND)",
            "BOB" => "Boliviano bolivien (BOB)",
            "BRL" => "Real brésilien (BRL)",
            "BSD" => "Dollar bahaméen (BSD)",
            "BTN" => "Ngultrum bhoutanais (BTN)",
            "BWP" => "Pula botswanais (BWP)",
            "BYN" => "Rouble biélorusse (BYN)",
            "BZD" => "Dollar bélizien (BZD)",
            "CAD" => "Dollar canadien (CAD)",
            "CDF" => "Franc congolais (CDF)",
            "CHF" => "Franc suisse (CHF)",
            "CLP" => "Peso chilien (CLP)",
            "CNY" => "Yuan chinois (CNY)",
            "COP" => "Peso colombien (COP)",
            "CRC" => "Colón costaricain (CRC)",
            "CUP" => "Peso cubain (CUP)",
            "CVE" => "Escudo capverdien (CVE)",
            "CZK" => "Couronne tchèque (CZK)",
            "DJF" => "Franc djiboutien (DJF)",
            "DKK" => "Couronne danoise (DKK)",
            "DOP" => "Peso dominicain (DOP)",
            "DZD" => "Dinar algérien (DZD)",
            "EGP" => "Livre égyptienne (EGP)",
            "ERN" => "Nakfa érythréen (ERN)",
            "ETB" => "Birr éthiopien (ETB)",
            "EUR" => "Euro (EUR)",
            "FJD" => "Dollar fidjien (FJD)",
            "FKP" => "Livre des Îles Falkland (FKP)",
            "FOK" => "Couronne des Îles Féroé (FOK)",
            "GBP" => "Livre sterling (GBP)",
            "GEL" => "Lari géorgien (GEL)",
            "GGP" => "Livre de Guernesey (GGP)",
            "GHS" => "Cedi ghanéen (GHS)",
            "GIP" => "Livre de Gibraltar (GIP)",
            "GMD" => "Dalasi gambien (GMD)",
            "GNF" => "Franc guinéen (GNF)",
            "GTQ" => "Quetzal guatémaltèque (GTQ)",
            "GYD" => "Dollar guyanien (GYD)",
            "HKD" => "Dollar de Hong Kong (HKD)",
            "HNL" => "Lempira hondurien (HNL)",
            "HRK" => "Kuna croate (HRK)",
            "HTG" => "Gourde haïtienne (HTG)",
            "HUF" => "Forint hongrois (HUF)",
            "IDR" => "Roupie indonésienne (IDR)",
            "ILS" => "Shekel israélien (ILS)",
            "IMP" => "Livre de l'Île de Man (IMP)",
            "INR" => "Roupie indienne (INR)",
            "IQD" => "Dinar irakien (IQD)",
            "IRR" => "Rial iranien (IRR)",
            "ISK" => "Couronne islandaise (ISK)",
            "JEP" => "Livre de Jersey (JEP)",
            "JMD" => "Dollar jamaïcain (JMD)",
            "JOD" => "Dinar jordanien (JOD)",
            "JPY" => "Yen japonais (JPY)",
            "KES" => "Shilling kenyan (KES)",
            "KGS" => "Som kirghize (KGS)",
            "KHR" => "Riel cambodgien (KHR)",
            "KID" => "Dollar des Kiribati (KID)",
            "KMF" => "Franc comorien (KMF)",
            "KRW" => "Won sud-coréen (KRW)",
            "KWD" => "Dinar koweïtien (KWD)",
            "KYD" => "Dollar des Îles Caïmans (KYD)",
            "KZT" => "Tenge kazakh (KZT)",
            "LAK" => "Kip laotien (LAK)",
            "LBP" => "Livre libanaise (LBP)",
            "LKR" => "Roupie sri-lankaise (LKR)",
            "LRD" => "Dollar libérien (LRD)",
            "LSL" => "Loti lesothan (LSL)",
            "LYD" => "Dinar libyen (LYD)",
            "MAD" => "Dirham marocain (MAD)",
            "MDL" => "Leu moldave (MDL)",
            "MGA" => "Ariary malgache (MGA)",
            "MKD" => "Denar macédonien (MKD)",
            "MMK" => "Kyat birman (MMK)",
            "MNT" => "Tugrik mongol (MNT)",
            "MOP" => "Pataca macanaise (MOP)",
            "MRU" => "Ouguiya mauritanien (MRU)",
            "MUR" => "Roupie mauricienne (MUR)",
            "MVR" => "Rufiyaa maldivienne (MVR)",
            "MWK" => "Kwacha malawite (MWK)",
            "MXN" => "Peso mexicain (MXN)",
            "MYR" => "Ringgit malaisien (MYR)",
            "MZN" => "Metical mozambicain (MZN)",
            "NAD" => "Dollar namibien (NAD)",
            "NGN" => "Naira nigérian (NGN)",
            "NIO" => "Córdoba nicaraguayen (NIO)",
            "NOK" => "Couronne norvégienne (NOK)",
            "NPR" => "Roupie népalaise (NPR)",
            "NZD" => "Dollar néo-zélandais (NZD)",
            "OMR" => "Rial omanais (OMR)",
            "PAB" => "Balboa panaméen (PAB)",
            "PEN" => "Sol péruvien (PEN)",
            "PGK" => "Kina papou-néo-guinéenne (PGK)",
            "PHP" => "Peso philippin (PHP)",
            "PKR" => "Roupie pakistanaise (PKR)",
            "PLN" => "Zloty polonais (PLN)",
            "PYG" => "Guaraní paraguayen (PYG)",
            "QAR" => "Rial qatari (QAR)",
            "RON" => "Leu roumain (RON)",
            "RSD" => "Dinar serbe (RSD)",
            "RUB" => "Rouble russe (RUB)",
            "RWF" => "Franc rwandais (RWF)",
            "SAR" => "Riyal saoudien (SAR)",
            "SBD" => "Dollar des Îles Salomon (SBD)",
            "SCR" => "Roupie seychelloise (SCR)",
            "SDG" => "Livre soudanaise (SDG)",
            "SEK" => "Couronne suédoise (SEK)",
            "SGD" => "Dollar de Singapour (SGD)",
            "SHP" => "Livre de Sainte-Hélène (SHP)",
            "SLE" => "Leone sierra-léonais (SLE)",
            "SLL" => "Leone sierra-léonais (SLL)",
            "SOS" => "Shilling somalien (SOS)",
            "SRD" => "Dollar surinamais (SRD)",
            "SSP" => "Livre sud-soudanaise (SSP)",
            "STN" => "Dobra santoméen (STN)",
            "SYP" => "Livre syrienne (SYP)",
            "SZL" => "Lilangeni swazi (SZL)",
            "THB" => "Baht thaïlandais (THB)",
            "TJS" => "Somoni tadjik (TJS)",
            "TMT" => "Manat turkmène (TMT)",
            "TND" => "Dinar tunisien (TND)",
            "TOP" => "Pa'anga tongien (TOP)",
            "TRY" => "Livre turque (TRY)",
            "TTD" => "Dollar trinidadien (TTD)",
            "TVD" => "Dollar tuvaluan (TVD)",
            "TWD" => "Dollar taïwanais (TWD)",
            "TZS" => "Shilling tanzanien (TZS)",
            "UAH" => "Hryvnia ukrainienne (UAH)",
            "UGX" => "Shilling ougandais (UGX)",
            "USD" => "Dollar américain (USD)",
            "UYU" => "Peso uruguayen (UYU)",
            "UZS" => "Soum ouzbek (UZS)",
            "VES" => "Bolivar vénézuélien (VES)",
            "VND" => "Dong vietnamien (VND)",
            "VUV" => "Vatu vanuatais (VUV)",
            "WST" => "Tala samoan (WST)",
            "XAF" => "Franc CFA (XAF)",
            "XCD" => "Dollar des Caraïbes orientales (XCD)",
            "XDR" => "Droits de tirage spéciaux (XDR)",
            "XOF" => "Franc CFA (XOF)",
            "XPF" => "Franc CFP (XPF)",
            "YER" => "Rial yéménite (YER)",
            "ZAR" => "Rand sud-africain (ZAR)",
            "ZMW" => "Kwacha zambien (ZMW)",
            "ZWL" => "Dollar zimbabwéen (ZWL)"
        ];


        // On récupère via l'API les taux de change des différentes devises.
        $url = "https://v6.exchangerate-api.com/v6/46ecdf6f84693f8d4660affe/latest/EUR";
        $response = file_get_contents($url);
        if ($response === false) {
            echo "Erreur lors de la récupération des données. Vérifiez votre connexion internet.";
            exit;
        }
        $data = json_decode($response, true);
        $currencies = array_keys($data["conversion_rates"]);
        ?>

        <label for="base_currency">Devise de base :</label>
        <select name="base_currency" id="base_currency">
            <?php foreach ($currencies_with_names as $currency_code => $currency_name) : ?>
                <option value="<?php echo $currency_code; ?>"><?php echo $currency_name; ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <label for="target_currency">Convertir en :</label>
        <select name="target_currency" id="target_currency">
            <?php foreach ($currencies_with_names as $currency_code => $currency_name) : ?>
                <option value="<?php echo $currency_code; ?>"><?php echo $currency_name; ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <label for="amount">Montant :</label>
        <input type="number" name="amount" id="amount" placeholder="Tapez votre montant ici" required>
        <br>
        <input class="button" type="submit" name="convert" value="Convertir">
    </form>

    <?php
    // Si le bouton "convert" a été cliqué,
    // alors on attribue aux variables amount, base_currency et target_currency les valeurs précisées dans le formulaire
    if (isset($_GET["convert"])) {
        $amount = $_GET["amount"];
        $base_currency = $_GET["base_currency"];
        $target_currency = $_GET["target_currency"];

        if (array_key_exists($base_currency, $data["conversion_rates"]) && array_key_exists($target_currency, $data["conversion_rates"])) {
            // Conversion de base_currency à EUR
            $amount_in_eur = $amount / $data["conversion_rates"][$base_currency];
            // Conversion de EUR à target_currency
            $converted_amount = $amount_in_eur * $data["conversion_rates"][$target_currency];
            $converted_amount = round($converted_amount, 2);
            echo "<p>$amount $currencies_with_names[$base_currency] est égal à $converted_amount $currencies_with_names[$target_currency].</p>";
        }
    }
    ?>
</body>

</html>