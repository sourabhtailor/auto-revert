<?php
// Nested PHP logic #1
$data = $_GET['data'] ?? '';
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        echo "Iteration $i-$j: $data<br>";
    }
}
?>