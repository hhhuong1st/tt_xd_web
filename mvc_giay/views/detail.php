<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
</head>
<body>
    <h1>Chi tiết sản phẩm</h1>
    <?php if ($product): ?>
        <p>Tên sản phẩm: <?= $product['name'] ?></p>
        <p>Giá: <?= number_format($product['price']) ?> VND</p>
    <?php else: ?>
        <p>Sản phẩm không tồn tại!</p>
    <?php endif; ?>
</body>
</html>