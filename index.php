<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M293 - Übersicht</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Modul 293 – Webauftritt erstellen und veröffentlichen test</h1>
        
        <?php
        $directories = ['H1', 'D1', 'T1'];
        
        foreach ($directories as $dir) {
            if (!is_dir($dir)) {
                continue;
            }

            echo "<section>";
            echo "<h2>$dir</h2>";
            echo "<ul class='file-list'>";
            
            $files = scandir($dir);

            if (count($files) <= 2) {
                echo "<li class='no-files'>Keine Dateien gefunden</li>";
            } else {
                foreach ($files as $file) {
                    if ($file == '.' || $file == '..') continue;

                    $filePath = "$dir/$file";
                    $isDir = is_dir($filePath);
                    $icon = $isDir ? "📁" : getFileIcon($file);

                    $linkText = htmlspecialchars($file . ($isDir ? '/' : ''));
                    echo "<li>$icon <a href='$filePath' target='_blank'>$linkText</a></li>";
                }
            }
            
            echo "</ul>";
            echo "</section>";
        }

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
        ?>
    </div>
</body>
</html>
