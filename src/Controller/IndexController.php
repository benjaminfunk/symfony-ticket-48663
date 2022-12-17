<?php

namespace App\Controller;

use App\Entity\Test;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class IndexController extends AbstractController
{
	#[Route(
		path: '/'
	)]
	public function index(ValidatorInterface $validator): Response
	{
		$test = new Test();
		$test->file = new File('../testfile.txt');

		// this one works like expected (validation fail)
		dump($validator->validate($test, null, 'Default'));

		// this one should throw a validation error
		dump($validator->validate($test, null, 'file'));

		return new Response('');
	}
}