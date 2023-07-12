<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Admin home page</title>
</head>
<body>
<h4>Welcome the Admin Dashboared home page</h4>
<div class="action">
    <a href="/AddSongs">Add song</a>
    <a href="/addArtists">Add Artist</a>
    <a href="/allUsers">All Users</a>
</div>
<div>
<ol>
    <h3>Song list are here</h3>
<?php foreach ($songList as $songs): ?>
        <li>Song Name: <?php echo $songs->name; ?></li>
        <li>Song :  <audio controls><source src="<?php echo $songs->song_path; ?>" type="audio/ogg"></audio></li>
        <li>Song Image<img src="<?php echo $songs->song_image; ?>"  height="50px" width="50px" alt=""></li>
<?php endforeach; ?>
</ol>
</div>
<div>
    <h3>Artist names are here</h3>
    <?php  foreach ($artists as $artist): ?>
        <p>User Name :<?php echo $artist->name; ?></p>
    <?php endforeach; ?>
</div>
<div>

    <?php  foreach ($users as $user): ?>
        <p>User Name :<?php echo $user->user_name; ?></p>
    <?php endforeach; ?>
</div>
<style>
    /* CSS code for the Admin Home Page */

/* Reset some default styles */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Styles for the h1 element */
h1 {
  text-align: center;
  margin: 20px 0;
}

/* Styles for the action class */
.action {
  display: flex;
  justify-content: center;
  margin-bottom: 20px;
}

/* Styles for the action links */
.action a {
  display: inline-block;
  padding: 10px 20px;
  margin: 0 10px;
  background-color: #4caf50;
  color: #fff;
  text-decoration: none;
  border-radius: 3px;
}

/* Styles for the action links on hover */
.action a:hover {
  background-color: #45a049;
}

/* Styles for the ol element */
ol {
  margin-left: 20px;
}

/* Styles for the h3 element */
h3 {
  margin-bottom: 10px;
}

/* Styles for the song list items */
ol li {
  margin-bottom: 10px;
}

/* Styles for the audio element */
audio {
  display: block;
  margin-bottom: 10px;
}

/* Styles for the song image */
img {
  margin-top: 5px;
}

/* Styles for the div elements containing artist and user names */
div {
  margin-bottom: 20px;
}

/* Styles for the p elements within the div elements */
div p {
  margin-bottom: 5px;
}

</style>
</body>
</html>