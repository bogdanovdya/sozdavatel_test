<?php

function dateRu(int $day, int $month) : string
{
    if(($month == 4 || $month == 6 || $month == 9 || $month == 11) && ($day > 30)){
        return 'Ошибка: в этом месяце 30 дней';
    }
    elseif($month == 2 && $day > 29){
        return 'Ошбика: в этом месяце 28/29 дней';
    }
    else{
        switch($month){
            case 1:
                return $day . ' ' . 'января';
                break;  
            case 2:
                return $day . ' ' . 'февраля';
                break;
            case 3:
                return $day . ' ' . 'марта';
                break; 
            case 4:
                return $day . ' ' . 'апреля';
                break;
            case 5:
                return $day . ' ' . 'мая';
                break;
            case 6:
                return $day . ' ' . 'июня';
                break;
            case 7:
                return $day . ' ' . 'июля';
                break;
            case 8:
                return $day . ' ' . 'августа';
                break;
            case 9:
                return $day . ' ' . 'сентября';
                break;
            case 10:
                return $day . ' ' . 'октября';
                break;
            case 11:
                return $day . ' ' . 'ноября';
                break;
            case 12:
                return $day . ' ' . 'декабря';
                break;
            default:
                return 'Ошибка: задан несуществующий месяц';
        }
    }
}

?>