$Entreprise=htmlspecialchars($_POST["entreprise"]);
$Technologie=htmlspecialchars($_POST["technologie"]);
$Adresse=htmlspecialchars($_POST["adresse"]);
$Cite=htmlspecialchars($_POST["cite"]);
$Code_postale=htmlspecialchars($_POST["$Code_postal"]);
$Phone=htmlspecialchars($_POST["$phone"]);
$Textarea=htmlspecialchars($_POST["$textarea"]);
$Adresse=htmlspecialchars($_POST["$adresse"]);

echo "Bonjour".$Entreprise.'!';

$monfichier=fopen('donneesformulaire.txt,'a+');

fputs($monfichier,"==========================\n");
fputs($monfichier,$Entreprise."\n");
fputs($monfichier,$Technologie."\n");
fputs($monfichier,$Adresse."\n");
fputs($monfichier,$Cite."\n");
fputs($monfichier,$Code."\n");
fputs($monfichier,$Phone."\n");
fputs($monfichier,$Textarea."\n");
fputs($monfichier,$Adresse."\n");

fclose($monfichier);



