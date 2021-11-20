<?php
namespace App\Http\Controllers;
use Mail;
use App\Mail\NewsletterSub;
use Illuminate\Http\Request;

use App\Models\Newsletter;

class PrincipalController extends Controller
{
    public function home(){
        return view('public.principal');
    }

    public function about(){
        return view('public.about');
    }

    public function services(){
        return view('public.services');
    }

    public function blog(){
        return view('public.blog');
    }

    public function contact(){
        return view('public.contact');
    }

    public function newsletter(Request $request){

        // if($request->input('email') == '' || $request->input('name') == ''){
        //     return response()->json(['msg' => 'Ops! Você inseriu seu nome e e-mail?'], 500);
        // }
        //Instância do Modelo
        $newsletter = new Newsletter();

        //Validação dos dados
        $request->validate($newsletter->rules(), $newsletter->feedback());

        //Armazenamento dos dados do usuário 
        $newsletter->create($request->only('name', 'email'));

        //Envio do e-mail
        Mail::to($request->input('email'))->send(new NewsletterSub($request->input('name')));
        
        //Mensagem de sucesso caso todo o processo ocorra sem erros
        return response()->json(['msg' => 'Agora você está cadastrado na nossa Newsletter!'], 200);
    }
}
