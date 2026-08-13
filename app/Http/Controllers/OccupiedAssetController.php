<?php

namespace App\Http\Controllers;

use App\OccupiedAsset;
use Illuminate\Http\Request;

class OccupiedAssetController extends Controller
{
    public function index(Request $request)
    {
        $assets = OccupiedAsset::where('status', 'A')->orderBy('id', 'desc')->get();
        $editAsset = null;

        if ($request->has('edit')) {
            $editAsset = OccupiedAsset::where('status', 'A')->find($request->edit);
        }

        return view('occupied_assets.index', compact('assets', 'editAsset'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'employee_code' => 'nullable|string|max:100',
            'employee_name' => 'nullable|string|max:255',
            'client_name' => 'nullable|string|max:255',
            'mouza_name' => 'nullable|string|max:255',
            'asset_name' => 'nullable|string|max:255',
            'asset_type' => 'nullable|string|max:255',
            'rental_type' => 'nullable|string|max:255',
            'started_at' => 'nullable|date',
            'ended_at' => 'nullable|date',
            'khatian_no' => 'nullable|string|max:255',
            'dag_no' => 'nullable|string|max:255',
            'payment_term' => 'nullable|string|max:255',
            'periodical_term' => 'nullable|string|max:255',
            'remarks' => 'nullable|string',
            'unit_acr' => 'nullable|numeric',
            'unit_sft' => 'nullable|numeric',
            'rental_term' => 'nullable|string|max:255',
            'unit_rate_amount' => 'nullable|numeric',
            'fixed_rent_amount' => 'nullable|numeric',
            'onetime_fee' => 'nullable|numeric',
            'advance_received_amount' => 'nullable|numeric',
            'received_amount' => 'nullable|numeric',
            'due_amount' => 'nullable|numeric',
            'fine_amount' => 'nullable|numeric',
            'vat_percent' => 'nullable|numeric',
            'received_amount_vat' => 'nullable|numeric',
            'tax_percent' => 'nullable|numeric',
            'payment_method' => 'nullable|string|max:255',
            'challan_no' => 'nullable|string|max:255',
            'po_or_cheque_no' => 'nullable|string|max:255',
            'rate_active_from' => 'nullable|date',
            'rate_active_to' => 'nullable|date',
        ]);

        $data['status'] = 'A';

        OccupiedAsset::create($data);

        return redirect()->route('occupied-assets.index')->with('success', 'Occupied Asset record created successfully.');
    }

    public function update(Request $request, $id)
    {
        $asset = OccupiedAsset::where('status', 'A')->findOrFail($id);

        $data = $request->validate([
            'employee_code' => 'nullable|string|max:100',
            'employee_name' => 'nullable|string|max:255',
            'client_name' => 'nullable|string|max:255',
            'mouza_name' => 'nullable|string|max:255',
            'asset_name' => 'nullable|string|max:255',
            'asset_type' => 'nullable|string|max:255',
            'rental_type' => 'nullable|string|max:255',
            'started_at' => 'nullable|date',
            'ended_at' => 'nullable|date',
            'khatian_no' => 'nullable|string|max:255',
            'dag_no' => 'nullable|string|max:255',
            'payment_term' => 'nullable|string|max:255',
            'periodical_term' => 'nullable|string|max:255',
            'remarks' => 'nullable|string',
            'unit_acr' => 'nullable|numeric',
            'unit_sft' => 'nullable|numeric',
            'rental_term' => 'nullable|string|max:255',
            'unit_rate_amount' => 'nullable|numeric',
            'fixed_rent_amount' => 'nullable|numeric',
            'onetime_fee' => 'nullable|numeric',
            'advance_received_amount' => 'nullable|numeric',
            'received_amount' => 'nullable|numeric',
            'due_amount' => 'nullable|numeric',
            'fine_amount' => 'nullable|numeric',
            'vat_percent' => 'nullable|numeric',
            'received_amount_vat' => 'nullable|numeric',
            'tax_percent' => 'nullable|numeric',
            'payment_method' => 'nullable|string|max:255',
            'challan_no' => 'nullable|string|max:255',
            'po_or_cheque_no' => 'nullable|string|max:255',
            'rate_active_from' => 'nullable|date',
            'rate_active_to' => 'nullable|date',
        ]);

        $asset->update($data);

        return redirect()->route('occupied-assets.index')->with('success', 'Occupied Asset record updated successfully.');
    }

    public function destroy($id)
    {
        $asset = OccupiedAsset::where('status', 'A')->findOrFail($id);
        $asset->update(['status' => 'D']);

        return redirect()->route('occupied-assets.index')->with('success', 'Occupied Asset record deleted successfully.');
    }
}
