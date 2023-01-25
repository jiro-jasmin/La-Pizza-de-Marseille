<?php

$file = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'count';

function add_view(string $file): void
{
    $daily_file = $file . '-' . date('Y-m-d');
    increment_count($file);
    increment_count($daily_file);
}

function increment_count(string $file): void
{
    $count = 1; // if file doesn't exist = 1st view
    if (file_exists($file)) { // else, increment the existing file
        $count = (int)file_get_contents($file);
        $count++;
    }
    file_put_contents($file, $count); // add this nb to file
}

function total_views(string $file): string
{
    return file_get_contents($file);
}

function daily_views(string $file): string
{
    $daily_file = $file . '-' . date('Y-m-d');
    return file_get_contents($daily_file);
}
