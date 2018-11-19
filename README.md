Yii2-vide
==========

Yii 2.0 widget that allows you to create video backgrounds. 
The yii2-vide widget is a wrapper for the [Vide jQuery plugin](https://github.com/VodkaBears/Vide#readme) 


Installation
------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require coderius/yii2-vide "@dev"
```

or add

```json
"coderius/yii2-vide" : "@dev"

Basic usage.
-----------
* In view:
```php
<div class="vide-box" style="width: 1000px; height: 500px;"></div>

       <?php echo \coderius\vide\Vide::widget(
           [
               'target' => '.vide-box',
               'path' => [
                    'mp4' => 'http://vodkabears.github.io/vide/video/ocean.mp4',
                    'poster' => 'https://html5backgroundvideos.com/converter/images/converter-screenshot.png'
               ],
               'clientOptions' => [
                    'volume' => 1,
                    'playbackRate' => 1,
                    'muted' => true,
                    'loop' => true,
                    'autoplay' => true,
                    'position' => '50% 50%', // Similar to the CSS `background-position` property.
                    'posterType' => 'detect', // Poster image type. "detect" — auto-detection; "none" — no poster; "jpg", "png", "gif",... - extensions.
                    'resizing' => true, // Auto-resizing, read: https://github.com/VodkaBears/Vide#resizing
                    'bgColor' => 'transparent', // Allow custom background-color for Vide div,
                    'className' => '' // Add custom CSS class to Vide div
               ]
           ]
       ); ?>          

```

More info about options look in: 
[vide jQuery plugin](https://github.com/VodkaBears/Vide#readme)

License
--------
The MIT License (MIT). Please see [License File](https://github.com/coderius/yii2-vide/blob/master/LICENSE.md) for more information.
