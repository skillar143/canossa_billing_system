<div class="card m-1" style="width: 20rem;">
    <div class="card-body">
        <h5 class="card-title">Tuition fee</h5>
        <div class="table-responsive">
            <table class="table "  sort="asc" width="100%" cellspacing="0">
                <tbody class="border-1">
                   <tr>
                     <td class="text-center font-weight-bold">Per Units</td>
                     <td class="text-center">{{ '₱' .number_format($unit, 2, '.', ',') }}</td>
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
                    <td class="text-center">{{ $curr['firstyear_firstsem'] }}</td>
                    <td></td>
                   </tr>
                   <tr>
                    <td class="text-center font-weight-bold">Tuition (Regular Student)</td>
                    <td class="text-center">{{ '₱' .number_format(($curr['firstyear_firstsem'])*$unit), 2, '.',',' }}</td>
                    <td></td>
                   </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
