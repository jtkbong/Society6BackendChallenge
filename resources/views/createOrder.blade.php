<html>

<head>
    <title>Create Order</title>
</head>

<body>
<form action = "/order/create" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">

    <table>
        <tr>
            <td>Vendor</td>
            <td>
                <select name="vendorId">
                    <option value="1">Marco Fine Arts</option>
                    <option value="2">DreamJunction</option>
                </select>
            </td>
        </tr>
    </table>
    <p>Enter Order Text Below</p>
    <textarea name="orderText" rows="40" cols="80"></textarea>
    <input type = "submit" value = "Create" />
</form>
</body>
</html>