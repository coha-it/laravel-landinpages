<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\App;

use App\Contact;
use App\Http\Requests\ReCaptchataTestFormRequest;

class ContactCtrl extends Controller
{

	public function store(ReCaptchataTestFormRequest $request){
        // Send Mail
        $this->sendEmail([
            'email' => $request->email,
            'type' => 'Kontaktanfrage'
        ]);

        // Return Success
        return ['message' => 'Success!'];
    }

    public function sendContactForm(Request $req) {

        // Into Database
        $this->createDatabaseContact($req);

        // Varify Data
        $data = $this->validateData($req)['data'];

        // Send Email
        $this->sendEmail($data);

        // Redirect or get View
        if (App::environment(['local'])) {
            return $this->view($data);
        } else {
            return $this->redirect();
        }
    }

    protected function view ($data) {
        return view('thanks');
    }

    protected function redirect () {
        return redirect()->route('thanks');
    }

    protected function sendEmail ($data) {
        // Build and Send
        $subject = $data['type'];
        $body    = $this->buildMessage($data);

        // Add Data
        $data['timestamp'] = now()->toDateTimeString();

        Mail::raw($body, function ($message) use ($subject) {
            $message->from(env('MAIL_FROM_ADDRESS'), env('APP_NAME'));
            $message->subject(env('APP_NAME') . ': Kontaktformular');
            $dev = App::environment(['local']);

            $message->to(
                $dev ? env('MAIL_TO_DEVELOPMENT') : env('MAIL_TO_PRODUCTION')
            );
        });
    }

    protected function buildMessage ($data) {
        $aMsg = [];
        array_push($aMsg, '===========');
        foreach ($data as $key => $value) {
            array_push($aMsg, trans('keys.'.$key).": $value");
        }
        array_push($aMsg, '===========' , "\r\n Data", json_encode($data));
        return join("\r\n", $aMsg);
    }

    protected function createDatabaseContact($req) {
        Contact::create([
            'type' => $req->data['type'],
            'email' => $req->data['email'],
            'firstname' => $req->data['firstname'],
            'lastname' => $req->data['lastname'],
            'position' => $req->data['position'] ?? '',
            'streetandnumber' => $req->data['streetandnumber'],
            'zipandlocation' => $req->data['zipandlocation'],
            'phone' => $req->data['phone'],
            'company' => $req->data['company'],
            'ustid' => $req->data['ustid'] ?? '',
            'message' => $req->data['message'],
            'data'  => json_encode($req->data, JSON_FORCE_OBJECT),
            'ip'    => $req->ip(),
        ]);
    }

    protected function validateData ($req) {
        return $req->validate([
            'data.type' => 'required',
            'data.firstname' => 'required',
            'data.lastname' => 'required',
            'data.email' => 'required|email|max:255',
            'data.position' => '',
            'data.streetandnumber' => '',
            'data.zipandlocation' => '',
            'data.phone' => '',
            'data.company' => '',
            'data.ustid' => '',
            'data.message' => '',
        ]);
    }
}
