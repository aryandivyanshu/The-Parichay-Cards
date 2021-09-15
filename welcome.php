<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
</style>

  <title>The Parichay Cards</title>
  <link rel="stylesheet" href="./style2.css">
  
</head>
<body>
  
<div class=content>
  <div class="wrapper-1">
    <div class="wrapper-2">
      <h1><?php if(isset($_POST['submit'])) echo $_POST["fname"]; ?> </h1>
      <p>Thanks for giving yourself the appreciation you deserve.  </p>
      <p> Your future self is gonna be PROUD OF YOU!  </p>
      <button class="go-home">
      <a  style="color:#fff; text-decoration:none"  href="https://www.instagram.com/theparichaycards/"> go home </a>
      </button>
    </div>
    <div class="footer-like">
      <p>Website created by
       <a href="https://github.com/aryandivyanshu">Aryan Divyanshu</a>
      </p>
    </div>
</div>
</div>



<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Source+Sans+Pro" rel="stylesheet">

<?php      
if(isset($_POST['fname']))
{
$data=$_POST['fname'];
$fp = fopen('data.txt', 'a');
fwrite($fp,"Name :");
fwrite($fp,$data."\n");
fclose($fp);
}
?>

<?php     
if(isset($_POST['instaid']))
{
$data=$_POST['instaid'];
$fp = fopen('data.txt', 'a');
fwrite($fp,"IG : :");
fwrite($fp, $data."\n");
fclose($fp);
}
?>

<?php     
if(isset($_POST['phone']))
{
$data=$_POST['phone'];
$fp = fopen('data.txt', 'a');
fwrite($fp,"Phone :");
fwrite($fp, $data."\n");
fclose($fp);
}
?>

<?php     
if(isset($_POST['add']))
{
$data=$_POST['add'];
$fp = fopen('data.txt', 'a');
fwrite($fp,"Address :");
fwrite($fp, $data."\n");
fwrite($fp,"\n");
fclose($fp);
}
?>

</body>
</html>
