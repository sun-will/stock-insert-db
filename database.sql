-- Create database

CREATE DATABASE wrenTest;

-- and use...

USE wrenTest;

-- Create table for data

CREATE TABLE tblProductData (
  intProductDataId int(10) unsigned NOT NULL AUTO_INCREMENT,
  strProductCode varchar(10) NOT NULL,	
  strProductName varchar(50) NOT NULL,
  strProductDesc varchar(255) NOT NULL,
  dtmAdded datetime DEFAULT NULL,
  dtmDiscontinued datetime DEFAULT NULL,
  stmTimestamp timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (intProductDataId),
  UNIQUE KEY (strProductCode)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Stores product data';

-- Add 2 column data for supplier as per instruction

ALTER TABLE tblProductData
  ADD COLUMN intStock int(8) NOT NULL,
  ADD COLUMN dcmPrice DECIMAL(13, 2) NOT NULL;

ALTER TABLE tblProductData 
  CHANGE `dtmAdded` `dtmAdded` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
