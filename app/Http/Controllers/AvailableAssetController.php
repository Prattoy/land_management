<?php

namespace App\Http\Controllers;

use App\AvailableAsset;
use Illuminate\Http\Request;

class AvailableAssetController extends Controller
{
    public function index(Request $request)
    {
        $assets = AvailableAsset::where('status', 'A')->orderBy('id', 'desc')->get();
        $editAsset = null;

        if ($request->has('edit')) {
            $editAsset = AvailableAsset::where('status', 'A')->find($request->edit);
        }

        return view('available_assets.index', compact('assets', 'editAsset'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'mouza' => 'nullable|string|max:255',
            'asset' => 'nullable|string',
            'asset_type' => 'nullable|string|max:255',
            'dag_no' => 'nullable|string|max:255',
            'acre' => 'nullable|numeric',
            'sq_ft' => 'nullable|numeric',
        ]);

        $data['status'] = 'A';

        AvailableAsset::create($data);

        return redirect()->route('available-assets.index')->with('success', 'Available Asset created successfully.');
    }

    public function update(Request $request, $id)
    {
        $asset = AvailableAsset::where('status', 'A')->findOrFail($id);

        $data = $request->validate([
            'mouza' => 'nullable|string|max:255',
            'asset' => 'nullable|string',
            'asset_type' => 'nullable|string|max:255',
            'dag_no' => 'nullable|string|max:255',
            'acre' => 'nullable|numeric',
            'sq_ft' => 'nullable|numeric',
        ]);

        $asset->update($data);

        return redirect()->route('available-assets.index')->with('success', 'Available Asset updated successfully.');
    }

    public function destroy($id)
    {
        $asset = AvailableAsset::where('status', 'A')->findOrFail($id);
        $asset->update(['status' => 'D']);

        return redirect()->route('available-assets.index')->with('success', 'Available Asset deleted successfully.');
    }
}
