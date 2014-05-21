<?php

class Plugin_responsiveslides extends Plugin
{
    var $meta = array(
        'name'       => 'Responsive Slides',
        'version'    => '0.1',
        'author'     => 'Shara Miller',
        'author_url' => 'http://kiwithing.net'
    );

    function __construct() {
        parent::__construct();
        $this->theme_root = Config::getTemplatesPath();
        $this->site_root  = Config::getSiteRoot();

        $this->plugin_path = Config::getAddOnsPath();
    }

    public function head()
    {
        $html = '<script src="'. $this->plugin_path .'/responsiveslides/js/responsiveslides.min.js"></script>' .
                '<link rel="stylesheet" href="'. $this->plugin_path .'/responsiveslides/css/responsiveslides.css" />';

        return $html;
    }

    public function index()
    {
        //Starting off with the most basic params and defaults for the slideshow.
        $name = $this->fetchParam('name', ''); //A slideshow must be named
        $auto = $this->fetchParam('auto', 'true');
        $speed = $this->fetchParam('speed', 500);
        $timeout = $this->fetchParam('timeout', 4000);
        $pager = $this->fetchParam('pager', 'false');
        $nav = $this->fetchParam('nav', 'false');
        $random = $this->fetchParam('random', 'false');
        $pause = $this->fetchParam('pause', 'false');
        $pauseControls = $this->fetchParam('pauseControls', 'true');
        $prevText = $this->fetchParam('prevText', '"Previous"');
        $nextText = $this->fetchParam('nextText', '"Next"');
        $maxwidth = $this->fetchParam('maxwidth', '""');
        $navContainer = $this->fetchParam('navContainer', '""');
        $manualControls = $this->fetchParam('manualControls', '""');
        $namespace = $this->fetchParam('namespace', '"rslides"');
        $before = $this->fetchParam('before', 'function(){}');
        $after = $this->fetchParam('after', 'function(){}');

        //Get those params in and start outputting slideshows.

        $slideJs = '<script type="text/javascript">
                     window.onload = function(){
                     jQuery(function() {
                     jQuery(".'. $name .'").responsiveSlides({
                        auto: '. $auto .',
                        speed: '. $speed .',
                        timeout: '. $timeout .',
                        pager: '. $pager .',
                        nav: '. $nav .',
                        random: '. $random .',
                        pause: '. $pause .',
                        pauseControls: '. $pauseControls .',
                        prevText: '. $prevText .',
                        nextText: '. $nextText .',
                        maxwidth: '. $maxwidth .',
                        navContainer: '. $navContainer .',
                        manualControls: '. $manualControls .',
                        namespace: '. $namespace .',
                        before: '. $before .',
                        after: '. $after .'
                    }); }); };
                    </script>';

        $output = $slideJs;

        return $output;
    }

    /**
     *  Pull in Flickr images if requested.
     */
    public function flickr()
	{
        //TODO: Flickr set and image integration.
	}
}