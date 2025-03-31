<?php
// Include the database configuration file
include 'config.php';

// Handle search
if (isset($_GET['search'])) {
    $search = "%" . $_GET['search'] . "%";
    $stmt = $conn->prepare("SELECT * FROM translations WHERE english LIKE ? OR romanized_nepali LIKE ?");
    $stmt->bind_param("ss", $search, $search);
    $stmt->execute();
    $result = $stmt->get_result();

    $translations = [];
    while ($row = $result->fetch_assoc()) {
        $translations[] = $row;
    }

    $stmt->close();
    echo json_encode($translations);
    exit();
}

// Get random 10 translations for initial load
$result = $conn->query("SELECT * FROM translations ORDER BY RAND() LIMIT 10");
$translations = [];
while ($row = $result->fetch_assoc()) {
    $translations[] = $row;
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Language Translator</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Language Translator</h1>
        <div class="search">
            <input type="text" id="searchInput" placeholder="Search for a translation...">
            <button id="searchButton" style="background-color: white; color: royalblue; border: 1px solid royalblue;">Search</button>
            <div id="result"></div>
        </div>
        <div class="add-section" id="addSection" style="display: none;">
            <h2>Add a new translation</h2>
            <input type="text" id="englishInput" placeholder="English">
            <input type="text" id="romanizedNepaliInput" placeholder="Romanized Nepali">
            <input type="text" id="unicodeInput" placeholder="Unicode Nepali">
            <button id="addButton">Add Translation</button>
        </div>
        <div id="randomTranslations">
            <?php foreach ($translations as $trans) : ?>
                <div class="translation">
                    <p>English: <?= htmlspecialchars($trans['english'], ENT_QUOTES, 'UTF-8') ?></p>
                    <p>Romanized Nepali: <?= htmlspecialchars($trans['romanized_nepali'], ENT_QUOTES, 'UTF-8') ?></p>
                    <p>Unicode Nepali: <?= htmlspecialchars($trans['unicode_nepali'], ENT_QUOTES, 'UTF-8') ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>
