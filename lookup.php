<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Alma barcopde lookup</title>
    <style>
        body {background: #1c2e26;}
    </style>
  </head>
  <body>
<div style="width: 70%; min-width: 400px; margin: 2rem auto; border: 1px solid #000; border-radius: 15px; background: #eee; padding: 1rem;"> 
<h1 style="font-family: monospace;">Alma Barcode Lookup</h1>
<?php




if(isset($_POST['submit'])) 
{ 
$barcode = $_POST['barcode'];
$url = "https://library.gmu.edu";

$uri =  "https://api-na.hosted.exlibrisgroup.com/almaws/v1/items?item_barcode=" . $barcode . "&apikey=l7xxac67479fcd9d4f9687fc3092929bee5e";

echo $uri;
echo "<a style='padding: 0 1rem' href='$uri' target='_blank'><img src='external-link-16.png' alt='view alma output' title='view alma output (opens in new window)'></a>";

}



?>

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" style="margin: 2rem 0">
    <input type="text" name="barcode" placeholder="Enter barcode">
    <input type="submit" name="submit" value="Lookup">


</form>
</div>

</body>
</html>
