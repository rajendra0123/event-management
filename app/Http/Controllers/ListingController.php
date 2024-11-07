<?php

namespace App\Http\Controllers;

use App\Models\listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{

    //show all listing
    public function welcome()
    {
        $events = Listing::all();
        return view('welcome', ['events' => $events]);
    }

    //create new event
    public function create()
    {
        return view('listings.create');
    }

    //store data
    public function store(Request $request)
    {
        // Validate the request
        $formFields = $request->validate([
            'event_name' => 'required|max:255',
            'description' => 'required',
            'contact' => 'required',
            'image' => 'required',

        ]);
        //file upload
        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        // Save the data in the database
        listing::create($formFields);

        // Redirect to the welcome page
        return redirect('/')->with('success', 'Event created successfully');
    }
}
