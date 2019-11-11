<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MessagesStoreRequest;
use App\Message;

class MessagesController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth', ['except'=> 'store']);
	}

    public function index()
    {
    	$messages = Message::orderBy('id', 'DESC')->paginate();
        return view('admin.messages.index', compact('messages'));
    }

    public function store(MessagesStoreRequest $request)
    {
    	$message = Message::create($request->all());
    	return back()->with('info', 'Mensaje enviado correctamente');
    }

    public function destroy(Message $message)
    {
    	$message->delete();
    	return back()->with('info', 'Mensaje eliminado correctamente');
    }
}
