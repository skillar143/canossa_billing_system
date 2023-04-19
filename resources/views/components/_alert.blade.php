<div class="position-absolute col-10 d-flex mt-0 mr-3 " style="z-index:10">
    <div class="ml-auto p-2">
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show position-absulote" role="alert">
    {{ session('success') }}.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
@elseif(session('delete'))
<div class="alert alert-danger alert-dismissible fade show position-absulote" role="alert">
    {{ session('delete') }}.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
@elseif(session('update'))
<div class="alert alert-info alert-dismissible fade show position-absulote" role="alert">
    {{ session('update') }}.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @elseif(session('error'))
    <div class="alert alert-warning alert-dismissible fade show position-absulote" role="alert">
    {{ session('error') }}.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
@elseif(session('wrong'))
<div class="alert alert-danger alert-dismissible fade show position-absulote" role="alert">
    {{ session('wrong') }}.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @elseif(session('notmatch'))
    <div class="alert alert-warning alert-dismissible fade show position-absulote" role="alert">
    {{ session('notmatch') }}.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
@endif 
    </div>           
</div>

            