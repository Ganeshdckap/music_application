<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Addmusic</title>
</head>

<body>
    <div class="container">
        <form action="/addmusic" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="musicName">Music Name</label>
                <input type="text" name="musicName" id="musicName" placeholder="Idhuvum Kadanthu Pogum">
            </div>
            <div class="form-group">
                <label for="artistName">Artist Name</label>
                <input type="text" name="artistName" id="artistName" placeholder="Anirudh">
            </div>
            <div class="form-group">
                <label for="song-photo">Song Photo</label>
                <div>
                    <input id="file-upload" name="file-upload" type="file" class="sr-only">
                </div>
                <p class="pl-1">or drag and drop</p>
                <p class="text">PNG, JPG, GIF up to 10MB</p>
            </div>
            <button type="submit" class="btn">Add Music</button>
        </form>
    </div>
</body>
<style>
    /* style.css */

.container {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
  background-color: #f2f2f2;
  border-radius: 5px;
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
}

input[type="text"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

input[type="file"] {
  display: block;
  margin-top: 5px;
}

p {
  margin-top: 5px;
  font-size: 14px;
  color: #888;
}

.btn {
  padding: 10px 20px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.btn:hover {
  background-color: #45a049;
}

</style>

</html>




