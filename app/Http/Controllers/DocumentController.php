<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;
use App\Document;


class DocumentController extends Controller
{


    public function index(){  //возвращает 3 последних документа
        $documents = Document::orderBy('updated_at', 'desc')->take(3)->get();
        return view('welcome', ['documents'=>$documents]);
    }

    public function all() //возвращает массив всех документов
    {
      $documents = Document::orderBy('updated_at', 'desc')->simplePaginate(5);;
      return view('/documents/showAll', ['documents'=>$documents]);
    }

    public function create(){  //возвращает форму для создания нового черновика
        return view('/documents/newDraft');
    }

    public function store(){  //сохраняет новый черновик
        $data = request()->all();
        if($data['payload']==''){
            return view('/errors', ["code"=>"400", "message"=>"Empty payload"]);
        }else {

            $doc = new Document;
            $doc->status = 'draft';
            $doc->payload = $data["payload"];
            $doc->save();
            return redirect('/index/');
        }
    }

    public function edit($id){  //открывает форму редактирования черновика документа
        $document = Document::find($id);
        if($document) {
            return view('/documents/editDraft', ["document" => $document]);
        }else{
            abort('404');
        }
    }


    public function update($id){  //сохраняет отредактированный черновик
        $document = Document::find($id);
        $data = request()->all();

        if($document->status == 'published'){

            return view('/errors', ["code"=>"200", "message"=>"Cannot edit published docs"]);

        }else {

            $document->status = $data['status'];
            $document->payload = $data['payload'];
            $document->updated_at = date('Y-m-d H:i:s');
            $document->save();
            return redirect('/');
        }
    }


    public function publish($id){  //публикует документ
        $document = Document::find($id);
        if($document->status == 'published'){
            return view('/errors', ["code"=>"200", "message"=>"Document already published"]);
        }else{
            $document->status = "published";
            $document->save();
            return redirect('/');
        }
    }
}
