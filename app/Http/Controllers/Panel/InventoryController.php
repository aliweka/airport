<?php

namespace App\Http\Controllers\Panel;

use App\Http\Requests\CreateInventoryRequest;
use App\Http\Requests\EditInventoryRequest;
use App\Inventory;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Redirect;
use Session;

class InventoryController extends Controller
{
    //
    public function index()
    {
        $invents = Inventory::orderBy('created_at', 'DESC')->get();
        $page_name = 'inventory';
        return view('admin.inventory.index', compact('invents', 'page_name'));
    }

    public function create()
    {
        $page_name = 'inventory';
        $sub = 'create';
        return view('admin.inventory.create', compact('page_name', 'sub'));
    }

    public function insert(CreateInventoryRequest $request)
    {
        $inventory = new Inventory();

        if (Input::hasFile('photo')) {
            $file = $request->file('photo');
            $path = 'uploads/inventor';
            $name = $file->getClientOriginalName();
            $file->move($path, $name);
            $photo = $path . '/' . $name;
            $inventory->photo = $photo;
        }
        $inventory->snr = $request->input('snr');
        $inventory->pnr = $request->input('pnr');
        $inventory->status = $request->input('status');
        $inventory->vendor = $request->input('vendor');

        $inventory->save();
        Session::flash('inventory_new', 'item has been added successfully');
        return redirect('/panel/inventory');
    }

    public function show($id)
    {
        $tool = Inventory::find($id);
        return view('admin.inventory.single', compact('tool'));
    }

    public function edit($id)
    {
        $tool = Inventory::find($id);
        $page_name = 'edit';
        $sub = $tool->pnr;
        return view('admin.inventory.edit', compact('tool', 'page_name', 'sub'));
    }

    public function update($id, EditInventoryRequest $request)
    {
        $tool = Inventory::find($id);
        if (Input::hasFile('photo')) {
            $file = $request->file('photo');
            $path = 'uploads/inventor';
            $name = $file->getClientOriginalName();
            $file->move($path, $name);
            $photo = $path . '/' . $name;
            $tool->photo = $photo;
        }
        $tool->snr = $request->input('snr');
        $tool->pnr = $request->input('pnr');
        $tool->status = $request->input('status');
        $tool->vendor = $request->input('vendor');
        $tool->save();
        Session::flash('inventory_edit', 'item has been updated successfully');
        return redirect('/panel/inventory');
    }

    public function delete($id)
    {
        $tool = Inventory::findOrFail($id);
        $tool->delete();

        Session::flash('delete_tool', 'tool has been  deleted successful');
        return redirect()->back();
    }

}
