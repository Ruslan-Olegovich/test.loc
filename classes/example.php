<?php

/**
 * Класс работает со строкой, которую в него засунули при
 * инициализации
 *
 */
class WClass
{

    function getName() {
        // 1. какая область видимости у этого метода? где комментарий того, что
        // делает эта функция?

        //по умолчанию public. Эта функция выводит строку $string.

        // 2. имена методов и свойств должны начинаться с маленьиз букв
        // но каждое последуюущее слово должно начинаться с больгой буквы

        echo $this->string;
        // почему отступ сделан одним пробелом?
        // должно быть 4
        //сделал
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

    public function strLen(){

        return mb_strlen($this->string);
    }





}
