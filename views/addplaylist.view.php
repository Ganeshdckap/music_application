<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Playlist</title>
</head>
<body>

    <form action="/" method="post" enctype="multipart/form-data">
        <button type="submit">Back to home</button>
    </form>

    <form action="addplaylist" method="post">
        <div class="space-y-12">

            <?php if (isset($_SESSION['Artist'])) :?>
            <div>
                <h2>Create Playlist</h2>
                <div>
                </div>
                <label for="playlist_for">playlist for Artist</label>

                <div>
                    <select name="playlist_for_Artist">
                        <option value="">select</option>
                        <?php foreach ($artist as $artistname): ?>
                        <option value="<?php echo $artistname->id?>">
                            <?php echo $artistname->artist_name?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <?php elseif(isset($_SESSION['Album'])):?>

                <h2>Create Playlist</h2>

                <label for="playlist_for">playlist for Album</label>



                <?php foreach ($album as $albumname): ?>
                <input type="checkbox" name="album[]" value="<?php echo $albumname->id?>">
                <?php echo $albumname->album_name?>
                <?php endforeach; ?>

                <?php else : ?>

                <h2>Create Playlist</h2>


                <label for="playlist_for">playlist for</label>


                <select name="playlist_for">
                    <option value="">select</option>
                    <option value="Album">Album</option>
                    <option value="Artist">artist</option>
                </select>
                <?php endif; ?>

                <button type="submit">add Music</button>
    </form>
    <style>
        /* style.css */

body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
  padding: 20px;
}

form {
  margin-bottom: 20px;
}

button[type="submit"] {
  padding: 10px 20px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #45a049;
}

h2 {
  font-size: 24px;
  margin-bottom: 10px;
}

label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
}

select, input[type="checkbox"] {
  margin-top: 5px;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.space-y-12 > *:not(:last-child) {
  margin-bottom: 12px;
}

    </style>
</body>

</html>