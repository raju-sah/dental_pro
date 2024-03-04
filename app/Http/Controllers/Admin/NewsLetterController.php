<?php

namespace App\Http\Controllers\Admin;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\NewsLetter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\NewsLetterRequest;
use App\Http\Requests\Admin\NewsLetterUpdateRequest;
use App\Traits\StatusTrait;

class NewsLetterController extends Controller
{
    use StatusTrait;
    public function index() : View
    {
        return view('admin.news_letter.index', [
            'news_letters' => NewsLetter::query()->select(['id', 'email','status'])->latest()->get()
        ]);
    }

    public function create() : View
    {
        return view('admin.news_letter.create');
    }

    public function store(NewsLetterRequest $request) : RedirectResponse
    {
        $newsletter = NewsLetter::create($request->validated());

        return redirect()->route('admin.news-letters.index')->with('success', 'NewsLetter Created Successfully!');
    }

    public function show(NewsLetter $news_letter) : View
    {
        return view('admin.news_letter.show', compact('news_letter'));
    }

    public function edit(NewsLetter $news_letter) : View
    {
        return view('admin.news_letter.edit', compact('news_letter'));
    }

    public function update(NewsLetterUpdateRequest $request, NewsLetter $news_letter) : RedirectResponse
    {
        $newsletter->update($request->validated());

        return redirect()->route('admin.news-letters.index')->with('success', 'NewsLetter Updated Successfully!');
    }

    public function destroy(NewsLetter $news_letter) : RedirectResponse
    {
        

        $news_letter->delete();

        return redirect()->route('admin.news-letters.index')->with('error', 'NewsLetter Deleted Successfully!');
    }

    public function changeStatus(Request $request):void {
$this->changeItemStatus('NewsLetter',$request->id,$request->status);
}

}
