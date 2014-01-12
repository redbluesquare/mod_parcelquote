<?php
defined('_JEXEC') or die;

class modParcelQuoteHelper
{
	function getQuote($params)
	{
		$input = new JInput;
		$zone = $input->get('zone', null);
		$service = $input->get('service', null);
		$weight = $input->get('weight', null);
		$weight = ceil($weight);
		if($zone == null || $service == null || $weight == null)
			return false;
		
		$db = JFactory::getDBO();
		$query = $db->getQuery(TRUE);
		if(!is_numeric($weight))
		{
			echo "Please enter only numbers into the \"Weight\" field.";
			return false;
		}
		else
		{
			$query->select('p.price');
    		$query->from('#__parcel_quote as p');
    		$query->where('p.zone = ' . (int) $this->zone);
    		$query->where('p.zone = ' . (int) $this->service);
    		return $query;
		}
	}
}
