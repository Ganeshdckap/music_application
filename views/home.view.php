<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music</title>
 
</head>
<body>
    <form action="/addmusic" method="post" enctype="multipart/form-data">
        <button type="submit">Add Music</button>
    </form>

    <form action="/addartist" method="post" enctype="multipart/form-data">
        <button type="submit">Add Artist</button>
    </form>

    <?php if (isset($_SESSION['name'])) : ?>
        <p>Hello <?php echo $_SESSION ['name'] ?></p>
        <form action="/logout" method="post" enctype="multipart/form-data">
            <button type="submit" class="logout-button">Log out</button>
        </form>
    <?php else : ?>
        <form action="/login" method="post" enctype="multipart/form-data">
            <button type="submit">Log in</button>
        </form>
    <?php endif; ?>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }

        form {
            margin-bottom: 10px;
        }

        button {
            background-color: #0056b3;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 5px 2px;
            cursor: pointer;
            border-radius: 4px;
        }
        p {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .logout-button {
            background-color: #f44336;
        }
    </style>
</body>
</html>
