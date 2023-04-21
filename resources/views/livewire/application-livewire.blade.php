<div>
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Applications</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-auto">
                            <a href="{{ route('application-form') }}" class="btn btn-success w-100">New Applicant</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <livewire:application-table />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
