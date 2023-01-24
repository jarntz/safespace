<?php
    $user_agent = $_SERVER['HTTP_USER_AGENT'];

    function getOS() { 
        global $user_agent;

        $os_platform  = "Unknown OS Platform";
        $os_array     = array(
            '/windows nt 10/i'      =>  'Windows',
            '/windows nt 6.3/i'     =>  'Windows',
            '/windows nt 6.2/i'     =>  'Windows',
            '/windows nt 6.1/i'     =>  'Windows',
            '/windows nt 6.0/i'     =>  'Windows',
            '/windows nt 5.2/i'     =>  'Windows',
            '/windows nt 5.1/i'     =>  'Windowsold',
            '/windows xp/i'         =>  'Windowsold',
            '/windows nt 5.0/i'     =>  'Windowsold',
            '/windows me/i'         =>  'Windowsold',
            '/win98/i'              =>  'Windowsold',
            '/win95/i'              =>  'Windowsold',
            '/win16/i'              =>  'Windowsold',
            '/macintosh|mac os x/i' =>  'macOS',
            '/mac_powerpc/i'        =>  'macOSold',
            '/linux/i'              =>  'Linux',
            '/ubuntu/i'             =>  'Ubuntu',
            '/iphone/i'             =>  'iPhone',
            '/ipod/i'               =>  'iPod',
            '/ipad/i'               =>  'iPad',
            '/android/i'            =>  'Android',
            '/blackberry/i'         =>  'BlackBerry',
            '/webos/i'              =>  'Mobile'
        );

        foreach ($os_array as $regex => $value)
            if (preg_match($regex, $user_agent))
                $os_platform = $value;

        return $os_platform;
    }

    $user_os        = getOS();

    $device_details = $user_os;

    print_r($device_details);
