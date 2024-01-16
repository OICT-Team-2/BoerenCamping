<?php
function isPostcodeGeldig($postcode) {
    // Definieer het normale expressiepatroon voor postcode
    $pattern = '/^\d{4} [a-zA-Z]{2}$/';

    // Gebruik preg_match om te checken of de postcode overeenkomt met het patroon
    return preg_match($pattern, $postcode) === 1;
}

// Voorbeeld postcodes
$geldigPostcode1 = "1234 AB";
$geldigPostcode2 = "5678 CD";
$ongeldigPostcode = "ABCD 1234";

// Check of de postcodes geldig zijn
echo "Is $geldigPostcode1 geldig? " . (isPostcodeGeldig($geldigPostcode1) ? 'Ja' : 'Nee') . PHP_EOL;
echo "Is $geldigPostcode2 geldig? " . (isPostcodeGeldig($geldigPostcode2) ? 'Ja' : 'Nee') . PHP_EOL;
echo "Is $ongeldigPostcode geldig? " . (isPostcodeGeldig($ongeldigPostcode) ? 'Ja' : 'Nee') . PHP_EOL;
?>

