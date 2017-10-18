<?php
/**
 * Created by PhpStorm.
 * User: ANDRES
 * Date: 17/10/2017
 * Time: 15:57
 */

class InsertCommand implements iCommand
{
    protected $article;

    public function __construct(Article $article)
    {
        $this->article = $article;
    }

    public function exec()
    {
        echo '*'. __CLASS__ .'-> exec</br>';
        return $this->article->insert();
    }
}