<?php

use App\Models\Todo;

class TodoService
{
    public function list($payload)
    {

        $page = $payload['page'];

        $todos = Todo::with('category')->skip($page)->take(5);

        return response()->json([
            'success' => true,
            'message' => 'Successfully list the todos',
            'data' => $todos
        ], 200);

    }

    public function create($payload)
    {
        $todo = Todo::create($payload);

        return response()->json([
            'success' => true,
            'message' => 'Successfully created todo',
            'data' => $todo
        ], 201);
    }

    public function update($payload)
    {
        $todo = Todo::find($payload['id']);

        $todo->update([
            'title' => $payload['title'] ?? $todo->title,
            'content' => $payload['content'],
            'category_id' => $payload['category_id']
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Successfully created todo',
            'data' => $todo->fresh()
        ], 200);
    }

    public function delete($payload)
    {
        Todo::find($payload['id'])->delete();

        return response()->json([
            'success' => true,
            'message' => 'Successfully created todo',
            'data' => null
        ], 200);
    }
}