
<?php
// Mercado Pago SDK
require_once 'vendor/autoload.php';

use MercadoPago\MercadoPagoConfig;
use MercadoPago\Client\Preference\PreferenceClient;
// Add Your credentials

MercadoPagoConfig::setAccessToken("Your token");

 //Create payament and custom
$client = new PreferenceClient();
$preference = $client->create([
    "items" => array(
        array(
            "title" => "your product name",
            "quantity" => 1,
            "currency_id" => "BRL",
            "unit_price" => 0.09

        )
    ),
    "payment_methods" => array(
        "excluded_payment_methods" => array(
            array(

                "id" => "visa",
                "id" => "master",
                "id" => "hipercard",
                "id" => "amex",
                "id" => "diners",
                "id" => "elo",
                "id" => "melicard"
            )
        ),
        "excluded_payment_types" => array(
            array(
                "id" => "credit_card",
               
            ),
            array(
                "id" => "debit_card"
            )
            )
    )

]);

echo "<pre>", print_r($preference), "</pre>";


?>

 //Creat the link payament
<a href=<?php echo $preference->init_point ."target=_blank >Link para pagamento Page</a>";
