<?php
$db = pg_connect("host=  10.25.240.100 port=5432 dbname=AxDB$ user=postgres password=LinuxMint88");
$query = "INSERT INTO TableauExtension VALUES ('$_POST[LANID]','$_POST[Comment]','$_POST[hiddenfield]')";
$result = pg_query($query); 


echo "$_POST['TEST']"
echo "   ";
echo "   ";
echo "Thank you for using Data Slayer! Refresh the dashboard to see your comments embedded in the dashboard!";
echo "   ";
echo "   ";



ini_set('display_errors', 1);
?>

