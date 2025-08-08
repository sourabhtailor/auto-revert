<?php
// Eval injection test variation #756
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>