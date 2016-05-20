<?php
@session_start();
if(isset($_SESSION["validadmin"])):?>
<script>
    alert('<?php echo $_SESSION["validadmin"] ?>');
</script>
<?php
unset($_SESSION["validadmin"]);
endif;  ?>
<html>
<head>
    <title>AdminPanel</title>
    <script>
        function form_validate()
        {
            var a=document.forms["loginform"]["username"].value;
            var b=document.forms["loginform"]["password"].value;
            if(a==null || a=="")
            {
                alert("Enter your username");
                loginform.username.focus();
                return (false);
            }
            if(b==null || b=="")
            {
                alert("Enter your password");
                loginform.password.focus();
                return (false);
            }
        }
    </script>
</head>
<body>
            <a href="register.php" class="join"></a>
            <h1>Log in </h1>
                <form name="loginform" action="adminlogin.php" onsubmit="return form_validate()" method="post">
                    <table cellspacing="0" cellpadding="0">
                        <tbody>
                        <tr>
                            <td><label>username</label></td>
                            <td><input type="text" name="username" class="txtfield" /></td>
                        </tr>
                        <tr>
                            <td><label>Password</label></td>
                            <td><input type="password" name="password" class="txtfield" /></td>
                        </tr>
                        <tr><td colspan="2"><input type="submit" value="Log in" class="button" /></td></tr>
                        </tbody>
                    </table>
                </form>
</body>
</html>
