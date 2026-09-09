<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f3f0e7;
            color: #173d2a;
        }

        .navbar {
            padding: 25px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 20px;
            font-weight: bold;
        }

        .nav-links {
            display: flex;
            gap: 28px;
        }

        .nav-links a {
            text-decoration: none;
            color: #315440;
            font-size: 14px;
            font-weight: 600;
        }

        .nav-links a:hover,
        .nav-links .active {
            color: #b65b35;
        }

        .hero {
            min-height: 80vh;
            padding: 70px 7%;
            display: grid;
            grid-template-columns: 1fr 0.8fr;
            gap: 70px;
            align-items: center;
        }

        .label {
            color: #b65b35;
            font-size: 12px;
            font-weight: bold;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        h1 {
            font-family: Georgia, serif;
            font-size: 75px;
            font-weight: normal;
            line-height: 0.98;
            letter-spacing: -4px;
            margin: 0;
        }

        h1 span {
            color: #b65b35;
            font-style: bold;
        }

        .description {
            max-width: 500px;
            margin-top: 28px;
            color: #637268;
            font-size: 16px;
            line-height: 1.8;
        }

        .button {
            display: inline-block;
            margin-top: 25px;
            padding: 15px 24px;
            background: #173d2a;
            color: white;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
        }

        .button:hover {
            background: #b65b35;
        }

        .visual {
            height: 450px;
            background: #173d2a;
            position: relative;
            overflow: hidden;
        }

        .circle {
            position: absolute;
            width: 300px;
            height: 300px;
            background: #c87950;
            border-radius: 50%;
            top: 55px;
            left: 50%;
            transform: translateX(-50%);
        }

        .square {
            position: absolute;
            width: 150px;
            height: 150px;
            background: #e5cda8;
            right: 35px;
            bottom: 35px;
            transform: rotate(45deg);
        }

        .visual-text {
            position: absolute;
            left: 25px;
            bottom: 25px;
            color: white;
            font-family: Georgia, serif;
            font-size: 24px;
        }

        @media (max-width: 800px) {
            .navbar {
                padding: 20px;
                flex-direction: column;
                gap: 15px;
            }

            .hero {
                grid-template-columns: 1fr;
                padding: 40px 20px;
            }

            h1 {
                font-size: 55px;
            }

            .visual {
                height: 330px;
            }
        }
    </style>
</head>

<body>

<nav class="navbar">


    <div class="nav-links">
        <a href="<?= site_url('student') ?>" class="active">Home</a>
        <a href="<?= site_url('student/profile') ?>">Student Profile</a>
        <a href="<?= site_url('users') ?>">Users</a>
    </div>

</nav>

<main class="hero">

    <div>
        <div class="label">Student Information</div>

        <h1>
            Welcome to your
            <span>Student Portal.</span>
        </h1>


        <a class="button" href="<?= site_url('student/profile') ?>">
            View My Profile
        </a>
    </div>

    <div class="visual">
        <div class="circle"></div>
        <div class="square"></div>

    </div>

</main>

</body>
</html>