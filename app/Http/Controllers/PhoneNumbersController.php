<?php

namespace App\Http\Controllers;

use App\Http\Requests\PhoneNumberStoreRequest;
use App\Http\Requests\UpdatePhoneNumberRequest;
use App\Http\Resources\PhoneNumbersResource;
use App\Models\PhoneNumbers;
use Illuminate\Http\Request;

class PhoneNumbersController extends Controller
{
    public function index()
    {
        $phoneNumbers = PhoneNumbers::all();

        return response([
            'phone_books' => PhoneNumbersResource::collection($phoneNumbers),
            'message' => 'Successful'
        ], 200);
    }

    public function store(PhoneNumberStoreRequest $request)
    {
        $validatedData = $request->validated();
        $phoneNumber = PhoneNumbers::create($validatedData);

        return response([
            'phone_book' => new PhoneNumbersResource($phoneNumber),
            'message' => 'Success'
        ], 200);
    }

    public function destroy(PhoneNumbers $phoneNumber)
    {
        $phoneNumber->delete();

        return response()->json(["deleted" => true], 200);
    }

    public function show(PhoneNumbers $phoneNumber)
    {
        return $phoneNumber->toArray();
    }

    public function update(UpdatePhoneNumberRequest $request, PhoneNumbers $phoneNumber)
    {
        $validatedData = $request->validated();
        $phoneNumber->update($validatedData);

        return response([
            'phone_book' => new PhoneNumbersResource($phoneNumber),
            'message' => 'Success'
        ], 200);
    }
}
