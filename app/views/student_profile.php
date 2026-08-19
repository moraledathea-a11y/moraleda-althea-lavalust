<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Althea's Student Profile</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #eef2ff;
            color: #1e293b;
        }

        .profile-card {
            max-width: 700px;
            margin: 60px auto;
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .info {
            padding: 14px 0;
            border-bottom: 1px solid #e2e8f0;
        }

        .label {
            font-weight: bold;
            display: inline-block;
            width: 150px;
        }

        nav {
            text-align: center;
            margin-bottom: 30px;
        }

        nav a {
            margin: 0 10px;
            color: #4f46e5;
            text-decoration: none;
            font-weight: bold;
        }

        .message {
            margin-top: 25px;
            padding: 15px;
            background: #eef2ff;
            border-radius: 10px;
            text-align: center;
        }
    </style>
</head>

<body>

<div class="profile-card">

    <nav>
        <a href="<?= site_url('student') ?>">Home</a>
        <a href="<?= site_url('student/profile') ?>">Student Profile</a>
    </nav>

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