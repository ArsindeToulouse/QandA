<?php 
namespace Core\Utils;

use Core\User\Admin;
/**
* 
*/
class Utils{

	public static function checkPostSubmit($post, Admin $user){

		if (!empty($post['submit'])) {
			return self::submit($post, $user);
		}

		return false;
	}

	private static function submit($post, Admin $user){
		$submit = $post['submit'];

		if (!empty($submit['add'])) {
			$user->add($post['add']);
			return true;
		}
		if (!empty($submit['change_pass'])) {
			return true;
		}
		if (!empty($submit['delete'])) {
			$user->delete($submit['delete']);
			return true;
		}

		return false;
	}

	public static function checkPostSubmitFormAdd($post){
		if (!empty($post['submit_form']['add'])) return true;

		return false;
	}

	public static function checkPostSubmitFormChange($post){
		if (!empty($post['submit_form']['change'])) return true;

		return false;
	}
}