<?php
namespace onstuimig\imagetransformoptimizer;

use Craft;
use craft\base\Plugin;
use craft\events\ImageTransformerOperationEvent;
use craft\imagetransforms\ImageTransformer;
use Spatie\ImageOptimizer\OptimizerChainFactory;
use yii\base\Event;

/**
 * Image Transform Optimizer
 * 
 * @author Onstuimig
 * @package ImageTransformOptimizer
 */
class ImageTransformOptimizer extends Plugin
{

    /**
     * @inheritDoc
     */
	public function init()
	{
		parent::init();

		if (function_exists("proc_open")) {
			Event::on(
                ImageTransformer::class,
                ImageTransformer::EVENT_TRANSFORM_IMAGE,
                function (ImageTransformerOperationEvent $event) {
                    $optimizerChain = OptimizerChainFactory::create();
                    $optimizerChain->optimize($event->tempPath);
                }
            );
		}

		Craft::info(
            Craft::t(
                'image-transform-optimizer',
                '{name} plugin loaded',
                [ 'name' => $this->name ]
            ),
            __METHOD__
        );
	}

}
