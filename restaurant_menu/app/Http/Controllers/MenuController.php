<?php


namespace App\Http\Controllers;

use App\User;
use App\MenuItem;
use App\MenuType;

class MenuController extends Controller
{
    public function __construct()
	{
		
	}
	
	// use index to return the view, passing in the menu types.
	public function index()
	{		
		$menuTypes = MenuType::all();
		return view('menu.index',
				array('menuTypes' => $menuTypes));
	}
	
	public function getMenuItems()
	{
		$menu_array = array();
		
		$menuTypes = MenuType::all();
		foreach( $menuTypes as $menuType )
		{
			//reset the array just in case
			$menu_type_array = array();
			$menuTypeId = $menuType->id;
			$menuItems = MenuItem::where('menu_type_id', '=', $menuTypeId)->get();
			
			// Now, we construct the main object being passed back to the view. A more structured array that can
			// easily be handled. Might as well do the dirty work here.
			$menu_type_array['id'] = $menuTypeId;
			$menu_type_array['menu_type_name'] = $menuType->menu_type_name;
			$menu_type_array['menu_items'] = $menuItems;
			
			$menu_array[] = $menu_type_array;
			
		}
		
		return array(
			'menu' => $menu_array,
			'menuTypes' => $menuTypes
		);
		
	}

	public function createMenuItem()
	{
		$this->validate(request(), [
			'menuItem' => 'required',
			'price' => 'required',
			'description' => 'required',
			'menuType' => 'required'
		]);

		MenuItem::forceCreate([
			'menu_type_id' => request('menuType'),
			'menu_item' => request('menuItem'),
			'item_description' => request('description'),
			'price' => request('price')
		]);
		
		return ['message' => 'Menu item added successfully'];
	}
}
