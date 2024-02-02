<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\Management;
use Illuminate\Http\Request;

class ManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lang = Language::all();
        $managements = Management::latest()->paginate(5);
        return view('src.index', compact('managements', 'lang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('src.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'user' => 'required|min:3',
            'clients' => 'required|min:3',
            'type_job' => 'required|min:3',
            'job' => 'required|min:3',
            'project' => 'required|min:3',
            'service_offering' => 'required|min:3',
            'service_request' => 'required|min:3',
            'payment' => 'required|min:3',
            'phurcase_order' => 'required|min:3',
            'order' => 'required',
            'bank_account' => 'required|min:3',
            'no_rekening' => 'required',
            'no_handphone' => 'required|min:3',
        ]);

        $posts = Management::create([
            'users' => $request->user,
            'clients' => $request->clients,
            'type_jobs' => $request->type_job,
            'jobs' => $request->job,
            'projects' => $request->project,
            'service_offerings' => $request->service_offering,
            'service_requests' => $request->service_request,
            'payments' => $request->payment,
            'phurcase_orders' => $request->phurcase_order,
            'orders' => $request->order,
            'bank_accounts' => $request->bank_account,
            'no_rekenings' => $request->no_rekening,
            'no_handphones' => $request->no_handphone,
        ]);
        // dd($posts);
        return redirect()->route("management-system.index")->with(['success', 'Data berhasil ditambahkan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $management = Management::findOrFail($id);
        return view('src.show', compact('management'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $management = Management::findOrFail($id);
        return view('src.edit', compact('management'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'user' => '',
            'clients' => '',
            'type_job' => '',
            'job' => '',
            'project' => '',
            'service_offering' => '',
            'service_request' => '',
            'payment' => '',
            'phurcase_order' => '',
            'order' => '',
            'bank_account' => '',
            'no_rekening' => '',
            'no_handphone' => '',
        ]);
        $management = Management::findOrFail($id);
        $management->update([
            'users' => $request->user,
            'clients' => $request->clients,
            'type_jobs' => $request->type_job,
            'jobs' => $request->job,
            'projects' => $request->project,
            'service_offerings' => $request->service_offering,
            'service_requests' => $request->service_request,
            'payments' => $request->payment,
            'phurcase_orders' => $request->phurcase_order,
            'orders' => $request->order,
            'bank_accounts' => $request->bank_account,
            'no_rekenings' => $request->no_rekening,
            'no_handphones' => $request->no_handphone,
        ]);
        return redirect()->route('management-system.index')->with(['success', 'Data berhasil diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $management = Management::findOrFail($id);
        $management->delete();

        return redirect()->route('management-system.index')->with(['success', 'Data Berhasil dihapus!']);
    }
}
