<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Ticket;
use App\Categorie;

class TicketsController extends Controller
{
    public function index()
    {
        $tickets = Ticket::paginate(10);
        $categories = Category::all();
    
        return view('tickets.index', compact('tickets', 'categories'));
    }

    public function create()
    {
        $categories = Categorie::all();
    
        return view('tickets.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
                'title'     => 'required',
                'category'  => 'required',
                'message'   => 'required',
                'priority'  => 'max:1999',
            ]);
               // Get filename with extension
               $filenameWithExt = $request->file('priority')->getClientOriginalName();
        
              // Get just the filename
              $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        
              // Get extension
              $extension = $request->file('priority')->getClientOriginalExtension();
        
              // Create new filename
              $filenameToStore = $filename.'_'.time().'.'.$extension;
        
              // Uplaod image
              $path= $request->file('priority')->storeAs('public/tickets_images', $filenameToStore);

            $ticket = new Ticket([
                'title'     => $request->input('title'),
                'user_id'   => Auth::user()->id,
                'ticket_id' => strtoupper(str_random(10)),
                'category_id'  => $request->input('category'),
                'priority'  => $filenameToStore,
                'message'   => $request->input('message'),
                'status'    => "Aberto",
            ]);
                    
    
            $ticket->save();
    
            //$mailer->sendTicketInformation(Auth::user(), $ticket);
    
            return redirect()->back()->with("status", "A ticket with ID: #$ticket->ticket_id has been opened.");
     }
}
