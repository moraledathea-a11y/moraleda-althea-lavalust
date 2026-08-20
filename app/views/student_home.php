<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Fredoka', 'Comic Sans MS', cursive, sans-serif;
            background-color: #fff5f8;
            background-image: 
                radial-gradient(#ffccd5 2px, transparent 2px),
                radial-gradient(#ffccd5 2px, #fff5f8 2px);
            background-size: 40px 40px;
            background-position: 0 0, 20px 20px;
            color: #5c4d5c;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            max-width: 650px;
            width: 85%;
            margin: 40px auto;
            padding: 45px;
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(8px);
            border-radius: 35px;
            text-align: center;
            border: 4px solid #ffb3c6;
            box-shadow: 
                0 15px 35px rgba(255, 182, 193, 0.3),
                inset 0 0 15px rgba(255, 255, 255, 0.8);
            position: relative;
        }

        .nav-container {
            display: flex;
            justify-content: flex-start;
            margin-bottom: 30px;
            width: 100%;
        }

        .nav-wrapper {
            background: #ffe5ec;
            padding: 10px 25px;
            border-radius: 50px;
            border: 2px dashed #ffb3c6;
        }

        nav a {
            margin-right: 18px;
            color: #ff4d6d;
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.2s ease;
            display: inline-block;
        }

        nav a:last-child {
            margin-right: 0;
        }

        nav a:hover {
            color: #c9184a;
            transform: scale(1.1) rotate(-3deg);
        }

        h1 {
            font-size: 34px;
            margin-bottom: 12px;
            color: #ff4d6d;
            text-shadow: 2px 2px 0px #fff0f3, 4px 4px 0px #ffccd5;
            letter-spacing: 0.5px;
            text-align: center;
        }

        p {
            font-size: 17px;
            color: #8d778d;
            line-height: 1.6;
            max-width: 480px;
            margin: 0 auto 20px auto;
            text-align: center;
        }

        .btn {
            display: inline-block;
            margin-top: 15px;
            padding: 14px 32px;
            background: linear-gradient(135deg, #ff758f 0%, #ff4d6d 100%);
            color: white;
            text-decoration: none;
            font-weight: 600;
            font-size: 18px;
            border-radius: 50px;
            box-shadow: 0 8px 20px rgba(255, 77, 109, 0.35);
            border: 3px solid #ffffff;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .btn:hover {
            background: linear-gradient(135deg, #ff4d6d 0%, #c9184a 100%);
            transform: translateY(-4px) scale(1.03);
            box-shadow: 0 12px 25px rgba(255, 77, 109, 0.45);
        }
    </style>
</head>

<body>

<div class="container">

    <div class="nav-container">
        <nav>
            <div class="nav-wrapper">
                <a href="<?= site_url('student') ?>">Home</a>
                <a href="<?= site_url('student/profile') ?>">Student Profile</a>
            </div>
        </nav>
    </div>

    <h1>Student Information Page</h1>

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