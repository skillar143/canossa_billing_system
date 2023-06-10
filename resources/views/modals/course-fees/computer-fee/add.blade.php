
<div class="modal fade" id="addFeeCF" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-light" id="titleCF"></h5>
                <button class="close text-light" type="button" data-dismiss="modal" aria-label="Close">
                <i class="fa fa-window-close" aria-hidden="true"></i>
                </button>
            </div>
            <form id="feeAddCF" method="post">
                @csrf
                <div class="modal-body p-5">

                    <div class="form-group inputs_CF ">
                        <div class="form-row d-flex align-items-center ">
                            <div class="col mb-3">
                              <label for="validationCustom03">Add Fee</label>
                              <select class="custom-select" name="description[]" required>
                                  <option selected disabled value="">Choose Fee</option>
                                  @forelse($fees->where('type', 0) as $fee)
                                    <option value="{{ $fee->id }}">{{ $fee->description }}</option>
                                  @empty
                                  <option value="">No Fees</option>
                                  @endforelse
                                </select>
                            </div>

                                <input type="hidden" class="form-control mt-3 mr-1" name="amount[]" value="0" autocomplete="off"
                                placeholder="Amount" required>

                            <i class="fas fa-plus-square mr-2 mt-3 text-success addCF" style="font-size: 2rem"></i>
                            <i class="fas fa-minus-square mt-3 text-danger" style="font-size: 2rem"></i>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-outline-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-sm btn-outline-success" onclick="document.getElementById('feeAddCF').submit()">Add</button>
                </div>

            </form>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    $(this).on("click", ".addCF", function()
      {var html =
        '<div class="form-row d-flex align-items-center">\
      <div class="col mb-3">\
        <select class="custom-select mt-3" name="description[]" required>\
            <option selected disabled value="">Choose Fee</option>\
            @forelse($fees->where('type', 0) as $fee)\
              <option value="{{ $fee->id }}">{{ $fee->description }}</option>\
            @empty\
            <option value="">No Fees</option>\
            @endforelse\
          </select>\
      </div>\
        <input type="hidden" class="form-control mt-3 mr-1" name="amount[]" autocomplete="off"\
        placeholder="Amount" value="0" required>\
        <i class="fas fa-plus-square mr-2  text-success addCF" style="font-size: 2rem"></i>\
        <i class="fas fa-minus-square  text-danger removeCF" style="font-size: 2rem"></i>\
    </div>'
      $('.inputs_CF').append(html);
    // console.log('hello');
    });

    $(this).on("click", ".removeCF", function(){
      var target_input = $(this).parent();
        target_input.remove();
    });
  });
</script>

