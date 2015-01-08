<?php      
class Config  
{  
 
    static private $registry = array();  
   

    static public function add($key, &$elemento)  
    {  
        if (!self::exists($key)) {  
            self::$registry[$key] = $elemento;  
            return true;  
        } else {  
            return false;  
        }  
    }  
   
   
    static public function exists($key)  
    {  
        return array_key_exists($key, self::$registry);  
    }  
   

    static public function get($key)  
    {  
        if (self::exists($key)) {  
            return self::$registry[$key];  
        } else {  
            return null;  
        }  
    }  
   

    static public function remove($name)  
    {  
        if (self::exists($name)) {  
            unset(self::$registry[$name]);
            return true;  
        } else {
            return false;
        }  
         
    }  
   
 
    static public function clear()  
    {  
        self::$registry = array();  
    }  
}  
?>  