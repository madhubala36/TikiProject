<?php
// (c) Copyright 2002-2016 by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: SortException.php 57971 2016-03-17 20:09:05Z jonnybradley $

class Search_Elastic_SortException extends Search_Elastic_Exception
{
	private $field;

	function __construct($field)
	{
		$this->field = $field;
		parent::__construct(tr('Sort field %0 not found in index', $this->field));
	}
}
