<?php
$repo_owner     = "giuliobordin";
$repo_name      = "teste";
$token          = "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";

$url = "https://api.github.com/repos/$repo_owner/$repo_name/commits";
$options = [
    "http" => [
        "header" => "User-Agent: PHP\r\nAuthorization: token $token\r\n"
    ]
];

$response = file_get_contents($url, false, stream_context_create($options));
$commits = json_decode($response, true);

foreach ($commits as $commit) {
    echo "Commit: " . $commit['commit']['message'] . "\n";
}
?>