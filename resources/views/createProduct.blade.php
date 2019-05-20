<html>

<head>
    <title>Create Product</title>
</head>

<body>
<form action = "/product/create" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">

    <table>
        <tr>
            <td>Vendor</td>
            <td><input type="text" name="vendorId" /></td>
        </tr>
        <tr>
            <td>Product Type</td>
            <td><input type="text" name="productTypeId" /></td>
        </tr>
        <tr>
            <td>Creative</td>
            <td><input type="text" name="creativeId" /></td>
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