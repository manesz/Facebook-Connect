<?php
require("src/facebook.php");
require("connect_facebook.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>connect with facebook</title>
</head>

<body>

<?php if ($me) { ?>
<img src="https://graph.facebook.com/<?php echo $uid; ?>/picture">
    <?php echo $me['name']; ?>
<!--<pre>-->
<?php //print_r($me); ?>
<!--</pre>-->
<pre>
    <?php echo "ID : ".$me['id']."<br/>";?>
    <?php echo "Name : ".$me['name']."<br/>";?>
    <?php echo "Username : ".$me['username']."<br/>";?>
    <?php echo "Frist Name : ".$me['first_name']."<br/>";?>
    <?php echo "Last Name : ".$me['last_name']."<br/>";?>
    <?php echo "Gender : ".$me['gender']."<br/>";?>
    <?php echo "Email : ".$me['email']."<br/>";?>
    <?php echo "Update_time : ".$me['updated_time']."<br/>";?>
    <?php echo "Link : ".$me['link']."<br/>";?>

</pre>
<hr/>
<a href="<?php echo $logoutUrl; ?>">
    LOGOUT
</a>
    <?php } else { ?>
<a href="<?php echo $loginUrl; ?>">
    LOGIN
</a>
    <?php } ?>
<br/>


</body>
</html>