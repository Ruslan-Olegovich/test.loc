<?php

/**
 * Класс работает со строкой, которую в него засунули при
 * инициализации
 *
 */
class WClass
{
    var $hello;

    function show1() {
      return "{$this->hello}";
    }
      var $w;

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
    public function __construct($hello)
    {
        $this->hello = $hello;
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
