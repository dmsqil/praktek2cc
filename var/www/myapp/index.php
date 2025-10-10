<?php
echo '
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deploy ke Oracle Cloud</title>
    <style>
        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background: linear-gradient(135deg, #1e90ff, #00bcd4);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 40px 60px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            text-align: center;
            backdrop-filter: blur(10px);
        }
        h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
            letter-spacing: 1px;
        }
        h2 {
            font-weight: 400;
            margin-bottom: 15px;
            color: #e0f7fa;
        }
        p {
            font-size: 1.1em;
            color: #f0f0f0;
        }
        .footer {
            margin-top: 25px;
            font-size: 0.9em;
            opacity: 0.8;
        }
        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(10px);}
            to {opacity: 1; transform: translateY(0);}
        }
        .container > * {
            animation: fadeIn 1s ease-in-out;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Halo dari Oracle Cloud ☁️</h1>
        <h2>Halo dari Cloud Compute 🚀</h2>
        <p>Deployed otomatis menggunakan <strong>Nginx</strong> dan <strong>GitHub Actions (CI/CD)</strong>.</p>
        <div class="footer">© 2025 Oracle Cloud Deployment Test</div>
    </div>
</body>
</html>
';
?>
