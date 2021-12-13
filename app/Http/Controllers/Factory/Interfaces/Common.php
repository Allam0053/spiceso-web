<?php

namespace App\Http\Controllers\Factory\Interfaces;

use Illuminate\Foundation\Http\FormRequest;

interface Common
{
    public function index();
    public function create();

    public function store(FormRequest $request);
    public function show($id);

    public function edit($id);

    public function update(FormRequest $request, $id);
    public function destroy($id);
}
