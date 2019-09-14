<div id="modalAdd" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Data</h5>
        <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="addData" action="" method="post">
            <div class="row form-group">
                <div class="col-md-12">
                    <input type="text" class="form-control" placeholder="Salary" name="salary">
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning text-white font-weight-bold" id="saveData">ADD</button>
      </div>
    </div>
  </div>
</div>

<div id="modalEdit" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Data</h5>
        <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            
        <form id="EditData" action="" method="post">
            <div class="row form-group">
                <div class="col-md-12">
                    <input type="text" class="form-control" placeholder="Salary" name="salary">
                </div>
            </div>
            <input type="hidden" name='id'>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning text-white font-weight-bold" id="updateData">EDIT</button>
      </div>
    </div>
  </div>
</div>

<script>
    (function(){
        <?php if($this->session->flashdata('success_delete')){ ?>
        Swal.fire({
            type: 'success',
            title: 'Data <?= $this->session->flashdata('success_delete'); ?> telah berhasil dihapus!',
            showConfirmButton: false,
            timer: 1000,
            showCloseButton: true
        })
        <?php } ?>
        $(".open-modal-edit").on("click", function(){
            var salary_id = $(this).data("salary");
            var id = $(this).data("i");
            $("#EditData [name='salary']").val(salary_id);
            $("#EditData [name='id']").val(id);
            $("#modalEdit").modal()
        });
        $(".open-modal-add").on("click", function(){
            $("#modalAdd").modal()
        });
        $("#saveData").on("click", function(){
            $("#addData").submit();
        });
        $("#addData").on("submit", function(e){
            if(($(this).find("[name='salary']").val()=="")){
                e.preventDefault();
            }

        });

        $("#updateData").on("click", function(){
            $("#EditData").submit();
        });

        $("#EditData").on("submit", function(e){
            if(($(this).find("[name='salary']").val()=="")){
                e.preventDefault();
            }

        });
    })();
</script>