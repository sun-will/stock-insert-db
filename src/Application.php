<?php

namespace Will;

use Will\CsvLoader;
use Will\Database;

class Application 
{	
    /**
     * @var bool
     */
	var $isTest;
    
    /**
     * @var resouce
     */
	var $loader;

    /**
     * @var resource
     */
	var $db;

    /**
     * @var int
     */
	var $insertData;

    /**
     * @var int
     */
	var $failedData;

	/**
     * To Follow
     */
    public function __construct($filename = null, $headers = null)
    {
		$this->loader = new CsvLoader('../stock.csv');
		$this->db = new Database('wrenTest', 'root', 'abcd1234', '10.0.0.1'); 

    }

	/**
     * To Follow
     */
	public function run($isTest = false) 
	{
		foreach ($this->loader->getItems() as $item) {
		    $data = $this->prepare($item);
		    if (!$data) {
		    	$this->failedData++;
		    	continue;
		    }
		    $result = false;
		    if (!$isTest){
			    $result = $this->db->insert(
					'tblProductData', $data 
				);
		    }
			if ($result !== false) {
			    $this->insertData++;
			}
		}
		$this->echo();
	}

	/**
     * To Follow
     */
	private function prepare($item)
	{
		if (!isset($item['Stock']) ||
		    !isset($item['Cost in GBP']) || 
	    	(int)$item['Stock'] < 10 ||
	    	(int)$item['Cost in GBP'] < 5
	    ) {
	    	return false;
	    }
	    $data = array(
			'strProductCode' => $item['Product Code'],
			'strProductName' => $item['Product Name'],
			'strProductDesc' => $item['Product Description'],
			'intStock' => $item['Stock'],
			'dcmPrice' => $item['Cost in GBP']
		);
		if ($item['Discontinued'] == 'yes')
		{
			$data['dtmDiscontinued'] = date('Y-m-d H:i:s');
		}
		return $data;
	}

	/**
     * To Follow
     */
	public function echo()
	{
		echo "Number of Insert Data " . $this->insertData;
		echo "Number of Failed Data " . $this->failedData;
	}
}