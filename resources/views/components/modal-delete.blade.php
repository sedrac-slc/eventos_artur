<div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="modalDeleteLabel" aria-hidden="true">
    <form class="modal-dialog" method="POST" id="form-delete">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h1 class="modal-title fs-5" id="modalDeleteLabel">
                    <i class="fa-solid fa-trash"></i>
                    {{ $title ?? 'Eliminar registro' }}
                </h1>
                <button type="button" class="text-white btn-none" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                {{ $text ?? 'Tens certeza que desejas eliminar este registro permanentemente' }}
                @csrf
                @method('DELETE')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                    <i class="fa-solid fa-trash"></i>
                    <span>cancelar</span>
                </button>
                <button type="submit" class="btn btn-primary">
                    <i class="fa-solid fa-save"></i>
                    <span>confirmar</span>
                </button>
            </div>
        </div>
    </form>
</div>

<script>
    (() => {

        const btnDelete = document.querySelectorAll('.btn-delete');
        const formDelete = document.querySelector("#form-delete");

        btnDelete.forEach(item => {
            item.addEventListener('click', (e) => {
                formDelete.action = item.value;
            })
        });

    })();
</script>
