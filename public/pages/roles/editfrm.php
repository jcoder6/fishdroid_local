<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit form</title>
</head>

<body>
    <h1>Edit role</h1>
    <form action="/roles/update/<?= $role->getId() ?>" method="post">
        <input type="text" name="role" id="role" value="<?= $role->getRole_name() ?>">
        <input type="text" name="desc" id="desc" value="<?= $role->getDescription() ?>">
        <button type="submit">Save</button>
    </form>
</body>

</html>