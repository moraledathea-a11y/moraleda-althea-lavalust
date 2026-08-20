<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Althea's Student Profile</title>

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
            padding: 20px 0;
            box-sizing: border-box;
        }

        .profile-card {
            max-width: 650px;
            width: 85%;
            margin: 40px auto;
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(8px);
            padding: 45px;
            border-radius: 35px;
            border: 4px solid #ffb3c6;
            box-shadow: 
                0 15px 35px rgba(255, 182, 193, 0.3),
                inset 0 0 15px rgba(255, 255, 255, 0.8);
            position: relative;
        }

        /* Nav container aligned to the left */
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
            text-align: center;
            font-size: 34px;
            margin-bottom: 30px;
            color: #ff4d6d;
            text-shadow: 2px 2px 0px #fff0f3, 4px 4px 0px #ffccd5;
            letter-spacing: 0.5px;
        }

        .info {
            padding: 14px 18px;
            margin-bottom: 8px;
            border-bottom: 2px dashed #ffe0e9;
            display: flex;
            align-items: center;
            font-size: 16px;
            border-radius: 12px;
            transition: background 0.2s ease;
        }

        .info:hover {
            background: #fff0f3;
        }

        .label {
            font-weight: 600;
            display: inline-block;
            width: 150px;
            color: #ff4d6d;
            flex-shrink: 0;
        }

        .message {
            margin-top: 30px;
            padding: 16px;
            background: #ffe5ec;
            border: 2px solid #ffccd5;
            color: #c9184a;
            font-weight: 600;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(255, 179, 198, 0.2);
        }
    </style>
</head>

<body>

<div class="profile-card">

    <div class="nav-container">
        <nav>
            <div class="nav-wrapper">
                <a href="<?= site_url('student') ?>">Home</a>
                <a href="<?= site_url('student/profile') ?>">Student Profile</a>
            </div>
        </nav>
    </div>

    <h1>Student Profile</h1>

    <div class="info">
        <span class="label">Student ID:</span>
        <?= $student_id ?>
    </div>

    <div class="info">
        <span class="label">Name:</span>
        <?= $name ?>
    </div>

    <div class="info">
        <span class="label">Course:</span>
        <?= $course ?>
    </div>

    <div class="info">
        <span class="label">Year Level:</span>
        <?= $year ?>
    </div>

    <div class="info">
        <span class="label">Section:</span>
        <?= $section ?>
    </div>

    <div class="info">
        <span class="label">Email:</span>
        <?= $email ?>
    </div>

    <div class="info">
        <span class="label">Interest:</span>
        <?= $hobby ?>
    </div>

    <div class="info">
        <span class="label">About Me:</span>
        <?= $description ?>
    </div>

    <div class="message">
        Profile access verified — Welcome, Althea!
    </div>

</div>

</body>
</html>