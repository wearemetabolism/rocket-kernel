<?php
/**
 * User: Paul Coudeville <paul@metabolism.fr>
 */


namespace Rocket\Application;

/**
 * Class SingletonTrait
 *
 * @package Rocket\Application
 */
trait SingletonTrait {

    /**
     * Instance
     *
     * @var Singleton
     */
    protected static $_instance;


    /**
     * Constructor
     *
     * @return void
     */
    protected function __construct() {}

    /**
     * Get instance
     *
     * @return Singleton
     */
    public static function getInstance() {
        if (null === static::$_instance) {
            static::$_instance = new static();
        }

        return static::$_instance;
    }
}
