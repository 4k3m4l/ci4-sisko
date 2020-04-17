<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Login_model;

class Login extends Controller
{

	public function index()
	{
		$msg['info'] = "";
		$session = session();
		if ($session->validated) {
			return redirect()->to('/adm');
		} else {
			echo view('login.php', $msg);
		}
	}

	public function process()
	{
		$msg['info'] = "";
		$session = session();
		if ($session->validate) {
			return redirect()->to('/adm');
		} else {
			// Validate the user can login
			$login_model = new Login_model();
			$result = $login_model->validasi();
			// Now we verify the result
			if (!$result) {
				// If user did not validate, then show them login page again
				$msg['info'] = '<font color=red>Invalid username and/or password.</font><br />';
				echo view('login.php', $msg);
			} else {
				// If user did validate, 
				// Send them to members area
				return redirect()->to('adm');
			}
		}
	}
}
