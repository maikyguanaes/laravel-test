<?php

use Illuminate\Http\Response;

uses()->group('example');

test('get /')
    ->get('/')
    ->assertStatus(Response::HTTP_OK);
