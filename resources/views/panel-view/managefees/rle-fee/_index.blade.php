<div class="card m-1 shadow" style="width: fit-content;">
    <div class="card-body">
        <h5 class="card-title">RLE Per Units</h5>
        <div class="table-responsive">
            <table class="table "  sort="asc" width="100%" cellspacing="0">
                <tbody class="border-1">
                   <tr>
                     <td class=" font-weight-bold">Per Units</td>
                     <td class="">{{ '₱' .number_format($rle, 2, '.', ',') }}</td>
                     <td>
                         <a href="#" class="btn btn-sm btn-outline-success btn-icon-split" data-toggle="modal" data-target="#cost_per_rle">
                             <span class="icon">
                                 <i class="fas fa-pen text-success"></i>
                             </span>
                             <span class="text">Edit</span>
                         </a>
                     </td>
                   </tr>
                   <tr>
                    <td class=" font-weight-bold">Units</td>
                    <td class="">{{ $rleUnits['year'.$year]['semester'.$semester] }}</td>
                    <td></td>
                   </tr>
                   <tr>
                    <td class=" font-weight-bold">Tuition (Regular Student)</td>
                    <td class="">{{ '₱' .number_format(($rleUnits['year'.$year]['semester'.$semester])*$rle, 2, '.', ',' )}}</td>
                    <td></td>
                   </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

