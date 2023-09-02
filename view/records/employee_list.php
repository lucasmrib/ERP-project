<div class="bg-zinc-800 p-4 rounded-lg text-zinc-300">
    <table id="table" class="table stripe py-4">
        <thead>
            <tr>
                <th>Name</th>
                <th>Login</th>
                <th>Status</th>
                <th class="dt-body-right" style="max-width: 50px;">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employees as $key => $value): ?>
                <tr>
                    <td><?php echo $value['name']; ?></td>
                    <td><?php echo $value['login']; ?></td>
                    <td>
                        <?php switch($value['status']){
                            case 1:
                                echo '<span class="text-green-400">Active</span>';
                                break;
                            case 0:
                                echo '<span class="text-red-400">Inactive</span>';
                                break;
                        } ?>
                    </td>
                    <td class="dt-body-right">
                        <a class="has-dropdown rounded-full px-0.5 cursor-pointer text-lg hover:bg-zinc-700">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </a>
                        <div class="dropdown absolute right-2 z-10 mt-1 w-48 py-1 rounded-md bg-zinc-700 shadow-lg shadow-zinc-900 ring-1 ring-zinc-600 font-semibold hidden">
                            <a href="#" class="flex items-center gap-3 px-4 py-2 text-sm hover:bg-zinc-800">
                                <i class="bx bx-edit"></i>
                                Display/Edit
                            </a>
                            <a href="#" class="flex items-center gap-3 px-4 py-2 text-sm hover:bg-zinc-800">
                                <i class="bx bx-home"></i>
                                Change Status
                            </a>
                            <a href="#" class="flex items-center gap-3 px-4 py-2 text-sm hover:bg-zinc-800">
                                <i class="bx bx-trash"></i>
                                Delete
                            </a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">

    $("#table").DataTable({
        "columnDefs": [ {
            "targets": 3,
            "orderable": false
        }]
    })

    $(".has-dropdown").on("click", function(){
        var dropdown = $(this).next()

        if(dropdown.hasClass('hidden')){
            $(".dropdown").addClass('hidden')
            dropdown.removeClass('hidden')
        }else{
            dropdown.addClass('hidden')
        }
    })

    $(document).on('click', function (e) {
        if ($(e.target).closest(".has-dropdown").length === 0 && $(e.target).closest(".dropdown").length === 0) {
            $(".dropdown").addClass('hidden')
        }
    })
    
</script>