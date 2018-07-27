<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Php Composing</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.3.3/dist/semantic.min.css">
</head>
<body style="margin-left: 17%; margin-top: 2%;">

    <h1>Computer science figures</h1>

<?php
    // $file = fopen("cs_figures.csv", "r");
    // $data = fgetcsv($file);
    // foreach ($data as $key=>$value) {
    //     echo  $value;
    // }
    
    // // print_r($data);
    // var_dump($data);
    // // fclose($file);
?>

<?php
$fichier = 'cs_figures.csv';
$csv = new SplFileObject($fichier); // On instancie l'objet SplFileObject
$csv->setFlags(SplFileObject::READ_CSV); // On indique que le fichier est de type CSV
$csv->setCsvControl(','); // On indique le caractère délimiteur, ici c'est la virgule

// foreach($csv as $ligne){
//  echo $ligne[5]."<br>"  ;
// }

?>


<div class="ui link cards">
<?php
foreach($csv as $ligne){
    if($ligne[5] != picture) {
  echo "<div class='ui five card'>";
  echo "<div class='image'>";
  echo "<img src='".$ligne[5]."'>";
  echo "</div>";
  echo "<div class='content'>";
  echo "<div class='header'>".$ligne[0]."</div>";
  echo "<div class='meta'>";
  echo "<a>".$ligne[2]."</a>";
  echo "</div>";
  echo "<div class='description'>".$ligne[3]."</div>";
  echo "</div>";
  echo "<div class='extra content'>";
  echo "<span class='right floated'>Born in"." ".$ligne[1]."</span>";
  echo "</div>";
  echo "</div>";
    }
}
?>

</div>




  




<script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.3.3/dist/semantic.min.js"></script>
     
</body>
</html>