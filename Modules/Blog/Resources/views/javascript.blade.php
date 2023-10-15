@push('after-script')
    <script type="text/javascript">
        $(function() {
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('blog.table') }}",
                columns: [
                    {
                        data: 'DT_RowIndex',
                        name: 'id',
                        searchable: false,
                        orderable:false,
                    },
                    {
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'description',
                        name: 'description'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });
        });

        // Event listener untuk tombol "Edit"
document.getElementById("data-table").addEventListener("click", function(event) {
  if (event.target.classList.contains("edit-button")) {
    const row = event.target.parentElement.parentElement;
    const cells = row.querySelectorAll("td");

    cells.forEach(cell => {
      const input = document.createElement("input");
      input.value = cell.innerText;
      cell.innerText = "";
      cell.appendChild(input);
    });

    row.querySelector(".edit-button").style.display = "none";
    row.querySelector(".save-button").style.display = "block";
  }
});
    </script>
@endpush
