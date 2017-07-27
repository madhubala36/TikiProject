<?php
// (c) Copyright 2002-2016 by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: StructureMoveUp.php 57971 2016-03-17 20:09:05Z jonnybradley $

/**
 * Class for structure_move_up events
 */
class Reports_Send_EmailBuilder_StructureMoveUp extends Reports_Send_EmailBuilder_Abstract
{
	public function getTitle()
	{
		return tr('Wiki pages moved up in a structure tree:');
	}

	public function getOutput(array $change)
	{
		$output = tr(
			"%0 moved a wiki page up in a structure tree",
			"<u>{$change['user']}</u>"
		);

		return $output;
	}
}
