<div>
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Application Form</h1>
    <div class="row mb-4 px-0">
        <div class="col-auto">
            <a href="{{ route('applications') }}" class="btn btn-secondary w-100">Cancel</a>
        </div>
        <div class="col-auto px-0">
            <button wire:click='save' type="button" class="btn btn-info w-100">Save Changes</button>
        </div>
        <div class="col-auto">
            <button type="button" class="btn btn-danger w-100" data-toggle="modal" data-target="#deleteModal">
                Delete
            </button>
            <!-- Modal -->
            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            This data will be permanently deleted. Please confirm
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger" wire:click='delete'>Yes, delete this</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mb-4">
            <div class="card shadow-sm">
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
                            <input type="text" class="form-control" wire:model='generalInfo.jobsite'>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Gender</label>
                            <select class="form-control" wire:model='generalInfo.gender'>
                                <option value="">unspecified</option>
                                @foreach ($genders as $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Civil Status</label>
                            <select class="form-control" wire:model='generalInfo.civil_status'>
                                <option value="">unspecified</option>
                                @foreach ($civilStatus as $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
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
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm mb-3">
                <div class="card-header">
                    Educational Background
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <button type="button" class="btn btn-primary w-100"
                                wire:click='addEntry("education")'>Add Entry</button>
                        </div>
                        @foreach (array_reverse($educational, true) as $idx => $item)
                            <div class="col-12">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="row mb-3">
                                            <div class="col-12 mb-3 d-flex justify-content-end">
                                                <button wire:click='removeEntry("education", {{ $idx }})'
                                                    class="btn btn-sm btn-outline-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                            <div class="col-4">
                                                <label>Level</label>
                                                <select class="form-control"
                                                    wire:model='educational.{{ $idx }}.level'>
                                                    <option value="">unspecified</option>
                                                    @foreach ($levels as $item)
                                                        <option value="{{ $item }}">{{ $item }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-4">
                                                <label>Course</label>
                                                <input type="text" class="form-control"
                                                    wire:model='educational.{{ $idx }}.course'>
                                            </div>
                                            <div class="col-4">
                                                <label>Year Graduated</label>
                                                <input type="text" class="form-control"
                                                    wire:model='educational.{{ $idx }}.year_graduate'>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label>Address</label>
                                            <input type="text" class="form-control"
                                                wire:model='educational.{{ $idx }}.address'>
                                        </div>
                                        <div class="mb-3">
                                            <label>Awards</label>
                                            <input type="text" class="form-control"
                                                wire:model='educational.{{ $idx }}.awards'>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card shadow mb-3">
                <div class="card-header">
                    Work History
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <button type="button" class="btn btn-primary w-100" wire:click='addEntry("work")'>Add
                                Entry</button>
                        </div>
                        @foreach (array_reverse($workHistory, true) as $idx => $item)
                            <div class="col-12">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="col-12 mb-3 d-flex justify-content-end">
                                            <button wire:click='removeEntry("work", {{ $idx }})'
                                                class="btn btn-sm btn-outline-danger">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                        <div class="mb-3">
                                            <label>Company Name</label>
                                            <input type="text" class="form-control"
                                                wire:model='workHistory.{{ $idx }}.company_name'>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-2">
                                                <label>Yrs. Exp.</label>
                                                <input type="text" class="form-control"
                                                    wire:model='workHistory.{{ $idx }}.years_experience'>
                                            </div>
                                            <div class="col-5">
                                                <label>Position</label>
                                                <input type="text" class="form-control"
                                                    wire:model='workHistory.{{ $idx }}.position'>
                                            </div>
                                            <div class="col-5">
                                                <label>Contact Number</label>
                                                <input type="text" class="form-control"
                                                    wire:model='workHistory.{{ $idx }}.contact_no'>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label>Address</label>
                                            <input type="text" class="form-control"
                                                wire:model='workHistory.{{ $idx }}.address'>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
