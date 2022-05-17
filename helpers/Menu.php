<?php
/**
 * Menu Items
 * All Project Menu
 * @category  Menu List
 */

class Menu{
	
	
			public static $navbarsideleft = array(
		array(
			'path' => 'home', 
			'label' => 'Home', 
			'icon' => '<i class="fa fa-home fa-2x"></i>'
		),
		
		array(
			'path' => 'peminjaman', 
			'label' => 'Peminjaman', 
			'icon' => '<i class="fa fa-cubes fa-2x"></i>'
		),
		
		array(
			'path' => 'barang_masuk', 
			'label' => 'Pembelian Barang', 
			'icon' => '<i class="fa fa-cart-plus fa-2x"></i>'
		),
		
		array(
			'path' => '/', 
			'label' => 'Pengaturan', 
			'icon' => '<i class="fa fa-gear fa-2x"></i>','submenu' => array(
		array(
			'path' => 'divisi', 
			'label' => 'Divisi', 
			'icon' => '<i class="fa fa-institution "></i>'
		),
		
		array(
			'path' => 'stok_barang', 
			'label' => 'Stok Barang', 
			'icon' => '<i class="fa fa-dropbox "></i>'
		)
	)
		),
		
		array(
			'path' => 'user', 
			'label' => 'User', 
			'icon' => '<i class="fa fa-group fa-2x"></i>','submenu' => array(
		array(
			'path' => 'user', 
			'label' => 'Users', 
			'icon' => '<i class="fa fa-user "></i>'
		),
		
		array(
			'path' => 'roles', 
			'label' => 'Roles', 
			'icon' => '<i class="fa fa-list-ol "></i>'
		),
		
		array(
			'path' => 'role_permissions', 
			'label' => 'Role Permissions', 
			'icon' => '<i class="fa fa-bookmark "></i>'
		)
	)
		)
	);
		
	
	
}