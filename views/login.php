
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log in</title>
</head>
<body>
  <div class="container">
    <div class="form-wrapper">
      <div class="form-header">
        <h2>Sign in to your account</h2>
      </div>
      <form class="form" action="/login" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="email">Email address</label>
          <input id="email" name="email" type="email" autocomplete="email" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input id="password" name="password" type="password" autocomplete="current-password" required>
        </div>
        <div class="form-group">
          <button type="submit">Sign in</button>
        </div>
      </form>
    </div>
  </div>
  <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f3f4f6;
}

.container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    padding: 24px;
}

.form-wrapper {
    width: 100%;
    max-width: 320px;
}

.form-header {
    margin-top: 40px;
    text-align: center;
}

.form-header h2 {
    font-size: 24px;
    font-weight: bold;
    line-height: 1.4;
    color: #333;
}

.form {
    margin-top: 40px;
    display: flex;
    flex-direction: column;
}

.form-group {
    margin-bottom: 16px;
}

.form-group label {
    font-size: 14px;
    font-weight: bold;
    line-height: 1.5;
    color: #333;
}

.form-group input[type="email"],
.form-group input[type="password"] {
    width: 100%;
    padding: 8px;
    border: none;
    border-radius: 4px;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
    outline: none;
    transition: box-shadow 0.3s ease;
}

.form-group input[type="email"]:focus,
.form-group input[type="password"]:focus {
    box-shadow: 0 0 0 2px rgba(63, 158, 255, 0.5);
}

.form-group button[type="submit"] {
    width: 100%;
    padding: 8px;
    border: none;
    border-radius: 4px;
    background-color: #3f8eff;
    color: #fff;
    font-size: 14px;
    font-weight: bold;
    line-height: 1.5;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.form-group button[type="submit"]:hover {
    background-color: #3074ff;
}
  </style>
</body>
</html>
