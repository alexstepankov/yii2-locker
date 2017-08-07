<?php

namespace notamedia\locker;

use yii\base\BootstrapInterface;

/**
 * A bootstrapping component as well as an localization initializator.
 * The following code shows how you can use this class as a bootstrapping component.
 *
 * ```php
 * "extra": {
 *     "bootstrap": "notamedia\\locker\\Bootstrap"
 * }
 * ```
 */
class Bootstrap implements BootstrapInterface
{
    /**
     * @inheritdoc
     */
    public function bootstrap($app)
    {
        if (!isset($app->i18n->translations['notamedia*']) &&
            !isset($app->i18n->translations['notamedia/locker/*']) &&
            !isset($app->i18n->translations['notamedia-locker'])
        ) {
            $app->i18n->translations['notamedia/locker/*'] = [
                'class' => \yii\i18n\PhpMessageSource::class,
                'sourceLanguage' => 'en',
                'basePath' => '@vendor/yii2-locker/resources/messages',
                'fileMap' => [
                    'notamedia/locker/labels' => 'labels.php',
                    'notamedia/locker/errors' => 'errors.php',
                ]
            ];
        }
    }
}
