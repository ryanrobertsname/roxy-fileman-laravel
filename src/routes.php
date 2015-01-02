<?php

/**
 * Routes
 */
Route::group(array('prefix' => Config::get('roxy-fileman-laravel::uri'), 'before' => \Config::get('roxy-fileman-laravel::base_auth_filters')), function()
{

	Route::get('/', ['as' => 'fileman_index', 'before' => [], function(){

		return View::make('roxy-fileman-laravel::index', ['assets_path' => \Config::get('roxy-fileman-laravel::assets_uri')]);

	}]);

	Route::any('/dirtree', ['as' => 'fileman_dirtree', 'before' => [], function(){

		require __DIR__.'/php/dirtree.php';

		return;

	}]);

	Route::any('/fileslist', ['as' => 'fileman_fileslists', 'before' => [], function(){

		require __DIR__.'/php/fileslist.php';

		return;

	}]);

	Route::any('/createdir', ['as' => 'fileman_createdir', 'before' => \Config::get('roxy-fileman-laravel::create_dir_auth_filters'), function(){

		require __DIR__.'/php/createdir.php';

		return;

	}]);

	Route::any('/deletedir', ['as' => 'fileman_deletedir', 'before' => \Config::get('roxy-fileman-laravel::delete_dir_auth_filters'), function(){

		require __DIR__.'/php/deletedir.php';

		return;

	}]);

	Route::any('/movedir', ['as' => 'fileman_movedir', 'before' => \Config::get('roxy-fileman-laravel::move_dir_auth_filters'), function(){

		require __DIR__.'/php/movedir.php';

		return;

	}]);

	Route::any('/copydir', ['as' => 'fileman_copydir', 'before' => \Config::get('roxy-fileman-laravel::copy_dir_auth_filters'), function(){

		require __DIR__.'/php/copydir.php';

		return;

	}]);

	Route::any('/renamedir', ['as' => 'fileman_renamedir', 'before' => \Config::get('roxy-fileman-laravel::rename_dir_auth_filters'), function(){

		require __DIR__.'/php/renamedir.php';

		return;

	}]);

	Route::any('/upload', ['as' => 'fileman_upload', 'before' => \Config::get('roxy-fileman-laravel::upload_auth_filters'), function(){

		require __DIR__.'/php/upload.php';

		return;

	}]);

	Route::any('/download', ['as' => 'fileman_download', 'before' => \Config::get('roxy-fileman-laravel::download_auth_filters'), function(){

		require __DIR__.'/php/download.php';

		return;

	}]);

	Route::any('/downloaddir', ['as' => 'fileman_downloaddir', 'before' => \Config::get('roxy-fileman-laravel::download_dir_auth_filters'), function(){

		require __DIR__.'/php/downloaddir.php';

		return;

	}]);

	Route::any('/deletefile', ['as' => 'fileman_deletefile', 'before' => \Config::get('roxy-fileman-laravel::delete_file_auth_filters'), function(){

		require __DIR__.'/php/deletefile.php';

		return;

	}]);

	Route::any('/movefile', ['as' => 'fileman_movefile', 'before' => \Config::get('roxy-fileman-laravel::move_file_auth_filters'), function(){

		require __DIR__.'/php/movefile.php';

		return;

	}]);

	Route::any('/copyfile', ['as' => 'fileman_copyfile', 'before' => \Config::get('roxy-fileman-laravel::copy_file_auth_filters'), function(){

		require __DIR__.'/php/copyfile.php';

		return;

	}]);

	Route::any('/renamefile', ['as' => 'fileman_renamefile', 'before' => \Config::get('roxy-fileman-laravel::rename_file_auth_filters'), function(){

		require __DIR__.'/php/renamefile.php';

		return;

	}]);

	Route::any('/thumb', ['as' => 'fileman_thumb', 'before' => [], function(){

		require __DIR__.'/php/thumb.php';

		return;

	}]);

});