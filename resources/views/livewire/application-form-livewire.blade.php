<div>
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Application Form</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    General Information
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label>Name</label>
                            <input type="text" class="form-control" wire:model='generalInfo.name'>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Birth Date</label>
                            <input type="date" class="form-control" wire:model='generalInfo.birthdate'>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Religion</label>
                            <select class="form-control" wire:model='generalInfo.religion_id'>
                                <option value="">unspecified</option>
                                @foreach ($religion as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Application Date</label>
                            <input type="date" class="form-control" wire:model='generalInfo.application_date'>
                        </div>
                        <div class="col-12"></div>
                        <div class="col-md-3 mb-3">
                            <label>Position</label>
                            <input type="text" class="form-control" wire:model='generalInfo.position'>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Position Category</label>
                            <input type="text" class="form-control" wire:model='generalInfo.position_category'>
                        </div>
                        <div class="col-12"></div>
                        <div class="col-md-3 mb-3">
                            <label>Phone No.</label>
                            <input type="text" class="form-control" wire:model='generalInfo.contact_no'>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>E-mail</label>
                            <input type="text" class="form-control" wire:model='generalInfo.email'>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Facebook</label>
                            <input type="text" class="form-control" wire:model='generalInfo.facebook'>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Jobsite</label>
                            <input type="text" class="form-control"  wire:model='generalInfo.jobsite'>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Gender</label>
                            <select class="form-control" wire:model='generalInfo.gender'>
                                <option value="">unspecified</option>
                                @foreach ($genders as $item)
                                    <option value="{{ $item->value }}">{{ $item->value }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Civil Status</label>
                            <select class="form-control" wire:model='generalInfo.civil_status'>
                                <option value="">unspecified</option>
                                @foreach ($civilStatus as $item)
                                    <option value="{{ $item->value }}">{{ $item->value }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Applicant Category</label>
                            <select class="form-control" wire:model='generalInfo.applicant_category_id'>
                                <option value="">unspecified</option>
                                @foreach ($applicantCategory as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Applicant Type</label>
                            <select class="form-control" wire:model='generalInfo.applicant_type_id'>
                                <option value="">unspecified</option>
                                @foreach ($applicantType as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12"></div>
                        <div class="col-md-6">
                            <label>Short Address</label>
                            <textarea class="form-control" wire:model='generalInfo.short_address'></textarea>
                        </div>
                        <div class="col-md-6">
                            <label>Complete Address</label>
                            <textarea class="form-control" wire:model='generalInfo.complete_address'></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
