<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Addartist</title>
</head>
<body>
  <div class="container">
    <form action="/addartist" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="artistName">Artist Name</label>
        <input type="text" name="artistName" id="artistName">
      </div>
      <div class="form-group">
        <label for="song-photo">Artist Photo</label>
        <div>
          <input type="file" id="file-upload" name="artist[]" multiple="multiple">
        </div>
        <p>Only JPG files are allowed.</p>
      </div>
      <button type="submit" class="btn">Add Music</button>
    </form>
  </div>
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
</body>
</html>