<?php

class Champion extends Illuminate\Database\Eloquent\Model {

	/**
	 * @return mixed
	 */
	public static function getChampions()
	{


		return self::select('id', 'name')->get();
	}

	/**
	 * @param $name
	 * @return string
	 */
	public static function getAvatarChamp($name)
	{
		//$clean = preg_replace('/[,.!?]*([-_]+)[,.!?]*/', '\1', preg_replace('/\b[.,?!]+|[.,!?]+\b/', '', $name));
		$clean = preg_replace('/\s+/', '', trim($name));
		$clean = preg_replace('/\'/', '', trim($clean));
		$clean = preg_replace('/\./', '', trim($clean));
		$img = "<img src='./img/champs/" . $clean . ".png' style='margin: auto; display: block; width:110px;'
		 d class='btn btn-default' data-container='body' data-toggle='popover' data-placement='bottom' data-content='Vivamus sagittis lacus vel augue laoreet rutrum faucibus.' describedby='popover360693".$clean."' data-original-title='' title='' class='btn btn-default'/> ";
		return $img;
	}
}