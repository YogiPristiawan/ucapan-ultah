<?php

namespace App\Controllers;

use App\Models\wishModel;

class Home extends BaseController
{
	public function index()
	{
		return view('home');
	}

	public function whoUser()
	{
		if ($this->request->isAJAX()) {
			$value = $this->request->getVar('value');

			$data = [
				'value' => $value
			];

			$response = view('user', $data);
			return json_encode($response);
		}
	}

	public function tanya()
	{
		if ($this->request->isAJAX()) {

			$response = view('ultah');
			return json_encode($response);
		}
	}

	public function wish()
	{
		if ($this->request->isAJAX()) {
			$response = view('wish');
			return json_encode($response);
		}
	}

	public function thanks()
	{
		if ($this->request->isAJAX()) {

			$wish = new wishModel();

			$pQuery = $wish->prepare(function ($wish) {
				return $wish->table('wish')
					->insert([
						'created_at' => '?',
						'wishes' => '?'
					]);
			});

			$created_at = date('Y-m-d H:i:s', strtotime('now'));
			$wishes = htmlspecialchars($this->request->getVar('content'));

			$response = view('thanks');
			echo json_encode($response);
			return $pQuery->execute($created_at, $wishes);
		}
	}

	public function ucapan()
	{
		if ($this->request->isAJAX()) {
			$value = $this->request->getVar('value');
			$data = [
				'value' => $value
			];

			$response = view('ucapan', $data);
			return json_encode($response);
		}
	}

	public function make_wish()
	{
		if ($this->request->isAJAX()) {
		}
	}
	//--------------------------------------------------------------------

}
