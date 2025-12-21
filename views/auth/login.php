<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | Health Care</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background:#f4f6f9;
            font-family: Arial, sans-serif;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }
        .login-box {
            background:#fff;
            padding:30px;
            width:350px;
            border-radius:12px;
            box-shadow:0 6px 16px rgba(0,0,0,.1);
        }
        h2 {
            text-align:center;
            margin-bottom:20px;
        }
        input {
            width:100%;
            padding:10px;
            margin-bottom:15px;
            border-radius:6px;
            border:1px solid #ccc;
        }
        button {
            width:100%;
            padding:10px;
            background:#2563eb;
            color:#fff;
            border:none;
            border-radius:6px;
            cursor:pointer;
        }
        button:hover {
            background:#1d4ed8;
        }
        .error {
            color:red;
            text-align:center;
            margin-bottom:10px;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h2>Login</h2>

    <?php if (!empty($error)): ?>
        <div class="error"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <form method="POST" action="login.php">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>
