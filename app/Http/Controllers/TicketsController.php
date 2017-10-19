<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Ticket;
use App\Categorie;
use App\User;
use App\Mailers\AppMailer;

class TicketsController extends Controller
{
public function index()
  {
      $tickets = Ticket::paginate(10);
      $categories = Categorie::all();

      return view('tickets.index', compact('tickets', 'categories'));
  }

public function create()
  {
      $categories = Categorie::all();
      return view('tickets.create', compact('categories'));
  }

public function store(Request $request, AppMailer $mailer){
      $this->validate($request, [
        'title'       => 'required',
        'categorie'   => 'required',
        'message'     => 'required',
        'document'    => 'mimes:jpeg,bmp,png,gif,svg,pdf,psd,gif','max:1999',
      ]);

      // Get filename with extension
      $filenameWithExt = $request->file('document')->getClientOriginalName();

      // Get just the filename
      $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

      // Get extension
      $extension = $request->file('document')->getClientOriginalExtension();

      // Create new filename
      $filenameToStore = $filename.'_'.time().'.'.$extension;

      // Uplaod image
      $path= $request->file('document')->storeAs('public/documents/'.$request->input('user_id'), $filenameToStore);

      // Upload Ticket
      $ticket = new Ticket;
      $ticket->title            = $request->input('title');
      $ticket->user_id          = Auth::user()->id;
      $ticket->ticket_id        = strtoupper(str_random(10));
      $ticket->category_id      = $request->input('categorie');
      $ticket->document         = $filenameToStore;
      $ticket->message          = $request->input('message');
      $ticket->status           = "Aberto";
      


$ticket->save();
$mailer->sendTicketInformation(Auth::user(), $ticket);
$mailer->sendTicketInformationOwner(Auth::user(), $ticket);
return redirect()->back()->with("status", "Numero do Seu Job ID: #$ticket->ticket_id");
    }

    public function show($id){
      $ticket = Ticket::find($id);
      return view('tickets.show')->with('document', $ticket);
    }

    public function destroy($id){
      $ticket = Ticket::find($id);

      if(Storage::delete('public/documents/'.$ticket->user_id.'/'.$ticket->document)){
        $ticket->delete();

        return redirect('/')->with('success', 'Documento Deletado');
      }
    }
}
