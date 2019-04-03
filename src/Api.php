<?php
/**
 * Created by PhpStorm.
 * User: Matthew
 * Date: 22/04/2016
 * Time: 5:55 PM
 */

namespace Mpclarkson\Laravel\Freshdesk;

use Freshdesk\Api as Freshdesk;

class Api {

    /**
     * @var Freshdesk
     */
    private $api;

    /**
     * Api constructor.
     * @param $key
     * @param $domain
     */
    public function __construct($key, $domain)
    {
        $this->api = new Freshdesk($key, $domain);
    }

    /**
     * @return \Freshdesk\Resources\Solution
     */
    public function solutionCategories($locale = null)
    {
        return $this->api->solutions->categories($locale);
    }

    /**
     * @return \Freshdesk\Resources\Solution
     */
    public function solutionFolders($id,$locale = null)
    {

        return $this->api->solutions->folders($id,$locale);
    }

    /**
     * @return \Freshdesk\Resources\Solution
     */
    public function solutionArticles($id, $locale = null)
    {

        return $this->api->solutions->articles($id,$locale);
    }
}
