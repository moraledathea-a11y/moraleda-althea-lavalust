<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            background: #f3f0e7;
            color: #173d2a;
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: 90%;
            max-width: 600px;
            background: #fffdf7;
            padding: 40px;
            border: 1px solid #d8d1c3;
        }

        h1 {
            margin-top: 0;
            font-family: Georgia, serif;
            font-size: 42px;
        }

        label {
            display: block;
            margin: 18px 0 7px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 13px;
            border: 1px solid #b8b1a4;
            background: white;
            font-size: 15px;
        }

        button {
            margin-top: 25px;
            padding: 13px 24px;
            border: none;
            background: #173d2a;
            color: white;
            font-size: 15px;
            cursor: pointer;
        }

        .back {
            display: inline-block;
            margin-left: 10px;
            color: #b65b35;
            text-decoration: none;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Edit User</h1>

    <form method="post" action="<?= site_url('users/edit/' . $user['id']) ?>">

        <label>First Name</label>
        <input
            type="text"
            name="firstname"
            value="<?= $user['firstname'] ?>"
            required
        >

        <label>Last Name</label>
        <input
            type="text"
            name="lastname"
            value="<?= $user['lastname'] ?>"
            required
        >

        <label>Email</label>
        <input
            type="email"
            name="email"
            value="<?= $user['email'] ?>"
            required
        >

        <label>Username</label>
        <input
            type="text"
            name="username"
            value="<?= $user['username'] ?>"
            required
        >

        <button type="submit">Save Changes</button>

        <a class="back" href="<?= site_url('users') ?>">
            Cancel
        </a>

    </form>

</div>

</body>
</html>