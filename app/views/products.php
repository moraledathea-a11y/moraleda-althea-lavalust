<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Product Directory</title>

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
            font-family: Georgia, serif;
            font-size: 25px;
            font-weight: bold;
        }

        .nav-links {
            display: flex;
            gap: 28px;
            flex-wrap: wrap;
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

        .logout {
            color: #b65b35 !important;
        }

        .container {
            max-width: 1100px;
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
            margin: 10px 0 30px;
        }

        h1 span {
            color: #b65b35;
        }

        .top {
            display: flex;
            justify-content: space-between;
            align-items: end;
            gap: 25px;
            margin-bottom: 20px;
        }

        .add-button {
            display: inline-block;
            background: #173d2a;
            color: white;
            text-decoration: none;
            padding: 13px 20px;
            font-size: 13px;
            font-weight: bold;
        }

        .add-button:hover {
            background: #b65b35;
        }

        .table-wrapper {
            background: white;
            border-top: 5px solid #173d2a;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 850px;
        }

        th {
            background: #173d2a;
            color: white;
            padding: 16px 18px;
            text-align: left;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        td {
            padding: 17px 18px;
            border-bottom: 1px solid #e5e1d7;
            color: #53655a;
            font-size: 14px;
        }

        tbody tr:hover {
            background: #f7f4eb;
        }

        .id {
            color: #b65b35;
            font-weight: bold;
        }

        .actions a {
            text-decoration: none;
            font-size: 12px;
            font-weight: bold;
            margin-right: 12px;
        }

        .edit {
            color: #315440;
        }

        .delete {
            color: #b65b35;
        }

        @media (max-width: 800px) {
            .navbar {
                padding: 20px;
                flex-direction: column;
                gap: 15px;
                align-items: flex-start;
            }

            .top {
                align-items: flex-start;
                gap: 20px;
                flex-direction: column;
            }

            h1 {
                font-size: 45px;
            }

            .container {
                margin-top: 35px;
                padding: 0 20px 50px;
            }
        }
    </style>
</head>

<body>

<nav class="navbar">


    <div class="nav-links">

        <a href="<?= site_url('users'); ?>">
            Users
        </a>

        <a href="<?= site_url('products'); ?>" class="active">
            Products
        </a>

        <a href="<?= site_url('logout'); ?>" class="logout">
            Logout
        </a>

    </div>

</nav>

<main class="container">

    <div class="top">

        <div>

            <h1>
                Product <span>Directory</span>
            </h1>
        </div>

        <a class="add-button" href="<?= site_url('products/create'); ?>">
            + Add Product
        </a>

    </div>

    <div class="table-wrapper">

        <table>

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach ($products as $product): ?>

                    <tr>

                        <td class="id">
                            <?= htmlspecialchars($product['id']); ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($product['product_name']); ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($product['description']); ?>
                        </td>

                        <td>
                            ₱<?= number_format((float) $product['price'], 2); ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($product['quantity']); ?>
                        </td>

                        <td class="actions">

                            <a
                                class="edit"
                                href="<?= site_url('products/edit/' . $product['id']); ?>"
                            >
                                Edit
                            </a>

                            <a
                                class="delete"
                                href="<?= site_url('products/delete/' . $product['id']); ?>"
                                onclick="return confirm('Are you sure you want to delete this product?');"
                            >
                                Delete
                            </a>

                        </td>

                    </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </div>

</main>

</body>
</html>