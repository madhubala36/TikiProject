<?php
// (c) Copyright 2002-2016 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: Interface.php 60691 2016-12-16 14:53:45Z xavidp $

interface Search_Formatter_Plugin_Interface
{
	const FORMAT_WIKI = 'wiki';
	const FORMAT_HTML = 'html';
  const FORMAT_ARRAY = 'array';

	function getFields();

	function getFormat();

	function prepareEntry($entry);

	function renderEntries(Search_ResultSet $entries);
}
