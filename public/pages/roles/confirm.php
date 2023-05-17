<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Confirm deletion</h1>
    <p>Are you sure you want to delete this record?</p>
    <form action="/roles/delete/<?= $id ?>">
        <a href="/roles">Back</a>
        <button type="submit">Yes</button>
    </form>
</body>

</html>