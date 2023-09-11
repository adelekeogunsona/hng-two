<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeletePersonRequest;
use App\Http\Requests\FetchPersonRequest;
use App\Http\Requests\StorePersonRequest;
use App\Http\Requests\UpdatePersonRequest;
use App\Http\Resources\PersonResource;
use App\Models\Person;

class PersonController extends Controller
{
    /**
     * Store a newly created person in storage.
     */
    public function create(StorePersonRequest $request)
    {
        $person = Person::create($request->validated());

        return PersonResource::make($person);
    }

    /**
     * Return the specified person.
     */
    public function read(Person $person)
    {
        return PersonResource::make($person);
    }

    /**
     * Update the specified person in storage.
     */
    public function update(UpdatePersonRequest $request, Person $person)
    {
        $person->update($request->validated());

        return PersonResource::make($person);
    }

    /**
     * Remove the specified person from storage.
     */
    public function delete(Person $person)
    {
        $person->delete();

        return response()->noContent();
    }

    /**
     * Read a person dynamically.
     */
    public function dynamic_read(FetchPersonRequest $request)
    {
        $person = Person::where('name', $request->validated()['name'])->firstOrFail();

        return PersonResource::make($person);
    }

    /**
     * Delete a person dynamically.
     */
    public function dynamic_delete(DeletePersonRequest $request)
    {
        $person = Person::where('name', $request->validated()['name'])->firstOrFail();
        $person->delete();

        return response()->noContent();
    }
}
