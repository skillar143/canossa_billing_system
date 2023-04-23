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
                         <td class="text-center h5 font-weight-bold">per units</td>
                         <td class="text-center">P524</td>
                       </tr>
                       <tr>
                        <td class="text-center h5 font-weight-bold">units</td>
                        <td class="text-center">P{{ $firstyear }}</td>
                       </tr>
                       <tr>
                        <td class="text-center h5 font-weight-bold">Tuition</td>
                        <td class="text-center">P{{ ($firstyear)*524 }}</td>
                       </tr>
                    </tbody>

                    <tbody>
                        <tr>
                          <td class="text-center h5 font-weight-bold">per units</td>
                          <td class="text-center">P524</td>
                        </tr>
                        <tr>
                         <td class="text-center h5 font-weight-bold">units</td>
                         <td class="text-center">P{{ $firstyear }}</td>
                        </tr>
                        <tr>
                         <td class="text-center h5 font-weight-bold">Tuition</td>
                         <td class="text-center">P{{ ($firstyear)*524 }}</td>
                        </tr>
                     </tbody>
                </table>
            </div>


        </div>
        <div class="tab-pane fade" id="pills-fs" role="tabpanel" aria-labelledby="pills-profile-tab">1second</div>
      </div>
  </div>
