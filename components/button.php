<?php

function button(String $text, String $id, $type = 'primary')
{


	if ($type == 'primary') {

		return "<button class='flex items-center justify-center gap-2 bg-indigo-600 border border-indigo-500  h-8 p-2 rounded-md hover:bg-indigo-600/50 active:bg-indigo-600' id='$id'>$text </button>";
	}
}
