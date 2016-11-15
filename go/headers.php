<?php

$rand1 = rand(0,9);
$rand2 = rand(0,9);
$rand3 = rand(0,9);
$rand4 = rand(0,9);
$rand5 = rand(0,9);
$rand6 = rand(0,9);
$hex = $rand1 . $rand2 . $rand3 . $rand4 . $rand5 . $rand6;

?>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="10; /go">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css?hex=<?php print $hex; ?>">

<?php

print '
<style type="text/css">

.well {
  background: #' . $hex . ';
}

</style>';

?>

