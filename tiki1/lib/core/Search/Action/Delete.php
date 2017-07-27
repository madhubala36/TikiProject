<?php
// (c) Copyright 2002-2016 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: Delete.php 60876 2017-01-12 15:03:09Z kroky6 $

class Search_Action_Delete implements Search_Action_Action
{
	function getValues()
	{
		return array(
			'object_type' => true,
			'object_id' => true,
		);
	}

	function validate(JitFilter $data)
	{
		$object_type = $data->object_type->text();

		if ($object_type != 'file') {
			throw new Search_Action_Exception(tr('Cannot apply delete action to an object type %0.', $object_type));
		}

		return true;
	}

	function execute(JitFilter $data)
	{
		$object_type = $data->object_type->text();

		switch ($object_type) {
		case 'file':
			$fileId = $data->object_id->int();
			$filegallib = TikiLib::lib('filegal');
			$info = $filegallib->get_file_info($fileId);

			if (! $info) {
				throw new Search_Action_Exception(tr('Cannot find file to delete: %0.', $fileId));
			}

			$filegallib->remove_file($info);

			break;
		default:
			return false;
		}

		return true;
	}

	function requiresInput(JitFilter $data) {
		return false;
	}
}

