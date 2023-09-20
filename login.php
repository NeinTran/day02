<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <style>
        /* CSS để cải thiện giao diện của trang đăng nhập */
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            height: 100vh;
            margin: 0;
            
        }

        h1 {
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: left;
            max-width: 50%;
            width: 90%;
        }

        label {
            font-weight: bold;
            background-color: #007bff;
            padding: 10px;
            margin: 8px 0;
            color: white;

        }

        input[type="text"],
        input[type="password"] {
            width: 50%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #red;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            border-style;
            border-color: red;
            cursor: pointer;
            font-weight: bold;
            margin-top: 10px;
            text-align: center;
            align-self: center;
            
        }
    </style>
</head>
<body>
    <div>
        <h1>Đăng nhập</h1>
        <form action="process_login.php" method="POST">
        <p>Ngày/giờ hiện tại theo múi giờ Việt Nam: <?php echo date("d/m/Y H:i:s", time() + 7 +18000); ?></p>

            <label for="username">Tên người dùng:</label>
            <input type="text" id="username" name="username" required><br><br>

            <label for="password">Mật khẩu:</label>
            <input type="password" id="password" name="password" required><br><br>

            <input type="submit" value="Đăng nhập">
        </form>

        
    </div>
</body>
</html>