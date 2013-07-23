<?php

namespace BW\Helpers\CaseConverter; 

class CaseConverter {
    
    private $upperCaseLetters = array(
        // Английский Алфавит
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 
        'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
        
        // Русский алфавит
        'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 
        'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 
        'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я',
        
        // Украинский Алфавит
        'Ґ', 'Є', 'І', 'Ї',
    );
    
    private $lowerCaseLetters = array(
        // Английский Алфавит
        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 
        'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
        
        // Русский алфавит
        'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 
        'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 
        'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я',
        
        // Украинский Алфавит
        'ґ', 'є', 'і', 'ї'
    );
    
    
    public function __construct() {
        ;
    }
    
    
    public  function toLowerCase($string) {
        
        return str_replace($this->upperCaseLetters, $this->lowerCaseLetters, $string);
    }
    
    public  function toUpperCase($string) {
        
        return str_replace($this->lowerCaseLetters, $this->upperCaseLetters, $string);
    }
}
