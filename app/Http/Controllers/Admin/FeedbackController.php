<?php

namespace App\Http\Controllers\Admin;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Feedback;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\FeedbackRequest;
use App\Http\Requests\Admin\FeedbackUpdateRequest;
use App\Traits\StatusTrait;

class FeedbackController extends Controller
{
    use StatusTrait;
    public function index() : View
    {
        return view('admin.feedback.index', [
            'feedback' => Feedback::query()->select(['id', 'name','location','image','service','feedback','status'])->latest()->get()
        ]);
    }

   

    public function show(Feedback $feedback) : View
    {
        return view('admin.feedback.show', compact('feedback'));
    }

 
 
    public function destroy(Feedback $feedback) : RedirectResponse
    {
        if($feedback->image){
$feedback->deleteImage('image', 'feedback-images');
}

        $feedback->delete();

        return redirect()->route('admin.feedback.index')->with('error', 'Feedback Deleted Successfully!');
    }

    public function changeStatus(Request $request):void {
$this->changeItemStatus('Feedback',$request->id,$request->status);
}

}
