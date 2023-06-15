<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
class ContactController extends Controller{

    public function home(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }
    public function submit(ContactRequest $request){
//        $isValid = $request->validate([
//            'subject' => 'required|min:5|max:50',
//            'message' => 'required|min:15|max:500'
//        ]);
// код находится в файле ContactRequest.php

        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');

        $contact->save();

        return redirect()->route('home')->with('success', 'Сообщение было добавлено');
    }

    public function allData(){
//        $contact = Contact::all(); //или как внизу
//        dd($contact);
         $contact = new Contact;
        //dd($contact->all();
        //return view('contactData', ['data'=>Contact::all()]);
//        $contact = new Contact;
        return view('contactData', ['data'=>$contact->all()]);
//        return view('contactData', ['data'=>[$contact->find(2)]]);
        //return view('contactData', ['data'=>[$contact->inRandomOrder()->first()]]); //случайный выбор одной записи
        //return view('contactData', ['data'=>$contact->inRandomOrder()->get()]); //случайный выбор всех записей
        //return view('contactData', ['data'=>$contact->orderBy('id', 'desc')->get()]); //выбор по id всех записей по спаданию
        //return view('contactData', ['data'=>$contact->orderBy('id', 'asc')->get()]); //выбор по id всех записей по возрастанию
        //return view('contactData', ['data'=>$contact->orderBy('id', 'asc')->take(2)->get()]); //выбор ограниченного кол-во
        //return view('contactData', ['data'=>$contact->orderBy('id', 'asc')->skip(2)->take(2)->get()]); //пропускает n - кол-во в skip()
        //return view('contactData', ['data' => $contact->where('subject', '=', 'Hello')->get()]);
    }

    public function showOneMessage($id){
        $contact = new Contact;
        return view('oneMessage', ['data'=>$contact->find($id)]);
    }

    public function update($id){
        $contact = new Contact;
        return view('updateMessage', ['data'=>$contact->find($id)]);
    }

    public function updateSubmit($id, ContactRequest $request){
        $contact = Contact::find($id);
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');
        $contact->save();
        return redirect()->route('contact.showOneMessage', $id)->with('success', 'Сообщение было обновлено');
    }

    public function delete($id){
        Contact::find($id)->delete();
        return redirect()->route('contact.allData')->with('success', 'Сообщение было удалено');
    }
}
