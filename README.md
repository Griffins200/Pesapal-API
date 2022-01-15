PesaPal API
PHP SDK for implementing the PesaPal API.

Usage
Installation
include the donation.php file in your application
require_once('donation.php');

Configuration
At the top of your code, configure the Pesapal object
Donation::config( $env, $consumer_key, $consumer_secret);

Parameter Name	Parameter Description	Parameter Type	Possible/Default Value
$consumer_key	Pesapal Consumer Key	string	64ehjK+YvGHrdwhLsWKmfcoFpKPSn4aV
$consumer_secret	Pesapal Consumer Secret	string	U6vJXEEs7MQ2snos/PyGPDzVTGA=
Payment Form
Create a form with the following fields:

Field Name	Field Type	Possible/Default Value
type	text	MERCHANT
period	text	Order Monthly
reference	number/text	001
first_name	text	John
last_name	text	Doe
email	email	john@yahoo.com
phone	tel	254700000000
amount	number/text	10000
Process Payment
Call the iframe() method where you would like to render the Donation iframe
Donation::iframe();

Process IPN Response
Update Database
Create a function to update your database with payment details - this function must return a boolean (true on success, false on failure). The function takes the response data an an argument.

Process IPN
Call the mehod on your callback url, passing the name of the callback function above as an argument
Donation::process_ipn( $callback );