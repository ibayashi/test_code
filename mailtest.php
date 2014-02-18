<?php
	class Controller_Mailtest extends Controller{
		public function action_index()
		{
			$email = Email::forge();
			$email->from('info@ms-fun.com','ManagementSupport');
			$email->to('anri@gmail.com','井林杏里');
			$email->subject('テストメールです。');
			$email->body('これはテストメールです。');

			$email->send();
			return Response::forge(View::forge('mailtest/index'));
		}
	}
?>