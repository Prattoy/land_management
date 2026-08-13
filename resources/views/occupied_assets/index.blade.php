@extends('layouts.app')

@section('title', 'Occupied Assets - Land Management')

@section('content')
<div class="card">
    <div class="card-title">
        <i class="fa-solid {{ isset($editAsset) ? 'fa-pen-to-square' : 'fa-circle-plus' }}"></i>
        {{ isset($editAsset) ? 'Edit Occupied Asset Record' : 'Insert Occupied Asset Record' }}
    </div>

    <form action="{{ isset($editAsset) ? route('occupied-assets.update', $editAsset->id) : route('occupied-assets.store') }}" method="POST">
        @csrf
        @if(isset($editAsset))
            @method('PUT')
        @endif

        <div class="form-grid">
            <div class="form-group">
                <label for="employee_code">Employee Code</label>
                <input type="text" name="employee_code" id="employee_code" class="form-control" value="{{ old('employee_code', $editAsset->employee_code ?? '') }}">
            </div>

            <div class="form-group">
                <label for="employee_name">Employee Name</label>
                <input type="text" name="employee_name" id="employee_name" class="form-control" value="{{ old('employee_name', $editAsset->employee_name ?? '') }}">
            </div>

            <div class="form-group">
                <label for="client_name">Client Name</label>
                <input type="text" name="client_name" id="client_name" class="form-control" value="{{ old('client_name', $editAsset->client_name ?? '') }}">
            </div>

            <div class="form-group">
                <label for="mouza_name">Mouza Name</label>
                <input type="text" name="mouza_name" id="mouza_name" class="form-control" value="{{ old('mouza_name', $editAsset->mouza_name ?? '') }}">
            </div>

            <div class="form-group">
                <label for="asset_name">Asset Name</label>
                <input type="text" name="asset_name" id="asset_name" class="form-control" value="{{ old('asset_name', $editAsset->asset_name ?? '') }}">
            </div>

            <div class="form-group">
                <label for="asset_type">Asset Type</label>
                <input type="text" name="asset_type" id="asset_type" class="form-control" value="{{ old('asset_type', $editAsset->asset_type ?? '') }}">
            </div>

            <div class="form-group">
                <label for="rental_type">Rental Type</label>
                <input type="text" name="rental_type" id="rental_type" class="form-control" value="{{ old('rental_type', $editAsset->rental_type ?? '') }}">
            </div>

            <div class="form-group">
                <label for="started_at">Started At</label>
                <input type="date" name="started_at" id="started_at" class="form-control" value="{{ old('started_at', $editAsset->started_at ?? '') }}">
            </div>

            <div class="form-group">
                <label for="ended_at">Ended At</label>
                <input type="date" name="ended_at" id="ended_at" class="form-control" value="{{ old('ended_at', $editAsset->ended_at ?? '') }}">
            </div>

            <div class="form-group">
                <label for="khatian_no">Khatian No</label>
                <input type="text" name="khatian_no" id="khatian_no" class="form-control" value="{{ old('khatian_no', $editAsset->khatian_no ?? '') }}">
            </div>

            <div class="form-group">
                <label for="dag_no">Dag No</label>
                <input type="text" name="dag_no" id="dag_no" class="form-control" value="{{ old('dag_no', $editAsset->dag_no ?? '') }}">
            </div>

            <div class="form-group">
                <label for="payment_term">Payment Term</label>
                <input type="text" name="payment_term" id="payment_term" class="form-control" value="{{ old('payment_term', $editAsset->payment_term ?? '') }}">
            </div>

            <div class="form-group">
                <label for="periodical_term">Periodical Term</label>
                <input type="text" name="periodical_term" id="periodical_term" class="form-control" value="{{ old('periodical_term', $editAsset->periodical_term ?? '') }}">
            </div>

            <div class="form-group">
                <label for="unit_acr">Unit Acre</label>
                <input type="number" step="any" name="unit_acr" id="unit_acr" class="form-control" value="{{ old('unit_acr', $editAsset->unit_acr ?? '') }}">
            </div>

            <div class="form-group">
                <label for="unit_sft">Unit SFT</label>
                <input type="number" step="any" name="unit_sft" id="unit_sft" class="form-control" value="{{ old('unit_sft', $editAsset->unit_sft ?? '') }}">
            </div>

            <div class="form-group">
                <label for="rental_term">Rental Term</label>
                <input type="text" name="rental_term" id="rental_term" class="form-control" value="{{ old('rental_term', $editAsset->rental_term ?? '') }}">
            </div>

            <div class="form-group">
                <label for="unit_rate_amount">Unit Rate Amount</label>
                <input type="number" step="any" name="unit_rate_amount" id="unit_rate_amount" class="form-control" value="{{ old('unit_rate_amount', $editAsset->unit_rate_amount ?? '') }}">
            </div>

            <div class="form-group">
                <label for="fixed_rent_amount">Fixed Rent Amount</label>
                <input type="number" step="any" name="fixed_rent_amount" id="fixed_rent_amount" class="form-control" value="{{ old('fixed_rent_amount', $editAsset->fixed_rent_amount ?? '') }}">
            </div>

            <div class="form-group">
                <label for="onetime_fee">Onetime Fee</label>
                <input type="number" step="any" name="onetime_fee" id="onetime_fee" class="form-control" value="{{ old('onetime_fee', $editAsset->onetime_fee ?? '') }}">
            </div>

            <div class="form-group">
                <label for="advance_received_amount">Advance Received Amount</label>
                <input type="number" step="any" name="advance_received_amount" id="advance_received_amount" class="form-control" value="{{ old('advance_received_amount', $editAsset->advance_received_amount ?? '') }}">
            </div>

            <div class="form-group">
                <label for="received_amount">Received Amount</label>
                <input type="number" step="any" name="received_amount" id="received_amount" class="form-control" value="{{ old('received_amount', $editAsset->received_amount ?? '') }}">
            </div>

            <div class="form-group">
                <label for="due_amount">Due Amount</label>
                <input type="number" step="any" name="due_amount" id="due_amount" class="form-control" value="{{ old('due_amount', $editAsset->due_amount ?? '') }}">
            </div>

            <div class="form-group">
                <label for="fine_amount">Fine Amount</label>
                <input type="number" step="any" name="fine_amount" id="fine_amount" class="form-control" value="{{ old('fine_amount', $editAsset->fine_amount ?? '') }}">
            </div>

            <div class="form-group">
                <label for="vat_percent">VAT Amount/Percent</label>
                <input type="number" step="any" name="vat_percent" id="vat_percent" class="form-control" value="{{ old('vat_percent', $editAsset->vat_percent ?? '') }}">
            </div>

            <div class="form-group">
                <label for="received_amount_vat">Received Amount VAT</label>
                <input type="number" step="any" name="received_amount_vat" id="received_amount_vat" class="form-control" value="{{ old('received_amount_vat', $editAsset->received_amount_vat ?? '') }}">
            </div>

            <div class="form-group">
                <label for="tax_percent">Tax Amount/Percent</label>
                <input type="number" step="any" name="tax_percent" id="tax_percent" class="form-control" value="{{ old('tax_percent', $editAsset->tax_percent ?? '') }}">
            </div>

            <div class="form-group">
                <label for="payment_method">Payment Method</label>
                <input type="text" name="payment_method" id="payment_method" class="form-control" value="{{ old('payment_method', $editAsset->payment_method ?? '') }}">
            </div>

            <div class="form-group">
                <label for="challan_no">Challan No</label>
                <input type="text" name="challan_no" id="challan_no" class="form-control" value="{{ old('challan_no', $editAsset->challan_no ?? '') }}">
            </div>

            <div class="form-group">
                <label for="po_or_cheque_no">PO or Cheque No</label>
                <input type="text" name="po_or_cheque_no" id="po_or_cheque_no" class="form-control" value="{{ old('po_or_cheque_no', $editAsset->po_or_cheque_no ?? '') }}">
            </div>

            <div class="form-group">
                <label for="rate_active_from">Rate Active From</label>
                <input type="date" name="rate_active_from" id="rate_active_from" class="form-control" value="{{ old('rate_active_from', $editAsset->rate_active_from ?? '') }}">
            </div>

            <div class="form-group">
                <label for="rate_active_to">Rate Active To</label>
                <input type="date" name="rate_active_to" id="rate_active_to" class="form-control" value="{{ old('rate_active_to', $editAsset->rate_active_to ?? '') }}">
            </div>

            <div class="form-group full-width">
                <label for="remarks">Remarks</label>
                <textarea name="remarks" id="remarks" class="form-control" placeholder="Enter remarks">{{ old('remarks', $editAsset->remarks ?? '') }}</textarea>
            </div>
        </div>

        <div class="form-actions">
            @if(isset($editAsset))
                <a href="{{ route('occupied-assets.index') }}" class="btn btn-secondary">
                    <i class="fa-solid fa-xmark"></i> Cancel Edit
                </a>
            @endif
            <button type="submit" class="btn btn-primary">
                <i class="fa-solid {{ isset($editAsset) ? 'fa-floppy-disk' : 'fa-plus' }}"></i>
                {{ isset($editAsset) ? 'Update Record' : 'Save Record' }}
            </button>
        </div>
    </form>
</div>

<div class="card">
    <div class="card-title">
        <i class="fa-solid fa-list"></i> Occupied Assets List
    </div>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>Employee Name</th>
                    <th>Client Name</th>
                    <th>Mouza</th>
                    <th>Acre</th>
                    <th>Asset</th>
                    <th>Asset Type</th>
                    <th>Rental Type</th>
                    <th>Periodical Term</th>
                    <th>Received Amount</th>
                    <th>Due Amount</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($assets as $assetItem)
                    <tr>
                        <td>{{ $assetItem->employee_name }}</td>
                        <td>{{ $assetItem->client_name }}</td>
                        <td>{{ $assetItem->mouza_name }}</td>
                        <td>{{ $assetItem->unit_acr }}</td>
                        <td style="max-width: 250px; white-space: normal;">{{ $assetItem->asset_name }}</td>
                        <td>{{ $assetItem->asset_type }}</td>
                        <td>{{ $assetItem->rental_type }}</td>
                        <td>{{ $assetItem->periodical_term }}</td>
                        <td>{{ number_format($assetItem->received_amount ?? 0, 2) }}</td>
                        <td>{{ number_format($assetItem->due_amount ?? 0, 2) }}</td>
                        <td>
                            <div class="action-btns">
                                <a href="{{ route('occupied-assets.index', ['edit' => $assetItem->id]) }}" class="btn-icon btn-icon-edit" title="Edit">
                                    <i class="fa-solid fa-pen"></i>
                                </a>

                                <form action="{{ route('occupied-assets.destroy', $assetItem->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to soft delete this occupied asset record? (Status will be set to D)');" style="display: inline;">
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
                        <td colspan="11" style="text-align: center; color: var(--text-muted); padding: 2rem;">
                            No occupied assets found. Insert one above!
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
