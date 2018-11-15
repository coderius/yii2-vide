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

class MagnificPopup extends Widget
{
    
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        
        //
        
    } 
    
    /**
     * @inheritdoc
     */
    public function run()
    {
        $view = $this->getView();
        echo "vide";
    }
    
    
    
    
}