<?php

namespace App\Http\Controllers;
use App\Models\Inquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'message' => 'required|string',
            'property_id' => 'required|exists:properties,id'
        ]);

        $inquiry = Inquiry::create($validatedData);

        return response()->json(['message' => 'Inquiry submitted successfully', 'inquiry' => $inquiry], 201);
    }
}
