<?php

/**
 * Класс работает со строкой, которую в него засунули при
 * инициализации
 *
 */
class WClass
{

    // зачем это свойство?

    function Getname() {
      echo $this->string;
    }
    // зачем отображение свойства которое ты сам сделал?

    //зачем это свойство?

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
