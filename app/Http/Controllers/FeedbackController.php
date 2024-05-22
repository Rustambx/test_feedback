<?php

namespace App\Http\Controllers;

use App\Http\Requests\Feedback\StoreRequest;
use Feedback;

class FeedbackController extends Controller
{
    public function store(StoreRequest $request)
    {
        $feedback = Feedback::store($request);

        return response()->json(['message' => 'Feedback submitted successfully', 'data' => $feedback], 201);
    }
}
