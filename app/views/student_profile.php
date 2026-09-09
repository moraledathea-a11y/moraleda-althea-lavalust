<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>

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

        .container {
            max-width: 1050px;
            margin: 55px auto;
            padding: 0 25px 70px;
        }

        .label {
            color: #b65b35;
            font-size: 12px;
            font-weight: bold;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        h1 {
            font-family: Georgia, serif;
            font-size: 58px;
            font-weight: normal;
            margin: 10px 0 35px;
        }

        .profile {
            display: grid;
            grid-template-columns: 0.75fr 1.25fr;
            background: #173d2a;
            color: white;
        }

        .intro {
            background: #b65b35;
            padding: 45px;
            min-height: 500px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .intro h2 {
            font-family: Georgia, serif;
            font-size: 45px;
            font-weight: normal;
            line-height: 1;
            margin: 0;
        }

        .intro p {
            font-size: 14px;
            line-height: 1.8;
            margin: 0;
        }

        .details {
            padding: 40px;
        }

        .info {
            display: grid;
            grid-template-columns: 150px 1fr;
            padding: 17px 0;
            border-bottom: 1px solid rgba(255,255,255,0.15);
        }

        .info:last-of-type {
            border-bottom: none;
        }

        .label-info {
            color: #d9c8a9;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .value {
            font-size: 14px;
        }

        .message {
            margin-top: 25px;
            padding: 14px;
            border: 1px solid rgba(255,255,255,0.25);
            color: #e5cda8;
            font-size: 13px;
        }

        @media (max-width: 800px) {
            .navbar {
                padding: 20px;
                flex-direction: column;
                gap: 15px;
            }

            .profile {
                grid-template-columns: 1fr;
            }

            .intro {
                min-height: 300px;
            }

            .info {
                grid-template-columns: 1fr;
                gap: 7px;
            }

            h1 {
                font-size: 45px;
            }
        }
    </style>
</head>

<body>

<nav class="navbar">


    <div class="nav-links">
        <a href="<?= site_url('student') ?>">Home</a>
        <a href="<?= site_url('student/profile') ?>" class="active">Student Profile</a>
        <a href="<?= site_url('users') ?>">Users</a>
    </div>

</nav>

<main class="container">

    <div class="label">Personal Information</div>

    <h1>My Profile</h1>

    <div class="profile">

        <div class="intro">

            <h2>
                Hello,<br>
                Althea.
            </h2>


        </div>

        <div class="details">

            <div class="info">
                <div class="label-info">Student ID</div>
                <div class="value"><?= $student_id ?></div>
            </div>

            <div class="info">
                <div class="label-info">Name</div>
                <div class="value"><?= $name ?></div>
            </div>

            <div class="info">
                <div class="label-info">Course</div>
                <div class="value"><?= $course ?></div>
            </div>

            <div class="info">
                <div class="label-info">Year Level</div>
                <div class="value"><?= $year ?></div>
            </div>

            <div class="info">
                <div class="label-info">Section</div>
                <div class="value"><?= $section ?></div>
            </div>

            <div class="info">
                <div class="label-info">Email</div>
                <div class="value"><?= $email ?></div>
            </div>

            <div class="info">
                <div class="label-info">Interest</div>
                <div class="value"><?= $hobby ?></div>
            </div>

            <div class="info">
                <div class="label-info">About</div>
                <div class="value"><?= $description ?></div>
            </div>


        </div>

    </div>

</main>

</body>
</html>