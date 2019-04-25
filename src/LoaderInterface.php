<?php

namespace Will;

interface LoaderInterface
{
    /**
     * @return \Generator
     * @throws \Exception
     */
    public function getItems();

    /**
     * @return array
     * @throws \Exception
     */
    public function getItemsArray();

}
