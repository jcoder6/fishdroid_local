<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roles</title>
</head>

<body>
    <h1>Roles</h1>
    <a href="/roles/create">New Role</a>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Role</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($roles as $role) :
            ?>
                <tr>
                    <td><?= $role->getId() ?></td>
                    <td><?= $role->getRole_name() ?></td>
                    <td><?= $role->getDescription() ?></td>
                    <td>
                        <a href="/roles/edit/<?= $role->getId() ?>">Edit</a>
                        <a href="/roles/confirm/<?= $role->getId() ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>