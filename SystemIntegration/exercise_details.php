<?php
$apiKey = "0670698d32msh21bb1c725163aa8p116845jsn61755e425a10";

$target = $_GET['target'] ?? '';
$exerciseName = $_GET['name'] ?? '';

if (!$target || !$exerciseName) {
    die("No target or exercise specified.");
}

// API Request
$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => "https://exercisedb.p.rapidapi.com/exercises/target/" . urlencode($target),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => [
        "x-rapidapi-host: exercisedb.p.rapidapi.com",
        "x-rapidapi-key: $apiKey"
    ],
]);
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

$data = json_decode($response, true);

// Find the exercise
$exerciseFound = null;
if (is_array($data)) {
    foreach ($data as $exercise) {
        if ($exercise['name'] === $exerciseName) {
            $exerciseFound = $exercise;
            break;
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($exerciseName) ?> Instructions</title>
<style>
body { font-family: Arial, sans-serif; padding: 20px; background: #f9fafb; }
h1 { color: #4f46e5; text-align: center; }
.container { max-width: 800px; margin: 20px auto; background: white; padding: 20px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
p { margin: 10px 0; }
.back-btn { display: block; text-align: center; margin: 20px auto; background: #4f46e5; color: white; padding: 10px 20px; border-radius: 8px; text-decoration: none; width: fit-content; }
.back-btn:hover { background: #4338ca; }
</style>
</head>
<body>
<?php include 'views/nav.php'; ?>

<h1><?= htmlspecialchars($exerciseName) ?></h1>
<a href="target_exercises.php?target=<?= urlencode($target) ?>" class="back-btn">← Back to <?= htmlspecialchars($target) ?> Exercises</a>

<div class="container">
<?php
if ($err) {
    echo "<p style='color:red;'>Error: $err</p>";
} elseif ($exerciseFound) {
    echo "<p><strong>Equipment:</strong> " . htmlspecialchars($exerciseFound['equipment']) . "</p>";
    echo "<h3>Instructions:</h3>";
    echo "<ol>";
    foreach ($exerciseFound['instructions'] as $step) {
        echo "<li>" . htmlspecialchars($step) . "</li>";
    }
    echo "</ol>";
} else {
    echo "<p>Exercise not found.</p>";
}
?>
</div>

<?php include 'views/footer.php'; ?>
</body>
</html>