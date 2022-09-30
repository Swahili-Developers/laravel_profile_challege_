<?php

namespace App\Http\Controllers;

use App\Models\User;
use JeroenDesloovere\VCard\VCard;
use Illuminate\Http\Request;
use Dompdf\Dompdf;

class UserController extends Controller
{
    public function getContacts()
    {
        $contacts = User::all();
        return view('index', compact('contacts'));
    }

    public function viewContacts($id)
    {
        $detail = User::find($id);
        return view('welcome', compact('detail'));
    }
    public function store(Request $request)
    {
        $vcard = new VCard();


        // define variables
        $fullname = $request->name;
        $email = $request->email;
        $phone_no = $request->phone_no;

        // dd();

        // $fullname = 'fullname';
        // $email = 'email@email.com';
        // $phone_no = '0123456789';

        // add personal data
        $vcard->addName($fullname,);

        // add work data
        $vcard->addCompany('Swahili Developer');
        $vcard->addJobtitle('Web Developer');
        $vcard->addEmail($request->email);
        $vcard->addPhoneNumber($request->phone_no, 'WORK');
        $vcard->addAddress(null, null, 'ubungo', 'Dar es salaam', null, '15777', 'Tanzania');
        $vcard->addLabel('tabata, segerea, ubungo ternet', 'work');
        return $vcard->download();

        // return vcard as a string
        //return $vcard->getOutput();


    }

    public function printPdf()
    {
        $contacts = User::all();
        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('index', compact('contacts')));

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream('demo.pdf', ['Attachment' => false]);
    }
}
