<?php
// target_exercises.php
$apiKey = "0670698d32msh21bb1c725163aa8p116845jsn61755e425a10"; // 🔑 Replace this with your actual RapidAPI key

$target = $_GET['target'] ?? '';

if (!$target) {
    die("No target specified.");
}

// --- API REQUEST ---
$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => "https://exercisedb.p.rapidapi.com/exercises/target/" . urlencode($target),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
        "x-rapidapi-host: exercisedb.p.rapidapi.com",
        "x-rapidapi-key: $apiKey"
    ],
]);
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars(ucwords($target)) ?> Exercises</title>
<style>
body { font-family: Arial, sans-serif; background: #f9fafb; padding: 20px; }
h1 { text-align: center; color: #4f46e5; }
.exercise-container { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1rem; margin-top: 20px; }
.exercise-card { background: white; border-radius: 10px; padding: 1rem; box-shadow: 0 2px 8px rgba(0,0,0,0.1); text-align: center; transition: transform 0.2s; }
.exercise-card:hover { transform: translateY(-5px); }
.exercise-card img { width: 100%; height: 200px; object-fit: cover; border-radius: 8px; }
.exercise-card h3 { margin: 10px 0; color: #111827; }
.exercise-card p { color: #333; margin: 5px 0; }
.back-btn { display: block; margin: 20px auto; text-align: center; color: white; background: #4f46e5; padding: 10px 20px; border-radius: 8px; width: fit-content; text-decoration: none; }
.back-btn:hover { background: #4338ca; }
a.exercise-link { text-decoration: none; color: inherit; }
</style>
</head>
<body>
<?php include 'views/nav.php'; ?>

<h1><?= htmlspecialchars(ucwords($target)) ?> Exercises</h1>

<a href="workouts.php" class="back-btn">← Back to Targets</a>

<div class="exercise-container">
<?php
if ($err) {
    echo "<p style='color:red;'>Error: $err</p>";
} else {
    $data = json_decode($response, true);

    // 🔹 Hardcoded GIFs for exercises (per exercise name)
    $gif_map = [
        // --- ABS ---
        "3/4 sit-up" => "images/exercises/abs/situp.gif",
        "45° side bend" => "images/exercises/abs/sidebend.gif",
        "air bike" => "images/exercises/abs/airbike.gif",
        "alternate heel touchers" => "images/exercises/abs/heeltouch.gif",
        "barbell press sit-up" => "images/exercises/abs/barbell_situp.gif",

        // --- BICEPS ---
        "barbell curl" => "images/exercises/biceps/barbell_curl.gif",
        "dumbbell hammer curl" => "images/exercises/biceps/hammer_curl.gif",

        // --- TRICEPS ---
        "triceps dips" => "images/exercises/triceps/dips.gif",
        "overhead dumbbell extension" => "images/exercises/triceps/overhead_extension.gif",

        // --- LEGS ---
        "squat" => "images/exercises/legs/squat.gif",
        "lunges" => "images/exercises/legs/lunges.gif",
    ];

    $default_gif = "images/exercises/default.gif"; // Fallback image

    if (is_array($data) && count($data) > 0) {
        foreach ($data as $exercise) {
            $name = htmlspecialchars($exercise['name']);
            $bodyPart = htmlspecialchars($exercise['bodyPart']);
            $equipment = htmlspecialchars($exercise['equipment']);
            $gifUrl = htmlspecialchars($exercise['gifUrl'] ?? '');

            // 🧠 Prefer hardcoded local GIF if available, else API, else default
            if (isset($gif_map[$exercise['name']])) {
                $gifUrl = $gif_map[$exercise['name']];
            } elseif (empty($gifUrl)) {
                $gifUrl = $default_gif;
            }

            // Link to exercise_details.php
            $link = "exercise_details.php?target=" . urlencode($target) . "&name=" . urlencode($exercise['name']);

            echo "
            <a href='$link' class='exercise-link'>
                <div class='exercise-card'>
                    <h3>$name</h3>
                    <img src='$gifUrl' alt='$name'>
                    <p><strong>Body Part:</strong> $bodyPart</p>
                    <p><strong>Equipment:</strong> $equipment</p>
                </div>
            </a>";
        }
    } else {
        echo "<p>No exercises found for this target.</p>";
    }
}
?>
</div>

<?php include 'views/footer.php'; ?>
</body>
</html>
