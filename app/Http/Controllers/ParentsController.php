<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parents;
use Illuminate\Http\Response;

class ParentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $parents = Parents::paginate(10);

        return view('parent.index', compact('parents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $parent = new Parents();
        return view('parent.create', compact('parent'));
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate($this->validateRequest());
        /*METHOD-1, LONG WAY*/
        //        $parent = new Parents();
        //        $parent->father_name = $request->father_name;
        //        $parent->mother_name = $request->mother_name;
        //        $parent->address = $request->address;
        //        $parent->phone_no = $request->phone_no;
        //        $parent->email = $request->email;
        //        $parent->save();

        /*METHOD-2, SHORT WAY*/

        Parents::create($request->all());

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param Parents $parent
     * @return Response
     */
    public function show(Parents $parent)
    {
        // Route-Model binding: 
        //Laravel will automatically query the result from db based on ID passed through URL
        //and the related record will be available without any code like $parent variable
        return view('parent.show', compact('parent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Parents $parent
     * @return void
     */
    public function edit(Parents $parent)
    {
        return view('parent.edit', compact('parent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, Parents $parent)
    {
        $request->validate($this->validateRequest());

        $parent->update($request->all());

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function validateRequest()
    {
        return [
            'father_name' => ['required', 'min:3'],
            'mother_name' => ['required', 'min:3'],
            'phone_no' => ['required', 'min:3'],
        ];
    }
}
