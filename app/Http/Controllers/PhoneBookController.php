<?php

namespace App\Http\Controllers;

use App\Http\Requests\PhoneBookStoreRequest;
use App\Http\Requests\UpdatePhoneBookRequest;
use App\Http\Resources\PhoneBookResource;
use App\Models\PhoneBook;
use Illuminate\Http\Request;

class PhoneBookController extends Controller
{
    public function index()
    {
        $phoneBooks = PhoneBook::with("phone_numbers")->get();

        return response([
            'phone_books' => PhoneBookResource::collection($phoneBooks),
            'message' => 'Successful'
        ], 200);
    }

    public function store(PhoneBookStoreRequest $request)
    {
        $validatedData = $request->validated();
        $phoneBook = PhoneBook::create($validatedData);

        return response([
            'phone_book' => new PhoneBookResource($phoneBook),
            'message' => 'Success'
        ], 200);
    }

    public function destroy(PhoneBook $phoneBook)
    {
        $phoneBook->delete();

        return response()->json(["deleted" => true], 200);
    }

    public function show(PhoneBook $phoneBook)
    {
        return $phoneBook->toArray();
    }

    public function update(UpdatePhoneBookRequest $request, PhoneBook $phoneBook)
    {
        $validatedData = $request->validated();
        $phoneBook->update($validatedData);

        return response([
            'phone_book' => new PhoneBookResource($phoneBook),
            'message' => 'Success'
        ], 200);
    }
}
