<?php
namespace Samo\YoutubeIframe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class Iframe{
    /*
 __  __
/\ \/\ \
\ \ \_\ \      __   _ __          __   __  __      __     ____
 \ \  _  \   /'__`\/\`'__\      /'__`\/\ \/\ \   /'__`\  /',__\
  \ \ \ \ \ /\  __/\ \ \/      /\  __/\ \ \_\ \ /\  __/ /\__, `\
   \ \_\ \_\\ \____\\ \_\      \ \____\\/`____ \\ \____\\/\____/
    \/_/\/_/ \/____/ \/_/       \/____/ `/___/> \\/____/ \/___/
                                           /\___/
                                           \/__/
 __                     __                ___    ___       __     __
/\ \                   /\ \              /\_ \  /\_ \     /\ \__ /\ \
\ \ \___       __      \_\ \         __  \//\ \ \//\ \    \ \ ,_\\ \ \___       __
 \ \  _ `\   /'__`\    /'_` \      /'__`\  \ \ \  \ \ \    \ \ \/ \ \  _ `\   /'__`\
  \ \ \ \ \ /\ \L\.\_ /\ \L\ \    /\ \L\.\_ \_\ \_ \_\ \_   \ \ \_ \ \ \ \ \ /\  __/
   \ \_\ \_\\ \__/.\_\\ \___,_\   \ \__/.\_\/\____\/\____\   \ \__\ \ \_\ \_\\ \____\
    \/_/\/_/ \/__/\/_/ \/__,_ /    \/__/\/_/\/____/\/____/    \/__/  \/_/\/_/ \/____/

 __                                 __                            ___       ___
/\ \                               /\ \__                       /'___\     /\_ \
\ \ \____     __      __     __  __\ \ ,_\  __  __        ___  /\ \__/     \//\ \      ___    __  __     __
 \ \ '__`\  /'__`\  /'__`\  /\ \/\ \\ \ \/ /\ \/\ \      / __`\\ \ ,__\      \ \ \    / __`\ /\ \/\ \  /'__`\
  \ \ \L\ \/\  __/ /\ \L\.\_\ \ \_\ \\ \ \_\ \ \_\ \    /\ \L\ \\ \ \_/       \_\ \_ /\ \L\ \\ \ \_/ |/\  __/
   \ \_,__/\ \____\\ \__/.\_\\ \____/ \ \__\\/`____ \   \ \____/ \ \_\        /\____\\ \____/ \ \___/ \ \____\
    \/___/  \/____/ \/__/\/_/ \/___/   \/__/ `/___/> \   \/___/   \/_/        \/____/ \/___/   \/__/   \/____/
                                                /\___/
                                                \/__/

    */
    static $css;
    static $width = 500;
    static $height = 300;
    static $id;
    static $fscreen = 'allowfullscreen';
    static $attributes = '';

    public static function css($css = "")
    {
        self::$css .= $css;
        return new Iframe();
    }
    public static function addAttribute($att)
    {
        self::$attributes.=$att;
        return new Iframe();
    }
    public static function noFullScreen()
    {
        self::$fscreen ='';
        return new Iframe();
    }
    public static function width($width=500,$unit="px")
    {
        self::$width = $width;
        self::$css .= "width:".$width.$unit.';';
        return new Iframe();
    }

    public static function height($height = 300,$unit = "px")
    {
        self::$height = $height;
        self::$css .= "height:".$height.$unit.';';
        return new Iframe();
    }
    public static function get($url)
    {
        $id = self::getID($url);
        $str = '<iframe src="https://www.youtube.com/embed/'.$id.'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" '.self::$fscreen.' '.self::$attributes.'  style=" '.Iframe::$css.'"></iframe>';
        return $str;
    }

    private static function getID($url)
    {
        $res = strpos($url,'watch?v=');
        if($res !== false)
        {
            $t = explode("?v=",$url);
            return $t[count($t)-1];
        }
        $res = strpos($url,'youtu.be');
        if($res !== false)
        {
            $t = explode($url,'/');
            return $t[count($t)-1];
        }
        return $url;
    }


}
