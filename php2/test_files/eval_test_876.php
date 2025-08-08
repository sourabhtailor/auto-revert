<?php
// Eval injection test variation #876
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>