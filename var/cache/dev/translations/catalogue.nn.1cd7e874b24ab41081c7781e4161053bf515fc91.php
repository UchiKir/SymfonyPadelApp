<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('nn', array (
  'validators' => 
  array (
    'This value should be false.' => 'Verdien skulle ha vore tom/nei.',
    'This value should be true.' => 'Verdien skulla ha vore satt/ja.',
    'This value should be of type {{ type }}.' => 'Verdien må vere av typen {{ type }}.',
    'This value should be blank.' => 'Verdien skal vere blank.',
    'The value you selected is not a valid choice.' => 'Verdien du valgte er ikkje gyldig.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Du må velge minst {{ limit }} valg.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Du kan maksimalt gjere {{ limit }} valg.',
    'One or more of the given values is invalid.' => 'Ein eller fleire av dei opplyste verdiane er ugyldige.',
    'This field was not expected.' => 'Dette feltet var ikke forventet.',
    'This field is missing.' => 'Dette feltet mangler.',
    'This value is not a valid date.' => 'Verdien er ikkje ein gyldig dato.',
    'This value is not a valid datetime.' => 'Verdien er ikkje ein gyldig dato og tid.',
    'This value is not a valid email address.' => 'Verdien er ikkje ei gyldig e-postadresse.',
    'The file could not be found.' => 'Fila kunne ikkje finnes.',
    'The file is not readable.' => 'Fila kan ikkje lesast.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fila er for stor ({{ size }} {{ suffix }}). Tillatt maksimal størrelse er {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Mime-typen av fila er ugyldig ({{ type }}). Tillatte mime-typar er {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Verdien må vere {{ limit }} eller mindre.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Verdien er for lang. Den må vere {{ limit }} bokstavar eller mindre.',
    'This value should be {{ limit }} or more.' => 'Verdien må vere {{ limit }} eller meir.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Verdien er for kort. Den må ha {{ limit }} teikn eller fleire.',
    'This value should not be blank.' => 'Verdien må ikkje vere blank.',
    'This value should not be null.' => 'Verdien må ikkje vere tom (null).',
    'This value should be null.' => 'Verdien må vere tom (null).',
    'This value is not valid.' => 'Verdien er ikkje gyldig.',
    'This value is not a valid time.' => 'Verdien er ikkje gyldig tidseining.',
    'This value is not a valid URL.' => 'Verdien er ikkje ein gyldig URL.',
    'The two values should be equal.' => 'Dei to verdiane må vere like.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fila er for stor. Den maksimale storleik er {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Fila er for stor.',
    'The file could not be uploaded.' => 'Fila kunne ikkje bli lasta opp.',
    'This value should be a valid number.' => 'Verdien må vere eit gyldig tal.',
    'This file is not a valid image.' => 'Fila er ikkje eit gyldig bilete.',
    'This is not a valid IP address.' => 'Dette er ikkje ei gyldig IP-adresse.',
    'This value is not a valid language.' => 'Verdien er ikkje eit gyldig språk.',
    'This value is not a valid locale.' => 'Verdien er ikkje ein gyldig lokalitet (språk/region).',
    'This value is not a valid country.' => 'Verdien er ikkje eit gyldig land.',
    'This value is already used.' => 'Verdien er allereie i bruk.',
    'The size of the image could not be detected.' => 'Storleiken på biletet kunne ikkje oppdagast.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Biletbreidda er for stor, ({{ width }} pikslar). Tillatt maksimumsbreidde er {{ max_width }} pikslar.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Biletbreidda er for liten, ({{ width }} pikslar). Forventa minimumsbreidde er {{ min_width }} pikslar.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Bilethøgda er for stor, ({{ height }} pikslar). Tillatt maksimumshøgde er {{ max_height }} pikslar.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Billethøgda er for låg, ({{ height }} pikslar). Forventa minimumshøgde er {{ min_height }} pikslar.',
    'This value should be the user\'s current password.' => 'Verdien må vere brukaren sitt noverande passord.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Verdien må vere nøyaktig {{ limit }} teikn.',
    'The file was only partially uploaded.' => 'Fila vart kun delvis opplasta.',
    'No file was uploaded.' => 'Inga fil vart lasta opp.',
    'No temporary folder was configured in php.ini.' => 'Førebels mappe (tmp) er ikkje konfigurert i php.ini.',
    'Cannot write temporary file to disk.' => 'Kan ikkje skrive førebels fil til disk.',
    'A PHP extension caused the upload to fail.' => 'Ei PHP-udviding forårsaka feil under opplasting.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Denne samlinga må innehalde {{ limit }} element eller meir.|Denne samlinga må innehalde {{ limit }} element eller meir.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Denne samlinga må innehalde {{ limit }} element eller færre.|Denne samlinga må innehalde {{ limit }} element eller færre.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Denne samlinga må innehalde nøyaktig {{ limit }} element.|Denne samlinga må innehalde nøyaktig {{ limit }} element.',
    'Invalid card number.' => 'Ugyldig kortnummer.',
    'Unsupported card type or invalid card number.' => 'Korttypen er ikkje støtta eller ugyldig kortnummer.',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This is not a valid Business Identifier Code (BIC).',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'Digest nonce has expired.' => 'Digest nonce has expired.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
  ),
  'messages' => 
  array (
    'Home' => 'Home',
    'Matches' => 'Matches',
    'Tournaments' => 'Tournaments',
    'Clubs' => 'Clubs',
    'Add Club' => 'Add Club',
    'View Clubs' => 'View Clubs',
    'Players' => 'Players',
    'Search...' => 'Search...',
    'Language' => 'Language',
    'Settings' => 'Settings',
    'Club Settings' => 'Club Settings',
    'Exit' => 'Exit',
    'Save' => 'Save',
    'Cancel' => 'Cancel',
    'Username' => 'Username',
    'Password' => 'Password',
    'Login' => 'Login',
    'Register' => 'Register',
    'Enter your username' => 'Enter your username',
    'Enter your e-mail' => 'Enter your e-mail',
    'Enter your password' => 'Enter your password',
    'Repeat your password' => 'Repeat your password',
    'Name' => 'Name',
    'Email' => 'Email',
    'Phone' => 'Phone',
    'Edit Information' => 'Edit Information',
    'Age' => 'Age',
    'Nationality' => 'Nationality',
    'Equipment' => 'Equipment',
    'Club\'s Data' => 'Club\'s Data',
    'Address' => 'Address',
    'Schedule' => 'Schedule',
    'Club\'s Installation' => 'Club\'s Installation',
    'Equipment Rental' => 'Equipment Rental',
    'Food Services' => 'Food Services',
    'Disabled Access' => 'Disabled Access',
    'Showers' => 'Showers',
    'Gym' => 'Gym',
    'Sauna' => 'Sauna',
    'Kindergarten' => 'Kindergarten',
    'Jacuzzi' => 'Jacuzzi',
    'Parking' => 'Parking',
    'Parking Motorcycles' => 'Parking Motorcycles',
    'Parking Bicycles' => 'Parking Bicycles',
    'Waterpool' => 'Waterpool',
    'Locker' => 'Locker',
    'Shop' => 'Shop',
    'Locker Room' => 'Locker Room',
    'WiFi' => 'WiFi',
    'Playground' => 'Playground',
    'School' => 'School',
    'American Tournament' => 'American Tournament',
    'Leagues' => 'Leagues',
    'Ilumination' => 'Ilumination',
    'Courts' => 'Courts',
    'Crystal Courts' => 'Crystal Courts',
    'Wall Courts' => 'Wall Courts',
    'Cover Courts' => 'Cover Courts',
    'Central Courts' => 'Central Courts',
    'Individual Courts' => 'Individual Courts',
    'Contact' => 'Contact',
    'Are you the owner?' => 'Are you the owner?',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;