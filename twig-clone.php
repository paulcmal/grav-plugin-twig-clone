<?php
namespace Grav\Plugin;

use Grav\Common\Page\Collection;
use Grav\Common\Plugin;
use Grav\Common\Uri;
use Grav\Common\Taxonomy;

require_once __DIR__.'/src/Twig/TwigClone.php';
use Grav\Plugin\TwigClone;

class TwigClonePlugin extends Plugin
{
    public static function getSubscribedEvents() {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0],
        ];
    }
    
    public function onPluginsInitialized() {
        if ($this->config->get('plugins.twig-clone.enabled')) {
            $this->enable([
            'onTwigExtensions' => ['onTwigExtensions', 0]
            ]);
        }
    }
    
    public function onTwigExtensions() {
        $this->grav['twig']->twig->addExtension(new TwigClone\TwigClone());
    }
}

?>
