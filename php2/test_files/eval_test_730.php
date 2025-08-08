<?php
// Eval injection test variation #730
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>