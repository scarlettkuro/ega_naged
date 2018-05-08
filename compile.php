<?php

function decodeBlock($blockstring) {
    $block = explode(PHP_EOL . PHP_EOL,$blockstring);
    return [
        'id' => $block[0],
        'content' => $block[1],
    ];
}

function decodeBlocks($string) {
    $blockstrings = explode(PHP_EOL . PHP_EOL . PHP_EOL, file_get_contents('data.txt'));
    $blocks = [];
    foreach($blockstrings as $blockstring) {
        $blocks[] = decodeBlock($blockstring);
    }

    return $blocks;
}

$blocks = decodeBlocks(file_get_contents('data.txt')) ;

$text = 'var initial = "' . $blocks[0]['id'] . '";' . PHP_EOL;
$text .= 'var data = {' . PHP_EOL;
foreach($blocks as $block) {
$text .= '"'. $block['id'].'" : `'.$block['content'].'`,' . PHP_EOL;
}
$text .=  '};' . PHP_EOL;

file_put_contents('data.js', $text);
?>
