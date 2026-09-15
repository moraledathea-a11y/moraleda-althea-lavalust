<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LavaLust | Login</title>

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

        .page {
            min-height: 100vh;
            padding: 25px 7%;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            color: #173d2a;
            font-family: Georgia, serif;
            font-size: 25px;
            font-weight: bold;
        }

        .back-link {
            color: #315440;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
        }

        .back-link:hover {
            color: #b65b35;
        }

        .login-layout {
            min-height: 80vh;
            display: grid;
            grid-template-columns: 1fr 1fr;
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
            margin: 0;
            font-family: Georgia, serif;
            font-size: 65px;
            font-weight: normal;
            line-height: 1;
            letter-spacing: -3px;
        }

        h1 span {
            color: #b65b35;
        }

        .description {
            max-width: 470px;
            margin-top: 25px;
            color: #637268;
            line-height: 1.8;
            font-size: 16px;
        }

        .login-card {
            background: #ffffff;
            padding: 38px;
            border: 1px solid #e0ded5;
            box-shadow: 0 12px 30px rgba(23, 61, 42, 0.08);
        }

        .login-card h2 {
            margin-top: 0;
            margin-bottom: 25px;
            font-family: Georgia, serif;
            font-size: 30px;
            font-weight: normal;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #315440;
            font-size: 13px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 14px;
            border: 1px solid #ccd5cc;
            background: #fafbf8;
            color: #173d2a;
            font-size: 14px;
            outline: none;
        }

        input:focus {
            border-color: #b65b35;
        }

        .button {
            width: 100%;
            padding: 15px;
            border: none;
            background: #173d2a;
            color: white;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
        }

        .button:hover {
            background: #b65b35;
        }

        .error {
            margin-bottom: 20px;
            padding: 12px;
            background: #f8dfd7;
            color: #963f25;
            font-size: 13px;
        }

        .demo-account {
            margin-top: 25px;
            padding: 15px;
            background: #f3f0e7;
            color: #637268;
            font-size: 13px;
            line-height: 1.7;
        }

        .visual {
            position: relative;
            height: 430px;
            background: #173d2a;
            overflow: hidden;
        }

        .circle {
            position: absolute;
            width: 280px;
            height: 280px;
            top: 60px;
            left: 50%;
            transform: translateX(-50%);
            background: #c87950;
            border-radius: 50%;
        }

        .square {
            position: absolute;
            width: 150px;
            height: 150px;
            right: 25px;
            bottom: 30px;
            background: #e5cda8;
            transform: rotate(45deg);
        }

        .visual-text {
            position: absolute;
            left: 25px;
            bottom: 25px;
            color: white;
            font-family: Georgia, serif;
            font-size: 25px;
            line-height: 1.1;
        }

        @media (max-width: 800px) {
            .page {
                padding: 20px;
            }

            .login-layout {
                grid-template-columns: 1fr;
                gap: 35px;
                padding-top: 50px;
            }

            h1 {
                font-size: 50px;
            }

            .visual {
                height: 320px;
            }

            .login-card {
                padding: 25px;
            }
        }
    </style>
</head>

<body>

<div class="page">

    <nav class="navbar">

    </nav>

    <main class="login-layout">

        <section>
            <div class="label">Welcome Back</div>

            <h1>
                Login to your
                <span>Account.</span>
            </h1>

        </section>

        <section class="login-card">

            <h2>Sign In</h2>

            <?php if (isset($error)): ?>
                <div class="error">
                    <?= htmlspecialchars($error); ?>
                </div>
            <?php endif; ?>

            <form method="POST" action="<?= site_url('login'); ?>">

                <div class="form-group">
                    <label for="username">Username</label>

                    <input
                        type="text"
                        id="username"
                        name="username"
                        placeholder="Enter username"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="password">Password</label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Enter password"
                        required
                    >
                </div>

                <button class="button" type="submit">
                    Login
                </button>

            </form>

            <div class="demo-account">
                <strong>Laboratory Demo Account</strong><br>
                Username: admin<br>
                Password: admin123
            </div>

        </section>

    </main>

</div>

</body>
</html>