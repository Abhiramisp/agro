<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>AgriConnect - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('selectionDropdown').addEventListener('change', function () {
                var selectedOption = this.value;
                var detailsContainer = document.getElementById('detailsContainer');

                if (selectedOption === 'showDetails') {
                    detailsContainer.style.display = 'block'; // Show the container
                } else {
                    detailsContainer.style.display = 'none'; // Hide the container if another option is selected
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
        var approveButton = document.getElementById('approveButton');
        var rejectButton = document.getElementById('rejectButton');

        approveButton.addEventListener('click', function() {
            approveButton.style.display = 'none';
            rejectButton.style.display = 'block';
        });

        rejectButton.addEventListener('click', function() {
            rejectButton.style.display = 'none';
            approveButton.style.display = 'block';
        });
    });
    
    </script>



    <script type="text/javascript">
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
    <style>
        .alt-row-odd th {
            /* text-align: left; */
            align-items: left;
            /* Set text alignment for odd rows */
        }

        .alt-row-even th {
            /* text-align: right; */
            align-items: right;
            /* Set text alignment for even rows */
        }

        .abc {
            text-decoration: none;
        }
    </style>

</head>