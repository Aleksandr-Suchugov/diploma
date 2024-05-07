<?php

namespace App\Http\Controllers;

use App\Http\Resources\TypeResource;
use App\Models\Type;
use App\Http\Requests\TypeStoreRequest;
use App\Http\Requests\TypeUpdateRequest;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TypeResource::collection(
            Type::orderBy('id', 'desc')->paginate(5)
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TypeStoreRequest $request)
    {
        $data = $request->validated();

        $type = Type::create($data);

        return new TypeResource($type);
    }

    /**
     * Display the specified resource.
     */
    public function show(Type $type)
    {
        return new TypeResource($type);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TypeUpdateRequest $request, Type $type)
    {
        $data = $request->validated();

        $type->update($data);

        return new TypeResource($type);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
        $type->delete();
        return response('', 204);
    }
}
