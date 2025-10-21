<?php
// workouts.php
$apiKey = "0670698d32msh21bb1c725163aa8p116845jsn61755e425a10"; // 🔑 Replace with your actual RapidAPI key

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://exercisedb.p.rapidapi.com/exercises/targetList",
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
  <title>Workout Targets</title>
  <style>
    body { font-family: Arial, sans-serif; background: #f9fafb; padding: 20px; }
    h1 { text-align: center; color: #4f46e5; }
    .target-container { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; margin-top: 20px; }
    .target-card { background: white; border-radius: 10px; padding: 1rem; box-shadow: 0 2px 8px rgba(0,0,0,0.1); text-align: center; transition: transform 0.2s; }
    .target-card:hover { transform: scale(1.05); background: #eef2ff; }
    .target-card a { text-decoration: none; color: #111827; display: block; font-weight: bold; font-size: 18px; }
  </style>
</head>
<body>
  <?php include 'views/nav.php'; ?>

  <h1>Workout Target Muscles</h1>

  <div class="target-container">
    <?php
    if ($err) {
        echo "<p style='color:red;'>Error: $err</p>";
    } else {
        $data = json_decode($response, true);
        if (is_array($data)) {
            foreach ($data as $target) {
                $targetEncoded = urlencode($target);
                echo "<div class='target-card'>
                        <a href='target_exercises.php?target=$targetEncoded'>$target</a>
                      </div>";
            }
        } else {
            echo "<p>No data found.</p>";
        }
    }
    ?>
  </div>

  <?php include 'views/footer.php'; ?>
</body>
</html>