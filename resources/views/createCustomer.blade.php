<html>

<head>
    <title>Create Customer</title>
</head>

<body>
<form action = "/customer/create" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">

    <table>
        <tr>
            <td>First Name</td>
            <td><input type="text" name="firstName" /></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name="lastName" /></td>
        </tr>
        <tr>
            <td>Address 1</td>
            <td><input type="text" name="address1" /></td>
        </tr>
        <tr>
            <td>Address 2</td>
            <td><input type="text" name="address2" /></td>
        </tr>
        <tr>
            <td>City</td>
            <td><input type="text" name="city" /></td>
        </tr>
        <tr>
            <td>State</td>
            <td><input type="text" name="state" /></td>
        </tr>
        <tr>
            <td>Zip</td>
            <td><input type="text" name="zip" /></td>
        </tr>
        <tr>
            <td>Country</td>
            <td><input type="text" name="country" /></td>
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