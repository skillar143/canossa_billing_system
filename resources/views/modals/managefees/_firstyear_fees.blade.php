<div class="">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="btn btn-outline-primary btn-sm  mx-1 active mx-1" id="pills-home-tab" data-toggle="pill"
            data-target="#pills-ff" type="button" role="tab" aria-controls="pills-home" aria-selected="true">1<sup>st</sup> Semester</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="btn btn-outline-primary btn-sm  mx-1 mx-1" id="pills-profile-tab" data-toggle="pill"
            data-target="#pills-fs" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">2<sup>nd</sup> Semester</button>
        </li>
    </ul>
</div>
<hr class="sidebar-divider d-none d-md-block">
  <div class="card-body">
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-ff" role="tabpanel" aria-labelledby="pills-home-tab">

            <div class="table-responsive">
                <table class="table "  sort="asc" width="100%" cellspacing="0">
                    <tbody class="border-1">
                       <tr>
                         <td class="text-center font-weight-bold">Per Units</td>
                         <td class="text-center"><span>&#8369;</span>{{ $unit }}</td>
                         <td>
                             <a href="#" class="btn btn-sm btn-outline-success btn-icon-split" data-toggle="modal" data-target="#cost_per_unit">
                                 <span class="icon">
                                     <i class="fas fa-pen text-success"></i>
                                 </span>
                                 <span class="text">Edit</span>
                             </a>
                         </td>
                       </tr>
                       <tr>
                        <td class="text-center font-weight-bold">Units</td>
                        <td class="text-center">{{ $firstyear }}</td>
                        <td></td>
                       </tr>
                       <tr>
                        <td class="text-center font-weight-bold">Tuition (Regular Student)</td>
                        <td class="text-center"><span>&#8369;</span>{{ ($firstyear)*$unit }}</td>
                        <td></td>
                       </tr>
                    </tbody>
                </table>
            </div>


        </div>
        <div class="tab-pane fade" id="pills-fs" role="tabpanel" aria-labelledby="pills-profile-tab">1second</div>
      </div>
  </div>


