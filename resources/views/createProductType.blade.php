<html>

<head>
    <title>Create Product Type</title>
</head>

<body>
<form action = "/productType/create" method = "post">
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