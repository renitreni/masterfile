<div>
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Options</h1>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Applicant Category
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 d-flex flex-row mb-3">
                            <input type="text" class="form-control" wire:model.debounce='applicantCategoryText'>
                            <button class="btn btn-primary" type="button" wire:click='addApplicantCategory'>Add</button>
                        </div>
                        <div class="col-12">
                            <ul class="list-group">
                                @foreach ($applicantCategory as $category)
                                    <li class="list-group-item d-flex justify-content-between">
                                        <div>{{ $category->name }}</div>
                                        <div>
                                            <button type="button" class="btn btn-sm btn-danger" wire:click="destroyApplicantCategory('{{ $category->id }}')">Remove</button>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
