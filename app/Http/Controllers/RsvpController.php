<?php

namespace App\Http\Controllers;

use App\Models\Rsvp;
use Illuminate\Http\Request;

class RsvpController extends Controller
{
    //
    public function createRsvp(Request $request) {
        $incomingFields = $request->validate([
            'attending' => 'required',
            'plus_one' => 'required',
            'guest_name' => 'required',
            'event' => 'required',
        ]);

        $incomingFields['attending'] = strip_tags($incomingFields['attending']);
        $incomingFields['guest_name'] = strip_tags($incomingFields['guest_name']);
        $incomingFields['user_id'] = auth()->id();
        Rsvp::create($incomingFields);
        return redirect('/');
    }
}
