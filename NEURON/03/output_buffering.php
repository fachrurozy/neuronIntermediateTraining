<?php
ob_start();

echo "Hello ";
echo "World!";

ob_clean();

echo "Adzan ";
echo "Maghrib!";

ob_flush();
?>