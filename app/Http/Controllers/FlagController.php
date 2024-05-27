<?php

namespace App\Http\Controllers;

use App\Models\Flag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FlagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $flags = $this->fetchFlagsForTableContent();

        // array for component table
        $table_heads = ['Nama Penanda', 'Deskripsi'];
        $table_actions = [
            [
                'name' => 'edit',
                'route' => 'flag.edit',
            ],
            [
                'name' => 'remove',
                'route' => '/flag',
            ],
        ];

        return view('admin.flag', compact('flags', 'table_heads', 'table_actions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.flag');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $this->validation($request);

        // validation failed
        if ($validator !== true) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Store data to table
        $payload = $request->only(['name', 'description']);
        Flag::create($payload);

        return redirect()->route('flag.index')->with('success', 'Flag created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $flag = Flag::select('id', 'name', 'description')
        ->where('id', $id)
        ->first();

        if (!$flag) {
            return redirect()->route('flag.index')->with('error', 'Flags not found!');
        }

        return view('admin.flag', compact('flag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // get flag
        $flag = Flag::find($id);
        if (!$flag) {
            return redirect()->route('flag.index')->with('error', 'Flags not found!');
        }

        //validation
        $validator = $this->validation($request, $flag);
        if ($validator !== true) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Update flag
        $payload = $request->only(['name', 'description']);
        $flag->update($payload);

        return redirect()->route('flag.index')->with('success', 'Flag updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $flag = Flag::find($id);
        $flag->delete();

        return response()->json([
            'success' => true,
            'message' => 'Flag deleted sucessfully!',
        ]);
    }

    private function fetchFlagsForTableContent()
    {
        $flags = Flag::select('name', 'description', 'id')->orderBy('name', 'asc')->paginate(10);

        return $flags;
    }

    private function validation($request, $flag = NULL){
        
        $rules = [
            'name' => 'required|alpha_dash:ascii|max:100|unique:flags,name,' . ($flag ? $flag->id : $flag) . ',id,deleted_at,NULL',
        ];

        $validator = Validator::make($request->all(), $rules);
        
        // dd($validator->fails());
        if ($validator->fails()) {
            return $validator;
        }

        return true;
    }
}
