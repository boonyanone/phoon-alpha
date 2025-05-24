<?php
// Load current journal
$journalFile = 'journal.json';
$journal = json_decode(file_get_contents($journalFile), true);

// Create new journal entry from signal
$newEntry = [
    "date" => date("Y-m-d"),
    "strategy" => "Breakout Buy",
    "entry" => 2320,
    "tp" => 2345,
    "sl" => 2305,
    "status" => "Running",
    "followed" => true
];

$journal[] = $newEntry;
file_put_contents($journalFile, json_encode($journal, JSON_PRETTY_PRINT));
header("Location: journal.html");
exit;
?>