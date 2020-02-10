<?php

/**
 * Класс работает со строкой, которую в него засунули при
 * инициализации
 *
 */
class WClass
{


    function Getname() {
        // 1. какая область видимости у этого метода? где комментарий того, что
        // делает эта функция?
        // 2. имена методов и свойств должны начинаться с маленьиз букв
        // но каждое последуюущее слово должно начинаться с больгой буквы

      echo $this->string;
      // почему отступ сделан одним пробелом?
      // должно быть 4
    }

    private $string;

    /**
     * Имя автора
     * @var [type]
     */
    protected $author = 'Artem w1575';

    /**
     * Содержит в себе вресию текущего класса
     * @var [type]
     */
    public $classVersion = 1;

    /**
     * Конструктор
     * @param [type] $string [description]
     */
    public function __construct($string)
    {
        $this->string = $string;
    }

    /**
     * Возвращает имя автора
     * @return [type] [description]
     */
    public function getAuthorName()
    {
        return $this->author;
    }








}
