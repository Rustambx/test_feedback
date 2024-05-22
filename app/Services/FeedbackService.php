<?php

namespace App\Services;

use App\Http\Requests\Feedback\StoreRequest;
use App\Models\Feedback;

class FeedbackService
{
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $filePath = null;
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('feedback_files', 'public');
        }

        $feedback = Feedback::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'city' => $data['city'],
            'subject' => $data['subject'],
            'message' => $data['message'],
            'file' => $filePath,
        ]);

        return $feedback;
    }
}
