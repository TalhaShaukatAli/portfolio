<?php
$navArray= array("Home","About","Projects","Experience", "Resume", "Contact Me", "Admin", "API");
$config= parse_ini_file('../config.ini',true);
$environment= $config['ENVIRONMENT'];
define("URL_ROOT", $config[$environment]["URL_BASE"]);
define("ABS_ROOT", $config[$environment]["ABS_ROOT"]);
?>

<?php include_once(ABS_ROOT. "/src/views/head.view.php"); ?>
<?php include_once(ABS_ROOT. "/src/views/nav.view.php"); ?>
<?php include_once(ABS_ROOT. "/src/views/about.view.php"); ?>
<?php include_once(ABS_ROOT. "/src/views/projectslist.view.php"); ?>
<?php include_once(ABS_ROOT. "/src/views/experience.view.php"); ?>
<?php include_once(ABS_ROOT. "/src/views/resume.view.php"); ?>

<?php
class WeatherAPI {
    private $apiKey;

    public function __construct($apiKey) {
        $this->apiKey = $apiKey;
    }

    public function getWeather($city) {
        // API endpoint URL
        $url = "https://api.openweathermap.org/data/2.5/weather?q=$city&appid={$this->apiKey}&units=imperial";

        // Initialize cURL session
        $curl = curl_init($url);

        // Set options for the cURL session
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        // Execute cURL session
        $response = curl_exec($curl);

        // Check if request was successful
        if ($response === false) {
            die('Error fetching data from the API: ' . curl_error($curl));
        }

        // Close cURL session
        curl_close($curl);

        // Decode JSON response
        $data = json_decode($response);

        // Check if data is valid
        if (!$data || !isset($data->weather[0]->description) || !isset($data->main->temp)) {
            die('Error: Invalid JSON response or missing data');
        }

        // Extract weather information
        $weatherDescription = $data->weather[0]->description;
        $temperature = $data->main->temp;

        // Return weather information
        return [
            'description' => $weatherDescription,
            'temperature' => $temperature
        ];
    }
}

// Your OpenWeatherMap API key
$apiKey = '';

// Create WeatherAPI instance
$weatherAPI = new WeatherAPI($apiKey);

// City to get the weather information for
$city = 'Bemidji';

// Get weather information
$weatherData = $weatherAPI->getWeather($city);

// Output weather information
// echo "Weather in $city: {$weatherData['description']}, Temperature: {$weatherData['temperature']}°F";

echo "<div style='font-family: Arial, sans-serif;'>";
echo "Weather in $city: <span style='font-weight: bold;'>{$weatherData['description']}</span>, Temperature: <span style='color: green;'>{$weatherData['temperature']}°F</span>";
echo "</div>";

?>
