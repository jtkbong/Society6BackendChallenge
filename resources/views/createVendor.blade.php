<html>

<head>
    <title>Create Vendor</title>
</head>

<body>
<form action = "/vendor/create" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">

    <table>
        <tr>
            <td>Name</td>
            <td><input type = "text" name = "name" /></td>
        </tr>
        <tr>
            <td colspan = "2" align = "center">
                <input type = "submit" value = "Create" />
            </td>
        </tr>
    </table>
</form>
</body>
</html>