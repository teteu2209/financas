<?php
/**
 * Created by PhpStorm.
 * User: teteu
 * Date: 15/10/2017
 * Time: 20:30
 */

namespace SONFin\View\Twig;


use SONFin\Auth\AuthInterface;

class TwigGlobals extends \Twig_Extension implements \Twig_Extension_GlobalsInterface
{
    /**
     * @var AuthInterface
     */
    private $auth;

    /**
     * TwigGlobals constructor.
     *
     * @param AuthInterface $auth
     */
    public function __construct(AuthInterface $auth)
    {
        $this->auth = $auth;
    }

    public function getGlobals()
    {
        return [
            'Auth'=>$this->auth
        ];
    }
}

