<?php

namespace App\Entity;

use App\Validator\Constraints\FileRequirements;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;

class Test
{
	#[Assert\When(
		expression: 'true',
		constraints: [
			new FileRequirements()
		],
		groups: [
//			'Default', // "Default" shouldn't be mandatory, but without it throws an exception
			'file'
		]
	)]
	public File $file;
}