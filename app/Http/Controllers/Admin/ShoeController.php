<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Shoe;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ShoeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $shoes = Shoe::all();

        // if($request->has('term')){
        //     $term = $request->get('term');
        //     $shoes = Shoe::where('title', 'LIKE', "%$term%")->paginate(10)->withQueryString(); 
        // }else{
        //     $shoes = Shoe::paginate(15);
        // }
        return view('Admin.Shoe.index', compact('shoes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Shoe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
    
        $shoe = new Shoe;
        $shoe -> fill($this->validation($request->all()));
        $shoe -> img = "https://picsum.photos/300/200";
        $shoe ->save();

        return redirect() -> route('Admin.Shoe.show', $shoe);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shoe  $shoe
     * @return \Illuminate\Http\Response
     */
    public function show(Shoe $Shoe)
    {
        return view('Admin.Shoe.show', compact('Shoe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shoe  $shoe
     * @return \Illuminate\Http\Response
     */
    public function edit(Shoe $Shoe)
    {
        return view('Admin.Shoe.edit', compact('Shoe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shoe  $shoe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shoe $Shoe)
    {

        $data = $this->validation($request->all());

        $Shoe->update($data);

        return redirect ()->route('Admin.Shoe.show', $Shoe);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shoe  $shoe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shoe $Shoe)
    {
        $Shoe->delete();

        return redirect ()->route('Admin.Shoe.index');
    }

    private function validation($data) {
        $validate = Validator::make(
            $data, //dati del form da validare
            [
            'name' => 'required|string|max:50',
            'brand'=> 'required|string|max:50', 
            'size'=> 'required|integer',
            'price'=> 'required',
            'type'=> 'required|string|in:elegant,sportive,casual',
            ],
            [
            // require message 
            'name.required'=> 'Il nome della scarpa è obbligatorio',
            'brand.required'=> "Il nome dell'brand è obbligatorio",
            'size.required'=> "È necessario inseriere la misura della scarpa",
            'price.required'=> "È necessario inseriere il prezzo della scarpa",
            'type.required'=> "Il tipo di scarpa è obbligatorio",

            // max char message
            'name.max'=> 'Il nome della scarpa non puo superare i 50 caratteri',
            'brand.max'=> "il nome del brand non puo superare i 50 caratteri",

            // enum message 
            'type.in'=> 'devi scegliere tra elegante, sportivo o casual',

            // prise decimal message 
            'price.required'=> 'Il nome della scarpa è obbligatorio',

            ]

        )->validate();
        
        return $validate;
    }
}
