
<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Route::get('/debug', function(){
    return view('debug');
});*/

//Patchpanel Routes
Route::get('/patchpanel', 'PatchPanelController@getData')->name('patchpanel');
Route::get('panels/create', 'PatchPanelController@create')->name('panels/create');
Route::post('panels/store_patchpanel', 'PatchPanelController@store');
Route::post('digi_store_patchpanel', 'PatchPanelController@digi_store');
Route::post('/info/search_panel/store_patchpanel', 'PatchPanelController@store');
Route::get('edit/{row}', 'UpdatePanelController@edit');
Route::post('edit/update/{row}', 'UpdatePanelController@update');
Route::get('/projects/work_orders/info/search_panel/edit/{id}', 'UpdatePanelController@edit');
Route::post('/projects/work_orders/info/search_panel/edit/update/{id}', 'UpdatePanelController@update');
Route::get('search_nfc/digi_edit_panel/{row}', 'UpdatePanelController@digi_edit');
Route::post('search_nfc/digi_edit_panel/update/{row}', 'UpdatePanelController@digi_update');
Route::get('digi_edit_panel/{row}', 'UpdatePanelController@digi_edit');
Route::post('digi_edit_panel/update/{row}', 'UpdatePanelController@digi_update');
Route::post('search_panel_ID', 'PatchPanelController@search_ID');
Route::get('info/search_panel/{id}', 'PatchPanelController@search_panelID');
Route::get('projects/work_orders/info/search_panel/{id}', 'PatchPanelController@search_panelID');
Route::get('projects/work_orders/info/search_panel/lobby/{id}/info/{type}', 'InfoController@index');
Route::get('digi_panel_search', 'PatchPanelController@digi_search')->name('digi_panel_search');

//Cable Routes
Route::get('/cables', 'CableController@getData')->name('cables');
Route::get('cables/create', 'CableController@create')->name('cables/create');
Route::post('cables/store_cable', 'CableController@store');
Route::post('digi_store_cable', 'CableController@digi_store');
Route::get('lobby_clo/cables/edit_cable/{cloID}', 'UpdateCableController@edit');
Route::post('/lobby_clo/cables/edit_cable/update/{row}', 'UpdateCableController@update');
Route::get('lobby/{pnlID}/cables/edit_cable/{row}', 'UpdateCableController@edit');
Route::get('lobby/{pnlID}/edit_cable/{row}', 'UpdateCableController@edit1');
Route::get('/edit_cable/{row}', 'UpdateCableController@edit');
Route::post('edit_cable/update/{row}', 'UpdateCableController@update');
Route::get('search_nfc/edit_cable/{row}', 'UpdateCableController@digi_edit');
Route::post('search_nfc/edit_cable/update/{row}', 'UpdateCableController@digi_update');
Route::post('lobby/{pnlID}/edit_cable/update/{row}', 'UpdateCableController@update1');
Route::post('search_cable_pID', 'CableController@search_pID');
Route::post('search_cable_cID', 'CableController@search_cID');
Route::get('lobby/{pnlID}/cables/{type}', 'CableController@search_panel_ID');
Route::get('lobby_clo/cables/{cloID}', 'CableController@search_closure_ID');
Route::get('info/manhole/clo_search/lobby_clo/cables/{cloID}', 'CableController@search_closure_ID');
Route::get('info/aerial_network/clo_search/lobby_clo/cables/{cloID}', 'CableController@search_closure_ID');
Route::get('projects/work_orders/info/manhole/clo_search/lobby_clo/cables/{cloID}', 'CableController@search_closure_ID');
Route::get('projects/work_orders/info/aerial_network/clo_search/lobby_clo/cables/{cloID}', 'CableController@search_closure_ID');
Route::get('search_nfc/lobby_clo/cables/{cloID}', 'CableController@digi');
Route::get('clo_search/lobby_clo/cables/{cloID}', 'CableController@search_closure_ID');
Route::get('cables/{cloID}', 'CableController@search_manhole_ID');
Route::get('info/manhole/clo_search/lobby_clo/cables/edit_cable/{cloID}', 'UpdateCableController@edit');
Route::post('info/manhole/clo_search/lobby_clo/cables/edit_cable/update/{row}', 'UpdateCableController@update');
Route::get('info/aerial_network/clo_search/lobby_clo/cables/edit_cable/{cloID}', 'UpdateCableController@edit');
Route::post('info/aerial_network/clo_search/lobby_clo/cables/edit_cable/update/{row}', 'UpdateCableController@update');
Route::get('projects/work_orders/info/manhole/clo_search/lobby_clo/cables/edit_cable/{cloID}', 'UpdateCableController@edit');
Route::post('projects/work_orders/info/manhole/clo_search/lobby_clo/cables/edit_cable/update/{row}', 'UpdateCableController@update');
Route::get('projects/work_orders/info/aerial_network/clo_search/lobby_clo/cables/edit_cable/{cloID}', 'UpdateCableController@edit');
Route::post('projects/work_orders/info/aerial_network/clo_search/lobby_clo/cables/edit_cable/update/{row}', 'UpdateCableController@update');
Route::get('clo_search/lobby_clo/cables/edit_cable/{cloID}', 'UpdateCableController@edit');
Route::post('clo_search/lobby_clo/cables/edit_cable/update/{row}', 'UpdateCableController@update');
Route::get('info/clo_search/lobby_clo/cables/{cloID}', 'CableController@search_closure_ID');
Route::get('info/clo_search/lobby_clo/cables/edit_cable/{cloID}', 'UpdateCableController@edit');
Route::post('info/clo_search/lobby_clo/cables/edit_cable/update/{row}', 'UpdateCableController@update');
Route::get('projects/work_orders/info/clo_search/lobby_clo/cables/{cloID}', 'CableController@search_closure_ID');
Route::get('projects/work_orders/info/clo_search/lobby_clo/cables/edit_cable/{cloID}', 'UpdateCableController@edit');
Route::post('projects/work_orders/info/clo_search/lobby_clo/cables/edit_cable/update/{row}', 'UpdateCableController@update');
Route::get('search_nfc/digi_cables/{id}', 'CableController@digi_pSearch');
Route::get('search_nfc/digi_cables/digi_search_cable/{id}', 'CableController@digi_info');
Route::get('digi_cables/{id}', 'CableController@digi_pSearch');
Route::get('digi_cables/digi_search_cable/{id}', 'CableController@digi_info');
Route::get('patchpanel_mob/digi_cables/digi_search_cable/{id}', 'CableController@digi_info');
Route::get('search_nfc/digi_cables/digi_search_cable/edit_cable/{id}', 'UpdateCableController@digi_edit');
Route::get('digi_cables/digi_search_cable/edit_cable/{id}', 'UpdateCableController@digi_edit');
Route::get('patchpanel_mob/digi_cables/digi_search_cable/edit_cable/{id}', 'UpdateCableController@digi_edit');
Route::post('search_nfc/digi_cables/digi_search_cable/edit_cable/update/{id}', 'UpdateCableController@digi_update');
Route::get('digi_search_cable/edit_cable/{id}', 'UpdateCableController@digi_edit');
Route::post('digi_search_cable/edit_cable/update/{id}', 'UpdateCableController@digi_update');
Route::post('patchpanel_mob/digi_cables/digi_search_cable/edit_cable/update/{id}', 'UpdateCableController@digi_update');
Route::post('digi_cables/digi_search_cable/edit_cable/update/{id}', 'UpdateCableController@digi_update');
Route::get('digi_search_cable/{id}', 'CableController@digi_info');
Route::get('patchpanel_mob/digi_cables/{id}', 'CableController@digi_pSearch');
Route::get('cables_odf', 'CableController@search_panel_ID')->name('cables_odf');

//Fibre Port Routes
Route::get('/fibreport', 'FibrePortController@getData')->name('fibreport');
Route::get('fibreport/create', 'FibrePortController@create')->name('fibreport/create');
Route::post('lobby/{row}/terminal/store_fibreport', 'FibrePortController@store');
Route::post('store_fibreport', 'FibrePortController@store')->name('store_fibreport');
Route::post('info/search_panel/lobby/{row}/terminal/store_fibreport', 'FibrePortController@store');
Route::post('search_ports_pID', 'FibrePortController@search_pID');
Route::get('lobby/{pnlID}/terminal/edit_fibreport/{row}', 'UpdatePortsController@edit');
Route::post('lobby/{pnlID}/terminal/edit_fibreport/update/{row}', 'UpdatePortsController@update');
Route::post('search_ports_cID', 'FibrePortController@search_cID');
Route::get('/fibreport/{row}', 'FibrePortController@search_pID');
Route::get('lobby/fibreport/{pnlID}', 'FibrePortController@search_panel_ID');
Route::get('lobby/{row}/terminal/fibreport_panel_search/', 'FibrePortController@search_pID');
Route::get('info/search_panel/lobby/{row}/terminal/fibreport_panel_search/', 'FibrePortController@search_pID');
Route::get('projects/work_orders/info/search_panel/lobby/{id}/info/fibreport_panel_search/{row}', 'FibrePortController@search_pID');
Route::post('search_customer', 'FibrePortController@search_cust')->name('search_customer');
Route::get('edit_fibreport/{row}', 'UpdatePortsController@edit');
Route::post('edit_fibreport/update/{row}', 'UpdatePortsController@update');
Route::get('lobby/{row}/info/fibreport_panel_search/{fibre}', 'FibrePortController@search_fibre');
Route::get('lobby/{pnlID}/info/fibreport_panel_search/edit_fibreport/{fib}', 'UpdatePortsController@edit');
Route::post('lobby/{pnlID}/info/fibreport_panel_search/edit_fibreport/update/{row}', 'UpdatePortsController@update');
Route::post('lobby/{pnlID}/info/fibreport_panel_search/store_fibreport', 'FibrePortController@store');
Route::get('fibreport_digi_search', 'FibrePortController@digi_search')->name('fibreport_digi_search');
Route::post('store_digi_fibreport', 'FibrePortController@digi_store');
Route::get('edit_digi_fibreport', 'UpdatePortsController@digi_edit')->name('edit_digi_fibreport');
Route::post('update_digi/{row}/{id}', 'UpdatePortsController@update_digi');

//Patch Panel Lobby Route
Route::get('lobby/{pID}/{port}', 'LobbyController@index');
Route::get('/info/search_panel/lobby/{pID}/{port}', 'LobbyController@index');
Route::get('projects/work_orders/info/search_panel/lobby/{pID}/{port}', 'LobbyController@index');
Route::get('seach_panel_ID/lobby/{row}', 'LobbyController@index');
Route::get('lobby/{pID}/info/{type}', 'InfoController@index')->name('info');

//Terminal Routes
Route::get('lobby/{row}/terminal/{port}/', 'TerminalController@index');
Route::get('info/search_panel/lobby/{row}/terminal/{port}/', 'TerminalController@index');

//User Route
Route::get('user', 'UserController@index')->name('user');

//Manhole Route
Route::get('manhole', 'ManholeController@index')->name('manhole');
Route::get('manholes/create', 'ManholeController@create')->name('manholes/create');
Route::post('store_manhole', 'ManholeController@store');
Route::post('manholes/store_manhole', 'ManholeController@store');
Route::post('manhole/store_manhole', 'ManholeController@store');
Route::post('info/manhole/store_manhole', 'ManholeController@store');
Route::get('edit_man/{row}', 'UpdateManholeController@edit');
Route::post('edit_man/update/{row}', 'UpdateManholeController@update');
Route::get('manhole/edit_man/{row}', 'UpdateManholeController@edit');
Route::post('manhole/edit_man/update/{row}', 'UpdateManholeController@update');
Route::get('manhole/{id}', 'ManholeController@search_id');
Route::get('info/manhole/{id}', 'ManholeController@search_id');
Route::get('projects/work_orders/info/manhole/{id}', 'ManholeController@search_id');
Route::get('info/clo_search/manhole/{id}', 'ManholeController@search_id');
Route::get('projects/work_orders/info/clo_search/manhole/{id}', 'ManholeController@search_id');
Route::get('search_nfc/digi_manhole/{id}', 'ManholeController@digi_search_id');
Route::post('search_nfc/digi_manhole/store_manhole', 'ManholeController@store');
Route::get('search_nfc/digi_manhole/digi_edit_man/{id}', 'UpdateManholeController@digi_edit');
Route::post('search_nfc/digi_manhole/digi_edit_man/update/{id}', 'UpdateManholeController@digi_update');
Route::get('digi_manhole/{id}', 'ManholeController@digi_search_id');
Route::post('digi_manhole/digi_store_manhole', 'ManholeController@digi_store');
Route::post('digi_store_manhole', 'ManholeController@digi_store');
Route::get('digi_manhole/digi_edit_man/{id}', 'UpdateManholeController@digi_edit');
Route::post('digi_manhole/digi_edit_man/update/{id}', 'UpdateManholeController@digi_update');
Route::get('man_search', 'LobbyController@man')->name('man_search');
Route::post('search_man_id', 'ManholeController@search')->name('search_man_id');

//Closure Routes
Route::get('fibre_closure', 'ClosureController@index')->name('fibre_closure');
Route::get('closures/create', 'ClosureController@create')->name('closures/create');
Route::post('closures/store_joint_closure', 'ClosureController@store');
Route::post('store_joint_closure', 'ClosureController@store')->name('store_joint_closure');
Route::post('digi_store_joint_closure', 'ClosureController@digi_store')->name('digi_store_joint_closure');
Route::get('edit_clo/{row}', 'UpdateClosureController@edit');
Route::post('edit_clo/update/{row}', 'UpdateClosureController@update');
Route::get('clo_search/{row}', 'ClosureController@search_closure_id');
Route::get('info/clo_search/{row}', 'ClosureController@WOsearch_closure_id');
Route::get('info/manhole/clo_search/{row}', 'ClosureController@search_closure_id');
Route::get('info/aerial_network/clo_search/{row}', 'ClosureController@search_closure_id');
Route::get('projects/work_orders/info/manhole/clo_search/{row}', 'ClosureController@search_closure_id');
Route::get('projects/work_orders/info/aerial_network/clo_search/{row}', 'ClosureController@search_closure_id');
Route::get('projects/work_orders/info/clo_search/{row}', 'ClosureController@WOsearch_closure_id');
Route::get('projects/work_orders/info/clo_search/lobby_clo/{row}', 'LobbyController@clo');
Route::get('projects/work_orders/info/clo_search/lobby_clo/trays/{row}', 'TrayController@index');
Route::get('info/manhole/clo_search/lobby_clo/trays/{row}', 'TrayController@index');
Route::get('info/aerial_network/clo_search/lobby_clo/trays/{row}', 'TrayController@index');
Route::get('projects/work_orders/info/manhole/clo_search/lobby_clo/trays/{row}', 'TrayController@index');
Route::get('projects/work_orders/info/aerial_network/clo_search/lobby_clo/trays/{row}', 'TrayController@index');
Route::get('clo_search/edit_clo/{row}', 'UpdateClosureController@edit');
Route::post('clo_search/edit_clo/update/{row}', 'UpdateClosureController@update');
Route::get('clo_search/lobby_clo/{row}', 'LobbyController@clo');
Route::get('clo_search/lobby_clo/trays/{row}', 'TrayController@index');
Route::get('lobby_clo/{row}', 'LobbyController@clo');
Route::get('lobby_clo/trays/{row}', 'TrayController@index');
Route::get('search_nfc/lobby_clo/{row}', 'NfcController@CloLob');
Route::get('search_nfc/lobby_clo/trays/{row}', 'TrayController@index');
Route::get('search_nfc/trays/{row}', 'TrayController@digi_index');
Route::get('search_nfc/edit_clo/{row}', 'UpdateClosureController@digi_edit');
Route::post('search_nfc/edit_clo/digi_update/{row}', 'UpdateClosureController@digi_update');
Route::get('lobby_clo/trays/{row}', 'TrayController@index');
Route::get('trays/{row}', 'TrayController@digi_index');
Route::get('trays/{row}', 'TrayController@digi_index');
Route::get('edit_clo/{row}', 'UpdateClosureController@edit');
Route::post('edit_clo/update/{row}', 'UpdateClosureController@update');
Route::get('projects/work_orders/info/clo_search/edit_clo/{row}', 'UpdateClosureController@edit');
Route::post('projects/work_orders/info/clo_search/edit_clo/update/{row}', 'UpdateClosureController@update');
Route::get('digi_edit_clo/{row}', 'UpdateClosureController@digi_edit');
Route::post('digi_edit_clo/digi_update/{row}', 'UpdateClosureController@digi_update');
Route::get('search_nfc/digi_edit_clo/{row}', 'UpdateClosureController@digi_edit');
Route::post('search_nfc/digi_edit_clo/digi_update/{row}', 'UpdateClosureController@digi_update');
Route::get('info/clo_search/edit_clo/{row}', 'UpdateClosureController@edit');
Route::post('info/clo_search/edit_clo/update/{row}', 'UpdateClosureController@update');
Route::get('info/clo_search/lobby_clo/{row}', 'LobbyController@clo');
Route::get('info/manhole/clo_search/lobby_clo/{row}', 'LobbyController@clo');
Route::get('info/aerial_network/clo_search/lobby_clo/{row}', 'LobbyController@clo');
Route::get('projects/work_orders/info/manhole/clo_search/lobby_clo/{row}', 'LobbyController@clo');
Route::get('projects/work_orders/info/aerial_network/clo_search/lobby_clo/{row}', 'LobbyController@clo');
Route::get('info/clo_search/lobby_clo/trays/{row}', 'TrayController@index');
Route::get('info/clo_search/lobby_clo/trays/fibreport_closure_search/{row}', 'FibrePortController@search_cloID');
Route::post('info/clo_search/lobby_clo/trays/fibreport_closure_search/store_fibreport', 'FibrePortController@store' );
Route::get('info/lobby_clo/{row}', 'LobbyController@clo');
Route::get('info/lobby_clo/trays/{row}', 'TrayController@index');
Route::get('digi_clo_search', 'ClosureController@digi_search')->name('digi_clo_search');
Route::post('search_clo_id', 'ClosureController@search')->name('search_clo_id');

//Map Routes
Route::get('map', 'MapController@index')->name('map');
Route::get('map/{lat}/{lng}/{manID}', 'MapController@pin');
Route::get('search_nfc/digi_manhole/map/{lat}/{lng}/{manID}', 'MapController@digi_pin');
Route::get('map_aerial', 'MapController@aerial')->name('map_aerial');
Route::get('digi_map_aerial', 'MapController@digi_aerial')->name('digi_map_aerial');
Route::get('aerial_network/map_aerial/{lat}/{lng}/{aerID}', 'MapController@aerial');
Route::get('projects/work_orders/info/aerial_network/map_aerial/{lat}/{lng}/{aerID}', 'MapController@aerial');
Route::get('info/map_aerial/{lat}/{lng}/{aerID}', 'MapController@aerial');
Route::get('projects/work_orders/info/map_aerial/{lat}/{lng}/{aerID}', 'MapController@aerial');
Route::get('manhole/map/{lat}/{lng}/{manID}', 'MapController@pin');
Route::get('info/manhole/map/{lat}/{lng}/{manID}', 'MapController@pin');
Route::get('projects/work_orders/info/manhole/map/{lat}/{lng}/{manID}', 'MapController@pin');
Route::get('info/map/{lat}/{lng}/{manID}', 'MapController@pin');
Route::get('info/clo_search/manhole/map/{lat}/{lng}/{manID}', 'MapController@pin');
Route::get('projects/work_orders/info/clo_search/manhole/map/{lat}/{lng}/{manID}', 'MapController@pin');
Route::get('projects/work_orders/info/map/{lat}/{lng}/{manID}', 'MapController@pin');

//Closure Fibre Routes
Route::get('lobby_clo/trays/clofibre/{cloID}/{cabID}', 'CloFibreController@index');
Route::get('lobby_clo/splitter/clofibre/{cloID}/{cabID}', 'CloFibreController@index');
Route::get('projects/work_orders/info/clo_search/lobby_clo/trays/clofibre/{cloID}/{cabID}', 'CloFibreController@index');
Route::get('projects/work_orders/info/clo_search/lobby_clo/splitter/clofibre/{cloID}/{cabID}', 'CloFibreController@index');
Route::get('info/clo_search/lobby_clo/trays/clofibre/{cloID}/{cabID}', 'CloFibreController@index');
Route::get('info/manhole/clo_search/lobby_clo/trays/clofibre/{cloID}/{cabID}', 'CloFibreController@index');
Route::get('info/clo_search/lobby_clo/splitter/clofibre/{cloID}/{cabID}', 'CloFibreController@index');
Route::get('projects/work_orders/info/manhole/clo_search/lobby_clo/trays/clofibre/{cloID}/{cabID}', 'CloFibreController@index');
Route::get('info/aerial_network/clo_search/lobby_clo/trays/clofibre/{cloID}/{cabID}', 'CloFibreController@index');
Route::get('projects/work_orders/info/aerial_network/clo_search/lobby_clo/trays/clofibre/{cloID}/{cabID}', 'CloFibreController@index');
Route::get('cloFibre_create', 'CloFibreController@create');
Route::post('lobby_clo/trays/clofibre/{id}/store_cloFib', 'CloFibreController@store');
Route::post('info/clo_search/lobby_clo/splitter/clofibre/{id}/store_cloFib', 'CloFibreController@store');
Route::post('info/manhole/clo_search/lobby_clo/trays/clofibre/{id}/store_cloFib', 'CloFibreController@store');
Route::post('projects/work_orders/info/clo_search/lobby_clo/splitter/clofibre/{id}/store_cloFib', 'CloFibreController@store');
Route::post('info/aerial_network/clo_search/lobby_clo/trays/clofibre/{id}/store_cloFib', 'CloFibreController@store');
Route::post('projects/work_orders/info/manhole/clo_search/lobby_clo/trays/clofibre/{id}/store_cloFib', 'CloFibreController@store');
Route::post('projects/work_orders/info/aerial_network/clo_search/lobby_clo/trays/clofibre/{id}/store_cloFib', 'CloFibreController@store');
Route::post('projects/work_orders/info/clo_search/lobby_clo/trays/clofibre/{id}/store_cloFib', 'CloFibreController@store');
Route::post('lobby_clo/splitter/clofibre/{id}/store_cloFib', 'CloFibreController@store');
Route::post('digi_store_cloFib', 'CloFibreController@digi_store')->name('digi_store_cloFib');
Route::get('lobby_clo/trays/clofibre/{cloID}/cloFibre_edit/{cabID}/{FibNum}', 'UpdateCloFibController@edit');
Route::get('lobby_clo/splitter/clofibre/{cloID}/cloFibre_edit/{cabID}/{FibNum}', 'UpdateCloFibController@edit');
Route::get('projects/work_orders/info/clo_search/lobby_clo/splitter/clofibre/{cloID}/cloFibre_edit/{cabID}/{FibNum}', 'UpdateCloFibController@edit');
Route::get('info/clo_search/lobby_clo/splitter/clofibre/{cloID}/cloFibre_edit/{cabID}/{FibNum}', 'UpdateCloFibController@edit');
Route::post('lobby_clo/trays/clofibre/{cloID}/cloFibre_edit/{cabID}/update/{fibNum}', 'UpdateCloFibController@update');
Route::post('projects/work_orders/info/clo_search/lobby_clo/splitter/clofibre/{cloID}/cloFibre_edit/{cabID}/update/{fibNum}', 'UpdateCloFibController@update');
Route::post('lobby_clo/splitter/clofibre/{cloID}/cloFibre_edit/{cabID}/update/{fibNum}', 'UpdateCloFibController@update');
Route::post('info/clo_search/lobby_clo/splitter/clofibre/{cloID}/cloFibre_edit/{cabID}/update/{fibNum}', 'UpdateCloFibController@update');
Route::get('info/manhole/clo_search/lobby_clo/trays/clofibre/cloFibre_edit/{cloID}/{FibNum}', 'UpdateCloFibController@edit');
Route::post('info/manhole/clo_search/lobby_clo/trays/clofibre/{cloID}/cloFibre_edit/{cabID}/update/{fibNum}', 'UpdateCloFibController@update');
Route::get('projects/work_orders/info/clo_search/lobby_clo/trays/clofibre/{clo}/cloFibre_edit/{cab}/{FibNum}', 'UpdateCloFibController@edit');
Route::post('projects/work_orders/info/clo_search/lobby_clo/trays/clofibre/{clo}/cloFibre_edit/{cab}/{fibNum}', 'UpdateCloFibController@update');
Route::get('info/aerial_network/clo_search/lobby_clo/trays/clofibre/{clo}/cloFibre_edit/{cabID}/{FibNum}', 'UpdateCloFibController@edit');
Route::post('info/aerial_network/clo_search/lobby_clo/trays/clofibre/cloFibre_edit/{cloID}/cloFibre_edit/{cabID}/update/{fibNum}', 'UpdateCloFibController@update');
Route::get('projects/work_orders/info/manhole/clo_search/lobby_clo/trays/clofibre/{cloID}/cloFibre_edit/{cabID}/{FibNum}', 'UpdateCloFibController@edit');
Route::post('projects/work_orders/info/manhole/clo_search/lobby_clo/trays/clofibre/{cloID}/cloFibre_edit/{cabID}/update/{FibNum}', 'UpdateCloFibController@update');
Route::get('projects/work_orders/info/aerial_network/clo_search/lobby_clo/trays/clofibre/{cloID}/cloFibre_edit/{cabID}/{FibNum}', 'UpdateCloFibController@edit');
Route::post('projects/work_orders/info/aerial_network/clo_search/lobby_clo/trays/clofibre/{cloID}/cloFibre_edit/{cabID}/update/{fibNum}', 'UpdateCloFibController@update');
Route::get('projects/work_orders/info/clo_search/lobby_clo/trays/clofibre/{cloID}/cloFibre_edit/{cabID}/{FibNum', 'UpdateCloFibController@edit');
Route::post('projects/work_orders/info/clo_search/lobby_clo/trays/clofibre/{cloID}/cloFibre_edit/{cabID}/update/{fibNum}', 'UpdateCloFibController@update');
Route::post('info/clo_search/lobby_clo/trays/clofibre/store_cloFib', 'CloFibreController@store');
Route::get('info/clo_search/lobby_clo/trays/clofibre/{cloID}/cloFibre_edit/{cabID}/{FibNum}', 'UpdateCloFibController@edit');
Route::post('info/clo_search/lobby_clo/trays/clofibre/{cloID}/cloFibre_edit/{cabID}/update/{fibNum}', 'UpdateCloFibController@update');
Route::get('clo_search/lobby_clo/trays/clofibre/{cloID}/{cabID}', 'CloFibreController@index');
Route::post('clo_search/lobby_clo/trays/clofibre/{id}/store_cloFib', 'CloFibreController@store');
Route::get('clo_search/lobby_clo/trays/clofibre/{cloID}/cloFibre_edit/{cabID}/{FibNum}', 'UpdateCloFibController@edit');
Route::post('clo_search/lobby_clo/trays/clofibre/{cloID}/cloFibre_edit/{cabID}/update/{fibNum}', 'UpdateCloFibController@update');
Route::get('search_nfc/trays/clofibre/{cloId}/{cabId}', 'CloFibreController@digi_index');
Route::get('search_nfc/trays/clofibre/{cloID}/digi_edit/{cabID}/{id}', 'UpdateCloFibController@digi_edit');
Route::post('search_nfc/trays/clofibre/{cloID}/digi_edit/{cabID}/update/{id}', 'UpdateCloFibController@digi_update');
Route::get('trays/clofibre/{cloId}/{cabID}', 'CloFibreController@digi_index');
Route::get('trays/clofibre/{cloID}/digi_edit/{cabID}/{id}', 'UpdateCloFibController@digi_edit');
Route::post('trays/clofibre/{cloID}/digi_edit/{cabID}/update/{id}', 'UpdateCloFibController@digi_update');

//QA Trays
Route::get('lobby_clo/qa_job/{cloID}', 'QA_TrayController@job');
Route::get('info/clo_search/lobby_clo/qa_job/{cloID}', 'QA_TrayController@job');
Route::get('qa_job/{cloID}', 'QA_TrayController@job');
Route::get('qa_tray', 'QA_TrayController@index')->name('qa_tray');
Route::get('digi_qa_tray', 'QA_TrayController@digi_index')->name('digi_qa_tray');
Route::get('/lobby_clo/qa_job/qa_tray/{cloID}/{jobID}', 'QA_TrayController@index');
Route::get('qa_job/qa_tray/{cloID}/{jobID}', 'QA_TrayController@index');
Route::get('qa_create', 'QA_TrayController@create');
Route::post('storeQA_Tray', 'QA_TrayController@store')->name('storeQA_Tray');
Route::post('digi_storeQA_Tray', 'QA_TrayController@digi_store')->name('digi_storeQA_Tray');
Route::get('viewImg', 'QA_TrayController@viewImg')->name('viewImg');
Route::get('digi_viewImg', 'QA_TrayController@digi_viewImg')->name('digi_viewImg');
Route::get('search_nfc/QA_trays/{id}', 'QA_TrayController@digi_job');
Route::get('QA_trays/{id}', 'QA_TrayController@digi_job');

//QA Panels
Route::get('lobby/{pID}/qaPanel_job', 'QA_PanelController@job');
Route::get('qaPanel_job', 'QA_PanelController@job')->name('qaPanel_job');
Route::get('qa_panel', 'QA_PanelController@index')->name('qa_panel');
Route::get('qa_panel/{panID}/{jobID}', 'QA_PanelController@index');
Route::get('qaPanel_create', 'QA_PanelController@create');
Route::post('storeQA_Panel', 'QA_PanelController@store')->name('storeQA_Panel');
Route::get('viewPanelImg', 'QA_PanelController@viewImg')->name('viewPanelImg');
Route::get('digi_viewPanelImg', 'QA_PanelController@viewImg')->name('digi_viewPanelImg');
Route::get('search_nfc/digi_QA/{id}', 'QA_PanelController@digi_job');
Route::get('patchpanel_mob/digi_QA/{id}', 'QA_PanelController@digi_job');
Route::get('digi_qa_panel', 'QA_PanelController@digi_index')->name('digi_qa_panel');
Route::post('digi_storeQA_Panel', 'QA_PanelController@digi_store')->name('digi_storeQA_Panel');

//QA Work Point
Route::get('qa_wp', 'QA_WPController@index')->name('qa_wp');
Route::get('qa_wp_view', 'QA_WPController@view')->name('qa_wp_view');
Route::post('storeQA_WP', 'QA_WPController@store')->name('storeQA_WP');

//Work Orders
Route::get('work_order_create', 'WorkOrderController@create')->name('work_order_create');
Route::get('pro_work_order_create', 'WorkOrderController@pro_create')->name('pro_work_order_create');
Route::post('work_order_store', 'WorkOrderController@store');
Route::post('info/clo_search/store_joint_closure', 'WorkOrderController@store');
Route::get('work_orders', 'WorkOrderController@index')->name('work_orders');
Route::get('digi_work_orders', 'WorkOrderController@digi')->name('digi_work_orders');
Route::get('info/{id}', 'WorkOrderController@info');
Route::get('projects/work_orders/info/{id}', 'WorkOrderController@info');
Route::get('edit_work/{id}', 'UpdateWorkController@edit');
Route::post('edit_work/update/{id}', 'UpdateWorkController@update');
Route::get('projects/work_orders/edit_work/{id}', 'UpdateWorkController@edit');
Route::post('projects/work_orders/edit_work/update/{id}', 'UpdateWorkController@update');
Route::get('projects/work_orders/info/edit_work/{id}', 'UpdateWorkController@edit');
Route::post('projects/work_orders/info/edit_work/update/{id}', 'UpdateWorkController@update');
Route::get('info/edit_work/{id}', 'UpdateWorkController@edit');
Route::post('info/edit_work/update/{id}', 'UpdateWorkController@update');
Route::get('digi_info/{id}', 'WorkOrderController@digi_info');
Route::post('search_job_id', 'WorkOrderController@search')->name('search_job_id');

//Aerial Networks
Route::get('aerial_network', 'AerialNetController@index')->name('aerial_network');
Route::get('aerial_network/create', 'AerialNetController@create')->name('aerial_network/create');
Route::post('aerial_network/store_aerial_network', 'AerialNetController@store');
Route::post('digi_store', 'AerialNetController@digi_store')->name('digi_store');
Route::get('aerial_network/{id}', 'AerialNetController@search_id');
Route::get('info/aerial_network/{id}', 'AerialNetController@search_id');
Route::get('projects/work_orders/info/aerial_network/{id}', 'AerialNetController@search_id');
Route::get('info/clo_search/aerial_network/{id}', 'AerialNetController@search_id');
Route::get('projects/work_orders/info/clo_search/aerial_network/{id}', 'AerialNetController@search_id');
Route::get('search_nfc/aerial_net/{id}', 'AerialNetController@digi_search_id');
Route::get('edit_aerial/{id}', 'UpdateAerialController@edit');
Route::post('edit_aerial/update/{id}', 'UpdateAerialController@update');
Route::get('search_nfc/aerial_net/digi_edit/{id}', 'UpdateAerialController@digi_edit');
Route::post('search_nfc/aerial_net/digi_edit/update/{id}', 'UpdateAerialController@digi_update');
Route::get('search_aer', 'LobbyController@aerial')->name('search_aer');
Route::post('search_aer_id', 'AerialNetController@search')->name('search_aer_id');

//Nfc
Route::get('nfcSearch', 'NfcController@index');
Route::get('search_nfc/{id}', 'NfcController@search');
Route::post('product', 'NfcController@Addnew')->name('product');
Route::get('search_nfc/digi_info/{id}/{type}', 'InfoController@mobile');
Route::get('patchpanel_mob/digi_info/{id}/{type}', 'InfoController@mobile');
Route::get('digi_info/{id}/{type}', 'InfoController@mobile');
Route::get('patchpanel_mob/{id}', 'PatchPanelController@mob_search');

//Projects
Route::get('projects', 'ProjectController@index')->name('projects');
Route::get('projects/create', 'ProjectController@create');
Route::post('projects/store_project', 'ProjectController@store');
Route::get('projects/work_orders/{id}', 'ProjectController@searchWO');
Route::post('projects/work_orders/work_order_store', 'WorkOrderController@store');
Route::post('search_proj_id', 'ProjectController@search')->name('search_proj_id');

//QA_Search
Route::get('qa_search', 'QA_SearchController@index')->name('qa_search');

//Summary
Route::get('sum', 'SummaryController@index');

//Screen
Route::get('screen', 'ScreenController@index');

//Splitter
Route::get('lobby_clo/splitter/create/{id}', 'SplitterController@create');
Route::get('clo_search/lobby_clo/splitter/create/{id}', 'SplitterController@create');
Route::post('store_splitter', 'SplitterController@store')->name('store_splitter');
Route::get('edit_splitter', 'UpdateSplitterController@edit')->name('edit_splitter');
Route::post('update_splitter', 'UpdateSplitterController@update')->name('update_splitter');
Route::get('digi_edit_splitter', 'UpdateSplitterController@digi_edit')->name('digi_edit_splitter');
Route::post('digi_update_splitter', 'UpdateSplitterController@digi_update')->name('digi_update_splitter');
Route::get('search_nfc/digi_splitter/{id}', 'SplitterController@digi_index');
Route::get('patchpanel_mob/digi_splitter/{id}', 'SplitterController@digi_index');
Route::get('search_nfc/digi_splitter/digi_create/{id}', 'SplitterController@digi_create');
Route::post('digi_store_splitter', 'SplitterController@digi_store')->name('digi_store_splitter');
Route::get('search_nfc/digi_splitter/digi_splitter_view/{id}', 'SplitterController@digi_view');
Route::get('patchpanel_mob/digi_splitter/digi_splitter_view/{id}', 'SplitterController@digi_view');
Route::get('lobby_clo/splitter/{id}', 'TrayController@spl_index');
Route::get('projects/work_orders/info/clo_search/lobby_clo/splitter/{id}', 'TrayController@spl_index');
Route::get('info/clo_search/lobby_clo/splitter/{id}', 'TrayController@spl_index');
Route::get('lobby/{row}/splitter/create', 'SplitterController@create');
Route::get('projects/work_orders/info/clo_search/lobby_clo/splitter/create/{id}', 'SplitterController@create');

//Index
Route::get('index', 'IndexController@main')->name('index');

Route::get('test', function(){
    return view('testing');
});

Route::get('debug', function(){
    return view('debug');
});

