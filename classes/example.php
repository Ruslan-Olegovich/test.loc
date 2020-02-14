<?php

/**
 * Класс работает со строкой, которую в него засунули при
 * инициализации
 *
 */
class ArrayClass
{
    private $array = [];


    //вывод переданного массива
    function showArray(){
        var_dump($this->array);
    }

    public function generateArray()
    {
        $c1 = [];
        for($i = 0; $i < 4; $i++)
        {
            $c1[]=rand(-255,255);
        }
        return $c1;
        print_r($c1);
    }

    function negativeNumberSearch()
    {
      $array1[] = $this->array;
        $newArray = [];
          foreach($array1 as $arr)
          {
              if($arr < 0)
              {
                  $newArray[] = $arr;
              }
          }
          var_dump($newArray);
    }

}
