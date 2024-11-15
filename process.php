<?php
// Collects the data sent by the form
$title = $_POST['title'] ?? '';
$description = $_POST['description'] ?? '';
$genre = $_POST['genre'] ?? '';
$subject = $_POST['subject'] ?? '';
$star = $_POST['Star'] ?? '';
$year = $_POST['year'] ?? '';
$production = $_POST['Production'] ?? '';

// save in data.txt file
$data = "Title: $title | Description: $description | Genre: $genre | Subject: $subject | Star: $star | Year: $year | Production: $production\n";
file_put_contents("data.txt", $data, FILE_APPEND);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Movie Information Saved</title>
    <link rel="stylesheet" href="./css/styles1.css">
</head>
<body>

<?php include 'headerM.php'; ?>

<main class="results">
    <h1 class="results__caption">Movie Information Saved</h1>
    <hr>
    <table>
        <tr>
            <td class="results__label">Title</td>
            <td><?php echo htmlspecialchars($title); ?></td>
        </tr>
        <tr>
            <td class="results__label">Description</td>
            <td><?php echo htmlspecialchars($description); ?></td>
        </tr>
        <tr>
            <td class="results__label">Genre</td>
            <td><?php echo htmlspecialchars($genre); ?></td>
        </tr>
        <tr>
            <td class="results__label">Subject</td>
            <td><?php echo htmlspecialchars($subject); ?></td>
        </tr>
        <tr>
            <td class="results__label">Star</td>
            <td><?php echo htmlspecialchars($star); ?></td>
        </tr>
        <tr>
            <td class="results__label">Year</td>
            <td><?php echo htmlspecialchars($year); ?></td>
        </tr>
        <tr>
            <td class="results__label">Production</td>
            <td><?php echo htmlspecialchars($production); ?></td>
        </tr>
    </table>
</main>

<?php include 'footerM.php'; ?> 

</body>
</html>
