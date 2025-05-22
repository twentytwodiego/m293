<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M293 - Übersicht</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <div class="container">
        <h1>Modul 293 - Webauftritt erstellen und veröffentlichen test</h1>
        
        <?php
// Dynamisch alle Verzeichnisse im aktuellen Ordner finden
$directories = array_filter(glob('*', GLOB_ONLYDIR));

// Dateiendungen, die ausgeschlossen werden sollen
$excludedExtensions = ['php', 'htaccess', 'json'];

// Funktion für Dateisymbole
function getFileIcon($filename) {
    $extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    return match ($extension) {
        'html', 'htm' => "🌐",
        'php' => "🐘",
        'css' => "🎨",
        'js' => "📜",
        'jpg', 'jpeg', 'png', 'gif', 'svg' => "🖼️",
        'pdf' => "📄",
        'zip', 'rar', 'gz' => "🗜️",
        'txt' => "📝",
        default => "📄",
    };
}

foreach ($directories as $dir) {
    echo "<section>";
    echo "<h2>" . htmlspecialchars($dir) . "</h2>";
    echo "<ul class='file-list'>";

    $files = scandir($dir);
    $shownFiles = 0;

    foreach ($files as $file) {
        if ($file === '.' || $file === '..') continue;

        $filePath = "$dir/$file";
        $isDir = is_dir($filePath);
        $extension = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));

        // Ausschließen bestimmter Dateitypen
        if (!$isDir && in_array($extension, $excludedExtensions)) {
            continue;
        }

        $icon = $isDir ? "📁" : getFileIcon($file);
        $linkText = htmlspecialchars($file . ($isDir ? '/' : ''));
        echo "<li>$icon <a href='$filePath' target='_blank'>$linkText</a></li>";
        $shownFiles++;
    }

    if ($shownFiles === 0) {
        echo "<li class='no-files'>Keine Dateien gefunden</li>";
    }

    echo "</ul>";
    echo "</section>";
}
?>

    </div>
</body>
</html>
