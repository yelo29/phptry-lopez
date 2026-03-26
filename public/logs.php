<?php
// Simple log viewer for development
$logFile = '../logs/apache-error.log';
$lines = 50;

// Try different log locations
$possibleLogs = [
    'C:/xampp/apache/logs/error.log',
    '../logs/apache-error.log',
    '../../xampp/apache/logs/error.log'
];

foreach ($possibleLogs as $log) {
    if (file_exists($log)) {
        $logFile = $log;
        break;
    }
}

// Get last N lines
function getLastLines($file, $lines) {
    $content = file_get_contents($file);
    $array = explode("\n", $content);
    $array = array_reverse(array_filter($array));
    return array_slice($array, 0, $lines);
}

$logs = getLastLines($logFile, $lines);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apache Error Log Viewer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        .log-line { font-family: 'Courier New', monospace; font-size: 12px; }
        .log-error { background-color: #f8d7da; }
        .log-warning { background-color: #fff3cd; }
        .log-info { background-color: #d1ecf1; }
        .auto-refresh { position: fixed; top: 10px; right: 10px; }
    </style>
</head>
<body>
    <div class="auto-refresh">
        <button class="btn btn-primary btn-sm" onclick="location.reload()">
            <i class="fas fa-sync"></i> Refresh Now
        </button>
        <div class="form-check form-switch mt-2">
            <input class="form-check-input" type="checkbox" id="autoRefresh">
            <label class="form-check-label" for="autoRefresh">
                Auto-refresh (5s)
            </label>
        </div>
    </div>

    <div class="container mt-4">
        <h1><i class="fas fa-file-alt"></i> Apache Error Log Viewer</h1>
        <p class="text-muted">File: <?php echo htmlspecialchars($logFile); ?></p>
        
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5><i class="fas fa-list"></i> Last <?php echo $lines; ?> Lines</h5>
                <div>
                    <button class="btn btn-outline-primary btn-sm" onclick="location.reload()">
                        <i class="fas fa-sync"></i> Refresh
                    </button>
                    <button class="btn btn-outline-danger btn-sm" onclick="clearFilters()">
                        <i class="fas fa-times"></i> Clear Filters
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <input type="text" class="form-control" id="searchBox" placeholder="Search logs...">
                </div>
                
                <div class="log-container" style="max-height: 600px; overflow-y: auto;">
                    <?php foreach ($logs as $line): ?>
                        <?php 
                        $class = 'log-line mb-1 p-2 rounded';
                        if (strpos($line, 'PHP Fatal error') !== false) {
                            $class .= ' log-error';
                        } elseif (strpos($line, 'PHP Warning') !== false) {
                            $class .= ' log-warning';
                        } elseif (strpos($line, 'PHP Notice') !== false) {
                            $class .= ' log-info';
                        }
                        ?>
                        <div class="<?php echo $class; ?>">
                            <?php echo htmlspecialchars($line); ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Auto-refresh functionality
        document.getElementById('autoRefresh').addEventListener('change', function() {
            if (this.checked) {
                setInterval(() => location.reload(), 5000);
            }
        });

        // Search functionality
        document.getElementById('searchBox').addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const lines = document.querySelectorAll('.log-line');
            
            lines.forEach(line => {
                if (searchTerm === '' || line.textContent.toLowerCase().includes(searchTerm)) {
                    line.style.display = 'block';
                } else {
                    line.style.display = 'none';
                }
            });
        });

        function clearFilters() {
            document.getElementById('searchBox').value = '';
            document.getElementById('searchBox').dispatchEvent(new Event('input'));
        }
    </script>
</body>
</html>
