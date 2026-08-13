@extends('layouts.app')

@section('title', 'Available Assets - Land Management')

@section('content')
<div class="card">
    <div class="card-title">
        <i class="fa-solid {{ isset($editAsset) ? 'fa-pen-to-square' : 'fa-circle-plus' }}"></i>
        {{ isset($editAsset) ? 'Edit Available Asset' : 'Insert Available Asset' }}
    </div>

    <form action="{{ isset($editAsset) ? route('available-assets.update', $editAsset->id) : route('available-assets.store') }}" method="POST">
        @csrf
        @if(isset($editAsset))
            @method('PUT')
        @endif

        <div class="form-grid">
            <div class="form-group">
                <label for="mouza">Mouza</label>
                <input type="text" name="mouza" id="mouza" class="form-control" value="{{ old('mouza', $editAsset->mouza ?? '') }}" placeholder="e.g. Mid Halishahar">
            </div>

            <div class="form-group">
                <label for="asset_type">Asset Type</label>
                <input type="text" name="asset_type" id="asset_type" class="form-control" value="{{ old('asset_type', $editAsset->asset_type ?? '') }}" placeholder="e.g. Open Space">
            </div>

            <div class="form-group">
                <label for="dag_no">Dag No</label>
                <input type="text" name="dag_no" id="dag_no" class="form-control" value="{{ old('dag_no', $editAsset->dag_no ?? '') }}" placeholder="e.g. 16507">
            </div>

            <div class="form-group">
                <label for="acre">Acre</label>
                <input type="number" step="any" name="acre" id="acre" class="form-control" value="{{ old('acre', $editAsset->acre ?? '') }}" placeholder="e.g. 0.04">
            </div>

            <div class="form-group">
                <label for="sq_ft">Sq Ft</label>
                <input type="number" step="any" name="sq_ft" id="sq_ft" class="form-control" value="{{ old('sq_ft', $editAsset->sq_ft ?? '') }}" placeholder="e.g. 1742.4">
            </div>

            <div class="form-group full-width">
                <label for="asset">Asset Description</label>
                <textarea name="asset" id="asset" class="form-control" placeholder="Enter asset description / location details">{{ old('asset', $editAsset->asset ?? '') }}</textarea>
            </div>
        </div>

        <div class="form-actions">
            @if(isset($editAsset))
                <a href="{{ route('available-assets.index') }}" class="btn btn-secondary">
                    <i class="fa-solid fa-xmark"></i> Cancel Edit
                </a>
            @endif
            <button type="submit" class="btn btn-primary">
                <i class="fa-solid {{ isset($editAsset) ? 'fa-floppy-disk' : 'fa-plus' }}"></i>
                {{ isset($editAsset) ? 'Update Asset' : 'Save Asset' }}
            </button>
        </div>
    </form>
</div>

<div class="card">
    <div class="card-title">
        <i class="fa-solid fa-list"></i> Available Assets List
    </div>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>Mouza</th>
                    <th>Asset</th>
                    <th>Asset Type</th>
                    <th>Dag No</th>
                    <th>Acre</th>
                    <th>Sqft</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($assets as $assetItem)
                    <tr>
                        <td>{{ $assetItem->mouza }}</td>
                        <td style="max-width: 300px; white-space: normal;">{{ $assetItem->asset }}</td>
                        <td>{{ $assetItem->asset_type }}</td>
                        <td>{{ $assetItem->dag_no }}</td>
                        <td>{{ $assetItem->acre }}</td>
                        <td>{{ $assetItem->sq_ft }}</td>
                        <td>
                            <div class="action-btns">
                                <a href="{{ route('available-assets.index', ['edit' => $assetItem->id]) }}" class="btn-icon btn-icon-edit" title="Edit">
                                    <i class="fa-solid fa-pen"></i>
                                </a>

                                <form action="{{ route('available-assets.destroy', $assetItem->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to soft delete this available asset? (Status will be set to D)');" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-icon btn-icon-delete" title="Delete">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" style="text-align: center; color: var(--text-muted); padding: 2rem;">
                            No available assets found. Insert one above!
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
