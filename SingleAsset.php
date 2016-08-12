<?php

namespace vova07\fileapi;

use yii\web\AssetBundle;

/**
 * Single upload asset bundle.
 */
class SingleAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
	public $sourcePath = '@vendor/vova07/yii2-fileapi-widget/assets';

    /**
     * @inheritdoc
     */
	public $css = [
	    'css/single.css'
	];

    /**
     * @inheritdoc
     */
	public $depends = [
		'vova07\fileapi\Asset'
	];
}
