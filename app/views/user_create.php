<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>

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
            padding: 24px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 20px;
            font-weight: 800;
        }

        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-links a {
            text-decoration: none;
            color: #315440;
            font-size: 14px;
            font-weight: 600;
        }

        .nav-links a:hover {
            color: #b65b35;
        }

        .container {
            max-width: 650px;
            margin: 55px auto;
            padding: 0 25px 70px;
        }

        .heading {
            margin-bottom: 30px;
        }

        .heading small {
            color: #b65b35;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .heading h1 {
            margin: 10px 0 0;
            font-family: Georgia, serif;
            font-size: 55px;
            font-weight: 400;
        }

        .form-card {
            background: #ffffff;
            padding: 35px;
            border-top: 5px solid #173d2a;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 13px;
            font-weight: 700;
            color: #315440;
        }

        input {
            width: 100%;
            padding: 13px 14px;
            border: 1px solid #d8d4ca;
            background: #faf9f5;
            font-size: 14px;
            outline: none;
        }

        input:focus {
            border-color: #173d2a;
        }

        .buttons {
            display: flex;
            gap: 12px;
            margin-top: 30px;
        }

        button,
        .cancel {
            padding: 14px 22px;
            border: none;
            font-size: 14px;
            font-weight: 700;
            cursor: pointer;
            text-decoration: none;
        }

        button {
            background: #173d2a;
            color: #ffffff;
        }

        button:hover {
            background: #b65b35;
        }

        .cancel {
            background: #e7e2d7;
            color: #315440;
        }

        @media (max-width: 700px) {
            .navbar {
                padding: 20px;
            }

            .nav-links {
                gap: 15px;
            }

            .heading h1 {
                font-size: 45px;
            }
        }
    </style>
</head>

<body>

<nav class="navbar">


    <div class="nav-links">
        <a href="<?= site_url('student') ?>">Home</a>
        <a href="<?= site_url('student/profile') ?>">Student Profile</a>
        <a href="<?= site_url('users') ?>">Users</a>
    </div>

</nav>

<main class="container">

    <div class="heading">
        <small>User Management</small>
        <h1>Add User</h1>
    </div>

    <div class="form-card">

        <form method="POST" action="<?= site_url('users/create') ?>">

            <div class="form-group">
                <label>First Name</label>
                <input type="text" name="firstname" required>
            </div>

            <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="lastname" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>

            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" required>
            </div>

            <div class="buttons">
                <button type="submit">Add User</button>

                <a class="cancel" href="<?= site_url('users') ?>">
                    Cancel
                </a>
            </div>

        </form>

    </div>

</main>

</body>
</html>