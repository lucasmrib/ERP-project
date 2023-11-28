<div class="flex justify-end font-semibold pb-2">
    <a href="<?php echo HOME_URI.'records/register_employee'; ?>" class="flex items-center justify-center bg-indigo-400 hover:bg-indigo-300 w-36 rounded-lg p-1.5 mb-2 mr-4 ring-1 ring-indigo-500 gap-2">
        <i class="bx bx-plus"></i>
        New
    </a>
</div>

<div class="bg-zinc-800 p-4 rounded-lg text-zinc-300">
    <table id="table" class="table stripe hover py-4">
        <thead>
            <tr>
                <th>Name</th>
                <th>Login</th>
                <th>Access</th>
                <th>Status</th>
                <th class="dt-body-right" style="max-width: 50px;">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employees as $key => $value): ?>
                <tr>
                    <td><?php echo $value['name']; ?></td>
                    <td><?php echo $value['login']; ?></td>
                    <td><?php echo $value['access']; ?></td>
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
                        <div class="dropdown absolute right-2 z-10 mt-1 w-48 py-2 rounded-md bg-zinc-700 shadow-lg shadow-zinc-900 ring-1 ring-zinc-600 text-sm font-semibold hidden">
                            <a href="<?php echo HOME_URI.'records/display_employee/'.$value['uid_user']; ?>" class="flex items-center gap-3 px-4 py-2 hover:bg-zinc-800">
                                <i class="bx bx-edit"></i>
                                Display/Edit
                            </a>
                            <a name="change_status" id="<?php echo $value['uid_user']; ?>" class="flex items-center gap-3 px-4 py-2 hover:bg-zinc-800 cursor-pointer">
                                <i class="bx bx-home"></i>
                                Change Status
                            </a>
                            <a name="delete" id="<?php echo $value['uid_user']; ?>" class="flex items-center gap-3 px-4 py-2 hover:bg-zinc-800 cursor-pointer">
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

//Create the datatable
$("#table").DataTable({
    "columnDefs": [ {
        "targets": 3,
        "orderable": false
    }]
})

//Dropdown interaction
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


//Delete employee
$('[name=delete]').on('click', function() {

    var uid_user = this.id

    Swal.fire({
        title: 'Delete employee?',
        text: "This action cannot be undone",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Delete',
        cancelButtonText: 'Cancelar',
    }).then((result) => {

        if (result.value == true) {

            swal_fire_loading()

            $.post(url_home()+'records/delete_employee/'+uid_user, function(res) {
                if (res.error == 1) {
                    Swal.fire({title: res.title, icon: res.icone})
                }else{
                    Swal.fire({title: res.title, icon: res.icone}).then((value) => {
                        window.location.href=url_home()+'records/employees';
                    })
                }
            }, 'json')
            return false
        }
    })
})

//Change employee status
$('[name=change_status]').on('click', function() {

    var uid_user = this.id

    Swal.fire({
        title: 'Change status?',
        text: "Are you sure you want to change the status for this employee?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Update',
        cancelButtonText: 'Cancelar',
    }).then((result) => {

        if (result.value == true) {

            swal_fire_loading()

            $.post(url_home()+'records/change_employee_status/'+uid_user, function(res) {
                if (res.error == 1) {
                    Swal.fire({title: res.title, icon: res.icone})
                }else{
                    Swal.fire({title: res.title, icon: res.icone}).then((value) => {
                        window.location.href=url_home()+'records/employees';
                    })
                }
            }, 'json')
            return false
        }
    })
})
    
</script>