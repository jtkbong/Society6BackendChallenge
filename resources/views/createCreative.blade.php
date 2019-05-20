<html>

<head>
    <title>Create Creative</title>
</head>

<body>
<form action = "/creative/create" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">

    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" /></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><input type="text" name="description" /></td>
        </tr>
        <tr>
            <td>Link</td>
            <td><input type="text" name="link" /></td>
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