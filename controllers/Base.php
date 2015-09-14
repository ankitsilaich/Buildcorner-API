<?php
namespace controllers;
use Slim\Slim;
class Base
{
    protected $app;
    protected $data;
    public function __construct()
    {
        $this->app = Slim::getInstance();
        $this->data = array();

        /** prepared message info */
        $this->data['message'] = array(
            'error'    => array(),
            'info'    => array(),
            'debug'    => array(),
        );
        /** global javascript var */
        $this->data['global'] = array();

            }




    protected function message($message, $type='info')
    {
        $this->data['message'][$type] = $message;
    }
    /**
     * register global variable to be accessed via javascript
     */
    protected function publish($key,$val)
    {
        $this->data['global'][$key] =  $val;
    }
    /**
     * remove published variable from registry
     */
    protected function unpublish($key)
    {
        unset($this->data['global'][$key]);
    }
    /**
     * add custom meta tags to the page
     */
    protected function meta($name, $content)
    {
        $this->data['meta'][$name] = $content;
    }


    /**
     * generate siteUrl
     */
    protected function siteUrl($path, $includeIndex = false)
    {
        $path = trim($path, '/');
        return $this->data['baseUrl'].$path;
    }
}
