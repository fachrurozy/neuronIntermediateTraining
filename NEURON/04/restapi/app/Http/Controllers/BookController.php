<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $books          = Book::all();
        $acceptHeader   = $request->headers->get('Accept');
        if($acceptHeader==='application/xml'){
            $xml = new \SimpleXMLElement('<books />');
            foreach($books as $item) {
                $xmlItem = $xml->addChild('book');
                $xmlItem->addChild('id', $item->id);
                $xmlItem->addChild('isbn', $item->isbn);
                $xmlItem->addChild('title', $item->title);
                $xmlItem->addChild('author', $item->author);
                $xmlItem->addChild('created_at', $item->created_at);
                $xmlItem->addChild('updated_at', $item->updated_at);
            }
            return $xml->asXML();
        }
        return response()->json($books,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
