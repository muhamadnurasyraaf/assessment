<?php

namespace App\Http\Controllers;

use App\Http\Requests\Todo\CreateFormRequest;
use App\Http\Requests\Todo\DeleteFormRequest;
use App\Http\Requests\Todo\ListFormRequest;
use App\Http\Requests\Todo\UpdateFormRequest;
use Illuminate\Http\Request;
use TodoService;

class TodoController extends Controller
{

    private $service;
    public function __construct(TodoService $service)
    {
        $this->service = $service;
    }
    public function list(ListFormRequest $request)
    {
        $payload = $request->validated();

        return $this->service->list($payload);
    }

    public function create(CreateFormRequest $request)
    {
        $payload = $request->validated();

        return $this->service->create($payload);
    }

    public function update(UpdateFormRequest $request)
    {
        $payload = $request->validated();

        return $this->service->update($payload);
    }

    public function delete(DeleteFormRequest $request)
    {
        $payload = $request->validated();

        return $this->service->delete($payload);
    }
}
