<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

                       <?php
//var_dump($aus);
//exit(0);
                    if (isset($imgs))
                    {
                      foreach ($imgs as $img)

                      

echo "<img src='$img->file' />";

}

//var_dump($aus);
//exit(0);
                    if (isset($docs))
                    {
                      foreach ($docs as $doc)

                      

echo "<img src='$doc->file' />";
}
?>
</body>
</html>