<?php

namespace App\Validator\Constraints;

use Attribute;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\Compound;

#[Attribute]
class FileRequirements extends Compound
{
	protected function getConstraints(array $options): array
	{
		return [
			new Assert\File(
				maxSize: '1'
			)
		];
	}
}