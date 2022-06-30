<div class="modal fade" id="modal-xl">
    <div class="modal-dialog modal-lg">
        <div class="modal-content card card-primary card-outline">

            <form name="dForm" action="{{ route('register_from_dash.perform') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <label for="id_type" class="form-label">Type</label>
                        <select name="id_type" class="form-control" aria-label="Default select example" required>
                            <option disabled selected value="">Select Type</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer justify-content-between bg-grey">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="btnsave" disabled>Save</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<script>
    function validate() {
        let form = document.dForm;
        let resultValidate =
            form.name.value != '' &&
            form.email.value != '' &&
            form.password.value != '' &&
            form.password_confirmation.value != '';

        if (resultValidate)
            form.btnsave.disabled = false
        else
            form.btnsave.disabled = true
    }
</script>