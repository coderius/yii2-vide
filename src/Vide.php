<?php

/**
 * @package yii2-extentions
 * @license BSD-3-Clause
 * @copyright Copyright (C) 2012-2018 Sergio coderius <coderius>
 * @contacts sunrise4fun@gmail.com - Have suggestions, contact me :) 
 * @link https://github.com/coderius - My github
 */
namespace coderius\vide;

use Yii;
use yii\base\Widget;
use yii\helpers\Json;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use Closure;
use yii\base\InvalidConfigException;

class Vide extends Widget
{
    
    public $target;

    public $path;

    public $clientOptions = [];



    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        
        if (empty($this->target) || $this->target === null) {
            throw new InvalidConfigException('"Vide::$target" must be set');
        }

        if ($this->path === null) {
            throw new InvalidConfigException('"Vide::$path" must be set');
        }
        
    } 
    
    /**
     * @inheritdoc
     */
    public function run()
    {
        $view = $this->getView();
        VideAsset::register($view);

        $path = Json::encode($this->path);
        $options = Json::encode($this->clientOptions);


        $js = "jQuery('{$this->target}').vide(" . $path . ", " . $options . ");";
        $view->registerJs($js);

    }
    
    
    
    
}