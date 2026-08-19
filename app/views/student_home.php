<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f7fb;
            color: #1f2937;
        }

        .container {
            max-width: 850px;
            margin: 80px auto;
            padding: 45px;
            background: white;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        }

        h1 {
            font-size: 38px;
            margin-bottom: 10px;
        }

        p {
            font-size: 18px;
            color: #64748b;
        }

        .btn {
            display: inline-block;
            margin-top: 25px;
            padding: 13px 25px;
            background: #2563eb;
            color: white;
            text-decoration: none;
            border-radius: 10px;
        }

        .btn:hover {
            background: #1d4ed8;
        }

        nav {
            margin-bottom: 30px;
        }

        nav a {
            margin: 0 10px;
            color: #2563eb;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="container">

    <nav>
        <a href="<?= site_url('student') ?>">Home</a>
        <a href="<?= site_url('student/profile') ?>">Student Profile</a>
    </nav>

    <h1>Welcome to Althea's Student Hub</h1>

    <p>
        A simple LavaLust application demonstrating
        routing, controllers, views, and middleware.
    </p>

    <a class="btn" href="<?= site_url('student/profile') ?>">
        View My Profile
    </a>

</div>

</body>
</html>