<div class="card m-1 shadow w-100" >
    <div class="card-body">
        <h5 class="card-title mr-3 text-dark">Tuition fee</h5>
        <div class="table-responsive">
            <table class="table "  sort="asc" width="100%" cellspacing="0">
                <tbody class="border-1">
                   <tr>
                     <td class="">Per Units</td>
                     <td class="">{{ '₱' .number_format($unit, 2, '.', ',') }}</td>
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
                    <td class="">Units</td>
                    <td class="">{{ $curr['year'.$year]['semester'.$semester] }}</td>
                    <td></td>
                   </tr>
                   <tr>
                    <td class=" font-weight-bold">Tuition (Regular Student)</td>
                    <td class="">{{ '₱' .number_format(($curr['year'.$year]['semester'.$semester])*$unit, 2, '.', ',' )}}</td>
                    <td></td>
                   </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

