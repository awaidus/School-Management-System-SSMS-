<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ParentModel;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class ParentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');

        //$this->middleware('admin')->only('index');
        //$this->middleware('admin')->except('store');
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $parents = ParentModel::paginate(10);

        return view('parent.index', compact('parents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $parent = new ParentModel();
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
        //        $parent = new ParentModel();
        //        $parent->father_name = $request->father_name;
        //        $parent->mother_name = $request->mother_name;
        //        $parent->address = $request->address;
        //        $parent->phone_no = $request->phone_no;
        //        $parent->email = $request->email;
        //        $parent->save();

        /*METHOD-2, SHORT WAY*/

        ParentModel::create($request->all());

        flashy()->success('Parent details has been added');

        return redirect()->route('parents.index');
    }

    /**
     * Display the specified resource.
     *
     * @param ParentModel $parent
     * @return Response
     */
    public function show(ParentModel $parent)
    {
        // Route-Model binding: 
        //Laravel will automatically query the result from db based on ID passed through URL
        //and the related record will be available without any code like $parent variable
        return view('parent.show', compact('parent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param ParentModel $parent
     * @return void
     */
    public function edit(ParentModel $parent)
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
    public function update(Request $request, ParentModel $parent)
    {
        $request->validate($this->validateRequest());

        $parent->update($request->all());

        flashy()->success('Parent details has been updated');

        return redirect()->route('parents.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy(ParentModel $parent)
    {
        $parent->delete();

        flashy()->success('Parent record has been deleted');

        return redirect()->route('parents.index');
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
