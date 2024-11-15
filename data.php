<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'] ?? '';
    $description = $_POST['description'] ?? '';
    $genre = $_POST['genre'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $star = $_POST['Star'] ?? '';
    $year = $_POST['year'] ?? '';
    $production = $_POST['Production'] ?? '';

    // show data
    echo "<h1>Form Data</h1>";
    echo "<p>Title: $title</p>";
    echo "<p>Description: $description</p>";
    echo "<p>Genre: $genre</p>";
    echo "<p>Subject: $subject</p>";
    echo "<p>Star: $star</p>";
    echo "<p>Year: $year</p>";
    echo "<p>Production: $production</p>";

    // saves the file
    $data = "$title, $description, $genre, $subject, $star, $year, $production\n";
    file_put_contents("data.txt", $data, FILE_APPEND);
}
?>
