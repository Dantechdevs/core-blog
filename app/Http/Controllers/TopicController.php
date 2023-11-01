<?php

declare(strict_types=1);

namespace App\Http\Controllers;
use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function index()
    {
        $topics = topic::latest()->paginate(5);
        return view('topic.index',compact('topics'))->with('i', (request()->input('page', 1) - 1) * 5);

    }

    public function create()
    {
        return view ('topic.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
        ]);
        Topic::create($request->all());
         
        return redirect()->route('topic.index')
                        ->with('success','Topic created successfully.');
    }

    public function show($id)
    {
        return view('topic.show',compact('topic'));
    }

    public function edit($id)
    {
        return view('topic.edit',compact('topic'));
    }

    public function update(Request $request, $id)
    {
        $request->validate();
        $topic=Topic::findOrFail($id);
        $topic->update([ 'name' => 'required', ]);
        
        $topic->update($request->all());
        
        return redirect()->route('topic.index')
                        ->with('success','Topic updated successfully');
    }

    public function destroy($id)
    {
        $topic=Topic::findOrFail($id);
        $topic->delete();
         
        return redirect()->route('topic.index')
                        ->with('success','Topic deleted successfully');
    }
}