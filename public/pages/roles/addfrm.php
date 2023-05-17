<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addform</title>
</head>

<body>
    <h1>Add new role</h1>
    <form action="/roles/save" method="post">
        <input type="text" name="role" id="role">
        <input type="text" name="desc" id="desc">
        <button type="submit">Save</button>
    </form>
</body>

</html>