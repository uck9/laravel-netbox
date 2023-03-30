<?php

namespace gjsbrt\NetBox\Api\Extras;

use gjsbrt\NetBox\Api\AbstractApi;

class ObjectChanges extends AbstractApi
{
    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function list($params=[])
    {
        return $this->get("/extras/object-changes/", $params);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function show($id, $params=[])
    {
        return $this->get("/extras/object-changes/".$id."/", $params);
    }
}
