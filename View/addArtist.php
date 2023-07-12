<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Artist</title>
</head>
<body>
<form action="/addArtistLogic" method="post">
    <div>
        <label>Enter a artist name</label>
        <input type="text" name="artistName" placeholder="Enter a artist name">
    </div>
    <button type="submit">Add Artist</button>
<!--    <a href="/login_logic">Back to Admin page</a>-->
</form>

<style>
    /* CSS code for the Add Artist Page */

/* Reset some default styles */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Styles for the form container */
form {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100vh;
}

/* Styles for the form inputs and labels */
div {
  margin-bottom: 20px;
}

label {
  font-weight: bold;
}

input[type="text"] {
  padding: 10px;
  width: 300px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

/* Styles for the submit button */
button[type="submit"] {
  padding: 10px 20px;
  background-color: #4caf50;
  color: #fff;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}

/* Styles for the submit button on hover */
button[type="submit"]:hover {
  background-color: #45a049;
}

/* Styles for the link */
a {
  display: block;
  margin-top: 10px;
  text-align: center;
  color: #007bff;
  text-decoration: none;
}

</style>
</body>
</html>