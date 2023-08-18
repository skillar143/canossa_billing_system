<form  action="{{ route('managefees.store',["$course->id" ,"3"]) }}" method="POST">
    @csrf
        <div class="" id="subject">
            <div class="form-row">
                <div class="mt-3">
                    <label>Semester</label>
                    <select class="custom-select" name="semester" required>
                      <option selected disabled value="">Choose...</option>
                      <option value="1">1st Sem</option>
                      <option value="2">2nd Sem</option>
                    </select>
                </div>
            </div>
            <div class="form-group inputs_div m-4">
              <div class="form-row d-flex align-items-center">
                <div class="col mb-3">
                  <label for="validationCustom03">Add Subject</label>
                  <select name="code[]" id="c" class="form-control" required>
                  <option selected disabled value="">Choose...</option>

                    <option  value="asdw">asdwww</option>

                  </select>
                </div>
                <div class="col-2">
                    <input type="text" placeholder="Units" name="unit[]" class="form-control mt-3 mr-1" required>
                </div>
                  <i class="fas fa-plus-square mr-2 mt-3 text-success addFirst" style="font-size: 2rem"></i>
                  <i class="fas fa-minus-square mt-3 text-danger" style="font-size: 2rem"></i>
              </div>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-sm btn-outline-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-sm btn-outline-success" >Save</button>
        </div>

    </form>




   
