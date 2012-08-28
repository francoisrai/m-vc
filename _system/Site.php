<?php
/**
 * Here are publics statics to manage globals stuffs....
 * it is recommended to set this variables on a config file 
 *
 * @author david marsalone
 */
class Site {
    /**
     *
     * @var String the root path of your website starting with slash.
     * Usefull to display hrefs or img src, etc... 
     */
    public static $root="/omoe";
    /**
     *
     * @param String $url the local url you need to display
     * @param Bool $absolute if true the host will be added
     * @return String return a coorect href to $url 
     */
    public static function url($url,$absolute=false){
        if($absolute){
            return self::$host.self::$root."/".$url;
        }else{
            return self::$root."/".$url;
        }
    }
     /**
     * @var String the host of your website.
     * Usefull to display hrefs or img src, etc... 
     */
    public static $host="http://david.de.shic.cc";
    /**
     * 
     * @var Bool is the website in debug mode or not? 
     */
    public static $debug=false;
    
    
    //----------------------app folders--------------------------
    
    /**
     * 
     * @var String For php use...where is your php project?
     */
    public static $appFolder="_app";
    /**
     * 
     * @var String For php use...where your models?
     */
    public static $appModelsFolder="_app/mvc/m";
    /**
     * 
     * @var String For php use...where your view?
     */
    public static $appViewsFolder="_app/mvc/v";
    /**
     * 
     * @var String For php use...where your controlers?
     */
    public static $appControlersFolder="_app/mvc/c";

    //----------------------system folders--------------------------  
    
    
    /**
     * 
     * @var String For php use...Hey Neo, where is the matrix?
     */
    public static $systemFolder="_system";
    /**
     * 
     * @var String For php use...core utilities are here.
     */
    public static $systemUtils="_system/utils";
    /**
     * 
     * @var String For php use...core libs are here.
     */
    public static $systemLibs="_system/libs";
    /**
     * 
     * @var String For php use...core libs are here.
     */
    public static $systemMVC="_system/mvc";
    
    //----------------------publics folders-------------------------- 
    
    /**
     *
     * @var string For php use...where is your public folder? 
     */
    public static $publicFolder="pub";
    /**
     *
     * @var string For php use...where are the media files? 
     */
    public static $mediaFolder="pub/media";

    
}

?>
