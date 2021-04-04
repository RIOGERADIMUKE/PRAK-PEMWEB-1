<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="fitus.css">
    <title>Halaman Login</title>
</head>
<body>
<form action="Teks.php" method="post" name="Login_Form">
    <table align="center" border="0" >
        <div>
        <td colspan="2" align="center">
            <h1 align="center">LOGIN</h1>
        </div>
        </tr>
        <tr>
        <td style="color: black" align="center">Username : </td>
        <td><input name="username" type="text" placeholder="Username kurang dari 7"></td>
        </tr>
        <tr>
        <td style="color: black;" align="center">Password : </td>
        <td><input name="password" type="text" placeholder="Password lebih dari 10" ></td>
        </tr>
        <tr>
        <td>   </td>
        <td><input name="Submit" type="submit" value="Login"></td>
        </tr>
    </table>
    </form>
</body>
</html>