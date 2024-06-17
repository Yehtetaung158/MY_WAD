<?php
echo "<pre>";
$conn = mysqli_connect("localhost", "Yehtetaung", 12345678, "wad_shop");

if (!$conn) {
    die(mysqli_connect_errno());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Create Project</h1>
    <form action="./save.php" method="post" style="display: flex;">
        <input type="text" name="name" placeholder="name" required>
        <input type="number" name="price" placeholder="price" required>
        <input type="text" name="stock" placeholder="stock" required>
        <button type="submit">Submit</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Create At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM products";

            $query = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($query)) :
            ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['price'] ?></td>
                    <td><?= $row['stock'] ?></td>
                    <td><?= $row['create_at'] ?></td>
                    <td><a href="./edit.php?row_id=<?= $row['id'] ?>">Uptade</a> / <a onclick="return confirm('Are you sure to delete')" href="./delete.php?row_id=<?= $row['id'] ?>">
                            Delete
                        </a></td>
                </tr>
            <?php endwhile ?>
        </tbody>
    </table>
</body>

</html>