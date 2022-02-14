<?php
include 'core.php';
echo 'The Game';
echo '<br>';

$tools = [
    TOOL_ROCK => 'Akmuo',
    TOOL_PAPER => 'Popierius',
    TOOL_SCISSORS => 'Zirkles'
];

echo '<form action="http://127.0.0.1:8000/index.php" method="POST">';
echo '<select name="tool">';
foreach ($tools as $key => $tool) {
    echo '<option value="' . $key . '">' . $tool . '</option>';
}
echo '</select>';
echo '<br>';

echo '<input type="submit" value="Play!!!" name="play">';
echo '</form>';

$results = getResults();
echo '<table>';
foreach ($results as $result) {
    if (!empty($result)) {
        echo '<tr>';
        echo '<td>' . $result[0] . '</td>';
        echo '<td>' . $result[1] . '</td>';
        echo '<td>' . $result[2] . '</td>';
        echo '</tr>';
    }
}
echo '</table>';

echo '<pre>';

$data = array_reverse($results, preserve_keys: true);
print_r($data);
$counter = 0;
$rez = [
    1 => 0,
    2 => 0

];
foreach ($data as $row) {
    if (!empty($row)) {
        if ($counter > 9) {
            break;
        }
        $counter++;
    }
}

echo '<h2> Last 10games</h2>';
echo 'Player 1 ' . $rez[1] . ':' . $rez[2] . ' Player2';
