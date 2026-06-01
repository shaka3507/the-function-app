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
        ]);

        $incomingFields['attending'] = strip_tags($incomingFields['attending']);
        $incomingFields['event'] = 'june_7';
        $incomingFields['user_id'] = auth()->id();
        Rsvp::create($incomingFields);
        return redirect('/');
    }
}
