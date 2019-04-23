<?php

Route::get('/','Web\WebViewController@web_view');

Route::get('disasters/record','Web\WebViewController@disasters_view')->name('disasters');

Route::get('disasters/record/{head_id}','Web\WebViewController@disasters_head')->name('disaster/head');

Route::post('create/emergency/assistance','Web\DisasterController@create_disaster_records')->name('emergency_assistance');

Route::get('citizen/search','Web\DisasterController@search_disasters')->name('search/disaster');

Route::get('disasters/reports','Web\WebViewController@generate_pdf');

Route::get('citizen/search/report/{age}','Web\DisasterController@generate_citizen_pdf')->name('citizen_search');