<?php
use App\Models\Menu;

//navbar menu section
function getMenu($handle,$attributes)
{
	$menu = Menu::with(['children'=>function($query){$query->whereStatus(1)->orderBy('weight','ASC');}])->whereSlug($handle)->whereStatus(1)->first();

	if(!$menu)
		return false;
	
	echo '<ul ';

	foreach($attributes as $key=>$val)
	{
		echo $key.'="'.$val.'" ';
	}

	echo 'class="menu">'."\n\r".getSubMenu($menu->children)."\n\r".'</ul>'."\n";
}

function getSubMenu($children)
{
	$result = '';

	foreach($children as $submenu)
	{
		$result .= '<li class="menu-item-has-children">'."\n\r";
		$result .= '<a href="'.url($submenu->link.'').'">'.$submenu->name.'</a>'."\n\r";

		if(count($submenu->children)>0)
		{
			$result .= '<ul class="sub-menu">'."\n\r".getSubMenu($submenu->children)."\n\r".'</ul>'."\n\r";
		}

		$result .= '</li>'."\n\r";
	}

	return $result;
}


///end