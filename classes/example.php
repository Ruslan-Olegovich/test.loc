<?php

/**
 * Класс работает со строкой, которую в него засунули при
 * инициализации
 *
 */
class ArrayClass
{
    //вывод переданного массива

    function showArray(){
      echo '<pre>';
      var_dump($this->array);
      echo '</pre>' . PHP_EOL;
    }

    private $array = [];

// Конструктор
    public function __construct($array)
    {
        $this->array = $array;
    }

  // подсчет кол-ва отрицательных элментов
  // и вывод на экран только отриц. элементов.
    function negativeNumberSearch()
    {
      $array = $this->array;
        $newArray = [];
          for($i=0; $i < count($array); $i++)
          {
              if($array[$i] < 0)
              {
                  $newArray[] = $array[$i];
              }
          }
          echo "<pre>";
          print_r($newArray);
          echo "</pre>";
          $count = count($newArray);
          echo "Количество = $count ";

    }

    //Поиск наименьшего и наибольшего значения

}
