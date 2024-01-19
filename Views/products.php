<?php if (!empty($_SESSION['warning'])): ?>
    <?php echo '<p class="msg"> ' . nl2br($_SESSION['warning']) . ' </p>'; ?>
    <?php unset($_SESSION['warning']); ?>
<?php endif; ?>
<?php foreach ($products as $product): ?>
    <?php echo $product['id']; ?> <br>
    <a href="<?php echo $product['url']; ?>"> <?php echo $product['title']; ?></a>
    <br><br>
<?php endforeach; ?>