<?php

namespace App\Http\Controllers\Firebase;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kreait\Firebase\Database;

class ContactController extends Controller
{
    public function __construct(Database $database)
    {
        $this->database = $database;
    }
    public function index()
    {
        $tn='contact';
        $reference =  $this->database->getReference($tn)->getvalue();
        return view('firebase.contact.index',compact('reference'));
    }
    public function create()
    {
        return view('firebase.contact.create');
    }
    public function store(Request $request)
    {
        $tn='contact';
        $postData = [
            'fname' => $request->first_name,
            'lname' => $request->last_name,
            'phone' => $request->phone,
            'email' => $request->email,
        ];
$postRef = $this->database->getReference($tn)->push($postData);
if($postRef)
{
    return redirect('contacts')->with('status','Well done');
}
        else redirect('contacts')->with('status','warning ');
    }
}
