<?php

namespace App\Models;

use App\Model;
use App\MultiException;

/**
 * Class Article
 * @package App\Models
 *
 * @property \App\Models\Article $author
 */
class Perfomance extends Model
{
    protected static $table = 'perfomance';

    public $title;
    public $lead;
    public $scene_id;
    public $time_id;

    public function __get($prop)
    {
        if ($prop == 'date') {

            return Date::findById($this->time_id);

        } elseif ($prop == 'scene'){
            return Scene::findById($this->scene_id);
        } elseif ($prop == 'author'){
            return Author::findById($this->scene_id);

        } else {
            return null;
        }
    }

    public function __isset($prop)
    {
        if ($prop == 'date') {
            return true;
        } elseif($prop == 'scene'){
            return true;
        } elseif($prop == 'author'){
            return true;
        }
        else return false;
    }

    public function fill($arr)
    {
        $errors = new MultiException();
        if (empty($arr['title'])) {
            $errors->add(new \Exception('Пустое поле заголовок'));
        }
        if (empty($arr['lead'])) {
            $errors->add(new \Exception('Пустое поле текст новости'));
        }
        if (0 != count($errors)) {
            throw $errors;
        }
        parent::fill($arr);
    }
}