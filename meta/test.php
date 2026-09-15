<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}
<?php
// Header settings for JSON response and CORS
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$file = __DIR__ . '/user.txt';
$method = $_SERVER['REQUEST_METHOD'];

// 1. READ USERS FROM TXT FILE (GET)
if ($method === 'GET') {
    if (!file_exists($file)) {
        echo json_encode([]);
        exit;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $users = array_map(function($line) {
        return json_decode($line, true);
    }, $lines);

    echo json_encode(array_values(array_filter($users)));
    exit;
}

// 2. SAVE OR CLEAR USERS (POST)
if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Action to purge the entire TXT database
    if (isset($data['action']) && $data['action'] === 'clear') {
        file_put_contents($file, '', LOCK_EX);
        echo json_encode(['success' => true, 'message' => 'All biometric records purged successfully.']);
        exit;
    }

    // Input validation for registration
    if (!isset($data['name']) || !isset($data['descriptor'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing biometric data or identifier.']);
        exit;
    }

    // Format record into a single JSON line and append securely (LOCK_EX prevents write collisions)
    $line = json_encode($data) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo json_encode(['success' => true]);
    exit;
}

