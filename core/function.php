<?php
session_start();
function getHeader()
{
    require __DIR__ . "/../header.php";
}

function getFooter()
{
    require __DIR__ . "/../footer.php";
}


function Router(array $routes)
{
    $basePath = '/Atis_carbon';

    $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? '/';

    if (str_starts_with($url, $basePath)) {
        $url = substr($url, strlen($basePath));
    }

    $url = rtrim($url, '/') ?: '/';

    $page = array_search($url, $routes, true);
    if ($page !== false) {
        require __DIR__ . "/../pages/{$page}.atri.php";
        return;
    }

    foreach ($routes as $page => $pattern) {
        if (strpos($pattern, '{slug}') === false) {
            continue;
        }

        $regex = '#^' . str_replace('{slug}', '([^/]+)', $pattern) . '$#';

        if (preg_match($regex, $url, $matches)) {
            $slug = $matches[1];
            require __DIR__ . "/../pages/{$page}.atri.php";
            return;
        }
    }

    http_response_code(404);
    require __DIR__ . '/../pages/404.atri.php';
}

function url(string $path = '/'): string
{
    $basePath = '/Atis_carbon';

    if ($path === '' || $path === '/') {
        return $basePath . '/';
    }
    $path = '/' . ltrim($path, '/');

    return $basePath . $path;
}

function asset(string $path)
{
    $basePath = '/Atis_carbon';
    return $basePath . '/' . ltrim($path, '/');
}

function hasSession(string $name){
    if(isset($_SESSION[$name])){
        return true;
    }else{
        return false;
    }
}

function flash(string $name){
    if(isset($_SESSION[$name])) {

        $data = $_SESSION[$name];

        unset($_SESSION[$name]);

        return $data;
    }

    return false;
}